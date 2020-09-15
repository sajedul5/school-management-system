<?php

namespace App\Http\Controllers\Backend\Setup;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Year;
use DB;
Class  YearController extends Controller
{
  public function view()
  {
    $data['allData'] = Year::all();
    return view('backend.setup.year.view-year', $data);
  }

  public function add()
  {
    return view('backend.setup.year.add-year');
  }

  public function store(Request $request)
  {
    $this->validate($request,[
      'name' => 'required|unique:years,name'
    ]);

    $data = new Year();
    $data->name = $request->name;
    $data->save();
    return redirect()->route('setups.student.year.view')->with('success','Data added successfully!');
  }

  public function edit($id)
  {
    $editData = Year::find($id);
    return view('backend.setup.year.add-year',compact('editData'));
  }

  public function update(Request $request, $id)
  {
    $data = Year::find($id);
    $this->validate($request,[
      'name' => 'required|unique:years,name,'.$data->id,
    ]);

    $data->name = $request->name;
    $data->save();
    return redirect()->route('setups.student.year.view')->with('success','Data updated successfully!');

  }

}
