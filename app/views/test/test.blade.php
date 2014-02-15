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
        {{HTML::style("css/font-awesome.css")}}
        {{HTML::style("css/bootstrap.css")}}
        {{HTML::style("css/sb-admin.css")}}
        {{HTML::style("css/wilhelmpaulm.css")}}
        {{HTML::script("js/jquery.js")}}
        {{HTML::script("js/bootstrap.min.js")}}
        {{HTML::script("js/sb-admin.js")}}
        <style>
            body {
                /*                padding-top: 60px;
                                padding-bottom: 20px;*/
                height: 100%;
            }
            
            

            .br-r {
                background-color: #f8f8f8;
                border-width: 0 1px;
                border-style: solid;
                border-color: #e7e7e7
            }
            .bg-well {
                /*background-color: #f8f8f8;*/
            }

        </style>

    </head>
    <body>


        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">SB Admin v2.0</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-envelope fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>Read All Messages</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-messages -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-tasks fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-tasks">
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 1</strong>
                                        <span class="pull-right text-muted">40% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                            <span class="sr-only">40% Complete (success)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 2</strong>
                                        <span class="pull-right text-muted">20% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                            <span class="sr-only">20% Complete</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 3</strong>
                                        <span class="pull-right text-muted">60% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            <span class="sr-only">60% Complete (warning)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 4</strong>
                                        <span class="pull-right text-muted">80% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                            <span class="sr-only">80% Complete (danger)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Tasks</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-tasks -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts" id="al">
                        
                    </ul>
                    <!-- /.dropdown-alerts -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->
        </nav>
        <div class="pad20">
        <div class="container">
            <div class="row">
                <div class="col-md-3 well">
                    <nav class="navbar-default navbar-static-side br-r"  role="navigation">
                        <div class="sidebar-collapse">
                            <ul class="nav" id="side-menu">
                                <li class="sidebar-search">
                                    <div class="input-group custom-search-form input-group-sm">
                                        <input type="text" class="form-control " placeholder="Search...">
                                        <span class="input-group-btn">
                                            <button class="btn btn-default " type="button">
                                                <i class="glyphicon glyphicon-search"></i>
                                            </button>
                                        </span>
                                    </div>
                                    <!-- /input-group -->
                                </li>
                                <li>
                                    <a href="index.html"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Charts<span class="fa arrow"></span></a>
                                    <ul class="nav nav-second-level">
                                        <li>
                                            <a href="flot.html">Flot Charts</a>
                                        </li>
                                        <li>
                                            <a href="morris.html">Morris.js Charts</a>
                                        </li>
                                    </ul>
                                    <!-- /.nav-second-level -->
                                </li>
                                <li>
                                    <a href="tables.html"><i class="fa fa-table fa-fw"></i> Tables</a>
                                </li>
                                <li>
                                    <a href="forms.html"><i class="fa fa-edit fa-fw"></i> Forms</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-wrench fa-fw"></i> UI Elements<span class="fa arrow"></span></a>
                                    <ul class="nav nav-second-level">
                                        <li>
                                            <a href="panels-wells.html">Panels and Wells</a>
                                        </li>
                                        <li>
                                            <a href="buttons.html">Buttons</a>
                                        </li>
                                        <li>
                                            <a href="notifications.html">Notifications</a>
                                        </li>
                                        <li>
                                            <a href="typography.html">Typography</a>
                                        </li>
                                        <li>
                                            <a href="grid.html">Grid</a>
                                        </li>
                                    </ul>
                                    <!-- /.nav-second-level -->
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-sitemap fa-fw"></i> Multi-Level Dropdown<span class="fa arrow"></span></a>
                                    <ul class="nav nav-second-level">
                                        <li>
                                            <a href="#">Second Level Item</a>
                                        </li>
                                        <li>
                                            <a href="#">Second Level Item</a>
                                        </li>
                                        <li>
                                            <a href="#">Third Level <span class="fa arrow"></span></a>
                                            <ul class="nav nav-third-level">
                                                <li>
                                                    <a href="#">Third Level Item</a>
                                                </li>
                                                <li>
                                                    <a href="#">Third Level Item</a>
                                                </li>
                                                <li>
                                                    <a href="#">Third Level Item</a>
                                                </li>
                                                <li>
                                                    <a href="#">Third Level Item</a>
                                                </li>
                                            </ul>
                                            <!-- /.nav-third-level -->
                                        </li>
                                    </ul>
                                    <!-- /.nav-second-level -->
                                </li>
                                <li class="">
                                    <a href="#"><i class="fa fa-files-o fa-fw"></i> Sample Pages<span class="fa arrow"></span></a>
                                    <ul class="nav nav-second-level">
                                        <li>
                                            <a href="blank.html">Blank Page</a>
                                        </li>
                                        <li>
                                            <a href="login.html">Login Page</a>
                                        </li>
                                    </ul>
                                    <!-- /.nav-second-level -->
                                </li>
                                <li>
                                    <a class="c-purple" href="#">&copy; <span class="c-alizarin"> TEAM <i class="fa fa-gear"></i> PAYASO</span></a>

                                </li>

                            </ul>
                            <!-- /#side-menu -->
                        </div>
                        <!-- /.sidebar-collapse -->
                    </nav>

                </div>
                <div class="col-md-3 well">
                </div>
                <div class="col-md-3 well">
                </div>
                <div class="col-md-3 well">
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-md-1 well btn" id="poop">.col-md-1</div>
            <div class="col-md-1 well">.col-md-1</div>
            <div class="col-md-1 well">.col-md-1</div>
            <div class="col-md-1 well">.col-md-1</div>
            <div class="col-md-1 well">.col-md-1</div>
            <div class="col-md-1 well">.col-md-1</div>
            <div class="col-md-1 well">.col-md-1</div>
            <div class="col-md-1 well">.col-md-1</div>
            <div class="col-md-1 well">.col-md-1</div>
            <div class="col-md-1 well">.col-md-1</div>
            <div class="col-md-1 well">.col-md-1</div>
            <div class="col-md-1 well">.col-md-1</div>
        </div>
        <div class="row">
            <div class="col-md-1 well">.col-md-1</div>
            <div class="col-md-1 well">.col-md-1</div>
            <div class="col-md-1 well">.col-md-1</div>
            <div class="col-md-1 well">.col-md-1</div>
            <div class="col-md-1 well">.col-md-1</div>
            <div class="col-md-1 well">.col-md-1</div>
            <div class="col-md-1 well">.col-md-1</div>
            <div class="col-md-1 well">.col-md-1</div>
            <div class="col-md-1 well">.col-md-1</div>
            <div class="col-md-1 well">.col-md-1</div>
            <div class="col-md-1 well">.col-md-1</div>
            <div class="col-md-1 well">.col-md-1</div>
        </div>
        <div class="row">
            <div class="col-md-1 well">.col-md-1</div>
            <div class="col-md-1 well">.col-md-1</div>
            <div class="col-md-1 well">.col-md-1</div>
            <div class="col-md-1 well">.col-md-1</div>
            <div class="col-md-1 well">.col-md-1</div>
            <div class="col-md-1 well">.col-md-1</div>
            <div class="col-md-1 well">.col-md-1</div>
            <div class="col-md-1 well">.col-md-1</div>
            <div class="col-md-1 well">.col-md-1</div>
            <div class="col-md-1 well">.col-md-1</div>
            <div class="col-md-1 well">.col-md-1</div>
            <div class="col-md-1 well">.col-md-1</div>
            <div class="col-md-1 well">.col-md-1</div>
            <div class="col-md-1 well">.col-md-1</div>
            <div class="col-md-1 well">.col-md-1</div>
            <div class="col-md-1 well">.col-md-1</div>
            <div class="col-md-1 well">.col-md-1</div>
            <div class="col-md-1 well">.col-md-1</div>
            <div class="col-md-1 well">.col-md-1</div>
            <div class="col-md-1 well">.col-md-1</div>
            <div class="col-md-1 well">.col-md-1</div>
            <div class="col-md-1 well">.col-md-1</div>
            <div class="col-md-1 well">.col-md-1</div>
            <div class="col-md-1 well">.col-md-1</div>
            <div class="col-md-1 well">.col-md-1</div>
            <div class="col-md-1 well">.col-md-1</div>
            <div class="col-md-1 well">.col-md-1</div>
            <div class="col-md-1 well">.col-md-1</div>
            <div class="col-md-1 well">.col-md-1</div>
            <div class="col-md-1 well">.col-md-1</div>
            <div class="col-md-1 well">.col-md-1</div>
            <div class="col-md-1 well">.col-md-1</div>
            <div class="col-md-1 well">.col-md-1</div>
            <div class="col-md-1 well">.col-md-1</div>
            <div class="col-md-1 well">.col-md-1</div>
            <div class="col-md-1 well">.col-md-1</div>
        </div>
    </div>
    </div>





</body>

<script>
    $("#poop").on("click", function() {
        $.get("{{URL::to('/alerts')}}", function(data) {

//            $(".dropdown-menu .dropdown-alerts").replaceWith(data);
            $("#al").first().replaceWith(data);

            //                    console.log(remlist);
        });


    });





</script>


</html>
