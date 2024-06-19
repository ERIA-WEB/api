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

    public function getMenuFuturedPublication($type)
    {
        $data = DB::connection('mysql2')
                ->table('articles')
                ->select('*')
                ->where('feature', $type)
                ->first();

        return $data;
    }

    public function getMenuPublication($article_type, $limit, $published)
    {
        $data = DB::connection('mysql2')
                ->table('articles')
                ->select('*')
                ->where('article_type', $article_type)
                ->where('published', $published)
                ->orderBy('posted_date', 'DESC')
                ->limit($limit)
                ->get();

        return $data;
    }

    public function getMenuCategoryPublication($category_type, $published)
    {
        $data = DB::connection('mysql2')
                ->table('categories')
                ->select('*')
                ->where('category_type', $category_type)
                ->where('published', $published)
                ->get();

        return $data;
    }

    public function getMenuLatestUpdates($article_type, $limit, $published)
    {
        $data = DB::connection('mysql2')
                ->table('articles')
                ->where('article_type', $article_type)
                ->where('published', $published)
                ->orderBy('posted_date', 'DESC')
                ->limit($limit)
                ->get();;

        return $data;
    }

    public function getMenuCategoryUpdates($category_type, $published)
    {
        $data = DB::connection('mysql2')
                ->table('categories')
                ->where('category_type', $category_type)
                ->where('published', $published)
                ->get();

        return $data;
    }

    public function getMenuFuturedUpdate($feature)
    {
        $data = DB::connection('mysql2')
                ->table('articles')
                ->where('feature', $feature)
                ->first();

        return $data;
    }

    public function getMenuAboutUs($parent_id, $is_delete, $published)
    {
        $data = DB::connection('mysql2')
                ->table('pages')
                ->select('*')
                ->where('parent_id', $parent_id)
                ->where('published', $published)
                ->where('is_delete', '!=', $is_delete)
                ->orderBy('order_id', 'ASC')
                ->get();

        return $data;
    }
}