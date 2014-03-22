<div class="panel panel-black">
    <div class="panel-heading">
        <h3 class="panel-title"><i class="fa fa-calendar"></i> Calendar</h3>
    </div>

    <div class="pad15">
        <div id="user_calendar"></div>
    </div>
</div>

<?php
$lol = new DateTime("2014-02-26 12:23:12");

//print_r($lol->format("YYYY"));
?>


<script>





</script>



<script>
    var tasks = [
<?php $tasks = Task::where("user_id", "=", $id)->get(); ?>
    @foreach($tasks as $task)
<?php
$date_start = new DateTime($task->date_start);
$date_end = new DateTime($task->date_end);
?>
    {
    title: " - {{$task->title}}",
            start: new Date(<?= $date_start->format('Y') . ", " . (intval($date_start->format('m')) - 1) . "," . $date_start->format('d') . ", " . $date_start->format('H') . "," . $date_start->format('i') ?>),
            end: new Date(<?= $date_end->format('Y') . ", " . (intval($date_end->format('m')) - 1) . "," . $date_end->format('d') . ", " . $date_end->format('H') . "," . $date_end->format('i') ?>),
            allDay:false
    },
            @endforeach


<?php $aprs = Appointment_recipient::where("user_id", "=", $id)->get(); ?>
    @foreach($aprs as $apr)
<?php $app = Appointment::find($apr->appointment_id); ?>

<?php
$date_start = new DateTime($app->date_start);
$date_end = new DateTime($app->date_end);
?>
    {
    title: " - {{$app->title}}",
            start: new Date(<?= $date_start->format('Y') . ", " . (intval($date_start->format('m')) - 1) . "," . $date_start->format('d') . ", " . $date_start->format('H') . "," . $date_start->format('i') ?>),
            end: new Date(<?= $date_end->format('Y') . ", " . (intval($date_end->format('m')) - 1) . "," . $date_end->format('d') . ", " . $date_end->format('H') . "," . $date_end->format('i') ?>),
            allDay:false
    },
            @endforeach

    ];
            var date = new Date();
            var d = date.getDate();
            var m = date.getMonth();
            var y = date.getFullYear();
            $("#user_calendar").fullCalendar({
    header: {
    left: 'prev,next today',
            center: 'title',
            right: 'month,agendaWeek,agendaDay'
    },
            editable: false,
            events: tasks
    });
//    
//     var $fcButtons = $('[class*="fc-button"]').addClass('btn btn-default')
//                , $oldTable = $('.fc-header-right > table');
//
//        $('.user_calendar')
//                .addClass('btn-group ')
//                .appendTo('.fc-header-right')
//                .append($fcButtons);
//
//        $oldTable.remove();
</script>