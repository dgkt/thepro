<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\My_post;
use File;

class ShowPostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get("database/your_posts_1.json");
        $data = json_decode($json);
        foreach($data as $obj) {
            //foreach($obj as $v) {
                //dd($obj);
                if(!isset($obj->attachment)){
                    My_post::create(array(
                        'timestamp' => $obj->timestamp,
                        'data' => json_encode($obj->data),
                        'title' => $obj->title
                ));}
                elseif(!isset($obj->title)){
                    My_post::create(array(
                        'timestamp' => $obj->timestamp,
                        'data' => json_encode($obj->data),
                        'attachments' => json_encode($obj->attachments),
                ));}
                else {
                    My_post::create(array(
                        'attachments' => json_encode($obj->attachments),
                        'timestamp' => $obj->timestamp,
                        'data' => json_encode($obj->data),
                        'title' => $obj->title
                    ));

                }
            }
        
    }
}
