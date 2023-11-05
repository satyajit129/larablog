<?php

namespace App\Http\Controllers\admin;

use App\Models\PostTag;
use App\Models\BlogPost;
use App\Models\PostCategory;
use App\Models\Tag_Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BlogPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = BlogPost::where('status', 1)->latest()->get();
        return view('admin.BlogPost.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = PostCategory::where('status', 1)->get();
        $tags = PostTag::get();
        return view('admin.BlogPost.create', compact('tags', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        

        // Validate form fields
        $request->validate([
            'title' => 'required',
            'post_category_id' => 'required',
            'post_sub_category_id' => 'required',
            'thumb_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'banner_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'description' => 'required',
            'meta_title' => 'required',
            'meta_keyword' => 'required',
            'meta_description' => 'required',
        ]);

        $thumbImage = $request->file('thumb_image')->store('images');
        $bannerImage = $request->file('banner_image')->store('images');

        $post = new BlogPost();
        $post->title = $request->title;
        $post->post_category_id = $request->post_category_id;
        $post->post_sub_category_id = $request->post_sub_category_id;
        $post->description = $request->description;
        $post->status = 1;
        $post->auth_id = auth()->user()->id;
        $post->meta_title = $request->meta_title;
        $post->meta_keyword = $request->meta_keyword;
        $post->meta_description = $request->meta_description;
        $post->thumb_image = $thumbImage;
        $post->banner_image = $bannerImage;
        $post->save();

        // dd ($request->tag_id);
        if($request->tag_id != null)
        
        {
            foreach ($request->tag_id as $tag){
                Tag_Post::create([
                    'post_id'=>$post->id,
                    'post_tag_id'=>$tag,
                ]);
            }

        }

        // return redirect()->back()->with('success', 'Post created successfully!');
        return redirect()->route('admin.BlogPost.index')->withFlashSuccess('Post Created Successfully');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
