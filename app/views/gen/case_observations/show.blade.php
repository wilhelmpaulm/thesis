<?php // $case_observations = Case_observation::where("user_id", "=", $case->agent_id)->where("case_id", "=", $case->id)->get(); ?>

<div class="panel panel-black">
    <div class="panel-heading clearfix">
        <p class="pull-left"><i class="fa fa-search"></i> Case Observations</p>
        <span class="btn-group btn-group-sm pull-right">
@if($case->agent_id == Auth::user()->id && $case->status == "Ongoing")
            <button class="btn  btn-success  pull-right" type="button" data-toggle="modal" data-target="#addCaseObservation">
                <i class="fa fa-plus"></i> 
            </button>
@endif
        </span>
    </div>
    <div class="panel-body">
        <table class="table table-bordered table-hover ">
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Added by</th>
                    <th>Observation</th>
                    <th>Tags</th>
                    <th width=""></th>
                </tr>
            </thead>
            <tbody>
                @foreach($case_observations  as $ed)
                  <?php $au = User::find($ed->user_id);?>
                <?php
                $tags = TagsController::getTags($ed->id, "case_observations");
                ?>
                <tr class="clickable" >
                    <td>{{$ed->created_at}}</td>
                    <td>{{$au->last_name.", ".$au->first_name}}</td>
                    <td>{{$ed->observation}}</td>
                    <td>
                        <?php 
                            $ar = explode(",", $tags->tags);
                        ?>
                        @foreach($ar as $a)
                        <p class="label label-info">{{$a}}</p>
                        @endforeach
                    </td>
                    <td width="15%">
                        <div class="btn-group btn-group-sm pull-right">
                            @if($case->agent_id == Auth::user()->id && $case->status == "Ongoing")
                            @if(Auth::user()->id == $ed->user_id)
                            <button class="btn btn-warning"data-toggle="modal" data-target="#editCaseObservation_{{$ed->id}}"><i class="fa fa-wrench"></i></button>
                            @endif
                            <button class="btn btn-default"data-toggle="modal" data-target="#crossCaseObservation_{{$ed->id}}"><i class="fa fa-sitemap"></i></button>
                            <button class="btn btn-default addCross"data-table="case_observations" data-reference_id="{{$ed->id}}" data-toggle="modal"  data-target="#addCross"><i class="fa fa-plus"></i> <i class="fa fa-sitemap"></i></button>
                            @endif
                        </div>
                    </td>

                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>




@foreach($case_observations as $ed)
<?php
$tags = TagsController::getTags($ed->id, "case_observations");
?>

<div id="editCaseObservation_{{$ed->id}}" class="modal fade" tabindex="-1" style="display: none;">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">Edit Case Observation</h4>
        </div>

        <form action="{{URL::to('case_observations/store')}}" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="case_id" value="{{$case->id}}">

            <div class="modal-body">
                <div class="form-group ">
                    <label for="details">Observation</label>
                    <textarea  id='details' class="form-control " name="observation" rows="4" cols="20">{{$ed->observation}}</textarea>

                    <label for="observation_tags">Tags</label><br>
                    <input class="form-control"  data-role="tagsinput"  autocomplete="off"  class="observation_tags" type="text" value="{{$tags->tags}}" name="tags" />

                </div>
            </div>
            <div class="modal-footer">
                <span class="btn-group btn-group-sm">

                    <a  id="case_observation_destroy_{{$ed->id}}" class="btn btn-danger" >Delete</a>
                    <button type="" class="btn btn-primary">Save changes</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </span>
            </div>
        </form>
    </div>
</div>

<script>
    $("#case_observation_destroy_{{$ed->id}}").on("click", function() {
        $.post("{{URL::to('case_observations/destroy/'.$ed->id)}}", function(data) {
            location.reload();
        });
    });
</script>



@endforeach


@foreach($case_observations as $co)
<?php
$case_id = $case->id;
$table = "case_observations";
$reference_id = $co->id;
?>

<div id="crossCaseObservation_{{$co->id}}" class="modal fade container" tabindex="-1" style="display: none;">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">Cross References</h4>
        </div>

        <div class="modal-body">
            @include("gen.cross_references.show")
        </div>
        <div class="modal-footer">
            <span class="btn-group btn-group-sm">
                
                <!--<button type="" class="btn btn-primary">Save changes</button>-->
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </span>
        </div>
    </div>
</div>

@endforeach




<div id="addCaseObservation" class="modal fade" tabindex="-1" style="display: none;">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">Add Case Observation</h4>
        </div>
        <form action="{{URL::to('case_observations/store')}}" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="case_id" value="{{$case->id}}">

            <div class="modal-body">
                <div class="row">
                    <div class="form-group col-md-12">
                        <input type="hidden" value="{{$case->id}}" name="case_id">
                        <label for="details">Observation</label>
                        <textarea  id='details' class="form-control " name="observation" rows="4" cols="20"></textarea>
                        <label for="observation_tags">Tags</label><br>
                        <input class="form-control"   autocomplete="off" id="observation_tags" class="observation_tags" type="text" value=""  name="tags" >

                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <span class="btn-group btn-group-sm">

                    <button type="" class="btn btn-primary">Save changes</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </span>
            </div>
        </form>
    </div>
</div>

<script>
//$("#observation_tags").typeahead({ source:["lol", "mama"] });
//$.get('example_collection.json', function(data){
//    $("#name").typeahead({ source:data });
//},'json');
//example_collection.json
// ["item1","item2","item3]

    $('#observation_tags').tagsinput({
        typeahead: {
            source: ['Amsterdam', 'Washington', 'Sydney', 'Beijing', 'Cairo'],
            freeInput: true
        }
    });
</script>