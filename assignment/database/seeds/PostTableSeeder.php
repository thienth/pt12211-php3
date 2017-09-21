<?php

use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        for ($i=0; $i < 100; $i++) { 
        	$post = [
        		'title' => $faker->realText($maxNbChars = 100, $indexSize = 1),
        		'short_desc' => $faker->realText($maxNbChars = 200, $indexSize = 2),
        		'content' => $faker->realText($maxNbChars = 500, $indexSize = 5),
        		'cate_id' => rand(1, 5),
        		'author' => $faker->name
        	];

        	DB::table('posts')->insert($post);
        }
    }
}
