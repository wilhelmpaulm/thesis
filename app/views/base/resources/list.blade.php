@extends("layouts.new")

@section("main")
<?php
$aCom = [];
?>


<div class="col-md-12">

    <div class="row">
        <div class="col-md-12">
            <div id="content">
                @include("content.reports.resource_list")
            </div>
        </div>
       
    </div>
</div>





@stop