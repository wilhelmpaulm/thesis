@extends("layouts.new")

@section("main")

<div class="col-md-12">

    <div class="row">
        <div class="col-md-6">
            @include("sidebar.sub.resources.current")
        </div>
        <div class="col-md-6">
            @include("sidebar.sub.resources.history")
        </div>


    </div>
</div>





@stop