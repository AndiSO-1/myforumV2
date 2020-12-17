<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TopicsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('topics')->delete();
        
        \DB::table('topics')->insert(array (
            0 => 
            array (
                'id' => 1,
                'description' => 'Connexion à une base de donnée',
                'theme_id' => 3,
                'state_id' => 1,
                'forumuser_id' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'description' => 'Ed est le meilleur éditeur de texte',
                'theme_id' => 4,
                'state_id' => 1,
                'forumuser_id' => 2,
            ),
            2 => 
            array (
                'id' => 3,
                'description' => 'Pourquoi indenter son code?',
                'theme_id' => 3,
                'state_id' => 1,
                'forumuser_id' => 3,
            ),
            3 => 
            array (
                'id' => 4,
                'description' => 'Scrum guide',
                'theme_id' => 1,
                'state_id' => 2,
                'forumuser_id' => 4,
            ),
            4 => 
            array (
                'id' => 5,
                'description' => 'Quel est le meilleure éditeur de texte ?',
                'theme_id' => 4,
                'state_id' => 1,
                'forumuser_id' => 5,
            ),
            5 => 
            array (
                'id' => 6,
                'description' => 'Comment installer IE9 sur debian ?',
                'theme_id' => 7,
                'state_id' => 4,
                'forumuser_id' => 7,
            ),
            6 => 
            array (
                'id' => 7,
                'description' => 'Quels sont les aspects importants sur lequel se concentrer quand l\'on crée un jeu vidéo ?',
                'theme_id' => 14,
                'state_id' => 3,
                'forumuser_id' => 7,
            ),
            7 => 
            array (
                'id' => 8,
                'description' => 'Utilité dans l\'évolution d\'une carrière professionnelle',
                'theme_id' => 13,
                'state_id' => 5,
                'forumuser_id' => 7,
            ),
            8 => 
            array (
                'id' => 9,
                'description' => 'Comment devenir un bon technicien spécialiser en développement d\'application web',
                'theme_id' => 3,
                'state_id' => 5,
                'forumuser_id' => 11,
            ),
            9 => 
            array (
                'id' => 10,
                'description' => 'Utilisation de JQuery',
                'theme_id' => 10,
                'state_id' => 1,
                'forumuser_id' => 11,
            ),
            10 => 
            array (
                'id' => 11,
                'description' => 'Test de pénétration réseau',
                'theme_id' => 7,
                'state_id' => 4,
                'forumuser_id' => 13,
            ),
            11 => 
            array (
                'id' => 12,
                'description' => 'Google MAP API',
                'theme_id' => 8,
                'state_id' => 4,
                'forumuser_id' => 13,
            ),
            12 => 
            array (
                'id' => 13,
            'description' => 'Programmable Web (https://www.programmableweb.com)',
                'theme_id' => 8,
                'state_id' => 4,
                'forumuser_id' => 13,
            ),
            13 => 
            array (
                'id' => 14,
                'description' => 'Brutforce avec aircrack',
                'theme_id' => 6,
                'state_id' => 4,
                'forumuser_id' => 13,
            ),
            14 => 
            array (
                'id' => 15,
                'description' => 'Contourner les restrictions d\'un firewall',
                'theme_id' => 6,
                'state_id' => 1,
                'forumuser_id' => 14,
            ),
            15 => 
            array (
                'id' => 16,
                'description' => 'Mon pc ne démarre pas que faire?',
                'theme_id' => 6,
                'state_id' => 1,
                'forumuser_id' => 15,
            ),
            16 => 
            array (
                'id' => 17,
                'description' => 'Comment se connecter à internet sur TempleOS?',
                'theme_id' => 5,
                'state_id' => 1,
                'forumuser_id' => 1,
            ),
            17 => 
            array (
                'id' => 18,
                'description' => 'Est-ce que sass est vraiment utile ?',
                'theme_id' => 15,
                'state_id' => 5,
                'forumuser_id' => 6,
            ),
        ));
        
        
    }
}