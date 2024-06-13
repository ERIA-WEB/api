<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;

class PublicationModel
{
    public function create($result)
    {
        return DB::table('articles')->insertGetid($result);
    }

    public function getOneBySlug($uri, $article_type)
    {
        $published = 1;

        $data = DB::connection('mysql2')
                ->table('articles')
                ->where('article_type', $article_type)
                ->where('uri', $uri)
                ->where('published', $published)
                ->first();
                
        return $data;
    }

    public function getAll($published, $article_type)
    {
        $data = DB::connection('mysql2')
                ->table('articles')
                ->where('article_type', $article_type)
                ->where('published', $published)
                ->orderBy('created_date', 'DESC')
                ->get();
                
        return $data;
    }

    public function getOneByArticleID($article_id, $article_type)
    {
        $published = 1;

        $data = DB::connection('mysql2')
                ->table('articles')
                ->where('article_type', $article_type)
                ->where('article_id', $article_id)
                ->where('published', $published)
                ->first();
                
        return $data;
    }

    public function getPublicationByCatergory($article_type, $categories, $published)
    {
        $data = DB::connection('mysql2')
                ->table('article_categories')
                ->select('articles.*')
                ->leftJoin('articles', 'articles.article_id', '=', 'article_categories.article_id')
                ->leftJoin('categories', 'categories.category_id', '=', 'article_categories.category_id')
                ->where('articles.article_type', '=', $article_type)
                ->where('articles.published', '=', $published)
                ->whereIn('categories.uri', $categories)
                ->orderBy('posted_date', 'DESC')
                ->get();

        return $data;
    }

    public function getCategory($category_type)
    {
        $data = DB::connection('mysql2')
                ->table('categories')
                ->select('*')
                ->where('category_type', $category_type)
                ->where('published', 1)
                ->get();;

        return $data;
    }
}