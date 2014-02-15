@extends("layouts.main")

@section("main")

<div class="col-md-12">
<!--    <div class="row">
        <div class="col-md-12">
            <ol class="breadcrumb">
                <li class="active">Dashboard</li>
            </ol>
        </div>


    </div>-->
    <div class="row">
        <div class="col-md-12">
            @include("content.dashboard")
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