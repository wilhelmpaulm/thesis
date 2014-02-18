<div class="list-group" >
    <div class="list-group-item clearfix">
        <button class="btn btn-success pull-left" type="button" data-toggle="modal" data-target="#addAppointment">
            <i class="fa fa-group"></i> 
        </button>
        <button class="btn  btn-success pull-right" type="button" data-toggle="modal" data-target="#myModal">
            <i class="fa fa-tasks"></i> 
        </button>

    </div>
    <div style="height: 450px; overflow-y: auto">

        <?php $tasks = Task::where("user_id", "=", Auth::user()->id)->get(); ?>
        @foreach($tasks as $task)
        <a  id="" href="#"  class="list-group-item clearfix"  data-toggle="modal" data-target="#task_{{$task->id}}">
            <h4 class="list-group-item-heading ">{{$task->title}}</h4>
            <p class="list-group-item-text pull-left text-info ">Start: {{$task->date_start}}</p>
            <p class="list-group-item-text pull-right text-info">End: {{$task->date_end}}</p>
        </a>

        <!--START OF MODAL-->






        <!--END OF MODAL-->
        @endforeach



    </div>
</div>



<?php $tasks = Task::where("user_id", "=", Auth::user()->id)->get(); ?>
@foreach($tasks as $task)
<div id="task_{{$task->id}}" class="modal container fade" tabindex="-1" style="display: none;">
    <div class="modal-dialog " style="width: 100%">
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
                    <a  id="task_destroy_{{$task->id}}" class="btn btn-danger" >Delete</a>
                    <button type="" class="btn btn-primary">Save changes</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
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
<div id="myModal" class="modal container fade" tabindex="-1" style="display: none;">
    <div class="modal-dialog " style="width: 100%">
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
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

                    <button type="" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>







<!--<div class="modal container fade " id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >-->
<div id="addAppointment" class="modal container fade" tabindex="-1" style="display: none;">
    <div class="modal-dialog " style="width: 100%">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Modal title</h4>
            </div>
            <form action="{{URL::to('appointments/store')}}" method="POST">
                <div class="modal-body" style="">
                    @include("gen.appointments.create")
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>



