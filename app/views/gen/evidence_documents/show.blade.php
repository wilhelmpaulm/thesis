<div class="panel panel-black">
    <div class="panel-heading clearfix">
        <p class="pull-left"><i class="fa fa-file"></i> Documents</p>
        <span class="btn-group btn-group-sm pull-right">
             @if($case->agent_id == Auth::user()->id && $case->status == "Ongoing")
            <button class="btn  btn-success  pull-right" type="button" data-toggle="modal" data-target="#addEvidenceDocument">
                <i class="fa fa-plus"></i> 
            </button>
             @endif
        </span>
    </div>
    <div class="panel-body">
        <table class="table table-bordered table-hover ">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Added by</th>
                    <th>Title</th>
                    <th>Owner</th>
                    <th>Date Received</th>
                    <th>Version</th>
                    <th ></th>
                </tr>
            </thead>
            <tbody>
                @foreach($evidence_documents as $ed)
                  <?php $au = User::find($ed->user_id);?>
                <tr class="clickable" >
                    <td>{{$ed->id}}</td>
                <td>{{$au->last_name.", ".$au->first_name}}</td>
                    <td>{{$ed->title}}</td>
                    <td>{{$ed->owner}}</td> 
                    <td>{{$ed->date_received}}</td>
                    <td><p class="label label-info">ver. {{round($ed->version,2)}}</p></td>
                    <td>
                        <div class="btn-group btn-group-sm pull-right">
                            <a class="btn btn-default"  href="{{URL::asset("nbi/evidences/documents/".$ed->file_name)}}"><i class="fa fa-download"></i></a>
                            @if($case->agent_id == Auth::user()->id && $case->status == "Ongoing")
                            @if(Auth::user()->id == $ed->user_id)
                            <button class="btn btn-warning"data-toggle="modal" data-target="#editEvidenceDocument_{{$ed->id}}"><i class="fa fa-wrench"></i></button>
                            @endif
                            <button class="btn btn-info"data-toggle="modal" data-target="#versionEvidenceDocument_{{$ed->id}}"><i class="fa fa-book"></i></button>
                            <br>
                            <button class="btn btn-info"data-toggle="modal" data-target="#historyEvidenceDocument_{{$ed->id}}"><i class="fa fa-list"></i></button>
                            <button class="btn btn-success"data-toggle="modal" data-target="#addEvidenceHistoryDocument_{{$ed->id}}"><i class="fa fa-plus"></i> <i class="fa fa-list"></i></button>
                            <br>
                            <button class="btn btn-default"data-toggle="modal" data-target="#crossEvidenceDocument_{{$ed->id}}"><i class="fa fa-sitemap"></i></button>
                            <button  class="btn btn-default addCross"data-table="evidence_documents" data-reference_id="{{$ed->id}}" data-toggle="modal"  data-target="#addCross"><i class="fa fa-plus"></i> <i class="fa fa-sitemap"></i></button>
                            @endif
                        </div>
                    </td>

                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>







@foreach($evidence_documents as $ed)
<div id="versionEvidenceDocument_{{$ed->id}}" class="modal container fade" tabindex="-1" style="display: none;">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">Evidence Versions</h4>
        </div>

        <input type="hidden" name="case_id" value="{{$case->id}}">

        <div class="modal-body">
            <table class="table table-bordered table-hover ">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Version</th>
                        <th>Title</th>
                        <th>Owner</th>
                        <th>Details</th>
                        <th>Date Received</th>
                        <th>Updated At</th>
                        <th width=""></th>
                    </tr>
                </thead>
                <tbody>
                    <?php $evidence_document_versions = Evidence_document::where("origin_id", "=", $ed->origin_id)->get(); ?>
                    @foreach($evidence_document_versions as $eh)
                    <tr class="clickable" >
                        <td>{{$eh->id}}</td>
                         <td><p class="label label-info">ver. {{round($ed->version,2)}}</p></td>
                        <td>{{$eh->title}}</td>
                        <td>{{$eh->owner}}</td>
                        <td>{{$eh->details}}</td>
                        <td>{{$eh->date_received}}</td>
                        <td>{{$eh->updated_at}}</td>
                        <td>
                            <form action="{{URL::to("evidence_documents/set-current/".$eh->id)}}" method="post">
                                <input type="hidden" name="current_id" value="{{$ed->id}}">
                                <input type="hidden" name="case_id" value="{{$case->id}}">
                                <div class="btn-group btn-group-sm pull-right">
                                    <button class="btn btn-warning" ><i class="fa fa-chain"></i></button>
                                </div>
                            </form>
                        </td>
                    </tr>
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

@foreach($evidence_documents as $ed)
<div id="editEvidenceDocument_{{$ed->id}}" class="modal container fade" tabindex="-1" style="display: none;">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">Edit Evidence</h4>
        </div>

        <form action="{{URL::to('evidence_documents/update/'.$ed->id)}}" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="case_id" value="{{$case->id}}">

            <div class="modal-body">
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="title">Title</label>
                        <input id='title' type='text' class="form-control " name="title" value="{{$ed->title}}"/>
                        <label for="details">Details</label>
                        <textarea  id='details' class="form-control " name="details" rows="4" cols="20">{{$ed->details}}</textarea>
                        
                        <label>Revision Type</label>
                        <select name="version" class="form-control">
                            <option>Minor</option>
                            <option>Major</option>
                        </select>
                        
                    </div>
                    <div class="form-group col-md-6">
                        <label for="owner">Owner</label>
                        <input type="text" class="form-control" id="title" placeholder="fraptiousday!" name="owner" value="{{$ed->owner}}">
                        <label for="date_received">Date Received</label>
                        <input type="date" class="form-control" id="date_received" placeholder="fraptiousday!" name="date_received" value="{{$ed->date_received}}">
                        <label for="file_name">File Upload</label>
                        <input type="file" id="file_name" name="file_name" value="{{$ed->file_name}}">

                        <p class="help-block">Please attach document.</p>

                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <span class="btn-group btn-group-sm">

                    <a  id="evidence_document_destroy_{{$ed->id}}" class="btn btn-danger" >Delete</a>
                    <button type="" class="btn btn-primary">Save changes</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </span>
            </div>
        </form>
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





@foreach($evidence_documents as $ed)
<?php $history = Evidence_history::where("evidence_id", "=", $ed->id)->where("type", "=", "Document")->get(); ?>
<div id="historyEvidenceDocument_{{$ed->id}}" class="modal container fade" tabindex="-1" style="display: none;">
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


@foreach($evidence_documents as $ed)
@include("gen.evidence_histories.create_document")
@endforeach



<div id="addEvidenceDocument" class="modal container fade" tabindex="-1" style="display: none;">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">Add Document</h4>
        </div>
        <form action="{{URL::to('evidence_documents/store')}}" method="POST" enctype="multipart/form-data">
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
                        <input type="text" class="form-control" id="title" placeholder="Owner" name="owner" value="">
                        <label for="date_received">Date Received</label>
                        <input type="date" class="form-control" id="date_received" placeholder="fraptiousday!" name="date_received" value="">
                        <label for="file_name">File Upload</label>
                        <input type="file" id="file_name" name="file_name" value="">

                        <p class="help-block">Please attach document.</p>

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


@foreach($evidence_documents as $co)
<?php
$case_id = $case->id;
$table = "evidence_documents";
$reference_id = $co->id;
?>


<div id="crossEvidenceDocument_{{$co->id}}" class="modal fade container" tabindex="-1" style="display: none;">
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