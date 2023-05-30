<?php

namespace Database\Seeders;

use App\Models\Classe;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClasseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $objClasse = new Classe();
        $objClasse->cycle_id = 1;
        $objClasse->pension_id = 1;
        $objClasse->designation = '6EME';
        $objClasse->description = 'sixieme';
        $objClasse->published   = 1;
        $objClasse->generateReference();
        $objClasse->save();
        if(!$objClasse->save())
        {
            $this->command->info("Fail Seeded Role: Administrateur");
        }else{
            $this->command->info("Seeded Role: ". $objClasse->designation);
        }

        $objClasse = new Classe();
        $objClasse->cycle_id = 1;
        $objClasse->pension_id = 1;
        $objClasse->designation = '5EME';
        $objClasse->description = 'Cinquieme';
        $objClasse->published   = 1;
        $objClasse->generateReference();
        $objClasse->save();
        if(!$objClasse->save())
        {
            $this->command->info("Fail Seeded Role: Administrateur");
        }else{
            $this->command->info("Seeded Role: ". $objClasse->description);
        }

        $objClasse = new Classe();
        $objClasse->cycle_id = 1;
        $objClasse->pension_id = 1;
        $objClasse->designation = '4EME';
        $objClasse->description = 'Quatrieme';
        $objClasse->published   = 1;
        $objClasse->generateReference();
        $objClasse->save();
        if(!$objClasse->save())
        {
            $this->command->info("Fail Seeded Role: Administrateur");
        }else{
            $this->command->info("Seeded Role: ". $objClasse->designation);
        }

        $objClasse = new Classe();
        $objClasse->cycle_id = 2;
        $objClasse->pension_id = 2;
        $objClasse->designation = '3EME';
        $objClasse->description = 'Troisieme';
        $objClasse->published   = 1;
        $objClasse->generateReference();
        $objClasse->save();
        if(!$objClasse->save())
        {
            $this->command->info("Fail Seeded Role: Administrateur");
        }else{
            $this->command->info("Seeded Role: ". $objClasse->designation);
        }

        $objClasse = new Classe();
        $objClasse->cycle_id = 3;
        $objClasse->pension_id = 3;
        $objClasse->designation = '2nd';
        $objClasse->description = 'Seconde';
        $objClasse->published   = 1;
        $objClasse->generateReference();
        $objClasse->save();
        if(!$objClasse->save())
        {
            $this->command->info("Fail Seeded Role: Administrateur");
        }else{
            $this->command->info("Seeded Role: ". $objClasse->designation);
        }

        $objClasse = new Classe();
        $objClasse->cycle_id = 4;
        $objClasse->pension_id = 4;
        $objClasse->designation = '1ERE';
        $objClasse->description = 'Premiere';
        $objClasse->published   = 1;
        $objClasse->generateReference();
        $objClasse->save();
        if(!$objClasse->save())
        {
            $this->command->info("Fail Seeded Role: Administrateur");
        }else{
            $this->command->info("Seeded Role: ". $objClasse->designation);
        }

        $objClasse = new Classe();
        $objClasse->cycle_id = 4;
        $objClasse->pension_id = 4;
        $objClasse->designation = 'Tle';
        $objClasse->description = 'Terminale';
        $objClasse->published   = 1;
        $objClasse->generateReference();
        $objClasse->save();
        if(!$objClasse->save())
        {
            $this->command->info("Fail Seeded Role: Administrateur");
        }else{
            $this->command->info("Seeded Role: ". $objClasse->designation);
        }

        $objClasse = new Classe();
        $objClasse->cycle_id = 5;
        $objClasse->pension_id = 5;
        $objClasse->designation = '1ERE Année';
        $objClasse->description = 'Premiere Année';
        $objClasse->published   = 1;
        $objClasse->generateReference();
        $objClasse->save();
        if(!$objClasse->save())
        {
            $this->command->info("Fail Seeded Role: Administrateur");
        }else{
            $this->command->info("Seeded Role: ". $objClasse->designation);
        }

        $objClasse = new Classe();
        $objClasse->cycle_id = 5;
        $objClasse->pension_id = 5;
        $objClasse->designation = '2EME Année';
        $objClasse->description = 'Deuxieme Année';
        $objClasse->published   = 1;
        $objClasse->generateReference();
        $objClasse->save();
        if(!$objClasse->save())
        {
            $this->command->info("Fail Seeded Role: Administrateur");
        }else{
            $this->command->info("Seeded Role: ". $objClasse->designation);
        }

        $objClasse = new Classe();
        $objClasse->cycle_id = 5;
        $objClasse->pension_id = 5;
        $objClasse->designation = '3EME Année';
        $objClasse->description = 'Troisieme Année';
        $objClasse->published   = 1;
        $objClasse->generateReference();
        $objClasse->save();
        if(!$objClasse->save())
        {
            $this->command->info("Fail Seeded Role: Administrateur");
        }else{
            $this->command->info("Seeded Role: ". $objClasse->designation);
        }

        $objClasse = new Classe();
        $objClasse->cycle_id = 6;
        $objClasse->pension_id = 6;
        $objClasse->designation = '4EME Année';
        $objClasse->description = 'Quatrieme Année';
        $objClasse->published   = 1;
        $objClasse->generateReference();
        $objClasse->save();
        if(!$objClasse->save())
        {
            $this->command->info("Fail Seeded Role: Administrateur");
        }else{
            $this->command->info("Seeded Role: ". $objClasse->designation);
        }

        $objClasse = new Classe();
        $objClasse->cycle_id = 7;
        $objClasse->pension_id = 7;
        $objClasse->designation = '2nd';
        $objClasse->description = 'Seconde F2, F3, F4, F5, Ih, ESF';
        $objClasse->published   = 1;
        $objClasse->generateReference();
        $objClasse->save();
        if(!$objClasse->save())
        {
            $this->command->info("Fail Seeded Role: Administrateur");
        }else{
            $this->command->info("Seeded Role: ". $objClasse->designation);
        }

        $objClasse = new Classe();
        $objClasse->cycle_id = 8;
        $objClasse->pension_id = 8;
        $objClasse->designation = '2nd';
        $objClasse->description = 'Seconde F1 & MVT (MA)';
        $objClasse->published   = 1;
        $objClasse->generateReference();
        $objClasse->save();
        if(!$objClasse->save())
        {
            $this->command->info("Fail Seeded Role: Administrateur");
        }else{
            $this->command->info("Seeded Role: ". $objClasse->designation);
        }

        $objClasse = new Classe();
        $objClasse->cycle_id = 9;
        $objClasse->pension_id = 9;
        $objClasse->designation = '1ERE';
        $objClasse->description = 'Premiere F2, F3, F4, F5, IH, ESF';
        $objClasse->published   = 1;
        $objClasse->generateReference();
        $objClasse->save();
        if(!$objClasse->save())
        {
            $this->command->info("Fail Seeded Role: Administrateur");
        }else{
            $this->command->info("Seeded Role: ". $objClasse->designation);
        }

        $objClasse = new Classe();
        $objClasse->cycle_id = 9;
        $objClasse->pension_id = 9;
        $objClasse->designation = 'Tle';
        $objClasse->description = 'Terminale F2, F3, F4, F5, IH, ESF';
        $objClasse->published   = 1;
        $objClasse->generateReference();
        $objClasse->save();
        if(!$objClasse->save())
        {
            $this->command->info("Fail Seeded Role: Administrateur");
        }else{
            $this->command->info("Seeded Role: ". $objClasse->designation);
        }

        $objClasse = new Classe();
        $objClasse->cycle_id = 10;
        $objClasse->pension_id = 10;
        $objClasse->designation = '1ERE';
        $objClasse->description = 'Premiere F1 & MVT(MA)';
        $objClasse->published   = 1;
        $objClasse->generateReference();
        $objClasse->save();
        if(!$objClasse->save())
        {
            $this->command->info("Fail Seeded Role: Administrateur");
        }else{
            $this->command->info("Seeded Role: ". $objClasse->designation);
        }

        $objClasse = new Classe();
        $objClasse->cycle_id = 10;
        $objClasse->pension_id = 10;
        $objClasse->designation = 'Tle';
        $objClasse->description = 'Terminale F1 & MVT(MA)';
        $objClasse->published   = 1;
        $objClasse->generateReference();
        $objClasse->save();
        if(!$objClasse->save())
        {
            $this->command->info("Fail Seeded Role: Administrateur");
        }else{
            $this->command->info("Seeded Role: ". $objClasse->designation);
        }

        $objClasse = new Classe();
        $objClasse->cycle_id = 11;
        $objClasse->pension_id = 11;
        $objClasse->designation = 'BP 1';
        $objClasse->description = 'BP - 1';
        $objClasse->published   = 1;
        $objClasse->generateReference();
        $objClasse->save();
        if(!$objClasse->save())
        {
            $this->command->info("Fail Seeded Role: Administrateur");
        }else{
            $this->command->info("Seeded Role: ". $objClasse->designation);
        }

        $objClasse = new Classe();
        $objClasse->cycle_id = 11;
        $objClasse->pension_id = 11;
        $objClasse->designation = 'BP 2';
        $objClasse->description = 'BP - 2';
        $objClasse->published   = 1;
        $objClasse->generateReference();
        $objClasse->save();
        if(!$objClasse->save())
        {
            $this->command->info("Fail Seeded Role: Administrateur");
        }else{
            $this->command->info("Seeded Role: ". $objClasse->designation);
        }

        $objClasse = new Classe();
        $objClasse->cycle_id = 12;
        $objClasse->pension_id = 12;
        $objClasse->designation = 'BP 3';
        $objClasse->description = 'BP - 3';
        $objClasse->published   = 1;
        $objClasse->generateReference();
        $objClasse->save();
        if(!$objClasse->save())
        {
            $this->command->info("Fail Seeded Role: Administrateur");
        }else{
            $this->command->info("Seeded Role: ". $objClasse->designation);
        }

        $objClasse = new Classe();
        $objClasse->cycle_id = 13;
        $objClasse->pension_id = 13;
        $objClasse->designation = '1ERE';
        $objClasse->description = 'Premiere Année SEME';
        $objClasse->published   = 1;
        $objClasse->generateReference();
        $objClasse->save();
        if(!$objClasse->save())
        {
            $this->command->info("Fail Seeded Role: Administrateur");
        }else{
            $this->command->info("Seeded Role: ". $objClasse->designation);
        }

        $objClasse = new Classe();
        $objClasse->cycle_id = 13;
        $objClasse->pension_id = 13;
        $objClasse->designation = '2ERE';
        $objClasse->description = 'deuxieme Année SEME';
        $objClasse->published   = 1;
        $objClasse->generateReference();
        $objClasse->save();
        if(!$objClasse->save())
        {
            $this->command->info("Fail Seeded Role: Administrateur");
        }else{
            $this->command->info("Seeded Role: ". $objClasse->designation);
        }

        $objClasse = new Classe();
        $objClasse->cycle_id = 13;
        $objClasse->pension_id = 13;
        $objClasse->designation = '3ERE';
        $objClasse->description = 'Troisieme Année SEME';
        $objClasse->published   = 1;
        $objClasse->generateReference();
        $objClasse->save();
        if(!$objClasse->save())
        {
            $this->command->info("Fail Seeded Role: Administrateur");
        }else{
            $this->command->info("Seeded Role: ". $objClasse->designation);
        }

        $objClasse = new Classe();
        $objClasse->cycle_id = 14;
        $objClasse->pension_id = 14;
        $objClasse->designation = '4ERE';
        $objClasse->description = 'Quatrieme Année SEME';
        $objClasse->published   = 1;
        $objClasse->generateReference();
        $objClasse->save();
        if(!$objClasse->save())
        {
            $this->command->info("Fail Seeded Role: Administrateur");
        }else{
            $this->command->info("Seeded Role: ". $objClasse->designation);
        }

        $objClasse = new Classe();
        $objClasse->cycle_id = 15;
        $objClasse->pension_id = 15;
        $objClasse->designation = '2nde F8 ';
        $objClasse->description = 'Seconde  SEME';
        $objClasse->published   = 1;
        $objClasse->generateReference();
        $objClasse->save();
        if(!$objClasse->save())
        {
            $this->command->info("Fail Seeded Role: Administrateur");
        }else{
            $this->command->info("Seeded Role: ". $objClasse->designation);
        }

        $objClasse = new Classe();
        $objClasse->cycle_id = 16;
        $objClasse->pension_id = 16;
        $objClasse->designation = '1ERE F8';
        $objClasse->description = 'Premiere F8 SEME';
        $objClasse->published   = 1;
        $objClasse->generateReference();
        $objClasse->save();
        if(!$objClasse->save())
        {
            $this->command->info("Fail Seeded Role: Administrateur");
        }else{
            $this->command->info("Seeded Role: ". $objClasse->designation);
        }

        $objClasse = new Classe();
        $objClasse->cycle_id = 16;
        $objClasse->pension_id = 16;
        $objClasse->designation = 'TLE F8';
        $objClasse->description = 'Terminal F8 SEME';
        $objClasse->published   = 1;
        $objClasse->generateReference();
        $objClasse->save();
        if(!$objClasse->save())
        {
            $this->command->info("Fail Seeded Role: Administrateur");
        }else{
            $this->command->info("Seeded Role: ". $objClasse->designation);
        }

        $objClasse = new Classe();
        $objClasse->cycle_id = 17;
        $objClasse->pension_id = 17;
        $objClasse->designation = '2nde';
        $objClasse->description = 'seconde STT/G';
        $objClasse->published   = 1;
        $objClasse->generateReference();
        $objClasse->save();
        if(!$objClasse->save())
        {
            $this->command->info("Fail Seeded Role: Administrateur");
        }else{
            $this->command->info("Seeded Role: ". $objClasse->designation);
        }

        $objClasse = new Classe();
        $objClasse->cycle_id = 18;
        $objClasse->pension_id = 18;
        $objClasse->designation = '1ERE';
        $objClasse->description = 'Premiere STT/G';
        $objClasse->published   = 1;
        $objClasse->generateReference();
        $objClasse->save();
        if(!$objClasse->save())
        {
            $this->command->info("Fail Seeded Role: Administrateur");
        }else{
            $this->command->info("Seeded Role: ". $objClasse->designation);
        }

        $objClasse = new Classe();
        $objClasse->cycle_id = 18;
        $objClasse->pension_id = 18;
        $objClasse->designation = 'Tle';
        $objClasse->description = 'Terminale STT/G';
        $objClasse->published   = 1;
        $objClasse->generateReference();
        $objClasse->save();
        if(!$objClasse->save())
        {
            $this->command->info("Fail Seeded Role: Administrateur");
        }else{
            $this->command->info("Seeded Role: ". $objClasse->designation);
        }
    }
}
