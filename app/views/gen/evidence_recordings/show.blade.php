<div class="panel panel-default">
    <div class="panel-heading clearfix">
        <p class="pull-left"><i class="fa fa-table"></i> Documents</p>
        <button class="btn  btn-success pull-right" type="button" data-toggle="modal" data-target="#addEvidenceDocument">
            <i class="fa fa-plus"></i> 
        </button>
    </div>
    <div class="panel-body">
        <table class="table table-responsive table-condensed table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Owner</th>
                    <th>Date Recorded</th>
                    <th>Date Received</th>
                    <th>Data</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach($evidence_recordings as $er)
                <tr>
                    <td>{{$er->id}}</td>
                    <td>{{$er->owner}}</td>
                    <td>{{$er->date_recorded}}</td>
                    <td>{{$er->date_received}}</td>
                    <td>
                        <div class="btn-group btn-group-sm ">
                            <button class="btn btn-success"data-toggle="modal" data-target="#viewEvidenceDocument_{{$ed->id}}"><i class="fa fa-eye"></i></button>
                            <button class="btn btn-warning"data-toggle="modal" data-target="#editEvidenceDocument_{{$ed->id}}"><i class="fa fa-wrench"></i></button>
                            <button class="btn btn-info"data-toggle="modal" data-target="#historyEvidenceDocument_{{$ed->id}}"><i class="fa fa-list"></i></button>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>s
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
<div id="evidenceDocument_{{$ed->id}}" class="modal container fade" tabindex="-1" style="display: none;">
    <div class="modal-dialog " style="width: 100%">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Modal title</h4>
            </div>
            <form action="{{URL::to('evidence_documents/store')}}" method="POST">
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
                            <label for="file_name">File Upload</label>
                            <input type="file" id="file_name" name="file_name" value="{{$ed->file_name}}">
                            <p class="help-block">Please attach a photo of the victim.</p>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a  id="evidence_document_destroy_{{$ed->id}}" class="btn btn-danger" >Delete</a>
                    <button type="" class="btn btn-primary">Save changes</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    $("#evidence_document_destroy_{{$ed->id}}").on("click", function() {
        $.post("{{URL::to('evidence_documents/destroy/'.$ed->id)}}", function(data) {
            location.reload();
        });
    });
</script>

@endforeach


<div id="addEvidenceRecording" class="modal container fade" tabindex="-1" style="display: none;">
    <div class="modal-dialog " style="width: 100%">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Modal title</h4>
            </div>
            <form action="{{URL::to('evidence_documents/store')}}" method="POST">
                <input type="hidden" value="{{$case->id}}">
                <div class="modal-body">
                    @include("gen.evidence_documents.create")
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

                    <button type="" class="btn btn-primary">Save changes</button>
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