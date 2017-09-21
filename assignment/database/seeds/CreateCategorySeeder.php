<?php

use Illuminate\Database\Seeder;

class CreateCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cates = [
        	['name' => 'xã hội', 'parent_id' => -1],
        	['name' => 'giáo dục', 'parent_id' => -1],
        	['name' => 'thể thao', 'parent_id' => -1],
        	['name' => 'bóng đá', 'parent_id' => 3],
        	['name' => 'đời sống', 'parent_id' => 1]
        ];

        DB::table('categories')->insert($cates);
    }
}
