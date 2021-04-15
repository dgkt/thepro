<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\My_comment;
use File;

class ShowCommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get("database/comments.json");
        $data = json_decode($json);
        foreach($data as $obj) {
            foreach($obj as $v) {
                //dd($v);
                My_comment::create(array(
                    'attachments' => json_encode($v->attachments),
                    //dd($v),
                    'timestamp' => $v->timestamp,
                    'data' => json_encode($v->data),
                    'title' => $v->title
                ));
            }
        }
    }
}