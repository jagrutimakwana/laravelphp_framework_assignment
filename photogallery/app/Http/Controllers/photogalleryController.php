<?php

namespace App\Http\Controllers;

use App\Models\photogallery;
use Illuminate\Http\Request;


use Hash;
use Alert;

class photogalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('photogallery/photogallery_index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
		$request->validate([
            'file' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
		
        $data=new photogallery;
		$data->name=$request->name;
		$file=$request->file('file');
		$filename=time().'_img.'.$request->file('file')->getClientOriginalExtension();
		$file->move('gallery/upload/',$filename);
		$data->file=$filename;
		$data->description=$request->description;
		
		$data->save();
		
		return redirect('viewgallery');
    }

    /**
     * Display the specified resource.
     */
    public function show(photogallery $photogallery)
    {
        $data=photogallery::all();
		return view('photogallery/viewgallery',['data'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(photogallery $photogallery)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, photogallery $photogallery)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(photogallery $photogallery)
    {
        //
    }
}
