<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Visitor;
use Illuminate\Http\Request;

class VisitorController extends Controller
{
    public function index(){
        $IP_address = $_SERVER['REMOTE_ADDR'];
        date_default_timezone_set("Asia/Kolkata");
        $date = date("d-m-y");
        $data = new Visitor();
        $data->IP_address = $IP_address;
        $data->date = $date;
        $data->save();
        return response()->json(['message' => 'Successfully']);       

    }
}
