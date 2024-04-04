<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    public function testimonial_index(Request $request)
    {
        $input = $request->all();

        return view('testimonial', compact('input'));
    }
}
