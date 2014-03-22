@extends("layouts.main")

@section("main")
<div class="col-md-3">
    <div id="content">
        @include("sidebar.sub.agents")
    </div>
</div>
@if($id != null)
<div class="col-md-9">
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