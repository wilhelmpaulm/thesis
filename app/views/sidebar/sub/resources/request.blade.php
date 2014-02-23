<div  id="list_plug" class="list-group" >
    <div class="list-group-item ">
        <!--        <div class="input-group custom-search-form input-group-sm">
                    <input type="text" class="search form-control " placeholder="Search...">
                    
                    <span class="input-group-btn">
                        <button class="btn btn-default sort" type="button" data-sort="list_name">
                            <i class="fa fa-sort"></i> A
                        </button>
                        <button class="btn btn-default sort" type="button" data-sort="list_created_at">
                            <i class="fa fa-sort"></i> #
                        </button>
                        <button class="btn btn-default sort" type="button" data-sort="list_category">
                            <i class="fa fa-sort"></i> Category
                        </button>
                    </span>
        
                </div>-->
        <div class="input-group input-group-sm">
            <input type="text" class="search form-control " placeholder="Search...">
            <span class="input-group-btn ">
                <button class="btn btn-default sort" type="button" data-sort="list_name">
                    <i class="fa fa-sort"></i> A
                </button>
                <button class="btn btn-default sort" type="button" data-sort="list_created_at">
                    <i class="fa fa-sort"></i> #
                </button>
                <button class="btn btn-default sort" type="button" data-sort="list_category">
                    <i class="fa fa-sort"></i> Category
                </button>
            </span>

        </div>
     <hr>
        <div class="btn-group btn-group-justified btn-group-sm">
            <a  href="#" class="btn btn-default sort" type="button" data-sort="list_name">
                Vehicles
            </a>
            <a href="#" class="btn btn-default sort" type="button" data-sort="list_created_at">
               Person
            </a>
            <a href="#" class="btn btn-default  sort" type="button" data-sort="list_category">
                Gadget
            </a>
            <a href="#" class="btn btn-default  sort" type="button" data-sort="list_category">
                Money
            </a>
            <a href="#" class="btn btn-default  sort" type="button" data-sort="list_category">
                Miscellaneous 
            </a>
        </div>

    </div>
    <div style="height: 450px; overflow-y: auto">

        <?php $resources = Resource::where("status", "=", "Available")->get(); ?>
        <ul class="list list-unstyled    ">
            @foreach($resources as $r)
            <li style="">
                <a  id="" href="{{URL::to('agent/cases-ongoing/'.$r->id)}}" data-case_id="{{$r->id}}" class="list-group-item c_link">




                    <h4 class=" list_name ">{{$r->name}}</h4>
                    <p class="label label-info list_status">{{$r->status}}</p>
                    <p class="label label-default list_category">{{$r->category}}</p>
                    <p class="list_created_at label label-info">{{$r->created_at}}</p>


                </a>
            </li>
            @endforeach
        </ul>



    </div>
</div>

<script>
    var options = {
        valueNames: ['list_name', 'list_status', 'list_category']
    };

    var userList = new List('list_plug', options);



</script>
