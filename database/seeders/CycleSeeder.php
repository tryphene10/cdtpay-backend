<?php

namespace Database\Seeders;

use App\Models\Cycle;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CycleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $objCycle = new Cycle();
        $objCycle->type_enseignement_id = 1;
        $objCycle->designation = 'Premier Cycle (6 en 4)';
        $objCycle->published   = 1;
        $objCycle->generateReference();
        $objCycle->save();
        if(!$objCycle->save())
        {
            $this->command->info("Fail Seeded Cycle: test");
        }else{
            $this->command->info("Seeded Role: ". $objCycle->designation);
        }

        $objCycle = new Cycle();
        $objCycle->type_enseignement_id = 1;
        $objCycle->designation = 'Hors Cycle Classe de 3';
        $objCycle->published   = 1;
        $objCycle->generateReference();
        $objCycle->save();
        if(!$objCycle->save())
        {
            $this->command->info("Fail Seeded Cycle: test");
        }else{
            $this->command->info("Seeded Role: ". $objCycle->designation);
        }
        //3
        $objCycle = new Cycle();
        $objCycle->type_enseignement_id = 1;
        $objCycle->designation = 'second cycle (2nd)';
        $objCycle->published   = 1;
        $objCycle->generateReference();
        $objCycle->save();
        if(!$objCycle->save())
        {
            $this->command->info("Fail Seeded Cycle: test");
        }else{
            $this->command->info("Seeded Role: ". $objCycle->designation);
        }

        $objCycle = new Cycle();
        $objCycle->type_enseignement_id = 1;
        $objCycle->designation = 'second cycle (1ere et Tle)';
        $objCycle->published   = 1;
        $objCycle->generateReference();
        $objCycle->save();
        if(!$objCycle->save())
        {
            $this->command->info("Fail Seeded Cycle: test");
        }else{
            $this->command->info("Seeded Role: ". $objCycle->designation);
        }
    // enseignement technique Industriel
        $objCycle = new Cycle();
        $objCycle->type_enseignement_id = 2;
        $objCycle->designation = 'premier cycle (1er - 3e A) (Ind + Esf)';
        $objCycle->published   = 1;
        $objCycle->generateReference();
        $objCycle->save();
        if(!$objCycle->save())
        {
            $this->command->info("Fail Seeded Cycle: test");
        }else{
            $this->command->info("Seeded Role: ". $objCycle->designation);
        }

        $objCycle = new Cycle();
        $objCycle->type_enseignement_id = 2;
        $objCycle->designation = 'Hors cycle classe de 4e A (toutes specialités Ind + Esf)';
        $objCycle->published   = 1;
        $objCycle->generateReference();
        $objCycle->save();
        if(!$objCycle->save())
        {
            $this->command->info("Fail Seeded Cycle: test");
        }else{
            $this->command->info("Seeded Role: ". $objCycle->designation);
        }

        $objCycle = new Cycle();
        $objCycle->type_enseignement_id = 2;
        $objCycle->designation = 'second cycle (2nde F2,3,4,5, IH, Esf)';
        $objCycle->published   = 1;
        $objCycle->generateReference();
        $objCycle->save();
        if(!$objCycle->save())
        {
            $this->command->info("Fail Seeded Cycle: test");
        }else{
            $this->command->info("Seeded Role: ". $objCycle->designation);
        }

        $objCycle = new Cycle();
        $objCycle->type_enseignement_id = 2;
        $objCycle->designation = 'second cycle (2nde F1, MVT, MA)';
        $objCycle->published   = 1;
        $objCycle->generateReference();
        $objCycle->save();
        if(!$objCycle->save())
        {
            $this->command->info("Fail Seeded Cycle: test");
        }else{
            $this->command->info("Seeded Role: ". $objCycle->designation);
        }


        $objCycle = new Cycle();
        $objCycle->type_enseignement_id = 2;
        $objCycle->designation = 'second cycle (1er, Tle (F2,3,4,5, IH, ESF)';
        $objCycle->published   = 1;
        $objCycle->generateReference();
        $objCycle->save();
        if(!$objCycle->save())
        {
            $this->command->info("Fail Seeded Cycle: test");
        }else{
            $this->command->info("Seeded Role: ". $objCycle->designation);
        }

        $objCycle = new Cycle();
        $objCycle->type_enseignement_id = 2;
        $objCycle->designation = 'second cycle (1er, Tle F1 & MVT MA )';
        $objCycle->published   = 1;
        $objCycle->generateReference();
        $objCycle->save();
        if(!$objCycle->save())
        {
            $this->command->info("Fail Seeded Cycle: test");
        }else{
            $this->command->info("Seeded Role: ". $objCycle->designation);
        }

        $objCycle = new Cycle();
        $objCycle->type_enseignement_id = 2;
        $objCycle->designation = 'second cycle (BP 1-2)';
        $objCycle->published   = 1;
        $objCycle->generateReference();
        $objCycle->save();
        if(!$objCycle->save())
        {
            $this->command->info("Fail Seeded Cycle: test");
        }else{
            $this->command->info("Seeded Role: ". $objCycle->designation);
        }

        $objCycle = new Cycle();
        $objCycle->type_enseignement_id = 2;
        $objCycle->designation = 'second cycle (BP 3)';
        $objCycle->published   = 1;
        $objCycle->generateReference();
        $objCycle->save();
        if(!$objCycle->save())
        {
            $this->command->info("Fail Seeded Cycle: test");
        }else{
            $this->command->info("Seeded Role: ". $objCycle->designation);
        }

        // id:3
        $objCycle = new Cycle();
        $objCycle->type_enseignement_id = 3;
        $objCycle->designation = 'Premier Cycle SEME (1ere - 3e A)';
        $objCycle->published   = 1;
        $objCycle->generateReference();
        $objCycle->save();
        if(!$objCycle->save())
        {
            $this->command->info("Fail Seeded Cycle: test");
        }else{
            $this->command->info("Seeded Role: ". $objCycle->designation);
        }

        // id:3
        $objCycle = new Cycle();
        $objCycle->type_enseignement_id = 3;
        $objCycle->designation = 'Premier Cycle SEME (4eme Annee)';
        $objCycle->published   = 1;
        $objCycle->generateReference();
        $objCycle->save();
        if(!$objCycle->save())
        {
            $this->command->info("Fail Seeded Cycle: test");
        }else{
            $this->command->info("Seeded Role: ". $objCycle->designation);
        }

        // id:3
        $objCycle = new Cycle();
        $objCycle->type_enseignement_id = 3;
        $objCycle->designation = 'second Cycle SEME (2nde F8)';
        $objCycle->published   = 1;
        $objCycle->generateReference();
        $objCycle->save();
        if(!$objCycle->save())
        {
            $this->command->info("Fail Seeded Cycle: test");
        }else{
            $this->command->info("Seeded Role: ". $objCycle->designation);
        }

        // id:3
        $objCycle = new Cycle();
        $objCycle->type_enseignement_id = 3;
        $objCycle->designation = 'second Cycle SEME (1ere F8 - Tle F8)';
        $objCycle->published   = 1;
        $objCycle->generateReference();
        $objCycle->save();
        if(!$objCycle->save())
        {
            $this->command->info("Fail Seeded Cycle: test");
        }else{
            $this->command->info("Seeded Role: ". $objCycle->designation);
        }

        // id:3
        $objCycle = new Cycle();
        $objCycle->type_enseignement_id = 3;
        $objCycle->designation = 'second Cycle STT/G (2nd)';
        $objCycle->published   = 1;
        $objCycle->generateReference();
        $objCycle->save();
        if(!$objCycle->save())
        {
            $this->command->info("Fail Seeded Cycle: test");
        }else{
            $this->command->info("Seeded Role: ". $objCycle->designation);
        }

        // id:3
        $objCycle = new Cycle();
        $objCycle->type_enseignement_id = 3;
        $objCycle->designation = 'second Cycle SST/G (1ere - Tle)';
        $objCycle->published   = 1;
        $objCycle->generateReference();
        $objCycle->save();
        if(!$objCycle->save())
        {
            $this->command->info("Fail Seeded Cycle: test");
        }else{
            $this->command->info("Seeded Role: ". $objCycle->designation);
        }


    }
}
