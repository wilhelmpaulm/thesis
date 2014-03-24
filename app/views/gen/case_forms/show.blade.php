<div class="panel panel-black">
    <div class="panel-heading">
        <h3 class="panel-title">Case Forms</h3>
    </div>
    <div class="panel-body">

        <table class="table table-hover table-striped table-condensed">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Added by</th>
                    <th>Form ID</th>
                    <th>Form Type</th>
                    
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach($forms as $a)
                  <?php $au = User::find($ed->agent_id);?>

                <tr class="text-center">
                    <td>{{$a->id}}</td>
                    <td>{{$au->last_name.", ".$au->first_name}}</td>
                    <td>{{$a->form_id}}</td>
                    <td>{{$a->form_type}}</td>
                    @if($a->form_type == "Subpoena")
                    <td>
                        <span class="btn-group btn-group-sm ">
                            <a href="{{URL::to('form_subpoenas/show/'.$a->form_id)}}" target="_blank"class="btn btn-primary"><i class="fa fa-eye"></i></a>
                        </span>
                        
                    </td>
                    @elseif($a->form_type == "Coordination")
                    <td>
                        <span class="btn-group btn-group-sm ">
                            <a href="{{URL::to('form_coordinations/show/'.$a->form_id)}}" target="_blank"class="btn btn-primary"><i class="fa fa-eye"></i></a>
                        </span>
                        
                    </td>
                    @elseif($a->form_type == "Disposition")
                    <td>
                        <span class="btn-group btn-group-sm ">
                            <a href="{{URL::to('form_dispositions/show/'.$a->form_id)}}" target="_blank"class="btn btn-primary"><i class="fa fa-eye"></i></a>
                        </span>
                        
                    </td>
                    @elseif($a->form_type == "Transmital")
                    <td>
                        <span class="btn-group btn-group-sm ">
                            <a href="{{URL::to('form_transmitals/show/'.$a->form_id)}}" target="_blank"class="btn btn-primary"><i class="fa fa-eye"></i></a>
                        </span>
                        
                    </td>
                    @else
                    <td></td>
                    @endif
                </tr>
                @endforeach
            </tbody>
        </table>


    </div>
</div>

