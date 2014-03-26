
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="wilhelm paul martinezz">
        <link rel="shortcut icon" href="{{URL::asset('apple-touch-icon-144.png')}}">

        <title>SHERLOCK</title>

        <!-- Bootstrap core CSS -->
        {{HTML::style("css/lumen.bootstrap.min.css")}}
        {{HTML::style("css/font-awesome.css")}}
        {{HTML::style("css/wilhelmpaulm.css")}}
        {{HTML::style("css/grayscale.css")}}
        {{HTML::script("js/jquery.js")}}
        {{HTML::script("js/bootstrap.min.js")}}
        {{HTML::script("js/grayscale.js")}}
        {{HTML::script("js/easing.js")}}
        <style>
            body {
                /*padding-top: 60px;*/
                padding-bottom: 20px;
                zoom: 87%;
            }

            ul.dropdown-menu li div{
                white-space: normal;

            }

            ul.dropdown-menu{
                width: 310px;

            }

        </style>

    </head>

   
    <body class="f-rob" id="page-top" data-spy="scroll" data-target=".navbar-custom">

    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="#page-top">
                    <i class="fa fa-search"></i>  <span class="fs20 f-osb">SHERLOCK</span>
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="page-scroll hidden">
                        <a href="#page-top">Top</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#login">Login</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#about">About</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#download">Contact</a>
                    </li>
                    <li class="">
                        <a href="/case-tracking">TRACK CASE</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <section class="intro">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h1 class="brand-heading f-osb">SHERLOCK</h1>
                        <p class="intro-text">An Investigative Case Management System for <br>National Bureau of Investigation <br>Special Investigation Services</p>
                        <div class="page-scroll">
                            <a href="#about" class="btn btn-circle">
                                <i class="fa fa-angle-double-down animated"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="login" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>Login</h2>
                @yield("main")
            </div>
        </div>
    </section>
    <section id="about" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>About SHERLOCK</h2>
                <p>This project is in partial fulfillment of THSIS01 for BS Information Systems students.</p>
                <p>The system was developed by <a href="http://wilhelmpaulm.com/">wilhelmpaulm</a> along with his group mates <a href="http://twitter.com/janinekau">@janinekau</a></p>
                <p><a href="http://twitter.com/kieruntalan">@kieruntalan</a> and <a href="https://twitter.com/enricoespenesin">@enricoespenesin</a></p>
            </div>
        </div>
    </section>

    <section id="download" class="content-section text-center">
        <div class="download-section">
            <div class="container">
               <h2>Contact TEAM PAYASO</h2>
                <p>Feel free to email us to provide some feedback on our project!</p>
                <p>teampayaso@wilhelmpaulm.com</p>
                <ul class="list-inline banner-social-buttons">
                    <li><a href="https://twitter.com/wilhelmpaulm" class="btn btn-default btn-lg"><i class="fa fa-twitter fa-fw"></i> <span class="network-name">Twitter</span></a>
                    </li>
                    <li><a href="https://github.com/wilhelmpaulm" class="btn btn-default btn-lg"><i class="fa fa-github fa-fw"></i> <span class="network-name">Github</span></a>
                    </li>
                    <li><a href="https://plus.google.com/wilhelmpaulm/posts" class="btn btn-default btn-lg"><i class="fa fa-google-plus fa-fw"></i> <span class="network-name">Google+</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </section>




</body>


</html>
