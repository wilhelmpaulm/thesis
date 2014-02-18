<div >
    <div id="user_calendar"></div>
</div>

<?php
$lol = new DateTime("2014-02-26 12:23:12");

//print_r($lol->format("YYYY"));
?>


<script>





</script>



<script>
    var tasks = [
<?php $tasks = Task::where("user_id", "=", Auth::user()->id)->get(); ?>
    @foreach($tasks as $task)
<?php
$date_start = new DateTime($task->date_start);
$date_end = new DateTime($task->date_end);
?>
    {
    title: "{{$task->title}}",
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
</script>