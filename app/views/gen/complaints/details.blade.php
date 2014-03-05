<div class="row">
    <div class="col-md-12">
        <h4>Complainant</h4>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Birthday / Age</th>
                    <th>Civil Status</th>
                    <th>Sex</th>
                    <th>Occupation</th>
                </tr>
            </thead>
            <tbody>
                <?php $c = Client::find($complaint->client_id);?>
                <tr>
                    <td>{{$c->last_name.", ".$c->first_name}}</td>
                    <td>{{$c->birthdate}} / {{Time::getAge($c->birthdate)}}</td>
                    <td>{{$c->civil_status}}</td>
                    <td>{{$c->sex}}</td>
                    <td>{{$c->occupation}}</td>
                </tr>
            </tbody>
        </table>
        <h4>Victims</h4>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Birthday / Age</th>
                    <th>Civil Status</th>
                    <th>Sex</th>
                    <th>Occupation</th>
                </tr>
            </thead>
            <tbody>
                @foreach($complaint_victims as $cv)
                <?php $c = Client::find($cv->client_id);?>
                <tr>
                    <td>{{$c->last_name.", ".$c->first_name}}</td>
                    <td>{{$c->birthdate}} / {{Time::getAge($c->birthdate)}}</td>
                    <td>{{$c->civil_status}}</td>
                    <td>{{$c->sex}}</td>
                    <td>{{$c->occupation}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        
        
        <h4>Subjects</h4>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Alias</th>
                    <th>Birthday / Age</th>
                    <th>Civil Status</th>
                    <th>Sex</th>
                    <th>Occupation</th>
                </tr>
            </thead>
            <tbody>
                @foreach($complaint_subjects as $cv)
                <?php $c = Client::find($cv->client_id);?>
                <tr>
                    <td>{{$c->last_name.", ".$c->first_name}}</td>
                    <td>{{$c->alias}}</td>
                    <td>{{$c->birthdate}} / {{Time::getAge($c->birthdate)}}</td>
                    <td>{{$c->civil_status}}</td>
                    <td>{{$c->sex}}</td>
                    <td>{{$c->occupation}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>

        
    </div>
</div>

<script>
//         $("table").dataTable();   
</script>