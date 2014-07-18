@extends("layouts.new")
@section("main")

<div class="row ">
    <div class="col-md-12 ">
        @include("content.resources")

    </div>
</div>


<script>
    $("table").dataTable();

</script>

@stop