@extends("layouts.new")

@section("main")

<div id="sidebarsubhtml" class="hide">
        @include("sidebar.sub.agents")
</div>


<script >
    $('a[href="#sub"]').tab('show');
    var sidebarsub = $("#sidebarsubhtml").html();
    $("#subheading").removeClass("hide");
    
    $("#sub").append(sidebarsub);
    $("#subheading").text("Agent Calendar");

</script>

@if($id != null)
<div class="col-md-12">
    <div class="row">
        <div class="col-md-8">
            @include("gen.user_calendars.create_secretary")
        </div>
       
        <div class="col-md-4">
            @include("sidebar.sub.calendar_secretary")
        </div>
    </div>
</div>
@endif





@stop