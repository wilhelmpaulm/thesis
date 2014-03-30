
<div class="panel panel-black">
    <div class="panel-heading">
        <h3 class="panel-title"><i class="fa fa-list"></i> Resource Approval</h3>
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
        <?php $resources_gadget = Resource::where("status", "=", "Available")->where("category", "=", "Gadget")->where("division", "=", Auth::user()->division)->get(); ?>
        <?php $resources_person = Resource::where("status", "=", "Available")->where("category", "=", "Person")->where("division", "=", Auth::user()->division)->get(); ?>
        <?php $resources_vehicle = Resource::where("status", "=", "Available")->where("category", "=", "Vehicle")->where("division", "=", Auth::user()->division)->get(); ?>
        <?php $resources_misc = Resource::where("status", "=", "Available")->where("category", "=", "Equipment")->where("division", "=", Auth::user()->division)->get(); ?>
        <?php $resources_money = Resource::where("status", "=", "Available")->where("category", "=", "Money")->where("division", "=", Auth::user()->division)->get(); ?>

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
                        <?php $rr = Resource_history::where("status", "=", "Pending")->where("resource_id", "=", $r->id)->get() ?>

                        @if(count($rr) > 0)
                        <li style="">
                            <a  id=""href="#" data-toggle="modal" data-target="#resource_{{$r->id}}"  data-case_id="{{$r->id}}" class="list-group-item c_link">




                                <h4 class=" list_name ">{{$r->name}}</h4>
                                <p class="label label-info list_status">{{$r->status}}</p>
                                <p class="label label-default list_category">{{$r->category}}</p>
                                <p class="list_created_at label label-info">{{$r->created_at}}</p>


                            </a>
                        </li>
                        @endif
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
                        <?php $rr = Resource_history::where("status", "=", "Pending")->where("resource_id", "=", $r->id)->get() ?>

                        @if(count($rr) > 0)
                        <li style="">
                            <a  id=""href="#" data-toggle="modal" data-target="#resource_{{$r->id}}"  data-case_id="{{$r->id}}" class="list-group-item c_link">




                                <h4 class=" list_name ">{{$r->name}}</h4>
                                <p class="label label-info list_status">{{$r->status}}</p>
                                <p class="label label-default list_category">{{$r->category}}</p>
                                <p class="list_created_at label label-info">{{$r->created_at}}</p>


                            </a>
                        </li>
                        @endif
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
                        <?php $rr = Resource_history::where("status", "=", "Pending")->where("resource_id", "=", $r->id)->get() ?>

                        @if(count($rr) > 0)
                        <li style="">
                            <a  id=""href="#" data-toggle="modal" data-target="#resource_{{$r->id}}"  data-case_id="{{$r->id}}" class="list-group-item c_link">




                                <h4 class=" list_name ">{{$r->name}}</h4>
                                <p class="label label-info list_status">{{$r->status}}</p>
                                <p class="label label-default list_category">{{$r->category}}</p>
                                <p class="list_created_at label label-info">{{$r->created_at}}</p>


                            </a>
                        </li>
                        @endif
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
                                <p class="list_created_at label label-info">{{$r->created_at}}</p>


                            </a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="tab-pane" id="money">
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
        </div>


    </div>
</div>

@foreach($resources as $r)
<?php
$rhs = Resource_history::where("resource_id", "=", $r->id)->where("status", "=", "Pending")->get();
$rha = Resource_history::where("resource_id", "=", $r->id)->where("status", "=", "Approved")->get();
$rhs_copy = $rhs->toArray();
?>

