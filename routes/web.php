<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

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
    return view('home', [
        'name' => 'cara fajar', 
        'role' => 'admin',
        'buah' => ['pisang', 'apel', 'jeruk', 'semangka', 'kiwi']
    ]);
});

Route::get('/students', [StudentController::class, 'index']);
/*Route::get('/about', function () {
    return 'whatewer';
});

Route::get('/contact', function () {
    return view('contact');
});

Route::view('/contact', 'contact', ['name'=>'cara fajar', 'phone'=> '0823......']);


Route::redirect('/contact', '/contact-us');

Route::get('/product', function(){
    return 'product';
});

//Route::get('/product/{id}', function($id){
    //return 'ini adalah produk dengan id '.$id;
//});

Route::get('/product/{id}', function($id){
    return view('product.detail', ['id'=> $id]);
});

Route::get('administrator/profil-admin', function(){
    return 'profil admin';
});

Route::get('administrator/about-admin', function(){
    return 'about admin';
});

Route::get('administrator/contact-admin', function(){
    return 'contact admin';
});

Route::get('administrator/profil-admin2', function(){
    return 'profil admin';
});

Route::get('administrator/about-admin2', function(){
    return 'about admin';
});

Route::get('administrator/contact-admin2', function(){
    return 'contact admin';
});

Route::prefix('disini')->group(function () {
    Route::get('/profil-admin', function(){
        return 'profil admin';
    });
    
    Route::get('/about-admin', function(){
        return 'about admin';
    });
    
    Route::get('/contact-admin', function(){
        return 'contact admin';
    });
    
    Route::get('/profil-admin2', function(){
        return 'profil admin';
    });
    
    Route::get('/about-admin2', function(){
        return 'about admin';
    });
    
    Route::get('/contact-admin2', function(){
        return 'contact admin';
    });
});*/