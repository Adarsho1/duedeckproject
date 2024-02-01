<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> Add client</title>
  


  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{ asset('plugins/tempusdominus-bootstrap-4/css/te') }}mpusdominus-bootstrap-4.min.css') }}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ asset('plugins/icheck-bootstrap/icheck-bootstra') }}p.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{ asset('plugins/jqvmap/jqvmap.min.css') }}">
  <!-- T') }}heme style -->
  <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('plugins/overlayScrollbars/css/OverlayScr') }}ollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ asset('plugins/daterangepicker/daterangepicker.') }}css">
  <!-- summernote -->
  <link rel="stylesheet" href="{{ asset('plugins/summernote/summernote-bs4.min.cs') }}s">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  @include('common.header')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Client</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#"></a></li>
              <li class="breadcrumb-item active"></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <div class="card-body">
    <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit client</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="/updateclient" method="post" enctype="multipart/form-data">
              {{csrf_field()}}
              <div class="card-body">
                 
                    <label for="exampleInputid">id
                    <r style="color: red;">*</r>
                    </label>
                    <input type="number" maxlength="10" readonly value="{{$client->id }}" name="id" class="form-control"required id="exampleInput(#)" placeholder="Enter id">
                  </div>
                  
                  

              <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputname"> Cname</label>
                    <input value="{{ $client->cname }}" maxlength="10" class="form-control" name="cname" required placeholder=" enter Name">
                  </div>
              
              
                  <div class="form-group">
                    <label for="exampleInputEmail1">Cemail id
                    <r style="color: red;">*</r>
                    </label>
                    <input value="{{ $client->cemail }}" class="form-control" name="cemail"required id="exampleInputEmail1" placeholder="Enter email">
                  </div>

              
                  <div class="form-group">
                    <label for="phone">Ccontact</label>
                    <input value="{{ $client->ccontact }}" maxlength="10" class="form-control" name="ccontact"required id="phone" placeholder="enter no" >
                  </div>

                  <div class="form-group">
                    <label for="exampleInputDate">Industry</label>
                    <select class="form-control" name="industry_name" id="">
                        <option value="">Select Industry</option>
                        @foreach ($industries as $ind)
                        <option value="{{ $ind->id }}" {{$ind->id ==$client->industry_name ? 'selected' : '' }}>{{ $ind->name }}</option>
                    @endforeach
                    
                    </select>    
                </div>
              
                  <div class="form-group">
                    <label for="exampleInputdate">Cdob</label>
                    <input value="{{ $client->cdob }}" type="date" class="form-control" name="cdob" required id="exampleInputdate" placeholder="Enter DOB">
                  </div>
                 
                   <div class="form-group">
                    <label for="exampleformcontrol select1">Caddress</label>
                    <div class="input-group">
                  <textarea  class="form-control" name="caddress" rows="2"> {{ $client->caddress }}</textarea>
                  </div>
<br>
                  <div class="form-group">
                    <label for="exampleInputFile">Pancard
                        <r style="color: red;">*</r> </label>
                    
                    <div class="input-group">
                        <input type="file" name="Pancard" class="form-control-file">
                                                                   
                    </div>
                    @error('Pancard')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
<br>
                <div class="form-group">
                  <label for="exampleInputFile">Adharcard
                      <r style="color: red;">*</r> </label>
                  
                  <div class="input-group">
                      <input type="file" name="Adharcard" class="form-control-file">
                                                                 
                  </div>
                  @error('Adharcard')
                      <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
              </div>


                  
                      
                      <div class="input-group-append">
                        <span class="input-group-text"></span>
                      </div>
                    </div>
                  </div>
        

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">submit</button> 
                  <a href="/client">                  
                  <button type="button" class="btn btn-secondary">Cancel</button></a>
                </div>
                  

              </form>
            </div>
            <!-- /.card -->

  <!-- /.card-header -->
            
                

        
  
  
  
  
  
  
  
                
<!-- jQuery -->
<script src="{{ asset('plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{ asset('plugins/chart.js/Chart.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{ asset('plugins/sparklines/sparkline.js')}}"></script>
<!-- JQVMap -->
<script src="{{ asset('plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{ asset('plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{ asset('plugins/jquery-knob/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{ asset('plugins/moment/moment.min.js')}}"></script>
<script src="{{ asset('plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- Summernote -->
<script src="{{ asset('plugins/summernote/summernote-bs4.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('dist/js/adminlte.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('dist/js/demo.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('dist/js/pages/dashboard.js')}}"></script>
</body>
</html>
