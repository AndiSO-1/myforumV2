<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('users')->delete();

        \DB::table('users')->insert(array (
            0 =>
            array (
                'id' => 1,
                'first_name' => 'Xavier',
                'last_name' => 'Carrel',
                'pseudo' => 'XCL',
                'email' => 'XCL@myforum.ch',
                'password' => Hash::make('Pa$$w0rd'),
                'role_id' => 1,
            ),
            1 =>
            array (
                'id' => 2,
                'first_name' => 'Dimitri',
                'last_name' => 'Imfeld',
                'pseudo' => 'DID',
                'email' => 'DID@myforum.ch',
                'password' => Hash::make('Pa$$w0rd'),
                'role_id' => 2,
            ),
            2 =>
            array (
                'id' => 3,
                'first_name' => 'Quentin',
                'last_name' => 'Aellen',
                'pseudo' => 'a-que-duc',
                'email' => 'a-que-duc@myforum.ch',
                'password' => Hash::make('Pa$$w0rd'),
                'role_id' => 2,
            ),
            3 =>
            array (
                'id' => 4,
                'first_name' => 'Gabriel',
                'last_name' => 'Rossier',
                'pseudo' => 'GRR',
                'email' => 'GRR@myforum.ch',
                'password' => Hash::make('Pa$$w0rd'),
                'role_id' => 2,
            ),
            4 =>
            array (
                'id' => 5,
                'first_name' => 'Alexandre',
                'last_name' => 'Philibert',
                'pseudo' => 'alexandre',
                'email' => 'alexandre@myforum.ch',
                'password' => Hash::make('Pa$$w0rd'),
                'role_id' => 2,
            ),
            5 =>
            array (
                'id' => 6,
                'first_name' => 'Cyril',
                'last_name' => 'Goldenschue',
                'pseudo' => 'CGE',
                'email' => 'CGE@myforum.ch',
                'password' => Hash::make('Pa$$w0rd'),
                'role_id' => 2,
            ),
            6 =>
            array (
                'id' => 7,
                'first_name' => 'Dylan',
                'last_name' => 'Oliveira Ramos',
                'pseudo' => 'DOS',
                'email' => 'DOS@myforum.ch',
                'password' => Hash::make('Pa$$w0rd'),
                'role_id' => 2,
            ),
            7 =>
            array (
                'id' => 8,
                'first_name' => 'Sou',
                'last_name' => 'Sam',
                'pseudo' => 'SSH',
                'email' => 'SSH@myforum.ch',
                'password' => Hash::make('Pa$$w0rd'),
                'role_id' => 2,
            ),
            8 =>
            array (
                'id' => 9,
                'first_name' => 'Andi',
                'last_name' => 'Santos Oliveira',
                'pseudo' => 'ASO',
                'email' => 'ASO@myforum.ch',
                'password' => Hash::make('Pa$$w0rd'),
                'role_id' => 2,
            ),
            9 =>
            array (
                'id' => 11,
                'first_name' => 'Sou',
                'last_name' => 'Sam',
                'pseudo' => 'SS',
                'email' => 'SS@myforum.ch',
                'password' => Hash::make('Pa$$w0rd'),
                'role_id' => 2,
            ),
            10 =>
            array (
                'id' => 13,
                'first_name' => 'Mathieu',
                'last_name' => 'Burnat',
                'pseudo' => 'MBU',
                'email' => 'MBU@myforum.ch',
                'password' => Hash::make('Pa$$w0rd'),
                'role_id' => 2,
            ),
            11 =>
            array (
                'id' => 14,
                'first_name' => 'Dark',
                'last_name' => 'Sasuké',
                'pseudo' => '1450',
                'email' => '1450@myforum.ch',
                'password' => Hash::make('Pa$$w0rd'),
                'role_id' => 2,
            ),
            12 =>
            array (
                'id' => 15,
                'first_name' => 'William',
                'last_name' => 'Hausmann',
                'pseudo' => 'WHN',
                'email' => 'WHN@myforum.ch',
                'password' => Hash::make('Pa$$w0rd'),
                'role_id' => 2,
            ),
        ));


    }
}
