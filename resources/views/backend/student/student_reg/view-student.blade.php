@extends('backend.layouts.master')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Manage Students</h1>
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
              <h3>Students List
                <a href="{{route('student.registration.add')}}" class="btn btn-sm btn-info float-right"><i class="fa fa-plus-circle"></i> Add Student </a>
              </h3>
            </div><!-- /.card-header -->
            <div class="card-body">
              <form  action="{{route('student.year.class.wise')}}" method="GET" id="#myForm">
                <div class="form-row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="exampleFormControlInput1">Year</label>
                      <select class="form-control form-control-sm" name="year_id">
                        <option value="">Select Year</option>
                        @foreach($years as $year)
                        <option value="{{$year->id}}" {{(@$year_id==$year->id)?"selected":""}}>{{$year->name}}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="exampleFormControlInput1">Class</label>
                      <select class="form-control form-control-sm" name="class_id">
                        <option value="">Select Class</option>
                        @foreach($classes as $class)
                        <option value="{{$class->id}}" {{(@$class_id==$class->id)?"selected":""}}>{{$class->name}}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group" style="padding: 30px;">
                      <button type="submit" name="search" class="btn btn-info btn-sm">Search</button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
            <div class="card-body">
              @if(!@$search)
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th width='7%'>SL.</th>
                      <th> Name</th>
                      <th>ID NO</th>
                      <th>Roll</th>
                      <th>Year</th>
                      <th>Class</th>
                      <th>Image</th>
                      @if(Auth::user()->role=="admin")
                      <th>Code</th>
                      @endif
                      <th width='12%'>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($allData as $key => $value)
                    <tr>
                      <td>{{$key+1}}</td>
                      <td>{{$value['student']['name']}}</td>
                      <td>{{$value['student']['id_no']}}</td>
                      <td>{{$value->roll}}</td>
                      <td>{{$value['year']['name']}}</td>
                      <td>{{$value['student_class']['name']}}</td>
                      <td>
                        <img src="{{(!empty($value['student']['image']))?url('public/upload/student_images/'.$value['student']['image']):url('public/upload/no-image.png')}}"
                          style="width:50px; height:50px;" >
                      </td>
                      @if(Auth::user()->role=="admin")
                      <td>{{$value['student']['code']}}</td>
                      @endif
                      <td>
                        <a href="{{route('student.registration.edit',$value->student_id)}}" title="Edit" class="btn btn-sm btn-info"><i class="fa fa-edit"></i></a>
                        <a href="{{route('student.registration.promotion',$value->student_id)}}" title="Promotion" class="btn btn-sm btn-success"><i class="fa fa-check"></i></a>
                        <a href="{{route('student.registration.details',$value->student_id)}}" title="Details" target="_blank" class="btn btn-sm btn-info"><i class="fa fa-eye"></i></a>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              @else
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th width='7%'>SL.</th>
                    <th> Name</th>
                    <th>ID NO</th>
                    <th>Roll</th>
                    <th>Year</th>
                    <th>Class</th>
                    <th>Image</th>
                    @if(Auth::user()->role=="admin")
                    <th>Code</th>
                    @endif
                    <th width='12%'>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($allData as $key => $value)
                  <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$value['student']['name']}}</td>
                    <td>{{$value['student']['id_no']}}</td>
                    <td>{{$value->roll}}</td>
                    <td>{{$value['year']['name']}}</td>
                    <td>{{$value['student_class']['name']}}</td>
                    <td>
                      <img src="{{(!empty($value['student']['image']))?url('public/upload/student_images/'.$value['student']['image']):url('public/upload/no-image.png')}}"
                        style="width:50px; height:50px;" >
                    </td>
                    @if(Auth::user()->role=="admin")
                    <td>{{$value['student']['code']}}</td>
                    @endif
                    <td>
                      <a href="{{route('student.registration.edit',$value->studen_id)}}" title="Edit" class="btn btn-sm btn-info"><i class="fa fa-edit"></i></a>
                      <a href="{{route('student.registration.promotion',$value->student_id)}}" title="Promotion" class="btn btn-sm btn-success"><i class="fa fa-check"></i></a>
                      <a href="{{route('student.registration.details',$value->student_id)}}" title="Details" class="btn btn-sm btn-info"><i class="fa fa-eye"></i></a>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
              @endif
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
          year_id: {
            required: true,
          },
          class_id: {
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
