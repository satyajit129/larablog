<?php

namespace App\Http\Controllers;

use App\Models\PostTag;
use App\Models\BlogPost;
use App\Models\PostCategory;
use App\Models\Service;
use App\Models\Team;
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
        $service=Service::all();
        return view('frontend.pages.services',compact('service'));
    }
    
    public function services_single($id){
        $posts = Service::find($id);
        $service= Service::all();
        return view('frontend.pages.services-single',compact('posts','service'));
    }

    public function team(){
        $teams=Team::all();
        return view('frontend.pages.team',compact('teams'));
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
