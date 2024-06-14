<?php

namespace App\Http\Controllers;

use App;
use Hash;
use Mail;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\NewsAndViewsModel as News;

class NewsAndViewsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->news_and_views  = new News();
    }

    public function renderNewsAndViews(Request $request)
    {
        $published = 1;
        $article_type = 'news';
        $data = $this->news_and_views->getAll($published, $article_type);
        if (empty($data) OR count($data) == 0) {
            return response()->json(['message' => 'Data not found'], 404);
        }

        return response()->json($data, 200);
    }

    public function renderNewsAndViewsByURI(Request $request)
    {
        $uri = $request->get('uri', false);
        $article_type = 'news';
        
        $data = $this->news_and_views->getOneBySlug($uri, $article_type);
        
        if (empty($data)) {
            return response()->json(['message' => 'Data not found'], 404);
        }

        return response()->json($data, 200);
    }

    public function renderNewsAndViewsByArticleID(Request $request)
    {
        $article_id = $request->get('article_id', false);
        $article_type = 'news';
        
        $data = $this->news_and_views->getOneByArticleID($article_id, $article_type);
        
        if (empty($data)) {
            return response()->json(['message' => 'Data not found'], 404);
        }

        return response()->json($data, 200);
    }

    public function renderNewsAndViewsByCategory(Request $request)
    {
        $published = 1;
        $article_type = 'news';
        $categories = explode(',', $request->get('category', false));

        $data = $this->news_and_views->getNewsAndViewsByCatergory($article_type, $categories, $published);
        
        if (empty($data) OR count($data) == 0) {
            return response()->json(['message' => 'Data not found'], 404);
        }

        return response()->json($data, 200);
    }

    public function renderCategories(Request $request)
    {
        $published = 1;
        $article_type = 'news';
        $category_type = 'newscategories';

        $data = $this->news_and_views->getCategory($category_type);

        if (empty($data) OR count($data) == 0) {
            return response()->json(['message' => 'Data not found'], 404);
        }

        return response()->json($data, 200);
    }
}