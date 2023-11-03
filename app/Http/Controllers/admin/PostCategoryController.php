<?php

namespace App\Http\Controllers\admin;

use App\Models\PostCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class PostCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $post_categories = PostCategory::latest()->get();
        return view('admin.PostCategory.index', compact('post_categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.PostCategory.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

        // Store a newly created category in the database
        public function store(Request $request)
        {
            $request->validate([
                'title' => 'required',
                'meta_title' => 'required',
                'meta_keyword' => 'required',
                'meta_description' => 'required',
            ]);
    
            $create = PostCategory::create([
                'name' => $request->title,
                'status' => 1,
                'meta_title' => $request->meta_title,
                'meta_keyword' => $request->meta_keyword,
                'meta_description' => $request->meta_description,
            ]);
            
    
            return redirect()->route('admin.PostCategory.index')->withFlashSuccess('Category Created Successfully');
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
        $editdata = PostCategory::find($id);
        return view('admin.PostCategory.update', compact('editdata'));
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
            'meta_title' => 'required',
            'meta_keyword' => 'required',
            'meta_description' => 'required',
        ]);
        $category = PostCategory::find($id);
        if (!$category) {
            return redirect('admin.PostCategory.index')->with('error', 'Category not found.');
        }
        $category->name = $request->input('title');
        $category->meta_title = $request->input('meta_title');
        $category->meta_keyword = $request->input('meta_keyword');
        $category->meta_description = $request->input('meta_description');
        $category->save();

        return redirect()->route('admin.PostCategory.index')->withFlashSuccess('Category Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deletedata = PostCategory::find($id);
        $deletedata->delete();
        return redirect()->route('admin.PostCategory.index')->withFlashSuccess('Category Delete Successfully');
    }
}
