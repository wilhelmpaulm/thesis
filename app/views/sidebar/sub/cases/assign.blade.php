<!--<div class="panel panel-black">
    <div class="panel-heading">
        <h3 class="panel-title"><i class="fa fa-suitcase"></i> Pending Cases</h3>
    </div>-->
    <div  id="list_plug" class="list-group" >
        <div class="">
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
    <br>
        <div style="height: 60vh; overflow-y:auto; overflow-x: hidden">
            <?php $cases = Kase::where("status", "=", "Pending")->where("division", "=", Auth::user()->division)->get(); ?>
            <ul class="list list-unstyled sidebar-menu">
            @foreach($cases as $c) 
            <?php
            $la = "";
            $lo = "";

            if ($case != null) {
                if ($c->id == $case->id) {
                    $la = "active";
                    $lo = "bg-gray";
                }
            }
            ?>
            <li class="treeview {{$la}} {{$lo}}">
                <a href="#">
                    <div class="row">
                        <div class="col-lg-1">
                            <div>
                                <span class="label bg-teal">5</span>
                            </div>
                            <div>
                                <span class="label label-warning">5</span>
                            </div>

                        </div>
                        <div class="col-lg-10">

                            <span class="list_name"> {{$c->name}}</span>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-10 col-lg-offset-1">
                            <p class=" list_details label label-success "><i class="fa fa-user"></i> {{$c->agent_id}}</p>
                            <p class="label label-primary bg-lightblue ">{{$c->division}}</p>
                            <a   id="" href="{{URL::to(strtolower(Auth::user()->job_title).'/cases-assign/'.$c->id)}}" data-c_id="{{$c->id}}" class="list_name c_link {{$la}} label label-default">CASE {{$c->id}}</a>
                        </div>
                    </div>

                    <br>
                </a>
                <ul class="treeview-menu">
                    <div class="row">
                        <div class="col-lg-offset-1 col-lg-10">
                            
                            <p class="list_created_at label label-info"><i class="fa fa-calendar"></i> {{$c->created_at}}</p>
                            <?php $case_type_tags = Case_type_tag::where("case_id", "=", $c->id)->get(); ?>
                            @foreach($case_type_tags as $ctt)
                            <p class="label label-primary bg-orange">
                                {{$ctt->type}}
                            </p> 
                            @endforeach
                        </div >
                           <br>
                    </div >
                </ul>
            </li>
            
            @endforeach
        </ul>

        </div>

    </div>
<!--</div>-->

<script>
    var options = {
        valueNames: ['list_name', 'list_created_at', 'list_details']
    };

    var userList = new List('list_plug', options);


</script>
