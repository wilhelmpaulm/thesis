
<div class="panel panel-black">
    <div class="panel-heading">
        <h3 class="panel-title"><i class="fa fa-download"></i> Request Resource</h3>
    </div>
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
                    <i class="fa fa-truck"></i>  Vehicles
                </a>
                <a href="#person" class="btn btn-default sort" type="button" data-toggle="tab">
                    <i class="fa fa-user"></i>  Person
                </a>
                <a href="#gadget" class="btn btn-default" type="button" data-toggle="tab">
                    <i class="fa fa-gamepad"></i>  Gadget
                </a>
                <a href="#money" class="btn btn-default  sort" type="button" data-toggle="tab">
                    <i class="fa fa-money"></i>  Money
                </a>
                <a href="#misc" class="btn btn-default"  type="button" data-toggle="tab">
                    <i class="fa fa-anchor"></i>  MISC
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
        <?php $resources_money = Resource::where("status", "=", "Available")->where("category", "=", "Money")->get(); ?>
        <?php $resources_misc = Resource::where("status", "=", "Available")->where("category", "=", "Equipment")->get(); ?>

        <div class="tab-content">
            <div class="tab-pane active" id="gadget">
                <div class="list-group-item">
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
                </div>
                <div style="height: 450px; overflow-y: auto">
                    <ul class="list list-unstyled    ">
                        @foreach($resources_gadget as $r)
                        <li style="">
                            <a  id=""href="#" data-toggle="modal" data-target="#resource_{{$r->id}}"  data-case_id="{{$r->id}}" class="list-group-item c_link">




                                <h4 class=" list_name ">{{$r->name}}</h4>
                                <p class="label label-info list_status">{{$r->status}}</p>
                                <p class="label label-default list_category">{{$r->category}}</p>
                                <p class="label label-default list_info">{{$r->division}}</p>
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
                        <input type="text" class="search form-control " placeholder="Search...">
                        <span class="input-group-btn ">
                            <button class="btn btn-default sort" type="button" data-sort="list_name">
                                <i class="fa fa-sort"></i> A
                            </button>
                            <button class="btn btn-default sort" type="button" data-sort="list_created_at">
                                <i class="fa fa-sort"></i> #
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
                                <p class="label label-default list_info">{{$r->division}}</p>
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
                        <input type="text" class="search form-control " placeholder="Search...">
                        <span class="input-group-btn ">
                            <button class="btn btn-default sort" type="button" data-sort="list_name">
                                <i class="fa fa-sort"></i> A
                            </button>
                            <button class="btn btn-default sort" type="button" data-sort="list_created_at">
                                <i class="fa fa-sort"></i> #
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
                                <p class="label label-default list_info">{{$r->division}}</p>
                                <p class="list_created_at label label-info">{{$r->created_at}}</p>


                            </a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="tab-pane list" id="money">
                <div class="list-group-item">
                    <div class="input-group input-group-sm">
                        <input type="text" class="search form-control " placeholder="Search...">
                        <span class="input-group-btn ">
                            <button class="btn btn-default sort" type="button" data-sort="list_name">
                                <i class="fa fa-sort"></i> A
                            </button>
                            <button class="btn btn-default sort" type="button" data-sort="list_created_at">
                                <i class="fa fa-sort"></i> #
                            </button>

                        </span>

                    </div>
                </div>
                <div style="height: 450px; overflow-y: auto">
                    <ul class="list list-unstyled    ">
                        @foreach($resources_money as $r)
                        <li style="">
                            <a  id="" href="#" data-toggle="modal" data-target="#resource_{{$r->id}}"  data-case_id="{{$r->id}}" class="list-group-item c_link">




                                <h4 class=" list_name ">{{$r->name}}</h4>
                                <p class="label label-info list_status">{{$r->status}}</p>
                                <p class="label label-default list_category">{{$r->category}}</p>
                                <p class="label label-default list_info">{{$r->division}}</p>
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
                        <input type="text" class="search form-control " placeholder="Search...">
                        <span class="input-group-btn ">
                            <button class="btn btn-default sort" type="button" data-sort="list_name">
                                <i class="fa fa-sort"></i> A
                            </button>
                            <button class="btn btn-default sort" type="button" data-sort="list_created_at">
                                <i class="fa fa-sort"></i> #
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
                                <p class="label label-default list_info">{{$r->division}}</p>
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
                
                <div class="col-md-8">

                    <p>{{$r->details}}</p>
                    <p class="label label-primary">{{$r->category}}</p>
                    <p class="label label-info">{{$r->status}}</p>
                    <p class="label label-default">{{$r->division}}</p>
                    <hr>
                    <?php $history = Resource_history::where("resource_id", "=", $r->id)->get(); ?>
                    <?php $cases = Kase::where("status", "=", "Ongoing")->where("agent_id", "=", Auth::user()->id)->get(); ?>

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
                           <?php $u = User::find($h->user_id)?>
                            <tr>
                                <td>{{$u->last_name.", ".$u->first_name}}</td>
                                <td>{{$h->amount}}</td>
                                <td>{{$h->status}}</td>
                                <td>{{$h->date_requested}}</td>
                                <td>{{$h->date_due}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
                <div class="col-md-4">
                    <form method="POST" action="{{URL::to('resource_histories/request')}}">
                        <div class="form-group ">
                            <input type="hidden" name="resource_id" value="{{$r->id}}">
                            <label >Case</label>
                            <select name="case_id" class="form-control">
                                @foreach($cases as $c)
                                <option value="{{$c->id}}">{{$c->name}}</option>
                                @endforeach
                            </select>
                            <label >Date Requested</label>
                            <input class="form-control" type="date" value="" name="date_requested">
                            <label >Date Due</label>
                            <input class="form-control" type="date" value="" name="date_due">
                            <label >Details</label>
                            <textarea name="details" class="form-control" rows="4" cols="20"></textarea>
                            <label >Amount</label>
                            <input class="form-control" min="1" max="{{$r->amount}}"  type="number" value="1" name="amount">
                        </div>
                </div>


            </div>
        </div>
        <div class="modal-footer">
            <div class="btn-group btn-group-sm">
                <button type="submit" class="btn btn-primary">Save changes</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

            </div>
            </form>
        </div>
    </div>

</div>


@endforeach





<script>
    var options = {
        valueNames: ['list_name', 'list_status', 'list_category'],
//        plugins: [ListFuzzySearch()]
    };


    $(".table").dataTable();

    var gadgetList = new List('gadget', options);
    var personList = new List('person', options);
    var vehicleList = new List('vehicle', options);
    var miscList = new List('misc', options);
    var moneyList = new List('money', options);
//    $.fn.modal.defaults.maxHeight = function(){
    // subtract the height of the modal header and footer
//    return $(window).height() - 165; 
//}

</script>
