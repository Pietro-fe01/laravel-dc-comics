<?php

namespace Database\Seeders;

use App\Models\Comic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Leggo i dati dal db-comics Config
        $comics = config('db-comics');

        // Aggiungo i record dei Comics
        foreach ($comics as $comic) {
            $new_comic = new Comic();
                $new_comic->fill($comic);
            $new_comic->save();
        }
    }
}
