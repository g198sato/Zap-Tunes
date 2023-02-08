<?php

use Illuminate\Support\Facades\Route;
//中間テーブルのデバッグ用
/*
use App\Models\Song;
use App\Models\GenreMaster;
*/

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
})->name('welcome');

Auth::routes();

Route::get('/player', [App\Http\Controllers\HomeController::class, 'index'])->name('player');
Route::permanentRedirect('/home', '/player');

Route::get('/upload' , [App\Http\Controllers\UploadController::class, 'index'])->name('upload')->middleware('auth');
Route::post('/upload', [App\Http\Controllers\UploadController::class, 'upload'])->middleware('auth');

//曲データの読み込み
Route::get('/next/{selected_genre_id}', 'App\Http\Controllers\SongController@next'); //nextボタン押下時・再生の完了時
Route::get('/mounted', 'App\Http\Controllers\SongController@mounted'); //ページがロードされた時

//全てのジャンル名の読み込み
Route::get('/get_all_genre_masters', 'App\Http\Controllers\GenreMasterController@get_all_genre_masters');

//中間テーブルのデバッグ用
/*
Route::get('/pivot', function(){
    $song = Song::find(2);
    foreach ($song->genre_masters as $genre_master) {
        echo $genre_master->pivot;
    }
    $genre_master = GenreMaster::find(1);
    foreach($genre_master->songs as $song){
        echo $song->pivot;
    }
});
*/