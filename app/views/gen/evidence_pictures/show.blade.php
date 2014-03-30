<div class="panel panel-black">
    <div class="panel-heading clearfix">
        <p class="pull-left"><i class="fa fa-picture-o"></i> Pictures</p>
        <span class="btn-group btn-group-sm pull-right">
             @if($case->agent_id == Auth::user()->id && $case->status == "Ongoing")
            <button class="btn  btn-success pull-right" type="button" data-toggle="modal" data-target="#addEvidencePicture">
                <i class="fa fa-plus"></i> 
            </button>
             @endif
        </span>
    </div>
    <div class="panel-body">
        <table class="table  table-condensed table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Added by</th>
                    <th>Owner</th>
                    <th>Details</th>
                    <th>Date Taken</th>
                    <th>Date Received</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach($evidence_pictures as $ep)
                  <?php $au = User::find($ep->user_id);?>
                <tr  class="clickable" >
                    <td>{{$ep->id}}</td>
                <td>{{$au->last_name.", ".$au->first_name}}</td>
                    <td>{{$ep->owner}}</td>
                    <td>{{$ep->details}}</td>
                    <td>{{$ep->date_taken}}</td>
                    <td>{{$ep->date_received}}</td>
                    <td>
                        <div class="btn-group btn-group-sm pull-right pull-right">

                            <button class="btn btn-success"data-toggle="modal" data-target="#viewEvidencePictures_{{$ep->id}}"><i class="fa fa-eye"></i></button>
                             @if($case->agent_id == Auth::user()->id && $case->status == "Ongoing")
                            <a class="btn btn-success" target="_blank" href="{{URL::asset("nbi/evidences/pictures/".$ep->file_name)}}"><i class="fa fa-download"></i></a>
                            @if(Auth::user()->id == $ep->user_id)
                            <button class="btn btn-warning"data-toggle="modal" data-target="#editEvidencePictures_{{$ep->id}}"><i class="fa fa-wrench"></i></button>
                            @endif
                            <button class="btn btn-info"data-toggle="modal" data-target="#historyEvidencePictures_{{$ep->id}}"><i class="fa fa-list"></i></button>
                            <button class="btn btn-success"data-toggle="modal" data-target="#addEvidenceHistoryPicture_{{$ep->id}}"><i class="fa fa-plus"></i> <i class="fa fa-list"></i></button>
                            <button class="btn btn-default"data-toggle="modal" data-target="#crossEvidencePicture_{{$ep->id}}"><i class="fa fa-sitemap"></i></button>
                           <button  class="btn btn-default addCross"data-table="evidence_pictures" data-reference_id="{{$ep->id}}" data-toggle="modal"  data-target="#addCross"><i class="fa fa-plus"></i> <i class="fa fa-sitemap"></i></button>
                            @endif
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>





@foreach($evidence_pictures as $ed)
<?php $history = Evidence_history::where("evidence_id", "=", $ed->id)->where("type", "=", "Picture")->get(); ?>
<div id="historyEvidencePictures_{{$ed->id}}" class="modal container fade" tabindex="-1" style="display: none;">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">Evidence History</h4>
        </div>
        <div class="modal-body">
            <table class="table table-bordered table-hover ">
                <thead>
                    <tr>
                        <th>Holder</th>
                        <th>Locations</th>
                        <th>Details</th>
                        <th>Date Held</th>
                        <th>Date Released</th>
                        <th width=""></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($history as $h)
                    <tr class="clickable" >
                        <td>{{$h->holder}}</td>
                        <td>{{$h->location}}</td>
                        <td>{{$h->details}}</td>
                        <td>{{$h->date_held}}</td>
                        <td>{{$h->date_released}}</td>
                        <td>
                            <span class="btn-group btn-group-sm pull-right">
                                <button class="btn btn-warning"data-toggle="modal" data-target="#editEvidenceHistory_{{$h->id}}"><i class="fa fa-wrench"></i></button>
                            </span>
                        </td>
                    </tr>
                    @include("gen.evidence_histories.edit")
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="modal-footer">
            <span class="btn-group btn-group-sm">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </span>
        </div>
    </div>
</div>
@endforeach


@foreach($evidence_pictures as $ed)
@include("gen.evidence_histories.create_picture")
@endforeach




<!--PICTURE-->

