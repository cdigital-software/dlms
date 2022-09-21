<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'DLMS') }}</title>
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


    <!-- Google Tag Manager -->
    <script
        src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
        crossorigin="anonymous"
    > $(document).ready(function () {
            $(':input').inputmask();
        });</script>


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

        .btn:hover{
            background:white !important;
            color:#E12836 !important;
            border:1px solid #E12836 !important;
        }

        .circle{
            background: linear-gradient(to right bottom, rgba(255,255,255,0.8),rgba(255,255,255,0.3));
            height: 10rem;
            width: 10rem;
            position: absolute;
            border-radius: 50%;
        }
        .circle{
            top: 15%;
            right: 15%;
            z-index: 1;
        }

        input[type="text"]{font: 15px/24px 'Muli', sans-serif; color: #5252d4; width: 100%; box-sizing: border-box; letter-spacing: 1px;}

        :focus{outline: none;}

        .check{float: left; width: 100%; margin: 40px 3%; position: relative;} /* necessary to give position: relative to parent. */
        input[type="text"]{font: 15px/24px "Lato", Arial, sans-serif; color: #333; width: 100%; box-sizing: border-box; letter-spacing: 1px;}
        .effect-9{border: 1px solid #ccc; padding: 7px 14px 9px; transition: 0.4s;}
        .effect-9 ~ .focus-border:before,
        .effect-9 ~ .focus-border:after{content: ""; position: absolute; top: 0; right: 0; width: 0; height: 2px; background-color: #E12836; transition: 0.2s; transition-delay: 0.2s;}
        .effect-9 ~ .focus-border:after{top: auto; bottom: 0; right: auto; left: 0; transition-delay: 0.6s;}
        .effect-9 ~ .focus-border i:before,
        .effect-9 ~ .focus-border i:after{content: ""; position: absolute; top: 0; left: 0; width: 2px; height: 0; background-color: #E12836; transition: 0.2s;}
        .effect-9 ~ .focus-border i:after{left: auto; right: 0; top: auto; bottom: 0; transition-delay: 0.4s;}
        .effect-9:focus ~ .focus-border:before,
        .effect-9:focus ~ .focus-border:after{width: 100%; transition: 0.2s; transition-delay: 0.6s;}
        .effect-9:focus ~ .focus-border:after{transition-delay: 0.2s;}
        .effect-9:focus ~ .focus-border i:before,
        .effect-9:focus ~ .focus-border i:after{height: 100%; transition: 0.2s;}
        .effect-9:focus ~ .focus-border i:after{transition-delay: 0.4s;}
    </style>
</head>
<body>
<div class="header pb-6 pt-1 pt-md-3" style="background-color:#5252d4">
    <div class="container-fluid ">
        <div class="row">
            <div class="col-md-2"><a href="{{route('dash')}}"><img src="{{asset('assets/img/police-logo.png')}}"></a>
            </div>
            <div class="col-md-10">
                <h1 style="margin-top: 6%" loop="10" scrollamount="20">
                    <h1 style="float: left" class="h1 text-white d-inline-block mb-2">
                        <a class="h1 text-white d-inline-block mb-2" href="{{route('dash')}}">
                            Traffic Police Azad Jammu & Kashmir
                        </a>
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
    <div class="card " style="margin-top: -150px;box-shadow:5px 10px 5px #E12836">
        <div class="card-header text-left font-weight-bold" >
            <b>Update License Data</b>
        </div>

        <div class="card-body" >
            <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{ route('update-license',['id'=>$licenses[0]->id]) }}" autocomplete="off">
                @csrf

                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="" style="margin-left:12px"><b>Name</b> </label>
                            <div class="check" style="margin-top:0px;">

                                <input class="effect-9" type="text"name="name" class="form-control" value = '<?php echo $licenses[0]->name; ?>' required="">
                                <span class="focus-border">
                            <i></i>
                            </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="" style="margin-left:12px"><b>Father Name </b> </label>
                            <div class="check" style="margin-top:0px">

                                <input class="effect-9"  type="text" name="father_name" class="form-control" value = '<?php echo $licenses[0]->father_name; ?>' required="" >
                                <span class="focus-border">
                                    <i></i>
                                    </span>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">

                            <label for="" style="margin-left:12px"><b>Cnic (Optional)</b></label>
                            <div class="check" style="margin-top:0px">
                                <input type="text" class="effect-9" name="cnic" id="cnic" data-inputmask="'mask': '99999-9999999-9'"
                                       placeholder="XXXXX-XXXXXXX-X"
                                       maxlength = "15"
                                       value = '<?php echo $licenses[0]->cnic; ?>'
                                       class="form-control">
                                <span class="focus-border">
                                    <i></i>
                                    </span>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="" style="margin-left:12px"><b>License Number </b> </label>
                            <div class="check" style="margin-top:0px">

                                <input class="effect-9"  type="text" name="license_no" class="form-control" value = '<?php echo $licenses[0]->license_no; ?>' required="">
                                <span class="focus-border">
                                    <i></i>
                                    </span>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">

                            <label for="" style="margin-left:12px"><b>License Type </b></label>
                            <div class="check" style="margin-top:0px">
                                <select name="license_type"  class="effect-9"  required="" id='license_type' class="form-control" style="width: 330px">
                                    <!-- @foreach($license_type as $type)
                                        <option value="">{{$type->license_type}}</option>
                                @endforeach
                                    <select name="license_type"  class="effect-9"  required="" id='license_type' class="form-control" style="width: 330px"> -->
                                    @foreach($license_type as $type)
                                        <option @if ($type->license_type==$licenses[0]->license_type)
                                                    selected
                                        @endif
                                        <option value="<?= $type->license_type ?>">{{$type->license_type}}</option>
                                        </option>
                                    @endforeach

                                </select>
                                <!-- {{--<input type="input" class="effect-9"  name="license_type" class="form-control" required="">--}} -->
                                <span class="focus-border">
                                    <i></i>
                                    </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="" style="margin-left:12px"><b>Issue Date </b> </label>
                            <div class="check" style="margin-top:0px">

                                <input class="effect-9"  type="date" style="width:100%"name="issue_date" value = '<?php echo $licenses[0]->issue_date; ?>' class="form-control" required="">
                                <span class="focus-border">
                                    <i></i>
                                    </span>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="" style="margin-left:12px"><b>Exp Date </b> </label>
                            <div class="check" style="margin-top:0px">

                                <input class="effect-9" style="width:100%" type="date" name="exp_date" value = '<?php echo $licenses[0]->exp_date; ?>' class="form-control" required="">
                                <span class="focus-border">
                                    <i></i>
                                    </span>
                            </div>

                        </div>
                    </div>
                </div>


                <button type="submit" class="btn"
                        style="color:white;background-color:#E12836;"><b>Update</b></button>
            </form>
        </div>
    </div>
</div>
<div class="circle d-none d-sm-none d-md-none d-lg-block d-xl-block"></div>
</body>
</html>
