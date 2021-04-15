<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\My_like;
use File;

class LikeCommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get("database/posts_and_comments.json");
        $data = json_decode($json);
        foreach($data as $obj) {
            foreach($obj as $v) {
                //dd($obj);
                //dd(json_encode($v)); 
                // dd($obj[0]->timestamp);
                My_like::create(array(
                    'timestamp' => $v->timestamp,
                    'data' => json_encode($v->data),
                    // 'actor' => $obj->actor,
                    'title' => $v->title
                ));
            }
        }
    }
}
