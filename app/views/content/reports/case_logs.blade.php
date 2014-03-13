


<div class="panel panel-black">
    <div class="panel-heading">
        <h3 class="panel-title">Case logs</h3>
    </div>
    <div class="panel-body">

        <table class="table table-hover table-striped table-condensed">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>User ID</th>
                    <th>Division</th>
                    <th>Action</th>
                    <th>Table</th>
                    <th>Reference ID</th>
                    <th>Date done</th>
                </tr>
            </thead>
            <tbody>
                @foreach($logs as $a)

                <tr class="text-center">
                    <td>{{$a->id}}</td>
                    <td>{{$a->user_id}}</td>
                    <td>{{$a->division}}</td>
                    <td>{{$a->action}}</td>
                    <td>{{$a->table}}</td>
                    <td>{{$a->reference_id}}</td>
                    <td>{{$a->created_at}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>


    </div>
</div>

