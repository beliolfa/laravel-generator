<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Proyecto Empresa</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.2.3/css/bulma.css" />

    @yield('css')
</head>

<body>
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

    @yield('scripts')
</body>
</html>