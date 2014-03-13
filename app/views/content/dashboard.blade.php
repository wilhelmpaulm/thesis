<div id="content">
    <div class="row">

        <div class="col-md-6" style="min-height: 400px">
            <div class="panel panel-black">
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
                        <button  class="btn btn-primary btn-block">Save Changes</button>
                    </span>
                </div>
            </div>


        </div>

        <div class="col-md-6 " style="">
            <div class="row"> 
                <div class="col-md-12">
                    <div class="panel panel-black">
                        <div class="panel-heading">
                            <i class="fa fa-bell fa-fw"></i> Notifications Panel
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="list-group" style="">
                                <?php $notifications = System_log::where("target_id", "=", Auth::user()->id)->orderBy('created_at', 'desc')->take(10)->get()?>
                                @foreach($notifications as $n)
                                <a href="#" class="list-group-item">
                                    <i class="fa fa-comment fa-fw"></i> {{$n->action}}
                                    <span class="pull-right text-muted small"><em>{{$n->created_at}}</em>
                                    </span>
                                </a>
                               @endforeach
                                <a href="{{URL::to(strtolower(Auth::user()->job_title)."/notifications")}}" class=" list-group-item text-center ">View Notifications</a>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="col-md-12" >
                    <div class="panel panel-black" >
                        <div class="panel-heading">
                            <i class="fa fa-calendar fa-fw"></i> Tasks
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body" >
                            <div class="list-group" style="">
                               <?php $cal = Task::where("user_id", "=", Auth::user()->id)->orderBy('created_at', 'desc')->take(10)->get()?>
                                @foreach($cal as $c)
                                <a href="{{URL::to(strtolower(Auth::user()->job_title)."/calendar")}}" class="list-group-item">
                                    <i class="fa fa-comment fa-fw"></i> {{$c->title}}
                                    <span class="pull-right text-muted small"><em>{{$c->date_start}} to {{$c->date_end}}</em>
                                    </span>
                                </a>
                               @endforeach
                                
                                <a href="{{URL::to(strtolower(Auth::user()->job_title)."/calendar")}}" class=" list-group-item text-center">View Calendar</a>
                            </div>
                            <!-- /.list-group -->
                        </div>
                    </div>


                </div>



            </div>
        </div>
    </div>