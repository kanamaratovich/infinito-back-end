<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now()->toDateTimeString();
        Category::insert([
        	[
        		'id' => 1,
        		'name' => 'Кошки',
                'slug' => 'cats',
                'description'=>'',
        		'parent_id' => null,
        		'position' => 1,
	        	'image' => 'cats',
	        	'status' => true,
    	    	'created_at' => $now, 
        		'updated_at' => $now
        	],
        	[
        		'id' => 2,
        		'name' => 'Собаки',
        		'parent_id' => null,
                'slug' => 'dogs',
                'description'=>'',
        		'position' => 2,
        		'image' => 'dogs',
        		'status' => true,
        		'created_at' => $now,
        		'updated_at' => $now
        	],
        	[
        		'id' => 3,
        		'name' => 'Рыбки',
                'slug'=>'fish',
                'description'=>'',
        		'parent_id' => null,
        		'position' => 3,
        		'image' => 'fish',
        		'status' => true,
        		'created_at' => $now,
        		'updated_at' => $now
        	],
        	[
        		'id' => 4,
        		'name' => 'Грузыны',
                'slug'=>'smallpets',
                'description'=>'',
        		'parent_id' => null,
        		'position' => 4,
        		'image' => 'smallpets',
        		'status' => true,
        		'created_at' => $now,
        		'updated_at' => $now
        	],
        	[
        		'id' => 5,
        		'name' => 'Рептилии',
        		'parent_id' => null,
                'slug'=>'reptiles',
                'description'=>'',
        		'position' => 5,
        		'image' => 'reptiles',
        		'status' => true,
        		'created_at' => $now,
        		'updated_at' => $now
        	],
        	[
        		'id' => 6,
        		'name' => 'Птички',
                'slug'=>'birds',
                'description'=>'',
        		'parent_id' => null,
        		'position' => 6,
        		'image' => 'birds',
        		'status' => true,
        		'created_at' => $now,
        		'updated_at' => $now
        	],
        	[
        		'id' => 7,
        		'name' => 'Скот',
        		'parent_id' => null,
                'slug'=>'cattle',
                'description'=>'',
        		'position' => 7,
        		'image' => 'cattle',
        		'status' => true,
        		'created_at' => $now,
        		'updated_at' => $now
        	],
        	[
        		'id' => 8,
        		'name' => 'Корм',
                'slug'=>'feed21',
                'description'=>'',
        		'parent_id' => 2,
        		'position'=>1,
        		'image' => 'feed',
        		'status' => true,
        		'created_at' => $now,
        		'updated_at' => $now

        	],

        	[
        		'id' => 9,
        		'name' => 'Сухой корм',
                'slug'=>'feed20',
                'description'=>'',
        		'parent_id' => 8,
        		'position'=>1,
        		'image' => 'feed',
        		'status' => true,
        		'created_at' => $now,
        		'updated_at' => $now

        	],
        	[
        		'id' => 10,
        		'name' => 'Консервированные корма',
                'slug'=>'feed19',
                'description'=>'',
        		'parent_id' => 8,
        		'position'=>1,
        		'image' => 'feed',
        		'status' => true,
        		'created_at' => $now,
        		'updated_at' => $now

        	],
        	[
        		'id' => 11,
        		'name' => 'Полусухой корм',
                'slug'=>'feed18',
                'description'=>'',
        		'parent_id' => 8,
        		'position'=>1,
        		'image' => 'feed',
        		'status' => true,
        		'created_at' => $now,
        		'updated_at' => $now

        	],
        	[
        		'id' => 12,
        		'name' => 'Натуральный корм',
                'slug'=>'feed17',
                'description'=>'',
        		'parent_id' => 8,
        		'position'=>1,
        		'image' => 'feed',
        		'status' => true,
        		'created_at' => $now,
        		'updated_at' => $now

        	],
        	[
        		'id' => 13,
        		'name' => 'Специальное и возврастное питание',
                'slug'=>'fish165',
                'description'=>'',
        		'parent_id' => 8,
        		'position'=>1,
        		'image' => 'feed',
        		'status' => true,
        		'created_at' => $now,
        		'updated_at' => $now

        	],
        	[
        		'id' => 14,
        		'name' => 'Кормление для щенков',
                'slug'=>'feed16',
                'description'=>'',
        		'parent_id' => 13,
        		'position'=>1,
        		'image' => 'feed',
        		'status' => true,
        		'created_at' => $now,
        		'updated_at' => $now

        	],
        	[
        		'id' => 15,
        		'name' => 'Кормление собак мелких пород',
        		'parent_id' => 13,
                'slug'=>'feed15',
                'description'=>'',
        		'position'=>1,
        		'image' => 'feed',
        		'status' => true,
        		'created_at' => $now,
        		'updated_at' => $now

        	],
        	[
        		'id' => 16,
        		'name' => 'Кормление собак средних пород',
                'slug'=>'feed14',
                'description'=>'',
        		'parent_id' => 13,
        		'position'=>1,
        		'image' => 'feed',
        		'status' => true,
        		'created_at' => $now,
        		'updated_at' => $now

        	],
        	[
        		'id' => 17,
        		'name' => 'Кормление собак крупных пород',
                'slug'=>'feed13',
                'description'=>'',
        		'parent_id' => 13,
        		'position'=>1,
        		'image' => 'feed',
        		'status' => true,
        		'created_at' => $now,
        		'updated_at' => $now

        	],
        	[
        		'id' => 18,
        		'name' => 'Ветаптека',
                'slug'=>'feed12',
                'description'=>'',
        		'parent_id' => null,
        		'position'=> 7,
        		'image' => 'pharmacy',
        		'status' => true,
        		'created_at' => $now,
        		'updated_at' => $now

        	],
        	[
        		'id' => 19,
        		'name' => 'Игрушки',
                'slug'=>'feed11',
                'description'=>'',
        		'parent_id' => 2,
        		'position'=> 4,
        		'image' => 'feed',
        		'status' => true,
        		'created_at' => $now,
        		'updated_at' => $now

        	],
        	[
        		'id' => 20,
        		'name' => 'Ошейники,поводки и упряжь',
                'slug'=>'feed10',
                'description'=>'',
        		'parent_id' => 2,
        		'position'=> 2,
        		'image' => 'feed',
        		'status' => true,
        		'created_at' => $now,
        		'updated_at' => $now

        	],
        	[
        		'id' => 21,
        		'name' => 'Лакомства',
                'slug'=>'feed9',
                'description'=>'',
        		'parent_id' => 2,
        		'position'=> 6,
        		'image' => 'feed',
        		'status' => true,
        		'created_at' => $now,
        		'updated_at' => $now

        	],
        	[
        		'id' => 22,
        		'name' => 'Клетки,Переноски',
                'slug'=>'feed8',
                'description'=>'',
        		'parent_id' => 2,
        		'position'=> 3,
        		'image' => 'feed',
        		'status' => true,
        		'created_at' => $now,
        		'updated_at' => $now

        	],
        	[
        		'id' => 23,
        		'name' => 'Одежда',
                'slug'=>'feed7',
                'description'=>'',
        		'parent_id' => 2,
        		'position'=> 5,
        		'image' => 'feed',
        		'status' => true,
        		'created_at' => $now,
        		'updated_at' => $now

        	],
        	[
        		'id' => 24,
        		'name' => 'Кроватки',
                'slug'=>'feed6',
                'description'=>'',
        		'parent_id' => 2,
        		'position'=> 8,
        		'image' => 'feed',
        		'status' => true,
        		'created_at' => $now,
        		'updated_at' => $now

        	],
        	[
        		'id' => 25,
        		'name' => 'Блохи и клещи',
                'slug'=>'feed5',
                'description'=>'',
        		'parent_id' => 2,
        		'position'=> 8,
        		'image' => 'feed',
        		'status' => true,
        		'created_at' => $now,
        		'updated_at' => $now

        	],	
        	[
        		'id' => 26,
        		'name' => 'Ворота,двери и ручки',
                'slug'=>'feed4',
                'description'=>'',
        		'parent_id' => 2,
        		'position'=> 9,
        		'image' => 'feed',
        		'status' => true,
        		'created_at' => $now,
        		'updated_at' => $now

        	],	
        	[
        		'id' => 27,
        		'name' => 'Ворота,двери и ручки',
                'slug'=>'feed3',
                'description'=>'',
        		'parent_id' => 2,
        		'position'=> 10,
        		'image' => 'feed',
        		'status' => true,
        		'created_at' => $now,
        		'updated_at' => $now

        	],	
        	[
        		'id' => 28,
        		'name' => 'Витамины и добавки',
                'slug'=>'feed2',
                'description'=>'',
        		'parent_id' => 2,
        		'position'=> 11,
        		'image' => 'feed',
        		'status' => true,
        		'created_at' => $now,
        		'updated_at' => $now

        	],
        	[
        		'id' => 29,
        		'name' => 'Миски',
                'slug'=>'feed1',
                'description'=>'',
        		'parent_id' => 2,
        		'position'=> 12,
        		'image' => 'feed',
        		'status' => true,
        		'created_at' => $now,
        		'updated_at' => $now

        	],
        	[
        		'id' => 30,
        		'name' => 'Ветаптека',
                'slug'=>'pharmacy-dog',
                'description'=>'',
        		'parent_id' => 18,
        		'position'=> 12,
        		'image' => 'pharmacy-dog',
        		'status' => true,
        		'created_at' => $now,
        		'updated_at' => $now

        	],
        	
        	
        	
        ]);
    }
}
