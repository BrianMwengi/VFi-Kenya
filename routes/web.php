<?php

use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire;

use App\Post;





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

/*Route::get('/', function () {
    return view('welcome');
});*/
 
Auth::routes();
Route::get('/search', 'PagesController@search');
Route::get('/', 'PagesController@index');
Route::get('/blog', 'PagesController@blog');
Route::get('/about', 'PagesController@about');
Route::get('/sermons', 'PagesController@sermons');
Route::get('/events', 'PagesController@events');
Route::get('category/{slug}', 'PagesController@category')->name('category');
Route::get('post/{slug}', 'PagesController@post')->name('post');
Route::get('event/{slug}', 'PagesController@event')->name('event');
Route::get('contact', 'PagesController@showContactForm')->name('contact.show');
Route::post('contact', 'PagesController@submitContactForm')->name('contact.submit');

Route::post('/comment/store', 'CommentController@store')->name('comment.add');
Route::post('/reply/store', 'CommentController@replyStore')->name('reply.add');



Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::resource('categories', 'CategoryController');
    Route::resource('posts', 'PostController');
    Route::resource('events', 'EventsController');
    Route::resource('pages', 'PagesController');
    Route::resource('galleries', 'GalleryController');
});


Auth::routes([
    'verify' => true,
    'register' => false
]);
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
