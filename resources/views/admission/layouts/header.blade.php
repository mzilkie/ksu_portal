<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<meta name="Admissions, K-State, CRM, Portal, Prospective Students" content="">
<meta name="Matthew Zilkie, Jacob Dehoff, Megan" content="">
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="icon" href="../../favicon.ico">

<title>{{ config('app.name', 'Laravel') }}</title>
<!-- Stylesheets -->
<link href="{{ URL::asset('css/app.css')}}" rel="stylesheet">
<link href="{{ URL::asset('css/bootstrap.min.css')}}" rel="stylesheet">
<link href="{{ URL::asset('css/ie10-viewport-bug-workaround.css')}}" rel="stylesheet">

<!-- scripts -->
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<script>
        window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
        ]); ?>
</script>

</head>

<body>
<div id="wrapper">
        <div class="overlay"></div>
    
        <!-- Sidebar -->
        <nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper" role="navigation">
            <ul class="nav sidebar-nav">
                <!-- Authentication Links -->
                @if (Auth::guard('admissions')->user())
                <li class="sidebar-brand">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </li>
                <li>
                    <a href="{{ url('/') }}"><i class="fa fa-fw fa-home"></i> Home</a>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-fw fa-plus"></i> Information Form <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="{{ url('/form') }}">Form</a></li>
                    <li><a href="{{ url('/form/create') }}">New Form</a></li>
                    <li><a href="{{ url('/form/{username}/edit')}}">Edit Form</a></li>
                  </ul>
                </li>
                <li>
                    <a href="{{ url('/messages') }}"><i class="fa fa-fw fa-file-o"></i> Messages</a>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-fw fa-plus"></i> {{ Auth::guard('admissions')->user()->name }}<span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">View Profile</a></li>
                    <li><a href="#">Edit Profile</a></li>
                    <li><a href="#">Settings</a></li>
                    <li>
                        <a href="{{ url('/admission/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            Logout
                        </a>

                        <form id="logout-form" action="{{ url('/admission/logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                  </ul>
                </li>
                @else
                <li>
                    <a href="{{ url('/admission/login') }}"><i class="fa fa-fw fa-file-o"></i> Login</a>
                </li>
                <li>
                    <a href="{{ url('/admission/register') }}"><i class="fa fa-fw fa-file-o"></i> Register</a>
                </li>
                @endif
            </ul>
        </nav>
        <!-- /#sidebar-wrapper -->
