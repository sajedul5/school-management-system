<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Student Details Info</title>
    <style media="screen">
      table{
        border-collapse: collapse;
      }
      h2 h3{
        margin: 0;
        padding: 0;
      }
      .table{
        width: 100%;
        margin-bottom: 1rem;
        background-color: transparent;
      }
      .table th,
      .table td{
        padding: .075rem;
        vertical-align: top;
        border-top: 1px solid #dee2e6;
      }
      .table thead th{
        vertical-align: bottom;
        border-bottom: 2px solid #dee2e6;
      }
      .table tbody + tbody{
        border-top: 2px solid #dee2e6;
      }
      .table .table{
        background-color: #fff;
      }
      .table-bordered th,
      .table-bordered td{
        border: 1px solid #dee2e6;
      }
      .table-border thead th,
      .table-bordered thead td{
        border-bottom: 2px;
      }
      .text-content{
        text-align: center;
      }
      .text-right{
        text-align: right;
      }
      .table-bordered thead th, .table-bordered td, .table-bordered th{
        border: 1px solid black !important;
      }
      .table-bordered thead th{
        background-color: #cacaca;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <table width="80%">
            <tr>
              <td width="33%" class="text-center">
                <img src="{{url('public/upload/logo.jpg')}}" alt="logo" style="width: 100px; height:100px;">
              </td>
              <td class="text-center" width="63%">
              <strong>ABC School</strong>
              <strong>Dhanmondi, Dhaka</strong>
              <strong>www.mdsajedulislam.com</strong>
              </td>
              <td>
                <img src="{{url('public/upload/student_images/'.$details['student']['image'])}}" alt="profile" style="width: 100px; height:100px;">
              </td>
            </tr>
          </table>
        </div>
        <div class="col-md-12 text-center">
          <h4 style="font-weight: bold; padding-top: 25px; margin: auto;">Student Reasistration  Card</h4>
        </div>
        <div class="col-md-12" width="100%" style="margin-top: 15px;">
        <table>
          <tbody>
            <tr>
              <td style="width: 50%">Student Name</td>
              <td>{{$details['student']['name']}}</td>
            </tr>
            <tr>
              <td style="width: 50%">father's Name</td>
              <td>{{$details['student']['fname']}}</td>
            </tr>
            <tr>
              <td style="width: 50%">Mother's Name</td>
              <td>{{$details['student']['mname']}}</td>
            </tr>
            <tr>
              <td style="width: 50%">Year</td>
              <td>{{$details['year']['name']}}</td>
            </tr>
            <tr>
              <td style="width: 50%">Student Class</td>
              <td>{{$details['student_class']['name']}}</td>
            </tr>
            <tr>
              <td style="width: 50%">ID No</td>
              <td>{{$details['student']['id_no']}}</td>
            </tr>
            <tr>
              <td style="width: 50%">Roll No</td>
              <td>{{$details->roll}}</td>
            </tr>
            <tr>
              <td style="width: 50%">Mobile</td>
              <td>{{$details['student']['mobile']}}</td>
            </tr>
            <tr>
              <td style="width: 50%">Address </td>
              <td>{{$details['student']['address']}}</td>
            </tr>
            <tr>
              <td style="width: 50%">Gender </td>
              <td>{{$details['student']['gender']}}</td>
            </tr>
            <tr>
              <td style="width: 50%">Birth of Date</td>
              <td>{{$details['student']['dob']}}</td>
            </tr>
          </tbody>
        </table>
        </div>
        <br><br>
        <div class="col-md-12">
          <table width=100%>
            <tbody>
              <tr>
                <td style="width : 30%"></td>
                <td style="width : 30%"></td>
                <td style="width : 40%; text-align: center;">
                  <hr style="border: solid 1px; width: 60%; color: #000; margin-bottom: 0px;">
                  <p>Principal Signature</p>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
        <br> <br>
        <hr>
        <i style="font-size:10px; float: right;">print date: {{date("d M Y")}}</i>
      </div>
    </div>
  </body>
</html>
