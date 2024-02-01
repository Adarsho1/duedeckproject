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
                            <h1 class="m-0">Employee</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#"></a></li>
                                <li class="breadcrumb-item active">Employee</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->


            <div class="card-body">
                <a href="/createemployee">
                    <button type="button" class="btn btn-block btn-primary" style="width:120px;;float:Right;">Add new</button>
                </a>
                <br><br><br>


                <table id="example2" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Contact(NO)</th>
                            <th>DOB</th>
                            <th>Address</th>     
                            <th>Department</th> 
                            <th>Resume</th>                 
                            <th>Action</th>



                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($employee as $emp)
                            <tr>
                                <td>{{ $emp->id }}</td>
                                <td>{{ $emp->ename }}</td>
                                <td>{{ $emp->email }}</td>
                                <td> {{ $emp->econtact }}</td>
                                <td>{{ $emp->edob }}</td>
                                <td>{{ $emp->eaddress }}</td>                          
                                <td>{{ $emp->department->name ?? '' }}</td>
                                <td> @if($emp->Resume)
                                  <a href="/storage/{{$emp->Resume}}" data-toggle="modal" data-target="#documentPreviewModal">
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
                                                <iframe src="/storage/{{$emp->Resume}}" style="width: 100%; height: 400px;"></iframe>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @else
                                no attachment
                                @endif
                                </td>
                                <td>
                                    <div style="display: flex; justify-content: space-between;">
                                    <a href="/Edit/{{ $emp->id }}" >
                                        <button type="button" class="btn btn-block btn-primary"
                                            style="width: 50px;;float:left;">edit</button>
                                    </a>
                                    &nbsp;&nbsp;
                                      <a href="/deleteemployee/{{ $emp->id }}">
                                        <button type="button" class="btn btn-block btn-danger"
                                            style="width: 60px;;float:right;">delete</button>
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




            <!-- ./col -->







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
