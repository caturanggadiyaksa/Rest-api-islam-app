<?php

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
        $this->call(SurahSeeder::class);
        // $this->call([
        //     UserSeeder::class,
        //     PostSeeder::class,
        //     CommentSeeder::class,
        // ]);
    }
}
