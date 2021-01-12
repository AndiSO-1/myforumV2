<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserOpinionTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('user_opinion')->delete();

        \DB::table('user_opinion')->insert(array (
            0 =>
            array (
                'id' => 1,
                'user_id' => 1,
                'opinion_id' => 1,
                'comment' => 'Je dirais même qu\'il est essentiel !',
                'points' => 1,
            ),
            1 =>
            array (
                'id' => 2,
                'user_id' => 2,
                'opinion_id' => 7,
                'comment' => 'Personnellement, je trouve le code plus lisible quand tout est sur une seule ligne...',
                'points' => -1,
            ),
            2 =>
            array (
                'id' => 3,
                'user_id' => 5,
                'opinion_id' => 6,
                'comment' => 'Tout à fait d\'accord, un disque dur coût tout de même entre 50-100 Euro',
                'points' => 1,
            ),
            3 =>
            array (
                'id' => 4,
                'user_id' => 5,
                'opinion_id' => 12,
                'comment' => 'JQuery est en effet devenu inutile de nos jours, il est malheuresement encore présent dans beaucoup de site',
                'points' => 1,
            ),
            4 =>
            array (
                'id' => 5,
                'user_id' => 4,
                'opinion_id' => 14,
                'comment' => 'On peut utiliser airodump pour capturer le handshake',
                'points' => 0,
            ),
            5 =>
            array (
                'id' => 6,
                'user_id' => 4,
                'opinion_id' => 17,
                'comment' => 'Attention d\'avoir une liste de mot de passe suffisament ciblée pour pas que ça prenne des années ;D',
                'points' => 0,
            ),
            6 =>
            array (
                'id' => 7,
                'user_id' => 7,
                'opinion_id' => 18,
                'comment' => 'Merci de m\'avoir aidé!',
                'points' => 1,
            ),
            7 =>
            array (
                'id' => 8,
                'user_id' => 7,
                'opinion_id' => 3,
                'comment' => 'C\'est faux! J\'ai pris 2 heures pour le lire...',
                'points' => -1,
            ),
            8 =>
            array (
                'id' => 9,
                'user_id' => 7,
                'opinion_id' => 2,
                'comment' => 'Je suis d\'accord, il est super puissant!',
                'points' => 1,
            ),
            9 =>
            array (
                'id' => 10,
                'user_id' => 9,
                'opinion_id' => 18,
                'comment' => 'Je suis d\'accord.',
                'points' => 1,
            ),
            10 =>
            array (
                'id' => 11,
                'user_id' => 1,
                'opinion_id' => 11,
                'comment' => 'Qu\'est-ce que ça a à voir avec le sujet ???',
                'points' => -1,
            ),
            11 =>
            array (
                'id' => 12,
                'user_id' => 1,
                'opinion_id' => 19,
                'comment' => 'Juste. GhostVPN est une bonne alternative sur OSX',
                'points' => 1,
            ),
            12 =>
            array (
                'id' => 13,
                'user_id' => 6,
                'opinion_id' => 23,
                'comment' => 'Je suis bien d\'accord et je ne pense pas que ce soit possible dans tout les cas',
                'points' => 1,
            ),
            13 =>
            array (
                'id' => 14,
                'user_id' => 2,
                'opinion_id' => 20,
                'comment' => 'Merci mais je n\'aime pas les vidéos de Linus Tech Tips car il est Canadien.',
                'points' => -1,
            ),
            14 =>
            array (
                'id' => 15,
                'user_id' => 9,
                'opinion_id' => 7,
                'comment' => 'Totalement d\'accord. La compréhension du code est grandement améliorée.',
                'points' => 1,
            ),
            15 =>
            array (
                'id' => 16,
                'user_id' => 7,
                'opinion_id' => 11,
                'comment' => 'Désolé j\'ai mal compris',
                'points' => 1,
            ),
            16 =>
            array (
                'id' => 17,
                'user_id' => 11,
                'opinion_id' => 15,
                'comment' => 'Bon début',
                'points' => -1,
            ),
            17 =>
            array (
                'id' => 18,
                'user_id' => 6,
                'opinion_id' => 25,
                'comment' => 'J\'approuve ce choix',
                'points' => 1,
            ),
            18 =>
            array (
                'id' => 19,
                'user_id' => 15,
                'opinion_id' => 28,
                'comment' => 'Je suis totalement d\'accord avec toi !',
                'points' => 1,
            ),
        ));


    }
}
