<div  id="list_plug" class="list-group" >
    <div class="list-group-item">
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
                <button class="btn btn-success" type="button" data-toggle="modal" data-target="#addAppointment">
                    <i class="fa fa-plus"></i> <i class="fa fa-group"></i> 
                </button>
                <button class="btn  btn-success" type="button" data-toggle="modal" data-target="#addTask">
                    <i class="fa fa-plus"></i> <i class="fa fa-tasks"></i> 
                </button>
            </span>

        </div>


    </div>
    <div style="height: 450px; overflow-y: auto">

        <?php $tasks = Task::where("user_id", "=", Auth::user()->id)->get(); ?>
        <ul class="list list-unstyled    ">
            @foreach($tasks as $task)
            <li>
                <a  id="" href="#"  class="list-group-item clearfix"  data-toggle="modal" data-target="#task_{{$task->id}}">
                    <p class="hidden list_id">{{$task->id}}</p>
                    <h4 class="list-group-item-heading list_heading">{{$task->title}}</h4>
                    <p class="list-group-item-text pull-left text-info list_date">Start: {{$task->date_start}}</p>
                    <p class="list-group-item-text pull-right text-info">End: {{$task->date_end}}</p>
                </a>
            </li>

            @endforeach

        </ul>

    </div>
</div>


<script>
    var options = {
        valueNames: ['list_id', 'list_heading', 'list_date']
    };

    var userList = new List('list_plug', options);


</script>



<?php $tasks = Task::where("user_id", "=", Auth::user()->id)->get(); ?>
@foreach($tasks as $task)
<div id="task_{{$task->id}}" class="modal container fade" tabindex="-1" style="display: none;">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">Modal title</h4>
        </div>
        <form action="{{URL::to('tasks/update/'.$task->id)}}" method="POST">
            <div class="modal-body">
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="title">Date Start</label>
                        <div class='input-group date' >
                            <input id='datetimepicker8' type='datetime' class="form-control" name="date_start" data-format="YYYY-MM-DD h:mm:ss" value="{{$task->date_start}}"/>
                            <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>
                        <label for="title">Date End</label>
                        <div class='input-group date' >
                            <input id='datetimepicker9' type='datetime' class="form-control" name="date_end" data-format="YYYY-MM-DD hh:mm:ss" value="{{$task->date_end}}"/>
                            <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="title">title</label>
                        <input type="text" class="form-control" id="title" placeholder="fraptiousday!" name="title" value="{{$task->title}}">
                        <label for="body">Body</label>
                        <textarea class="form-control" name="body" rows="4" cols="20" placeholder="this event is for . . .">{{$task->body}}</textarea>
                    </div>



                </div>
            </div>
            <div class="modal-footer">
                <span class="btn-group btn-group-sm">
                    <a  id="task_destroy_{{$task->id}}" class="btn btn-danger" >Delete</a>
                    <button type="" class="btn btn-primary">Save changes</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </span>
            </div>
        </form>
    </div>
</div>

<script>
    $("#task_destroy_{{$task->id}}").on("click", function() {
        $.post("{{URL::to('tasks/destroy/'.$task->id)}}", function(data) {
            location.reload();
        });

    });


</script>

@endforeach



<!--<div class="modal container fade " id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >-->
<div id="addTask" class="modal container fade" tabindex="-1" style="display: none;">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">Modal title</h4>
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
            <h4 class="modal-title" id="myModalLabel">Modal title</h4>
        </div>
        <form action="{{URL::to('agent/validate')}}" method="POST">
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
