<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;

class MegaMenuModel
{
    public function getResearchAreas($type, $published, $limit)
    {

        $query = DB::connection('mysql2')
                ->table('categories')
                ->select('*')
                ->where('category_type', $type)
                ->where('published', $published);

        if ($type == 'topics') {
            $query->where('uri', '!=', 'co-publications');
        }

        if ($limit != 0) {
            $query->limit($limit);
        }

        $data = $query->get();
                
        return $data;
    }
}