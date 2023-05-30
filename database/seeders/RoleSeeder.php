<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $objRole = new Role();
        $objRole->name = 'eleve';
        $objRole->published   = 1;
        $objRole->generateReference();
        $objRole->save();
        if(!$objRole->save())
        {
            $this->command->info("Fail Seeded Role: Administrateur");
        }else{
            $this->command->info("Seeded Role: ". $objRole->name);
        }

        $objRole = new Role();
        $objRole->name = 'intendant';
        $objRole->published   = 1;
        $objRole->generateReference();
        $objRole->save();
        if(!$objRole->save())
        {
            $this->command->info("Fail Seeded Role: Administrateur");
        }else{
            $this->command->info("Seeded Role: ". $objRole->name);
        }

        $objRole = new Role();
        $objRole->name = 'secretaire';
        $objRole->published   = 1;
        $objRole->generateReference();
        $objRole->save();
        if(!$objRole->save())
        {
            $this->command->info("Fail Seeded Role: Administrateur");
        }else{
            $this->command->info("Seeded Role: ". $objRole->name);
        }

        $objRole = new Role();
        $objRole->name = 'admin';
        $objRole->published   = 1;
        $objRole->generateReference();
        $objRole->save();
        if(!$objRole->save())
        {
            $this->command->info("Fail Seeded Role: Administrateur");
        }else{
            $this->command->info("Seeded Role: ". $objRole->name);
        }
    }
}
