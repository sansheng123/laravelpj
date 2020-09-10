<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/', 'PageController@mainfun')->name('mainpage');

Route::get('brand/{id}', 'PageController@brandfun')->name('brandpage');

Route::get('itemdetail/{id}', 'PageController@itemdetailfun')->name('itemdetailpage');

Route::get('promotion', 'PageController@promotionfun')->name('promotionpage');

Route::get('registerpage', 'PageController@registerfun')->name('registerpage');

Route::get('shoppingcart', 'PageController@shoppingcartfun')->name('shoppincartpage');

Route::get('subcategory', 'PageController@subcategoryfun')->name('subcategorypage');


// Route::get('/', 'PageController@mainfun')->name('mainpage');

// Route::get('/', 'BackendController@backendtemplatefun')->name('Backendtemplatepage');



Route::resource('brands','BrandController');

Route::resource('categories','CategotyController');

Route::resource('subcategories','SubcategoryController');

Route::resource('orders','OrderConrtoller');




Route::middleware('role:Admin')->group(function(){

Route::get('dashboard', 'BackendController@dashboardfun')->name('Dashboardpage');

Route::resource('items','ItemController');



});


Auth::routes();




Route::get('/home', 'HomeController@index')->name('home');

Route::get('loginpage', 'PageController@loginfun')->name('loginpage');
