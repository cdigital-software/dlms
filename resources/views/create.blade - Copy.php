<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Argon Dashboard') }}</title>
    <!-- Favicon -->
    <link href="{{ asset('argon') }}/img/brand/favicon.png" rel="icon" type="image/png">
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

    </style>
</head>
<body>
<div class="header bg-gradient-primary pb-6 pt-1 pt-md-3">
    <div class="container-fluid ">
        <div class="row">
            <div class="col-md-2"><a href="{{route('dash')}}"><img src="{{asset('assets/img/police-logo.png')}}"></a>
            </div>
            <div class="col-md-10">
                <h1 style="margin-top: 6%" loop="10" scrollamount="20"><h1 style="float: left"
                                                                                class="h1 text-white d-inline-block mb-2"><a class="h1 text-white d-inline-block mb-2" href="{{route('dash')}}">
                            Traffic Police Azad Jammu & Kashmir</a>
                    </h1>
                </h1>
            </div>
        </div>
    </div>
</div>
<div class="container mt-4">
    @if(session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    <div class="card " style="margin-top: -150px;">
        <div class="card-header text-left font-weight-bold">
            Add new License Data
        </div>

        <div class="card-body">
            <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{url('store')}}">
                @csrf

                <div class="row">
                    <div class="col-md-4">
                        <label>Name</label>
                        <input type="input" name="name" class="form-control" required="">

                    </div>
                    <div class="col-md-4">
                        <div class="form-group">

                            <label>Father Name</label>
                            <input type="input" name="father_name" class="form-control" required="">

                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">

                            <label>Cnic</label>
                            <input type="input" name="cnic" class="form-control" required="">

                        </div>
                    </div>
                </div>

                <div class="row">

                    <div class="col-md-4">
                        <div class="form-group">

                            <label>License Number</label>
                            <input type="input" name="license_no" class="form-control" required="">

                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">

                            <label>License Type</label>
                            <select name="license_type" required="" id='license_type' class="form-control" style="width: 330px">
                                <option value="">--Select Status--</option>
                                <option value="New">New</option>
                                <option value="ReNew">ReNew</option>
                                <option value="Upgradation">Upgradation</option>
                            </select>

                            {{--<input type="input" name="license_type" class="form-control" required="">--}}

                        </div>
                    </div>
                    <div class="col-md-4">

                        <div class="form-group">

                            <label>Issue Date</label>
                            <input type="date" name="issue_date" class="form-control" required="">

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">

                        <div class="form-group">

                            <label>Exp Date</label>
                            <input type="date" name="exp_date" class="form-control" required="">

                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">

                            <label>Address</label>
                            <input type="input" name="address" class="form-control" required="">

                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">

                            <label>Other Info</label>
                            <input type="text" name="other_info" class="form-control" >

                        </div>
                    </div>
                </div>


                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>
