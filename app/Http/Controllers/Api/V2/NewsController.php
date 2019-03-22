<?php

namespace App\Http\Controllers\Api\V2;


use App\Models\Access\User\User;
use App\Http\Controllers\Api\V1\APIController;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Settings\Setting;
use App\Models\Blogs\Blog;
use Illuminate\Support\Facades\DB;
use App\Repositories\Frontend\Pages\PagesRepository;
use App\Repositories\Frontend\Blogs\BlogsRepository;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Input;
use App\Http\Requests;
use App\Models\BlogTags\Traits\Attribute\BlogTagAttribute;
use App;
use Lang;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;

class NewsController extends APIController
{
    protected $repository;

    /**
     * __construct.
     *
     * @param $repository
     */
    public function __construct(BlogsRepository $repository)
    {
        $this->repository = $repository;
    }

    // news = 5
    // standar produck = 17
    // pengembangan = 18
   
    public function getNews()
    {
        $news=DB::table('blogs')
        ->join('blog_map_categories','blogs.id','=','blog_map_categories.blog_id')
        ->where('blog_map_categories.category_id','5')
        ->where('status','Published')
        ->orderBy('created_at','desc')->get();

        return $this->respond([
            'data'   => $news
        ]);
    }
    public function getData($values)
    {
        $news=DB::table('blogs')
        ->join('blog_map_categories','blogs.id','=','blog_map_categories.blog_id')
        ->where('blog_map_categories.category_id',$values)
        ->where('status','Published')
        ->orderBy('created_at','desc')->get();

        // return $this->respond([
        //     'data'   => $news
        // ]);
        return $this->respond(
            $news);
    }
    public function getProductsDevelopment()
    {
        $news=DB::table('blogs')
        ->join('blog_map_categories','blogs.id','=','blog_map_categories.blog_id')
        ->where('blog_map_categories.category_id','5')
        ->where('status','Published')
        ->orderBy('created_at','desc')->get();

        return $this->respond([
            'data'   => $news
        ]);
    }
    public function showProducts($slug, BlogsRepository $pages)
    {
        $result = $pages->findBySlug($slug);
        return $this->respond([
            'data'   => [$result]
        ]);
    }
}
