<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::group(array("before" => "guest"), function()
{
    $resources = Resource::where("secure", false)->get();

    foreach ($resources as $resource)
    {
        Route::any($resource->pattern, array(
            "as"    => $resource->name,
            "uses"  => $resource->target
        ));
    }
    /*Route::any('/', array(

        "as"    => "user/login",
        "uses"  => "UserController@loginAction"
    ));

    Route::any('/request', array(
        "as"    => "user/request",
        "uses"  => "UserController@requestAction"
    ));

    Route::any('/reset', array(
        "as"    => "user/reset",
        "uses"  => "UserController@resetAction"
    ));*/

});

Route::group(array("before" => "auth"), function()
{
    $resources = Resource::where("secure", true)->get();

    foreach ($resources as $resource)
    {
        Route::any($resource->pattern, array(
            "as"    => $resource->name,
            "uses"  => $resource->target
        ));
    }

    /*Route::any('/profile', array(

        "as"    => "user/profile",
        "uses"  => "UserController@profileAction"
    ));

    Route::any('/logout', array(
        "as"    => "user/logout",
        "uses"  => "UserController@logoutAction"
    ));

    Route::any("/group/index", array(
        "as"    => "group/index",
        "uses"  => "GroupController@indexAction"
    ));

    Route::any("/group/add", array(
        "as"    => "group/add",
        "uses"  => "GroupController@addAction"
    ));

    Route::any("/group/edit", array(
        "as"    => "group/edit",
        "uses"  => "GroupController@editAction"
    ));

    Route::any("/group/delete", array(
        "as"    => "group/delete",
        "uses"  => "GroupController@deleteAction"
    ));*/
});