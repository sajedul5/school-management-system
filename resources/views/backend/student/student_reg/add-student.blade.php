@extends('backend.layouts.master')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Manage Student</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Student </li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- Small boxes (Stat box) -->
      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <section class="col-md-12">
          <!-- Custom tabs (Charts with tabs)-->
          <div class="card">
            <div class="card-header">
              <h3>@if(@$editData)
                Edit Student
                @else
                Add Student
                @endif
                <a href="{{route('student.registration.view')}}" class="btn btn-sm btn-info float-right">
                  <i class="fa fa-list"></i> Student List </a>
              </h3>
            </div><!-- /.card-header -->
            <div class="card-body">
                <form method="POST" action="{{(@$editData)?route('student.registration.update',$editData->student_id):route('student.registration.store')}}" id="myForm" enctype="multipart/form-data">
                    @csrf
                    <input type="text" name="id" value="{{@$editData->id}}">
                  <div class="form-row">
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="exampleFormControlInput1">Full Name<span class="text-danger"> *</span></label>
                        <input type="text" class="form-control form-control-sm"  placeholder="Full Name" name="name" value="{{(@$editData['student']['name'])}}">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="exampleFormControlInput1">Father's Name<span class="text-danger"> *</span></label>
                        <input type="text" class="form-control form-control-sm"  placeholder="Father's Name" name="fname" value="{{(@$editData['student']['fname'])}}">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="exampleFormControlInput1">Mother's Name<span class="text-danger"> *</span></label>
                        <input type="text" class="form-control form-control-sm"  placeholder="Mother's Name" name="mname" value="{{(@$editData['student']['mname'])}}">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="exampleFormControlInput1">Mobile Number<span class="text-danger"> *</span></label>
                        <input type="text" class="form-control form-control-sm"  placeholder="Mobile Number" name="mobile" value="{{(@$editData['student']['mobile'])}}">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="exampleFormControlInput1">Address<span class="text-danger"> *</span></label>
                        <input type="text" class="form-control form-control-sm"  placeholder="Address" name="address" value="{{(@$editData['student']['address'])}}">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="exampleFormControlInput1">Gender<span class="text-danger"> *</span></label>
                        <select class="form-control form-control-sm" name="gender">
                          <option value="">Select Gender</option>
                          <option value="Male" {{(@$editData['student']['gender']=='Male')?'selected':''}}>Male</option>
                          <option value="Female" {{(@$editData['student']['gender']=='Female')?'selected':''}}>Female</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="exampleFormControlInput1">Religion<span class="text-danger"> *</span></label>
                        <select class="form-control form-control-sm" name="religion">
                          <option value="">Select Religion</option>
                          <option value="Islam" {{(@$editData['student']['religion']=='Islam')?'selected':''}}>Islam</option>
                          <option value="Hindu" {{(@$editData['student']['religion']=='Hindu')?'selected':''}}>Hindu</option>
                          <option value="Christan" {{(@$editData['student']['religion']=='Christan')?'selected':''}}>Christan</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="exampleFormControlInput1">Date of Birth<span class="text-danger"> *</span></label>
                        <input type="date" class="form-control form-control-sm singledatepicker"  name="dob" value="{{(@$editData['student']['dob'])}}">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="exampleFormControlInput1">Discount Rate</label>
                        <input type="text" class="form-control form-control-sm"  name="discount" value="{{(@$editData['discount']['discount'])}}" placeholder="Discount Rate">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="exampleFormControlInput1">Year<span class="text-danger"> *</span></label>
                        <select class="form-control form-control-sm" name="year_id">
                          <option value="">Select Year</option>
                          @foreach($years as $year)
                          <option value="{{$year->id}}" {{(@$editData->year_id==$year->id)?'selected':''}}>{{$year->name}}</option>
                          @endforeach
                        </select>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="exampleFormControlInput1">Class<span class="text-danger"> *</span></label>
                        <select class="form-control form-control-sm" name="class_id">
                          <option value="">Select Class</option>
                          @foreach($classes as $class)
                          <option value="{{$class->id}}" {{(@$editData->class_id==$class->id)?'selected':''}}>{{$class->name}}</option>
                          @endforeach
                        </select>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="exampleFormControlInput1">Group</label>
                        <select class="form-control form-control-sm" name="group_id">
                          <option value="">Select Group</option>
                          @foreach($groups as $group)
                          <option value="{{$group->id}}" {{(@$editData->group_id==$group->id)?'selected':''}}>{{$group->name}}</option>
                          @endforeach
                        </select>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="exampleFormControlInput1">Shift<span class="text-danger"> *</span></label>
                        <select class="form-control form-control-sm" name="shift_id">
                          <option value="">Select Shift</option>
                          @foreach($shifts as $shift)
                          <option value="{{$shift->id}}" {{(@$editData->shift_id==$shift->id)?'selected':''}}>{{$shift->name}}</option>
                          @endforeach
                        </select>
                      </div>
                    </div>
                    <div class="col-md-8">
                    <div class="row">
                      <div class="form-group col-md-4">
                        <label for="address">Image<span class="text-danger"> *</span></label>
                        <input type="file" class="form-control form-control-sm" name="image" id="image">
                      </div>
                      <div class="form-group col-md-4">
                        <img src="{{(!empty($editData['student']['image']))?url('public/upload/student_images/'.$editData['student']['image']):url('public/upload/no-image.png')}}"
                        style="width:100px; height:100px; border:1px solid #000;" id="showImage">
                      </div>
                    </div>
                  </div>
                  </div>
                  <button type="submit" class="btn btn-info btn-sm">{{(@$editData)?"Update":"Submit"}}</button>
                <form>
            </div><!-- /.card-body -->
          </div>
          <!-- /.card -->
        </section>
        <!-- /.Left col -->
      </div>
      <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- validation script -->
  <script type="text/javascript">
    $(document).ready(function () {
      $('#myForm').validate({
        rules: {
          name: {
            required: true,
          },
          fname: {
            required: true,
          },
          mname: {
            required: true,
          },
          mobile: {
            required: true,
          },
          address: {
            required: true,
          },
          gender: {
            required: true,
          },
          dob: {
            required: true,
          },
          year_id: {
            required: true,
          },
          class_id: {
            required: true,
          },
          shift_id: {
            required: true,
          },
          image: {
            required: true,
          },
          religion: {
            required: true,
          },

        },
        messages: {

        },
        errorElement: 'span',
        errorPlacement: function (error, element) {
          error.addClass('invalid-feedback');
          element.closest('.form-group').append(error);
        },
        highlight: function (element, errorClass, validClass) {
          $(element).addClass('is-invalid');
        },
        unhighlight: function (element, errorClass, validClass) {
          $(element).removeClass('is-invalid');
        }
      });
    });
  </script>
@endsection
