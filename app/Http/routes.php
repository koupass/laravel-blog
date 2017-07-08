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


Route::get('/', [
    'uses' => 'PostController@getBlogIndex',
    'as' => 'blog.index'
]);

Route::get('/test', function(){
   return view('test');
});

Route::get('/blog', [
    'uses' => 'PostController@getBlogIndex',
    'as' => 'blog.index'
]);

Route::get('/blog/{post_id}&{end}', [
    'uses' => 'PostController@getSinglePost',
    'as' => 'blog.single'
]);


//Other Routes

Route::get('/about', function () {
    return view('frontend.other.about');
})->name('about');

Route::get('/contact', [
    'uses' => 'ContactMessageController@getContactIndex',
    'as' => 'contact'
]);

Route::post('/contact/sendmail', [
    'uses' => 'ContactMessageController@postSendMessage',
    'as' => 'contact.send'
]);


Route::group([
    'prefix' => '/admin',
], function () {
    Route::get('/', [
        'uses' => 'AdminController@getIndex',
        'as' => 'admin.index'
    ]);

    Route::get('/login', [
        'uses' => 'AdminController@getLogin',
        'as' => 'admin.login'
    ]);

    Route::post('/login', [
        'uses' => 'AdminController@postLogin',
        'as' => 'admin.login'
    ]);

    Route::get('/logout', [
        'uses' => 'AdminController@getLogout',
        'as' => 'admin.logout'
    ]);
//    Admin Category routes

    Route::get('/blog/categories', [
        'uses' => 'CategoryController@getCategoryIndex',
        'as' => 'admin.blog.categories'
    ]);


//    Admin Post routes

    Route::get('/blog/posts', [
        'uses' => 'PostController@getPostIndex',
        'as' => 'admin.blog.index'
    ]);
    Route::get('/blog/posts/{post_id}&{end}', [
        'uses' => 'PostController@getSinglePost',
        'as' => 'admin.blog.post'
    ]);
    Route::get('/blog/post/create', [
        'uses' => 'PostController@getCreatePost',
        'as' => 'admin.blog.create_post'
    ]);
    Route::post('/blog/post/create', [
        'uses' => 'PostController@postCreatePost',
        'as' => 'admin.blog.post.create'
    ]);

//Edit/Update a post
    Route::get('/blog/post/{post_id}/edit', [
        'uses' => 'PostController@getUpdatePost',
        'as' => 'admin.blog.post.edit'
    ]);
    Route::post('/blog/post/update', [
        'uses' => 'PostController@postUpdatePost',
        'as' => 'admin.blog.post.update'
    ]);


    Route::post('/blog/category/create', [
        'uses' => 'CategoryController@postCreateCategory',
        'as' => 'admin.blog.category.create'
    ]);


    Route::post('/blog/categories/update', [
        'uses' => 'CategoryController@postUpdateCategory',
        'as' => 'admin.blog.category.update'
    ]);

//    Delete the post

    Route::get('/blog/post/{post_id}/delete', [
        'uses' => 'PostController@getDeletePost',
        'as' => 'admin.blog.post.delete'
    ]);
    Route::get('/blog/category/{category_id}/delete', [
        'uses' => 'CategoryController@getDeleteCategory',
        'as' => 'admin.blog.category.delete'
    ]);
    Route::get('/contact/messages', [
        'uses' => 'ContactMessageController@getContactMessageIndex',
        'as' => 'admin.contact.index'
    ]);
    Route::get('/contact/message/{message_id}/delete', [
        'uses' => 'ContactMessageController@getDeleteMessage',
        'as' => 'admin.contact.delete'
    ]);

});


//Route::get('/ddd',function(){
//    return view('admin.index');
//})->name('admin');