@extends('backend.layouts.master')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Manage  Fee Category Amount</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Details </li>
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
              <h3> Fee Details List
                <a href="{{route('setups.fee.amount.view')}}" class="btn btn-sm btn-info float-right">
                  <i class="fa fa-list"></i> Fee Amount List </a>
              </h3>
            </div><!-- /.card-header -->
            <div class="card-body">
              <h4><strong>Fee Cetagory:</strong> {{$details[0]['fee_category']['name']}} </h4>
                <table class="table table-bordered table-striped">
                  <thead>

                    <tr>
                      <th>SL.</th>
                      <th>Class</th>
                      <th>Amount</th>
                    </tr>

                  </thead>
                  <tbody>
                    @foreach($details as $key => $fee)
                    <tr>
                      <td>{{$key+1}}</td>
                      <td>{{$fee['student_class']['name']}}</td>
                      <td>{{$fee->amount}}</td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
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
