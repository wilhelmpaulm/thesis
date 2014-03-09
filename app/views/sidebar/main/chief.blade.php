<div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title"><i class="fa fa-shield"></i> {{Auth::user()->division}} Chief {{Auth::user()->id}}<a href="#" type="button" class="text-right pull-right" data-toggle="collapse" data-target="#sb-content"><i class="fa fa-bars"></i></a>  </h3>

    </div>
    <div class="list-group ">
    <!--<a href="#" type="button" class="list-group-item text-right" data-toggle="collapse" data-target="#sb-content"><i class="fa fa-bars"></i></a>-->
        <div id="sb-content" class="collapse in">

            <a href="{{URL::to("chief/dashboard")}}" class="list-group-item "><i class="fa fa-dashboard"></i> Dashboard</a>
            <a href="{{URL::to("chief/calendar")}}" class="list-group-item "><i class="fa fa-calendar"></i> Calendar</a>
            <a href="{{URL::to("chief/messages")}}" class="list-group-item "><i class="fa fa-envelope"></i> Messages</a>

<!--        <a href="#" type="button" class="list-group-item" data-toggle="collapse" data-target="#messages"><i class="fa fa-envelope"></i> Messages</a>
<div id="messages" class="collapse ">
    <a href="{{URL::to("/dashboard")}}" class="list-group-item " style=""><i class="fa fa-chevron-right"></i> Compose</a>
    <a href="{{URL::to("/dashboard")}}" class="list-group-item " style=""><i class="fa fa-chevron-right"></i> Inbox</a>
</div>-->

            <a href="#" type="button" class="list-group-item" data-toggle="collapse" data-target="#cases"><i class="fa fa-suitcase"></i> Cases</a>
            <div id="cases" class="collapse ">
                <a href="{{URL::to("chief/cases-add")}}" class="list-group-item " style=""><i class="fa fa-chevron-right"></i> Add Complaint</a>
                <a href="{{URL::to("chief/cases-assign")}}" class="list-group-item " style=""><i class="fa fa-chevron-right"></i> Assign Case</a>
                <a href="{{URL::to("chief/cases-pending")}}" class="list-group-item " style=""><i class="fa fa-chevron-right"></i> Pending</a>
                <a href="{{URL::to("chief/cases-ongoing")}}" class="list-group-item " style=""><i class="fa fa-chevron-right"></i> Ongoing</a>
                <a href="{{URL::to("chief/cases-closed")}}" class="list-group-item " style=""><i class="fa fa-chevron-right"></i> Closed</a>
                <a href="{{URL::to("chief/cases-non-viable")}}" class="list-group-item " style=""><i class="fa fa-chevron-right"></i> Non-viable</a>
            </div>
            <a href="#" type="button" class="list-group-item" data-toggle="collapse" data-target="#resources"><i class="fa fa-list-alt"></i> Resources</a>
            <div id="resources" class="collapse">
                <a href="{{URL::to("chief/resources-request")}}" class="list-group-item " style=""><i class="fa fa-chevron-right"></i> Request</a>
                <a href="{{URL::to("chief/resources-approval")}}" class="list-group-item " style=""><i class="fa fa-chevron-right"></i> Approve</a>
                <a href="{{URL::to("chief/resources-current")}}" class="list-group-item " style=""><i class="fa fa-chevron-right"></i> Current / History</a>
            </div>
            <a href="#" type="button" class="list-group-item" data-toggle="collapse" data-target="#reports"><i class="fa fa-book"></i> Reports</a>
            <div id="reports" class="collapse">
                <a href="{{URL::to("chief/reports-agents")}}" class="list-group-item " style=""><i class="fa fa-chevron-right"></i> Agents</a>
                <a href="{{URL::to("chief/reports-complaints")}}" class="list-group-item " style=""><i class="fa fa-chevron-right"></i> Cases</a>
                <a href="{{URL::to("chief/reports-trends")}}" class="list-group-item " style=""><i class="fa fa-chevron-right"></i> Trends</a>
                <a href="{{URL::to("chief/reports-demographics")}}" class="list-group-item " style=""><i class="fa fa-chevron-right"></i> Demographics Victims</a>
                <a href="{{URL::to("chief/reports-demographics-subjects")}}" class="list-group-item " style=""><i class="fa fa-chevron-right"></i> Demographics Subjects</a>
                <a href="{{URL::to("chief/reports-locations")}}" class="list-group-item " style=""><i class="fa fa-chevron-right"></i> Locations</a>
            </div>
            <a href="#" type="button" class="list-group-item" data-toggle="collapse" data-target="#directory"><i class="fa fa-group"></i> Directory</a>
            <div id="directory" class="collapse">
                <a href="{{URL::to("chief/directory-sis")}}" class="list-group-item " style=""><i class="fa fa-chevron-right"></i> SIS</a>
                <a href="{{URL::to("chief/directory-clients")}}" class="list-group-item " style=""><i class="fa fa-chevron-right"></i> Clients</a>
            </div>
            <!--<a href="{{URL::to('chief/reports')}}" class="list-group-item"><i class="fa fa-book"></i> Reports</a>-->
            <a href="{{URL::to('chief/notifications')}}" class="list-group-item"><i class="fa fa-bullhorn"></i> Notifications</a>

        </div>
    </div>
</div>
