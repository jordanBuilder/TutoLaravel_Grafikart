<?php

use App\Http\Controllers\BlogController;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('/blog')->name('blog.')->controller(BlogController::class)->group(function () {
    Route::get('/','index')->name('index');

    // Route::get('/{slug}-{id}', function (string $slug, string $id, $request) {

    //     // return [
    //     //     "slug" => $slug,
    //     //     "id" => $id,
    //     //     "name" => $request->input("name"),
    //     // ];
    //     $post = Post::findOrFail($id);
    //     if($post->slug != $slug){
    //         return to_route('blog.show',['slug' => $post->slug, 'id' => $post->id]);
    //     }
    //     return $post;

    // })->where([
    //     'id' => '[0-9]+',
    //     'slug' => '[a-z0-9\-]+'
    // ])->name('show');
    Route::get('/{slug}-{id}', 'show')->name('show');
});


// la methode where permet de spcecifier des contraintes sur les paramètrees de route

// lorsqu'on utilise des methodes Get et autres pour créer des routes, on obtient des classes Route du namespace \Illuminate\Routing\Route