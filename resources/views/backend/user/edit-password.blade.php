@extends('backend.layouts.master')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Manage Profile</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Profile </li>
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
        <section class="col-md-4 offset-md-4">
          <!-- Custom tabs (Charts with tabs)-->
          <div class="card">
            <div class="card-header">
              <h3>Change Password
                <a href="{{route('profiles.view')}}" class="btn btn-sm btn-info float-right"><i class="fa fa-user"></i></a>
              </h3>
            </div><!-- /.card-header -->
            <div class="card-body">
              <form method="post" action="{{route('profiles.password.update')}}" >
                  @csrf
                  <div class="form-group">
                    <label for="password">Current Password</label>
                    <input type="password" class="form-control @error('current_password') is-invalid @enderror"  placeholder="Current Password" name="current_password">
                    <span class="text-danger">{{($errors->has('current_password'))?($errors->first('current_password')):''}}</span>
                  </div>
                  <div class="form-group">
                    <label for="password">New Password</label>
                    <input type="password" class="form-control @error('password') is-invalid @enderror"  placeholder="New Password" name="password" autocomplete="new-password">
                    <span class="text-danger">{{($errors->has('password'))?($errors->first('password')):''}}</span>
                  </div>
                  <div class="form-group">
                    <label for="password">Confirm New Password</label>
                    <input type="password" class="form-control @error('confirm-password') is-invalid @enderror"  placeholder="Confirm New Password" name="password_confirmation"  autocomplete="new-password">
                    <span class="text-danger">{{($errors->has('confirm-password'))?($errors->first('confirm-password')):''}}</span>
                  </div>

                  <div class="form-group">

                    <input type="submit" class="btn btn-info" value="Change Password">
                  </div>
                  </form>
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
