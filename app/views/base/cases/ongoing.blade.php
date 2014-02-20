@extends("layouts.main")

@section("main")


<div class="col-md-3">
    @include("sidebar.sub.cases.ongoing")
</div>
<div class="col-md-9">
    <!--    <div class="row">
            <div class="col-md-12">
                <ol class="breadcrumb">
                    <li><a href="#">Cases</a></li>
                    <li class="active">Ongoing</li>
                </ol>
            </div>
    
    
        </div>-->
    <div class="row">
        <div class="col-md-12">
            @if($case == null )
            <div id="content">

            </div>
            @else
            @include("gen.kases.show")
            @endif
        </div>


    </div>
</div>




@stop