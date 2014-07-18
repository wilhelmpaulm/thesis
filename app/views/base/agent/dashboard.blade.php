@extends("layouts.new")

@section("main")
<!--
<section class="content-header">
    <h1>
        Dashboard
        <small>monitor task and progress in cases</small>
    </h1>
    <ol class="breadcrumb">
        <li class="active"><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Blank page</li>
    </ol>
</section>-->

<!-- Main content -->
<section class="content">
    <!--<div class="row">-->
        @include("content.dashboard")
    <!--</div>-->

</section><!-- /.content -->


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