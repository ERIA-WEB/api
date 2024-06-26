<?php

namespace App\Http\Controllers;

use App;
use Hash;
use Mail;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\DatabaseAndProgrammesModel as Programmes;

class DatabaseAndProgrammesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->programmes  = new Programmes();
    }

    public function renderDatabaseAndProgrammes(Request $request)
    {
        $published = 1;
        $article_type = 'articles';
        $data = $this->programmes->getAll($published, $article_type);
        if (empty($data) OR count($data) == 0) {
            return response()->json(['message' => 'Data not found'], 404);
        }

        return response()->json($data, 200);
    }

    public function renderDatabaseAndProgrammesByURI(Request $request)
    {
        $uri = $request->get('uri', false);
        $article_type = 'articles';
        
        $data = $this->programmes->getOneBySlug($uri, $article_type);
        
        if (empty($data)) {
            return response()->json(['message' => 'Data not found'], 404);
        }

        return response()->json($data, 200);
    }

    public function renderDatabaseAndProgrammesByArticleID(Request $request)
    {
        $article_id = $request->get('article_id', false);
        $article_type = 'articles';
        
        $data = $this->programmes->getOneByArticleID($article_id, $article_type);
        
        if (empty($data)) {
            return response()->json(['message' => 'Data not found'], 404);
        }

        return response()->json($data, 200);
    }

    public function renderDatabaseAndProgrammesByCategory(Request $request)
    {
        $published = 1;
        $article_type = 'articles';
        $categories = explode(',', $request->get('category', false));

        $data = $this->programmes->getDatabaseAndProgrammesByCatergory($article_type, $categories, $published);
        
        if (empty($data) OR count($data) == 0) {
            return response()->json(['message' => 'Data not found'], 404);
        }

        return response()->json($data, 200);
    }

    public function renderCategories(Request $request)
    {
        $published = 1;
        $article_type = 'articles';
        $category_type = 'categories';

        $data = $this->programmes->getCategory($category_type, $published);

        if (empty($data) OR count($data) == 0) {
            return response()->json(['message' => 'Data not found'], 404);
        }

        return response()->json($data, 200);
    }
}