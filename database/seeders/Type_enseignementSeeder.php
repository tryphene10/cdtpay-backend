<?php

namespace Database\Seeders;

use App\Models\Type_enseignement;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Type_enseignementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //id:1
        $objCycle = new Type_enseignement();
        $objCycle->designation = 'Enseignement Général';
        $objCycle->published   = 1;
        $objCycle->generateReference();
        $objCycle->save();
        if(!$objCycle->save())
        {
            $this->command->info("Fail Seeded Cycle: test");
        }else{
            $this->command->info("Seeded Role: ". $objCycle->name);
        }

        // id:2
        $objCycle = new Type_enseignement();
        $objCycle->designation = 'Enseignement Technique Industriel';
        $objCycle->published   = 1;
        $objCycle->generateReference();
        $objCycle->save();
        if(!$objCycle->save())
        {
            $this->command->info("Fail Seeded Cycle: test");
        }else{
            $this->command->info("Seeded Role: ". $objCycle->name);
        }

        //id:3
        $objCycle = new Type_enseignement();
        $objCycle->designation = 'Enseignement Technique Commercial et Paramédical';
        $objCycle->published   = 1;
        $objCycle->generateReference();
        $objCycle->save();
        if(!$objCycle->save())
        {
            $this->command->info("Fail Seeded Cycle: test");
        }else{
            $this->command->info("Seeded Role: ". $objCycle->name);
        }


    }
}
