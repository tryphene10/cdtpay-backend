<?php

namespace Database\Seeders;

use App\Models\Statut_eleve;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Statut_eleveSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //id:1
        $objStatutEleve = new Statut_eleve();
        $objStatutEleve->designation = 'Payé';
        $objStatutEleve->published   = 1;
        $objStatutEleve->generateReference();
        $objStatutEleve->save();
        if(!$objStatutEleve->save())
        {
            $this->command->info("Fail Seeded Cycle: test");
        }else{
            $this->command->info("Seeded Role: ". $objStatutEleve->designation);
        }
        //id:2
        $objStatutEleve = new Statut_eleve();
        $objStatutEleve->designation = 'Impayé';
        $objStatutEleve->published   = 1;
        $objStatutEleve->generateReference();
        $objStatutEleve->save();
        if(!$objStatutEleve->save())
        {
            $this->command->info("Fail Seeded Cycle: test");
        }else{
            $this->command->info("Seeded Role: ". $objStatutEleve->designation);
        }

        //id:3

        $objStatutEleve = new Statut_eleve();
        $objStatutEleve->designation = 'Avancer';
        $objStatutEleve->published   = 1;
        $objStatutEleve->generateReference();
        $objStatutEleve->save();
        if(!$objStatutEleve->save())
        {
            $this->command->info("Fail Seeded Cycle: test");
        }else{
            $this->command->info("Seeded Role: ". $objStatutEleve->designation);
        }

        $objStatutEleve = new Statut_eleve();
        $objStatutEleve->designation = 'inscription en cours';
        $objStatutEleve->published   = 1;
        $objStatutEleve->generateReference();
        $objStatutEleve->save();
        if(!$objStatutEleve->save())
        {
            $this->command->info("Fail Seeded Cycle: test");
        }else{
            $this->command->info("Seeded Role: ". $objStatutEleve->designation);
        }
    }
}
