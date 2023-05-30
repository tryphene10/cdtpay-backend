<?php

namespace Database\Seeders;

use App\Models\Paiement_method;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Paiement_methodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $objPayMethod = new Paiement_method();
        $objPayMethod->designation = 'MTN';
        $objPayMethod->published   = 1;
        $objPayMethod->generateReference();
        $objPayMethod->save();
        if(!$objPayMethod->save())
        {
            $this->command->info("Fail Seeded Role: Administrateur");
        }else{
            $this->command->info("Seeded Role: ". $objPayMethod->designation);
        }


        $objPayMethod = new Paiement_method();
        $objPayMethod->designation = 'Orange';
        $objPayMethod->published   = 1;
        $objPayMethod->generateReference();
        $objPayMethod->save();
        if(!$objPayMethod->save())
        {
            $this->command->info("Fail Seeded Role: Administrateur");
        }else{
            $this->command->info("Seeded Role: ". $objPayMethod->designation);
        }

        $objPayMethod = new Paiement_method();
        $objPayMethod->designation = 'Guichet';
        $objPayMethod->published   = 1;
        $objPayMethod->generateReference();
        $objPayMethod->save();
        if(!$objPayMethod->save())
        {
            $this->command->info("Fail Seeded Role: Administrateur");
        }else{
            $this->command->info("Seeded Role: ". $objPayMethod->designation);
        }

        $objPayMethod = new Paiement_method();
        $objPayMethod->designation = 'Banque';
        $objPayMethod->published   = 1;
        $objPayMethod->generateReference();
        $objPayMethod->save();
        if(!$objPayMethod->save())
        {
            $this->command->info("Fail Seeded Role: Administrateur");
        }else{
            $this->command->info("Seeded Role: ". $objPayMethod->designation);
        }
    }
}
