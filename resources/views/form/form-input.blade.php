<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome-free/css/all.min.css')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="{{ asset('assets/plugins/daterangepicker/daterangepicker.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/select2/css/select2.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/bs-stepper/css/bs-stepper.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/dropzone/min/dropzone.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/dist/css/adminlte.min.css?v=3.2.0')}}">

</head>

<body>
    <!-- Content Header (Page header) -->
    <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-12">
                      <center>  <h1 class="m-0"><strong> MONITORING IT</strong></h1> </center>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
     <!-- Content -->
     <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">FORM INPUT</h3>
                        </div>

                        <div class="card-body">
                            <h4>YOGYA - GRIYA - YOMART</h4>
                            <form method="POST" action="/simpan-form">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleSelectBorder">NAMA CABANG<code></code></label>
                                    <select class="custom-select form-control-border" id="exampleSelectBorder" name="kode_cabang">
                                    <option disabled selected>---Pilih---</option>
                                            @foreach($cabangs as $cb)
                                                <option value="{{ $cb->id }}">{{ $cb->kode }} {{ $cb->nama }}</option>
                                            @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleSelectBorder">KETERANGAN NETWORK<code></code></label>
                                    <select class="custom-select form-control-border" id="exampleSelectBorder" name="ket_network">
                                        <option disabled selected>---Pilih---</option>
                                        <option value="Up">UP</option>
                                        <option value="Down">DOWN</option>
                                        <option value="Intermitten">Intermitten</option>
                                        
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputBorder">KETERANGAN PENGAMBILAN MANUAL
                                        <code></code></label>
                                    <input type="text" class="form-control form-control-border" id="exampleInputBorder" placeholder=".form-control-border" name="ket_pengambilan">
                                </div>
                                <div class="form-group">
                                    <label>Date and time:</label>
                                    <div class="input-group date" id="reservationdatetime" data-target-input="nearest">
                                        <input type="text" class="form-control datetimepicker-input"
                                            data-target="#reservationdatetime" name="tanggal_waktu">
                                        <div class="input-group-append" data-target="#reservationdatetime"
                                            data-toggle="datetimepicker">
                                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <label>Choose file</label>
                                <div class="custom-file">
                                    <input type="file" name="ss" class="form-control">
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div> <!-- /.row -->
        </div>
    </div>
    <script src="{{ asset('assets/plugins/jquery/jquery.min.js')}}"></script>
    <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('assets/plugins/bs-custom-file-input/bs-custom-file-input.min.js')}}"></script>
    <script src="{{ asset('assets/dist/js/adminlte.min.js?v=3.2.0')}}"></script>
    <script src="{{ asset('assets/plugins/select2/js/select2.full.min.js')}}"></script>
    <script src="{{ asset('assets/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js')}}"></script>
    <script src="{{ asset('assets/plugins/moment/moment.min.js')}}"></script>
    <script src="{{ asset('assets/plugins/inputmask/jquery.inputmask.min.js')}}"></script>
    <script src="{{ asset('assets/plugins/daterangepicker/daterangepicker.js')}}"></script>
    <script src="{{ asset('assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js')}}"></script>
    <script src="{{ asset('assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
    <script src="{{ asset('assets/plugins/bootstrap-switch/js/bootstrap-switch.min.js')}}"></script>
    <script src="{{ asset('assets/plugins/bs-stepper/js/bs-stepper.min.js')}}"></script>
    <script src="{{ asset('assets/plugins/dropzone/min/dropzone.min.js')}}"></script>
    <script src="{{ asset('assets/dist/js/demo.js')}}"></script>
    




</body>

</html>
<script>
  $(function () {
    //Date picker
    $('#reservationdate').datetimepicker({
        format: 'L'
    });
    //Date and time picker
    $('#reservationdatetime').datetimepicker({ 
        format: 'YYYY-MM-DD HH:MM:SS',
        icons: { time: 'far fa-clock' } 
    });
}
  )
</script>
<script>
$(function () {
  bsCustomFileInput.init();
});
</script>