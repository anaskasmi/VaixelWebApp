<?php

//Clear Config cache:
Route::get('/routeList', function () {
    $exitCode = Artisan::call('route:list');
    dd(Artisan::output());
    return '<h1>' . $exitCode . '</h1>';
});


///////////////////////////////////////////////////////////////////////////////////////////
//admin's routes
Route::prefix('/admin')->name('admin.')->namespace('Admin')->group(function () {
    //login route
    Route::post('auth/login', 'AuthController@login');
    //Protected Routes
    Route::group(['middleware' => 'apiAuth:admin'], function () {

        //auth
        Route::get('auth/user', 'AuthController@user');
        Route::post('auth/logout', 'AuthController@logout');
        Route::post('auth/changePassword', 'AuthController@changePassword');
    });

});

//Marketer's routes
Route::prefix('/marketer')->name('marketer.')->namespace('Marketer')->group(function () {

    //auth
    Route::post('auth/login', 'AuthController@login');
    Route::group(['middleware' => 'apiAuth:marketer'], function () {

        //Auth
        Route::post('auth/logout', 'AuthController@logout');
        Route::get('auth/user', 'AuthController@user');
        Route::post('auth/changePassword', 'AuthController@changePassword');
    });

});

//investor's routes
Route::prefix('/investor')->name('investor.')->namespace('Investor')->group(function () {

    Route::post('auth/login', 'AuthController@login');
    Route::group(['middleware' => 'apiAuth:investor'], function () {
        //auth
        Route::post('auth/logout', 'AuthController@logout');
        Route::get('auth/user', 'AuthController@user');
        Route::post('auth/changePassword', 'AuthController@changePassword');

    });

});

//driver's routes
Route::prefix('/driver')->name('driver.')->namespace('Driver')->group(function () {

    Route::post('auth/login', 'AuthController@login');
    Route::group(['middleware' => 'apiAuth:driver'], function () {
        //auth
        Route::post('auth/logout', 'AuthController@logout');
        Route::get('auth/user', 'AuthController@user');
        Route::post('auth/changePassword', 'AuthController@changePassword');
    });

});
//Landing page routes
Route::prefix('/content')->middleware(['Cors'])->name('content.')->namespace('content')->group(function () {

    Route::apiResource('bloc01', 'bloc01Controller');
    Route::apiResource('bloc02', 'bloc02Controller');
    Route::apiResource('bloc03', 'bloc03Controller');
    Route::apiResource('bloc04', 'bloc04Controller');
    Route::apiResource('bloc05', 'bloc05Controller');
    Route::apiResource('bloc06', 'bloc06Controller');
    Route::apiResource('bloc07', 'bloc07Controller');
    Route::apiResource('bloc08', 'bloc08Controller');
    Route::apiResource('bloc09', 'bloc09Controller');
    Route::apiResource('bloc10', 'bloc10Controller');
    Route::apiResource('bloc11', 'bloc11Controller');
    Route::apiResource('bloc12', 'bloc12Controller');
    Route::apiResource('bloc13', 'bloc13Controller');
    Route::apiResource('bloc14', 'bloc14Controller');
    Route::apiResource('bloc15', 'bloc15Controller');
    Route::apiResource('bloc15', 'bloc15Controller');
    Route::apiResource('bloc16', 'bloc16Controller');
    Route::Get('questions', 'bloc16Controller@questions');
    Route::Get('categories', 'bloc16Controller@categories');
});
