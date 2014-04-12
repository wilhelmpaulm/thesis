<div class="panel panel-black">
    <div class="panel-heading clearfix">
        <p class="pull-left"><i class="fa fa-users"></i>Case Victims</p>
        <span class="btn-group btn-group-sm pull-right">
             @if($case->agent_id == Auth::user()->id && $case->status == "Ongoing")
            <button class="btn  btn-success pull-right" type="button" data-toggle="modal" data-target="#addCaseVictim">
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
                    <th>Sex</th>
                    <th>Name</th>
                    <th>Birth Date</th>
                    <th>Age</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach($case_victims as $cs)
                <?php $cs = Client::find($cs->client_id) ?>
                <tr  class="clickable" >
                    <td>{{$cs->id}}</td>
                    <td>{{$cs->sex}} </td>
                    <td>{{$cs->last_name.", ".$cs->first_name." ".$cs->middle_name}}</td>
                    <td>{{$cs->birthdate}} </td>
                    <td>{{Time::getAge($cs->birthdate)}} </td>
                    <td>
                         @if($case->agent_id == Auth::user()->id && $case->status == "Ongoing")
                        <div class="btn-group btn-group-sm pull-right pull-right">
                            
                            <button class="btn btn-warning"data-toggle="modal" data-target="#editCaseVictim_{{$cs->id}}"><i class="fa fa-wrench"></i></button>
                            <button class="btn btn-default"data-toggle="modal" data-target="#crossCaseVictim_{{$cs->id}}"><i class="fa fa-sitemap"></i></button>
                            <button  class="btn btn-default addCross"data-table="case_victims" data-reference_id="{{$cs->id}}" data-toggle="modal"  data-target="#addCross"><i class="fa fa-plus"></i> <i class="fa fa-sitemap"></i></button>
                        </div>
                         @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>





@foreach($case_victims as $cs)
<?php $client = Client::find($cs->client_id); ?>
<?php $client_address = Client_address::where("client_id", "=", $client->id)->first(); ?>
<?php $client_contact = Client_contact::where("client_id", "=", $client->id)->first(); ?>
<div id="editCaseVictim_{{$client->id}}" class="modal container fade" tabindex="-1" style="display: none;">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">Edit Case Victim</h4>
        </div>
        <form action="{{URL::to('evidence_pictures/store')}}" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="case_id" value="{{$case->id}}">
            <div class="modal-body">
                @include("gen.clients.edit")
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
@endforeach

<div id="addCaseVictim" class="modal container fade" tabindex="-1" style="display: none;">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">Add Case Victim</h4>
        </div>
        <form action="{{URL::to('case_victims/store')}}" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="case_id" value="{{$case->id}}">
            <div class="modal-body">
                @include("gen.clients.create")
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



@foreach($case_victims as $co)

<?php
$co = Client::find($co->client_id);
$case_id = $case->id;
$table = "case_victims";
$reference_id = $co->id;
?>


<div id="crossCaseVictim_{{$co->id}}" class="modal fade container" tabindex="-1" style="display: none;">
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