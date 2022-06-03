<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class GarageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $garage = new \App\Models\Garage();
        $garage->name = "echappement";
        $garage->price = 10000;
        $garage->description = "pour vos courroie d'échappement ";
        $garage->photo = "article1.jpeg";
        $garage->save();
        //
        $garage = new \App\Models\Garage();
        $garage->name = "echappement";
        $garage->price = 50000;
        $garage->description = "pour vos besoins en pots d'échappement";
        $garage->photo = "article3.jpeg";
        $garage->save();
        //
        $garage = new \App\Models\Garage();
        $garage->name = "moteur thermique";
        $garage->price = 90000;
        $garage->description = "moteur thermique pour voiture ";
        $garage->photo = "article6.jpeg";
        $garage->save();
        //
        $garage = new \App\Models\Garage();
        $garage->name = "moteur ";
        $garage->price = 70000;
        $garage->description = "pour vos besoins en moteur ";
        $garage->photo = "article5.jpeg";
        $garage->save();
        //
        $garage = new \App\Models\Garage();
        $garage->name = "pneumatique";
        $garage->price = 10000;
        $garage->description = " besoins en pneumatique";
        $garage->photo = "article4.jpeg";
        $garage->save();
        //
        $garage = new \App\Models\Garage();
        $garage->name = "freins et disque";
        $garage->price = 50000;
        $garage->description = "disques et freins de voitures";
        $garage->photo = "article2.jpeg";
        $garage->save();
        //
        $garage = new \App\Models\Garage();
        $garage->name = " courroie d'echappement";
        $garage->price = 10000;
        $garage->description = "pour vos courroie d'échappement ";
        $garage->photo = "article7.jpeg";
        $garage->save();
        //


    }
}
