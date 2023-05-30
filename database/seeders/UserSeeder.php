<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // ajout de seeder Eleve
        $objUser = new User();
        $objUser->role_id = 1;
        $objUser->classe_id = 1;
        $objUser->annee_scolaire_id = 6;
        $objUser->statut_eleve_id = 4;
        $objUser->pension_id = 1;
        $objUser->name = 'Jean Mbarga ';
        $objUser->surname = 'Eleve 1';
        $objUser->birthday = '2001';
        $objUser->sex = 'Masculin';
        $objUser->father_name = 'Mbarga';
        $objUser->mother_name = 'Alica Mbarga';
        $objUser->father_phone = '655882211';
        $objUser->mother_phone = '672114455';
        $objUser->nationalite = 'Camerounaise';
        $objUser->email = 'jeanmbarga@gmail.com';
        $objUser->password = Hash::make('12345678');;
        $objUser->published   = 1;
        $objUser->generateReference();
        $objUser->save();
        if(!$objUser->save())
        {
            $this->command->info("Fail Seeded Role: Administrateur");
        }else{
            $this->command->info("Seeded Role: ". $objUser->designation);
        }

        $objUser = new User();
        $objUser->role_id = 1;
        $objUser->classe_id = 4;
        $objUser->annee_scolaire_id = 6;
        $objUser->statut_eleve_id = 3;
        $objUser->pension_id = 2;
        $objUser->name = 'Noel Casteleto ';
        $objUser->surname = 'Eleve 3';
        $objUser->birthday = '1998';
        $objUser->sex = 'Feminin';
        $objUser->father_name = 'Pierre Paul';
        $objUser->mother_name = 'Alicia Kare';
        $objUser->father_phone = '655112211';
        $objUser->mother_phone = '678414425';
        $objUser->nationalite = 'Camerounaise';
        $objUser->email = 'noelcasteleto@gmail.com';
        $objUser->password = Hash::make('12345678');;
        $objUser->published   = 1;
        $objUser->generateReference();
        $objUser->save();
        if(!$objUser->save())
        {
            $this->command->info("Fail Seeded Role: Administrateur");
        }else{
            $this->command->info("Seeded Role: ". $objUser->designation);
        }

        $objUser = new User();
        $objUser->role_id = 1;
        $objUser->classe_id = 1;
        $objUser->annee_scolaire_id = 6;
        $objUser->statut_eleve_id = 4;
        $objUser->pension_id = 1;
        $objUser->name = 'Samuel 9 ';
        $objUser->surname = 'Eleve 1';
        $objUser->birthday = '2022';
        $objUser->sex = 'Masculin';
        $objUser->father_name = 'Mbarga Samuel';
        $objUser->mother_name = 'Nguemo pierre';
        $objUser->father_phone = '655881411';
        $objUser->mother_phone = '672414455';
        $objUser->nationalite = 'Camerounaise';
        $objUser->email = 'samuel9@gmail.com';
        $objUser->password = Hash::make('12345678');;
        $objUser->published   = 1;
        $objUser->generateReference();
        $objUser->save();
        if(!$objUser->save())
        {
            $this->command->info("Fail Seeded Role: Administrateur");
        }else{
            $this->command->info("Seeded Role: ". $objUser->designation);
        }

        // Intendant

        $objUser = new User();
        $objUser->role_id = 2;
        $objUser->name = 'Guelemo assign ';
        $objUser->surname = 'intendant';
        $objUser->birthday = '1992';
        $objUser->sex = 'Masculin';
        $objUser->nationalite = 'Camerounaise';
        $objUser->email = 'intendant@cplan.com';
        $objUser->password = Hash::make('12345678');;
        $objUser->published   = 1;
        $objUser->generateReference();
        $objUser->save();
        if(!$objUser->save())
        {
            $this->command->info("Fail Seeded Role: Administrateur");
        }else{
            $this->command->info("Seeded Role: ". $objUser->designation);
        }

        // admin

        $objUser = new User();
        $objUser->role_id = 4;
        $objUser->name = 'Admin';
        $objUser->surname = 'Admin can be provisor';
        $objUser->birthday = '1989';
        $objUser->sex = 'Masculin';
        $objUser->nationalite = 'Camerounaise';
        $objUser->email = 'admin@cplan.com';
        $objUser->password = Hash::make('12345678');;
        $objUser->published   = 1;
        $objUser->generateReference();
        $objUser->save();
        if(!$objUser->save())
        {
            $this->command->info("Fail Seeded Role: Administrateur");
        }else{
            $this->command->info("Seeded Role: ". $objUser->designation);
        }

        //secretaire

        $objUser = new User();
        $objUser->role_id = 3;
        $objUser->name = 'noella Anais';
        $objUser->surname = 'Secretaire';
        $objUser->birthday = '1992';
        $objUser->sex = 'Feminin';
        $objUser->nationalite = 'Camerounaise';
        $objUser->email = 'secretaire@cplan.com';
        $objUser->password = Hash::make('12345678');;
        $objUser->published   = 1;
        $objUser->generateReference();
        $objUser->save();
        if(!$objUser->save())
        {
            $this->command->info("Fail Seeded Role: Administrateur");
        }else{
            $this->command->info("Seeded Role: ". $objUser->designation);
        }
    }
}
