@extends("layouts.new")

@section("main")
<!--<div class="col-md-3">
   
</div>-->

@if(Auth::user()->job_title != "Chief" )
<div class="col-md-12">
    @include("gen.complaints.create")
</div>
@else

<div id="sidebarsubhtml" class="hide">
    @include("sidebar.sub.cases.complaint")
</div>


<script >
    $('a[href="#sub"]').tab('show');
    var sidebarsub = $("#sidebarsubhtml").html();
    $("#subheading").removeClass("hide");
    
    $("#sub").append(sidebarsub);
    $("#subheading").text("Continue Complaint");

</script>


<div class="col-md-12">
    @if($complaint != null)
    @include("gen.complaints.create_chief")
    @endif

</div>
@endif






@stop