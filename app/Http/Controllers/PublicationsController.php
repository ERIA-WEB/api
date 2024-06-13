<?php

namespace App\Http\Controllers;

use App;
use Hash;
use Mail;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\PublicationModel as Publications;

class PublicationsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->publication  = new Publications();
    }

    public function renderPublications(Request $request)
    {
        $published = 1;
        $article_type = 'publications';
        $data = $this->publication->getAll($published, $article_type);
        if (empty($data) OR count($data) == 0) {
            return response()->json(['message' => 'Data not found'], 404);
        }

        return response()->json($data, 200);
    }

    public function renderPublicationByURI(Request $request)
    {
        $uri = $request->get('uri', false);
        $article_type = 'publications';
        
        $data = $this->publication->getOneBySlug($uri, $article_type);
        
        if (empty($data) OR count($data) == 0) {
            return response()->json(['message' => 'Data not found'], 404);
        }

        return response()->json($data, 200);
    }

    public function renderPublicationByArticleID(Request $request)
    {
        $article_id = $request->get('article_id', false);
        $article_type = 'publications';
        
        $data = $this->publication->getOneByArticleID($article_id, $article_type);
        
        if (empty($data)) {
            return response()->json(['message' => 'Data not found'], 404);
        }

        return response()->json($data, 200);
    }

    public function renderPublicationByCategory(Request $request)
    {
        $published = 1;
        $article_type = 'publications';
        $categories = explode(',', $request->get('category', false));

        $data = $this->publication->getPublicationByCatergory($article_type, $categories, $published);
        
        if (empty($data) OR count($data) == 0) {
            return response()->json(['message' => 'Data not found'], 404);
        }

        return response()->json($data, 200);
    }

    public function renderCategories(Request $request)
    {
        $published = 1;
        $article_type = 'publications';
        $category_type = 'pubtypes';

        $data = $this->publication->getCategory($category_type);

        if (empty($data) OR count($data) == 0) {
            return response()->json(['message' => 'Data not found'], 404);
        }

        return response()->json($data, 200);
    }
}