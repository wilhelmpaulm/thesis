<div class="list-group">
    <a href="#" type="button" class="list-group-item text-right" data-toggle="collapse" data-target="#sb-content"><i class="fa fa-bars"></i></a>
    <div id="sb-content" class="collapse in">

        <a href="{{URL::to("agent/dashboard")}}" class="list-group-item "><i class="fa fa-dashboard"></i> Dashboard</a>
        <a href="{{URL::to("agent/calendar")}}" class="list-group-item "><i class="fa fa-calendar"></i> Calendar</a>
        
        <a href="#" type="button" class="list-group-item" data-toggle="collapse" data-target="#messages"><i class="fa fa-envelope"></i> Messages</a>
        <div id="messages" class="collapse ">
            <a href="{{URL::to("/dashboard")}}" class="list-group-item " style=""><i class="fa fa-chevron-right"></i> Compose</a>
            <a href="{{URL::to("/dashboard")}}" class="list-group-item " style=""><i class="fa fa-chevron-right"></i> Inbox</a>
        </div>

        <a href="#" type="button" class="list-group-item" data-toggle="collapse" data-target="#cases"><i class="fa fa-suitcase"></i> Cases</a>
        <div id="cases" class="collapse">
            <a href="{{URL::to("agent/cases-add")}}" class="list-group-item " style=""><span style="margin-left: 20px"><i class="fa fa-chevron-right"></i> Add Complaint</span></a>
            <a href="{{URL::to("agent/cases-pending")}}" class="list-group-item " style=""><span style="margin-left: 20px"><i class="fa fa-chevron-right"></i> Pending</span></a>
            <a href="{{URL::to("agent/cases-ongoing")}}" class="list-group-item " style=""><span style="margin-left: 20px"><i class="fa fa-chevron-right"></i> Ongoing</span></a>
            <a href="{{URL::to("agent/cases-closed")}}" class="list-group-item " style=""><span style="margin-left: 20px"><i class="fa fa-chevron-right"></i> Closed</span></a>
            <a href="{{URL::to("agent/cases-non-viable")}}" class="list-group-item " style=""><span style="margin-left: 20px"><i class="fa fa-chevron-right"></i> Non-viable</span></a>
        </div>
        <a href="#" type="button" class="list-group-item" data-toggle="collapse" data-target="#resources"><i class="fa fa-list-alt"></i> Resources</a>
        <div id="resources" class="collapse">
            <a href="{{URL::to("/resources-request")}}" class="list-group-item " style=""><i class="fa fa-chevron-right"></i> Request</a>
            <a href="{{URL::to("/resources-current")}}" class="list-group-item " style=""><i class="fa fa-chevron-right"></i> Current</a>
            <a href="{{URL::to("/resources-history")}}" class="list-group-item " style=""><i class="fa fa-chevron-right"></i> History</a>
        </div>
        <a href="#" type="button" class="list-group-item" data-toggle="collapse" data-target="#directory"><i class="fa fa-group"></i> Directory</a>
        <div id="directory" class="collapse">
            <a href="{{URL::to("/dashboard")}}" class="list-group-item " style=""><i class="fa fa-chevron-right"></i> SIS</a>
            <a href="{{URL::to("/dashboard")}}" class="list-group-item " style=""><i class="fa fa-chevron-right"></i> Clients</a>
        </div>
        <a href="#" class="list-group-item"><i class="fa fa-book"></i> Reports</a>
        <a href="#" class="list-group-item"><i class="fa fa-bullhorn"></i> Notifications</a>
        
    </div>
</div>
