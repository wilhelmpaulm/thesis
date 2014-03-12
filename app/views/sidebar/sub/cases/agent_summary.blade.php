
<div class="panel panel-black">
    <div class="panel-heading">
        <h3 class="panel-title"><i class="fa fa-list-ul"></i> Assignment Summary</h3>
    </div>
    <ul class="list-group">
        @foreach($aCom as $ac)
        <?php $ag = User::find($ac['agent_id']); ?>
        <li class="list-group-item">
            <div class="row">
                <div class="col-md-6">
                    <p>{{$ag->last_name.", ".$ag->first_name}}</p>
                    <p>{{$ag->id}}</p>
                </div> 
                <div class="col-md-6">
                    <p>Cases Handle {{$ac['cases_held']}}</p>
                    <p>Current Cases {{$ac['cases_ongoing']}}</p>
                    <p>Successfully Closed {{$ac['cases_finished']}}</p>
                    
                </div> 

            </div> 
        </li>
        @endforeach
    </ul>
</div>