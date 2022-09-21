<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'DLMS Dashboard') }}</title>
    <!-- Favicon -->
    <link href="{{ asset('argon') }}/img/brand/favicon1.png" rel="icon" type="image/png">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <!-- Icons -->
    <link href="{{ asset('argon') }}/vendor/nucleo/css/nucleo.css" rel="stylesheet">
    <link href="{{ asset('argon') }}/vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
    <!-- Argon CSS -->
    <link type="text/css" href="{{ asset('argon') }}/css/argon.css?v=1.0.0" rel="stylesheet">
    <!-- Extra details for Live View on GitHub Pages -->
    <!-- Canonical SEO -->
    <link rel="canonical" href="https://www.creative-tim.com/product/argon-dashboard-laravel"/>
    <!--  Social tags      -->
    <meta name="keywords"
          content="dashboard, bootstrap 4 dashboard, bootstrap 4 design, bootstrap 4 system, bootstrap 4, bootstrap 4 uit kit, bootstrap 4 kit, argon, argon ui kit, creative tim, html kit, html css template, web template, bootstrap, bootstrap 4, css3 template, frontend, responsive bootstrap template, bootstrap ui kit, responsive ui kit, argon dashboard">
    <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
    <!-- Schema.org markup for Google+ -->
    <meta itemprop="name" content="Argon - Free Dashboard for Bootstrap 4 by Creative Tim">
    <meta itemprop="description" content="Start your development with a Dashboard for Bootstrap 4.">
    <meta itemprop="image"
          content="https://s3.amazonaws.com/creativetim_bucket/products/96/original/opt_ad_thumbnail.jpg">
    <!-- Twitter Card data -->
    <meta name="twitter:card" content="product">
    <meta name="twitter:site" content="@creativetim">
    <meta name="twitter:title" content="Argon - Free Dashboard for Bootstrap 4 by Creative Tim">
    <meta name="twitter:description" content="Start your development with a Dashboard for Bootstrap 4.">
    <meta name="twitter:creator" content="@creativetim">
    <meta name="twitter:image"
          content="https://s3.amazonaws.com/creativetim_bucket/products/96/original/opt_ad_thumbnail.jpg">
    <!-- Open Graph data -->
    <meta property="fb:app_id" content="655968634437471">
    <meta property="og:title" content="Argon - Free Dashboard for Bootstrap 4 by Creative Tim"/>
    <meta property="og:type" content="article"/>
    <meta property="og:url" content="https://demos.creative-tim.com/argon-dashboard/index.html"/>
    <meta property="og:image"
          content="https://s3.amazonaws.com/creativetim_bucket/products/96/original/opt_ad_thumbnail.jpg"/>
    <meta property="og:description" content="Start your development with a Dashboard for Bootstrap 4."/>
    <meta property="og:site_name" content="Creative Tim"/>
   <!--  <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.0.3/js/dataTables.buttons.min.js"></script> -->
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.0.3/css/buttons.dataTables.min.css">
   <!--  <script src="/vendor/datatables/buttons.server-side.js"></script> -->
    <link type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css" rel="stylesheet">

    <!-- Google Tag Manager -->
    <script>
        (function (w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-NKDMSK6');
    </script>
    <style>
        .btn{
            animation: wiggle 400ms 3s 8 ease-out none;
            background:#E12836;
            color:white;
        }
        .btn:hover{
            background:white;
            color:#E12836;
            border:1px solid #E12836;
        }
    </style>
    <!-- End Google Tag Manager -->
</head>
<body class="clickup-chrome-ext_installed">
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>
<div class="main-content">
    <div class="header pb-8 pt-1 pt-md-3" style="background-color:#5252d4">
        <div class="container-fluid mt--6 mb--4">
            <div class="row">
                <div class="col-md-1.4"><img src="{{asset('assets/img/police-logo.png')}}">
                </div>
                <div class="col-md-10">
                    <marquee style="margin-top: 6%" loop="100" scrollamount="20"><h1 style="float: left"
                                                                                     class="h1 text-white d-inline-block mt-4"> Dashboard -
                            Traffic Police Azad Jammu & Kashmir
                        </h1>
                    </marquee>
                </div>
            </div>



            @if(Session::has('message'))
                <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
            @endif
            <div class="header-body">
                <!-- <div class="row" class="m-auto" style="margin-bottom:5px">
                     <div class="col-xl-4 col-lg-6">
                        <div class="card card-stats mb-4 mb-xl-0">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <h5 class="card-title text-uppercase text-muted mb-0">Total</h5>
                                        <span class="h2 font-weight-bold mb-0">s</span>
                                    </div>
                                    <div class="col-auto">
                                        <div class="icon icon-shape bg-warning text-white rounded-circle shadow">
                                            <i class="fas fa-chart-pie"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
                <div class="row" >
                    @foreach($data as $licenses)
                        <div class="col-xl-2 col-lg-2 col-md-3 col-4 col-sm-3 " style="margin-bottom:10px">
                            <div class="card card-stats mb-4 mb-xl-0">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <h5 class="card-title text-uppercase text-muted mb-0">License Types</h5>
                                            <span class="h5 font-weight-bold m-0 p-0">{{$licenses->license_type}} :<span style="color:red">{{$licenses->total}}</span></span> <br>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <!-- <div class="col-xl-3 col-lg-6">
                        <div class="card card-stats mb-4 mb-xl-0">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <h5 class="card-title text-uppercase text-muted mb-0">New Licenses</h5>
                                        <span class="h2 font-weight-bold mb-0"></span>
                                    </div>
                                    <div class="col-auto">
                                        <div class="icon icon-shape bg-warning text-white rounded-circle shadow">
                                            <i class="fas fa-chart-pie"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6">
                        <div class="card card-stats mb-4 mb-xl-0">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <h5 class="card-title text-uppercase text-muted mb-0">Renew Licenses</h5>
                                        <span class="h2 font-weight-bold mb-0"></span>
                                    </div>
                                    <div class="col-auto">
                                        <div class="icon icon-shape bg-yellow text-white rounded-circle shadow">
                                            <i class="fas fa-users"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6">
                        <div class="card card-stats mb-4 mb-xl-0">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <h5 class="card-title text-uppercase text-muted mb-0">Upgradation Licenses</h5>
                                        <span class="h2 font-weight-bold mb-0"></span>
                                    </div>
                                    <div class="col-auto">
                                        <div class="icon icon-shape bg-info text-white rounded-circle shadow">
                                            <i class="fas fa-percent"></i>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col-8" >
                                <h3 class="mb-0">License Data</h3>
                            </div>
                            <div class="col-4 text-right">
                                <a class="btn btn-sm" href="{{route('create')}}">Add License</a>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive" style="padding:10px;">
                        <table class="table table-flush dataTable table table-bordered table-hover"
                               id="table">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Father Name</th>
                                <th>Cnic</th>
                                <th>License No</th>
                                <th>License Type</th>
                                <th>Issue Date</th>
                                <th>Exp Date</th>
                                <th>Action</th>
                                {{--<th>Address</th>--}}
                                {{--<th>Other Info</th>--}}
                            </tr>
                            </thead>
                        </table>
                     
                    </div>
                </div>
            </div>
            <div class=" py-4">
                <nav class="d-flex justify-content-end" aria-label="...">

                </nav>
            </div>
        </div>

    </div>
</div>


<script src="{{ asset('argon') }}/vendor/jquery/dist/jquery.min.js"></script>
<script src="{{ asset('argon') }}/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>

<!-- Argon JS -->
<script src="{{ asset('argon') }}/js/argon.js?v=1.0.0"></script>
</body>
</html>
<script>
    $(function () {
        $('#table').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{{ url('data') }}',

            type: 'POST',
            buttons:['excel'],
            columns: [
                // {data: 'id', name: 'id'},
                { data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false },
                {data: 'name', name: 'name'},
                {data: 'father_name', name: 'father_name'},
                {data: 'cnic', name: 'cnic'},
                {data: 'license_no', name: 'license_no'},
                {data: 'license_type', name: 'license_type'},
                {data: 'issue_date', name: 'issue_date'},
                {data: 'exp_date', name: 'exp_date'},
                {data: 'action', name: 'action'},
                // {
                //     sDefaultContent: '<a href="update"'+this.columns.data.id'><i class="fa fa-edit"></i></a>'
                //     },
                // {sDefaultContent:  '<a href="delete"><i class="fa fa-trash"></i></a>'},
                // {data: 'address', name: 'address'},
                // { data: 'other_info', name: 'other_info' },
            ],
            
        });
    });
</script>
