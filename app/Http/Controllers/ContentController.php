<?php

namespace App\Http\Controllers;

use App;
use Hash;
use Mail;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\PublicationModel as Publications;

class ContentController extends Controller
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

    public function index(Request $request) 
    {
        $data = [
            'indexing'  => 'Documentation : This is API ERIA Dude!',
        ];

        return view('home', $data);
    }

    public function renderPublicationByURI(Request $request)
    {
        $uri = $request->get('uri', false);
        // dd($uri);
        $get_publication_by_uri = $this->publication->getOneBySlug($uri);
        $data = [
            'publications' => $get_publication_by_uri,
        ];

        return response()->json($data, 200);
    }
}