<?php


Route::get('/cropper', 'ImageHelperController@index');
Route::resource('photo', 'PhotosController');

Route::group(['prefix' => 'cms'],  function () {
    Route::group(['middleware' => ['auth']], function(){

    	// --- CORE ROUTES ONLY
        Route::get('/logout', 'LogOutController@index');
        Route::get('/', 'CmsController@index');

        // ----------------- GENERIC ROUTES FOR EVERY PROJECT GO HERE ----------

        Route::resource('page', 'PageController');
        Route::resource('section', 'SectionController');


        // ------ CUSTOM ROUTES GO UNDERNEATH HERE ----------------


    });
});

Route::get('/', 'HomepageController@index');


Route::auth();
Auth::routes();