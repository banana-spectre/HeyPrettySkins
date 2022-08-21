<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use DB, Session, Hash, Input;

class UserController extends Controller
{

    public function index()
    {
        $users = User::paginate('10');
        return view('admin.users.index', compact('users'));
    }

    public function create()
    {
        $roles = Role::all();
        return view('admin.users.create')->with('roles', $roles);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users'
          ]);
        
        $role = $request->role;

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        
        $user->save();  
        $user->attachRole($role);

        
        return redirect()->route('users.index')
            ->withSuccess(__('User created successfully.'));

      // if ($user->save()) {
      //   return redirect()->route('users.show', $user->id);
      // } else {
      //   Session::flash('danger', 'Sorry a problem occurred while creating this user.');
      //   return redirect()->route('users.create');
      // }
    }


    public function show($id)
    {
        $user = User::where('id', $id)->with('roles')->first();
        return view('admin.users.show')->withUser($user);
    }

    public function edit($id)
    {
        $roles = Role::all();
        $user = User::where('id',$id)->with('roles')->first();
        return view('admin.users.edit')->withUser($user)->withRoles($roles);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users,email,'.$id
          ]);

        $user = User::findOrFail($id);
        $user->name = $request->name;
        $user->email = $request->email;
       
        if ($request->password_options == 'manual') {
            $user->password = Hash::make($request->password);
          }
        $user->save();

        $user->syncRoles(explode(',', $request->role));
        return redirect()->route('users.index', $id)
            ->withSuccess(__('User updated successfully.'));
        //   if ($user->save()) {
        //     return redirect()->route('users.show', $id);
        //   } else {
        //     Session::flash('error', 'There was a problem saving the updated user info to the database. Try again later.');
        //     return redirect()->route('users.edit', $id);
        //   }
    }

    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();

        Session::flash('message', 'Successfully deleted the product!');
        return redirect()->route('users.index')
            ->withSuccess(__('User deleted successfully.'));
    }
}
