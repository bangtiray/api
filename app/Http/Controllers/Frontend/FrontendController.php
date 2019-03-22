<?php

namespace App\Http\Controllers\Frontend;

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
/**
 * Class FrontendController.
 */
class FrontendController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */

   
     public function pengumuman(Request $request, BlogsRepository $pages)
     {
        $data=DB::table('blogs')
        ->join('blog_map_categories','blogs.id','=','blog_map_categories.blog_id')
        ->where('blog_map_categories.category_id','1')
        ->where('status','Published')
        ->orderBy('created_at','desc')
        ->paginate(4);

        if ($request->ajax()) {
            return view('frontend.announcement.announcement', ['blogs' => $data])->render();  
        }
        return view('frontend.announcement.index', ['blogs' => $data,'tags' => $pages->getTag()
        ]);
     }
    public function index(Request $request)
    {
        $settingData = Setting::first();
        $google_analytics = $settingData->google_analytics;
        $data=DB::table('blogs')
        ->join('blog_map_categories','blogs.id','=','blog_map_categories.blog_id')
        ->where('blog_map_categories.category_id','1')
        ->where('status','Published')
        ->orderBy('created_at','desc')
        ->paginate(3);
       
        
        $news=DB::table('blogs')
        ->join('blog_map_categories','blogs.id','=','blog_map_categories.blog_id')
        ->where('blog_map_categories.category_id','5')
        ->where('status','Published')
        ->limit(3)
        ->orderBy('created_at','desc')->get();

        $salvage=DB::table('blogs')
        ->join('blog_map_categories','blogs.id','=','blog_map_categories.blog_id')
        ->where('blog_map_categories.category_id','8')
        ->where('status','Published')
        ->orderBy('created_at','desc')->get();
        
        $salvages=DB::table('blogs')
        ->join('blog_map_categories','blogs.id','=','blog_map_categories.blog_id')
        ->where('blog_map_categories.category_id','8')
        ->where('status','inActive')
        ->orderBy('created_at','desc')->get();

        //return view('frontend.index', compact('google_analytics', $google_analytics));
        // return view('frontend.index', compact('blogs', $data));
        if ($request->ajax()) {
            return view('frontend.includes.announcement', ['blogs' => $data])->render();  
        }
        return view('frontend.index', ['blogs' => $data,
                                       'news' => $news,
                                       'available' => $salvage,
                                       'unavailable' => $salvages,
                                       ]);
    }

    public function annualreport()
    {
        $annual=DB::table('blogs')
        ->join('blog_map_categories','blogs.id','=','blog_map_categories.blog_id')
        ->where('blog_map_categories.category_id','15')
        ->where('status','Published')
        ->orderBy('created_at','desc')->get();

        $half=DB::table('blogs')
        ->join('blog_map_categories','blogs.id','=','blog_map_categories.blog_id')
        ->where('blog_map_categories.category_id','16')
        ->where('status','Published')
        ->orderBy('created_at','desc')->get();
        return view('frontend.report.index', ['annual' => $annual,
                                       'half' => $half,
                                       ]);
    }
    public function appraisement()
    {
        $appraisal=DB::table('blogs')
        ->join('blog_map_categories','blogs.id','=','blog_map_categories.blog_id')
        ->where('blog_map_categories.category_id','7')
        ->where('status','Published')
        ->orderBy('created_at','asc')->get();
        return view('frontend.penghargaan.index', [
        'appraisals' => $appraisal,
        ]);
    }
    public function gallery()
    {
        $data=DB::table('blogs')
        ->join('blog_map_categories','blogs.id','=','blog_map_categories.blog_id')
        ->where('blog_map_categories.category_id','14')
        ->where('status','Published')
        ->orderBy('created_at','desc')->get();
        return view('frontend.gallery.index', [
        'data' => $data,
        ]);
    }
    public function structure()
    {
        $director=DB::table('blogs')
        ->join('blog_map_categories','blogs.id','=','blog_map_categories.blog_id')
        ->where('blog_map_categories.category_id','2')
        ->where('status','Published')
        ->orderBy('created_at','asc')->get();


        return view('frontend.structure.index', [
            'directors' => $director,
        ]);
    }
    public function Pencarian(Request $request)
    {
        $data=DB::table('blogs')
        ->join('blog_map_categories','blogs.id','=','blog_map_categories.blog_id')
        ->where('name','LIKE','%'.$request->key.'%')
        ->where('blog_map_categories.category_id','5')
        ->where('status','Published')
        ->orderBy('name','asc')->get();
        
         return view('frontend.results.index', ['search' => $data]);
    }
    public function StandardProduct()
    {
        $data=DB::table('blogs')
        ->join('blog_map_categories','blogs.id','=','blog_map_categories.blog_id')
        ->where('blog_map_categories.category_id','17')
        ->where('status','Published')
        ->orderBy('created_at','asc')->get();
        return view('frontend.products.standard', [
        'data' => $data,
        ]);
    }
    public function PengembanganProduct()
    {
        $data=DB::table('blogs')
        ->join('blog_map_categories','blogs.id','=','blog_map_categories.blog_id')
        ->where('blog_map_categories.category_id','18')
        ->where('status','Published')
        ->orderBy('created_at','asc')->get();
        return view('frontend.products.pengembangan', [
        'data' => $data,
        ]);
    }
    /**
     * show page by $page_slug.
     */
    public function showPage($slug, PagesRepository $pages)
    {
        $result = $pages->findBySlug($slug);

        $random =DB::table('blogs')
        ->join('blog_map_categories','blogs.id','=','blog_map_categories.blog_id')
        ->join('users','blogs.created_by','=','users.id')
        ->whereIn('blog_map_categories.category_id',['1','5'])
        ->where('blogs.status','Published')
        ->orderByRaw('RAND()')->take(3)->get();

        // return view('frontend.pages.index')
        //     ->withpage($result);
        return view('frontend.pages.index', ['page' => $result,
                                             'acak' => $random
                                            ]);

    }

    public function showSubNews($var)
    {
        $news=DB::table('blogs')
        ->join('blog_map_categories','blogs.id','=','blog_map_categories.blog_id')
        ->where('blog_map_categories.category_id','5')
        ->where('status','Published')
        ->where('subname',$var)
        ->orderBy('created_at','desc')->get();
            return view('frontend.news.index', [
            'news' => $news,
        ]);
    }
  
    public function showAllNews()
    {
        $news=DB::table('blogs')
        ->join('blog_map_categories','blogs.id','=','blog_map_categories.blog_id')
        ->where('blog_map_categories.category_id','5')
        ->where('status','Published')
        ->orderBy('created_at','desc')->get();
            return view('frontend.news.index', [
            'news' => $news,
        ]);
    }

    public function showBlog($slug, BlogsRepository $pages)
    {
        $result = $pages->findBySlug($slug);
        //$random = Blog::orderByRaw('RAND()')->take(4)->get();
        $random =DB::table('blogs')
        ->join('blog_map_categories','blogs.id','=','blog_map_categories.blog_id')
        ->join('users','blogs.created_by','=','users.id')
        ->whereIn('blog_map_categories.category_id',['1','5'])
        ->where('blogs.status','Published')
        ->orderByRaw('RAND()')->take(3)->get();

        return view('frontend.blogs.index', ['pages' => $result,
                                            'provinsi' =>$pages->getProvince(),
                                             'acak' => $random,
                                             'tags' => $pages->getTag()
                                            ]);
    }
    public function fetchkab(Request $request, BlogsRepository $pages)
    {
        $value = $request->get('value');
        $dependent = $request->get('dependent');
        $output='<option value="">Select '.ucfirst($dependent).'</option>';
        foreach($pages->getCity($value)  as $data){
            $output .='<option value="'.$data->id_kab.'">'.$data->nama.'</option>';
        }
        echo $output;
    }
    public function fetchkec(Request $request, BlogsRepository $pages)
    {
        $value = $request->get('value');
        $dependent = $request->get('dependent');
        $output='<option value="">Select '.ucfirst($dependent).'</option>';
        foreach($pages->getKecamatan($value)  as $data){
            $output .='<option value="'.$data->id_kec.'">'.$data->nama.'</option>';
        }
        echo $output;
    }
    public function fetchkel(Request $request, BlogsRepository $pages)
    {
        $value = $request->get('value');
        $dependent = $request->get('dependent');
        $output='<option value="">Select '.ucfirst($dependent).'</option>';
        foreach($pages->getKeluarahan($value)  as $data){
            $output .='<option value="'.$data->id_kel.'">'.$data->nama.'</option>';
        }
        echo $output;
    }
    public function showSalvage($slug, BlogsRepository $pages)
    {
        $result = $pages->findBySlug($slug);
        return view('frontend.salvages.index')
            ->with('pages', $result);
    }

    public function ChangeLanguage(Request $request)
    {
        if($request->ajax()){
            $request->session()->put('locale', $request->locale);
        }
    }

    public function frequency()
    {
           
        $faq=DB::table('faqs')
        ->where('status',1)
        ->orderBy('id','asc')->get();
            return view('frontend.faq.index', [
            'faq' => $faq
        ]);
    }
    
    public function carrier()
    {
        $carrier=DB::table('blogs')
        ->join('blog_map_categories','blogs.id','=','blog_map_categories.blog_id')
        ->where('blog_map_categories.category_id','6')
        ->where('status','Published')
        ->orderBy('created_at','desc')->get();
        return view('frontend.carriers.index', [
            'carrier' => $carrier
        ]);
    }

    public function services()
    {
           
        $data=DB::table('blogs')
        ->join('blog_map_categories','blogs.id','=','blog_map_categories.blog_id')
        ->where('blog_map_categories.category_id','4')
        ->where('status','Published')
        ->orderBy('created_at','desc')->get();
        return view('frontend.services.index', [
            'services' => $data
        ]);
    }

    public function postRequest(Request $request)
    {

        $this->validate($request, [
            'user_name'  => 'required|min:4',
            'user_email' => 'required|email',
            'user_address'  => 'required|min:10',
            'provinsi'  => 'required',
            'kabupaten'  => 'required',
            'kecamatan'  => 'required',
            'kelurahan'  => 'required',
            'phone'  => 'required',
        ]);

        // if ($validator->fails()) {
        //     redirect()
        //         ->back()
        //         ->withErrors($validator->errors());
        // }

        $serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/google.json');
        $firebase = (new Factory)
            ->withServiceAccount($serviceAccount)
            // The following line is optional if the project id in your credentials file
            // is identical to the subdomain of your Firebase project. If you need it,
            // make sure to replace the URL with the URL of your project.
            ->withDatabaseUri('https://jastan-laravel.firebaseio.com/')
            ->create();

        $database = $firebase->getDatabase();

        $newPost = $database
            ->getReference('products/request')
            ->push([
                'url_site' =>  $request->get('url_site'),
                'user_name' =>  $request->get('user_name'),
                'user_email' =>  $request->get('user_email'),
                'user_address' =>  $request->get('user_address'),
                'provinsi' =>  $request->get('provinsi'),
                'kabupaten' =>  $request->get('kabupaten'),
                'kecamatan' =>  $request->get('kecamatan'),
                'kelurahan' =>  $request->get('kelurahan'),
                'phone' =>  $request->get('phone'),
                'image_path'=> $request->get('image_path'),
                'followup'=>'0',
                'followupby'=>''
            ]);
    }
}
