<div class="panel panel-primary">
    <!--    <div class="panel-heading">
            <h3 class="panel-title"><i class="fa fa-suitcase"></i> Cross References</h3>
        </div>-->

    <div  id="cross_plug{{$table}}{{$reference_id}}" class="list-group" >
        <div class="list-group-item ">
            <div class="input-group custom-search-form input-group-sm">
                <input type="text" class="search form-control " placeholder="Search...">
                <span class="input-group-btn">
                    <button class="btn btn-default sort" type="button" data-sort="list_name">
                        <i class="fa fa-sort-alpha-asc"></i>
                    </button>
                    <button class="btn btn-default sort" type="button" data-sort="list_created_at">
                        <i class="fa fa-sort-numeric-asc"></i>
                    </button>
                </span>

            </div>
        </div>
        <div style="max-height: 450px; overflow-y:auto">

            <?php $tags = Tag::all(); ?>
            <ul class="list list-unstyled    ">
                @foreach($tags as $t)
                <li>
                    <a data-toggle="modal" data-target="#{{$table}}tag_{{$t->id}}" class="list-group-item c_link">
                        @if($t->table == "case_observations")
                        <?php $i = Case_observation::find($t->reference_id); ?>
                        <h4 class="list-group-item-heading list_name ">{{$i->observation}}</h4>
                        <p class="list_created_at label label-default"><i class="fa fa-calendar"></i> {{$t->created_at}}</p>
                        <p class="list-group-item-text list_tags label label-info"><i class="fa fa-tags"></i> {{$t->tags}}</p>
                        @elseif($t->table == "kases")
                        <?php $i = Kase::find($t->reference_id); ?>
                        <h4 class="list-group-item-heading list_name ">{{$i->name}}</h4>
                        <p class="list_created_at label label-default"><i class="fa fa-calendar"></i> {{$t->created_at}}</p>
                        <p class="list-group-item-text list_tags label label-info"><i class="fa fa-tags"></i> {{$t->tags}}</p>
                        @elseif($t->table == "evidence_objects")
                        <?php $i = Evidence_object::find($t->reference_id); ?>
                        <h4 class="list-group-item-heading list_name ">{{$i->details}}</h4>
                        <p class="list_created_at label label-default"><i class="fa fa-calendar"></i> {{$t->created_at}}</p>
                        <p class="list-group-item-text list_tags label label-info"><i class="fa fa-tags"></i> {{$t->tags}}</p>
                        @elseif($t->table == "evidence_pictures")
                        <?php $i = Evidence_picture::find($t->reference_id); ?>
                        <h4 class="list-group-item-heading list_name "></h4>
                        <p class="list_created_at label label-default"><i class="fa fa-calendar"></i> {{$t->created_at}}</p>
                        <p class="list-group-item-text list_tags label label-info"><i class="fa fa-tags"></i> {{$t->tags}}</p>
                        @elseif($t->table == "evidence_recordings")
                        <?php $i = Evidence_picture::find($t->reference_id); ?>
                        <h4 class="list-group-item-heading list_name "></h4>
                        <p class="list_created_at label label-default"><i class="fa fa-calendar"></i> {{$t->created_at}}</p>
                        <p class="list-group-item-text list_tags label label-info"><i class="fa fa-tags"></i> {{$t->tags}}</p>
                        @elseif($t->table == "evidence_documents")
                        <?php $i = Evidence_document::find($t->reference_id); ?>
                        <h4 class="list-group-item-heading list_name ">{{$i->details}}</h4>
                        <p class="list_created_at label label-default"><i class="fa fa-calendar"></i> {{$t->created_at}}</p>
                        <p class="list-group-item-text list_tags label label-info"><i class="fa fa-tags"></i> {{$t->tags}}</p>
                        @elseif($t->table == "evidence_videos")
                        <?php $i = Evidence_video::find($t->reference_id); ?>
                        <h4 class="list-group-item-heading list_name ">{{$i->details}}</h4>
                        <p class="list_created_at label label-default"><i class="fa fa-calendar"></i> {{$t->created_at}}</p>
                        <p class="list-group-item-text list_tags label label-info"><i class="fa fa-tags"></i> {{$t->tags}}</p>
                        @else
                        <h4 class="list-group-item-heading list_name ">{{$t->reference_id}}</h4>
                        <p class="list_created_at label label-default"><i class="fa fa-calendar"></i> {{$t->created_at}}</p>
                        <p class="list-group-item-text list_tags label label-info"><i class="fa fa-tags"></i> {{$t->tags}}</p>

                        @endif

                    </a>
                </li>
                @endforeach
            </ul>



        </div>
    </div>
