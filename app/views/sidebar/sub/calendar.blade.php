<!--<div class="panel panel-black">
    <div class="panel-heading">
        <h3 class="panel-title"><i class="fa fa-bookmark"></i> Schedule</h3>
    </div>-->
    <!--<div class="panel-body"></div>-->
    <div  id="list_plug" class="list-group" >
        <div class="">
            <div class="input-group custom-search-form input-group-sm">
                <input type="text" class="search form-control " placeholder="Search...">
                <span class="input-group-btn">
                    <button class="btn btn-default sort" type="button" data-sort="list_id">
                        <i class="fa fa-sort"></i> #
                    </button>
                    <button class="btn btn-default sort" type="button" data-sort="list_date">
                        <i class="fa fa-sort"></i> <i class="fa fa-calendar"></i>
                    </button>
                    <button class="btn btn-default sort" type="button" data-sort="list_heading">
                        <i class="fa fa-sort"></i> A
                    </button>
                </span>    
               
                

            </div>
           <div class="btn-group btn-group-justified btn-group-sm">
                    <a class="btn btn-success " type="button" data-toggle="modal" data-target="#addAppointment">
                        <i class="fa fa-plus"></i> <i class="fa fa-group"></i> 
                    </a>
                    <a class="btn  btn-success" type="button" data-toggle="modal" data-target="#addTask">
                        <i class="fa fa-plus"></i> <i class="fa fa-tasks"></i> 
                    </a>
            </div>
            <br>
            
        </div>
        <div style="height: 60vh; overflow-y: auto; overflow-x: hidden">

            <?php $tasks = Task::where("user_id", "=", Auth::user()->id)->get(); ?>
            <?php $app_rs = Appointment_recipient::where("user_id", "=", Auth::user()->id)->get(); ?>


            <ul class="list list-unstyled    ">
                @foreach($tasks as $task)
                <li>
                    <a  id="" href="#"  class=" clearfix"  data-toggle="modal" data-target="#task_{{$task->id}}">
                        <p class="hidden list_id">{{$task->id}}</p>
                        <h4 class=" list_heading">{{$task->title}}</h4>
                        <p class=" pull-right list_date label label-success">Start: {{$task->date_start}}</p>
                        <p class="pull-right label label-warning">End: {{$task->date_end}}</p>
                    </a>
                </li>
                @include("gen.tasks.edit")
                @endforeach


                @foreach($app_rs as $ap)
                <?php $a = Appointment::find($ap->appointment_id); ?>
                <li>
                    <div class="row">
                    <div class="col-lg-10 col-lg-offset-1">
                    <a  id="" href="#"  class=" clearfix"  data-toggle="modal" data-target="#appointment_{{$a->id}}">
                        <p class="hidden list_id">{{$a->id}}</p>
                        <h5 class="list_heading">{{$a->title}}</h5>
                        <p class=" pull-right list_date label label-success">Start: {{$a->date_start}}</p>
                        <p class=" pull-right label label-danger">End: {{$a->date_end}}</p>
                    </a>
                    </div>
                    </div>
                </li>
                @include("gen.appointments.edit")
                @endforeach

            </ul>

        </div>
    </div>

<!--</div>-->




<script>
    var options = {
        valueNames: ['list_id', 'list_heading', 'list_date']
    };

    var userList = new List('list_plug', options);


</script>





<!--<div class="modal container fade " id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >-->
<div id="addTask" class="modal container fade" tabindex="-1" style="display: none;">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">Add Task</h4>
        </div>
        <form action="{{URL::to('tasks/store')}}" method="POST">
            <div class="modal-body">
                @include("gen.tasks.create")
            </div>
            <div class="modal-footer">
                <span class="btn-group btn-group-sm">
                    <button type="" class="btn btn-primary">Save changes</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

                </span>
            </div>
        </form>
    </div>
</div>







<!--<div class="modal container fade " id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >-->
<div id="addAppointment" class="modal container fade" tabindex="-1" style="display: none;">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">Add Appointment</h4>
        </div>
        <!--<form action="{{URL::to('agent/validate')}}" method="POST">-->
        <form action="{{URL::to('appointments/store')}}" method="POST">
            <div class="modal-body" style="">
                @include("gen.appointments.create")
            </div>
            <div class="modal-footer">
                <span class="btn-group btn-group-sm">
                    <button type="" class="btn btn-primary">Save changes</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </span>
            </div>
        </form>
    </div>
</div>




<script>
//    $(".table").dataTable({
//    "aoColumns": [
//        null,
//        { "bSortable": false }, // <-- disable sorting for column 3
//     ]
//});

</script>
