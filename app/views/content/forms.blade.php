<?php $forms = Case_form::where("division", "=", Auth::user()->division)->get(); ?>

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
                    <th>Status</th>
                    
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach($forms as $a)
                  <?php $au = User::find($a->agent_id);?>

                <tr class="text-center">
                    <td>{{$a->id}}</td>
                    <td>{{$au->last_name.", ".$au->first_name}}</td>
                    <td>{{$a->form_id}}</td>
                    <td>{{$a->form_type}}</td>
                    <td>@if($a->status == "Pending")<p class="label label-warning">
                    @elseif($a->status == "Denied")<p class="label label-danger">
                    @elseif($a->status == "Approved")<p class="label label-success">
                    @endif
                        
                            {{$a->status}}</p>
                    </td>
                    @if($a->form_type == "Subpoena")
                    <td>
                        <span class="btn-group btn-group-sm ">
                            <a href="{{URL::to('form_subpoenas/show/'.$a->form_id)}}" target="_blank"class="btn btn-primary"><i class="fa fa-eye"></i></a>
                        <a href="#" data-toggle="modal" data-target="#form_{{$a->id}}"class="btn btn-warning"><i class="fa fa-wrench"></i></a>
                        </span>
                        
                    </td>
                    @elseif($a->form_type == "Coordination")
                    <td>
                        <span class="btn-group btn-group-sm ">
                            <a href="{{URL::to('form_coordinations/show/'.$a->form_id)}}" target="_blank"class="btn btn-primary"><i class="fa fa-eye"></i></a>
                        <a href="#" data-toggle="modal" data-target="#form_{{$a->id}}"class="btn btn-warning"><i class="fa fa-wrench"></i></a>
                        </span>
                        
                    </td>
                    @elseif($a->form_type == "Disposition")
                    <td>
                        <span class="btn-group btn-group-sm ">
                            <a href="{{URL::to('form_dispositions/show/'.$a->form_id)}}" target="_blank"class="btn btn-primary"><i class="fa fa-eye"></i></a>
                             <a href="#" data-toggle="modal" data-target="#form_{{$a->id}}"class="btn btn-warning"><i class="fa fa-wrench"></i></a>
                        </span>
                        
                    </td>
                    @elseif($a->form_type == "Transmital")
                    <td>
                        <span class="btn-group btn-group-sm ">
                            <a href="{{URL::to('form_transmitals/show/'.$a->form_id)}}" target="_blank"class="btn btn-primary"><i class="fa fa-eye"></i></a>
                            <a href="#" data-toggle="modal" data-target="#form_{{$a->id}}"class="btn btn-warning"><i class="fa fa-wrench"></i></a>
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




@foreach($forms as $a)

<div class="modal  fade" id="form_{{$a->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">Update form status</h4>
        </div>
        <form action="{{URL::to('case_forms/update/'.$a->id)}}" method="post">
        <div class="modal-body">
            <label>Password</label>
            <input type="password" name="password" class="form-control" required="true">
            <label>Status</label>
            <select name="status" class="form-control" required="true">
                <option>Approved</option>
                <option>Denied</option>
                <option>Pending</option>
            </select>
        </div>
        <div class="modal-footer">
            <div class="btn-group btn-group-sm pull-right">
                <button type="submit" class="btn btn-primary">Save changes</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
        </form >
    </div>
</div>

@endforeach