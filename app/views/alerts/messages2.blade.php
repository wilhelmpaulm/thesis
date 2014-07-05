<?php $mrs = Message_recipient::where("user_id", "=", Auth::user()->id)->orderBy('created_at', 'desc')->take(10)->get(); ?>
<?php $count  = $mrs->count();?>



<ul class="dropdown-menu long-down"  id="alert-messages">
    @if($count == 0)
    <li class="header">You have no message</li>
    @elseif($count == 1)
    <li class="header">You have {{$count}} message</li>
    @else
    <li class="header">You have {{$count}} messages</li>
    @endif
    <li>
        <!-- inner menu: contains the actual data -->
        <ul class="menu">
            @foreach($mrs as $mr)
            <?php $ml = Message_log::where("message_id", "=", $mr->message_id)->first() ?>
            <?php $u = User::find($ml->user_id) ?>
            <li><!-- start message -->
                <a href="{{URL::to(strtolower(Auth::user()->job_title)."/messages/".$ml->message_id)}}">
                    <div class="pull-left">
                        <img src="{{asset('nbi/agent/picture/'.$u->file_picture)}}" class="img-circle" alt="User Image"/>
                    </div>
                    <h4>
                        {{$u->last_name.", ".$u->first_name}}
                    </h4>
                    <p>
                        <small><i class="fa fa-clock-o"></i> {{$ml->created_at}}</small>
                        <br>
                        
                        {{$ml->body}}
                        
                    </p>
                    
                </a>
            </li><!-- end message -->
            @endforeach 
        </ul>
    </li>
    <li class="footer"><a href="{{URL::to(strtolower(Auth::user()->job_title)."/messages")}}">See All Messages</a></li>
</ul>