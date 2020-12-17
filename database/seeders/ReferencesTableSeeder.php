<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ReferencesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('references')->delete();
        
        \DB::table('references')->insert(array (
            0 => 
            array (
                'id' => 1,
                'description' => 'Scrum guide',
                'url' => 'https://www.scrum.org/resources/scrum-guide',
            ),
            1 => 
            array (
                'id' => 2,
                'description' => 'Juice it or lose them',
                'url' => 'https://www.youtube.com/watch?v=Fy0aCDmgnxg',
            ),
            2 => 
            array (
                'id' => 3,
                'description' => 'Documentation php',
                'url' => 'https://www.php.net/',
            ),
            3 => 
            array (
                'id' => 4,
                'description' => 'Livre de développement',
                'url' => 'https://www.humblebundle.com/books/learn-to-code-the-fun-way-no-starch-press-books?hmb_source=humble_home&hmb_medium=product_tile&hmb_campaign=mosaic_section_2_layout_index_2_layout_type_twos_tile_index_1_c_codingbookshelfnostarchpress_bookbundle',
            ),
            4 => 
            array (
                'id' => 5,
                'description' => 'Hak5',
                'url' => 'https://www.youtube.com/user/Hak5Darren',
            ),
            5 => 
            array (
                'id' => 6,
                'description' => 'Talk sur les index SQL',
                'url' => 'https://youtu.be/HubezKbFL7E',
            ),
            6 => 
            array (
                'id' => 7,
                'description' => 'Trash racoon',
                'url' => 'https://mdc.mo.gov/sites/default/files/Raccoon%20garbage_08RGB.jpg',
            ),
            7 => 
            array (
                'id' => 8,
                'description' => 'Article',
                'url' => 'https://www.ma-no.org/en/programming/javascript/is-jquery-going-to-die-in-2019',
            ),
            8 => 
            array (
                'id' => 9,
                'description' => 'ProtonVPN',
                'url' => 'https://protonvpn.com/fr/',
            ),
            9 => 
            array (
                'id' => 10,
                'description' => 'TempleOS linus tech tip',
                'url' => 'https://www.youtube.com/watch?v=LtlyeDAJR7A',
            ),
        ));
        
        
    }
}