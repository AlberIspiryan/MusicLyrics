<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/
/** Public Paths */

$router->get('/', ['uses' => 'HomeController@index']);
$router->get('/Documentation', ['uses' => 'DocumentationController@index']);

/** Api Routes
*
*      Artist ID
*      Artist Details
*
*/
$router->group(['prefix' => 'api'], function () use ($router) {
    $router->get('artists/{name}', ['uses' => 'ApiControllers\ArtistsController@showOneArtist']);
    $router->get('artistsDetails/{id}', ['uses' => 'ApiControllers\ArtistsController@showOneArtistDetails']);
    $router->get('{artistId}/albums', ['uses' => 'ApiControllers\ArtistsController@showOneArtistAlbums']) ;
});


/** PHP info path */

$router->get('/phpinfo', function () use ($router) {
    return phpinfo();
});