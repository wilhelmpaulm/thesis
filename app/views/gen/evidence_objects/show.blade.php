<div class="panel panel-default">
    <div class="panel-heading clearfix">
        <p class="pull-left"><i class="fa fa-table"></i> Objects</p>
        <button class="btn  btn-success pull-right" type="button" data-toggle="modal" data-target="#addEvidenceObject">
            <i class="fa fa-plus"></i> 
        </button>
    </div>
    <div class="panel-body">
        <table class="table  table-condensed table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Owner</th>
                    <th>Details</th>
                    <th>Date Received</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach($evidence_objects as $ed)
                <tr class="clickable" type="button" >
                    <td>{{$ed->id}}</td>
                    <td>{{$ed->owner}}</td>
                    <td>{{$ed->details}}</td>
                    <td>{{$ed->date_received}}</td>
                    <td>
                        <div class="btn-group btn-group-sm ">

                            <button class="btn btn-success"data-toggle="modal" data-target="#viewEvidenceObjects_{{$ed->id}}"><i class="fa fa-eye"></i></button>
                            <a class="btn btn-success"  href="{{URL::asset("nbi/evidences/objects/".$ed->file_name)}}"><i class="fa fa-download"></i></a>
                            <button class="btn btn-warning"data-toggle="modal" data-target="#editEvidenceObjects_{{$ed->id}}"><i class="fa fa-wrench"></i></button>
                            <button class="btn btn-info"data-toggle="modal" data-target="#historyEvidenceObjects_{{$ed->id}}"><i class="fa fa-list"></i></button>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>




<!--OBJECTS-->
<!--OBJECTS-->
<!--OBJECTS-->
<!--OBJECTS-->

@foreach($evidence_objects as $ed)
<div id="evidenceObjects_{{$ed->id}}" class="modal container fade" tabindex="-1" style="display: none;">
    <div class="modal-dialog " style="width: 100%">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Modal title</h4>
            </div>
            <form action="{{URL::to('evidence_objects/update/'.$case->id)}}" method="POST" enctype="multipart/form-data">
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
                            <label for="length">Length</label>
                            <input type="text" class="form-control" id="length" placeholder="fraptiousday!" name="length" value="{{$ed->length}}">
                            <label for="width">Width</label>
                            <input type="text" class="form-control" id="width" placeholder="fraptiousday!" name="width" value="{{$ed->width}}">
                            <label for="height">Height</label>
                            <input type="text" class="form-control" id="height" placeholder="fraptiousday!" name="height" value="{{$ed->height}}">
                            <label for="date_received">Date Received</label>
                            <input type="datetime" class="form-control" id="date_received" placeholder="fraptiousday!" name="date_received"  value="{{$ed->date_received}}">
                            <label for="file_name">File Upload</label>
                            <input type="file" id="file_name" name="file_name">
                            <p class="help-block">Please attach a photo of the victim.</p>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a  id="evidence_object_destroy_{{$ed->id}}" class="btn btn-danger" >Delete</a>
                    <button type="" class="btn btn-primary">Save changes</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    $("#evidence_object_destroy_{{$ed->id}}").on("click", function() {
        $.post("{{URL::to('evidence_objects/destroy/'.$ed->id)}}", function(data) {
            location.reload();
        });
    });
</script>

@endforeach


@foreach($evidence_objects as $ed)
<div id="viewEvidenceObjects_{{$ed->id}}" class="modal container fade" tabindex="-1" style="display: none;">
    <div class="modal-dialog " style="">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Modal title</h4>
            </div>
            <div class="modal-body">
                <img src="{{URL::asset('nbi/evidences/objects/'.$ed->file_name)}}" class="img-responsive center-block">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

@endforeach


<div id="addEvidenceObject" class="modal container fade" tabindex="-1" style="display: none;">
    <div class="modal-dialog " style="width: 100%">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Add Object Evidence</h4>
            </div>
            <form action="{{URL::to('evidence_objects/store')}}" method="POST" enctype="multipart/form-data">
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
                            <label for="length">Length</label>
                            <input type="text" class="form-control" id="length" placeholder="fraptiousday!" name="length" value="">
                            <label for="width">Width</label>
                            <input type="text" class="form-control" id="width" placeholder="fraptiousday!" name="width" value="">
                            <label for="height">Height</label>
                            <input type="text" class="form-control" id="height" placeholder="fraptiousday!" name="height" value="">
                            <label for="date_received">Date Received</label>
                            <input type="date" class="form-control" id="date_received" placeholder="fraptiousday!" name="date_received"  value="">
                            <label for="file_name">File Upload</label>
                            <input type="file" id="file_name" name="file_name">
                            <p class="help-block">Please attach a photo of the victim.</p>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="" class="btn btn-primary">Save changes</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>



<!--OBJECTS-->
<!--OBJECTS-->
<!--OBJECTS-->
<!--OBJECTS-->