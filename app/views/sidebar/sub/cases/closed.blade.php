<div  id="list_plug" class="list-group" >
    <div class="list-group-item ">
        <div class="input-group  input-group-sm">
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
    <div style="height: 450px; overflow-y: auto">

        <?php $cases = Kase::where("status", "=", "Closed_unfinished")->orWhere("status", "=", "Closed_finished")->get(); ?>
        <ul class="list list-unstyled    ">
            @foreach($cases as $case)
            <li><a  id="" href="{{URL::to('agent/cases-closed/'.$case->id)}}" data-case_id="{{$case->id}}" class="list-group-item c_link">
                    <h4 class="list-group-item-heading list_name ">{{$case->name}}</h4>
                    <p class=" list_created_at text-muted">{{$case->created_at}}</p>
                    <p class="list-group-item-text list_details">{{$case->details}}</p>
                </a></li>
            @endforeach
        </ul>


    </div>
</div>
<script>
    var options = {
        valueNames: ['list_name', 'list_created_at', 'list_details']
    };

    var userList = new List('list_plug', options);

</script>
