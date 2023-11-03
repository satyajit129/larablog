<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\PostTag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $post_tags = PostTag::latest()->get();
        return view('admin.PostTag.index', compact('post_tags'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.PostTag.create');
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
            'meta_title' => 'required',
            'meta_keyword' => 'required',
            'meta_description' => 'required',
        ]);
        $postCategory = PostTag::create([
            'name' => $request->title,
            'status' => 1,
            'meta_title' => $request->meta_title,
            'meta_keyword' => $request->meta_keyword,
            'meta_description' => $request->meta_description,
        ]);
        return redirect()->route('admin.PostTag.index')->withFlashSuccess('Tag Created Successfully');
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
        $editdata = PostTag::find($id);
        return view('admin.PostTag.update', compact('editdata'));
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
        // Validate the form data
        $request->validate([
            'title' => 'required',
            'meta_title' => 'required',
            'meta_keyword' => 'required',
            'meta_description' => 'required',
        ]);

        // Find the PostTag instance by ID
        $postTag = PostTag::find($id);

        // Check if the PostTag instance exists
        if (!$postTag) {
            return redirect()->route('admin.PostTag.index')->withFlashError('Tag not found');
        }

        // Update the PostTag instance with the form data
        $postTag->update([
            'name' => $request->title,
            'meta_title' => $request->meta_title,
            'meta_keyword' => $request->meta_keyword,
            'meta_description' => $request->meta_description,
        ]);

        // Redirect the user to the index page with a success message
        return redirect()->route('admin.PostTag.index')->withFlashSuccess('Tag Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deletedata = PostTag::find($id);
        $deletedata->delete();
        return redirect()->route('admin.PostTag.index')->withFlashSuccess('Tag Delete Successfully');
    }
}
