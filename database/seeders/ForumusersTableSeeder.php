<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ForumusersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('forumusers')->delete();
        
        \DB::table('forumusers')->insert(array (
            0 => 
            array (
                'id' => 1,
                'first_name' => 'Xavier',
                'last_name' => 'Carrel',
                'pseudo' => 'XCL',
                'role_id' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'first_name' => 'Dimitri',
                'last_name' => 'Imfeld',
                'pseudo' => 'DID',
                'role_id' => 2,
            ),
            2 => 
            array (
                'id' => 3,
                'first_name' => 'Quentin',
                'last_name' => 'Aellen',
                'pseudo' => 'a-que-duc',
                'role_id' => 2,
            ),
            3 => 
            array (
                'id' => 4,
                'first_name' => 'Gabriel',
                'last_name' => 'Rossier',
                'pseudo' => 'GRR',
                'role_id' => 2,
            ),
            4 => 
            array (
                'id' => 5,
                'first_name' => 'Alexandre',
                'last_name' => 'Philibert',
                'pseudo' => 'alexandre',
                'role_id' => 2,
            ),
            5 => 
            array (
                'id' => 6,
                'first_name' => 'Cyril',
                'last_name' => 'Goldenschue',
                'pseudo' => 'CGE',
                'role_id' => 2,
            ),
            6 => 
            array (
                'id' => 7,
                'first_name' => 'Dylan',
                'last_name' => 'Oliveira Ramos',
                'pseudo' => 'DOS',
                'role_id' => 2,
            ),
            7 => 
            array (
                'id' => 8,
                'first_name' => 'Sou',
                'last_name' => 'Sam',
                'pseudo' => 'SSH',
                'role_id' => 2,
            ),
            8 => 
            array (
                'id' => 9,
                'first_name' => 'Andi',
                'last_name' => 'Santos Oliveira',
                'pseudo' => 'ASO',
                'role_id' => 2,
            ),
            9 => 
            array (
                'id' => 11,
                'first_name' => 'Sou',
                'last_name' => 'Sam',
                'pseudo' => 'SS',
                'role_id' => 2,
            ),
            10 => 
            array (
                'id' => 13,
                'first_name' => 'Mathieu',
                'last_name' => 'Burnat',
                'pseudo' => 'MBU',
                'role_id' => 2,
            ),
            11 => 
            array (
                'id' => 14,
                'first_name' => 'Dark',
                'last_name' => 'Sasuké',
                'pseudo' => '1450',
                'role_id' => 2,
            ),
            12 => 
            array (
                'id' => 15,
                'first_name' => 'William',
                'last_name' => 'Hausmann',
                'pseudo' => 'WHN',
                'role_id' => 2,
            ),
        ));
        
        
    }
}