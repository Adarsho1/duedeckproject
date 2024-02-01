<!DOCTYPE html>
<html lang="en">
@include('common.css')
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
            <h1 class="m-0">client</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#"></a></li>
              <li class="breadcrumb-item active">client</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    

    <div class="card-body">
    <a href="/createclient">
     
    <button type="button" class="btn btn-block btn-primary" style="width:100px;;float:Right;">Add new</button>
  </a>
    <br><br><br>
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>id</th>
                    <th>cname</th>
                    <th>cemail</th>
                    <th>ccontact(NO)</th>
                    <th>cdob</th>
                    <th>Industry</th>
                    <th>caddress</th>
                    <th>Pancard</th>  
                    <th>Adharcard</th>     
                    <th>Action</th>

                  </tr>
                  </thead>
                  <tbody>
                  @foreach($client as $clientlist)
                  <tr>
                  <td>{{ $clientlist->id }}</td>
                    <td>{{$clientlist->cname}}</td>
                    <td>{{$clientlist->cemail}}</td>
                    <td> {{$clientlist->ccontact}}</td>
                    <td>{{ $clientlist->cdob }}</td>
                    <td>{{ $clientlist->industry->name ?? "" }}</td>
                    <td>{{$clientlist->caddress}}</td>                 
                    <td>
                      @if($clientlist->Pancard)
                          <a href="/storage/{{$clientlist->Pancard}}" data-toggle="modal" data-target="#documentPreviewModal">
                              <span class="fa-stack fa-lg">
                                  <i class="fas fa-square fa-stack-2x"></i>
                                  <i class="fas fa-file fa-stack-1x fa-inverse"></i>
                              </span>  
                          </a>
                          <div class="modal fade" id="documentPreviewModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                      <div class="modal-header">
                                          <h5 class="modal-title" id="exampleModalLabel">Document Preview</h5>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                          </button>
                                      </div>
                                      <div class="modal-body">
                                          <iframe src="/storage/{{$clientlist->Pancard}}" style="width: 100%; height: 400px;"></iframe>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      @else
                          no attachment
                      @endif              
                  </td>

                 <td>
                    @if($clientlist->Adharcard)
                        <a href="/storage/{{$clientlist->Adharcard}}" data-toggle="modal" data-target="#AdharcardPreviewModal">
                            <span class="fa-stack fa-lg">
                                <i class="fas fa-square fa-stack-2x"></i>
                                <i class="fas fa-file fa-stack-1x fa-inverse"></i>
                            </span>  
                        </a>
                        <div class="modal fade" id="AdharcardPreviewModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Adharcard Preview</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <iframe src="/storage/{{$clientlist->Pancard}}" style="width: 100%; height: 400px;"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @else
                        no attachment
                    @endif              
                  </td>
                                     
                  
                    












                    <td>
                    <div class="d-flex">
                   <a href="/adarsh/{{$clientlist->id}}">
                    <button type="button" class="btn btn-block btn-primary" style="width: 50px;">Edit</button>
                  </a>
                      &nbsp;&nbsp;
                  <a href="/deleteclient/{{$clientlist->id}}">
                  <button type="button" class="btn btn-block btn-danger" style="width: 70px;">Delete</button>
                    </a>
                    </div>
                   </td>
                    </tr>
                    @endforeach

                  </tfoot>
                </table>
              </div>
              
              <!-- /.card-body -->
            
            <!-- /.card -->


   
              
         

       
       
                 
                 
                  
             
            <!-- /.card -->
          </section>
          <!-- /.Left col -->
          <!-- right col (We are only adding the ID to make the widgets sortable)-->
 

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
</body>
</html>
