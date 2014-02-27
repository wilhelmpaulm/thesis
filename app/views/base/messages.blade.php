@extends("layouts.main")

@section("main")
<div class="col-md-4">
    @include("sidebar.sub.messages")
</div>
<div class="col-md-8">
    <div id="content">
        @if($message != null)
        @include("gen.messages.show")
        @endif
    </div>
</div>





@stop