<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\SiteInfo;
use Illuminate\Http\Request;

class SiteInfoController extends Controller
{
    public function index(){
        $siteinfo = SiteInfo::all();
        return view('siteinfo.index', compact('siteinfo'));
    }

    public function create()
    {   
        return view('siteinfo.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'about_us' => 'required',
            'terms_condn' => 'required',
            'privacy_policy' => 'required',
            'return_policy' => 'required',
            'jobs' => 'required',
        ]);

        SiteInfo::create($validatedData);

        return redirect()->route('siteinfo.index')->with('success', 'Site Info Added Successfully.');
    }

}
