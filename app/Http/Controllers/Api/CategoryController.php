<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    function store(Request $request) {

        $validation = Validator::make($request->all(), [ 
            'name' => 'required',
            'status' => 'required',
        ]);

        if ($validation->fails()) {
            return response()->json(['message' => $validation->errors(), 'status' => 400]);
        }


        $data = new \App\Models\Category();
        $data->name = $request->name;
        $data->status = $request->status;

        $data->save();

        return response()->json(['message'=>'Category Added Successfully!', 'status'=>201]);
        
    }

    function index() {
       
            $categories = Category::all();
        
            return response()->json(['message'=>'Data fetched', 'status'=>200, 'data'=>$categories]);
    
       
    }

    function show($id) {
        $data = Category::find($id);

        return response()->json(['message'=>'Data fetched', 'status'=>200, 'data'=>$data]); 
    }

    function update(Request $request, $id) {

        $validation = Validator::make($request->all(), [ 
            'name' => 'required',
            'status' => 'required',
        ]);

        if ($validation->fails()) {
            return response()->json(['message' => $validation->errors(), 'status' => 400]);
        }
    
        $data = Category::find($id);
        if (!$data) {
            return response()->json(['message' => 'Category not found', 'status' => 404]);
        }

        $data->name = $request->name;
        $data->status = $request->status;

        $data->save();

        return response()->json(['message'=>'Category Updated Successfully!', 'status'=>200]);
    }


    function destroy($id) {
        $data = Category::find($id);
        $data->delete();

        return response()->json(['message'=>'Category Deleted Successfully!', 'status'=>200]);

    }
}
