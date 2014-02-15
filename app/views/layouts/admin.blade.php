
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="wilhelm paul martinezz">
        <link rel="shortcut icon" href="{{URL::asset('apple-touch-icon-144.png')}}">

        <title>PITCHIN</title>

        <!-- Bootstrap core CSS -->
        {{HTML::style("css/bootstrap.css")}}
        {{HTML::style("css/font-awesome.css")}}
        {{HTML::style("css/wilhelmpaulm.css")}}
        {{HTML::script("js/jquery.js")}}
        {{HTML::script("js/bootstrap.min.js")}}
        <style>
            body {
                padding-top: 60px;
                padding-bottom: 20px;
            }

            ul.dropdown-menu li div{
                white-space: normal;

            }

            ul.dropdown-menu{
                width: 310px;

            }

        </style>

    </head>

    <body>

        <div class="navbar navbar-default navbar-fixed-top " role="navigation">
            <div class="">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="{{URL::to("/")}}"><span class="c-sunflower"><i class="fa fa-shield"></i>  <span class="c-blue">N</span>ational <span class="c-blue">B</span>ureau of <span class="c-blue">I</span>nvestigation </span></a>
                </div>
                <div class="navbar-collapse collapse">

                    <ul class="nav navbar-nav navbar-right">
                        <!--<li><a href="#" class="refresh"> <span class="c-lightblue"><i class="fa fa-refresh"></i></span></a></li>-->
                        <li class="dropdown">
                            <a class="dropdown-toggle refresh " data-toggle="dropdown" href="#"><span class="c-belizehole"><i class="fa fa-envelope"></i> <i class="fa fa-caret-down"></i></span>                            </a>
                            <ul class="dropdown-menu"  id="alert-messages">
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle refresh " data-toggle="dropdown" href="#"><span class="c-belizehole"><i class="fa fa-bullhorn"></i> <i class="fa fa-caret-down"></i></span>                            </a>
                            <ul class="dropdown-menu"  id="alert-notifications">
                            </ul>
                        </li>
                     

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <span class="c-belizehole"><i class="fa fa-user"></i> SP01 Wilhelm <i class="fa fa-caret-down"></i></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#"><i class="glyphicon glyphicon-book"></i>  Profile</a></li>
                                <li><a href="#"><i class="glyphicon glyphicon-cog"></i>  Settings</a></li>
                                <li class="divider"></li>
                                <li><a href="#"><i class="glyphicon glyphicon-log-out"></i> Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div><!--/.navbar-collapse -->
            </div>
        </div>
        <div class="pad20">
            <div class="row">
                <div class="col-md-2">
                    
                    @include("sidebar.main.agent")
                    
                
                </div>
                <div class="col-md-10">
                    <div class="row">
                        @yield("main")
                    </div>
                </div>

            </div>
            <!-- Main jumbotron for a primary marketing message or call to action -->
        </div>


    </div> <!-- /container -->

    <script>
        $(".refresh").on("click", function() {
            $.get("{{URL::to('/alerts/messages')}}", function(data) {
                $("#alert-messages").replaceWith(data);
            });
            $.get("{{URL::to('/alerts/notifications')}}", function(data) {
                $("#alert-notifications").replaceWith(data);
            });
        });
    </script>



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
</body>
</html>
