<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    function store(Request $request) {

        $data = new \App\Models\Category();
        $data->name = $request->name;
        $data->status = $request->status;

        $data->save();

        return response()->json('Category added successfully');
        
    }

    function index() {
        $categories = Category::all();
        
        return response()->json($categories);
    }

    function show($id) {
        $data = Category::find($id);

        return response()->json($data); 
    }

    function update(Request $request, $id) {
        $data = Category::find($id);
        $data->name = $request->name;
        $data->status = $request->status;

        $data->save();

        return response()->json('Category Updated successfully');
    }

    function destroy($id) {
        $data = Category::find($id);
        $data->delete();

        return response()->json('Category Deleted successfully');

    }
}