@if(count($rhs) >= 1)
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
                <div class="col-md-10">
                    <?php // $history = Resource_history::where("resource_id", "=", $r->id)->get(); ?>
                    <?php // $cases = Kase::where("status", "=", "Ongoing")->where("agent_id", "=", Auth::user()->id)->get(); ?>


                    <?php while (count($rhs_copy) > 0) { ?>
                        <?php
                        $amount_t = $r->amount;
                        ?>



                        <?php
//                        $amount_taken = 0;
                        $date1 = 0;
                        $date2 = 0;
                        $d1temp = 0;
                        $d2temp = 0;
                        ?>


                        <div class="well">
                            <!--<form action="{{URL::to('chief/validate')}}" method="post">-->
                            <form action="{{URL::to('resource_histories/approve')}}" method="post">
                                <input name="resource_id" type="hidden" value="{{$r->id}}">
                                <table class="table table-condensed table-hover">
                                    <thead>
                                        <tr>
                                            <th>Request ID</th>
                                            <th>Requested By</th>
                                            <th>Date Requested</th>

                                            <th>Date Due</th>
                                            <th>Amount</th>
                                            <th>Available</th>
                                            <th>Choice</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($rhs_copy as $rh)

                                        <?php
                                        $d1temp = (int) Time::toNum($rh['date_requested']);
                                        $d2temp = (int) Time::toNum($rh['date_due']);
                                        ?>
                                        <!--CREATES THE DATE_TEKA N-->
                                        <!--CREATES THE DATE_TEKA N-->
                                        <!--CREATES THE DATE_TEKA N-->
                                        <?php
                                        $amount_taken = $r->amount;

                                        $hcs = Resource_history::where('resource_id', "=", $r->id)->where('status', '=', 'Approved')->get();
                                        $datemp = 0;
                                        $dbtemp = 0;
                                        $datea = Time::toNum($rh['date_requested']);
                                        $dateb = Time::toNum($rh['date_due']);


                                        foreach ($hcs as $hc) {
                                            $datem = Time::toNum($hc->date_requested);
                                            $dbtemp = Time::toNum($hc->date_due);

                                            if (($datemp <= $datea && $datea <= $dbtemp) || ($datemp <= $dateb && $dateb <= $dbtemp) || ($datea <= $datemp && $dateb >= $dbtemp) || ($datemp <= $datea && $dateb <= $dbtemp)) {
                                                $amount_taken -= $hc->amount;
                                            }
                                        }
                                        ?>
                                        <!--CREATES THE DATE_TEKA N-->
                                        <!--CREATES THE DATE_TEKA N-->
                                        <!--CREATES THE DATE_TEKA N-->










                                        @if($date1 ==0 && $date2 ==0)
                                        <tr>
                                    <input type="hidden" class="form-control" name="request_group[]" value="{{$rh['id']}}">
                                    <td>{{$rh['id']}}</td>
                                       <?php $u = User::find($rh['user_id'])?>
                                    <td>{{$u->last_name.", ".$u->first_name}}</td>
                                    <td>{{$rh['date_requested']}}</td>
                                    <td>{{$rh['date_due']}}</td>
                                    <td>{{$rh['amount']}}</td>
                                    <td>{{$amount_taken}}</td>
                                    <td>
                                        @if($rh['amount'] <= $amount_taken)
                                        <input type="radio" class="" name="request_id" value="{{$rh['id']}}">
                                        @endif
                                    </td>

                                    <?php
                                    $date1 = $d1temp;
                                    $date2 = $d2temp;
                                    array_shift($rhs_copy);
                                    ?>




                                    @elseif(($d1temp <= $date1 && $date1 <= $d2temp)||($d1temp <= $date2 && $date2 <= $d2temp)
                                    ||($date1 <= $d1temp && $date2 >= $d2temp)||($d1temp <= $date1 && $date2 <= $d2temp))
                                    <input type="hidden" class="" name="request_group[]" value="{{$rh['id']}}">
                                    <td>{{$rh['id']}}</td>
                                    <?php $u = User::find($rh['user_id'])?>
                                    <td>{{$u->last_name.", ".$u->first_name}}</td>
                                    <td>{{$rh['date_requested']}}</td>
                                    <td>{{$rh['date_due']}}</td>
                                    <td>{{$rh['amount']}}</td>
                                    <td>{{$amount_taken}}</td>
                                    <td>

                                        @if($rh['amount'] <= $amount_taken)
                                        <input type="radio" class="" name="request_id" value="{{$rh['id']}}">
                                        @endif
                                    </td>
                                    <?php
                                    if ($date1 > $d1temp) {
                                        $date1 = $d1temp;
                                    }
                                    if ($date2 < $d2temp) {
                                        $date1 = $d1temp;
                                    }
                                    array_shift($rhs_copy);
//                                    array_shift($rhs_copy);
                                    ?>
                                    @else
                                    <?php
                                    array_push($rhs_copy, array_shift($rhs_copy));
                                    ?>

                                    @endif
                                    </tr>
                                    @endforeach




                <!--                                    <tr>
                                                       <td></td>
                                                       <td>Date Range of Requests</td>
                                                        <td>{{Time::toDate($d1temp)}}</td>
                                                        <td>{{Time::toDate($d2temp)}}</td>
                                                       <td></td>
                                                       <td></td>
                                                    </tr>-->
                                    <tr>
                                        <td></td>
                                        <td>Date Range of Approved</td>
                                        <td>{{Time::toDate($date1)}}</td>
                                        <td>{{Time::toDate($date2)}}</td>
                                        <td></td>
                                        <td></td>
                                        <td>

                                            <span class="btn-group btn-group-sm pull-right">
                                                <button class="btn btn-success">Submit</button>
                                            </span>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </form>
                        </div>
<?php }; ?>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <div class="btn-group btn-group-sm">
                <!--<button type="submit" class="btn btn-primary">Save changes</button>-->
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

            </div>
            </form>
        </div>
    </div>

</div>


@endif
@endforeach





<script>
    var options = {
        valueNames: ['list_name', 'list_status', 'list_category'],
//        plugins: [ListFuzzySearch()]
    };


//    $(".table").dataTable();

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
