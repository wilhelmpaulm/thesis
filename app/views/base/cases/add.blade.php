@extends("layouts.main")

@section("main")
<!--<div class="col-md-3">
   
</div>-->

@if(Auth::user()->job_title != "Chief")
<div class="col-md-12">
    @include("gen.complaints.create")
</div>
@else
<div class="col-md-3">
    @include("sidebar.sub.cases.complaint")

</div>
<div class="col-md-9">
    @if($complaint != null)
    @include("gen.complaints.create_chief")
    @endif

</div>
@endif






@stop