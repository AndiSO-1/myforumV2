<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class OpinionReferenceTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('opinion_reference')->delete();
        
        \DB::table('opinion_reference')->insert(array (
            0 => 
            array (
                'id' => 6,
                'reference_id' => 1,
                'opinion_id' => 1,
            ),
            1 => 
            array (
                'id' => 7,
                'reference_id' => 1,
                'opinion_id' => 2,
            ),
            2 => 
            array (
                'id' => 24,
                'reference_id' => 1,
                'opinion_id' => 13,
            ),
            3 => 
            array (
                'id' => 8,
                'reference_id' => 2,
                'opinion_id' => 3,
            ),
            4 => 
            array (
                'id' => 9,
                'reference_id' => 2,
                'opinion_id' => 6,
            ),
            5 => 
            array (
                'id' => 25,
                'reference_id' => 2,
                'opinion_id' => 14,
            ),
            6 => 
            array (
                'id' => 23,
                'reference_id' => 2,
                'opinion_id' => 15,
            ),
            7 => 
            array (
                'id' => 10,
                'reference_id' => 3,
                'opinion_id' => 7,
            ),
            8 => 
            array (
                'id' => 11,
                'reference_id' => 3,
                'opinion_id' => 8,
            ),
            9 => 
            array (
                'id' => 22,
                'reference_id' => 3,
                'opinion_id' => 26,
            ),
            10 => 
            array (
                'id' => 12,
                'reference_id' => 4,
                'opinion_id' => 8,
            ),
            11 => 
            array (
                'id' => 1,
                'reference_id' => 4,
                'opinion_id' => 9,
            ),
            12 => 
            array (
                'id' => 21,
                'reference_id' => 4,
                'opinion_id' => 24,
            ),
            13 => 
            array (
                'id' => 19,
                'reference_id' => 5,
                'opinion_id' => 23,
            ),
            14 => 
            array (
                'id' => 20,
                'reference_id' => 5,
                'opinion_id' => 24,
            ),
            15 => 
            array (
                'id' => 18,
                'reference_id' => 6,
                'opinion_id' => 21,
            ),
            16 => 
            array (
                'id' => 17,
                'reference_id' => 6,
                'opinion_id' => 22,
            ),
            17 => 
            array (
                'id' => 2,
                'reference_id' => 7,
                'opinion_id' => 13,
            ),
            18 => 
            array (
                'id' => 3,
                'reference_id' => 8,
                'opinion_id' => 12,
            ),
            19 => 
            array (
                'id' => 4,
                'reference_id' => 9,
                'opinion_id' => 19,
            ),
            20 => 
            array (
                'id' => 5,
                'reference_id' => 10,
                'opinion_id' => 20,
            ),
        ));
        
        
    }
}