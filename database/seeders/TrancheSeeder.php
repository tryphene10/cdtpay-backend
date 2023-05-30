<?php

namespace Database\Seeders;

use App\Models\Tranche;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrancheSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // ensignement generale premier cycle
        $objTranche = new Tranche();
        $objTranche->intitule_tranche_id = 1;
        $objTranche->pension_id = 1;
        $objTranche->cycle_id = 1;
        $objTranche->montant = '35000';
        $objTranche->published   = 1;
        $objTranche->generateReference();
        $objTranche->save();
        if(!$objTranche->save())
        {
            $this->command->info("Fail Seeded Role: Administrateur");
        }else{
            $this->command->info("Seeded Role: ". $objTranche->name);
        }

        $objTranche = new Tranche();
        $objTranche->intitule_tranche_id = 2;
        $objTranche->pension_id = 1;
        $objTranche->cycle_id = 1;
        $objTranche->montant = '38000';
        $objTranche->published   = 1;
        $objTranche->generateReference();
        $objTranche->save();
        if(!$objTranche->save())
        {
            $this->command->info("Fail Seeded Role: Administrateur");
        }else{
            $this->command->info("Seeded Role: ". $objTranche->name);
        }

        $objTranche = new Tranche();
        $objTranche->intitule_tranche_id = 3;
        $objTranche->pension_id = 1;
        $objTranche->cycle_id = 1;
        $objTranche->montant = '7000';
        $objTranche->published   = 1;
        $objTranche->generateReference();
        $objTranche->save();
        if(!$objTranche->save())
        {
            $this->command->info("Fail Seeded Role: Administrateur");
        }else{
            $this->command->info("Seeded Role: ". $objTranche->name);
        }

        // classe de 3em hors cyclle enseignement general

        $objTranche = new Tranche();
        $objTranche->intitule_tranche_id = 1;
        $objTranche->pension_id = 2;
        $objTranche->cycle_id = 2;
        $objTranche->montant = '70000';
        $objTranche->published   = 1;
        $objTranche->generateReference();
        $objTranche->save();
        if(!$objTranche->save())
        {
            $this->command->info("Fail Seeded Role: Administrateur");
        }else{
            $this->command->info("Seeded Role: ". $objTranche->montant);
        }

        $objTranche = new Tranche();
        $objTranche->intitule_tranche_id = 2;
        $objTranche->pension_id = 2;
        $objTranche->cycle_id = 2;
        $objTranche->montant = '22000';
        $objTranche->published   = 1;
        $objTranche->generateReference();
        $objTranche->save();
        if(!$objTranche->save())
        {
            $this->command->info("Fail Seeded Role: Administrateur");
        }else{
            $this->command->info("Seeded Role: ". $objTranche->montant);
        }

        // second cycle enseignement generale

        $objTranche = new Tranche();
        $objTranche->intitule_tranche_id = 1;
        $objTranche->pension_id = 3;
        $objTranche->cycle_id = 3;
        $objTranche->montant = '53000';
        $objTranche->published   = 1;
        $objTranche->generateReference();
        $objTranche->save();
        if(!$objTranche->save())
        {
            $this->command->info("Fail Seeded Role: Administrateur");
        }else{
            $this->command->info("Seeded Role: ". $objTranche->montant);
        }

        $objTranche = new Tranche();
        $objTranche->intitule_tranche_id = 2;
        $objTranche->pension_id = 3;
        $objTranche->cycle_id = 3;
        $objTranche->montant = '30000';
        $objTranche->published   = 1;
        $objTranche->generateReference();
        $objTranche->save();
        if(!$objTranche->save())
        {
            $this->command->info("Fail Seeded Role: Administrateur");
        }else{
            $this->command->info("Seeded Role: ". $objTranche->montant);
        }

        $objTranche = new Tranche();
        $objTranche->intitule_tranche_id = 3;
        $objTranche->pension_id = 3;
        $objTranche->cycle_id = 3;
        $objTranche->montant = '7000';
        $objTranche->published   = 1;
        $objTranche->generateReference();
        $objTranche->save();
        if(!$objTranche->save())
        {
            $this->command->info("Fail Seeded Role: Administrateur");
        }else{
            $this->command->info("Seeded Role: ". $objTranche->montant);
        }
        //second cycle classe de terminale

        $objTranche = new Tranche();
        $objTranche->intitule_tranche_id = 1;
        $objTranche->pension_id = 4;
        $objTranche->cycle_id = 4;
        $objTranche->montant = '85000';
        $objTranche->published   = 1;
        $objTranche->generateReference();
        $objTranche->save();
        if(!$objTranche->save())
        {
            $this->command->info("Fail Seeded Role: Administrateur");
        }else{
            $this->command->info("Seeded Role: ". $objTranche->montant);
        }

        $objTranche = new Tranche();
        $objTranche->intitule_tranche_id = 2;
        $objTranche->pension_id = 4;
        $objTranche->cycle_id = 4;
        $objTranche->montant = '25000';
        $objTranche->published   = 1;
        $objTranche->generateReference();
        $objTranche->save();
        if(!$objTranche->save())
        {
            $this->command->info("Fail Seeded Role: Administrateur");
        }else{
            $this->command->info("Seeded Role: ". $objTranche->montant);
        }

        // premier cycle enseignement technique & industrielle
        $objTranche = new Tranche();
        $objTranche->intitule_tranche_id = 1;
        $objTranche->pension_id = 5;
        $objTranche->cycle_id = 5;
        $objTranche->montant = '50000';
        $objTranche->published   = 1;
        $objTranche->generateReference();
        $objTranche->save();
        if(!$objTranche->save())
        {
            $this->command->info("Fail Seeded Role: Administrateur");
        }else{
            $this->command->info("Seeded Role: ". $objTranche->montant);
        }

        $objTranche = new Tranche();
        $objTranche->intitule_tranche_id = 2;
        $objTranche->pension_id = 5;
        $objTranche->cycle_id = 5;
        $objTranche->montant = '49000';
        $objTranche->published   = 1;
        $objTranche->generateReference();
        $objTranche->save();
        if(!$objTranche->save())
        {
            $this->command->info("Fail Seeded Role: Administrateur");
        }else{
            $this->command->info("Seeded Role: ". $objTranche->montant);
        }

        $objTranche = new Tranche();
        $objTranche->intitule_tranche_id = 3;
        $objTranche->pension_id = 5;
        $objTranche->cycle_id = 5;
        $objTranche->montant = '11000';
        $objTranche->published   = 1;
        $objTranche->generateReference();
        $objTranche->save();
        if(!$objTranche->save())
        {
            $this->command->info("Fail Seeded Role: Administrateur");
        }else{
            $this->command->info("Seeded Role: ". $objTranche->montant);
        }

        //enseignement technique industrielle classe hors cycle quatrieme année

        $objTranche = new Tranche();
        $objTranche->intitule_tranche_id = 1;
        $objTranche->pension_id = 6;
        $objTranche->cycle_id = 6;
        $objTranche->montant = '100000';
        $objTranche->published   = 1;
        $objTranche->generateReference();
        $objTranche->save();
        if(!$objTranche->save())
        {
            $this->command->info("Fail Seeded Role: Administrateur");
        }else{
            $this->command->info("Seeded Role: ". $objTranche->montant);
        }

        $objTranche = new Tranche();
        $objTranche->intitule_tranche_id = 2;
        $objTranche->pension_id = 6;
        $objTranche->cycle_id = 6;
        $objTranche->montant = '30000';
        $objTranche->published   = 1;
        $objTranche->generateReference();
        $objTranche->save();
        if(!$objTranche->save())
        {
            $this->command->info("Fail Seeded Role: Administrateur");
        }else{
            $this->command->info("Seeded Role: ". $objTranche->montant);
        }

        // enseignement technique second cycle 2nde

        $objTranche = new Tranche();
        $objTranche->intitule_tranche_id = 1;
        $objTranche->pension_id = 7;
        $objTranche->cycle_id = 7;
        $objTranche->montant = '70000';
        $objTranche->published   = 1;
        $objTranche->generateReference();
        $objTranche->save();
        if(!$objTranche->save())
        {
            $this->command->info("Fail Seeded Role: Administrateur");
        }else{
            $this->command->info("Seeded Role: ". $objTranche->montant);
        }

        $objTranche = new Tranche();
        $objTranche->intitule_tranche_id = 2;
        $objTranche->pension_id = 7;
        $objTranche->cycle_id = 7;
        $objTranche->montant = '59000';
        $objTranche->published   = 1;
        $objTranche->generateReference();
        $objTranche->save();
        if(!$objTranche->save())
        {
            $this->command->info("Fail Seeded Role: Administrateur");
        }else{
            $this->command->info("Seeded Role: ". $objTranche->montant);
        }

        $objTranche = new Tranche();
        $objTranche->intitule_tranche_id = 3;
        $objTranche->pension_id = 7;
        $objTranche->cycle_id = 7;
        $objTranche->montant = '11000';
        $objTranche->published   = 1;
        $objTranche->generateReference();
        $objTranche->save();
        if(!$objTranche->save())
        {
            $this->command->info("Fail Seeded Role: Administrateur");
        }else{
            $this->command->info("Seeded Role: ". $objTranche->montant);
        }

        // enseignement technique second cycle 2nde F1 et MVT

        $objTranche = new Tranche();
        $objTranche->intitule_tranche_id = 1;
        $objTranche->pension_id = 8;
        $objTranche->cycle_id = 8;
        $objTranche->montant = '80000';
        $objTranche->published   = 1;
        $objTranche->generateReference();
        $objTranche->save();
        if(!$objTranche->save())
        {
            $this->command->info("Fail Seeded Role: Administrateur");
        }else{
            $this->command->info("Seeded Role: ". $objTranche->montant);
        }

        $objTranche = new Tranche();
        $objTranche->intitule_tranche_id = 2;
        $objTranche->pension_id = 8;
        $objTranche->cycle_id = 8;
        $objTranche->montant = '59000';
        $objTranche->published   = 1;
        $objTranche->generateReference();
        $objTranche->save();
        if(!$objTranche->save())
        {
            $this->command->info("Fail Seeded Role: Administrateur");
        }else{
            $this->command->info("Seeded Role: ". $objTranche->montant);
        }

        $objTranche = new Tranche();
        $objTranche->intitule_tranche_id = 3;
        $objTranche->pension_id = 8;
        $objTranche->cycle_id = 8;
        $objTranche->montant = '11000';
        $objTranche->published   = 1;
        $objTranche->generateReference();
        $objTranche->save();
        if(!$objTranche->save())
        {
            $this->command->info("Fail Seeded Role: Administrateur");
        }else{
            $this->command->info("Seeded Role: ". $objTranche->montant);
        }

        // enseignement technique second cycle 1er et Tle F2 a 5

        $objTranche = new Tranche();
        $objTranche->intitule_tranche_id = 1;
        $objTranche->pension_id = 9;
        $objTranche->cycle_id = 9;
        $objTranche->montant = '135000';
        $objTranche->published   = 1;
        $objTranche->generateReference();
        $objTranche->save();
        if(!$objTranche->save())
        {
            $this->command->info("Fail Seeded Role: Administrateur");
        }else{
            $this->command->info("Seeded Role: ". $objTranche->montant);
        }

        $objTranche = new Tranche();
        $objTranche->intitule_tranche_id = 2;
        $objTranche->pension_id = 9;
        $objTranche->cycle_id = 9;
        $objTranche->montant = '35000';
        $objTranche->published   = 1;
        $objTranche->generateReference();
        $objTranche->save();
        if(!$objTranche->save())
        {
            $this->command->info("Fail Seeded Role: Administrateur");
        }else{
            $this->command->info("Seeded Role: ". $objTranche->montant);
        }

        // enseignement technique second cycle 1er et Tle F1 et MVT

        $objTranche = new Tranche();
        $objTranche->intitule_tranche_id = 1;
        $objTranche->pension_id = 10;
        $objTranche->cycle_id = 10;
        $objTranche->montant = '135000';
        $objTranche->published   = 1;
        $objTranche->generateReference();
        $objTranche->save();
        if(!$objTranche->save())
        {
            $this->command->info("Fail Seeded Role: Administrateur");
        }else{
            $this->command->info("Seeded Role: ". $objTranche->montant);
        }

        $objTranche = new Tranche();
        $objTranche->intitule_tranche_id = 2;
        $objTranche->pension_id = 10;
        $objTranche->cycle_id = 10;
        $objTranche->montant = '60000';
        $objTranche->published   = 1;
        $objTranche->generateReference();
        $objTranche->save();
        if(!$objTranche->save())
        {
            $this->command->info("Fail Seeded Role: Administrateur");
        }else{
            $this->command->info("Seeded Role: ". $objTranche->montant);
        }

        //enseignement technique BP 1-2

        $objTranche = new Tranche();
        $objTranche->intitule_tranche_id = 1;
        $objTranche->pension_id = 11;
        $objTranche->cycle_id = 11;
        $objTranche->montant = '100000';
        $objTranche->published   = 1;
        $objTranche->generateReference();
        $objTranche->save();
        if(!$objTranche->save())
        {
            $this->command->info("Fail Seeded Role: Administrateur");
        }else{
            $this->command->info("Seeded Role: ". $objTranche->montant);
        }

        $objTranche = new Tranche();
        $objTranche->intitule_tranche_id = 2;
        $objTranche->pension_id = 11;
        $objTranche->cycle_id = 11;
        $objTranche->montant = '59000';
        $objTranche->published   = 1;
        $objTranche->generateReference();
        $objTranche->save();
        if(!$objTranche->save())
        {
            $this->command->info("Fail Seeded Role: Administrateur");
        }else{
            $this->command->info("Seeded Role: ". $objTranche->montant);
        }

        $objTranche = new Tranche();
        $objTranche->intitule_tranche_id = 3;
        $objTranche->pension_id = 11;
        $objTranche->cycle_id = 11;
        $objTranche->montant = '11000';
        $objTranche->published   = 1;
        $objTranche->generateReference();
        $objTranche->save();
        if(!$objTranche->save())
        {
            $this->command->info("Fail Seeded Role: Administrateur");
        }else{
            $this->command->info("Seeded Role: ". $objTranche->montant);
        }

        // BP 3

        $objTranche = new Tranche();
        $objTranche->intitule_tranche_id = 1;
        $objTranche->pension_id = 12;
        $objTranche->cycle_id = 12;
        $objTranche->montant = '150000';
        $objTranche->published   = 1;
        $objTranche->generateReference();
        $objTranche->save();
        if(!$objTranche->save())
        {
            $this->command->info("Fail Seeded Role: Administrateur");
        }else{
            $this->command->info("Seeded Role: ". $objTranche->montant);
        }

        $objTranche = new Tranche();
        $objTranche->intitule_tranche_id = 2;
        $objTranche->pension_id = 12;
        $objTranche->cycle_id = 12;
        $objTranche->montant = '45000';
        $objTranche->published   = 1;
        $objTranche->generateReference();
        $objTranche->save();
        if(!$objTranche->save())
        {
            $this->command->info("Fail Seeded Role: Administrateur");
        }else{
            $this->command->info("Seeded Role: ". $objTranche->montant);
        }

        // enseignement technique commercial et paramédical

        $objTranche = new Tranche();
        $objTranche->intitule_tranche_id = 1;
        $objTranche->pension_id = 13;
        $objTranche->cycle_id = 13;
        $objTranche->montant = '50000';
        $objTranche->published   = 1;
        $objTranche->generateReference();
        $objTranche->save();
        if(!$objTranche->save())
        {
            $this->command->info("Fail Seeded Role: Administrateur");
        }else{
            $this->command->info("Seeded Role: ". $objTranche->montant);
        }

        $objTranche = new Tranche();
        $objTranche->intitule_tranche_id = 2;
        $objTranche->pension_id = 13;
        $objTranche->cycle_id = 13;
        $objTranche->montant = '49000';
        $objTranche->published   = 1;
        $objTranche->generateReference();
        $objTranche->save();
        if(!$objTranche->save())
        {
            $this->command->info("Fail Seeded Role: Administrateur");
        }else{
            $this->command->info("Seeded Role: ". $objTranche->montant);
        }

        $objTranche = new Tranche();
        $objTranche->intitule_tranche_id = 3;
        $objTranche->pension_id = 13;
        $objTranche->cycle_id = 13;
        $objTranche->montant = '11000';
        $objTranche->published   = 1;
        $objTranche->generateReference();
        $objTranche->save();
        if(!$objTranche->save())
        {
            $this->command->info("Fail Seeded Role: Administrateur");
        }else{
            $this->command->info("Seeded Role: ". $objTranche->montant);
        }

        // SEME 4eme Année

        $objTranche = new Tranche();
        $objTranche->intitule_tranche_id = 1;
        $objTranche->pension_id = 14;
        $objTranche->cycle_id = 14;
        $objTranche->montant = '95000';
        $objTranche->published   = 1;
        $objTranche->generateReference();
        $objTranche->save();
        if(!$objTranche->save())
        {
            $this->command->info("Fail Seeded Role: Administrateur");
        }else{
            $this->command->info("Seeded Role: ". $objTranche->montant);
        }

        $objTranche = new Tranche();
        $objTranche->intitule_tranche_id = 2;
        $objTranche->pension_id = 14;
        $objTranche->cycle_id = 14;
        $objTranche->montant = '35000';
        $objTranche->published   = 1;
        $objTranche->generateReference();
        $objTranche->save();
        if(!$objTranche->save())
        {
            $this->command->info("Fail Seeded Role: Administrateur");
        }else{
            $this->command->info("Seeded Role: ". $objTranche->montant);
        }
        // SEME second Cycle

        $objTranche = new Tranche();
        $objTranche->intitule_tranche_id = 1;
        $objTranche->pension_id = 15;
        $objTranche->cycle_id = 15;
        $objTranche->montant = '62000';
        $objTranche->published   = 1;
        $objTranche->generateReference();
        $objTranche->save();
        if(!$objTranche->save())
        {
            $this->command->info("Fail Seeded Role: Administrateur");
        }else{
            $this->command->info("Seeded Role: ". $objTranche->montant);
        }

        $objTranche = new Tranche();
        $objTranche->intitule_tranche_id = 2;
        $objTranche->pension_id = 15;
        $objTranche->cycle_id = 15;
        $objTranche->montant = '47000';
        $objTranche->published   = 1;
        $objTranche->generateReference();
        $objTranche->save();
        if(!$objTranche->save())
        {
            $this->command->info("Fail Seeded Role: Administrateur");
        }else{
            $this->command->info("Seeded Role: ". $objTranche->montant);
        }

        $objTranche = new Tranche();
        $objTranche->intitule_tranche_id = 3;
        $objTranche->pension_id = 15;
        $objTranche->cycle_id = 15;
        $objTranche->montant = '11000';
        $objTranche->published   = 1;
        $objTranche->generateReference();
        $objTranche->save();
        if(!$objTranche->save())
        {
            $this->command->info("Fail Seeded Role: Administrateur");
        }else{
            $this->command->info("Seeded Role: ". $objTranche->montant);
        }

        // 1er et Tle F8

        $objTranche = new Tranche();
        $objTranche->intitule_tranche_id = 1;
        $objTranche->pension_id = 16;
        $objTranche->cycle_id = 16;
        $objTranche->montant = '110000';
        $objTranche->published   = 1;
        $objTranche->generateReference();
        $objTranche->save();
        if(!$objTranche->save())
        {
            $this->command->info("Fail Seeded Role: Administrateur");
        }else{
            $this->command->info("Seeded Role: ". $objTranche->montant);
        }

        $objTranche = new Tranche();
        $objTranche->intitule_tranche_id = 2;
        $objTranche->pension_id = 16;
        $objTranche->cycle_id = 16;
        $objTranche->montant = '40000';
        $objTranche->published   = 1;
        $objTranche->generateReference();
        $objTranche->save();
        if(!$objTranche->save())
        {
            $this->command->info("Fail Seeded Role: Administrateur");
        }else{
            $this->command->info("Seeded Role: ". $objTranche->montant);
        }

        // second cycle STT/G
        $objTranche = new Tranche();
        $objTranche->intitule_tranche_id = 1;
        $objTranche->pension_id = 17;
        $objTranche->cycle_id = 17;
        $objTranche->montant = '60000';
        $objTranche->published   = 1;
        $objTranche->generateReference();
        $objTranche->save();
        if(!$objTranche->save())
        {
            $this->command->info("Fail Seeded Role: Administrateur");
        }else{
            $this->command->info("Seeded Role: ". $objTranche->montant);
        }

        $objTranche = new Tranche();
        $objTranche->intitule_tranche_id = 2;
        $objTranche->pension_id = 17;
        $objTranche->cycle_id = 17;
        $objTranche->montant = '34000';
        $objTranche->published   = 1;
        $objTranche->generateReference();
        $objTranche->save();
        if(!$objTranche->save())
        {
            $this->command->info("Fail Seeded Role: Administrateur");
        }else{
            $this->command->info("Seeded Role: ". $objTranche->montant);
        }

        $objTranche = new Tranche();
        $objTranche->intitule_tranche_id = 3;
        $objTranche->pension_id = 17;
        $objTranche->cycle_id = 17;
        $objTranche->montant = '11000';
        $objTranche->published   = 1;
        $objTranche->generateReference();
        $objTranche->save();
        if(!$objTranche->save())
        {
            $this->command->info("Fail Seeded Role: Administrateur");
        }else{
            $this->command->info("Seeded Role: ". $objTranche->montant);
        }

        // STT/G 1er et Tle

        $objTranche = new Tranche();
        $objTranche->intitule_tranche_id = 1;
        $objTranche->pension_id = 18;
        $objTranche->cycle_id = 18;
        $objTranche->montant = '97000';
        $objTranche->published   = 1;
        $objTranche->generateReference();
        $objTranche->save();
        if(!$objTranche->save())
        {
            $this->command->info("Fail Seeded Role: Administrateur");
        }else{
            $this->command->info("Seeded Role: ". $objTranche->montant);
        }

        $objTranche = new Tranche();
        $objTranche->intitule_tranche_id = 2;
        $objTranche->pension_id = 18;
        $objTranche->cycle_id = 18;
        $objTranche->montant = '38000';
        $objTranche->published   = 1;
        $objTranche->generateReference();
        $objTranche->save();
        if(!$objTranche->save())
        {
            $this->command->info("Fail Seeded Role: Administrateur");
        }else{
            $this->command->info("Seeded Role: ". $objTranche->montant);
        }

    }
}
