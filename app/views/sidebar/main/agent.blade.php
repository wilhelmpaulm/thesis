<!--<div class="panel panel-primary">-->
<div class="panel panel-black">
    <div class="panel-heading">
        <h3 class="panel-title"> {{Auth::user()->division}} Agent {{Auth::user()->last_name}} {{Auth::user()->first_name}}<a href="#" type="button" class="text-right pull-right" data-toggle="collapse" data-target="#sb-content"><i class="fa fa-bars"></i></a>  </h3>

    </div>
    <div class="panel-body">
        <ul class="nav nav-pills ">
            <li class="active"><a href="#main" data-toggle="tab">Main</a></li>
            <li class="hide"><a id="subheading" href="#sub" data-toggle="tab" >Sub</a></li>
            <li class="pull-right"><a href="#search" data-toggle="tab"><i class="fa fa-search"></i></a></li>
        </ul>
        <br>
        <div class="tab-content">
            <div class="tab-pane active" id="main">
                <div class="list-group ">
                <!--<a href="#" type="button" class="list-group-item text-right" data-toggle="collapse" data-target="#sb-content"><i class="fa fa-bars"></i></a>-->
                    <div id="sb-content" class="collapse in">

                        <a href="{{URL::to("agent/dashboard")}}" class="list-group-item "><i class="fa fa-dashboard"></i> Dashboard</a>
                        <a href="{{URL::to("agent/calendar")}}" class="list-group-item "><i class="fa fa-calendar"></i> Calendar</a>
                        <a href="{{URL::to("agent/messages")}}" class="list-group-item "><i class="fa fa-envelope"></i> Messages</a>
                        <a href="{{URL::to("agent/agents")}}" class="list-group-item "><i class="fa fa-shield"></i> Employees</a>
                        <a href="{{URL::to("agent/clients")}}" class="list-group-item "><i class="fa fa-users"></i> Clients</a>

<!--        <a href="#" type="button" class="list-group-item" data-toggle="collapse" data-target="#messages"><i class="fa fa-envelope"></i> Messages</a>
<div id="messages" class="collapse ">
    <a href="{{URL::to("/dashboard")}}" class="list-group-item " style=""><i class="fa fa-chevron-right"></i> Compose</a>
    <a href="{{URL::to("/dashboard")}}" class="list-group-item " style=""><i class="fa fa-chevron-right"></i> Inbox</a>
</div>-->

                        <a href="#" type="button" class="list-group-item" data-toggle="collapse" data-target="#cases"><i class="fa fa-suitcase"></i> Cases</a>
                        <div id="cases" class="collapse ">
                            <a href="{{URL::to("agent/cases-list")}}" class="list-group-item " style=""><i class="fa fa-chevron-right"></i> Case List</a>
                            <a href="{{URL::to("agent/cases-add")}}" class="list-group-item " style=""><i class="fa fa-chevron-right"></i> Add Complaint</a>
                            <!--<a href="{{URL::to("agent/cases-pending")}}" class="list-group-item " style=""><i class="fa fa-chevron-right"></i> Pending</a>-->
                            <a href="{{URL::to("agent/cases-ongoing")}}" class="list-group-item " style=""><i class="fa fa-chevron-right"></i> Ongoing</a>
                            <a href="{{URL::to("agent/cases-closed")}}" class="list-group-item " style=""><i class="fa fa-chevron-right"></i> Closed</a>
                            <a href="{{URL::to("agent/cases-non-viable")}}" class="list-group-item " style=""><i class="fa fa-chevron-right"></i> Non-viable</a>
                        </div>
                        <a href="#" type="button" class="list-group-item" data-toggle="collapse" data-target="#resources"><i class="fa fa-list-alt"></i> Resources</a>
                        <div id="resources" class="collapse">
                            <a href="{{URL::to("agent/resources-list")}}" class="list-group-item " style=""><i class="fa fa-chevron-right"></i> Resource List</a>
                            <a href="{{URL::to("agent/resources-request")}}" class="list-group-item " style=""><i class="fa fa-chevron-right"></i> Request</a>
                            <!--<a href="{{URL::to("agent/resources-approval")}}" class="list-group-item " style=""><i class="fa fa-chevron-right"></i> Approve</a>-->
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
                            <a href="{{URL::to("agent/reports-case-timeline-comparison")}}" class="list-group-item " style=""><i class="fa fa-chevron-right"></i> Timeline Comparison</a>
                        </div>
                        <a href="#" type="button" class="list-group-item" data-toggle="collapse" data-target="#forms"><i class="fa fa-file"></i> Forms</a>
                        <div id="forms" class="collapse">
                            <a href="{{URL::to("agent/form-subpoena")}}" class="list-group-item " style=""><i class="fa fa-chevron-right"></i> Subpoena</a>
                            <a href="{{URL::to("agent/form-coordination")}}" class="list-group-item " style=""><i class="fa fa-chevron-right"></i> Coordination</a>
                            <a href="{{URL::to("agent/form-disposition")}}" class="list-group-item " style=""><i class="fa fa-chevron-right"></i> Disposition</a>
                            <a href="{{URL::to("agent/form-transmital")}}" class="list-group-item " style=""><i class="fa fa-chevron-right"></i> Transmittal</a>
                        </div>

 <!--<a href="{{URL::to('agent/reports')}}" class="list-group-item"><i class="fa fa-book"></i> Reports</a>-->
                        <a href="{{URL::to('agent/notifications')}}" class="list-group-item"><i class="fa fa-bullhorn"></i> Notifications</a>


                    </div>
                </div>
            </div>
            <div class="tab-pane" id="sub"></div>
            <div class="tab-pane" id="search"></div>

        </div>
    </div>
</div>
