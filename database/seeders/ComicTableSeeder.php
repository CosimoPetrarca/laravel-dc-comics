<?php

namespace Database\Seeders;

use App\Models\Comic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComicTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comics = config("comics");
        foreach ($comics as $comic) {
            $newComic = new Comic();

            $newComic->title = $comic['title'];
            $newComic->description = $comic['description'];
            $newComic->thumb = $comic['thumb'];
            $newComic->price = $comic['price'];
            $newComic->series = $comic['series'];
            $newComic->sale_date = $comic['sale_date'];
            $newComic->type = $comic['type'];
            $newComic->artists = implode(',', $comic['artists']);
            $newComic->writers = implode(',', $comic['writers']);

            $newComic->save();
        }
    }
}


        /*  $table->string('title', 100);
            $table->text('description');
            $table->text('thumb');
            $table->float('price', 6, 2);
            $table->string('series', 50);
            $table->date('sale_date');
            $table->string('type', 100);
            $table->string('artists', 100); 
            $table->string('writers', 100);  */