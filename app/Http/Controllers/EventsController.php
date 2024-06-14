<?php

namespace App\Http\Controllers;

use App;
use Hash;
use Mail;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\EventsModel as Events;

class EventsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->event  = new Events();
    }

    public function renderEvents(Request $request)
    {
        $published = 1;
        $article_type = 'events';
        $data = $this->event->getAll($published, $article_type);
        if (empty($data) OR count($data) == 0) {
            return response()->json(['message' => 'Data not found'], 404);
        }

        return response()->json($data, 200);
    }

    public function renderEventsByURI(Request $request)
    {
        $uri = $request->get('uri', false);
        $article_type = 'events';
        
        $data = $this->event->getOneBySlug($uri, $article_type);
        
        if (empty($data)) {
            return response()->json(['message' => 'Data not found'], 404);
        }

        return response()->json($data, 200);
    }

    public function renderEventsByArticleID(Request $request)
    {
        $article_id = $request->get('article_id', false);
        $article_type = 'events';
        
        $data = $this->event->getOneByArticleID($article_id, $article_type);
        
        if (empty($data)) {
            return response()->json(['message' => 'Data not found'], 404);
        }

        return response()->json($data, 200);
    }

    public function renderEventsByCategory(Request $request)
    {
        $published = 1;
        $article_type = 'events';
        $categories = explode(',', $request->get('category', false));

        $data = $this->event->getEventsByCatergory($article_type, $categories, $published);
        
        if (empty($data) OR count($data) == 0) {
            return response()->json(['message' => 'Data not found'], 404);
        }

        return response()->json($data, 200);
    }

    public function renderCategories(Request $request)
    {
        $published = 1;
        $article_type = 'events';
        $category_type = 'categories';

        $data = $this->event->getCategory($category_type, $published);

        if (empty($data) OR count($data) == 0) {
            return response()->json(['message' => 'Data not found'], 404);
        }

        return response()->json($data, 200);
    }
}