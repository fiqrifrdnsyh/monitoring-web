<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>INFOGRAPHIC MONITORING</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('assets/dist/css/adminlte.min.css') }}">
    <style>
        body {
            background-image: url("/foto/yogya_group.png");
            background-color: #cccccc;
            background-repeat:no-repeat;
            background-size: cover;
            background-position: center; 
        }
    </style>

    <script nonce="9266db49-8d06-473f-9974-217e9e255666">
        (function (w, d) {
            ! function (Z, _, ba, bb) {
                Z.zarazData = Z.zarazData || {};
                Z.zarazData.executed = [];
                Z.zaraz = {
                    deferred: [],
                    listeners: []
                };
                Z.zaraz.q = [];
                Z.zaraz._f = function (bc) {
                    return function () {
                        var bd = Array.prototype.slice.call(arguments);
                        Z.zaraz.q.push({
                            m: bc,
                            a: bd
                        })
                    }
                };
                for (const be of ["track", "set", "debug"]) Z.zaraz[be] = Z.zaraz._f(be);
                Z.zaraz.init = () => {
                    var bf = _.getElementsByTagName(bb)[0],
                        bg = _.createElement(bb),
                        bh = _.getElementsByTagName("title")[0];
                    bh && (Z.zarazData.t = _.getElementsByTagName("title")[0].text);
                    Z.zarazData.x = Math.random();
                    Z.zarazData.w = Z.screen.width;
                    Z.zarazData.h = Z.screen.height;
                    Z.zarazData.j = Z.innerHeight;
                    Z.zarazData.e = Z.innerWidth;
                    Z.zarazData.l = Z.location.href;
                    Z.zarazData.r = _.referrer;
                    Z.zarazData.k = Z.screen.colorDepth;
                    Z.zarazData.n = _.characterSet;
                    Z.zarazData.o = (new Date).getTimezoneOffset();
                    Z.zarazData.q = [];
                    for (; Z.zaraz.q.length;) {
                        const bl = Z.zaraz.q.shift();
                        Z.zarazData.q.push(bl)
                    }
                    bg.defer = !0;
                    for (const bm of [localStorage, sessionStorage]) Object.keys(bm || {}).filter((bo => bo
                        .startsWith("_zaraz_"))).forEach((bn => {
                        try {
                            Z.zarazData["z_" + bn.slice(7)] = JSON.parse(bm.getItem(bn))
                        } catch {
                            Z.zarazData["z_" + bn.slice(7)] = bm.getItem(bn)
                        }
                    }));
                    bg.referrerPolicy = "origin";
                    bg.src = "/cdn-cgi/zaraz/s.js?z=" + btoa(encodeURIComponent(JSON.stringify(Z.zarazData)));
                    bf.parentNode.insertBefore(bg, bf)
                };
                ["complete", "interactive"].includes(_.readyState) ? zaraz.init() : Z.addEventListener(
                    "DOMContentLoaded", zaraz.init)
            }(w, d, 0, "script");
        })(window, document);
    </script>
</head>

