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
        		'parent_id' => null,
        		'position' => 1,
	        	'icon' => 'cats',
	        	'status' => true,
    	    	'created_at' => $now, 
        		'updated_at' => $now
        	],
        	[
        		'id' => 2,
        		'name' => 'Собаки',
        		'parent_id' => null,
        		'position' => 2,
        		'icon' => 'dogs',
        		'status' => true,
        		'created_at' => $now,
        		'updated_at' => $now
        	],
        	[
        		'id' => 3,
        		'name' => 'Рыбки',
        		'parent_id' => null,
        		'position' => 3,
        		'icon' => 'fish',
        		'status' => true,
        		'created_at' => $now,
        		'updated_at' => $now
        	],
        	[
        		'id' => 4,
        		'name' => 'Грузыны',
        		'parent_id' => null,
        		'position' => 4,
        		'icon' => 'smallpets',
        		'status' => true,
        		'created_at' => $now,
        		'updated_at' => $now
        	],
        	[
        		'id' => 5,
        		'name' => 'Рептилии',
        		'parent_id' => null,
        		'position' => 5,
        		'icon' => 'reptiles',
        		'status' => true,
        		'created_at' => $now,
        		'updated_at' => $now
        	],
        	[
        		'id' => 6,
        		'name' => 'Птички',
        		'parent_id' => null,
        		'position' => 6,
        		'icon' => 'birds',
        		'status' => true,
        		'created_at' => $now,
        		'updated_at' => $now
        	],
        	[
        		'id' => 7,
        		'name' => 'Скот',
        		'parent_id' => null,
        		'position' => 7,
        		'icon' => 'cattle',
        		'status' => true,
        		'created_at' => $now,
        		'updated_at' => $now
        	],
        	[
        		'id' => 8,
        		'name' => 'Корм',
        		'parent_id' => 2,
        		'position'=>1,
        		'icon' => 'feed',
        		'status' => true,
        		'created_at' => $now,
        		'updated_at' => $now

        	],

        	[
        		'id' => 9,
        		'name' => 'Сухой корм',
        		'parent_id' => 8,
        		'position'=>1,
        		'icon' => 'feed',
        		'status' => true,
        		'created_at' => $now,
        		'updated_at' => $now

        	],
        	[
        		'id' => 10,
        		'name' => 'Консервированные корма',
        		'parent_id' => 8,
        		'position'=>1,
        		'icon' => 'feed',
        		'status' => true,
        		'created_at' => $now,
        		'updated_at' => $now

        	],
        	[
        		'id' => 11,
        		'name' => 'Полусухой корм',
        		'parent_id' => 8,
        		'position'=>1,
        		'icon' => 'feed',
        		'status' => true,
        		'created_at' => $now,
        		'updated_at' => $now

        	],
        	[
        		'id' => 12,
        		'name' => 'Натуральный корм',
        		'parent_id' => 8,
        		'position'=>1,
        		'icon' => 'feed',
        		'status' => true,
        		'created_at' => $now,
        		'updated_at' => $now

        	],
        	[
        		'id' => 13,
        		'name' => 'Специальное и возврастное питание',
        		'parent_id' => 8,
        		'position'=>1,
        		'icon' => 'feed',
        		'status' => true,
        		'created_at' => $now,
        		'updated_at' => $now

        	],
        	[
        		'id' => 14,
        		'name' => 'Кормление для щенков',
        		'parent_id' => 13,
        		'position'=>1,
        		'icon' => 'feed',
        		'status' => true,
        		'created_at' => $now,
        		'updated_at' => $now

        	],
        	[
        		'id' => 15,
        		'name' => 'Кормление собак мелких пород',
        		'parent_id' => 13,
        		'position'=>1,
        		'icon' => 'feed',
        		'status' => true,
        		'created_at' => $now,
        		'updated_at' => $now

        	],
        	[
        		'id' => 16,
        		'name' => 'Кормление собак средних пород',
        		'parent_id' => 13,
        		'position'=>1,
        		'icon' => 'feed',
        		'status' => true,
        		'created_at' => $now,
        		'updated_at' => $now

        	],
        	[
        		'id' => 17,
        		'name' => 'Кормление собак крупных пород',
        		'parent_id' => 13,
        		'position'=>1,
        		'icon' => 'feed',
        		'status' => true,
        		'created_at' => $now,
        		'updated_at' => $now

        	],
        	[
        		'id' => 18,
        		'name' => 'Ветаптека',
        		'parent_id' => null,
        		'position'=> 7,
        		'icon' => 'pharmacy',
        		'status' => true,
        		'created_at' => $now,
        		'updated_at' => $now

        	],
        	[
        		'id' => 19,
        		'name' => 'Игрушки',
        		'parent_id' => 2,
        		'position'=> 4,
        		'icon' => 'feed',
        		'status' => true,
        		'created_at' => $now,
        		'updated_at' => $now

        	],
        	[
        		'id' => 20,
        		'name' => 'Ошейники,поводки и упряжь',
        		'parent_id' => 2,
        		'position'=> 2,
        		'icon' => 'feed',
        		'status' => true,
        		'created_at' => $now,
        		'updated_at' => $now

        	],
        	[
        		'id' => 21,
        		'name' => 'Лакомства',
        		'parent_id' => 2,
        		'position'=> 6,
        		'icon' => 'feed',
        		'status' => true,
        		'created_at' => $now,
        		'updated_at' => $now

        	],
        	[
        		'id' => 22,
        		'name' => 'Клетки,Переноски',
        		'parent_id' => 2,
        		'position'=> 3,
        		'icon' => 'feed',
        		'status' => true,
        		'created_at' => $now,
        		'updated_at' => $now

        	],
        	[
        		'id' => 23,
        		'name' => 'Одежда',
        		'parent_id' => 2,
        		'position'=> 5,
        		'icon' => 'feed',
        		'status' => true,
        		'created_at' => $now,
        		'updated_at' => $now

        	],
        	[
        		'id' => 24,
        		'name' => 'Кроватки',
        		'parent_id' => 2,
        		'position'=> 8,
        		'icon' => 'feed',
        		'status' => true,
        		'created_at' => $now,
        		'updated_at' => $now

        	],
        	[
        		'id' => 25,
        		'name' => 'Блохи и клещи',
        		'parent_id' => 2,
        		'position'=> 8,
        		'icon' => 'feed',
        		'status' => true,
        		'created_at' => $now,
        		'updated_at' => $now

        	],	
        	[
        		'id' => 26,
        		'name' => 'Ворота,двери и ручки',
        		'parent_id' => 2,
        		'position'=> 9,
        		'icon' => 'feed',
        		'status' => true,
        		'created_at' => $now,
        		'updated_at' => $now

        	],	
        	[
        		'id' => 27,
        		'name' => 'Ворота,двери и ручки',
        		'parent_id' => 2,
        		'position'=> 10,
        		'icon' => 'feed',
        		'status' => true,
        		'created_at' => $now,
        		'updated_at' => $now

        	],	
        	[
        		'id' => 28,
        		'name' => 'Витамины и добавки',
        		'parent_id' => 2,
        		'position'=> 11,
        		'icon' => 'feed',
        		'status' => true,
        		'created_at' => $now,
        		'updated_at' => $now

        	],
        	[
        		'id' => 29,
        		'name' => 'Миски',
        		'parent_id' => 2,
        		'position'=> 12,
        		'icon' => 'feed',
        		'status' => true,
        		'created_at' => $now,
        		'updated_at' => $now

        	],
        	[
        		'id' => 30,
        		'name' => 'Ветаптека',
        		'parent_id' => 18,
        		'position'=> 12,
        		'icon' => 'pharmacy-dog',
        		'status' => true,
        		'created_at' => $now,
        		'updated_at' => $now

        	],
        	
        	
        	
        ]);
    }
}
