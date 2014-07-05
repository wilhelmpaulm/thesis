<ul class="sidebar-menu ">
    <li>
        <a href="{{URL::to("chief/dashboard")}}" class=""><i class="fa fa-dashboard"></i> Dashboard</a>
    </li>
    <li>
        <a href="{{URL::to("chief/calendar")}}" class=""><i class="fa fa-calendar"></i> Calendar</a>
    </li>
    <li>
        <a href="{{URL::to("chief/messages")}}" class=""><i class="fa fa-envelope"></i> Messages</a>
    </li>
    <li>
        <a href="{{URL::to("chief/agents")}}" class=""><i class="fa fa-shield"></i> Employees</a>
    </li>
    <li>
        <a href="{{URL::to("chief/clients")}}" class=""><i class="fa fa-users"></i> Clients</a>
    </li>


    <li class="treeview">
        <a href="#">
            <i class="fa fa-bar-chart-o"></i>
            <span>Cases</span>
            <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
            <li><a href="{{URL::to("agent/cases-list")}}"  style=""><i class="fa fa-angle-double-right"></i> Case List</a></li>
            <li> <a href="{{URL::to("agent/cases-add")}}" style=""><i class="fa fa-angle-double-right"></i> Add Complaint</a></li>
            <!--<a href="{{URL::to("agent/cases-pending")}}" class="list-group-item " style=""><i class="fa fa-chevron-right"></i> Pending</a>-->
            <li> <a href="{{URL::to("agent/cases-ongoing")}}" style=""><i class="fa fa-angle-double-right"></i> Ongoing</a></li>
            <li><a href="{{URL::to("agent/cases-closed")}}"  style=""><i class="fa fa-angle-double-right"></i> Closed</a></li>
            <li><a href="{{URL::to("agent/cases-non-viable")}}" style=""><i class="fa fa-angle-double-right"></i> Non-viable</a></li>
        </ul>
    </li>
    <li class="treeview">
        <a href="#">
            <i class="fa fa-laptop"></i>
            <span>Resources</span>
            <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
            <li><a href="{{URL::to("chief/resources-list")}}" class="" style=""><i class="fa fa-angle-double-right"></i> Resource List</a></li>
            <li>    <a href="{{URL::to("chief/resources-request")}}" class="" style=""><i class="fa fa-angle-double-right"></i> Request</a></li>
            <li>     <a href="{{URL::to("chief/resources-approval")}}" class="" style=""><i class="fa fa-angle-double-right"></i> Approve</a></li>
            <li>  <a href="{{URL::to("chief/resources-current")}}" class="" style=""><i class="fa fa-angle-double-right"></i> Current / History</a></li>
        </ul>
    </li>


    <li class="treeview ">
        <a href="#">
            <i class="fa fa-folder"></i> <span>Reports</span>
            <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
            <li><a href="{{URL::to("chief/reports-agents")}}" class="" style=""><i class="fa fa-angle-double-right"></i> Agents</a></li>
            <li> <a href="{{URL::to("chief/reports-complaints")}}" class="" style=""><i class="fa fa-angle-double-right"></i> Cases</a></li>
            <li><a href="{{URL::to("chief/reports-trends")}}" class="" style=""><i class="fa fa-angle-double-right"></i> Trends</a></li>
            <li> <a href="{{URL::to("chief/reports-demographics")}}" class="" style=""><i class="fa fa-angle-double-right"></i> Demographics Victims</a></li>
            <li><a href="{{URL::to("chief/reports-demographics-subjects")}}" class="" style=""><i class="fa fa-angle-double-right"></i> Demographics Subjects</a></li>
            <li><a href="{{URL::to("chief/reports-locations")}}" class="" style=""><i class="fa fa-angle-double-right"></i> Locations</a></li>
            <li> <a href="{{URL::to("chief/reports-case-timeline-comparison")}}" class="" style=""><i class="fa fa-angle-double-right"></i> Timeline Comparison</a></li>
        </ul>
    </li>
    <li class="treeview">
        <a href="#">
            <i class="fa fa-edit"></i> <span>Forms</span>
            <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
            <li><a href="{{URL::to("chief/form-list")}}" class="" style=""><i class="fa fa-angle-double-right"></i> Form List</a></li>
            <li> <a href="{{URL::to("chief/form-subpoena")}}" class="" style=""><i class="fa fa-angle-double-right"></i> Subpoena</a></li>
            <li><a href="{{URL::to("chief/form-coordination")}}" class="" style=""><i class="fa fa-angle-double-right"></i> Coordination</a></li>
            <li><a href="{{URL::to("chief/form-disposition")}}" class="" style=""><i class="fa fa-angle-double-right"></i> Disposition</a></li>
            <li><a href="{{URL::to("chief/form-transmital")}}" class="" style=""><i class="fa fa-angle-double-right"></i> Transmittal</a></li>                        
        </ul>
    </li>

</ul>