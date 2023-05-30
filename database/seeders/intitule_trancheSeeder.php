<?php

namespace Database\Seeders;

use App\Models\Intitule_tranche;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class intitule_trancheSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $objIntituleTranche = new Intitule_tranche();
        $objIntituleTranche->designation = 'Inscription & Avance écolage';
        $objIntituleTranche->published   = 1;
        $objIntituleTranche->generateReference();
        $objIntituleTranche->save();
        if(!$objIntituleTranche->save())
        {
            $this->command->info("Fail Seeded annee: 2018");
        }else{
            $this->command->info("Seeded Role: ". $objIntituleTranche->designation);
        }

        $objIntituleTranche = new Intitule_tranche();
        $objIntituleTranche->designation = 'Premiere Tranche';
        $objIntituleTranche->published   = 1;
        $objIntituleTranche->generateReference();
        $objIntituleTranche->save();
        if(!$objIntituleTranche->save())
        {
            $this->command->info("Fail Seeded annee: 2018");
        }else{
            $this->command->info("Seeded Role: ". $objIntituleTranche->designation);
        }

        $objIntituleTranche = new Intitule_tranche();
        $objIntituleTranche->designation = 'Deuxieme Tranche';
        $objIntituleTranche->published   = 1;
        $objIntituleTranche->generateReference();
        $objIntituleTranche->save();
        if(!$objIntituleTranche->save())
        {
            $this->command->info("Fail Seeded annee: 2018");
        }else{
            $this->command->info("Seeded Role: ". $objIntituleTranche->designation);
        }
    }
}
