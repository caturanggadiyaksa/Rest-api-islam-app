<?php

use Illuminate\Database\Seeder;

class SurahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

         // Baca data dari file JSON
         $json = file_get_contents('public/surah.json');
         $data = json_decode($json, true);
 
         // Loop melalui data dan masukkan ke database
         foreach ($data as $item) {
             DB::table('surahs')->insert([
                 'number' => $item['number'],
                 'sequence' => $item['sequence'],
                 'numberOfVerses' => $item['numberOfVerses'],
                 'shortName' => $item['name']['short'],
                 'longName' => $item['name']['long'],
                 'transliteration_en' => $item['name']['transliteration']['en'],
                 'transliteration_id' => $item['name']['transliteration']['id'],
                 'translation_en' => $item['name']['translation']['en'],
                 'translation_id' => $item['name']['translation']['id'],
                 'revelation_arab' => $item['revelation']['arab'],
                 'revelation_en' => $item['revelation']['en'],
                 'revelation_id' => $item['revelation']['id'],
                 'tafsir_id' => $item['tafsir']['id'],
                 'created_at' => now(),
                 'updated_at' => now()
             ]);
         }
    }
}
