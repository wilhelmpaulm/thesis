@extends("layouts.main")

@section("main")

<div id="sidebarsubhtml" class="hide">
   @include("sidebar.sub.calendar")
</div>


<script >
    $('a[href="#sub"]').tab('show');
    var sidebarsub = $("#sidebarsubhtml").html();
    $("#subheading").parent().removeClass("hide");
    
    $("#sub").append(sidebarsub);
    $("#subheading").text("Calendar Schedules");

</script>


<div class="col-md-12">
    <div class="row">
        <div class="col-md-12 ">
            @include("gen.user_calendars.create")
        </div>
    </div>
</div>






@stop