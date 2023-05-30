<?php

namespace Database\Seeders;

use App\Models\Annee_scolaire;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Annee_scolaireSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $objAnnee = new Annee_scolaire();
        $objAnnee->name = '2017 / 2018';
        $objAnnee->published   = 1;
        $objAnnee->generateReference();
        $objAnnee->save();
        if(!$objAnnee->save())
        {
            $this->command->info("Fail Seeded annee: 2018");
        }else{
            $this->command->info("Seeded Role: ". $objAnnee->name);
        }

        $objAnnee = new Annee_scolaire();
        $objAnnee->name = '2018 / 2019';
        $objAnnee->published   = 1;
        $objAnnee->generateReference();
        $objAnnee->save();
        if(!$objAnnee->save())
        {
            $this->command->info("Fail Seeded annee: 2018");
        }else{
            $this->command->info("Seeded Role: ". $objAnnee->name);
        }

        $objAnnee = new Annee_scolaire();
        $objAnnee->name = '2019 / 2020';
        $objAnnee->published   = 1;
        $objAnnee->generateReference();
        $objAnnee->save();
        if(!$objAnnee->save())
        {
            $this->command->info("Fail Seeded annee: 2018");
        }else{
            $this->command->info("Seeded Role: ". $objAnnee->name);
        }

        $objAnnee = new Annee_scolaire();
        $objAnnee->name = '2020 / 2021';
        $objAnnee->published   = 1;
        $objAnnee->generateReference();
        $objAnnee->save();
        if(!$objAnnee->save())
        {
            $this->command->info("Fail Seeded annee: 2018");
        }else{
            $this->command->info("Seeded Role: ". $objAnnee->name);
        }

        $objAnnee = new Annee_scolaire();
        $objAnnee->name = '2021 / 2022';
        $objAnnee->published   = 1;
        $objAnnee->generateReference();
        $objAnnee->save();
        if(!$objAnnee->save())
        {
            $this->command->info("Fail Seeded annee: 2018");
        }else{
            $this->command->info("Seeded Role: ". $objAnnee->name);
        }

        $objAnnee = new Annee_scolaire();
        $objAnnee->name = '2022 / 2023';
        $objAnnee->published   = 1;
        $objAnnee->generateReference();
        $objAnnee->save();
        if(!$objAnnee->save())
        {
            $this->command->info("Fail Seeded annee: 2018");
        }else{
            $this->command->info("Seeded Role: ". $objAnnee->name);
        }

        $objAnnee = new Annee_scolaire();
        $objAnnee->name = '2023 / 2024';
        $objAnnee->published   = 1;
        $objAnnee->generateReference();
        $objAnnee->save();
        if(!$objAnnee->save())
        {
            $this->command->info("Fail Seeded annee: 2018");
        }else{
            $this->command->info("Seeded Role: ". $objAnnee->name);
        }

        $objAnnee = new Annee_scolaire();
        $objAnnee->name = '2024 / 2025';
        $objAnnee->published   = 1;
        $objAnnee->generateReference();
        $objAnnee->save();
        if(!$objAnnee->save())
        {
            $this->command->info("Fail Seeded annee: 2018");
        }else{
            $this->command->info("Seeded Role: ". $objAnnee->name);
        }

        $objAnnee = new Annee_scolaire();
        $objAnnee->name = '2025 / 2026';
        $objAnnee->published   = 1;
        $objAnnee->generateReference();
        $objAnnee->save();
        if(!$objAnnee->save())
        {
            $this->command->info("Fail Seeded annee: 2018");
        }else{
            $this->command->info("Seeded Role: ". $objAnnee->name);
        }

        $objAnnee = new Annee_scolaire();
        $objAnnee->name = '2026 / 2027';
        $objAnnee->published   = 1;
        $objAnnee->generateReference();
        $objAnnee->save();
        if(!$objAnnee->save())
        {
            $this->command->info("Fail Seeded annee: 2018");
        }else{
            $this->command->info("Seeded Role: ". $objAnnee->name);
        }

        $objAnnee = new Annee_scolaire();
        $objAnnee->name = '2027 / 2028';
        $objAnnee->published   = 1;
        $objAnnee->generateReference();
        $objAnnee->save();
        if(!$objAnnee->save())
        {
            $this->command->info("Fail Seeded annee: 2018");
        }else{
            $this->command->info("Seeded Role: ". $objAnnee->name);
        }
    }
}
