<?php

namespace App\Http\Controllers;

use App\Models\PostTag;
use App\Models\BlogPost;
use App\Models\PostCategory;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return view('frontend.pages.index');
    }
    public function about(){
        return view('frontend.pages.about');
    }
    public function services(){
        return view('frontend.pages.services');
    }
    
    public function services_single(){
        return view('frontend.pages.services-single');
    }

    public function team(){
        return view('frontend.pages.team');
    }
    public function contact(){
        return view('frontend.pages.contact');
    }
    public function blog(){
        $categories = PostCategory::where('status', 1)->latest()->get();
        $tags = PostTag::where('status', 1)->latest()->get();
        $posts = BlogPost::where('status', 1)->latest()->paginate(3); // Paginate before calling get()
        return view('frontend.pages.blog', compact('categories', 'tags', 'posts'));
    }
    public function blog_single($id){
        $posts = BlogPost::find($id);
        $categories = PostCategory::where('status',1)->latest()->get();
        $alltags= PostTag::where('status',1)->latest()->get();
        $recentPosts = BlogPost::latest()->take(5)->get();
        // $tags = PostTag::where('status', 1)->latest()->get();
        $tags = $posts->tags ; // table join kra then model thak data nisi
        return view('frontend.pages.blog-singlepage', compact('posts','tags','categories','alltags','recentPosts'));
    }
    public function portfolio_single(){
        return view('frontend.pages.portfolio-single');
    }
}
