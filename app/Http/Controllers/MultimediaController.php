<?php

namespace App\Http\Controllers;

use App;
use Hash;
use Mail;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\MultimediaModel as Multimedia;

class MultimediaController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->multimedia  = new Multimedia();
    }

    public function renderMultimedia(Request $request)
    {
        $published = 1;
        $article_type = 'multimedia';
        $data = $this->multimedia->getAll($published, $article_type);
        if (empty($data) OR count($data) == 0) {
            return response()->json(['message' => 'Data not found'], 404);
        }

        return response()->json($data, 200);
    }

    public function renderMultimediaByURI(Request $request)
    {
        $uri = $request->get('uri', false);
        $article_type = 'multimedia';
        
        $data = $this->multimedia->getOneBySlug($uri, $article_type);
        
        if (empty($data)) {
            return response()->json(['message' => 'Data not found'], 404);
        }

        return response()->json($data, 200);
    }

    public function renderMultimediaByArticleID(Request $request)
    {
        $article_id = $request->get('article_id', false);
        $article_type = 'multimedia';
        
        $data = $this->multimedia->getOneByArticleID($article_id, $article_type);
        
        if (empty($data)) {
            return response()->json(['message' => 'Data not found'], 404);
        }

        return response()->json($data, 200);
    }

    public function renderMultimediaByCategory(Request $request)
    {
        $published = 1;
        $article_type = 'multimedia';
        $categories = explode(',', $request->get('category', false));

        $data = $this->multimedia->getMultimediaByCatergory($article_type, $categories, $published);
        
        if (empty($data) OR count($data) == 0) {
            return response()->json(['message' => 'Data not found'], 404);
        }

        return response()->json($data, 200);
    }

    public function renderCategories(Request $request)
    {
        $published = 1;
        $article_type = 'multimedia';
        $category_type = 'categories';

        $data = $this->multimedia->getCategory($category_type, $published);

        if (empty($data) OR count($data) == 0) {
            return response()->json(['message' => 'Data not found'], 404);
        }

        return response()->json($data, 200);
    }
}