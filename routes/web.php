<?php
use Carbon\Carbon;

Route::get('/', 'HomeController@index');
Route::get('sort', function(){
    return view('sort');
});
Route::get('pair', function(){
    return view('pair');
});
Route::get('test', 'EmailController@test');
Route::get('login', 'AdminController@index');
Route::post('/checklogin', 'AdminController@checklogin');
Route::get('logout', 'AdminController@logout');
Route::post('login', [ 'as' => 'login', 'uses' => 'AdminController@index']);

Route::group(['middleware' => 'auth'], function()
{
    Route::get('/dashboard', 'PostController@dashboard');
    Route::get('/view-blogs', 'PostController@list_blogs');
    Route::get('/add-blogs', 'PostController@add_blog');
    Route::post('/blog-upload', 'PostController@upload_blogs'); 
    Route::post('/update-blog', 'PostController@update_blog'); 
    Route::get('/edit-blog/{id?}', 'PostController@edit_blog');
    Route::get('/delete-records', 'PostController@delete_records');
    Route::get('/load-blog', 'PostController@load_table');

});

// Route::get('email-send', function(){
// 	$details['email'] = 'seema0996@gmail.com';
//     // dispatch(new App\Jobs\SendEmailJob($details))->delay(Carbon::now()->addSeconds(30));
//     $job = (new \App\Jobs\SendEmailJob($details))->delay(Carbon::now()->addSeconds(5));
//     // dispatch($job);
//     // dd('done');

// });

Route::get('email-send','EmailController@sendEmail');



