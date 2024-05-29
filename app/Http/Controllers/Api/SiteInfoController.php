<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\SiteInfo;
use Illuminate\Http\Request;

class SiteInfoController extends Controller
{
    public function index(){
        $siteinfo = SiteInfo::all();
        return response()->json(['message'=>'Site Info fetched', 'status'=>200, 'siteinfo' => $siteinfo]);
    }
}
