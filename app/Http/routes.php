<?php


Route::get('/', array('as' => 'index', 'uses' => 'FrontendController@index'));


Route::get('info_list',['as' => 'info.list', 'uses' => 'InfoController@show']);
Route::get('events',['as' => 'event.list', 'uses' => 'FrontendController@event']);
Route::get('event/{id}',['as' => 'event.single', 'uses' => 'FrontendController@eventSingle']);
Route::get('contact',['as' => 'contact', 'uses' => 'contactController@contact_page']);
Route::post('contact_store',['as' => 'contact.store', 'uses' => 'contactController@store']);




// public routes -- Added by Nayeem
Route::get('home', array('as' => 'home', 'uses' => 'FrontendController@index'));
// Blog Public Page
Route::get('blog',['as' => 'blog.index', 'uses' => 'FrontendController@blogIndex']);


Route::group(['middleware' => 'guest'], function(){

	Route::get('login', ['as'=>'login','uses' => 'Auth\AuthController@login']);
	Route::post('login', ['as'=> 'postlogin','uses' => 'Auth\AuthController@doLogin']);

	Route::get('register', ['as'=>'register','uses' => 'UserController@create']);
	Route::post('register', ['as'=>'postRegister','uses' => 'UserController@store']);
	
	// Password reset link request routes...
	Route::get('password/email', ['as' => 'passwordRequest','uses' => 'Auth\PasswordController@getEmail']);
	Route::post('password/email', ['as' => 'postPasswordRequest', 'uses' => 'Auth\PasswordController@postEmail']);
	// Password reset routes...
	Route::get('password/reset/{token}', ['as' => 'getReset', 'uses' =>'Auth\PasswordController@getReset']);
	Route::post('password/reset', ['as' => 'postReset', 'uses' => 'Auth\PasswordController@postReset']);

	// social login route
	Route::get('login/fb', ['as'=>'login/fb','uses' => 'SocialController@loginWithFacebook']);
	Route::get('login/gp', ['as'=>'login/gp','uses' => 'SocialController@loginWithGoogle']);

	


   

});

