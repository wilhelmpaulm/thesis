@extends("layouts.main")

@section("main")


<div class="col-md-3">
        @include("sidebar.sub.cases.closed")
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
            <div id="content">
            </div>
        </div>


    </div>
</div>

{{$num = 5}}
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