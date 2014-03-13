<div class="panel panel-black">
    <div class="panel-heading">
        <h3 class="panel-title"> {{Auth::user()->division}} Secretary {{Auth::user()->id}}<a href="#" type="button" class="text-right pull-right" data-toggle="collapse" data-target="#sb-content"><i class="fa fa-bars"></i></a>  </h3>

    </div>
    <div class="list-group ">
    <!--<a href="#" type="button" class="list-group-item text-right" data-toggle="collapse" data-target="#sb-content"><i class="fa fa-bars"></i></a>-->
        <div id="sb-content" class="collapse in">

            <a href="{{URL::to("secretary/dashboard")}}" class="list-group-item "><i class="fa fa-dashboard"></i> Dashboard</a>
            <a href="{{URL::to("secretary/calendar")}}" class="list-group-item "><i class="fa fa-calendar"></i> Calendar</a>
            <a href="{{URL::to("secretary/messages")}}" class="list-group-item "><i class="fa fa-envelope"></i> Messages</a>
            <a href="{{URL::to("secretary/agents")}}" class="list-group-item "><i class="fa fa-shield"></i> Agents</a>
            <a href="{{URL::to("secretary/clients")}}" class="list-group-item "><i class="fa fa-users"></i> Clients</a>

<!--        <a href="#" type="button" class="list-group-item" data-toggle="collapse" data-target="#messages"><i class="fa fa-envelope"></i> Messages</a>
<div id="messages" class="collapse ">
    <a href="{{URL::to("/dashboard")}}" class="list-group-item " style=""><i class="fa fa-chevron-right"></i> Compose</a>
    <a href="{{URL::to("/dashboard")}}" class="list-group-item " style=""><i class="fa fa-chevron-right"></i> Inbox</a>
</div>-->

            <a href="#" type="button" class="list-group-item" data-toggle="collapse" data-target="#cases"><i class="fa fa-suitcase"></i> Cases</a>
            <div id="cases" class="collapse ">
                <a href="{{URL::to("secretary/cases-list")}}" class="list-group-item " style=""><i class="fa fa-chevron-right"></i> Case List</a>
                <a href="{{URL::to("secretary/cases-add")}}" class="list-group-item " style=""><i class="fa fa-chevron-right"></i> Continue Complaint</a>
            </div>
            <a href="#" type="button" class="list-group-item" data-toggle="collapse" data-target="#resources"><i class="fa fa-list-alt"></i> Resources</a>
            <div id="resources" class="collapse">
                <a href="{{URL::to("secretary/resources-list")}}" class="list-group-item " style=""><i class="fa fa-chevron-right"></i> Resource List</a>
            </div>
           
            <!--<a href="{{URL::to('secretary/reports')}}" class="list-group-item"><i class="fa fa-book"></i> Reports</a>-->
            <a href="{{URL::to('secretary/notifications')}}" class="list-group-item"><i class="fa fa-bullhorn"></i> Notifications</a>

        </div>
    </div>
</div>
