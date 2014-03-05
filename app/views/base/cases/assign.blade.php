@extends("layouts.main")

@section("main")
<?php
$aCom = [];
?>

<div class="col-md-4">
        @include("sidebar.sub.cases.assign")
</div>
<div class="col-md-8">

    <div class="row">
        <div class="col-md-12">
            @if($case == null )
            <div id="content">
                
            </div>
            @else
            @include("sidebar.sub.cases.agents")
            @endif
            
           
        </div>
       
    </div>
</div>





@stop