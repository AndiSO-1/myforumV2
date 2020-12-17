<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ThemesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('themes')->delete();
        
        \DB::table('themes')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Agilité',
            ),
            1 => 
            array (
                'id' => 8,
                'name' => 'API',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Conventions de codage',
            ),
            3 => 
            array (
                'id' => 11,
                'name' => 'CSS',
            ),
            4 => 
            array (
                'id' => 7,
                'name' => 'Distribution Linux',
            ),
            5 => 
            array (
                'id' => 4,
                'name' => 'Éditeur de texte',
            ),
            6 => 
            array (
                'id' => 2,
                'name' => 'Environnement de travail',
            ),
            7 => 
            array (
                'id' => 14,
                'name' => 'Game design',
            ),
            8 => 
            array (
                'id' => 10,
                'name' => 'Javascript',
            ),
            9 => 
            array (
                'id' => 13,
                'name' => 'Linkedin',
            ),
            10 => 
            array (
                'id' => 12,
                'name' => 'Opensource',
            ),
            11 => 
            array (
                'id' => 9,
                'name' => 'Python',
            ),
            12 => 
            array (
                'id' => 15,
                'name' => 'SASS',
            ),
            13 => 
            array (
                'id' => 6,
                'name' => 'Système d\'exploitation',
            ),
            14 => 
            array (
                'id' => 5,
                'name' => 'TempleOS',
            ),
        ));
        
        
    }
}