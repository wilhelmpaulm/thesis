<?php // $resources = Resource::all();      ?>
<?php // $resources_history = Resource_history::where("status", "=", "Pending")->where("user_id", "=", Auth::user()->id)->get();    ?>
<style>


</style>


<!--
<div class="panel panel-black">
     Default panel contents 
    <div class="panel-heading ">
        <h3 class="panel-title"><i class="fa fa-envelope"></i> Messages</h3>
    </div>-->


    <div id="messages_list"  class="list-group" >
        <div class="">
            <div class="input-group input-group-sm">
                <input type="text" class="search form-control " placeholder="Search...">
                <span class="input-group-btn ">
                    <button class="btn btn-default sort" type="button" data-sort="list_subject">
                        <i class="fa fa-sort"></i> A
                    </button>
                    <button class="btn btn-default sort" type="button" data-sort="list_date">
                        <i class="fa fa-sort"></i> #
                    </button>
                    <a href="#add_message" class="btn btn-success" type="button" data-toggle="modal" data-target="#add_message">
                        <i class="fa fa-plus"></i>
                    </a>
                </span>

            </div>
        </div>
<br>
        <div style="height: 60vh; overflow-y: auto; overflow-x: hidden">
            <ul class="list list-unstyled    ">

                @foreach($messages as $m)

                <?php
                $mess = Message::find($m->message_id);
//                $sender = User::find($message->sender);
                $recipients = Message_recipient::where("message_id", "=", $mess->id)->get();
                $active = "";

                if ($message != null) {
                    if ($message->id == $mess->id) {
                        $active = "bg-gray";
                    }
                }
                ?>
                <li style="" class="{{$active}}">
                    <div class="row">
                    <div class="col-lg-11 col-lg-offset-1">
                    <a  id=""href="{{URL::to(strtolower(Auth::user()->job_title)."/messages/".$mess->id)}}"class=" {{$active}} ">
                        <h4 class=" list_subject">{{$mess->subject}}</h4>
                        <p class="list_date label label-info"><i class="fa fa-calendar"></i> {{$mess->created_at}}</p>
                        <p class="label label-success list_status"> <i class="fa fa-user"></i> {{$mess->sender}}</p>
                        <br>
                        @foreach($recipients as $re)
                        @if($re->user_id != $mess->sender)
                        <p class="label label-default list_recipient"><i class="fa fa-user"></i> {{$re->user_id}}</p>
                        @endif
                        @endforeach


                    </a>
                    <br>
                    <br>
                </div>
                </div>
                </li>
                @endforeach
            </ul>
        </div>


    </div>

<!--</div>-->





<div class="modal fade  container" id="add_message" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">Add Message</h4>
        </div>
        <form action="{{URL::to('messages/store')}}" method="POST">
            <div class="modal-body">
                @include("gen.messages.create")
            </div>
            <div class="modal-footer">
                <div class="btn-group btn-group-sm">
                    <button type="submit" class="btn btn-primary">Save changes</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

                </div>
            </div>
        </form>
    </div>

</div>





<script>
    var options = {
        valueNames: ['list_subject', 'list_date', 'list_recipient']
                //        plugins: [ListFuzzySearch()]
    };
    var resList = new List('messages_list', options);


//    $(".table").dataTable();


    //    $.fn.modal.defaults.maxHeight = function(){
    // subtract the height of the modal header and footer
    //    return $(window).height() - 165; 
    //}

</script>
