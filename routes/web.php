<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('login', function(){
return 'Login usuario';

});
Route::get('logout', function(){
    return 'Logout usuario';
    
    });
Route::get('catalog', function(){
        return 'Listado de peliculas';
        
        });
Route::get('catalog/show/{id}', function($id){
            return 'Vista detalle pelicula ' . $id;
            
            });
Route::get('catalog/create', function(){
            return 'Añadir pelicula';
                
            });
Route::get('catalog/edit/{id}', function($id){
            return 'Modificar pelicula ' . $id;
                    
            });
Route::get('tabla', function(){
            for($i=0; $i <=10;$i++)
            echo "$i  * 6 =" . ($i  * 6)  . "<br>";

          });
Route::get('tabla/{x}', function($x){
        for($i=0; $i <=10;$i++)
        echo "$i  * $x =" . ($i  * $x)  . "<br>";

          })->where('x', "[1-9]+");