<?php

/*
|--------------------------------------------------------------------------
| Global Variables / Functions
|--------------------------------------------------------------------------
*/


# Register The Laravel Class Loader
ClassLoader::addDirectories([

	app_path().'/commands',
	app_path().'/controllers',
	app_path().'/models',
	app_path().'/database/seeds',

]);


# Application Error Logger
Log::useFiles(storage_path().'/logs/laravel.log');


# Application Error Handler
App::error(function(Exception $exception, $code)
{
	Log::error($exception);
});


# Maintenance Mode Handler
App::down(function()
{
	return Response::make("Be right back!", 503);
});


# 404 Error Handler
App::missing(function()
{
	return Response::view('404', ['page_title' => '404 Not Found'], 404);
});


# Require The Filters File
require app_path().'/filters.php';


# Require The Application Constants File
require app_path().'/config/app_settings.php';