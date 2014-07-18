<?php $user = Auth::user();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="wilhelm paul martinezz">
        <link rel="shortcut icon" href="{{URL::asset('apple-touch-icon-144.png')}}">
        <!--&#128269;-->
        <title>SHERLOCK</title>

        <!--{{HTML::style("css/ColumnFilterWidgets.css")}}-->
        <!--{{HTML::style("css/morris.css")}}-->
        <!-- Bootstrap core CSS -->
        <!--{{HTML::style("css/daterangepicker-bs3.css")}}-->
        {{HTML::style("css/bootstrap-datetimepicker.css")}}
        <!--{{HTML::style("css/fullcalendar.print.css")}}-->
        {{HTML::style("css/fullcalendar.css")}}
        {{HTML::style("css/dtable3.css")}}
        <!--{{HTML::style("css/dataTables.css")}}-->
        {{HTML::style("css/lumen.bootstrap.min.css")}}
        {{HTML::style("css/bootstrap-tagsinput.css")}}
        {{HTML::style("css/bootstrap-modal-bs3patch.css")}}
        {{HTML::style("css/bootstrap-modal.css")}}
        {{HTML::style("css/bootstrap-select.css")}}
        {{HTML::style("css/bootstrap-datetimepicker.css")}}
        {{HTML::style("css/font-awesome.css")}}
        {{HTML::style("css/wilhelmpaulm.css")}}
        {{HTML::style("css/timeline.css")}}
        {{HTML::style("css/nv.d3.css")}}
        {{HTML::style("css/printer.css")}}
        {{HTML::style("css/wilhelm-panel.css")}}



        <!--{{HTML::script("js/raphael.js")}}-->
        {{HTML::script("js/jquery.js")}}
        <!--{{HTML::script("js/morris.js")}}-->
        {{HTML::script("js/moment.js")}}
        {{HTML::script("js/bootstrap-tagsinput.js")}}
        <!--{{HTML::script("js/daterangepicker.js")}}-->
        {{HTML::script("js/dataTables.min.js")}}
        {{HTML::script("js/bootstrap3-typeahead.js")}}
        <!--{{HTML::script("js/typeahead.js")}}-->
        {{HTML::script("js/dtable3.js")}}
        {{HTML::script("js/fullcalendar.js")}}
        {{HTML::script("js/bootstrap.min.js")}}
        {{HTML::script("js/bootstrap-modalmanager.js")}}
        {{HTML::script("js/bootstrap-modal.js")}}
        {{HTML::script("js/bootstrap-datetimepicker.min.js")}}
        {{HTML::script("js/bootstrap-select.js")}}
        {{HTML::script("js/list.js")}}
        {{HTML::script("js/list.fuzzysearch.min.js")}}
        {{HTML::script("js/d3.v3.js")}}
        {{HTML::script("js/nv.d3.js")}}
        {{HTML::script("js/colorbrewer.js")}}
        {{HTML::script("js/highcharts/highcharts.js")}}
        {{HTML::script("js/highcharts/modules/data.js")}}
        {{HTML::script("js/highcharts/modules/exporting.js")}}
        <!--{{HTML::script("js/ColumnFilterWidgets.js")}}-->
        <style>


            body {
                padding-top: 60px;
                padding-bottom: 20px;
                zoom: 87%;
                /*zoom: 90%;*/
                /*transform: scale(.80);*/
                /*transform-origin: 10% 10%;*/
                /*font-size: 100%;*/
                background: url('{{URL::asset("img/intro-bg.jpg")}}')
            }

            .zoom-80{
                /*zoom: 87%;*/

            }
            .zoom-100{
                zoom: 115%;

            }

            ul.dropdown-menu li div{
                white-space: normal;

            }

            .long-down{
                width: 360px;

            }

            .clickable{
                cursor: pointer
            }
            .img-fit {
                width: 25px;
                height : 25px;
                max-height: 100%;
                max-width: 100%;
                margin: -20px ;
                margin-right: 30px;
                margin-left: 10px;
            }
            .img-mess {
                width: 40px;
                height : 40px;
                /*max-height: 100%;*/
                /*max-width: 100%;*/
                /*margin: -20px ;*/
                /*margin-right: 30px;*/
                /*margin-left: 10px;*/
            }

            a {
                text-decoration: none !important;
                cursor: pointer;
            }

        </style>

    </head>

    <body class="">

        <div class="navbar navbar-default navbar-fixed-top hidden-print" role="navigation">
            <div class="">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="{{URL::to("/")}}"><span class=""><i class="fa fa-shield"></i>  <span class="">N</span>ational <span class="">B</span>ureau of <span class="">I</span>nvestigation </span></a>
                    <!--<a class="navbar-brand" href="{{URL::to("/")}}"><img src="{{URL::to('logo.png')}}"  class=" pull-left" style="width: 10%; "/></a>-->
                </div>
                <div class="navbar-collapse collapse">

                    <ul class="nav navbar-nav navbar-right">
                        <!--<li><a href="#" class="refresh"> <span class="c-lightblue"><i class="fa fa-refresh"></i></span></a></li>-->
                        <li class="dropdown">
                            <a class="dropdown-toggle refresh " data-toggle="dropdown" href="#"><span class=""><i class="fa fa-envelope"></i> <i class="fa fa-caret-down"></i></span>                            </a>
                            <ul class="dropdown-menu long-down"  id="alert-messages">
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle refresh " data-toggle="dropdown" href="#"><span class="" id="notifSpan"><i class="fa fa-bullhorn"></i> <span id="notifNum"></span>  <i class="fa fa-caret-down"></i></span>                            </a>
                            <ul class="dropdown-menu long-down"  id="alert-notifications">
                            </ul>
                        </li>


                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <span class="clearfix">{{$user->last_name.", ".$user->first_name}} <img src="{{URL::to('nbi/agent/picture/'.$user->file_picture)}}"  class=" img-responsive img-fit " style="display: inline"  />  </span></a>
                            <ul class="dropdown-menu">
                                <li> <img src="{{URL::to('nbi/agent/picture/'.$user->file_picture)}}"  class="img-circle img-responsive" style="width: 50%; margin: auto"  /></li>
                                <li class="divider"></li>
                                <!--<li><a href="#"><i class="glyphicon glyphicon-book"></i>  Profile</a></li>-->
                                <!--<li><a href="#"><i class="glyphicon glyphicon-cog"></i>  Settings</a></li>-->
                                <!--<li class="divider"></li>-->
                                <li><a href="{{URL::to("logout")}}"><i class="glyphicon glyphicon-log-out"></i> Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div><!--/.navbar-collapse -->
            </div>
        </div>
        <!--        <div class="pad10">
                    <img src="{{URL::to('img/banner.png')}}"  class=" img-responsive" height="50" style="margin: auto; width: 100%; height: 50px;"  />
                    
                </div>-->

        <div class="pad15">
            <div class="row">
                <div class="col-md-3 hidden-print">
                    @if(Auth::user()->job_title == "Agent")    
                    @include("sidebar.main.agent")
                    @elseif(Auth::user()->job_title == "Chief")    
                    @include("sidebar.main.chief")
                    @elseif(Auth::user()->job_title == "Executive_Officer")    
                    @include("sidebar.main.executiveofficer")
                    @elseif(Auth::user()->job_title == "Secretary")    
                    @include("sidebar.main.secretary")

                    @endif
                </div>
                <div class="col-md-9">
                    <div class="row">
                        @yield("main")
                    </div>
                </div>

            </div>
            <!-- Main jumbotron for a primary marketing message or call to action -->
        </div>


    </div> <!-- /container -->





    <!-- Bootstrap core JavaScript
    ================================================== -->
    <script>
