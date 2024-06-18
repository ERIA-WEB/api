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
}