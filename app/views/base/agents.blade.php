@extends("layouts.main")
@section("main")

<div class="row">
    <div class="col-md-12">
        @include("content.agents")

    </div>
</div>


<script>
    $("table").dataTable();

</script>

@stop