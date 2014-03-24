<?php $notifications = System_log::where("target_id", "=", Auth::user()->id)->orderBy("created_at", "desc")->get() ?>
<?php $logs = System_log::where("user_id", "=", Auth::user()->id)->orderBy("created_at", "desc")->get() ?>


<div class="panel panel-black">
    <div class="panel-heading">
        <h3 class="panel-title">Notifications</h3>
    </div>
    <div class="panel-body">

        <table class="table table-hover table-striped table-condensed">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Done by</th>
                    <th>Division</th>
                    <th>Action</th>
                    <th>Case ID</th>
                    
                    <th>Date done</th>
                </tr>
            </thead>
            <tbody>
                @foreach($notifications as $a)

                <tr class="text-center">
                    <td>{{$a->id}}</td>
                    <td>{{$a->user_id}}</td>
                    <td>{{$a->division}}</td>
                    <td>{{$a->action}}</td>
                    <td>{{$a->case_id}}</td>
                  
                    <td>{{$a->created_at}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>


    </div>
</div>

<div class="panel panel-black">
    <div class="panel-heading">
        <h3 class="panel-title">Action logs</h3>
    </div>
    <div class="panel-body">

        <table class="table table-hover table-striped table-condensed">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Target ID</th>
                    <th>Division</th>
                    <th>Action</th>
                    <th>Case ID</th>
                  
                    <th>Date done</th>
                </tr>
            </thead>
            <tbody>
                @foreach($logs as $a)

                <tr class="text-center">
                    <td>{{$a->id}}</td>
                    <td>{{$a->target_id}}</td>
                    <td>{{$a->division}}</td>
                    <td>{{$a->action}}</td>
                    <td>{{$a->case_id}}</td>
                  
                    <td>{{$a->created_at}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>


    </div>
</div>

