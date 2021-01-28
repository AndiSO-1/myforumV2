<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('roles')->delete();

        \DB::table('roles')->insert(array (
            0 =>
            array (
                'id' => 1,
                'slug' => 'PROF',
                'name' => 'Enseignant',
            ),
            1 =>
            array (
                'id' => 2,
                'slug' => 'STUD',
                'name' => 'Etudiant',
            ),
            2 =>
            array (
                'id' => 3,
                'slug' => 'ADMI',
                'name' => 'Administrateur',
            ),
        ));


    }
}
