<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Level HTML Template by Tooplate</title>
    <!-- load stylesheets -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <link rel="stylesheet" href="{{ asset('font-awesome-4.7.0/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('slick/slick.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('slick/slick-theme.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/datepicker.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/tooplate-style.css') }}">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
          <![endif]-->
</head>

<body>
    <div class="tm-main-content" id="top">
        <div class="tm-top-bar-bg"></div>
        <div class="tm-top-bar" id="tm-top-bar">
            <div class="container">
                <div class="row">
                    <nav class="navbar navbar-expand-lg narbar-light">
                        <a class="navbar-brand mr-auto" href="#">
                            <img src="{{ asset('img/logo.png') }}" alt="Site logo">
                            Level
                        </a>
                        <button type="button" id="nav-toggle" class="navbar-toggler collapsed" data-toggle="collapse"
                            data-target="#mainNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div id="mainNav" class="collapse navbar-collapse tm-bg-white">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item">
                                    <a class="nav-link" href="#top">Home <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#tm-section-4">Portfolio</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#tm-section-5">Blog Entries</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#tm-section-6">Contact Us</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <div class="tm-section tm-bg-img" id="tm-section-1">
            <div class="tm-bg-white ie-container-width-fix-2">
                <div class="container ie-h-align-center-fix">
                    <div class="row">
                        <div class="col-xs-12 ml-auto mr-auto ie-container-width-fix">
                            <form action="{{ url('/') }}" method="get" class="tm-search-form tm-section-pad-2">
                                @csrf
                                <div class="form-row tm-search-form-row">
                                    <div class="form-group tm-form-element tm-form-element-100">
                                        <i class="fa fa-map-marker fa-2x tm-form-element-icon"></i>
                                        <input name="city" type="text" class="form-control" id="inputCity"
                                            placeholder="Type your destination..." value="{{ old('city') }}">
                                    </div>
                                    <div class="form-group tm-form-element tm-form-element-50">
                                        <i class="fa fa-calendar fa-2x tm-form-element-icon"></i>
                                        <input name="check-in" type="text" class="form-control" id="inputCheckIn"
                                            placeholder="Check In" value="{{ old('check-in') }}">
                                    </div>
                                    <div class="form-group tm-form-element tm-form-element-50">
                                        <i class="fa fa-calendar fa-2x tm-form-element-icon"></i>
                                        <input name="check-out" type="text" class="form-control" id="inputCheckOut"
                                            placeholder="Check Out" value="{{ old('check-out') }}">
                                    </div>
                                </div>
                                <div class="form-row tm-search-form-row">
                                    <div class="form-group tm-form-element tm-form-element-2">
                                        <select name="adult" class="form-control tm-select" id="adult">
                                            <option value="">Adult</option>
                                            @for ($i = 1; $i <= 10; $i++)
                                                <option value="{{ $i }}" {{ old('adult') == $i ? 'selected' : '' }}>{{ $i }}</option>
                                                @endfor
                                        </select>
                                        <i class="fa fa-2x fa-user tm-form-element-icon"></i>
                                    </div>
                                    <div class="form-group tm-form-element tm-form-element-2">
                                        <select name="children" class="form-control tm-select" id="children">
                                            <option value="">Children</option>
                                            @for ($i = 0; $i <= 10; $i++)
                                                <option value="{{ $i }}" {{ old('children') == $i ? 'selected' : '' }}>{{ $i }}</option>
                                                @endfor
                                        </select>
                                        <i class="fa fa-user tm-form-element-icon tm-form-element-icon-small"></i>
                                    </div>
                                    <div class="form-group tm-form-element tm-form-element-2">
                                        <select name="room" class="form-control tm-select" id="room">
                                            <option value="">Room</option>
                                            @for ($i = 1; $i <= 10; $i++)
                                                <option value="{{ $i }}" {{ old('room') == $i ? 'selected' : '' }}>{{ $i }}</option>
                                                @endfor
                                        </select>
                                        <i class="fa fa-2x fa-bed tm-form-element-icon"></i>
                                    </div>
                                    <div class="form-group tm-form-element tm-form-element-2">
                                        <button type="submit" class="btn btn-primary tm-btn-search">Check Availability</button>
                                    </div>
                                </div>
                                <div class="form-row clearfix pl-2 pr-2 tm-fx-col-xs">
                                    <p class="tm-margin-b-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    <a href="#" class="ie-10-ml-auto ml-auto mt-1 tm-font-semibold tm-color-primary">Need Help?</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
