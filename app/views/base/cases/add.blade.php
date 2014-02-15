@extends("layouts.main")

@section("main")
<!--<div class="col-md-3">
   
</div>-->
<div class="col-md-12">
<!--    <div class="row">
        <div class="col-md-12">
            <ol class="breadcrumb">
                <li class="">Cases</li>
                <li class="active">Add Complaint</li>
            </ol>
        </div>
    </div>-->
    <div class="row">
        <div class="col-md-12">
            @include("gen.complaints.create")
        </div>


    </div>
</div>





@stop