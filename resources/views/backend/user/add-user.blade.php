@extends('backend.layouts.master')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Manage User</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">User </li>
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
              <h3>Add User
                <a href="{{route('users.view')}}" class="btn btn-sm btn-info float-right"><i class="fa fa-list"></i> User List </a>
              </h3>
            </div><!-- /.card-header -->
            <div class="card-body">

                <form method="post" action="{{route('users.store')}}" >
                    @csrf
                  <div class="form-row">
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="usertype">User Role</label>
                        <select class="form-control @error('role') is-invalid @enderror"  name="role">
                          <option>select Role</option>
                          <option value="Admin">Admin</option>
                          <option value="Operator">Operator</option>
                          <span class="text-danger">{{($errors->has('usertype'))?($errors->first('usertype')):''}}</span>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="exampleFormControlInput1">Name</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror"  placeholder="Name" name="name" value="{{old('name')}}">
                        <span class="text-danger">{{($errors->has('name'))?($errors->first('name')):''}}</span>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control @error('email') is-invalid @enderror" placeholder="Email" name="email" value="{{old('email')}}">
                        <span class="text-danger">{{($errors->has('email'))?($errors->first('email')):''}}</span>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group" style="padding: 30px;">
                        <input type="submit" class="btn btn-info" value="Submit">
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
@endsection
