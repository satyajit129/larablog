<?php

namespace App\Http\Controllers\admin;

use App\Models\Team;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teams = Team::latest()->get();
        return view("admin.Team.index", compact("teams"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.Team.create');
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
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:teams,email',
            'position' => 'required|string',
            'about_member' => 'nullable|string',
            'picture' => 'required|image|mimes:jpeg,png,jpg,gif',
        ]);

        $picture = uniqid() . '.' . $request->file('picture')->getClientOriginalExtension();

        // Check if the file was uploaded successfully
        if ($request->file('picture')->storeAs('public/images', $picture)) {
            // Try to create a new Team record
            try {
                $create = Team::create([
                    'name' => $request->name,
                    'email' => $request->email,
                    'position' => $request->position,
                    'about_member' => $request->about_member,
                    'picture' => $picture,
                ]);

                if ($create) {
                    return redirect()->route('admin.Team.index')->withFlashSuccess('Member Created Successfully');
                } else {
                    return back()->withInput()->withErrors(['error' => 'Failed to create a team member']);
                }
            } catch (\Exception $e) {
                // Log the exception or handle it as needed
                return back()->withInput()->withErrors(['error' => 'Something went wrong']);
            }
        } else {
            return back()->withInput()->withErrors(['error' => 'Failed to upload the picture']);
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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $editdata = Team::find($id);
        return view('admin.Team.update', compact('editdata'));
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
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:teams,email,' . $id,
            'position' => 'required|string',
            'about_member' => 'nullable|string',
            'picture' => 'nullable|image|mimes:jpeg,png,jpg,gif',
        ]);

        // Find the Team record by ID
        $team = Team::find($id);

        // Check if the Team record exists
        if (!$team) {
            return back()->withErrors(['error' => 'Team member not found']);
        }

        // Update the Team record with the new data
        $team->name = $request->name;
        $team->email = $request->email;
        $team->position = $request->position;
        $team->about_member = $request->about_member;

        // Check if a new picture is provided
        if ($request->hasFile('picture')) {
            $picture = uniqid() . '.' . $request->file('picture')->getClientOriginalExtension();

            // Check if the file was uploaded successfully
            if ($request->file('picture')->storeAs('public/images', $picture)) {
                // Delete the old picture file if it exists
                if ($team->picture) {
                    Storage::delete('public/images/' . $team->picture);
                }
                $team->picture = $picture;
            } else {
                return back()->withInput()->withErrors(['error' => 'Failed to upload the new picture']);
            }
        }

        // Save the updated Team record
        try {
            $team->save();
            return redirect()->route('admin.Team.index')->withFlashSuccess('Member Updated Successfully');
        } catch (\Exception $e) {
            // Log the exception or handle it as needed
            return back()->withInput()->withErrors(['error' => 'Something went wrong']);
        }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deletedata = Team::find($id);
        $deletedata->delete();
        return redirect()->route('admin.Team.index')->withFlashSuccess('Member Delete Successfully');
    }
}
