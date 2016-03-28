<!DOCTYPE html>
<html>
    <head>
        <title>Laravel is awesome</title>


        {!! Html::style('css/app.css') !!}
        {!! Html::style('css/bootstrap.min.css') !!}
        {!! Html::style('css/jasny-bootstrap.css') !!}

        {!! Html::script('js/jquery-1.12.2.min.js') !!}
        {!! Html::script('js/bootstrap.min.js') !!}
        {!! Html::script('js/jasny-bootstrap.min.js') !!}

        <style>
        body { padding-top: 60px; }
        @media (max-width: 979px) {
            body { padding-top: 0px; }
        }
        </style>
    </head>
    
     <nav class="navbar navbar-default navbar-fixed-top">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header page-scroll">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#page-top">POS Application</a>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="hidden">
                                <a href="#page-top"></a>
                            </li>
                            <li class="page-scroll">
                                <a href="#portfolio">Profile</a>
                            </li>
                            <li class="page-scroll">
                                <a href="#about">Report</a>
                            </li>
                            <li class="page-scroll">
                                <a href="#contact">Options</a>
                            </li>
                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
                </div>
                <!-- /.container-fluid -->
            </nav>

    <body>

        <div class="container">
            @yield('content')
        </div><!-- /.container -->
    </body>

</html>