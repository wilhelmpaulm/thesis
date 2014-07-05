<ul class="sidebar-menu ">
    <li>
        <a href="../../index.html">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
        </a>
    </li>
    <li>
        <a href="../widgets.html">
            <i class="fa fa-th"></i> <span>Widgets</span> <small class="badge pull-right bg-green">new</small>
        </a>
    </li>
    <li class="treeview">
        <a href="#">
            <i class="fa fa-bar-chart-o"></i>
            <span>Charts</span>
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
            <span>UI Elements</span>
            <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
            <li><a href="../UI/general.html"><i class="fa fa-angle-double-right"></i> General</a></li>
            <li><a href="../UI/icons.html"><i class="fa fa-angle-double-right"></i> Icons</a></li>
            <li><a href="../UI/buttons.html"><i class="fa fa-angle-double-right"></i> Buttons</a></li>
            <li><a href="../UI/sliders.html"><i class="fa fa-angle-double-right"></i> Sliders</a></li>
            <li><a href="../UI/timeline.html"><i class="fa fa-angle-double-right"></i> Timeline</a></li>
        </ul>
    </li>
    <li class="treeview">
        <a href="#">
            <i class="fa fa-edit"></i> <span>Forms</span>
            <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
            <li><a href="../forms/general.html"><i class="fa fa-angle-double-right"></i> General Elements</a></li>
            <li><a href="../forms/advanced.html"><i class="fa fa-angle-double-right"></i> Advanced Elements</a></li>
            <li><a href="../forms/editors.html"><i class="fa fa-angle-double-right"></i> Editors</a></li>                                
        </ul>
    </li>
    <li class="treeview">
        <a href="#">
            <i class="fa fa-table"></i> <span>Tables</span>
            <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
            <li><a href="../tables/simple.html"><i class="fa fa-angle-double-right"></i> Simple tables</a></li>
            <li><a href="../tables/data.html"><i class="fa fa-angle-double-right"></i> Data tables</a></li>
        </ul>
    </li>
    <li>
        <a href="../calendar.html">
            <i class="fa fa-calendar"></i> <span>Calendar</span>
            <small class="badge pull-right bg-red">3</small>
        </a>
    </li>
    <li>
        <a href="../mailbox.html">
            <i class="fa fa-envelope"></i> <span>Mailbox</span>
            <small class="badge pull-right bg-yellow">12</small>
        </a>
    </li>
    <li class="treeview active">
        <a href="#">
            <i class="fa fa-folder"></i> <span>Examples</span>
            <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
            <li><a href="invoice.html"><i class="fa fa-angle-double-right"></i> Invoice</a></li>
            <li><a href="login.html"><i class="fa fa-angle-double-right"></i> Login</a></li>
            <li><a href="register.html"><i class="fa fa-angle-double-right"></i> Register</a></li>
            <li><a href="lockscreen.html"><i class="fa fa-angle-double-right"></i> Lockscreen</a></li>
            <li><a href="404.html"><i class="fa fa-angle-double-right"></i> 404 Error</a></li>
            <li><a href="500.html"><i class="fa fa-angle-double-right"></i> 500 Error</a></li>                                
            <li class="active"><a href="blank.html"><i class="fa fa-angle-double-right"></i> Blank Page</a></li>
        </ul>
    </li>
</ul>