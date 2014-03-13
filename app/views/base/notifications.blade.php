@extends("layouts.main")
@section("main")

<div class="row">
    <div class="col-md-12">
        @include("content.notifications")

    </div>
</div>


<script>
    $("table").dataTable();

</script>

@stop