<div class="list-group">
    <a href="{{URL::to("/dashboard")}}" class="list-group-item "><i class="fa fa-dashboard"></i> Dashboard</a>
    <a href="#" type="button" class="list-group-item" data-toggle="collapse" data-target="#messages"><i class="fa fa-envelope"></i> Messages</a>
    <div id="messages" class="collapse ">
        <a href="{{URL::to("/dashboard")}}" class="list-group-item " style=""><i class="fa fa-chevron-right"></i> Compose</a>
        <a href="{{URL::to("/dashboard")}}" class="list-group-item " style=""><i class="fa fa-chevron-right"></i> Inbox</a>
    </div>
    <!--<a href="#" id="toggle-messages" class="list-group-item"><i class="fa fa-envelope"></i> Messages </a>-->
    <a href="#" type="button" class="list-group-item" data-toggle="collapse" data-target="#cases"><i class="fa fa-suitcase"></i> Cases</a>
    <div id="cases" class="collapse">
        <a href="{{URL::to("/dashboard")}}" class="list-group-item " style=""><i class="fa fa-chevron-right"></i> Create new</a>
        <a href="{{URL::to("/dashboard")}}" class="list-group-item " style=""><i class="fa fa-chevron-right"></i> Pending</a>
        <a href="{{URL::to("/dashboard")}}" class="list-group-item " style=""><i class="fa fa-chevron-right"></i> On going</a>
        <a href="{{URL::to("/dashboard")}}" class="list-group-item " style=""><i class="fa fa-chevron-right"></i> Closed</a>
        <a href="{{URL::to("/dashboard")}}" class="list-group-item " style=""><i class="fa fa-chevron-right"></i> Non-viable</a>
    </div>
    <a href="{{URL::to("/")}}" class="list-group-item"><i class="fa fa-list-alt"></i>  Resources</a>
    <a href="#" class="list-group-item"><i class="fa fa-book"></i> Reports</a>
    <a href="#" class="list-group-item"><i class="fa fa-bell"></i> Alerts</a>
</div>
