<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

use App\Http\Models\Post;

$app->get('/', function() use ($app) {
    return $app->welcome();
});

$app->get('/posts',function() use($app){
    return view('post/index',['posts'=>Post::all()]);
});

$app->post('/posts',function() use($app){
    Post::create(Request::all());
    return redirect('/posts');
});