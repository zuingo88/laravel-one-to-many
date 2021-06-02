<?php

use Illuminate\Database\Seeder;

use App\Detail;
use App\Post;

class DetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()  //METODO COLLEGAMENTO 1 A 1
    {
        $posts = Post::all();
        foreach ($posts as $post) {

            factory(Detail::class, 1)->make()->each(function($detail) use($post) {  //per ogni post creo 1 detail
                
                $detail->post_id = $post->id;
                $detail->save();
            });
        }
    }
}
