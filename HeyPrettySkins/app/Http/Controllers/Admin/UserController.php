<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;

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
        $input = $request->all();
        User::create($input);
        return redirect()->action([UserController::class, 'index'])
        ->with('status', 'User Added!');
    }

    public function show($id)
    {
        $users = User::find($id);
        return view('admin.users.show')->with('users', $users);
    }

    public function edit($id)
    {
        $users = User::find($id);
        return view('admin.users.edit')->with('users', $users);
    }

    public function update(Request $request, $id)
    {
        $users = User::find($id);
        $input = $request->all();
        $users->update($input);
        return redirect('admin.users.index')->with('flash_message', 'User Updated!');
    }

    public function destroy($id)
    {
        User::destroy($id);
        return redirect('admin.users.index')->with('flash_message', 'User deleted!');
    }
}
