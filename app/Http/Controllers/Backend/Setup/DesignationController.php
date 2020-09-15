<?php

namespace App\Http\Controllers\Backend\Setup;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Designation;
use DB;
class DesignationController extends Controller
{
  public function view()
  {
    $data['allData'] = Designation::all();
    return view('backend.setup.designation.view-designation', $data);
  }

  public function add()
  {
    return view('backend.setup.designation.add-designation');
  }

  public function store(Request $request)
  {
    $this->validate($request,[
      'name' => 'required|unique:designations,name'
    ]);

    $data = new Designation();
    $data->name = $request->name;
    $data->save();
    return redirect()->route('setups.designation.view')->with('success','Data added successfully!');
  }

  public function edit($id)
  {
    $editData = Designation::find($id);
    return view('backend.setup.designation.add-designation',compact('editData'));
  }

  public function update(Request $request, $id)
  {
    $data = Designation::find($id);
    $this->validate($request,[
      'name' => 'required|unique:designations,name,'.$data->id,
    ]);

    $data->name = $request->name;
    $data->save();
    return redirect()->route('setups.designation.view')->with('success','Data updated successfully!');

  }
}
