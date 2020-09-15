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
        <section class="col-md-12">
          <!-- Custom tabs (Charts with tabs)-->
          <div class="card">
            <div class="card-header">
              <h3>Edit Profile
                <a href="{{route('profiles.view')}}" class="btn btn-sm btn-info float-right"><i class="fa fa-user"></i>Your Profile </a>
              </h3>
            </div><!-- /.card-header -->
            <div class="card-body">
              <form method="post" action="{{route('profiles.update')}}" enctype="multipart/form-data">
                  @csrf
                  <div class="form-group">
                    <label for="exampleFormControlInput1">Name</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror"  placeholder="Name" name="name" value="{{$editData->name}}">
                    <span class="text-danger">{{($errors->has('name'))?($errors->first('name')):''}}</span>
                  </div>
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control @error('email') is-invalid @enderror" placeholder="Email" name="email" value="{{$editData->email}}">
                    <span class="text-danger">{{($errors->has('email'))?($errors->first('email')):''}}</span>
                  </div>
                  <div class="form-group">
                    <label for="mobile">Mobile</label>
                    <input type="text" class="form-control @error('mobile') is-invalid @enderror" placeholder="Mobile" name="mobile" value="{{$editData->mobile}}">
                    <span class="text-danger">{{($errors->has('mobile'))?($errors->first('mobile')):''}}</span>
                  </div>
                  <div class="form-group">
                    <label for="usertype">Gender</label>
                    <select class="form-control @error('gender') is-invalid @enderror"  name="gender">
                      <option>Gender</option>
                      <option value="Male" {{($editData->gender=="Male")?"selected":""}}>Male</option>
                      <option value="Female" {{($editData->gender=="Female")?"selected":""}}>Female</option>
                      <span class="text-danger">{{($errors->has('gender'))?($errors->first('gender')):''}}</span>
                    </select>
                  </div>

                  <div class="row">
                    <div class="form-group col-md-6">
                      <label for="address">Image</label>
                      <input type="file" class="form-control @error('image') is-invalid @enderror" name="image" id="image">
                      <span class="text-danger">{{($errors->has('image'))?($errors->first('image')):''}}</span>
                    </div>
                    <div class="form-group col-md-4">
                      <img src="{{(!empty($editData->image))?url('public/upload/'.$editData->image):url('public/upload/no-image.png')}}"
                      style="width:150px; height:150px; border:1px solid #000;" id="showImage">
                    </div>
                  </div>

                  <div class="form-group">

                    <input type="submit" class="btn btn-info" value="Update">
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
