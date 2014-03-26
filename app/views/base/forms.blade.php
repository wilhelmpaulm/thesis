@extends("layouts.main")
@section("main")

<div class="row">
    <div class="col-md-12">
        @include("content.forms")

    </div>
</div>


<script>
    $("table").dataTable();

</script>

@stop