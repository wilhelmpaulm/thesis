<?php $mrs = Message_recipient::where("user_id", "=", Auth::user()->id)->orderBy('created_at', 'desc')->take(10)->get();?>

<ul class="dropdown-menu long-down"  id="alert-messages">
    @foreach($mrs as $mr)
    <?php $ml = Message_log::where("message_id","=",$mr->message_id)->first()?>
    <?php $u = User::find($ml->user_id)?>
    <li >
        <a href="{{URL::to(strtolower(Auth::user()->job_title)."/messages/".$ml->message_id)}}">
            <div class="clearfix">
                <strong>{{$u->last_name.", ".$u->first_name}}</strong>
                <span class="pull-right text-muted">
                    <em>{{$ml->created_at}}</em>
                </span>
            </div> 
            <div>{{$ml->body}}</div>
        </a>
    </li>
    <li class="divider"></li>
    @endforeach
    <li>
        <a class="text-center" href="{{URL::to(strtolower(Auth::user()->job_title)."/messages")}}">
            <strong>Read All Messages</strong>
            <i class="fa fa-angle-right"></i>
        </a>
    </li>
</ul>