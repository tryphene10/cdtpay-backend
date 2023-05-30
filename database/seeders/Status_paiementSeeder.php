<?php

namespace Database\Seeders;

use App\Models\Statut_paiement;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Status_paiementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $objPayStatus = new Statut_paiement();
        $objPayStatus->designation = 'Echec';
        $objPayStatus->published   = 1;
        $objPayStatus->generateReference();
        $objPayStatus->save();
        if(!$objPayStatus->save())
        {
            $this->command->info("Fail Seeded Role: Administrateur");
        }else{
            $this->command->info("Seeded Role: ". $objPayStatus->designation);
        }

        $objPayStatus = new Statut_paiement();
        $objPayStatus->designation = 'Success';
        $objPayStatus->published   = 1;
        $objPayStatus->generateReference();
        $objPayStatus->save();
        if(!$objPayStatus->save())
        {
            $this->command->info("Fail Seeded Role: Administrateur");
        }else{
            $this->command->info("Seeded Role: ". $objPayStatus->designation);
        }

        $objPayStatus = new Statut_paiement();
        $objPayStatus->designation = 'initie';
        $objPayStatus->published   = 1;
        $objPayStatus->generateReference();
        $objPayStatus->save();
        if(!$objPayStatus->save())
        {
            $this->command->info("Fail Seeded Role: Administrateur");
        }else{
            $this->command->info("Seeded Role: ". $objPayStatus->designation);
        }
    }
}
