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

    public function getMenuAseanProgrammes($tag, $limit)
    {
        $data = DB::connection('mysql2')
                ->table('articles')
                ->where('tags', 'LIKE', '%'.$tag.'%')
                ->where('image_name', '!=', '')
                ->orderBy('article_id', 'DESC')
                ->limit($limit)
                ->get();

        return $data;
    }

    public function getMenuProgrammes($type, $published)
    {
        $data = DB::connection('mysql2')
                ->table('categories')
                ->select('*')
                ->where('category_type', $type)
                ->where('published', $published)
                ->orderBy('order_id', 'ASC')
                ->get();

        return $data;
    }
}