<div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title"><i class="fa fa-shield"></i> {{Auth::user()->division}} Agent {{Auth::user()->id}}<a href="#" type="button" class="text-right pull-right" data-toggle="collapse" data-target="#sb-content"><i class="fa fa-bars"></i></a>  </h3>
          
    </div>

    <div class="list-group ">
        
        <div id="sb-content" class="collapse in">

            <a href="{{URL::to("agent/dashboard")}}" class="list-group-item "><i class="fa fa-dashboard"></i> Dashboard</a>
            <a href="{{URL::to("agent/calendar")}}" class="list-group-item "><i class="fa fa-calendar"></i> Calendar</a>
            <a href="{{URL::to("agent/messages")}}" class="list-group-item "><i class="fa fa-envelope"></i> Messages</a>

<!--        <a href="#" type="button" class="list-group-item" data-toggle="collapse" data-target="#messages"><i class="fa fa-envelope"></i> Messages</a>
<div id="messages" class="collapse ">
    <a href="{{URL::to("/dashboard")}}" class="list-group-item " style=""><i class="fa fa-chevron-right"></i> Compose</a>
    <a href="{{URL::to("/dashboard")}}" class="list-group-item " style=""><i class="fa fa-chevron-right"></i> Inbox</a>
</div>-->

             <a href="#" type="button" class="list-group-item" data-toggle="collapse" data-target="#cases"><i class="fa fa-suitcase"></i> Cases</a>
            <div id="cases" class="collapse ">
                <a href="{{URL::to("agent/cases-add")}}" class="list-group-item " style=""><i class="fa fa-chevron-right"></i> Add Complaint</a>
                <a href="{{URL::to("agent/cases-pending")}}" class="list-group-item " style=""><i class="fa fa-chevron-right"></i> Pending</a>
                <a href="{{URL::to("agent/cases-ongoing")}}" class="list-group-item " style=""><i class="fa fa-chevron-right"></i> Ongoing</a>
                <a href="{{URL::to("agent/cases-closed")}}" class="list-group-item " style=""><i class="fa fa-chevron-right"></i> Closed</a>
                <a href="{{URL::to("agent/cases-non-viable")}}" class="list-group-item " style=""><i class="fa fa-chevron-right"></i> Non-viable</a>
            </div>
            <a href="#" type="button" class="list-group-item" data-toggle="collapse" data-target="#resources"><i class="fa fa-list-alt"></i> Resources</a>
            <div id="resources" class="collapse">
                <a href="{{URL::to("agent/resources-request")}}" class="list-group-item " style=""><i class="fa fa-chevron-right"></i> Request</a>
                <a href="{{URL::to("agent/resources-current")}}" class="list-group-item " style=""><i class="fa fa-chevron-right"></i> Current / History</a>
            </div>
             <a href="#" type="button" class="list-group-item" data-toggle="collapse" data-target="#reports"><i class="fa fa-book"></i> Reports</a>
            <div id="reports" class="collapse">
                <a href="{{URL::to("agent/reports-agents")}}" class="list-group-item " style=""><i class="fa fa-chevron-right"></i> Agents</a>
                <a href="{{URL::to("agent/reports-complaints")}}" class="list-group-item " style=""><i class="fa fa-chevron-right"></i> Cases</a>
                <a href="{{URL::to("agent/reports-trends")}}" class="list-group-item " style=""><i class="fa fa-chevron-right"></i> Trends</a>
                <a href="{{URL::to("agent/reports-demographics")}}" class="list-group-item " style=""><i class="fa fa-chevron-right"></i> Demographics Victims</a>
                <a href="{{URL::to("agent/reports-demographics-subjects")}}" class="list-group-item " style=""><i class="fa fa-chevron-right"></i> Demographics Subjects</a>
                <a href="{{URL::to("agent/reports-locations")}}" class="list-group-item " style=""><i class="fa fa-chevron-right"></i> Locations</a>
            </div>
            <a href="#" type="button" class="list-group-item" data-toggle="collapse" data-target="#forms"><i class="fa fa-file"></i> Form Generation</a>
            <div id="forms" class="collapse">
                <a href="{{URL::to("agent/form-subpoena")}}" class="list-group-item " style=""><i class="fa fa-chevron-right"></i> Subpoena</a>
                <a href="{{URL::to("agent/form-subpoena")}}" class="list-group-item " style=""><i class="fa fa-chevron-right"></i> Coordination</a>
            </div>
            <a href="#" type="button" class="list-group-item" data-toggle="collapse" data-target="#directory"><i class="fa fa-group"></i> Directory</a>
            <div id="directory" class="collapse">
                <a href="{{URL::to("agent/directory-sis")}}" class="list-group-item " style=""><i class="fa fa-chevron-right"></i> SIS</a>
                <a href="{{URL::to("agent/directory-clients")}}" class="list-group-item " style=""><i class="fa fa-chevron-right"></i> Clients</a>
            </div>
            <!--<a href="{{URL::to('agent/reports')}}" class="list-group-item"><i class="fa fa-book"></i> Reports</a>-->
            <a href="{{URL::to('agent/notifications')}}" class="list-group-item"><i class="fa fa-bullhorn"></i> Notifications</a>

        </div>
    </div>
</div>
