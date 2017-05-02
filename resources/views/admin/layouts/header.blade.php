<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="/img/favicon.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="Admissions, K-State, CRM, Portal, Prospective Students" content="">
    <meta name="Matthew Zilkie, Jacob Dehoff, Megan" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width" />
    <!-- Bootstrap core CSS     -->
    <link href="/css/bootstrap.min.css" rel="stylesheet" />
    <!--  Material Dashboard CSS    -->
    <link href="/css/material-dashboard.css" rel="stylesheet" />
    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons" />
    <script>
        window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>

<body>
    <div class="wrapper">
        <div class="sidebar" data-active-color="rose" data-background-color="black" data-image="../assets/img/sidebar-1.jpg">
            <!--
        Tip 1: You can change the color of active element of the sidebar using: data-active-color="purple | blue | green | orange | red | rose"
        Tip 2: you can also add an image using data-image tag
        Tip 3: you can change the color of the sidebar with data-background-color="white | black"
    -->
            <div class="logo">
                <a href="{{route('home')}}" class="simple-text">
                    KSU Admissions Portal
                </a>
            </div>
            <div class="logo logo-mini">
                <a href="{{route('home')}}" class="simple-text">
                    KSU
                </a>
            </div>
            <div class="sidebar-wrapper">
                <div class="user">
                    <div class="photo">
                        <!--<img src="{{URL::asset('/img/' + $user_img)}}" /> -->
                    </div>
                    <div class="info">
                        <a data-toggle="collapse" href="#collapseExample" class="collapsed">
                            {{ Auth::guard('admins')->user()->firstName + " " + Auth::guard('admins')->user()->lastName }}
                            <b class="caret"></b>
                        </a>
                        <div class="collapse" id="collapseExample">
                            <ul class="nav">
                                <li>
                                    <a href="#">My Profile</a>
                                </li>
                                <li>
                                    <a href="#">Edit Profile</a>
                                </li>
                                <li>
                                    <a href="#">Settings</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <ul class="nav">
                    <li class="active">
                        <a href="{{route('home')}}">
                            <i class="material-icons">dashboard</i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li>
                        <a data-toggle="collapse" href="#pagesExamples">
                            <i class="material-icons">image</i>
                            <p>Campaigns
                                <b class="caret"></b>
                            </p>
                        </a>
                        <div class="collapse" id="pagesExamples">
                            <ul class="nav">
                                <li>
                                    <a href="{{route('/campaigns')}}">View</a>
                                </li>
                                <li>
                                    <a href="{{route('campaigns.run')}}">Run</a>
                                </li>
                                <li>
                                    <a href="{{route('campaigns.history')}}">History</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a data-toggle="collapse" href="#componentsExamples">
                            <i class="material-icons">apps</i>
                            <p>Interactions
                                <b class="caret"></b>
                            </p>
                        </a>
                        <div class="collapse" id="componentsExamples">
                            <ul class="nav">
                                <li>
                                    <a href="./components/buttons.html">Create</a>
                                </li>
                                <li>
                                    <a href="./components/grid.html">View</a>
                                </li>
                                <li>
                                    <a href="./components/panels.html">Edit</a>
                                </li>
                                <li>
                                    <a href="./components/sweet-alert.html">History</a>
                                </li>>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a data-toggle="collapse" href="#formsExamples">
                            <i class="material-icons">content_paste</i>
                            <p>Tasks
                                <b class="caret"></b>
                            </p>
                        </a>
                        <div class="collapse" id="formsExamples">
                            <ul class="nav">
                                <li>
                                    <a href="./forms/regular.html">Create</a>
                                </li>
                                <li>
                                    <a href="./forms/extended.html">Edit</a>
                                </li>
                                <li>
                                    <a href="./forms/validation.html">View</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a data-toggle="collapse" href="#tablesExamples">
                            <i class="material-icons">grid_on</i>
                            <p>Users
                                <b class="caret"></b>
                            </p>
                        </a>
                        <div class="collapse" id="tablesExamples">
                            <ul class="nav">
                                <li>
                                    <a href="./tables/regular.html">Add</a>
                                </li>
                                <li>
                                    <a href="./tables/extended.html">Edit</a>
                                </li>
                                <li>
                                    <a href="./tables/datatables.net.html">Remove</a>
                                </li>
                                <li>
                                    <a href="./tables/datatables.net.html">View</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a data-toggle="collapse" href="#mapsExamples">
                            <i class="material-icons">place</i>
                            <p>Maps
                                <b class="caret"></b>
                            </p>
                        </a>
                        <div class="collapse" id="mapsExamples">
                            <ul class="nav">
                                <li>
                                    <a href="./maps/google.html">Google Maps</a>
                                </li>
                                <li>
                                    <a href="./maps/fullscreen.html">Full Screen Map</a>
                                </li>
                                <li>
                                    <a href="./maps/vector.html">Vector Map</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>