Route::group(array('middleware' => 'auth'), function()
{
	Route::get('logout', ['as' => 'logout', 'uses' => 'Auth\AuthController@logout']);
	Route::get('profile', ['as' => 'profile', 'uses' => 'UserController@profile']);
	Route::get('settings', ['as' => 'settings', 'uses' => 'UserController@settings']);

	 Route::get('dashboard', array('as' => 'dashboard', 'uses' => 'Auth\AuthController@dashboard'));

	Route::get('change-password', array('as' => 'password.change', 'uses' => 'Auth\AuthController@changePassword'));
	Route::post('change-password', array('as' => 'password.doChange', 'uses' => 'Auth\AuthController@doChangePassword'));

	// Blog CRUD for bloggers
	Route::get('blog/myArticle',['as' => 'blog.myblog', 'uses' => 'BlogController@myblog']);
	Route::get('blog/create',['as' => 'blog.create', 'uses' => 'BlogController@create']);
	Route::post('blog',['as' => 'blog.store', 'uses' => 'BlogController@store']);
	Route::get('blog/{id}/edit',['as' => 'blog.edit', 'uses' => 'BlogController@edit']);
	Route::get('blog/{id}/show',['as' => 'blog.show', 'uses' => 'BlogController@show']);
	Route::put('blog/{id}',['as' => 'blog.update', 'uses' => 'BlogController@update']);
	Route::delete('blog/{id}',['as' => 'blog.delete', 'uses' => 'BlogController@destroy']);

    //Pending List Of Blog in  Admin Panel

    Route::get('pending_blog',['as' => 'pending.blog', 'uses' => 'BlogController@pending_list']);
    Route::get('AdminSingleBlog/{id}',['as' => 'admin.blog.single', 'uses' => 'BlogController@AdminSingleBlog']);
    Route::get('acceptblog/{id}/',['as' => 'accept.blog', 'uses' => 'BlogController@AcceptBlog']);
    Route::get('ignoreblog/{id}/',['as' => 'ignore.blog', 'uses' => 'BlogController@ignoreBlog']);

});

Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'role:admin']], function()
{
	// Route::get('dashboard', array('as' => 'dashboard', 'uses' => 'Auth\AuthController@dashboard'));

	// Event CRUD by Nayeem start
   Route::get('event',['as' => 'event.index', 'uses' => 'EventController@index']);
   Route::get('event/create',['as' => 'event.create', 'uses' => 'EventController@create']);
   Route::post('event',['as' => 'event.store', 'uses' => 'EventController@store']);
   Route::get('event/{id}/show',['as' => 'event.show', 'uses' => 'EventController@show']);
   Route::get('event/{id}/edit',['as' => 'event.edit', 'uses' => 'EventController@edit']);
   Route::put('event/{id}',['as' => 'event.update', 'uses' => 'EventController@update']);
   Route::delete('event/{id}',['as' => 'event.delete', 'uses' => 'EventController@destroy']);

   // Mithun end

   // any new admin panel route must be added here 
    Route::get('user',['as' => 'user.index', 'uses' => 'UserController@index']);
	Route::get('user/{id}/edit',['as' => 'user.edit', 'uses' => 'UserController@edit']);
	Route::get('user/{id}/show',['as' => 'user.show', 'uses' => 'UserController@show']);
	Route::put('user/{id}',['as' => 'user.update', 'uses' => 'UserController@update']);
	Route::delete('user/{id}',['as' => 'user.delete', 'uses' => 'UserController@destroy']);
	
});


 //  info CRUD
   Route::get('info',['as' => 'info.index', 'uses' => 'InfoController@index']);
   Route::get('info/create',['as' => 'info.create', 'uses' => 'InfoController@create']);
   Route::post('info',['as' => 'info.store', 'uses' => 'InfoController@store']);
   Route::get('info/{id}/show',['as' => 'info.show', 'uses' => 'InfoController@show']);
   Route::get('info/{id}/edit',['as' => 'info.edit', 'uses' => 'InfoController@edit']);
   Route::put('project/{id}',['as' => 'project.update', 'uses' => 'ProjectController@update']);
   Route::delete('info/{id}',['as' => 'info.delete', 'uses' => 'InfoController@destroy']);


	// Category CRUD
    Route::get('category',['as' => 'category.index', 'uses' => 'CategoryController@index']);
	Route::get('category/create',['as' => 'category.create', 'uses' => 'CategoryController@create']);
	Route::post('category',['as' => 'category.store', 'uses' => 'CategoryController@store']);
	Route::get('category/{id}/edit',['as' => 'category.edit', 'uses' => 'CategoryController@edit']);
	Route::get('category/{id}/show',['as' => 'category.show', 'uses' => 'CategoryController@show']);
	Route::put('category/{id}',['as' => 'category.update', 'uses' => 'CategoryController@update']);
	Route::delete('category/{id}',['as' => 'category.delete', 'uses' => 'CategoryController@destroy']);
   


     //Content CRUD

     Route::get('content/create',['as' => 'content.create', 'uses' => 'ContentController@create']);
     Route::post('content',['as' => 'content.store', 'uses' => 'ContentController@store']);
  

     //USER PAGE

     Route::get('blog/{title}',['as' => 'blog.single', 'uses' => 'FrontendController@blogSingle']);



	/* will be Commented Out */
	// Demo CRUD
	Route::get('demo',['as' => 'demo.index', 'uses' => 'DemoController@index']);
	Route::get('demo/create',['as' => 'demo.create', 'uses' => 'DemoController@create']);
	Route::post('demo',['as' => 'demo.store', 'uses' => 'DemoController@store']);
	Route::get('demo/{id}/edit',['as' => 'demo.edit', 'uses' => 'DemoController@edit']);
	Route::get('demo/{id}/show',['as' => 'demo.show', 'uses' => 'DemoController@show']);
	Route::put('demo/{id}',['as' => 'demo.update', 'uses' => 'DemoController@update']);
	Route::get('demo/delete/{id}',['as' => 'demo.delete', 'uses' => 'DemoController@destroy']);




	 // Language CRUD
/*	Route::get('language',['as' => 'language.index', 'uses' => 'LanguageController@index']);
	Route::get('language/create',['as' => 'language.create', 'uses' => 'LanguageController@create']);
	Route::post('language',['as' => 'language.store', 'uses' => 'LanguageController@store']);
	Route::get('language/{id}/edit',['as' => 'language.edit', 'uses' => 'LanguageController@edit']);
	Route::get('language/{id}/show',['as' => 'language.show', 'uses' => 'LanguageController@show']);
	Route::put('language/{id}',['as' => 'language.update', 'uses' => 'LanguageController@update']);
	Route::delete('language/{id}',['as' => 'language.delete', 'uses' => 'LanguageController@destroy']);

*/

	/*New template route*/

	Route::get('/web/about',['as' => 'about', 'uses' => 'pageController@about']);

