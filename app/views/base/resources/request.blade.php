@extends("layouts.new")

@section("main")

<div class="col-md-12">

    <div class="row">
        <div class="col-md-6">
            @include("sidebar.sub.resources.request")
        </div>
        <div class="col-md-6">
            @include("sidebar.sub.resources.cart")
        </div>


    </div>
</div>





@stop