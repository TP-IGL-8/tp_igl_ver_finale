<?php

use Illuminate\Database\Seeder;

class EtudiantsTab extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       Etudiant::truncate();

        $faker = \Faker\Factory::create();
            Etudiant::create([
                'nom'=>' ',
                'email'=>' ',
                'moy'=>' ',
                'password'=>' ',
                'prenom'=>' ',
                'mat'=>' ',
                'annee'=>' ',
                'grp'=>' '
            ]);
    }
}
