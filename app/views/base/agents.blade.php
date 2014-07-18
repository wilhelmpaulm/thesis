@extends("layouts.new")
@section("main")


    <div class="col-md-12">
        @include("content.agents")

    </div>



<script>
    $("table").dataTable();

</script>

@stop