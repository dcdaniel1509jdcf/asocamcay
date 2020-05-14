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

Route::get('/', function () {
    return view('welcome');
})->name('inicio');

Auth::routes();
Route::get('/exportar', 'HomeController@export')->name('descreportes');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('admin/home', 'Admin\HomeController@index')->name('adm-home');
Route::get('/store/index', 'StoreController@index')->name('carrito');
Route::post('/store/get-items', [
    'as' => 'user.product.getItems',
    'uses' => 'StoreController@getItems'
]);

//Recetas
Route::get('/cook/recipe', 'Admin\RecipeController@index2')->name('homerecipe');
//noticias

Route::get('/news/index', 'Admin\NewsController@uindex')->name('homenews');
Route::get('/news/{news}', 'Admin\NewsController@show')->name('news-detail');

//

Route::bind('product',function($slug){
    return App\Product::where('slug',$slug)->first();
});
//category dependency injection
Route::bind('category',function($category){
    return App\Category::find($category);
});
//user dependency
Route::bind('user', function($user){
    return App\User::find($user);
});
Route::bind('order', function($order){
    return App\Order::find($order);
});
Route::bind('recipe', function($recipe){
    return App\Recipe::find($recipe);
});

Route::resource('user', 'user\UserController');
Route::get('user/profile/{user}', 'User\UserController@edit')->name('user-edit-profile')->middleware('auth');
//pedidos
Route::resource('user/order', 'user\OrderController');
Route::get('user/order/index/{user_id}',[
    'as'=>'user-order',
    'uses'=>'User\OrderController@index'
]);
// Petición que se hará vía ajax
Route::post('user/order/get-items', [
    'as' => 'user.order.getItems',
    'uses' => 'User\OrderController@getItems'
]);



//carrito de compras
Route::get('product/{slug}', 'StoreController@show')->name('product-detail');


Route::get('cart/show','CartController@show')->name('cart-show');
Route::get('cart/add/{product}','CartController@add')->name('cart-add');
Route::get('cart/add/{product}/{quantity?}','CartController@add2')->name('cart-add2');

Route::get('cart/delete/{product}','CartController@delete')->name('cart-delete');
Route::get('cart/trash','CartController@trash')->name('cart-trash');
Route::get('cart/update/{product}/{quantity?}',[
    'uses'  => 'CartController@update',
    'as'    => 'cart-update'
]);
/*Route::get('cart/show/{product}/{quantity?}',[
    'uses'  => 'CartController@add2',
    'as'    => 'cart-add2'
]);*/

Route::get('order-detail',[
    'middleware'=>'auth',
    'as'=>'order-detail',
    'uses'=>'CartController@orderDetail'
]);
Route::get('order-detail/save',[
    'middleware'=>'auth',
    'as'=>'order-save',
    'uses'=>'CartController@detail'
]);
//PEDIDO
Route::get('/home', array(
	'as' => 'payment',
	'uses' => 'CartController@postPayment',
));

// Admin
Route::group([ 'middleware' => ['admin']], function(){

Route::get('admin/home', function() {
    return view('admin.home');
})->name('adm-home');
//category
Route::resource('/category', 'Admin\CategoryController');
Route::get('admin/category', 'Admin\CategoryController@index')->name('category');
Route::get('admin/category/create', 'Admin\CategoryController@create')->name('create-category');
Route::delete('admin/category/{category}','Admin\CategoryController@destroy')->name('eliminar');
Route::get('admin/category/edit/{category}','Admin\CategoryController@edit')->name('edit');

//product
Route::resource('admin/product', 'Admin\ProductController');
Route::get('admin/product', 'Admin\ProductController@index')->name('adm-product');
Route::get('admin/product/create', 'Admin\ProductController@create')->name('adm-create-product');
Route::get('admin/product/edit/{product}','Admin\ProductController@edit')->name('adm-edit-product');
Route::get('admin/product/{product}','Admin\ProductController@destroy')->name('adm-delete-product');
//user
Route::resource('admin/user', 'Admin\UserController');
Route::get('admin/user', 'Admin\UserController@index')->name('adm-user');
Route::get('admin/user/create', 'Admin\UserController@create')->name('adm-create-user');
Route::get('admin/user/edit/{user}','Admin\UserController@edit')->name('adm-edit-user');
Route::get('admin/user/{user}','Admin\UserController@destroy')->name('adm-delete-user');
//recipe
Route::resource('admin/recipe', 'Admin\RecipeController');
Route::get('admin/recipe', 'Admin\RecipeController@index')->name('adm-recipe');
Route::get('admin/recipe/create', 'Admin\RecipeController@create')->name('adm-create-recipe');
Route::get('admin/recipe/edit/{recipe}','Admin\RecipeController@edit')->name('adm-edit-recipe');
Route::get('admin/recipe/{recipe}','Admin\RecipeController@destroy')->name('adm-delete-recipe');

//reports

Route::get('admin/reports/', 'Admin\ReportsController@index')->name('adm-reports');
Route::post('admin/reports/index', 'Admin\ReportsController@store');
Route::post('admin/reports/index2', 'Admin\ReportsController@store2');

//News
Route::resource('admin/news', 'Admin\NewsController');
Route::get('admin/news', 'Admin\NewsController@index')->name('adm-news');
Route::get('admin/news/create', 'Admin\NewsController@create')->name('adm-create-news');
Route::get('admin/news/edit/{news}','Admin\NewsController@edit')->name('adm-edit-news');
Route::get('admin/news/{news}','Admin\NewsController@destroy')->name('adm-delete-news');


//pedidos
Route::get('admin/order',[    
    'as'=>'adm-order',
    'uses'=>'Admin\OrderController@index'
]);
// Petición que se hará vía ajax
Route::post('admin/order/get-items', [
    'as' => 'admin.order.getItems',
    'uses' => 'Admin\OrderController@getItems'
]);
Route::post('admin/order/{id}', [
    'as' => 'adm-delete-order',
    'uses' => 'Admin\OrderController@destroy'
]);
}); 
