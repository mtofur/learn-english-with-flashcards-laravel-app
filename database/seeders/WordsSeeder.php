<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Words;

class WordsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $words = [
          ['image' => 'image.png',
            'englishword' => 'convenient',
            'englishsentence' => 'This place is more convenient, you can find and reach everything here.',
            'turkishword' => 'elverişli, uygun'],

          ['image' => 'image.png',
              'englishword' => 'convenient',
              'englishsentence' => 'This place is more convenient, you can find and reach everything here.',
              'turkishword' => 'elverişli, uygun'],
          ['image' => 'image.png',
              'englishword' => 'convenient',
              'englishsentence' => 'This place is more convenient, you can find and reach everything here.',
              'turkishword' => 'elverişli, uygun']

        ];

        foreach ($words as $word) {
          Words::create($word);
        }


    }
}
