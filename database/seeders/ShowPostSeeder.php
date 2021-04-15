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
            My_post::create(array(
            'data' => $obj-> data));
        }
        //

                
            
        
    }
}
