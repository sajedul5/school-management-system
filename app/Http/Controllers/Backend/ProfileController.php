<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Auth;

class ProfileController extends Controller
{
    public function view()
    {
      $id = Auth::user()->id;
      $user =user::find($id);
      return view('backend.user.view-profile',compact('user'));
    }

    public function edit()
    {
      $id = Auth::user()->id;
      $editData =user::find($id);
      return view('backend.user.edit-profile',compact('editData'));
    }

    public function update(Request $request)
    {
      $this->validate($request,[
        'name' => 'required',
        'email' => 'required',
        'mobile' => 'required',

      ]);
      $data = User::find(Auth::user()->id);

      $data->name = $request->name;
      $data->email = $request->email;
      $data->mobile = $request->mobile;
      $data->gender = $request->gender;
      if($request->file('image')){
        $file = $request->file('image');
        @unlink(public_path('upload'.$data->image));
        $filename = date('YmdHi').$file->getClientOriginalName();
        $file->move(public_path('upload'), $filename);
        $data['image']=$filename;
      }
      $data->save();
      return redirect()->route('profiles.view')->with('success','Profile updated successfully!');

    }

    public function passwordview()
    {
      return view('backend.user.edit-password');
    }

    public function passwordupdate(Request $request)
    {
      $this->validate($request,[
        'current_password' => 'required',
        'password' => ['required', 'string', 'min:6', 'confirmed'],
      ]);
      if(Auth::attempt(['id'=>Auth::user()->id,'password'=>$request->current_password])){
        $user = User::find(Auth::user()->id);
        $user->password = bcrypt($request->password);
        $user->save();
        return redirect()->route('profiles.view')->with('success','Password changed successfully!');
      }
      else {
        return redirect()->back()->with('error','Sorry! your current password does not match');
      }
    }
}
