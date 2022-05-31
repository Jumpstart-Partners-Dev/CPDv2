<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use \Cache;
use Session;

use App\Models\Store;
use App\Models\Blog;

class PageController extends Controller
{
    public $store;

    public function __construct() {
        $this->store = new Store; // App\Model\User
        $this->blog = new Blog;
    }

    public function index() {
        $data['top'] = $this->store->R("top")->get();
        $data['best'] = $this->store->R("best")->get();
        $data['latestcoupon'] = $this->store->R("latestcoupon")->get();
        $data['lateststore'] = $this->store->R("lateststore")->get();

        return view('index')->with('data', $data);
    }

    public function store(Request $req, $alias) {
        $alias = strtolower($alias);
        $store = $this->store->R("storedetail", 'alias', str_replace('-coupons', '', $alias));

        if(!count($store->get())) { abort(404); } else {
            if(strpos($alias, '-coupons') === false) { return redirect(url('/' . $alias . '-coupons' . (!empty($data['refer']) ? '?ref='.$data['refer'] : '') ), 301);}
        }

        $data['store'] = $store->first();
        $data['coupons'] = $this->store->R('storecoupons', 'alias', str_replace('-coupons', '', $alias))->get();
        $data['faqtips'] = $this->store->R('storefaqtips', 'alias', str_replace('-coupons', '', $alias))->get();
        $data['suggested'] = $this->store->R('storerandom4fromcategory', 'categories_id', $data['store']->categories_id)->get();

        return view('pages.store')->with('data', $data);
    }

    public function blog(Request $req, $slug = null) {
        if($slug == null) {
            $data['blogs'] = $this->blog->R('blogs')->get();
            // $data['blogs'] = [];
            return view('pages.blogs')->with('data', $data);
        } else {
            $blog = $this->blog->R('blog', 'slug', strtolower($slug));
            if(!count($blog->get())) { abort(404); }
            $data['blog'] = $blog->first();
            return view('pages.blog')->with('data', $data);
        }
    }

    public function search(Request $req) {
        $keys = explode(" ", strtolower($req->key));
        $data['key'] = $req->key;
        $searchcond = '';
        foreach ($keys as $idx => $key) {
            if($idx == 0) {
                $searchcond = " where alias like '%".$key."%'"; 
            } else {
                $searchcond .= " and alias like '%".$key."%'";
            }
        }
        $data['search'] = $this->store->R("search", 'search', $searchcond)->get();
        $data['searchcond'] = $searchcond;

        return view('pages.search')->with('data', $data);
    }

    public function categories() {
        $data['categories'] = $this->store->R("allcategories")->get();

        return view('pages.categories')->with('data', $data);
    }

    public function category($alias) {
        $category = $this->store->R("getcategory", 'alias', $alias);

        if(!count($category->get())) { abort(404); } 

        $category = $category->first();
        $data['category'] = $category;
        $data['stores'] = $this->store->R("storesbycategory", '', $category->id)->get();

        return view('pages.category')->with('data', $data);
    }
}
