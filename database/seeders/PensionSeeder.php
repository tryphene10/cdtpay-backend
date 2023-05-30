<?php

namespace Database\Seeders;

use App\Models\Pension;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PensionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $objPension = new Pension();
        $objPension->montant_total = '80000';
        $objPension->published   = 1;
        $objPension->generateReference();
        $objPension->save();
        if(!$objPension->save())
        {
            $this->command->info("Fail Seeded Role: Administrateur");
        }else{
            $this->command->info("Seeded Role: ". $objPension->montant_total);
        }

        $objPension = new Pension();
        $objPension->montant_total = '92000';
        $objPension->published   = 1;
        $objPension->generateReference();
        $objPension->save();
        if(!$objPension->save())
        {
            $this->command->info("Fail Seeded Role: Administrateur");
        }else{
            $this->command->info("Seeded Role: ". $objPension->montant_total);
        }

        $objPension = new Pension();
        $objPension->montant_total = '90000';
        $objPension->published   = 1;
        $objPension->generateReference();
        $objPension->save();
        if(!$objPension->save())
        {
            $this->command->info("Fail Seeded Role: Administrateur");
        }else{
            $this->command->info("Seeded Role: ". $objPension->montant_total);
        }

        $objPension = new Pension();
        $objPension->montant_total = '110000';
        $objPension->published   = 1;
        $objPension->generateReference();
        $objPension->save();
        if(!$objPension->save())
        {
            $this->command->info("Fail Seeded Role: Administrateur");
        }else{
            $this->command->info("Seeded Role: ". $objPension->montant_total);
        }

        $objPension = new Pension();
        $objPension->montant_total = '110000';
        $objPension->published   = 1;
        $objPension->generateReference();
        $objPension->save();
        if(!$objPension->save())
        {
            $this->command->info("Fail Seeded Role: Administrateur");
        }else{
            $this->command->info("Seeded Role: ". $objPension->montant_total);
        }

        $objPension = new Pension();
        $objPension->montant_total = '130000';
        $objPension->published   = 1;
        $objPension->generateReference();
        $objPension->save();
        if(!$objPension->save())
        {
            $this->command->info("Fail Seeded Role: Administrateur");
        }else{
            $this->command->info("Seeded Role: ". $objPension->montant_total);
        }

        $objPension = new Pension();
        $objPension->montant_total = '140000';
        $objPension->published   = 1;
        $objPension->generateReference();
        $objPension->save();
        if(!$objPension->save())
        {
            $this->command->info("Fail Seeded Role: Administrateur");
        }else{
            $this->command->info("Seeded Role: ". $objPension->montant_total);
        }

        $objPension = new Pension();
        $objPension->montant_total = '150000';
        $objPension->published   = 1;
        $objPension->generateReference();
        $objPension->save();
        if(!$objPension->save())
        {
            $this->command->info("Fail Seeded Role: Administrateur");
        }else{
            $this->command->info("Seeded Role: ". $objPension->montant_total);
        }

        $objPension = new Pension();
        $objPension->montant_total = '170000';
        $objPension->published   = 1;
        $objPension->generateReference();
        $objPension->save();
        if(!$objPension->save())
        {
            $this->command->info("Fail Seeded Role: Administrateur");
        }else{
            $this->command->info("Seeded Role: ". $objPension->montant_total);
        }

        $objPension = new Pension();
        $objPension->montant_total = '1950000';
        $objPension->published   = 1;
        $objPension->generateReference();
        $objPension->save();
        if(!$objPension->save())
        {
            $this->command->info("Fail Seeded Role: Administrateur");
        }else{
            $this->command->info("Seeded Role: ". $objPension->montant_total);
        }

        $objPension = new Pension();
        $objPension->montant_total = '170000';
        $objPension->published   = 1;
        $objPension->generateReference();
        $objPension->save();
        if(!$objPension->save())
        {
            $this->command->info("Fail Seeded Role: Administrateur");
        }else{
            $this->command->info("Seeded Role: ". $objPension->montant_total);
        }

        $objPension = new Pension();
        $objPension->montant_total = '1950000';
        $objPension->published   = 1;
        $objPension->generateReference();
        $objPension->save();
        if(!$objPension->save())
        {
            $this->command->info("Fail Seeded Role: Administrateur");
        }else{
            $this->command->info("Seeded Role: ". $objPension->montant_total);
        }

        $objPension = new Pension();
        $objPension->montant_total = '110000';
        $objPension->published   = 1;
        $objPension->generateReference();
        $objPension->save();
        if(!$objPension->save())
        {
            $this->command->info("Fail Seeded Role: Administrateur");
        }else{
            $this->command->info("Seeded Role: ". $objPension->montant_total);
        }

        $objPension = new Pension();
        $objPension->montant_total = '130000';
        $objPension->published   = 1;
        $objPension->generateReference();
        $objPension->save();
        if(!$objPension->save())
        {
            $this->command->info("Fail Seeded Role: Administrateur");
        }else{
            $this->command->info("Seeded Role: ". $objPension->montant_total);
        }

        $objPension = new Pension();
        $objPension->montant_total = '120000';
        $objPension->published   = 1;
        $objPension->generateReference();
        $objPension->save();
        if(!$objPension->save())
        {
            $this->command->info("Fail Seeded Role: Administrateur");
        }else{
            $this->command->info("Seeded Role: ". $objPension->montant_total);
        }

        $objPension = new Pension();
        $objPension->montant_total = '150000';
        $objPension->published   = 1;
        $objPension->generateReference();
        $objPension->save();
        if(!$objPension->save())
        {
            $this->command->info("Fail Seeded Role: Administrateur");
        }else{
            $this->command->info("Seeded Role: ". $objPension->montant_total);
        }

        $objPension = new Pension();
        $objPension->montant_total = '105000';
        $objPension->published   = 1;
        $objPension->generateReference();
        $objPension->save();
        if(!$objPension->save())
        {
            $this->command->info("Fail Seeded Role: Administrateur");
        }else{
            $this->command->info("Seeded Role: ". $objPension->montant_total);
        }

        $objPension = new Pension();
        $objPension->montant_total = '135000';
        $objPension->published   = 1;
        $objPension->generateReference();
        $objPension->save();
        if(!$objPension->save())
        {
            $this->command->info("Fail Seeded Role: Administrateur");
        }else{
            $this->command->info("Seeded Role: ". $objPension->montant_total);
        }
    }
}
