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
}