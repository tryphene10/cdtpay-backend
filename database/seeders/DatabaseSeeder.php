<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RoleSeeder::class);
        $this->call(Annee_scolaireSeeder::class);
        $this->call(intitule_trancheSeeder::class);
        $this->call(Paiement_methodSeeder::class);
        $this->call(Status_paiementSeeder::class);
        $this->call(Statut_eleveSeeder::class);
        $this->call(Type_enseignementSeeder::class);
        $this->call(CycleSeeder::class);
        $this->call(TrancheSeeder::class);
        $this->call(PensionSeeder::class);
        $this->call(ClasseSeeder::class);
        $this->call(UserSeeder::class);
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
