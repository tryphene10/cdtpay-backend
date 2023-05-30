<?php

namespace App\Http\Controllers\API;

use App\Models\Classe;
use App\Models\Role;
use App\Models\Statut_eleve;
use Exception;
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
//use Validator;
use Illuminate\Http\JsonResponse;

class RegisterController extends BaseController
{
    /**
     * Register api
     *
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request): JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'name' => 'String',
            'surname' => 'string|nullable',
            'classe' => 'required',
            'birthday' => 'required',
            'sex' => 'required',
            'role' => 'required',
            'father_name' => 'string|required',
            'mother_name' => 'nullable',
            'father_phone' => 'required',
            'mother_phone' => 'nullable',
            'nationalite' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'c_password' => 'required|same:password',
        ]);

        if($validator->fails()){
            if (!empty($validator->errors()->all()))
            {
                foreach ($validator->errors()->all() as $error)
                {
                   /* $errors->push([
                        'code'=> $error
                    ]);*/
                    return $this->sendError('verifier vos informations', $error);
                }
            }

        }
        $role = Role::where('ref', '=',$request->get('role'))->first();
        $classe = Classe::where('ref', '=', $request->get('classe'))->first();
        $statutEl = Statut_eleve::where('designation', '=','inscription en cours')->first();
        DB::beginTransaction();
        try {


            $objUser = new User();
            $objUser->name = $request->get('name');
            $objUser->surname = $request->get('surname');
            $objUser->classe()->associate($classe);
            $objUser->birthday = $request->get('birthday');
            $objUser->role()->associate($role);
            $objUser->statut_eleve()->associate($statutEl);
            $objUser->sex = $request->get('sex');
            $objUser->father_name = $request->get('father_name');
            $objUser->mother_name = $request->get('mother_name');
            $objUser->father_phone = $request->get('father_phone');
            $objUser->mother_phone = $request->get('mother_phone');
            $objUser->nationalite = $request->get('nationalite');
            $objUser->email = $request->get('email');
            $objUser->password = $request->get('password');
            $objUser->published = 0;
            $objUser->generateReference();
            $objUser->save();

        }catch (Exception $objException) {
            DB::rollback();
            return $this->sendError('une exception a été levé', $objException);
        }
        /*$input = $request->all();
        $classe = Classe::where('ref', '=', $request['classe'])->first();


        $input['password'] = bcrypt($input['password']);
        $input['published'] = 0;
        $input['classe'] = $classe->id;
/*        $input->classe()->associate($classe);*/
//        $user = User::create($input);
        $success['token'] =  $objUser->createToken('CDT')->plainTextToken;
        $success['name'] =  $objUser;

        return $this->sendResponse($success, 'User register successfully. now, pay your school fees');
    }

    /**
     * Login api
     *
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request): JsonResponse
    {
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
            $user = Auth::user();
            $success['token'] =  $user->createToken('MyApp')->plainTextToken;
            $success['name'] =  $user;

            return $this->sendResponse($success, 'User login successfully.');
        }
        else{
            return $this->sendError('Unauthorised.', ['error'=>'Unauthorised']);
        }

    /* try {
            $validateUser = Validator::make($request->all(),
                [
                    'email' => 'required|email',
                    'password' => 'required'
                ]);

            if($validateUser->fails()){
                return response()->json([
                    'status' => false,
                    'message' => 'validation error',
                    'errors' => $validateUser->errors()
                ], 401);
            }

            if(!Auth::attempt($request->only(['email', 'password']))){
                return response()->json([
                    'status' => false,
                    'message' => 'Email & Password does not match with our record.',
                ], 401);
            }

            $user = User::where('email', $request->email)->first();

            return response()->json([
                'status' => true,
                'message' => 'User Logged In Successfully',
                'token' => $user->createToken("API TOKEN")->plainTextToken,
                'data' => $user
            ], 200);

        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => $th->getMessage()
            ], 500);
        }*/
    }

    //logout function

    public function logout(Request $request){
        auth()->user()->tokens()->delete();
        return [
            'message' => 'déconnection reussie'
        ];
    }

    public function listusers(){
        $user = Auth::user();

        if (empty($user)){
            return $this->sendError('01',['error'=>'Cette action nécéssite une connexion.']);
        }
        $objAuthRole = Role::where("id", $user->role_id)->first();
        if ($objAuthRole->name != 'eleve'){
            $listUser = User::where('role_id', '=', 1)->get()->paginate(20);
            return $this->sendResponse($listUser, 'liste des élèves');
        }else{
            return $this->sendError('02',['error'=>'Cette action nécéssite une autorisation.']);
        }

    }

    public function inscriptionEleves(){

    }
    public function detailEleve(){
        $allUserDetail = [];
        $el = auth::user();
        if (!empty($el)){
            $user = DB::table('users')
                ->join('classes','classes.id', '=','users.classe_id')
                ->join('annee_scolaires','annee_scolaires.id', '=','users.annee_scolaire_id')
                ->join('statut_eleves','statut_eleves.id', '=','users.statut_eleve_id')
                ->join('pensions','pensions.id', '=','users.pension_id')
                ->select(
                    'users.name as name',
                    'users.surname as surname',
                    'users.birthday as birthday',
                    'users.sex as Sexe',
                    'users.father_name as father_name',
                    'users.mother_name as mother_name',
                    'users.father_phone as num_pere',
                    'users.mother_phone as num_mere',
                    'users.nationalite as nationalite',
                    'classes.designation as classe',
                    'classes.pension_id as pension_id',
                    'annee_scolaires.name as annee_academic',
                    'statut_eleves.designation as statut_eleve',
                    'pensions.montant_total as pension',
                )->where('users.published','=', 1)
                ->first();
            $tranche = DB::table('tranches')
                ->join('intitule_tranches','intitule_tranches.id', '=','tranches.intitule_tranche_id')
                ->join('cycles','cycles.id', '=','tranches.cycle_id')
                ->select(
                    'intitule_tranches.designation as tranche',
                    'cycles.designation as cycle',
                    'tranches.montant as montant',
                    'tranches.ref as ref_tranche',
                )
                ->where('tranches.pension_id','=', $user->pension_id)
                ->get();
        }else{
            return $this->sendError('02',['error'=>'Cette action nécéssite une autorisation.']);
        }
        $allUserDetail = [
            'info_user' => $user,
            'dif_tranches' => $tranche
        ];
        return $this->sendResponse($allUserDetail, 'detail de élève');
    }

    public function listelevebyclasse(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'ref_classe' => 'String|required',
        ]);

        if($validator->fails()){
            if (!empty($validator->errors()->all()))
            {
                foreach ($validator->errors()->all() as $error)
                {
                    return $this->sendError('verifier vos informations', $error);
                }
            }
        }
        $user = Auth::user();

        if (empty($user)){
            return $this->sendError('01',['error'=>'Cette action nécéssite une connexion.']);
        }
        $objAuthRole = Role::where('id', $user->role_id)->first();
        if ($objAuthRole->name != 'eleve'){
            $classe = Classe::where('ref', '=', $request->get('ref_classe'))->first();
            $listUser = User::where('classe_id', '=', $classe->id)->get();
            return $this->sendResponse($listUser, 'liste des élèves de'. $classe->designation);
        }else{
            return $this->sendError('02',['error'=>'Cette action nécéssite une autorisation.']);
        }

    }
}