@foreach($evidence_pictures as $ed)
<div id="viewEvidencePictures_{{$ed->id}}" class="modal container fade" tabindex="-1" style="display: none;">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">View</h4>
            </div>
            <div class="modal-body">
                <img src="{{URL::asset('nbi/evidences/pictures/'.$ed->file_name)}}" class="img-responsive center-block">
            </div>
            <div class="modal-footer">
                <span class="btn-group btn-group-sm">

                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </span>
            </div>
        </div>
</div>

@endforeach
<!--PICTURE-->

@foreach($evidence_pictures as $ed)
<div id="editEvidencePictures_{{$ed->id}}" class="modal container fade" tabindex="-1" style="display: none;">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Edit Evidence</h4>
            </div>
            <form  id="evidence_picture_update_{{$ed->id}}" action="{{URL::to('evidence_pictures/update/'.$ed->id)}}" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="case_id" value="{{$case->id}}">

                <div class="modal-body">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="title">Title</label>
                            <input id='title' type='text' class="form-control " name="title" value="{{$ed->title}}"/>
                            <label for="details">Details</label>
                            <textarea  id='details' class="form-control " name="details" rows="4" cols="20">{{$ed->details}}</textarea>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="owner">Owner</label>
                            <input type="text" class="form-control" id="width" placeholder="fraptiousday!" name="owner" value="{{$ed->owner}}">
                            <label for="date_taken">Date Taken</label>
                            <input type="date" class="form-control" id="date_taken" placeholder="fraptiousday!" name="date_taken" value="{{$ed->date_taken}}">
                            <label for="date_received">Date Received</label>
                            <input type="date" class="form-control" id="date_received" placeholder="fraptiousday!" name="date_received" value="{{$ed->date_received}}">
                            <label for="file_name">File Upload</label>
                            <input type="file" id="file_name" name="file_name">
                            <p class="help-block">Please attach a photo.</p>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <span class="btn-group btn-group-sm">

                        <a  id="evidence_picture_destroy_{{$ed->id}}" class="btn btn-danger" >Delete</a>
                        <button type="" class="btn btn-primary">Save changes</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </span>
                </div>
            </form>
        </div>
</div>

<script>
//    $("#evidence_picture_update_{{$ed->id}}").on("submit", function() {
//        $.post("{{URL::to('evidence_pictures/update/'.$ed->id)}}", function(data) {
////            return false;
//        });
//        $.get("{{URL::to('cases/show/'.$case->id)}}", function(data) {
////            alert("asdasd");
//            $("#content").replaceWith(data);
////            return false;
//        });
//        return false;
//    });
    $("#evidence_picture_destroy_{{$ed->id}}").on("click", function() {
        $.post("{{URL::to('evidence_pictures/destroy/'.$ed->id)}}", function(data) {
            location.reload();
        });
    });
</script>

@endforeach


<div id="addEvidencePicture" class="modal container fade" tabindex="-1" style="display: none;">
    
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Add Picture</h4>
            </div>
            <form action="{{URL::to('evidence_pictures/store')}}" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="case_id" value="{{$case->id}}">
                <div class="modal-body">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="title">Title</label>
                            <input id='title' type='text' class="form-control " name="title" value=""/>
                            <label for="details">Details</label>
                            <textarea  id='details' class="form-control " name="details" rows="4" cols="20"></textarea>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="owner">Owner</label>
                            <input type="text" class="form-control" id="width" placeholder="Owner" name="owner" value="">
                            <label for="date_taken">Date Taken</label>
                            <input type="date" class="form-control" id="date_taken" placeholder="fraptiousday!" name="date_taken" value="">
                            <label for="date_received">Date Received</label>
                            <input type="date" class="form-control" id="date_received" placeholder="fraptiousday!" name="date_received" value="">
                            <label for="file_name">File Upload</label>
                            <input type="file" id="file_name" name="file_name">
                            <p class="help-block">Please attach a photo.</p>
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

<!--PICTURE-->
<!--PICTURE-->
<!--PICTURE-->
<!--PICTURE-->
<!--PICTURE-->
<!--PICTURE-->


@foreach($evidence_pictures as $co)
<?php
$case_id = $case->id;
$table = "evidence_pictures";
$reference_id = $co->id;
?>


<div id="crossEvidencePicture_{{$co->id}}" class="modal fade container" tabindex="-1" style="display: none;">
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