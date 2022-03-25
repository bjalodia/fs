<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\User;
use App\Models\Hotel;

class UserController extends Controller
{
    public function index() 
    {
        $users = User::latest()->paginate(10);

        return view('users.index', compact('users'));
    }

    public function edit(User $user) 
    {
        return view('users.edit', [
            'user' => $user,
            //'userRole' => $user->roles->pluck('name')->toArray(),
            //'roles' => Role::latest()->get()
        ]);
    }
    public function update(UpdateUserRequest $request,User $user) 
    {
        //dd($request);
        $user->update($request->validated());

        //$user->syncRoles($request->get('role'));

        return redirect()->route('user.index')
           ->withSuccess(__('User updated successfully.'));
    }
}