</div>

<script>
    var options = {
        valueNames: ['list_name', 'list_created_at', 'list_details', 'list_tags']
    };

    var crossList{{$table}}{{$reference_id}} = new List('cross_plug{{$table}}{{$reference_id}}', options);


</script>



@foreach($tags as $t)
<div id="{{$table}}tag_{{$t->id}}" class="modal fade" tabindex="-1" style="display: none;">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">{{$t->reference_id." - ".$t->table}}</h4>
             {{$table}}
        </div>

        <form action="{{URL::to("cross_references/store")}}" method="POST">
            <input type="hidden" name="reference_id" value="{{$reference_id}}">
            <input type="hidden" name="case_id" value="{{$case_id}}">
            <input type="hidden" name="table" value="{{$table}}">
            <input type="hidden" name="tags_id" value="{{$t->id}}">
            <div class="modal-body">
                @if($t->table == "case_observations")
                

                <?php $i = Case_observation::find($t->reference_id); ?>
                <h4 class="list-group-item-heading list_name ">{{$i->observation}}</h4>
                <p class="list_created_at label label-default"><i class="fa fa-calendar"></i> {{$t->created_at}}</p>
                <p class="list-group-item-text list_tags label label-info"><i class="fa fa-tags"></i> {{$t->tags}}</p>
                @elseif($t->table == "kases")
                <?php $i = Kase::find($t->reference_id); ?>
                <h4 class="list-group-item-heading list_name ">{{$i->name}}</h4>
                <p class="list_created_at label label-default"><i class="fa fa-calendar"></i> {{$t->created_at}}</p>
                <p class="list-group-item-text list_tags label label-info"><i class="fa fa-tags"></i> {{$t->tags}}</p>
                @elseif($t->table == "evidence_objects")
                <?php $i = Evidence_object::find($t->reference_id); ?>
                <h4 class="list-group-item-heading list_name ">{{$i->details}}</h4>
                <p class="list_created_at label label-default"><i class="fa fa-calendar"></i> {{$t->created_at}}</p>
                <p class="list-group-item-text list_tags label label-info"><i class="fa fa-tags"></i> {{$t->tags}}</p>
                @elseif($t->table == "evidence_pictures")
                <?php $i = Evidence_picture::find($t->reference_id); ?>
                <h4 class="list-group-item-heading list_name "></h4>
                <p class="list_created_at label label-default"><i class="fa fa-calendar"></i> {{$t->created_at}}</p>
                <p class="list-group-item-text list_tags label label-info"><i class="fa fa-tags"></i> {{$t->tags}}</p>
                @elseif($t->table == "evidence_recordings")
                <?php $i = Evidence_picture::find($t->reference_id); ?>
                <h4 class="list-group-item-heading list_name "></h4>
                <p class="list_created_at label label-default"><i class="fa fa-calendar"></i> {{$t->created_at}}</p>
                <p class="list-group-item-text list_tags label label-info"><i class="fa fa-tags"></i> {{$t->tags}}</p>
                @elseif($t->table == "evidence_documents")
                <?php $i = Evidence_documents::find($t->reference_id); ?>
                <h4 class="list-group-item-heading list_name ">{{$i->details}}</h4>
                <p class="list_created_at label label-default"><i class="fa fa-calendar"></i> {{$t->created_at}}</p>
                <p class="list-group-item-text list_tags label label-info"><i class="fa fa-tags"></i> {{$t->tags}}</p>
                @elseif($t->table == "evidence_videos")
                <?php $i = Evidence_video::find($t->reference_id); ?>
                <h4 class="list-group-item-heading list_name ">{{$i->details}}</h4>
                <p class="list_created_at label label-default"><i class="fa fa-calendar"></i> {{$t->created_at}}</p>
                <p class="list-group-item-text list_tags label label-info"><i class="fa fa-tags"></i> {{$t->tags}}</p>
                @else
                <h4 class="list-group-item-heading list_name ">{{$t->reference_id}}</h4>
                <p class="list_created_at label label-default"><i class="fa fa-calendar"></i> {{$t->created_at}}</p>
                <p class="list-group-item-text list_tags label label-info"><i class="fa fa-tags"></i> {{$t->tags}}</p>

                @endif

            </div>
            <div class="modal-footer">
                <span class="btn-group btn-group-sm">

                    <button type="" class="btn btn-primary">Save changes</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </span>
            </div>
        </form >
    </div>
</div>


@endforeach