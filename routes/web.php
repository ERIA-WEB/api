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

// $app->get('/', function () use ($app) {
//     return $app->version();
// });

$app->get('/', 					'ContentController@index');

/*
** Url API for Publications DB ERIA
*/ 

$app->get('/get/all/publication', 	'PublicationsController@renderPublications');
$app->get('/get/uri/publication', 	'PublicationsController@renderPublicationByURI');
$app->get('/get/id/publication', 	'PublicationsController@renderPublicationByArticleID');