//        $("body").addClass("zoom-80");
    </script>

    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Edit Profile</h4>
            </div>
            <form action="{{URL::to('users/update')}}">
                <div class="modal-body">
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary ">Save changes</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        $(".refresh").on("click", function() {
            $.get("{{URL::to('alerts-messages')}}", function(data) {
                $("#alert-messages").replaceWith(data);
            });
            $.get("{{URL::to('alerts-notifications')}}", function(data) {
                $("#alert-notifications").replaceWith(data);
            });
        });


        //        $('body').modalmanager('loading');
    </script>
    <script>
        $.get("{{URL::to('notifications-num')}}", function(data) {
            if (data > 0) {
                    console.log(data);
                $("#notifNum").text(data);
                $("#notifSpan").addClass("c-alizarin");
            } else {
                    console.log(data);
                $("#notifNum").text("");
                $("#notifSpan").removeClass("c-alizarin");
            }
//                alert(data);
        });


        setInterval(function() {
            $.get("{{URL::to('notifications-num')}}", function(data) {
                if (data > 0) {
                    console.log(data);
                    $("#notifNum").text(data);
                    $("#notifSpan").addClass("c-alizarin");
                } else {
                    console.log(data);
                    $("#notifNum").text("");
                    $("#notifSpan").removeClass("c-alizarin");
                }
//                alert(data);
            });

        }, 5000);

    </script>


    <!-- Placed at the end of the document so the pages load faster -->
</body>
</html>
