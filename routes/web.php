<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ImportController;
use App\Http\Controllers\ShowLikes;
use App\Http\Controllers\ShowComments;
use App\Http\Controllers\ShowPosts;
use Illuminate\Support\Str;
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
});
//main dashboard page
Route::get('/dashboard', [DashboardController::class, 'index']);

// import page controller
Route::get('/imports', [ImportController::class, 'imports']);
Route::post('/imports', [ImportController::class, 'importFile'])->name('Import.html');

//another needed page
Route::get('/pages', [ShowLikes::class, 'showLikes']);

Route::get('/comments', [ShowComments::class, 'showComments']);

Route::get('/posts', [ShowPosts::class, 'showPosts']);

// Route::get('/pages', function(){
// 	$json = file_get_contents(storage_path('posts_and_comments.json'));
// 	$objs = json_decode($json,true);
// 	foreach ($objs as $obj)  {
// 		foreach ($obj as $key => $value) {
// 			$insertArr[Str::slug($key,'_')] = json_encode($value);
// 		}
// 		DB::table('my_likes')->insert($insertArr);
// 	}
// 	dd("Finished adding data in examples table");
// });
