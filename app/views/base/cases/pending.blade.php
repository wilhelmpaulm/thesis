@extends("layouts.new")

@section("main")

<div id="sidebarsubhtml" class="hide">
        @include("sidebar.sub.cases.pending")
</div>


<script >
    $('a[href="#sub"]').tab('show');
    var sidebarsub = $("#sidebarsubhtml").html();
    $("#subheading").removeClass("hide");
    
    $("#sub").append(sidebarsub);
    $("#subheading").text("Pending Cases");

</script>

<div class="col-md-12 content">
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