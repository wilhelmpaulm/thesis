<div class="panel panel-default">
    <div class="panel-heading clearfix">
        <p class="pull-left"><i class="fa fa-table"></i> Recordings</p>
        <span class="btn-group btn-group-sm pull-right">

            <button class="btn  btn-success pull-right" type="button" data-toggle="modal" data-target="#addEvidenceRecording">
                <i class="fa fa-plus"></i> 
            </button>
        </span>
    </div>
    <div class="panel-body">
        <table class="table table-responsive table-condensed table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Owner</th>
                    <th>Date Recorded</th>
                    <th>Date Received</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach($evidence_recordings as $ed)
                <tr>
                    <td>{{$ed->id}}</td>
                    <td>{{$ed->owner}}</td>
                    <td>{{$ed->date_recorded}}</td>
                    <td>{{$ed->date_received}}</td>
                    <td>
                        <div class="btn-group btn-group-sm pull-right">
                            <button class="btn btn-success"data-toggle="modal" data-target="#viewEvidenceRecording_{{$ed->id}}"><i class="fa fa-eye"></i></button>
                            <a class="btn btn-success"  href="{{URL::asset("nbi/evidences/recordings/".$ed->file_name)}}"><i class="fa fa-download"></i></a>

                            <button class="btn btn-warning"data-toggle="modal" data-target="#editEvidenceRecording_{{$ed->id}}"><i class="fa fa-wrench"></i></button>
                            <button class="btn btn-info"data-toggle="modal" data-target="#historyEvidenceRecording_{{$ed->id}}"><i class="fa fa-list"></i></button>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>





<!--RECORDINGS-->
<!--RECORDINGS-->
<!--RECORDINGS-->
<!--RECORDINGS-->
<!--RECORDINGS-->
<!--RECORDINGS-->
<!--RECORDINGS-->

@foreach($evidence_recordings as $ed)
<div id="editEvidenceRecording_{{$ed->id}}" class="modal container fade" tabindex="-1" style="display: none;">
    <div class="modal-dialog " style="width: 100%">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Modal title</h4>
            </div>
            <form action="{{URL::to('evidence_recordings/update/'.$ed->id)}}" method="POST" enctype="multipart/form-data">
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
                            <p class="help-block">Please attach a photo of the victim.</p>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                                        <span class="btn-group btn-group-sm">

                    <a  id="evidence_recordings_destroy_{{$ed->id}}" class="btn btn-danger" >Delete</a>
                    <button type="" class="btn btn-primary">Save changes</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </span>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    $("#evidence_recordings_destroy_{{$ed->id}}").on("click", function() {
        $.post("{{URL::to('evidence_recordings/destroy/'.$ed->id)}}", function(data) {
            location.reload();
        });
    });
</script>

@endforeach



@foreach($evidence_recordings as $ed)
<div id="viewEvidenceRecording_{{$ed->id}}" class="modal container fade" tabindex="-1" style="display: none;">
    <div class="modal-dialog " style="">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Modal title</h4>
            </div>
            <div class="modal-body">
                <audio controls class="center-block" style="width: 100%">
                    <!--<source src="horse.ogg" type="audio/ogg">-->
                    <source src="{{URL::asset('nbi/evidences/recordings/'.$ed->file_name)}}" type="audio/mpeg">
                    Your browser does not support the audio element.
                </audio>
            </div>
            <div class="modal-footer">
                                    <span class="btn-group btn-group-sm">

                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </span>
            </div>
        </div>
    </div>
</div>



@endforeach


<div id="addEvidenceRecording" class="modal container fade" tabindex="-1" style="display: none;">
    <div class="modal-dialog " style="width: 100%">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Modal title</h4>
            </div>
            <form action="{{URL::to('evidence_recordings/store')}}" method="POST" enctype="multipart/form-data">
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
                            <input type="text" class="form-control" id="title" placeholder="fraptiousday!" name="owner" value="">
                            <label for="date_recorded">Date Recorded</label>
                            <input type="date" class="form-control" id="date_recorded" placeholder="fraptiousday!" name="date_recorded" value="">
                            <label for="date_received">Date Received</label>
                            <input type="date" class="form-control" id="date_received" placeholder="fraptiousday!" name="date_received" value="">
                            <label for="file_name">File Upload</label>
                            <input type="file" id="file_name" name="file_name" value="">
                            <p class="help-block">Please attach a photo of the victim.</p>
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
</div>



<!--RECORDINGS-->
<!--RECORDINGS-->
<!--RECORDINGS-->
<!--RECORDINGS-->
<!--RECORDINGS-->
<!--RECORDINGS-->
<!--RECORDINGS-->