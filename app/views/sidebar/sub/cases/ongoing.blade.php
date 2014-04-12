<!--<div class="panel panel-black">
    <div class="panel-heading">
        <h3 class="panel-title"><i class="fa fa-suitcase"></i> Ongoing Cases</h3>
    </div>-->
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
        <div style="height: 450px; overflow-y: scroll">
            @if(Auth::user()->job_title == "Chief" || Auth::user()->job_title == "Executive_Officer" )
            <?php $cases = Kase::where("status", "=", "Ongoing")->where("division", "=", Auth::user()->division)->get(); ?>
            @else
            <?php $cases = Kase::where("status", "=", "Ongoing")->where("agent_id", "=", Auth::user()->id)->where("division", "=", Auth::user()->division)->get(); ?>
            @endif
            
            <ul class="list list-unstyled ">
               @foreach($cases as $c) 
                   <?php
                $la = "";

                if ($case != null) {
                    if ($c->id == $case->id) {
                        $la = "active";
                    }
                }
                ?>
                <li class="  "><a  id="" href="{{URL::to(strtolower(Auth::user()->job_title).'/cases-ongoing/'.$c->id)}}" data-c_id="{{$c->id}}" class="list-group-item c_link {{$la}}">
                        <h4 class="list-group-item-heading list_name ">{{$c->name}}</h4>
                        <p class="list_created_at label label-info"><i class="fa fa-calendar"></i> {{$c->created_at}}</p>
                        
                        <p class=" list_details label label-success "><i class="fa fa-user"></i> {{$c->agent_id}}</p>
                        <p class="label label-primary bg-lightblue">{{$c->division}}</p>
                        <br>
                        <?php $case_type_tags = Case_type_tag::where("case_id", "=", $c->id)->get();?>
                        @foreach($case_type_tags as $ctt)
                        <p class="label label-primary bg-orange">
                            {{$ctt->type}}
                        </p> 
                        @endforeach
                    </a></li>
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
