<?php

namespace App\Repositories\Frontend\Blogs;

use App\Exceptions\GeneralException;
use App\Models\Blogs\Blog;
use App\Repositories\BaseRepository;
use Illuminate\Support\Facades\DB;
/**
 * Class BlogsRepository.
 */
class BlogsRepository extends BaseRepository
{
    /**
     * Associated Repository Model.
     */
    const MODEL = Blog::class;

    /*
    * Find blog by slug
    */
    public function findBySlug($slug)
    {
        if (!is_null($this->query()->whereslug($slug)->firstOrFail())) {
            $count = $this->query()->whereslug($slug)->firstOrFail();
            $count->count = $count->count + 1;
            $count->save();
            //return  $this->query()->whereslug($slug)->firstOrFail();
            return  $this->query()
            ->join('users','blogs.created_by','=','users.id')
            ->join('blog_map_categories','blogs.id','=','blog_map_categories.blog_id')
            ->whereslug($slug)->firstOrFail();
        }

        throw new GeneralException(trans('exceptions.backend.access.pages.not_found'));
    }

    public function getTag()
    {
        $data=DB::table('blog_tags')
        ->join('blog_map_tags','blog_tags.id','=','blog_map_tags.tag_id')
        ->where('blog_tags.status','1')
        ->select('blog_tags.id', 'blog_tags.name')
        ->distinct()->get();
        return $data;
    }

    public function getProvince()
    {
        $data=DB::table('provinsi')
        ->orderBy('id_prov','asc')->get();
        return $data;
    }

    public function getCity($id)
    {
        $data=DB::table('kabupaten')
        ->where('id_prov',$id)
        ->orderBy('id_kab','asc')->get();
        return $data;
    }
    
    public function getKecamatan($id)
    {
        $data=DB::table('kecamatan')
        ->where('id_kab',$id)
        ->orderBy('id_kec','asc')->get();
        return $data;
    }
    public function getKeluarahan($id)
    {
        $data=DB::table('kelurahan')
        ->where('id_kec',$id)
        ->orderBy('id_kel','asc')->get();
        return $data;
    }
}
