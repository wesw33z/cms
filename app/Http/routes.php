<?php

use App\Photo;
use App\Post;
use App\Tag;
use App\User;
use App\Country;


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

//Route::resource('posts', 'PostsController');

Route::get('/contact', 'PostsController@contact');

Route::get('post/{id}/{name}/{password}', 'PostsController@show_post');

//Route::get('/post/{id}', 'PostsController@index');


//
//Route:: get('/about', function() {
//
//    return "This is the about page";
//});
//
//Route::get('/contact', function() {
//
//   return "This is the contact page";
//
//});
//
//Route::get('/post/{id}/{name}', function($id, $name){
//
//    return "This is post number " . $id . " " . $name;
//
//});
//
//Route::get('admin/posts/example', array('as'=>'admin.home' ,function() {
//
//    $url = route('admin.home');
//
//    return "this url is " . $url;
//
//}));

/*
|--------------------------------------------------------------------------
| Database Raw SQL queries
|--------------------------------------------------------------------------
|
*/

 //// Insert post into DB

//Route::get('/insert', function(){
//
//    DB::insert('insert into posts(title, content) values(?, ?)', ['Title Test 5', 'Body Test 5']);
//
//});

//// Insert into DB

//Route::get('/insertuser', function(){
//
//    DB::insert('insert into users(name, email, password) values(?, ?, ?)', ['Wes2', 'wes2@wes.com', 'abc123']);
//
//});

//// Read from DB

//Route::get('/read', function(){
//
//    $results = DB::select('select * from posts where id = ?', [1]);
//
//    foreach($results as $result) {
//
//        return $result->title;
//
//    }
//
//});

//// Update info in DB

//Route::get('/update', function(){
//
//    $updated = DB::update('update posts set title = "Updated Title" where id = ?', [1]);
//
//    return $updated;
//
//});

//// Delete info in DB

//Route::get('/delete', function(){
//
//    $deleted = DB::delete('delete from posts where id = ?', [1]);
//
//});

/*
|--------------------------------------------------------------------------
| Eloquent - ORM -> Object Relational Mapper
|--------------------------------------------------------------------------
|
*/

//// Read data from DB

//Route::get('/read', function(){
//
//    $posts = Post::all();
//
//    foreach ($posts as $post) {
//
//        return $post->title;
//
//    }
//
//});

//// Find data in DB

//Route::get('/find', function(){
//
//    $post = Post::find(2);
//
//    return $post->title;
//});

//// Find data in DB with conditions

//Route::get('/findwhere', function(){
//
//    $posts = Post::where('id', 2)->orderBy('id', 'desc')->take(1)->get();
//
//    return $posts;
//
//});

//// More on data from DB with conditions

//Route::get('/findmore', function(){

//    $posts = Post::findOrFail(2);
//
//    return $posts;

//    $posts = Post::where('users_count', '<', 50)->firstOrFail();

//});

//// Insert data into DB

//Route::get('/basicinsert', function(){
//
//    $post = new Post;
//
//    $post->title = 'New Eloquent title';
//    $post->content = 'New Eloquent content';
//
//    $post->save();
//
//});

//// Update data in the DB

//Route::get('/basicinsert2', function(){
//
//$post = Post::find(5);
//
//$post->title = 'Update New Eloquent Title';
//$post->content = 'Update New Eloquent Title';
//
//$post->save();
//
//});

//// Create data - typically with html forms

//Route::get('/create', function(){
//
//    Post::create(['title'=>'the create method', 'content'=>'this was inserted into the db using the create method']);
//
//});


//// Update data

//Route::get('/update', function(){
//
//    Post::where('id', 4)->where('is_admin', 0)->update(['title'=>'Updated title', 'content'=>'Updated content']);
//
//});

//// Delete data

//Route::get('/delete', function(){
//
//    $post = Post::find(3);
//
//    $post->delete();
//
//});

//// Delete data another way

//Route::get('/delete2', function(){
//
//    Post::destroy(4);
//
//    Post::where('is_admin', 0)->delete();
//
//});

//// adds softdelete timestamp to DB

//Route::get('/softdelete', function(){
//
//Post::find(2)->delete();
//
//});

//// search for records that have been softdeleted

//Route::get('/readsoftdelete', function(){

//    $post = Post::find(2);
//
//    return $post;

//    $post = Post::withTrashed()->where('id', 2)->get();
//
//    return $post;
//    $post = Post::onlyTrashed()->where('is_admin', 0)->get();
//
//    return $post;
//
//});
// restore softdeleted items

//Route::get('/restore', function(){

    // view softdelete

//    $post = Post::withTrashed()->where('id', 2)->get();
//
//        return $post;

        // restore softdeleted item(s)

//    Post::withTrashed()->where('id', 2)->restore();
//});

//// remove deleted items from the DB

//Route::get('/forcedelete', function(){
//
//    Post::withTrashed()->where('id', 2)->forceDelete();
//
//});


/*
|--------------------------------------------------------------------------
| Eloquent Relationships
|--------------------------------------------------------------------------
|
*/

//// showing posts made by users with a specific id
//// one to one relationship

//Route::get('/user/{id}/post', function($id){
//
//    return User::find($id)->post;
//
//});
//
//// showing posts made by users with a specific id
//// inverse relationship
//
//Route::get('/post/{id}/user', function($id){
//
//    return Post::find($id)->user->name;
//
//});

//// showing posts made by users with a specific id
//// one to many relationship

//Route::get('/posts', function(){
//
//    $user = User::find(2);
//
//    foreach($user->posts as $post) {
//
//            echo $post->title . "<br>";
//
//    }
//
//});

//// Many to Many relationships

//Route::get('/user/{id}/role', function($id){
//
//    $user = User::find($id)->roles()->orderBy('id', 'desc')->get();
//
//    return $user;
//// same result but with a foreach loop
//    $user = User::find($id);
//
//    foreach($user->roles as $role) {
//
//        return $role->name;
//
//    }

//});

//// Accessing the pivot/intermediate table
//
//Route::get('user/pivot', function(){
//
//    $user = User::find(1);
//
//    foreach($user->roles as $role)
//
//        return $role->pivot;
//
//});


//// Pull posts where the user is from a specific country

//Route::get('/user/country', function(){
//
//
//
//    $country = Country::find(1);
//
//    foreach($country->posts as $post){
//
//        return $post->title;
//
//    }
//
//});

//// polymorphic relationship - allow a model to belong to more than one other model in a single association

//    Route::get('/user/photos', function(){
//
//            $user = User::find(1);
//
//            foreach($user->photos as $photo){
//
//            return $photo;
//        }
//
//
//    });

//// find owner of an image

//Route::get('/photo/{id}/post', function($id){
//
//    $photo = Photo::findOrFail($id);
//
//        return $photo->imageable;
//
//});

//// Polymorphic Many to Many
//
//Route::get('/post/tag', function(){
//
//    $post = Post::find(1);
//
//    foreach($post->tags as $tag)
//
//        echo $tag->name . "<br>";
//
//});


//Route::get('/tag/post', function(){
//
//    $tag = Tag::find(2);
//
//        foreach($tag->posts as $post)
//
//        echo $post->title . "<br>";
//
//
//});


// CRUD - Application
Route::resource('/posts', 'PostsController');

