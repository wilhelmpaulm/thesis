<div >

    <div class="row">
        
        <div class="form-group col-md-6">
            <label for="subject">Subject</label>
            <input type="text" class="form-control" id="subject" placeholder="Subject here" name="subject">
            <label for="body">Body</label>
            <textarea class="form-control" name="body" rows="4" cols="20" placeholder="This is my message. . ."></textarea>
        </div>
        <div class="form-group col-md-6">
            <?php $agents = User::all(); ?>
            <label for="title">Send To</label>
            <select name="recipient_id[]" class="selectpicker form-control " multiple data-live-search="true" multiple data-selected-text-format="count">
                @foreach($agents as $a)
                @if($a->id != Auth::user()->id)
                <option value="{{$a->id}}" ><span class="pull-left">{{$a->id." ".$a->last_name.", ".$a->first_name}}</span><span class="hidden"> {{"(".$a->division.": ".$a->job_title.")"}}</span></option>
                @endif
                @endforeach
            </select>


        </div>



    </div>

</div>




<!--<script type="text/javascript">
    $(document).ready(function() {
        $('#reservationtime').daterangepicker({timePicker: true, timePickerIncrement: 1, format: 'YYYY-MM-DD h:mm:s'});
    });
</script>-->

<script type="text/javascript">
    $(function() {
        $('#datetimepicker10').datetimepicker();
        $('#datetimepicker11').datetimepicker();
        $("#datetimepicker10").on("change.dp", function(e) {
            $('#datetimepicker11').data("DateTimePicker").setStartDate(e.date);
        });
        $("#datetimepicker11").on("change.dp", function(e) {
            $('#datetimepicker10').data("DateTimePicker").setEndDate(e.date);
        });
    });

    $("#add_recipient_btn").on("click", function() {
        var body = $("#add_recipient_body").html();
//        console.log(body);

        $("#add_recipient_panel").append(body);
    });

    $("body").on("click", ".remove", function() {
        $(this).parent().parent().parent().remove();
    });


    $('.selectpicker').selectpicker();
</script>
