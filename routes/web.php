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

$app->get('/get/all/publication', 	        'PublicationsController@renderPublications');
$app->get('/get/uri/publication', 	        'PublicationsController@renderPublicationByURI');
$app->get('/get/id/publication', 	        'PublicationsController@renderPublicationByArticleID');
$app->get('/get/category/publication', 	    'PublicationsController@renderPublicationByCategory');      
$app->get('/get/categories/publication', 	'PublicationsController@renderCategories');    

/*
** Url API for News And Views DB ERIA
*/ 

$app->get('/get/all/news-and-views', 	        'NewsAndViewsController@renderNewsAndViews');
$app->get('/get/uri/news-and-views', 	        'NewsAndViewsController@renderNewsAndViewsByURI');
$app->get('/get/id/news-and-views', 	        'NewsAndViewsController@renderNewsAndViewsByArticleID');
$app->get('/get/category/news-and-views', 	    'NewsAndViewsController@renderNewsAndViewsByCategory');      
$app->get('/get/categories/news-and-views', 	'NewsAndViewsController@renderCategories');    

/*
** Url API for Database And Programmes DB ERIA
*/ 

$app->get('/get/all/database-and-programmes', 	        'DatabaseAndProgrammesController@renderDatabaseAndProgrammes');
$app->get('/get/uri/database-and-programmes', 	        'DatabaseAndProgrammesController@renderDatabaseAndProgrammesByURI');
$app->get('/get/id/database-and-programmes', 	        'DatabaseAndProgrammesController@renderDatabaseAndProgrammesByArticleID');
$app->get('/get/category/database-and-programmes', 	    'DatabaseAndProgrammesController@renderDatabaseAndProgrammesByCategory');      
$app->get('/get/categories/database-and-programmes', 	'DatabaseAndProgrammesController@renderCategories');   

/*
** Url API for Events DB ERIA
*/ 

$app->get('/get/all/events', 	        'EventsController@renderEvents');
$app->get('/get/uri/events', 	        'EventsController@renderEventsByURI');
$app->get('/get/id/events', 	        'EventsController@renderEventsByArticleID');
$app->get('/get/category/events', 	    'EventsController@renderEventsByCategory');      
$app->get('/get/categories/events', 	'EventsController@renderCategories');   

/*
** Url API for Multimedia DB ERIA
*/ 

$app->get('/get/all/multimedia', 	        'MultimediaController@renderMultimedia');
$app->get('/get/uri/multimedia', 	        'MultimediaController@renderMultimediaByURI');
$app->get('/get/id/multimedia', 	        'MultimediaController@renderMultimediaByArticleID');
$app->get('/get/category/multimedia', 	    'MultimediaController@renderMultimediaByCategory');      
$app->get('/get/categories/multimedia', 	'MultimediaController@renderCategories');   

/*
** Url API for Mega Menu DB ERIA
*/ 

$app->get('/get/research-areas/topic', 	        'MegaMenuController@renderResearchAreas');

$app->get('/get/programmes/tag/asean', 	        'MegaMenuController@renderMenuAseanProgrammes');
$app->get('/get/programmes', 	                'MegaMenuController@renderMenuProgrammes');

$app->get('/get/publication/get/future', 	    'MegaMenuController@renderMenuFuturedPublication');
$app->get('/get/publication/get/categories', 	'MegaMenuController@renderMenuCategoryPublication');
$app->get('/get/publication/latest', 	        'MegaMenuController@renderMenuLatestPublication');

$app->get('/get/updates/get/categories', 	    'MegaMenuController@renderMenuCategoryUpdates');
$app->get('/get/updates/get/future', 	        'MegaMenuController@renderMenuFuturedUpdates');
$app->get('/get/updates/latest', 	            'MegaMenuController@renderMenuLatestUpdates');

$app->get('/get/about-us', 	                    'MegaMenuController@renderMenuAboutUs');