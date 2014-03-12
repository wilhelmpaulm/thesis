<div class="panel panel-black">
    <div class="panel-heading">
        <h3 class="panel-title"><i class="fa fa-list-ul"></i> Pending Complaints</h3>
    </div>
    <div  id="list_plug" class="list-group" >
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

        <div style="height: 450px; overflow-y:auto">
            <?php $cases = Complaint::where("status", "=", "Pending")->where("division", "=", Auth::user()->division)->get(); ?>
            <ul class="list list-unstyled">
                @foreach($cases as $case) <?php
                $la = "";

                if ($complaint != null) {
                    if ($case->id == $complaint->id) {
                        $la = "active";
                    }
                }
                ?>
                <?php $c = Client::find($case->client_id); ?>
                <li><a  id="" href="{{URL::to(strtolower(Auth::user()->job_title).'/cases-add/'.$case->id)}}" data-case_id="{{$case->id}}" class="list-group-item c_link {{$la}}">
                        <h4 class="list-group-item-heading list_name ">{{$case->id}} {{$c->last_name.", ".$c->first_name}}</h4>
                        <p class=" list_created_at text-muted label label-info">{{$case->created_at}}</p>
                        <p class="list-group-item-text list_details">{{$case->details}}</p>
                    </a></li>
                @endforeach
            </ul>

        </div>

    </div>
</div>

<script>
    var options = {
        valueNames: ['list_name', 'list_created_at', 'list_details']
    };

    var userList = new List('list_plug', options);


</script>
