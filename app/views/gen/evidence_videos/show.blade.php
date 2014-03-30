<div class="panel panel-black">
    <div class="panel-heading clearfix">
        <p class="panel-title pull-left"><i class="fa fa-video-camera"></i> Videos</p>
        <span class="btn-group btn-group-sm pull-right">
             @if($case->agent_id == Auth::user()->id && $case->status == "Ongoing")
            <button class="btn  btn-success pull-right" type="button" data-toggle="modal" data-target="#addEvidenceVideo">
                <i class="fa fa-plus"></i> 
            </button>
             @endif
        </span>
    </div>
    <div class="panel-body">
        <table class="table table-responsive table-condensed table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Added by</th>
                    <th>Owner</th>
                    <th>Title</th>
                    <th>Date Recorded</th>
                    <th>Date Received</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach($evidence_videos as $ed)
                  <?php $au = User::find($ed->user_id);?>
                <tr>
                    <td>{{$ed->id}}</td>
                <td>{{$au->last_name.", ".$au->first_name}}</td>
                    <td>{{$ed->owner}}</td>
                    <td>{{$ed->title}}</td>
                    <td>{{$ed->date_recorded}}</td>
                    <td>{{$ed->date_received}}</td>
                    <td>
                        <div class="btn-group btn-group-sm pull-right">
                            <button class="btn btn-success"data-toggle="modal" data-target="#viewEvidenceVideo_{{$ed->id}}"><i class="fa fa-eye"></i></button>
                             @if($case->agent_id == Auth::user()->id && $case->status == "Ongoing")
                            <a class="btn btn-success"  href="{{URL::asset("nbi/evidences/videos/".$ed->file_name)}}"><i class="fa fa-download"></i></a>
                            @if(Auth::user()->id == $ed->user_id)
                            <button class="btn btn-warning"data-toggle="modal" data-target="#editEvidenceVideo_{{$ed->id}}"><i class="fa fa-wrench"></i></button>
                            @endif
                            <button class="btn btn-info"data-toggle="modal" data-target="#historyEvidenceVideo_{{$ed->id}}"><i class="fa fa-list"></i></button>
                            <button class="btn btn-success"data-toggle="modal" data-target="#addEvidenceHistoryVideo_{{$ed->id}}"><i class="fa fa-plus"></i> <i class="fa fa-list"></i></button>
                            <button class="btn btn-default"data-toggle="modal" data-target="#crossEvidenceVideo_{{$ed->id}}"><i class="fa fa-sitemap"></i></button>
                            <button  class="btn btn-default addCross"data-table="evidence_videos" data-reference_id="{{$ed->id}}" data-toggle="modal"  data-target="#addCross"><i class="fa fa-plus"></i> <i class="fa fa-sitemap"></i></button>
                            @endif
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>



<!--VIDEO-->
<!--VIDEO-->
<!--VIDEO-->
<!--VIDEO-->
<!--VIDEO-->
<!--VIDEO-->
<!--VIDEO-->

@foreach($evidence_videos as $ed)
<?php $history = Evidence_history::where("evidence_id", "=", $ed->id)->where("type", "=", "Video")->get(); ?>
<div id="historyEvidenceVideo_{{$ed->id}}" class="modal container fade" tabindex="-1" style="display: none;">
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


@foreach($evidence_videos as $ed)
@include("gen.evidence_histories.create_video")
@endforeach

@foreach($evidence_videos as $ed)
<div id="editEvidenceVideo_{{$ed->id}}" class="modal container fade" tabindex="-1" style="display: none;">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Edit Video</h4>
            </div>
            <form class="update" action="{{URL::to('evidence_videos/update/'.$ed->id)}}" method="POST"  enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="title">Title</label>
                            <input id='title' type='text' class="form-control " name="title" value="{{$ed->title}}"/>
                            <label for="details">Details</label>
                            <input id='details' type='text' class="form-control " name="details" value="{{$ed->details}}"/>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="owner">Owner</label>
                            <input type="text" class="form-control" id="title" placeholder="fraptiousday!" name="owner" value="{{$ed->owner}}">
                            <label for="date_recorded">Date Recorded</label>
                            <input type="date" class="form-control" id="date_recorded" placeholder="fraptiousday!" name="date_recorded" value="{{$ed->date_recorded}}">
                            <label for="date_received">Date Received</label>
                            <input type="date" class="form-control" id="date_received" placeholder="fraptiousday!" name="date_received" value="{{$ed->date_received}}">
                            <label for="file_name">File Upload</label>
                            <input type="file" id="file_name" name="file_name" value="{{$ed->file_name}}">
                            <p class="help-block">Please attach video.</p>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <span class="btn-group btn-group-sm">

                        <a  id="evidence_video_destroy_{{$ed->id}}" class="btn btn-danger" >Delete</a>
                        <button type="" class="btn btn-primary">Save changes</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </span>
                </div>
            </form>
        </div>
</div>

<script>


    $("#evidence_video_destroy_{{$ed->id}}").on("click", function() {
        $.post("{{URL::to('evidence_videos/destroy/'.$ed->id)}}", function(data) {
            location.reload();
        });
    });
</script>

@endforeach

@foreach($evidence_videos as $ed)
<div id="viewEvidenceVideo_{{$ed->id}}" class="modal container fade" tabindex="-1" style="display: none;">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">View {{$ed->title}}</h4>
            </div>
            <div class="modal-body" >

                <video width="320" height="240" controls class="center-block">
                    <source src="{{URL::to('nbi/evidences/videos/'.$ed->file_name)}}" type='video/mp4;codecs="avc1.42E01E, mp4a.40.2"'>
                    <!--<source src="movie.ogg" type="video/ogg">-->
                    Your browser does not support the video tag.
                </video>


            </div>
            <div class="modal-footer">
                <span class="btn-group btn-group-sm">

                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </span>
            </div>
        </div>
</div>


@endforeach


<div id="addEvidenceVideo" class="modal container fade" tabindex="-1" style="display: none;">
    
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Add Video</h4>
            </div>
            <form action="{{URL::to('evidence_videos/store')}}" method="POST"  enctype="multipart/form-data">
                <input type="hidden" value="{{$case->id}}" name="case_id">
                <div class="modal-body">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="title">Title</label>
                            <input id='title' type='text' class="form-control " name="title" value=""/>
                            <label for="details">Details</label>
                            <input id='details' type='text' class="form-control " name="details" value=""/>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="owner">Owner</label>
                            <input type="text" class="form-control" id="title" placeholder="Owner" name="owner" value="">
                            <label for="date_recorded">Date Recorded</label>
                            <input type="date" class="form-control" id="date_recorded" placeholder="fraptiousday!" name="date_recorded" value="">
                            <label for="date_received">Date Received</label>
                            <input type="date" class="form-control" id="date_received" placeholder="fraptiousday!" name="date_received" value="">
                            <label for="file_name">File Upload</label>
                            <input type="file" id="file_name" name="file_name" value="">
                            <p class="help-block">Please attach video.</p>
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

<!--VIDEO-->
<!--VIDEO-->
<!--VIDEO-->
<!--VIDEO-->
<!--VIDEO-->
<!--VIDEO-->
<!--VIDEO-->

@foreach($evidence_videos as $co)
<?php
$case_id = $case->id;
$table = "evidence_videos";
$reference_id = $co->id;
?>


<div id="crossEvidenceVideo_{{$co->id}}" class="modal fade container" tabindex="-1" style="display: none;">
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