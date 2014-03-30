

<div id="appointment_{{$a->id}}" class="modal container fade" tabindex="-1" style="display: none;">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">View Appointment</h4>
        </div>
        <form action="{{URL::to('appointments/update/'.$a->id)}}" method="POST">
            <div class="modal-body">
                <div class="row">
                    <div class="form-group col-md-3">
                        <label for="title">Date Start</label>
                        <div class='input-group date' >
                            @if(Auth::user()->id != $a->user_id)
                            <input disabled="" class='datetimepicker8 form-control' type='datetime'  name="date_start" data-format="YYYY-MM-DD h:mm:ss" value="{{$a->date_start}}"/>
                            @else
                            <input class='datetimepicker8 form-control' type='datetime'  name="date_start" data-format="YYYY-MM-DD h:mm:ss" value="{{$a->date_start}}"/>
                            @endif
                            
                            <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>
                        <label for="title">Date End</label>
                        <div class='input-group date' >
                             @if(Auth::user()->id != $a->user_id)
                             <input disabled="" class='datetimepicker9 form-control' type='datetime' class="form-control" name="date_end" data-format="YYYY-MM-DD hh:mm:ss" value="{{$a->date_end}}"/>
                             @else
                            <input class='datetimepicker9 form-control' type='datetime' class="form-control" name="date_end" data-format="YYYY-MM-DD hh:mm:ss" value="{{$a->date_end}}"/>
                             @endif
                            <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="title">Title</label>
                        @if(Auth::user()->id != $a->user_id)
                        <input disabled="" type="text" class="form-control" id="title" placeholder="Title here!" name="title" value="{{$a->title}}">
                        @else
                        <input type="text" class="form-control" id="title" placeholder="Title here!" name="title" value="{{$a->title}}">
                        @endif
                        
                        
                        <label for="body">Body</label>
                        @if(Auth::user()->id != $a->user_id)
                        <textarea disabled="" class="form-control" name="body" rows="4" cols="20" placeholder="This appointment is for. . .">{{$a->body}}</textarea>
                        @else
                        <textarea class="form-control" name="body" rows="4" cols="20" placeholder="This appointment is for. . .">{{$a->body}}</textarea>
                        @endif
                    </div>

                    <div class="form-group col-md-6">
                        <?php $str = "selected"; ?>
                        <?php $agents = User::all(); ?>
                        <?php $rec = Appointment_recipient::where("appointment_id", "=", $a->id)->get(); ?>
                        <label for="title">Send To</label>
                        
                        @if(Auth::user()->id != $a->user_id)
                        <select disabled="" name="recipient_id[]" class="selectpicker form-control " multiple data-live-search="true" multiple data-selected-text-format="count">
                            @foreach($agents as $ag)
                            <?php $str = ""?>
                            @foreach($rec as $r)
                                @if($r->user_id == $ag->id)
                                    <?php $str = "selected=''"?>
                                @endif
                            @endforeach
                            @if($ag->id != Auth::user()->id)
                            <option value="{{$ag->id}}" {{$str}}><span class="pull-left">{{$ag->id." ".$a->last_name.", ".$ag->first_name}}</span><span class="hidden"> {{"(".$ag->division.": ".$ag->job_title.")"}}</span></option>
                            @endif
                        @endforeach
                        </select>
                        @else
                        <select name="recipient_id[]" class="selectpicker form-control " multiple data-live-search="true" multiple data-selected-text-format="count">
                            @foreach($agents as $ag)
                            <?php $str = ""?>
                            @foreach($rec as $r)
                                @if($r->user_id == $ag->id)
                                    <?php $str = "selected=''"?>
                                @endif
                            @endforeach
                            @if($ag->id != Auth::user()->id)
                            <option value="{{$ag->id}}" {{$str}}><span class="pull-left">{{$ag->id." ".$a->last_name.", ".$ag->first_name}}</span><span class="hidden"> {{"(".$ag->division.": ".$ag->job_title.")"}}</span></option>
                            @endif
                        @endforeach
                        </select>
                        @endif
                        


                    </div>



                </div>
            </div>
            <div class="modal-footer">
                <span class="btn-group btn-group-sm">
                     @if(Auth::user()->id == $a->user_id)
                        <a  id="appointment_destroy_{{$a->id}}" class="btn btn-danger" >Delete</a>
                        <button type="" class="btn btn-primary">Save changes</button>
                     @else
                        <a  id="appointment_reject_{{$a->id}}" class="btn btn-warning" >Reject</a>
                     @endif
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </span>
            </div>
        </form>
    </div>
</div>

<script>
    $("#appointment_destroy_{{$a->id}}").on("click", function() {
        $.post("{{URL::to('appointments/destroy/'.$a->id)}}", function(data) {
            location.reload();
        });

    });
    $("#appointment_reject_{{$a->id}}").on("click", function() {
        $.post("{{URL::to('appointments/reject/'.$a->id)}}", function(data) {
            location.reload();
        });

    });

 $(function() {
        $('.datetimepicker10').datetimepicker();
        $('.datetimepicker11').datetimepicker();
        $(".datetimepicker10").on("change.dp", function(e) {
            $('#datetimepicker11').data("DateTimePicker").setStartDate(e.date);
        });
        $(".datetimepicker11").on("change.dp", function(e) {
            $('#datetimepicker10').data("DateTimePicker").setEndDate(e.date);
        });
    });

</script>