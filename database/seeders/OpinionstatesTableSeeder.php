<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class OpinionstatesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('opinionstates')->delete();
        
        \DB::table('opinionstates')->insert(array (
            0 => 
            array (
                'id' => 3,
                'name' => 'En Modification',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'En revue',
            ),
            2 => 
            array (
                'id' => 1,
                'name' => 'Nouveau',
            ),
            3 => 
            array (
                'id' => 6,
                'name' => 'Obsolet',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Publié',
            ),
            5 => 
            array (
                'id' => 4,
                'name' => 'Rejeté',
            ),
        ));
        
        
    }
}