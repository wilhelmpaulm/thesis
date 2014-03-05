<div id="content">
    <div class="row">

        <div class="col-md-6" style="min-height: 400px">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <i class="fa fa-pencil fa-fw"></i> Notepad
                </div>
                <!-- /.panel-heading -->
                <form action="{{URL::to(strtolower(Auth::user()->job_title).'/memo')}}" method="POST">
                <div class="panel-body">
                    <textarea class="form-control"  name="memo" rows="4" cols="20" style="min-height: 380px">{{Auth::user()->memo}}</textarea>
                    <!-- /.list-group -->
                    <br>

                </div>
                <div class="panel-footer clearfix">
                    <span class="btn-group btn-group-sm pull-right">
                        <button  class="btn btn-success btn-block">Save Changes</button>
                    </span>
                </div>
            </div>


        </div>

        <div class="col-md-6 " style="">
            <div class="row"> 
                <div class="col-md-12">
                    <div class="panel panel-warning">
                        <div class="panel-heading">
                            <i class="fa fa-bell fa-fw"></i> Notifications Panel
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="list-group" style="">
                                <a href="#" class="list-group-item">
                                    <i class="fa fa-comment fa-fw"></i> New Comment
                                    <span class="pull-right text-muted small"><em>4 minutes ago</em>
                                    </span>
                                </a>
                                <a href="#" class="list-group-item">
                                    <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                    <span class="pull-right text-muted small"><em>12 minutes ago</em>
                                    </span>
                                </a>


                                <a href="#" class="list-group-item">
                                    <i class="fa fa-money fa-fw"></i> Payment Received
                                    <span class="pull-right text-muted small"><em>Yesterday</em>
                                    </span>
                                </a>
                                <a href="#" class=" list-group-item text-center ">View Notifications</a>
                            </div>
                            <!-- /.list-group -->

                        </div>
                        <!-- /.panel-body -->
                    </div>


                </div>
                <div class="col-md-12" >
                    <div class="panel panel-warning" >
                        <div class="panel-heading">
                            <i class="fa fa-calendar fa-fw"></i> February 6, 2014
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body" >
                            <div class="list-group" style="">
                                <a href="#" class="list-group-item">
                                    <i class="fa fa-cutlery fa-fw"></i> Eat breakfast
                                    <span class="pull-right text-muted small"><em>7:00 AM</em>
                                    </span>
                                </a>
                                <a href="#" class="list-group-item">
                                    <i class="fa fa-clock-o fa-fw"></i> Attend thesis meeting
                                    <span class="pull-right text-muted small"><em>11:00 AM</em>
                                    </span>
                                </a>
                                <a href="#" class="list-group-item">
                                    <i class="fa fa-cutlery fa-fw"></i> Have lunch with Janine
                                    <span class="pull-right text-muted small"><em>12:00 PM</em>
                                    </span>
                                </a>
                                <a href="#" class="list-group-item">
                                    <i class="fa fa-clock-o fa-fw"></i> Meeting with Ms. Stef
                                    <span class="pull-right text-muted small"><em>2:00 PM</em>
                                    </span>
                                </a>

                                <a href="#" class="list-group-item">
                                    <i class="fa fa-tasks fa-fw"></i> Design DB (thesis)
                                    <span class="pull-right text-muted small"><em>3:30 PM</em>
                                    </span>
                                </a>
                                <a href="#" class=" list-group-item text-center">View Calendar</a>
                            </div>
                            <!-- /.list-group -->

                        </div>
                        <!-- /.panel-body -->
                    </div>


                </div>



            </div>
        </div>
    </div>