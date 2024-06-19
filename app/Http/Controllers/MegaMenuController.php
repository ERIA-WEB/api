<?php

namespace App\Http\Controllers;

use App;
use Hash;
use Mail;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\MegaMenuModel as Megamenu;

class MegaMenuController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->mega_menu  = new Megamenu();
    }

    public function renderResearchAreas(Request $request)
    {
        $published = 1;
        $type = 'topics';

        $limit = 0;

        $data = $this->mega_menu->getResearchAreas($type, $published, $limit);
        if (empty($data) OR count($data) == 0) {
            return response()->json(['message' => 'Data not found'], 404);
        }

        return response()->json($data, 200);
    }

    public function renderMenuAseanProgrammes(Request $request)
    {
        $published = 1;
        $tag = 'ASEAN';

        $limit = 4;

        $data = $this->mega_menu->getMenuAseanProgrammes($tag, $limit);
        if (empty($data) OR count($data) == 0) {
            return response()->json(['message' => 'Data not found'], 404);
        }

        return response()->json($data, 200);
    }

    public function renderMenuProgrammes(Request $request)
    {
        $published = 1;
        $type = 'categories';

        $data = $this->mega_menu->getMenuProgrammes($type, $published);
        if (empty($data) OR count($data) == 0) {
            return response()->json(['message' => 'Data not found'], 404);
        }

        return response()->json($data, 200);
    }

    public function renderMenuFuturedPublication(Request $request)
    {
        $type = 'pub';

        $data = $this->mega_menu->getMenuFuturedPublication($type);

        if (empty($data)) {
            return response()->json(['message' => 'Data not found'], 404);
        }

        return response()->json($data, 200);
    }

    public function renderMenuLatestPublication(Request $request)
    {
        $article_type = 'publications';
        $limit = 3;
        $published = 1;
        
        $data = $this->mega_menu->getMenuPublication($article_type, $limit, $published);
        if (empty($data) OR count($data) == 0) {
            return response()->json(['message' => 'Data not found'], 404);
        }

        return response()->json($data, 200);
    }

    public function renderMenuCategoryPublication(Request $request)
    {
        $published = 1;
        $category_type = 'pubtypes';
        
        $data = $this->mega_menu->getMenuCategoryPublication($category_type, $published);

        if (empty($data) OR count($data) == 0) {
            return response()->json(['message' => 'Data not found'], 404);
        }

        return response()->json($data, 200);   
    }

    public function renderMenuLatestUpdates(Request $request)
    {
        $article_type = 'news';
        $limit = 3;
        $published = 1;

        $data = $this->mega_menu->getMenuLatestUpdates($article_type, $limit, $published);

        if (empty($data) OR count($data) == 0) {
            return response()->json(['message' => 'Data not found'], 404);
        }

        return response()->json($data, 200);  
    }

    public function renderMenuCategoryUpdates(Request $request)
    {
        $category_type = 'newscategories';
        $published = 1;
        
        $data = $this->mega_menu->getMenuCategoryUpdates($category_type, $published);

        if (empty($data) OR count($data) == 0) {
            return response()->json(['message' => 'Data not found'], 404);
        }

        return response()->json($data, 200);  
    }

    public function renderMenuFuturedUpdates(Request $request)
    {
        $feature = 'updates';

        $data = $this->mega_menu->getMenuFuturedUpdate($feature);

        if (empty($data)) {
            return response()->json(['message' => 'Data not found'], 404);
        }

        return response()->json($data, 200);
    }

    public function renderMenuAboutUs(Request $request)
    {
        $parent_id = 7;
        $published = 1;
        $is_delete = 1;
        
        $data = $this->mega_menu->getMenuAboutUs($parent_id, $is_delete, $published);

        if (empty($data) OR count($data) == 0) {
            return response()->json(['message' => 'Data not found'], 404);
        }

        return response()->json($data, 200);   
    }
}