<body class="hold-transition layout-top-nav" style="background-color: #f4f6f9;">
    <div class="wrapper">

        <!-- navbar links -->
        <nav class="main-header navbar navbar-expand-md navbar-white navbar-light">
            <ul class="navbar-nav">
                
            </ul>
        </nav>

        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-12">

                      <center>  <h1 class="m-0"><strong> INFOGRAPHIC SALES</strong></h1> </center>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Content -->
        <div class="content">

            <div class="container-fluid">

                <div class="row">

                    <div class="col-md-6">

                        <!-- card 1 -->
                        <div class="card">

                            <div class="card-header">
                            <h5 class="text-md-center"><strong> INFOGRAPHIC SALES YOGYA</strong></h5>
                            </div>
                            <!-- /.card-header -->

                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <p class="text-center">
                                            GRAFIK SALES 1 JANUARI - 31 DESEMBER 2022
                                        </p>
                                        <div class="card-body">
                                            <div class="chart">
                                                <canvas id="areaChart" height="180" style="height: 250px;"></canvas>
                                            </div>
                                        </div>
                                        <!-- /.card-body -->

                                        <!-- /.chart-responsive -->
                                    </div>

                                    <!-- /.col -->
                                </div>
                                <!-- /.row -->
                            </div>
                            <!-- ./card-body -->


                        </div>
                        

                    </div>

                    <div class="col-md-6">
                        <!-- card 2 -->
                        <div class="card">

                            <div class="card-header">
                            <h5 class="text-md-center"><strong> INFOGRAPHIC SALES YOMART</strong></h5>
                            </div>
                            <!-- /.card-header -->

                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <p class="text-center">
                                            GRAFIK SALES 1 JANUARI - 31 DESEMBER 2022
                                        </p>
                                        <div class="card-body">
                                            <div class="chart">
                                                <canvas id="areaChart2" height="180" style="height: 250px;"></canvas>
                                            </div>
                                        </div>
                                        <!-- /.card-body -->

                                        <!-- /.chart-responsive -->
                                    </div>

                                    <!-- /.col -->
                                </div>
                                <!-- /.row -->
                            </div>
                            <!-- ./card-body -->


                        </div>
                        <!-- /.card 2-->
                        



                    </div>

                </div>
                <!-- card 4 -->
                <div class="card">


                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="width: 2%">No</th>
                                <th style="width: 5%" >Case</th>
                                <th style="width: 82%" >Progress</th>
                                <th style="width: 2%">Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1.</td>
                                <td>Sales Fail</td>
                                <td>
                                    <div class="progress progress-xs">
                                        <div class="progress-bar bg-orange" style="width: 55%"></div>
                                    </div>
                                </td>
                                <td><span class="badge bg-orange">55%</span></td>
                            </tr>
                            <tr>
                                <td>2.</td>
                                <td>Sales Manual</td>
                                <td>
                                    <div class="progress progress-xs">
                                        <div class="progress-bar bg-success" style="width: 70%"></div>
                                    </div>
                                </td>
                                <td><span class="badge bg-success">70%</span></td>
                            </tr>
                            <tr>
                                <td>3.</td>
                                <td>Network Down</td>
                                <td>
                                    <div class="progress progress-xs progress-striped active">
                                        <div class="progress-bar bg-danger" style="width: 30%"></div>
                                    </div>
                                </td>
                                <td><span class="badge bg-danger">30%</span></td>
                            </tr>
                            <tr>
                                <td>4.</td>
                                <td>Selisih Sales</td>
                                <td>
                                    <div class="progress progress-xs progress-striped active">
                                        <div class="progress-bar bg-warning" style="width: 90%"></div>
                                    </div>
                                </td>
                                <td><span class="badge bg-warning">90%</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- ./card-body -->


                </div>
                <!-- /.card 4-->

                <div class="card">
                    <div class="card-header">
                    <h5 class="text-md-center"><strong> DAILY SALES</strong></h5>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th style="width: 10%">Kode Cabang</th>
                                    <th style="width: 30%">Nama Cabang</th>
                                    <th style="width: 10%">Ket Network</th>
                                    <th style="width: 25%">Ket Pengambilan Sales</th>
                                    <th style="width: 10%">Tanggal</th>
                                    <th style="width: 10%">Jam</th>
                                    <th style="width: 5%">SS</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($keterangan as $kt)
                                <tr>
                                    <td>{{$kt->kode}}</td>
                                    <td>{{$kt->nama}}</td>
                                    <td>{{$kt->ket_network}}</td>
                                    <td>{{$kt->ket_pengambilan}}</td>
                                    <td>{{ date('Y-M-d', strtotime($kt->tanggal_waktu)) }}</td>
                                    <td>{{ date('H:i:s', strtotime($kt->tanggal_waktu)) }}</td>
                                    <td>
                                        @if($kt->ss)
                                            <img src="{{ asset('pictures/'.$kt->ss) }}" alt="Picture" style="max-width: 100px; max-height: 100px;">
                                        @else
                                            No picture available
                                        @endif
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                            
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>

        </div>
        <!-- /content -->

    </div>


    <!-- REQUIRED SCRIPTS -->
    <!-- jQuery -->
    <script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- overlayScrollbars -->
    <script src="{{ asset('assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}">
    </script>
    <!-- AdminLTE App -->
    <script src="{{ asset('assets/plugins/dist/js/adminlte.js') }}"></script>

    <!-- PAGE PLUGINS -->
    <!-- jQuery Mapael -->
    <script src="{{ asset('assets/plugins/jquery-mousewheel/jquery.mousewheel.js') }}"></script>
    <script src="{{ asset('assets/plugins/raphael/raphael.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/jquery-mapael/jquery.mapael.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/jquery-mapael/maps/usa_states.min.js') }}"></script>
    <!-- ChartJS -->
    <script src="{{ asset('assets/plugins/chart.js/Chart.min.js') }}"></script>
    <!-- DataTables  & Plugins -->
    <script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/jszip/jszip.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/pdfmake/vfs_fonts.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
    <!-- AdminLTE App -->

    <script>
        $(function () {
            /* ChartJS
             * -------
             * Here we will create a few charts using ChartJS
             */

            //--------------
            //- AREA CHART -
            //--------------

            // Get context with jQuery - using jQuery's .get() method.
            var areaChartCanvas = $('#areaChart').get(0).getContext('2d')

            var areaChartData = {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Agus',
                    'Sept', 'Okt', 'Nov', 'Des'
                ],
                datasets: [{
                        label: 'Sales Fail',
                        backgroundColor: 'rgba(80,23,34,0)',
                        borderColor: 'rgba(255, 127, 80)',
                        pointRadius: 5,
                        pointColor: '#3b8bba',
                        pointStrokeColor: 'rgba(60,141,188,1)',
                        pointHighlightFill: '#fff',
                        pointHighlightStroke: 'rgba(60,141,188,1)',
                        data: [28, 48, 40, 19, 86, 27, 90, 80, 81, 56, 55]
                    },
                    {
                        label: 'Sales Manual',
                        backgroundColor: 'rgba(80,23,34,0)',
                        borderColor: 'rgba(0, 128, 0)',
                        pointRadius: 5,
                        pointColor: '#3b8bba',
                        pointStrokeColor: 'rgba(60,141,188,1)',
                        pointHighlightFill: '#fff',
                        pointHighlightStroke: 'rgba(60,141,188,1)',
                        data: [12, 34, 65, 17, 67, 12, 65, 50, 58, 66, 97]
                    },
                    {
                        label: 'Network Down',
                        backgroundColor: 'rgba(80,23,34,0)',
                        borderColor: 'rgba(255, 0, 0)',
                        pointRadius: 5,
                        pointColor: '#3b8bba',
                        pointStrokeColor: 'rgba(60,141,188,1)',
                        pointHighlightFill: '#fff',
                        pointHighlightStroke: 'rgba(60,141,188,1)',
                        data: [12, 34, 65, 17, 12, 12, 87, 50, 58, 66, 97]
                    },
                    {
                        label: 'Selisih Sales',
                        backgroundColor: 'rgba(80,23,34,0)',
                        borderColor: 'rgba(255, 255, 0)',
                        pointRadius: 5,
                        pointColor: '#3b8bba',
                        pointStrokeColor: 'rgba(60,141,188,1)',
                        pointHighlightFill: '#fff',
                        pointHighlightStroke: 'rgba(60,141,188,1)',
                        data: [12, 34, 23, 17, 67, 14, 65, 50, 58, 66, 97]
                    },


                ]
            }
            var areaChartOptions = {
                maintainAspectRatio: false,
                responsive: true,
                legend: {
                    display: true
                },
                scales: {
                    xAxes: [{ 
                        gridLines: {
                            display: true,
                        }
                    }],
                    yAxes: [{
                        gridLines: {
                            display: true,
                        }
                    }]
                }
            }

            // This will get the first returned node in the jQuery collection.
            new Chart(areaChartCanvas, {
                type: 'line',
                data: areaChartData,
                options: areaChartOptions
            })

            var areaChartCanvas = $('#areaChart2').get(0).getContext('2d')

            var areaChartData = {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Agus',
                    'Sept', 'Okt', 'Nov', 'Des'
                ],
                datasets: [{
                        label: 'Sales Fail',
                        backgroundColor: 'rgba(80,23,34,0)',
                        borderColor: 'rgba(255, 127, 80)',
                        pointRadius: 5,
                        pointColor: '#3b8bba',
                        pointStrokeColor: 'rgba(60,141,188,1)',
                        pointHighlightFill: '#fff',
                        pointHighlightStroke: 'rgba(60,141,188,1)',
                        data: [25, 29, 67, 31, 14, 15, 24, 20, 29, 16, 56, 18]
                    },
                    {
                        label: 'Sales Manual',
                        backgroundColor: 'rgba(80,23,34,0)',
                        borderColor: 'rgba(0, 128, 0)',
                        pointRadius: 5,
                        pointColor: '#3b8bba',
                        pointStrokeColor: 'rgba(60,141,188,1)',
                        pointHighlightFill: '#fff',
                        pointHighlightStroke: 'rgba(60,141,188,1)',
                        data: [3, 1, 9, 53, 64, 19, 16, 10, 17, 24, 12, 23]
                    },
                    {
                        label: 'Network Down',
                        backgroundColor: 'rgba(80,23,34,0)',
                        borderColor: 'rgba(255, 0, 0)',
                        pointRadius: 5,
                        pointColor: '#3b8bba',
                        pointStrokeColor: 'rgba(60,141,188,1)',
                        pointHighlightFill: '#fff',
                        pointHighlightStroke: 'rgba(60,141,188,1)',
                        data: [11, 16, 22, 8, 6, 4, 8, 19, 9, 15, 7, 14]
                    },
                    {
                        label: 'Selisih Sales',
                        backgroundColor: 'rgba(80,23,34,0)',
                        borderColor: 'rgba(255, 255, 0)',
                        pointRadius: 5,
                        pointColor: '#3b8bba',
                        pointStrokeColor: 'rgba(60,141,188,1)',
                        pointHighlightFill: '#fff',
                        pointHighlightStroke: 'rgba(60,141,188,1)',
                        data: [6, 16, 0, 6, 8, 4, 7, 4, 3, 4, 3, 9]
                    },


                ]
            }
            var areaChartOptions = {
                maintainAspectRatio: false,
                responsive: true,
                legend: {
                    display: true
                },
                scales: {
                    xAxes: [{
                        gridLines: {
                            display: true,
                        }
                    }],
                    yAxes: [{
                        gridLines: {
                            display: true,
                        }
                    }]
                }
            }

            // This will get the first returned node in the jQuery collection.
            new Chart(areaChartCanvas, {
                type: 'line',
                data: areaChartData,
                options: areaChartOptions
            })


            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });

        })
    </script>
</body>

</html>