<?php

namespace App\Http\Controllers;

use App\Models\Carousel;
use Illuminate\Http\Request;

class CarouselController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carousels['carousels'] = Carousel::orderBy('id','desc')->paginate(5);

        return view('carousels.index', $carousels);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('carousels.create');
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
            'genre' => 'required',
            'link_download' => 'required',
        ]);
        $path = $request->file('image')->store('public/hero');
        $carousel = new Carousel;
        $carousel->title = $request->title;
        $carousel->description = $request->description;
        $carousel->genre = $request->genre;
        $carousel->link_download = $request->link_download;
        $carousel->image = $path;
        $carousel->save();

        return redirect()->route('carousels.index')
                        ->with('success','has been created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\carousel  $carousel
     * @return \Illuminate\Http\Response
     */
    public function show(Carousel $carousel)
    {
        return view('carousels.show',compact('carousel'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\carousel  $carousel
     * @return \Illuminate\Http\Response
     */
    public function edit(Carousel $carousel)
    {
        return view('carousels.edit',compact('carousel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\carousel  $carousel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'genre' => 'required',
            'link_download' => 'required',
        ]);

        $carousel = Carousel::find($id);
        if($request->hasFile('image')){
            $request->validate([
              'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            ]);
            $path = $request->file('image')->store('public/hero');
            $carousel->image = $path;
        }
        $carousel->title = $request->title;
        $carousel->description = $request->description;
        $carousel->genre = $request->genre;
        $carousel->link_download = $request->link_download;
        $carousel->save();

        return redirect()->route('carousels.index')
                        ->with('success','updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Carousel  $carousel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Carousel $carousel)
    {
        $carousel->delete();

        return redirect()->route('carousels.index')
                        ->with('success','has been deleted successfully');
    }
}
