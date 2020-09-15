<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function view()
    {
      $data['allData'] = User::where('usertype','admin')->get();
      return view('backend.user.view-user', $data);
    }

    public function add()
    {
      return view('backend.user.add-user');
    }

    public function store(Request $request)
    {
      $this->validate($request,[
        'name' => 'required',
        'role' => 'required',
        'email' => 'required|unique:users,email',
      ]);
      $code = rand(0000,9999);
      $data = new User();
      $data->usertype = 'admin';
      $data->role = $request->role;
      $data->name = $request->name;
      $data->email = $request->email;
      $data->password = bcrypt($code);
      $data->code = $code;
      $data->save();
      return redirect()->route('users.view')->with('success','User added successfully!');
    }

    public function edit($id)
    {
      $editData = User::find($id);
      return view('backend.user.edit-user',compact('editData'));
    }

    public function update(Request $request, $id)
    {
      $this->validate($request,[
        'name' => 'required',
        'role' => 'required',
        'email' => 'required',
      ]);
      $data = User::find($id);
      $data->role = $request->role;
      $data->name = $request->name;
      $data->email = $request->email;
      $data->save();
      return redirect()->route('users.view')->with('success','Data updated successfully!');

    }

    public function delete($id)
    {
      $user = User::find($id);
      $user->delete();
      return redirect()->route('users.view')->with('success','Data deleted successfully!');
    }
}
