<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Dashboard;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

class PostCRUDController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Paginator::useBootstrap();

        $data['dashboards'] = Dashboard::orderBy('id','desc')->paginate(5);


        return view('dashboards.index', $data)
                ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboards.create');
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
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'description' => 'required',
            'type' => 'required',
            'genre' => 'required',
            'duration' => 'required',
            'link_480p_uptobox' => 'required',
            'link_480p_acefile' => 'required',
            'link_480p_googledrive' => 'required',
            'link_720p_uptobox' => 'required',
            'link_720p_acefile' => 'required',
            'link_720p_googledrive' => 'required',
            'link_1080p_uptobox' => 'required',
            'link_1080p_acefile' => 'required',
            'link_1080p_googledrive' => 'required',
        ]);
        $path = $request->file('image')->store('public/images');
        $dashboard = new Dashboard;
        $dashboard->title = $request->title;
        $dashboard->description = $request->description;
        $dashboard->type = $request->type;
        $dashboard->episode = $request->episode;
        $dashboard->genre = $request->genre;
        $dashboard->duration = $request->duration;
        $dashboard->link_480p_uptobox = $request->link_480p_uptobox;
        $dashboard->link_480p_acefile = $request->link_480p_acefile;
        $dashboard->link_480p_googledrive = $request->link_480p_googledrive;
        $dashboard->link_720p_uptobox = $request->link_720p_uptobox;
        $dashboard->link_720p_acefile = $request->link_720p_acefile;
        $dashboard->link_720p_googledrive = $request->link_720p_googledrive;
        $dashboard->link_1080p_uptobox = $request->link_1080p_uptobox;
        $dashboard->link_1080p_acefile = $request->link_1080p_acefile;
        $dashboard->link_1080p_googledrive = $request->link_1080p_googledrive;
        $dashboard->image = $path;
        $dashboard->save();

        return redirect()->route('dashboards.index')
                        ->with('success','has been created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\dashboard  $dashboard
     * @return \Illuminate\Http\Response
     */
    public function show(Dashboard $dashboard)
    {
        return view('dashboards.show',compact('dashboard'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\dashboard  $dashboard
     * @return \Illuminate\Http\Response
     */
    public function edit(Dashboard $dashboard)
    {
        return view('dashboards.edit',compact('dashboard'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\dashboard  $dashboard
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'type' => 'required',
            'episode' => 'required',
            'genre' => 'required',
            'duration' => 'required',
            'link_480p_uptobox' => 'required',
            'link_480p_acefile' => 'required',
            'link_480p_googledrive' => 'required',
            'link_720p_uptobox' => 'required',
            'link_720p_acefile' => 'required',
            'link_720p_googledrive' => 'required',
            'link_1080p_uptobox' => 'required',
            'link_1080p_acefile' => 'required',
            'link_1080p_googledrive' => 'required',
        ]);

        $dashboard = Dashboard::find($id);
        if($request->hasFile('image')){
            $request->validate([
              'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            ]);
            $path = $request->file('image')->store('public/images');
            $dashboard->image = $path;
        }
        $dashboard->title = $request->title;
        $dashboard->description = $request->description;
        $dashboard->type = $request->type;
        $dashboard->episode = $request->episode;
        $dashboard->genre = $request->genre;
        $dashboard->duration = $request->duration;
        $dashboard->link_480p_uptobox = $request->link_480p_uptobox;
        $dashboard->link_480p_acefile = $request->link_480p_acefile;
        $dashboard->link_480p_googledrive = $request->link_480p_googledrive;
        $dashboard->link_720p_uptobox = $request->link_720p_uptobox;
        $dashboard->link_720p_acefile = $request->link_720p_acefile;
        $dashboard->link_720p_googledrive = $request->link_720p_googledrive;
        $dashboard->link_1080p_uptobox = $request->link_1080p_uptobox;
        $dashboard->link_1080p_acefile = $request->link_1080p_acefile;
        $dashboard->link_1080p_googledrive = $request->link_1080p_googledrive;
        $dashboard->save();

        return redirect()->route('dashboards.index')
                        ->with('success','Post updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Dashboard  $dashboard
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dashboard $dashboard)
    {
        $dashboard->delete();

        return redirect()->route('dashboards.index')
                        ->with('success','Post has been deleted successfully');
    }
}
