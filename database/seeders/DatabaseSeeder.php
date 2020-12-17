<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(RolesTableSeeder::class);
        $this->call(ForumusersTableSeeder::class);
        $this->call(StatesTableSeeder::class);
        $this->call(ThemesTableSeeder::class);
        $this->call(OpinionstatesTableSeeder::class);
        $this->call(ReferencesTableSeeder::class);
        $this->call(TopicsTableSeeder::class);
        $this->call(OpinionsTableSeeder::class);
        $this->call(ForumuserOpinionTableSeeder::class);
        $this->call(OpinionReferenceTableSeeder::class);
        $this->call(OpinionstatetransitionsTableSeeder::class);
    }
}
