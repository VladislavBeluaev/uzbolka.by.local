<?php
use Illuminate\Support\Facades\Config;
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
$middleware = [];
if(Config::get('app.debug'))
{
    array_push($middleware, ['middleware' => 'clearcache']);
}

Route::group(['namespace'=>'User','middleware'=>'clearcache'],function(){
    Route::group(['prefix'=>'men'],function (){
        Route::get('t-shirts','DashboardController@allTShirts')->name('user.man_t_shirts');
        Route::get('t-shirts/{model}','DashboardController@getTShirt')->name('user.man_getTShirt');
    });
    Route::group(['prefix'=>'women'],function (){
        Route::get('t-shirts','DashboardController@allTShirts')->name('user.woman_t_shirts');
        Route::get('t-shirts/{model}','DashboardController@getTShirt')->name('user.woman_getTShirt');
    });
    Route::group(['prefix'=>'children'],function (){
        Route::get('t-shirts','DashboardController@allTShirts')->name('user.children_t_shirts');
        Route::get('t-shirts/{model}','DashboardController@getTShirt')->name('user.children_getTShirt');
    });
    Route::get('/','DashboardController@index')->name('user.index');
});
