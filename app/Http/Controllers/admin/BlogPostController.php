<?php

namespace App\Http\Controllers\admin;

use App\Models\PostTag;
use App\Models\BlogPost;
use App\Models\Tag_Post;
use App\Models\PostCategory;
use Illuminate\Http\Request;
use App\Models\PostSubCategory;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class BlogPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = BlogPost::latest()->paginate(5); // 10 posts per page, adjust the number as needed

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
        $request->validate([
            'title' => 'required',
            'post_category_id' => 'required',
            'post_sub_category_id' => 'required',
            'thumb_image' => 'required|image|mimes:jpeg,png,jpg,gif',
            'banner_image' => 'required|image|mimes:jpeg,png,jpg,gif',
            'description' => 'required',
            'meta_title' => 'required',
            'meta_keyword' => 'required',
            'meta_description' => 'required',
        ]);
        $thumbImageName = uniqid() . '.' . $request->file('thumb_image')->getClientOriginalExtension();
        $bannerImageName = uniqid() . '.' . $request->file('banner_image')->getClientOriginalExtension();

        $request->file('thumb_image')->storeAs('public/images', $thumbImageName);
        $request->file('banner_image')->storeAs('public/images', $bannerImageName);


        $post = BlogPost::create([
            'title' => $request->title,
            'post_category_id' => $request->post_category_id,
            'post_sub_category_id' => $request->post_sub_category_id,
            'description' => $request->description,
            'status' => 1,
            'auth_id' => auth()->user()->id,
            'meta_title' => $request->meta_title,
            'meta_keyword' => $request->meta_keyword,
            'meta_description' => $request->meta_description,
            'thumb_image' => $thumbImageName, // Store the file name without extension
            'banner_image' => $bannerImageName, // Store the file name without extension
        ]);

        // dd ($request->tag_id);
        if ($request->tag_id != null) {
            foreach ($request->tag_id as $tag) {
                Tag_Post::create([
                    'post_id' => $post->id,
                    'post_tag_id' => $tag,
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
        $categories = PostCategory::all();
        $subcategories = PostSubcategory::all();
        $editdata = BlogPost::find($id);
        $tags = PostTag::get();
        $tag_data = Tag_Post::where('post_id', $id)->pluck('post_tag_id')->toArray();
        //        dd($tag_data);
        return view('admin.BlogPost.update', compact('tags', 'editdata', 'categories', 'subcategories', 'tag_data'));
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
        $request->validate([
            'title' => 'required',
            'post_category_id' => 'required',
            'post_sub_category_id' => 'required',
            'thumb_image' => 'nullable|image|mimes:jpeg,png,jpg,gif',
            'banner_image' => 'nullable|image|mimes:jpeg,png,jpg,gif',
            'description' => 'required',
            'meta_title' => 'required',
            'meta_keyword' => 'required',
            'meta_description' => 'required',
        ]);

        $post = BlogPost::find($id);

        if (!$post) {
            return redirect()->route('admin.BlogPost.index')->withFlashError('Post not found');
        }

        // Handle image updates if new images are provided
        if ($request->hasFile('thumb_image')) {
            // Delete old thumb image if it exists
            Storage::delete('public/images/' . $post->thumb_image);
            $thumbImageName = uniqid() . '.' . $request->file('thumb_image')->getClientOriginalExtension();
            $request->file('thumb_image')->storeAs('public/images', $thumbImageName);
            $post->thumb_image = $thumbImageName;
        }

        if ($request->hasFile('banner_image')) {
            // Delete old banner image if it exists
            Storage::delete('public/images/' . $post->banner_image);
            $bannerImageName = uniqid() . '.' . $request->file('banner_image')->getClientOriginalExtension();
            $request->file('banner_image')->storeAs('public/images', $bannerImageName);
            $post->banner_image = $bannerImageName;
        }


        // Update other fields
        $post->title = $request->title;
        $post->post_category_id = $request->post_category_id;
        $post->post_sub_category_id = $request->post_sub_category_id;
        $post->description = $request->description;
        $post->meta_title = $request->meta_title;
        $post->meta_keyword = $request->meta_keyword;
        $post->meta_description = $request->meta_description;

        // Save the updated post
        $post->save();

        if ($request->tag_id != null) {
            $tags = Tag_Post::where('post_id', $post->id)->get();
            if (count($tags) > 0) {
                $tags = Tag_Post::where('post_id', $post->id)->delete();
            }
            foreach ($request->tag_id as $tag) {
                Tag_Post::create([
                    'post_id' => $post->id,
                    'post_tag_id' => $tag,
                ]);
            }
        }
        return redirect()->route('admin.BlogPost.index')->withFlashSuccess('Post Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = BlogPost::find($id);

        if (!$post) {
            return redirect()->route('admin.BlogPost.index')->withFlashError('Post not found');
        }

        // Delete associated images from storage
        Storage::delete('public/images/' . $post->thumb_image);
        Storage::delete('public/images/' . $post->banner_image);

        // Delete the post from the database
        $post->delete();
        return redirect()->route('admin.BlogPost.index')->withFlashSuccess('Post Deleted Successfully');
    }
}
