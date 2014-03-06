<div class="row">
    <div class="col-lg-12">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th width="">Origin</th>
                    <th></th>
                    <th width="5%">Type</th>
                </tr>
            </thead>
            <tbody>
                <?php $crs = Cross_reference::where("case_id", "=", $case_id)->where("reference_id", "=", $reference_id)->get(); ?>
                @foreach($crs as $cr)
                <?php $t = Tag::find($cr->tags_id); ?>
                @if($t->table == "case_observations")
                <?php $x = Case_observation::find($t->reference_id); ?>
                <?php $case = Kase::find($x->case_id); ?>
                <?php $agent = User::find($case->agent_id); ?>
                <tr>
                    <td>
                        <b>{{$case->name}}</b><br>
                        {{$agent->last_name.", ".$agent->first_name}}<br>

                    </td>
                    <td>
                        {{$x->observation}}
                      <br>
                        <p class="label label-info">{{$t->table}}</p>
                    </td>
                    <td>
                        <form action="{{URL::to('cross_references/destroy/'.$cr->id)}}" method="post">
                            <div class="btn-group btn-group-sm">
                                <button class="btn btn-danger"><i class="fa fa-trash-o"></i></button>
                            </div>
                        </form>
                    </td>
                </tr>
                @elseif($t->table == "evidence_pictures")
                <?php $x = Evidence_picture::find($t->reference_id); ?>
                <?php $case = Kase::find($x->case_id); ?>
                <?php $agent = User::find($case->agent_id); ?>
                <tr>
                    <td>
                        <b>{{$case->name}}</b><br>
                        {{$agent->last_name.", ".$agent->first_name}}<br>

                    </td>
                    <td>
                        {{$x->title}}<br>
                        {{$x->details}}<br>
                        {{$x->owner}}<br>
                        <p class="label label-info">{{$t->table}}</p>
                    </td>
                    <td>
                        <form action="{{URL::to('cross_references/destroy/'.$cr->id)}}" method="post">
                            <div class="btn-group btn-group-sm">
                                <button class="btn btn-danger"><i class="fa fa-trash-o"></i></button>
                            </div>
                        </form>
                    </td>
                </tr>
                @elseif($t->table == "evidence_objects")
                <?php $x = Evidence_object::find($t->reference_id); ?>
                <?php $case = Kase::find($x->case_id); ?>
                <?php $agent = User::find($case->agent_id); ?>
                <tr>
                    <td>
                        <b>{{$case->name}}</b><br>
                        {{$agent->last_name.", ".$agent->first_name}}<br>

                    </td>
                    <td>
                        {{$x->title}}<br>
                        {{$x->details}}<br>
                        {{$x->owner}}<br>
                        <p class="label label-info">{{$t->table}}</p>
                    </td>
                    <td>
                        <form action="{{URL::to('cross_references/destroy/'.$cr->id)}}" method="post">
                            <div class="btn-group btn-group-sm">
                                <button class="btn btn-danger"><i class="fa fa-trash-o"></i></button>
                            </div>
                        </form>
                    </td>
                </tr>
                @elseif($t->table == "evidence_documents")
                <?php $x = Evidence_document::find($t->reference_id); ?>
                <?php $case = Kase::find($x->case_id); ?>
                <?php $agent = User::find($case->agent_id); ?>
                <tr>
                    <td>
                        <b>{{$case->name}}</b><br>
                        {{$agent->last_name.", ".$agent->first_name}}<br>

                    </td>
                    <td>
                        {{$x->title}}<br>
                        {{$x->details}}<br>
                        {{$x->owner}}<br>
                        <p class="label label-info">{{$t->table}}</p>
                    </td>
                    <td>
                        <form action="{{URL::to('cross_references/destroy/'.$cr->id)}}" method="post">
                            <div class="btn-group btn-group-sm">
                                <button class="btn btn-danger"><i class="fa fa-trash-o"></i></button>
                            </div>
                        </form>
                    </td>
                </tr>
                @elseif($t->table == "evidence_recordings")
                <?php $x = Evidence_recording::find($t->reference_id); ?>
                <?php $case = Kase::find($x->case_id); ?>
                <?php $agent = User::find($case->agent_id); ?>
                <tr>
                    <td>
                        <b>{{$case->name}}</b><br>
                        {{$agent->last_name.", ".$agent->first_name}}<br>

                    </td>
                    <td>
                        {{$x->title}}<br>
                        {{$x->details}}<br>
                        {{$x->owner}}<br>
                        <p class="label label-info">{{$t->table}}</p>
                    </td>
                    <td>
                        <form action="{{URL::to('cross_references/destroy/'.$cr->id)}}" method="post">
                            <div class="btn-group btn-group-sm">
                                <button class="btn btn-danger"><i class="fa fa-trash-o"></i></button>
                            </div>
                        </form>
                    </td>
                </tr>
                @elseif($t->table == "evidence_videos")
                <?php $x = Evidence_video::find($t->reference_id); ?>
                <?php $case = Kase::find($x->case_id); ?>
                <?php $agent = User::find($case->agent_id); ?>
                <tr>
                    <td>
                        <b>{{$case->name}}</b><br>
                        {{$agent->last_name.", ".$agent->first_name}}<br>

                    </td>
                    <td>
                        {{$x->title}}<br>
                        {{$x->details}}<br>
                        {{$x->owner}}<br>
                        <p class="label label-info">{{$t->table}}</p>
                    </td>
                    <td>
                        <form action="{{URL::to('cross_references/destroy/'.$cr->id)}}" method="post">
                            <div class="btn-group btn-group-sm">
                                <button class="btn btn-danger"><i class="fa fa-trash-o"></i></button>
                            </div>
                        </form>
                    </td>
                </tr>
                @elseif($t->table == "kases")
                <?php $x = Kase::find($t->reference_id); ?>
                <?php $agent = User::find($x->agent_id); ?>
                <tr>
                    <td>

                        <b>{{$x->name}}</b><br>
                        {{$agent->last_name.", ".$agent->first_name}}<br>

                    </td>

                    <td>  
                        {{$x->name."\n".$x->details}}
                        <br>
                        <p class="label label-info">{{$t->table}}</p>
                    </td>
                    <td>
                        <form action="{{URL::to('cross_references/destroy/'.$cr->id)}}" method="post">
                            <div class="btn-group btn-group-sm">
                                <button class="btn btn-danger"><i class="fa fa-trash-o"></i></button>
                            </div>
                        </form>
                    </td>
                </tr>
                @else
                <tr>
                    <td>sadfasddsaf</td>
                    <td></td>
                    <td></td>
                </tr>
                @endif
                @endforeach
            </tbody>
        </table>

    </div>
</div>

<script>
    $("table").dataTable();

</script>