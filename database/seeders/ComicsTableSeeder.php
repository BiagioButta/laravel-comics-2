<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comic;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comics = config('comicsdb.comics');
        foreach($comics as $comic){
            $newComic = new Comic();
            $newComic->title = $comic['title'];
            $newComic->description = $comic['description'];
            $newComic->thumb = $comic['thumb'];
            $newComic->price = substr($comic['price'],1);
            $newComic->series = $comic['series'];
            $newComic->sale_date = $comic['sale_date'];
            $newComic->type = $comic['type'];
            $newComic->artists = '';
            foreach($comic['artists'] as $key => $artist){
                if($key < (count($comic['artists']) - 1)){
                    $newComic->artists .= $artist . ', ';
                }else{
                    $newComic->artists .= $artist;
                }
            }
            $newComic->writers = '';
            foreach($comic['writers'] as $key => $writer){
                if($key < (count($comic['writers']) - 1)){
                    $newComic->writers .= $writer . ', ';
                }else{
                    $newComic->writers .= $writer;
                }
            }
            $newComic->save();
        }
    }
}
