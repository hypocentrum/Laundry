<html lang="en">
    <head>
        <title>Laundry</title>
        <script src="{{asset('jquery/jquery-1.12.2.min.js')}}"></script>
        <script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>        
        <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap-theme.min.css')}}">
        <!-- CSS And JavaScript -->
    </head>

    <body>
        <div class="container">
            <nav class="navbar navbar-default" role="navigation">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="{{ url('/') }}">Laundry</a>
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav">
                            <li class="{{ Request::segment(1) === null ? 'active' : null }}">                            
                                <a href="{{ url('/') }}">Home</a>
                            </li>
                        </ul>
                        <ul class="nav navbar-nav">
                            <li class="{{ Request::segment(1) === 'barangs' ? 'active' : null }}">
                                <a href="{{ route('barangs.index') }}">Barang</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>

        @yield('content')
    </body>
</html>