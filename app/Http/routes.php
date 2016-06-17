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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/analytics', function(){
	$client = new GuzzleHttp\Client();
	$res = $client->request('GET', 'https://cloud.estimote.com/v1/analytics/visits?from=1448928000&to=1451606399&granularity=daily', [
	    'auth' => ['radar-test-web-app-a3s', '651a6208cc946b7a105300609a7caa60']
	]);
	echo $res->getBody();

});