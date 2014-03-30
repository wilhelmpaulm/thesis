<?php
$user = Auth::user();
$cases = Kase::orderBy("date_reported", "desc")->get();
$case1_id = null;
$case2_id = null;

if (Input::get("case1") != null && Input::get("case2") != null) {
    $case1_id = Input::get("case1");
    $case2_id = Input::get("case2");
}
?>

<div class="row ">
    <div class="col-md-12">
        <div class="panel panel-black">
            <div class="panel-heading">
                <h3 class="panel-title">Case Timeline Comparison</h3>
            </div>
            <form >
                <div class="panel-body ">
                    <div class="row">

                        <div class="col-lg-6">
                            <select name="case1" class="form-control">
                                @foreach($cases as $c)
                                @if($case1_id == $c->id)
                                <option selected="" value="{{$c->id}}">{{$c->date_reported}} / {{$c->division}} - {{$c->name}} </option>
                                @else
                                <option value="{{$c->id}}">{{$c->date_reported}} / {{$c->division}}  - {{$c->name}}</option>
                                @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="col-lg-6">
                            <select name="case2" class="form-control">
                                @foreach($cases as $c)
                                @if($case2_id == $c->id)
                                <option selected="" value="{{$c->id}}">{{$c->date_reported}} / {{$c->division}} - {{$c->name}} </option>
                                @else
                                <option value="{{$c->id}}">{{$c->date_reported}} / {{$c->division}} - {{$c->name}} </option>
                                @endif
                                @endforeach
                            </select>
                        </div>
                    </div>

                </div>
                <div class="panel-footer clearfix hidden-print">
                    <div class="btn-group btn-group-sm pull-right">
                        <button class="btn btn-success">Send</button>
                    </div>
                </div>
            </form>
        </div>
    </div> 
</div> 

@if(Input::get("case1") != null && Input::get("case2") != null)
<div class="row ">
    <div class="col-md-6">

        <?php $case_id = $case1_id ?>
        @include("content.reports.case_timeline_blank")

    </div>
    <div class="col-md-6">

        <?php $case_id = $case2_id ?>
        @include("content.reports.case_timeline_blank")

    </div> 
</div>
@endif