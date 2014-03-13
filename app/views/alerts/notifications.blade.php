  <?php $notifications = System_log::where("target_id", "=", Auth::user()->id)->orderBy('created_at', 'desc')->take(10)->get()?>
<ul class="dropdown-menu long-down"  id="alert-notifications">
    @foreach($notifications as $n)
    <li>
        <a href="{{URL::to(strtolower(Auth::user()->job_title)."/notifications")}}">
            <div class="clearfix">
                <strong>{{$n->division}} {{$n->user_id}}</strong>
                <span class="pull-right text-muted">
                    <em>{{$n->created_at}}</em>
                </span>
            </div>
            <div>{{$n->action}}</div>
        </a>
    </li>
    <li class="divider"></li>
    @endforeach
    <li>
        <a class="text-center" href="{{URL::to(strtolower(Auth::user()->job_title)."/notifications")}}">
            <strong>View Notifications</strong>
            <i class="fa fa-angle-right"></i>
        </a>
    </li>
</ul>