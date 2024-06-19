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

    public function getMenuEvents($article_type, $type, $today, $limit, $published)
    {
        $query = DB::connection('mysql2')
                ->table('articles')
                ->where('article_type', $article_type)
                ->where('published', $published);

        if ($type == 'past') {
            $query->where('start_date', '<', $today);
        } elseif ($type == 'today') {
            $query->where('start_date', $today);
        } elseif ($type == 'future') {
            $query->where('start_date', '>=', $today);
        }

        $data = $query->orderBy('start_date', 'DESC')
                ->limit($limit)
                ->get();

        return $data;
    }

    public function getMenuVideoEvents($article_type, $parent, $category, $limit, $published)
    {
        $data = DB::connection('mysql2')
                ->table('articles')
                ->select('articles.article_id', 'articles.uri', 'articles.title', 'articles.image_name', 'articles.posted_date', 'eria_expert_categories.category')
                ->where('articles.article_type', $article_type)
                ->where('parent', $parent)
                ->where('eria_expert_categories.category', $category)
                ->where('articles.published', $published)
                ->leftJoin('eria_expert_categories', 'eria_expert_categories.ec_id', '=', 'articles.sub_experts')
                ->orderBy('articles.posted_date', 'DESC')
                ->limit($limit)
                ->get();

        return $data;
    }

    public function getMenuReportEvents()
    {
        $data = DB::connection('mysql2')
                ->table('eria_menu_event_reports')
                ->select('eria_menu_event_reports.id', 'eria_menu_event_reports.event_id', 'eria_menu_event_reports.modified_by', 'articles.article_id', 'articles.title', 'articles.uri', 'articles.posted_date')
                ->leftJoin('articles', 'eria_menu_event_reports.event_id', '=', 'articles.article_id')
                ->get();

        return $data;
    }

    public function getMenuCategoryMultimedia()
    {
        $data = [
            [
                'category_name'     => 'Webinars',
                'uri'               => 'webinar',
            ],
            [
                'category_name'     => 'Videos',
                'uri'               => 'video',
            ],
            [
                'category_name'     => 'Podcasts',
                'uri'               => 'podcasts',
            ],
        ];

        return $data;
    }

    public function getMenuFuturedMultimedia($type_future)
    {
        $data = DB::connection('mysql2')
                ->table('articles')
                ->select('articles.*', 'eria_expert_categories.category')
                ->where('articles.article_type', 'multimedia')
                ->where('articles.feature', $type_future)
                ->leftJoin('eria_expert_categories', 'eria_expert_categories.ec_id', '=', 'articles.sub_experts')
                ->first();

        return $data;
    }

    public function getMenuLatestMultimedia($article_type, $limit, $published)
    {
        $data = DB::connection('mysql2')
                ->table('articles')
                ->select('articles.*', 'eria_expert_categories.category')
                ->where('articles.article_type', $article_type)
                ->where('articles.published', $published)
                ->leftJoin('eria_expert_categories', 'eria_expert_categories.ec_id', '=', 'articles.sub_experts')
                ->orderBy('articles.posted_date', 'DESC')
                ->limit($limit)
                ->get();

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

    public function getMenuCategoryPeople($parent)
    {
        $data = DB::connection('mysql2')
                ->table('eria_expert_categories')
                ->select('category', 'slug')
                ->where('parent', $parent)
                ->where('slug', '!=', 'unclassified')
                ->get();

        return $data;
    }
}