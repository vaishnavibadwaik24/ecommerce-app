<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use App\Traits\SendsEmail;
use Hash;

class UserController extends Controller
{
    // method is used to show all data
    public function index(User $user)
    {
        $users = User::all(); // Fetch all users
        return view('users.index', ['users' => $users]);
    }

    // method is used to view create-form
    public function create()
    {
        return view('users.create');
    }
    
    // method used to save data from create-form to database
    public function store(Request $request)
{
    $this->validate($request, [
        'name' => 'required|string|max:50', 
        'email' => 'required|email|unique:users,email',
        'phone' => 'required|min:11|numeric',
        'image' => 'required',
        'password' => 'required|min:6|confirmed' 
    ]);        

    $input = $request->all();
    $input['password'] = Hash::make($input['password']);

    $user = User::create($input);

    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $name = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/assets/img');
        $image->move($destinationPath, $name);
        $user->image = $name; 
    }
    $user->save();
    return redirect()->route('users.index');
}

    // method used to view user-details
    public function show(User $user)
    {
        return view('users.show', compact('user'));
    }

    //  method used to display edit-form for particular user
    public function edit(User $user)
    {
        return view('users.edit', compact('user')); 
    }

    // method used to update the details of user from edit-form
    public function update(Request $request, User $user)
    {
        $this->validate($request, [
            'name' => 'required|string|max:50', 
            'email' => 'required|email|unique:users,email',
            'phone' => 'required|min:11|numeric',
            'image' => 'required',
        ]);  

        $user->update($request->all()); 

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/assets/img');
            $image->move($destinationPath, $name);
            $user->image = $name; 
        }
        $user->save();
        return redirect()->route('users.index');
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users.index');
    }

}
