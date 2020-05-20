<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Category;
 
class CategoryTableSeeder extends Seeder {
 
	/**
	 * Run the Categories table seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$data = array(
			[
				'name' => 'verduras', 
				'slug' => 'verduras', 
				'description' => 'desc', 
				
			],
			[
				'name' => 'frutas', 
				'slug' => 'frutas', 
				'description' => 'desc', 
				
			]
		);
 
		Category::insert($data);
 
	}
}