<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    public function index()
    {
        $banners = Banner::all(); 
        return view('welcome', compact('banners'));
    }

    public function create()
    {   
        return view('banners.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:50',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'status' => 'required|boolean'
        ]);

        $banner = new Banner();
        $banner->title = $request->title;
        $banner->status = $request->status;

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
