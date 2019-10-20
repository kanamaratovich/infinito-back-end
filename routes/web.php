<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
// Route::resource('projects','ProjectsController');
/*
Route::get('/projects','ProjectsController@index');
Route::get('/projects/create','ProjectsController@create');
Route::get('/projects/{project}','ProjectsController@show');
Route::post('/projects','ProjectsController@store');
Route::get('/projects/{project}/edit','ProjectsController@edit');
Route::patch('/projects/{project}','ProjectsController@update');
Route::delete('/projects/{project}','ProjectsController@destroy');*/

Route::get('/testx', function () {
	dd(  DB::table('categories as cat')
                ->select('cat.id as category_id', 'ct.name', 'cat.position', 'cat.status', 'ct.locale',
                DB::raw('COUNT(DISTINCT pc.product_id) as count'))
                ->leftJoin('category_translations as ct', function($leftJoin) {
                    $leftJoin->on('cat.id', '=', 'ct.category_id')
                        ->where('ct.locale', app()->getLocale());
                })
                ->leftJoin('product_categories as pc', 'cat.id', '=', 'pc.category_id')
                ->groupBy('cat.id','ct.name','ct.locale'));
});

Route::get('/test', function () {
	$parents = App\Category::where('parent_id', null)->with('children.children')->get();
	/*dd($parents);*/
	return $parents;
});

Route::get('/test2/{id}', function ($id) {
	$category = App\Category::where('id', $id)->with('subCategories')->get();

	//dd($category);

	// $childIds = $parents->flatMap(function($parent) {
	// 	return $parent->subCategories;
	// })->flatMap(function($parent) {
	// 	return $parent->children;
	// })->pluck('id');

	// if(count($parents[0]->children)){
		
	// 	if(){}
	// }

	return $category->flatMap(function($subcategory) {
	 	return $subcategory->subCategories;
	 })->pluck('id');

	return App\Category::productsByCategoryIds($category->pluck('id'));
});


Route::get('/test3/{id}', function ($id) {
	
	$parents = App\Category::where('id', $id)->get();

	return App\Category::where('id', $id)->with('subCategories')->get();
});

Route::get('/getChildCategories/test',function(){
	return DB::select('SELECT public."getChildCategoryIds"(8)');
});

