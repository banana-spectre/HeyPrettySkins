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
        return view('admin.users.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users'
          ]);
        
       


        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

      if ($user->save()) {
        return redirect()->route('users.show', $user->id);
      } else {
        Session::flash('danger', 'Sorry a problem occurred while creating this user.');
        return redirect()->route('users.create');
      }
    }


    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('admin.users.show')->withUser($user);
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('admin.users.edit')->withUser($user);
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
        
          if ($user->save()) {
            return redirect()->route('users.show', $id);
          } else {
            Session::flash('error', 'There was a problem saving the updated user info to the database. Try again later.');
            return redirect()->route('users.edit', $id);
          }
    }

    public function destroy($id)
    {
        User::destroy($id);
        return redirect('admin.users.index')->with('flash_message', 'User deleted!');
    }
}
