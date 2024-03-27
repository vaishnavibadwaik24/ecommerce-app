<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    public function index(Request $request)
    {
        $banners = Banner::all(); 
        return view('banners.index', ['banners' => $banners]);
    }

    // method is used to view create-form
    public function create()
    {   
        return view('banners.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|string|max:50',
            'photo' =>  'required',
            'status' => 'required'
        ]);        

        $banner = Banner::create([
            'title' => $request->title,
            'status' => $request->status 
        ]);

        if ($request->hasFile('photo')) {
            $image = $request->file('photo');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/images');
            $image->move($destinationPath, $name);
            $banner->photo = $name;
        }

        $banner->save();
        return redirect()->route('banners.index');
    }

    // method used to view user-details
    public function show(Banner $banner)
    {
        return view('banners.show', compact('banner'));
    }

    public function destroy(Banner $banner)
    {
        $banner->delete();
        return redirect()->route('banners.index');
    }
}
