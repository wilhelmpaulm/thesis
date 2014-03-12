
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
        {{HTML::style("css/dtable3.css")}}
        {{HTML::style("css/grayscale.css")}}
        {{HTML::style("css/wilhelm-panel.css")}}
        
        {{HTML::script("js/jquery.js")}}
        {{HTML::script("js/grayscale.js")}}
        {{HTML::script("js/bootstrap.min.js")}}
        {{HTML::script("js/dataTables.min.js")}}
        {{HTML::script("js/dtable3.js")}}
        {{HTML::script("js/easing.js")}}
        <style>
            body{
                zoom:  87%;
                background: url('{{URL::asset("img/intro-bg.jpg")}}')
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
                    <a class="navbar-brand" href="{{URL::to("")}}">
                          <span class="fs20 f-osb"><i class="fa fa-search"></i> SHERLOCK</span>
                    </a>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>

        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <section id="about" class="container">
            <div class="row">
                <div class="col-md-12">
                    @yield("main")

                </div>
            </div>
        </section>



    </body>


</html>
