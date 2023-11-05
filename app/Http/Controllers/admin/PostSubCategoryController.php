<?php

namespace App\Http\Controllers\admin;

use App\Models\PostCategory;
use Illuminate\Http\Request;
use App\Models\PostSubCategory;
use App\Http\Controllers\Controller;

class PostSubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $post_sub_categories = PostSubCategory::latest()->get();
        return view('admin.PostSubCategory.index',compact('post_sub_categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=PostCategory::all();
        return view('admin.PostSubCategory.create',compact('categories'));
        // return view('admin.PostSubCategory.create');
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
            'name'=>'required',
            'post_category_id'=>'required',
            'meta_title'=>'required',
            'meta_keyword'=>'required',
            'meta_description'=>'required',
        ]);
        $create=PostSubCategory::create([
            'name'=>$request->name,
            'post_category_id'=>$request->post_category_id,
            'status'=>1,
            'meta_title'=>$request->meta_title,
            'meta_keyword'=>$request->meta_keyword,
            'meta_description'=>$request->meta_description,

        ]);

        if ($create){
            return redirect()->route('admin.PostSubCategory.index')->withFlashSuccess('SubCategory Created Successfully');
        }
        else{
            return back();
        }
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
    public function byCategory($id)
    {
        $subcategories = PostSubCategory::where('post_category_id',$id)->where('status',1)->get();
        return view('admin.BlogPost.subcategory',compact('subcategories'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories=PostCategory::all();
        $subcategoryedit = PostSubCategory::find($id);
        return view('admin.PostSubCategory.update', compact('subcategoryedit','categories'));
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
        'name' => 'required',
        'post_category_id' => 'required',
        'meta_title' => 'required',
        'meta_keyword' => 'required',
        'meta_description' => 'required',
    ]);

    $subcategory = PostSubCategory::find($id);

    if (!$subcategory) {
        return redirect()->route('admin.PostSubCategory.index')->with('error', 'SubCategory not found.');
    }

    $subcategory->name = $request->name;
    $subcategory->post_category_id = $request->post_category_id;
    $subcategory->meta_title = $request->meta_title;
    $subcategory->meta_keyword = $request->meta_keyword;
    $subcategory->meta_description = $request->meta_description;
    $subcategory->save();

    return redirect()->route('admin.PostSubCategory.index')->withFlashSuccess('SubCategory Updated Successfully');
}


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
{
    $subcategory = PostSubCategory::find($id);

    if (!$subcategory) {
        return redirect()->route('admin.PostSubCategory.index')->with('error', 'SubCategory not found.');
    }

    $subcategory->delete();

    return redirect()->route('admin.PostSubCategory.index')->withFlashSuccess('SubCategory Deleted Successfully');
}

}
