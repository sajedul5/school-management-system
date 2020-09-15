@extends('backend.layouts.master')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Manage Assign Subject</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Assign Subject </li>
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
              <h3>
                Edit Assign Subject
                <a href="{{route('setups.assign.subject.view')}}" class="btn btn-sm btn-info float-right">
                  <i class="fa fa-list"></i> Assign Subject List </a>
              </h3>
            </div><!-- /.card-header -->
            <div class="card-body">

                <form method="post" action="{{route('setups.assign.subject.update',$editData['0']->class_id)}}" id="myForm" enctype="multipart/form-data">
                    @csrf
                  <div class="add_item">
                    <div class="form-row">
                      <div class="form-group col-md-3">
                        <label>Fee Category</label>
                        <select class="form-control" name="class_id">
                          <option value="">Select Class</option>
                          @foreach($classes as $cls)
                            <option value="{{$cls->id}}" {{($editData['0']->class_id==$cls->id)?"selected":""}}>{{$cls->name}}</option>
                          @endforeach
                        </select>
                      </div>
                      </div>
                      @foreach($editData as $edit)
                      <div class="delete_whole_extra_item_add" id="delete_whole_extra_item_add">
                        <div class="form-row">
                        <div class="form-group col-md-3">
                          <label>Subject</label>
                          <select class="form-control" name="subject_id[]">
                            <option value="">Select Class</option>
                            @foreach($subjects as $subject)
                              <option value="{{$subject->id}}" {{($edit->subject_id==$subject->id)?"selected":""}}>{{$subject->name}}</option>
                            @endforeach
                          </select>
                        </div>
                        <div class="form-group col-md-2">
                          <label for="exampleFormControlInput1">Full Mark</label>
                          <input type="text" class="form-control"  placeholder="Full Mark" name="full_mark[]" value="{{$edit->full_mark}}">
                        </div>
                        <div class="form-group col-md-2">
                          <label for="exampleFormControlInput1">Pass Mark</label>
                          <input type="text" class="form-control"  placeholder="Pass Mark" name="pass_mark[]" value="{{$edit->pass_mark}}">
                        </div>
                        <div class="form-group col-md-2">
                          <label for="exampleFormControlInput1">Subjective Mark</label>
                          <input type="text" class="form-control"  placeholder="Subjective Mark" name="subjective_mark[]" value="{{$edit->subjective_mark}}">
                        </div>
                        <div class="form-group col-md-2" style="padding: 30px;">
                          <div class="row">
                            <span class="btn  btn-info addeventmore m-1"><i class="fa fa-plus-circle"></i></span>
                            <span class="btn  btn-danger removeeventmore m-1"><i class="fa fa-minus-circle"></i></span>
                          </div>
                        </div>
                      </div>
                    </div>
                      @endforeach
                  </div>
                  <div class="form-group">
                    <button type="submit" class="btn btn-info">Submit</button>
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
<!-- add item -->
  <div style="visibility : hidden;">
    <div class="whole_extra_item_add" id="whole_extra_item_add">
      <div class="delete_whole_extra_item_add" id="delete_whole_extra_item_add">
        <div class="form-row">
          <div class="form-group col-md-3">
            <label>Subject</label>
            <select class="form-control" name="subject_id[]">
              <option value="">Select Class</option>
              @foreach($subjects as $subject)
                <option value="{{$subject->id}}">{{$subject->name}}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group col-md-2">
            <label for="exampleFormControlInput1">Full Mark</label>
            <input type="text" class="form-control"  placeholder="Full Mark" name="full_mark[]">
          </div>
          <div class="form-group col-md-2">
            <label for="exampleFormControlInput1">Pass Mark</label>
            <input type="text" class="form-control"  placeholder="Pass Mark" name="pass_mark[]">
          </div>
          <div class="form-group col-md-2">
            <label for="exampleFormControlInput1">Subjective Mark</label>
            <input type="text" class="form-control"  placeholder="Subjective Mark" name="subjective_mark[]">
          </div>
          <div class="form-group col-md-1" style="padding-top: 30px;">
            <div class="row">
              <span class="btn  btn-info addeventmore m-1"><i class="fa fa-plus-circle"></i></span>
              <span class="btn  btn-danger removeeventmore m-1"><i class="fa fa-minus-circle"></i></span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<!-- extra_add_item -->
<script type="text/javascript">
  $(document).ready(function (){
    var counter = 0;
    $(document).on("click",".addeventmore", function(){
      var whole_extra_item_add = $("#whole_extra_item_add").html();
      $(this).closest(".add_item").append(whole_extra_item_add);
      counter++;
    });
    $(document).on("click",".removeeventmore", function(event){
      $(this).closest(".delete_whole_extra_item_add").remove();
      counter -= 1;
    });
  });
</script>

<!-- validation script -->
  <script type="text/javascript">
    $(document).ready(function () {
      $('#myForm').validate({
        rules: {
          "class_id": {
            required: true,
          },
          "subject_id[]": {
            required: true,
          },
          "full_mark[]": {
            required: true,
          },
          "pass_mark[]": {
            required: true,
          },
          "subjective_mark[]": {
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
