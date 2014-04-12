@extends("layouts.main")

@section("main")
<?php
$aCom = [];
?>
<div id="sidebarsubhtml" class="hide">
        @include("sidebar.sub.cases.assign")
</div>


<script >
    $('a[href="#sub"]').tab('show');
    var sidebarsub = $("#sidebarsubhtml").html();
    $("#subheading").parent().removeClass("hide");
    
    $("#sub").append(sidebarsub);
    $("#subheading").text("Assign Case");

</script>
<div class="col-md-12">

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