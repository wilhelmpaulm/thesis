@extends("layouts.main")
@section("main")


    <div class="col-md-12">
        @include("content.clients")

    </div>


<script>
    $("table").dataTable();

</script>

@stop