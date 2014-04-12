<div class="row">



    <!--END OF MESSAGES-->
    <!--END OF MESSAGES-->
    <!--END OF MESSAGES-->
    <div class="col-lg-4">
        <div class="panel panel-black">
            <div class="panel-heading">
                <h3 class="panel-title">Message Info</h3>
            </div>
            <div class="panel-body">
                <p ><i class="fa fa-envelope"></i> {{$message->subject}}</p>
                <hr>
                <p ><i class="fa fa-calendar"></i> {{$message->created_at}}</p>
                <hr>
                <?php $umr = User::find($message->sender) ?>
                
                <p ><i class="fa fa-user"></i> Sender <br> {{" ".$umr->last_name.", ".$umr->first_name}}</p>
                <!--<p ><i class="fa fa-user"></i> {{$message->sender}}</p>-->
                <hr>
                <p ><i class="fa fa-group"></i> Recipient/s</p>
                @foreach($message_recipients as $mr)
                @if($mr->user_id != $message->sender)
                <?php $umr = User::find($mr->user_id) ?>
                <p > {{" ".$umr->last_name.", ".$umr->first_name}}</p>
                @endif
                @endforeach
            </div>
        </div>
    </div>
    <!--END OF MESSAGES-->
    <!--END OF MESSAGES-->
    <!--END OF MESSAGES-->
    <div class="col-lg-8">
        <div class="panel panel-black">
            <div class="panel-heading">
                <h3 class="panel-title">Subject - {{$message->subject}}</h3>
            </div>
            <div class="panel-body" style="max-height: 450px; overflow: auto">
                <ul class="media-list">
                    @foreach($message_logs as $ml)
                    <?php $u = User::find($ml->user_id) ?>
                    @if($ml->user_id != Auth::user()->id)
                    <li class="media ">
                        <a class="pull-left" href="#">
                            <img class="media-object img-mess img-circle" src="{{URL::asset('nbi/agent/picture/'.$u->file_picture)}}" alt="" >
                        </a>
                        <div class="media-body">
                            <h4 class="media-heading   label label-primary">{{$u->last_name.", ".$u->first_name}}</h4>
                            <p class="label label-info"> {{$ml->created_at}}</p>
                            <p>{{$ml->body}}</p>
                        </div>
                    </li>
                    @else
                    <li class="media ">
                        <a class="pull-right clearfix " href="#">
                            <img class="media-object img-mess img-circle " src="{{URL::asset('nbi/agent/picture/'.$u->file_picture)}}" alt="" >
                        </a>
                        <div class="media-body">
                          
                            <h4 class="media-heading   label label-primary">{{$u->last_name.", ".$u->first_name}}</h4>
                            <p class="label label-info"> {{$ml->created_at}}</p>
                            <p >{{$ml->body}}</p>
                            <hr>
                        </div>
                    </li>
                    @endif
                    @endforeach
                </ul>


            </div>
            <div class="panel-footer">
                <form action="{{URL::to('messages/reply/'.$message->id)}}" method="POST">
                    <div class="form-group ">
                        <div class="input-group input-group-sm">
                            <input class="form-control" type="text" name="body" >

                            <div class="input-group-btn ">
                                <button class="btn btn-success">Submit</button>
                            </div>
                        </div>
                    </div>

            </div>
        </div>



    </div>
    <!--END OF MESSAGES-->
    <!--END OF MESSAGES-->
    <!--END OF MESSAGES-->

</div>


<script>
    var options = {
        valueNames: ['list_subject', 'list_date', 'list_recipient']
                //        plugins: [ListFuzzySearch()]
    };
    var mesList = new List('message_list', options);


//    $(".table").dataTable();


    //    $.fn.modal.defaults.maxHeight = function(){
    // subtract the height of the modal header and footer
    //    return $(window).height() - 165; 
    //}

</script>
