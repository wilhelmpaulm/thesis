@extends("layouts.agent")

@section("main")


<div class="col-md-3">
        @include("sidebar.sub.cases.pending")
</div>
<div class="col-md-9">
    <div class="row">
        <div class="col-md-12">
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li><a href="#">Library</a></li>
                <li class="active">Data</li>
            </ol>
        </div>


    </div>
    <div class="row">
        <div class="col-md-12">
            <div id="content">
            </div>
        </div>


    </div>
</div>


@if($num != null)
<script>

    $.get("{{URL::to('/content').'/'.$num}}", function(data) {
        $("#content").replaceWith(data);
    });

//            window.history.pushState("#", "Title", window.location+"dashboard/1");

    return false;

</script>
@endif


@stop