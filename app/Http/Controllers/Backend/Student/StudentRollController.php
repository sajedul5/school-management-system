<?php

namespace App\Http\Controllers\Backend\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\AssignStudent;
use App\Model\DiscountStudent;
use App\Model\StudentClass;
use App\Model\StudentGroup;
use App\Model\StudentShift;
use App\Model\Year;
use App\User;
use DB;
use PDF;
class StudentRollController extends Controller
{
  public function view()
  {
    $data['years'] = Year::orderBy('id',"desc")->get();
    $data['classes'] = StudentClass::all();
    return view('backend.student.roll_generate.view-roll-generate', $data);
  }

  public function getStudent(Request $request)
  {
      dd('okkk');
  }
}
