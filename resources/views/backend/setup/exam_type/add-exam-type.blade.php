@extends('backend.layouts.master')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Manage Exam Type</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Exam </li>
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
                Edit Exam Type
                @else
                Add Exam Type
                @endif
                <a href="{{route('setups.exam.type.view')}}" class="btn btn-sm btn-info float-right">
                  <i class="fa fa-list"></i> Exam Type List </a>
              </h3>
            </div><!-- /.card-header -->
            <div class="card-body">

                <form method="post" action="{{(@$editData)?route('setups.exam.type.update',$editData->id):route('setups.exam.type.store')}}" id="myForm">
                    @csrf
                  <div class="form-row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="exampleFormControlInput1">Exam Name</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror"  placeholder="Exam Name" name="name" value="{{(@$editData->name)}}">
                        <span class="text-danger">{{($errors->has('name'))?($errors->first('name')):''}}</span>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group" style=" padding: 30px;">
                        <button type="submit" class="btn btn-info">{{(@$editData)?"Update":"Submit"}}</button>
                      </div>
                    </div>
                  </div>
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
          }
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
