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
        <div class="btn-group btn-group-justified btn-group-sm">
            <a  href="#vehicle" class="btn btn-default sort"type="button" data-toggle="tab">
                Vehicles
            </a>
            <a href="#person" class="btn btn-default sort" type="button" data-toggle="tab">
                Person
            </a>
            <a href="#gadget" class="btn btn-default" type="button" data-toggle="tab">
                Gadget
            </a>
            <a href="#money" class="btn btn-default  sort" type="button" data-toggle="tab">
                Money
            </a>
            <a href="#misc" class="btn btn-default"  type="button" data-toggle="tab">
                Miscellaneous 
            </a>
        </div>

        <!--        <div class="input-group input-group-sm">
                    <input type="text" class="fuzzy-search form-control " placeholder="Search...">
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
        
                </div>-->


    </div>


    <?php $resources = Resource::all(); ?>
    <?php $resources_gadget = Resource::where("status", "=", "Available")->where("category", "=", "Gadget")->get(); ?>
    <?php $resources_person = Resource::where("status", "=", "Available")->where("category", "=", "Person")->get(); ?>
    <?php $resources_vehicle = Resource::where("status", "=", "Available")->where("category", "=", "Vehicle")->get(); ?>
    <?php $resources_misc = Resource::where("status", "=", "Available")->where("category", "=", "miscellaneous")->get(); ?>

    <div class="tab-content">
        <div class="tab-pane " id="gadget">
            <div class="list-group-item">
                <div class="input-group input-group-sm">
                    <input type="text" class="fuzzy-search form-control " placeholder="Search...">
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
            </div>
            <div style="height: 450px; overflow-y: auto">
                <ul class="list list-unstyled    ">
                    @foreach($resources_gadget as $r)
                    <li style="">
                        <a  id=""href="#" data-toggle="modal" data-target="#resource_{{$r->id}}"  data-case_id="{{$r->id}}" class="list-group-item c_link">




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
        <div class="tab-pane list" id="person">
            <div class="list-group-item">
                <div class="input-group input-group-sm">
                    <input type="text" class="fuzzy-search form-control " placeholder="Search...">
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
            </div>
            <div style="height: 450px; overflow-y: auto">
                <ul class="list list-unstyled    ">
                    @foreach($resources_person as $r)
                    <li style="">
                        <a  id="" href="#" data-toggle="modal" data-target="#resource_{{$r->id}}"  data-case_id="{{$r->id}}" class="list-group-item c_link">




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
        <div class="tab-pane list" id="vehicle">
            <div class="list-group-item">
                <div class="input-group input-group-sm">
                    <input type="text" class="fuzzy-search form-control " placeholder="Search...">
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
            </div>
            <div style="height: 450px; overflow-y: auto">
                <ul class="list list-unstyled    ">
                    @foreach($resources_vehicle as $r)
                    <li style="">
                        <a  id="" href="#" data-toggle="modal" data-target="#resource_{{$r->id}}"  data-case_id="{{$r->id}}" class="list-group-item c_link">




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
        <div class="tab-pane list" id="misc">
            <div class="list-group-item">
                <div class="input-group input-group-sm">
                    <input type="text" class="fuzzy-search form-control " placeholder="Search...">
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
            </div>
            <div style="height: 450px; overflow-y: auto">
                <ul class="list list-unstyled    ">
                    @foreach($resources_misc as $r)
                    <li style="">
                        <a  id="" href="#" data-toggle="modal" data-target="#resource_{{$r->id}}" data-case_id="{{$r->id}}" class="list-group-item c_link">




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
        <div class="tab-pane" id="money">

        </div>
    </div>


</div>

@foreach($resources as $r)
<div class="modal fade  container" id="resource_{{$r->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">{{$r->name}}</h4>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="col-md-2">
                    
                    <p>{{$r->details}}</p>
                    <p class="label label-primary">{{$r->category}}</p>
                    <p class="label label-info">{{$r->status}}</p>
                    <p class="label label-default">{{$r->division}}</p>
                </div>
                <div class="col-md-7">
                    <?php $history = Resource_history::where("resource_id", "=", $r->id)->get();?>
                    
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Borrowed by</th>
                                <th>Amount</th>
                                <th>Status</th>
                                <th>Date Requested</th>
                                <th>Date Due</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($history as $h)
                            <tr>
                                <td>{{$h->user_id}}</td>
                                <td>{{$h->amount}}</td>
                                <td>{{$h->status}}</td>
                                <td>{{$h->date_requested}}</td>
                                <td>{{$h->date_due}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
                <div class="col-md-3">
                    <div class="form-group ">
                        <input type="hidden" name="resource_id[]" value="{{$r->id}}">
                        <label >Date Requested</label>
                        <input class="form-control" type="date" value="" name="date_requested[]">
                        <label >Date Due</label>
                        <input class="form-control" type="date" value="" name="date_due[]">
                        <label >Amount</label>
                        <input class="form-control" type="number" value="" name="amount[]">
                    </div>
                </div>


            </div>
        </div>
        <div class="modal-footer">
            <div class="btn-group btn-group-sm">
                <!--<button type="button" class="btn btn-primary">Save changes</button>-->
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>


@endforeach





<script>
    $("table").dataTable();
    var options = {
        valueNames: ['list_name', 'list_status', 'list_category'],
        plugins: [ListFuzzySearch()]
    };

    var userList = new List('list_plug', options);
//    $.fn.modal.defaults.maxHeight = function(){
    // subtract the height of the modal header and footer
//    return $(window).height() - 165; 
//}

</script>
