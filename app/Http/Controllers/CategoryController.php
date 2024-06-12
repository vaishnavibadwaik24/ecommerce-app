<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(Request $request)
    {
        $categories = Category::all(); 
        return view('categories.index', ['categories' => $categories]);
    }

    // method is used to view create-form
    public function create()
    {   
        return view('categories.create');
    }

    public function store(Request $request)
    {
        // dd($request);
        $this->validate($request, [
            'name' => 'required|string|max:50',
            'status' => 'required'
        ]);        

        $category = Category::create([
            'name' => $request->name,
            'status' => $request->status 
        ]);

        return redirect()->route('categories.index');
    }

    // method used to view user-details
    public function show(Category $category)
    {
        return view('categories.show', compact('category'));
    }

    //  method used to display edit-form for particular user
    public function edit(Category $category)
    {
        return view('categories.edit', compact('category')); 
    }

    // method used to update the details of user from edit-form
    public function update(Request $request, Category $category)
    {
        $this->validate($request, [
            'name' => 'required|string|max:50',
            'status' => 'required' 
        ]);

        $category->update($request->all()); 
        return redirect()->route('categories.index');
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('categories.index');
    }
    
}
