<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class OpinionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('opinions')->delete();

        \DB::table('opinions')->insert(array (
            0 =>
            array (
                'id' => 1,
                'description' => 'C\'est important !',
                'topic_id' => 4,
                'user_id' => 8,
                'opinionstate_id' => 1,
            ),
            1 =>
            array (
                'id' => 2,
                'description' => 'Ed est évidemment supérieur à tout les autres éditeurs',
                'topic_id' => 5,
                'user_id' => 8,
                'opinionstate_id' => 2,
            ),
            2 =>
            array (
                'id' => 3,
                'description' => 'Enfin un document sur la GP qui peut se lire en moins d\'une heure !!!!',
                'topic_id' => 4,
                'user_id' => 7,
                'opinionstate_id' => 3,
            ),
            3 =>
            array (
                'id' => 4,
                'description' => 'C\'est indispensable pour bien gérer ses projets',
                'topic_id' => 4,
                'user_id' => 6,
                'opinionstate_id' => 4,
            ),
            4 =>
            array (
                'id' => 5,
                'description' => 'Pouvez vous être plus précis dans votre topic? A quel système de base de données souhaitez-vous vous connecter ?
Mysql ? MariaDB ? PostgreSQL ? MangoDB ?

<a href="https://www.arangodb.com"> ArangoDB ?</a>',
                'topic_id' => 1,
                'user_id' => 5,
                'opinionstate_id' => 5,
            ),
            5 =>
            array (
                'id' => 6,
                'description' => 'mmm ce n\'est pas ouf d\'indenter son code, ça prendre de la place sur le disque ! ',
                'topic_id' => 3,
                'user_id' => 4,
                'opinionstate_id' => 6,
            ),
            6 =>
            array (
                'id' => 7,
                'description' => 'C\'est pour faciliter la lisibilité!',
                'topic_id' => 3,
                'user_id' => 3,
                'opinionstate_id' => 5,
            ),
            7 =>
            array (
                'id' => 8,
                'description' => 'Rien à voir ici ...',
                'topic_id' => 3,
                'user_id' => 2,
                'opinionstate_id' => 4,
            ),
            8 =>
            array (
                'id' => 9,
                'description' => 'Il faut faire un max de projet personnel et découvrir les différentes technologies qui sont sur la place du marché.',
                'topic_id' => 9,
                'user_id' => 1,
                'opinionstate_id' => 3,
            ),
            9 =>
            array (
                'id' => 10,
                'description' => 'Il faut travailler dur!',
                'topic_id' => 9,
                'user_id' => 1,
                'opinionstate_id' => 2,
            ),
            10 =>
            array (
                'id' => 11,
                'description' => 'Windows + R -> cmd -> ping 127.0.0.1',
                'topic_id' => 11,
                'user_id' => 2,
                'opinionstate_id' => 1,
            ),
            11 =>
            array (
                'id' => 12,
            'description' => 'Je pense que JQuery a été quasi vital un temps, mais que les évolutions de JS l\'ont maintenant (2020) rendu caduc',
                'topic_id' => 10,
                'user_id' => 3,
                'opinionstate_id' => 2,
            ),
            12 =>
            array (
                'id' => 13,
            'description' => 'il y a toujours une place ici (voir référence) pour ceux qui utilise du jQuerry en 2020',
                'topic_id' => 10,
                'user_id' => 4,
                'opinionstate_id' => 3,
            ),
            13 =>
            array (
                'id' => 14,
                'description' => 'Il faut capturer le handshake. Et si besoin deauth les clients',
                'topic_id' => 11,
                'user_id' => 4,
                'opinionstate_id' => 4,
            ),
            14 =>
            array (
                'id' => 15,
                'description' => 'Il faut brancher la prise d\'alimentation!',
                'topic_id' => 16,
                'user_id' => 13,
                'opinionstate_id' => 5,
            ),
            15 =>
            array (
                'id' => 16,
                'description' => 'Personnelement j\'aime bien et je me suis déjà créé des habitudes.',
                'topic_id' => 10,
                'user_id' => 11,
                'opinionstate_id' => 6,
            ),
            16 =>
            array (
                'id' => 17,
                'description' => 'Il faut utiliser la commande : aircrack-ng -w password.lst -b 00:14:6C:7E:40:80 psk*.cap',
                'topic_id' => 14,
                'user_id' => 9,
                'opinionstate_id' => 5,
            ),
            17 =>
            array (
                'id' => 18,
                'description' => 'Je pense qu\'il faudrait que tu contacte un technicien ',
                'topic_id' => 16,
                'user_id' => 8,
                'opinionstate_id' => 4,
            ),
            18 =>
            array (
                'id' => 19,
                'description' => 'C\'est pas bien compliquer il te suffit de metttre en place un vpn ou d\'utiliser un vpn gratuit comme protonVPN cela marche surper bien dans les écoles notamment ou en entreprise',
                'topic_id' => 15,
                'user_id' => 7,
                'opinionstate_id' => 3,
            ),
            19 =>
            array (
                'id' => 20,
                'description' => 'Je ne sais pas si on peut mais je t\'invite à regarder cette vidéo',
                'topic_id' => 17,
                'user_id' => 6,
                'opinionstate_id' => 2,
            ),
            20 =>
            array (
                'id' => 21,
            'description' => 'Tout dépend de la nature de la panne. Si c\'est hardware, pas le choix il faut réparer/remplacer. Mais si c\'est logiciel (OS), c\'est l\'occasion de questionner le choix de son OS et de se renseigner sur des alternative peut-être plus fiables',
                'topic_id' => 16,
                'user_id' => 6,
                'opinionstate_id' => 1,
            ),
            21 =>
            array (
                'id' => 22,
                'description' => 'Je pense que sass est utile est inutile à la fois car la plupart du temps css peut faire pareil',
                'topic_id' => 18,
                'user_id' => 6,
                'opinionstate_id' => 2,
            ),
            22 =>
            array (
                'id' => 23,
                'description' => 'J\'espère que les modérateurs de ce site supprimeront ce sujet qui est à l\'évidence une provocation gratuite',
                'topic_id' => 6,
                'user_id' => 5,
                'opinionstate_id' => 3,
            ),
            23 =>
            array (
                'id' => 24,
                'description' => 'Je dirais même: "Est-ce que CSS est vraiment utile?".',
                'topic_id' => 18,
                'user_id' => 4,
                'opinionstate_id' => 4,
            ),
            24 =>
            array (
                'id' => 25,
                'description' => 'Atom est un bon éditeur de texte, que j\'utilise et qui ne contient pas un surplus d\'information dès le démarage. On peut peu à peu rajouter des packages afin de répondre à nos besoins, ainsi que modifer ceux déjà présent.',
                'topic_id' => 5,
                'user_id' => 3,
                'opinionstate_id' => 5,
            ),
            25 =>
            array (
                'id' => 26,
                'description' => 'Alors bien évidamment que oui, cela te permet de crée de multiple élément avec des boucles sans devoir tous écrire à la main en plus de permettre l\'inclusion de plusieurs fichier dans un seul et même fichier ce qui permet une certaine modularité',
                'topic_id' => 18,
                'user_id' => 2,
                'opinionstate_id' => 6,
            ),
            26 =>
            array (
                'id' => 27,
                'description' => 'Je pense qu\'il faut plus avoir un jeu facile d\'utilisation que beau graphiquement.',
                'topic_id' => 7,
                'user_id' => 3,
                'opinionstate_id' => 5,
            ),
            27 =>
            array (
                'id' => 28,
                'description' => 'VisualStudio est à mon opinion le meilleur éditeur de texte. Je l\'utilise pour tout, même pour faire ma liste de courses ! Le fait qu\'il prenne 3 minutes pour se lancer n\'est juste qu\'un tout petit inconvenient.',
                'topic_id' => 5,
                'user_id' => 2,
                'opinionstate_id' => 4,
            ),
            28 =>
            array (
                'id' => 29,
                'description' => 'A mes yeux, de nos jours, les graphismes ansi que le gameplay sont les deux choses les plus importantes pour créer un jeu vidéo',
                'topic_id' => 7,
                'user_id' => 2,
                'opinionstate_id' => 3,
            ),
            29 =>
            array (
                'id' => 30,
                'description' => 'J\'adore Scrum !!',
                'topic_id' => 4,
                'user_id' => 1,
                'opinionstate_id' => 2,
            ),
        ));


    }
}
