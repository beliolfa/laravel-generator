<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Proyecto Empresa</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.2.3/css/bulma.css" />

    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

    @yield('css')
</head>

<body>
@if (!Auth::guest())
    <div class="hero is-fullheight is-light">
        <div class="columns">
            <div class="column is-2 hero is-fullheight is-hidden-mobile is-light">
                @include('layouts.sidebar')
            </div>
            <div class="column is-10" style="margin-left: -10px;">
                <nav class="nav has-shadow" id="top">
                    <div class="container">
                        <div class="nav-left">
                            <a class="nav-item" href="/">
                                <img src="https://dansup.github.io/bulma-templates/images/bulma.png" alt="Home">
                            </a>
                        </div>
                  <span class="nav-toggle">
                    <span></span>
                    <span></span>
                    <span></span>
                  </span>
                        <div class="nav-right nav-menu is-hidden-tablet">
                            <a href="#" class="nav-item is-active">
                                Dashboard
                            </a>
                            <a href="#" class="nav-item">
                                Activity
                            </a>
                            <a href="#" class="nav-item">
                                Timeline
                            </a>
                            <a href="#" class="nav-item">
                                Folders
                            </a>
                        </div>
                    </div>
                </nav>

                    @yield('content')
            </div>
        </div>
    </div>
@else
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{!! url('/') !!}">
                    Proyecto Empresa
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    <li><a href="{!! url('/home') !!}">Home</a></li>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    <li><a href="{!! url('/login') !!}">Login</a></li>
                    <li><a href="{!! url('/register') !!}">Registrar</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div id="page-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
    @endif

    <!-- jQuery 2.1.4 -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.2/js/select2.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/iCheck/1.0.2/icheck.min.js"></script>

    <!-- AdminLTE App -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.3.3/js/app.min.js"></script>

    @yield('scripts')
</body>
</html>