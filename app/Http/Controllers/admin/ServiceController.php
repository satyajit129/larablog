<?php

namespace App\Http\Controllers\admin;

use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::latest()->get();
        return view('admin.Service.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.Service.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif',
        ]);
        $image = uniqid() . '.' . $request->file('image')->getClientOriginalExtension();
        $request->file('image')->storeAs('public/images', $image);

        $create = Service::create([
            'name' => $request->name,
            'description' => $request->description,
            'image' => $image,
        ]);
        return redirect()->route('admin.Service.index')->withFlashSuccess('Service Created Successfully');
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
        $editdata = Service::find($id);
        return view('admin.Service.update', compact('editdata'));
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
            'description' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif',
        ]);

        $service = Service::findOrFail($id);

        // Check if a new image is provided
        if ($request->hasFile('image')) {
            $newImage = uniqid() . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->storeAs('public/images', $newImage);

            // Delete the old image file if it exists
            if ($service->image) {
                Storage::delete('public/images/' . $service->image);
            }

            // Update service with the new image
            $service->update([
                'name' => $request->name,
                'description' => $request->description,
                'image' => $newImage,
            ]);
        } else {
            // Update service without changing the image
            $service->update([
                'name' => $request->name,
                'description' => $request->description,
            ]);
        }

        return redirect()->route('admin.Service.index')->withFlashSuccess('Service Updated Successfully');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Find the service by ID
        $service = Service::findOrFail($id);
    
        // Delete the service's image if it exists
        if ($service->image) {
            Storage::delete('public/images/' . $service->image);
        }
    
        // Delete the service
        $service->delete();
    
        return redirect()->route('admin.Service.index')->withFlashSuccess('Service Deleted Successfully');
    }
}
