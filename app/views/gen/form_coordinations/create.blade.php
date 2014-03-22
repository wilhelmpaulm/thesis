<?php
$chief = User::where("division", "=", Auth::user()->division)->where("job_title", "=", "Chief")->first();
$cases = Kase::where("status", "=", "Ongoing")->where("agent_id", "=", Auth::user()->id)->get();
?>

<div class="panel panel-black">
    <div class="panel-heading">
        <h3 class="panel-title">Create Coordination Form</h3>
    </div>
    <form action="{{URL::to("form_coordinations/store")}}" method="post">
        <div class="panel-body">
            <div class="row">
                <div class="col-lg-4">
                    <label>Location</label>
                    <textarea type="text" name="area" class="form-control" rows="4" cols="20"></textarea>
                </div>
                <div class="col-lg-4">
                    <label>Time</label>
                    <input type="time" name="time" class="form-control">
                    <label>Date </label>
                    <input type="date" name="date" class="form-control">
                </div>
                <div class="col-lg-4">
                    <label >Case</label>
                    <select name="case_id" class="form-control">
                        @foreach($cases as $c)
                        <option value="{{$c->id}}">{{$c->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <hr>
            MEMBERS
            <div class="row">
                <div class="col-lg-12">
                    <table class="table table-condensed table-hover table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Agency</th>
                                <th>Name</th>
                                <th width='10%'>
                                    <span class="btn-group btn-group-sm">
                                        <button  class="btn btn-success " id="members_add" type="button"><i class="fa fa-plus"></i></button>
                                    </span> 
                                </th>
                            </tr>
                        </thead>
                        <tbody id="members_body">

                        </tbody>
                    </table>

                </div>

            </div>
            <hr>
            VEHICLES
            <div class="row">
                <div class="col-lg-12">
                    <table class="table table-condensed table-hover table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Vehicle</th>
                                <th>Model</th>
                                <th>Color</th>
                                <th>Plate Number</th>
                                <th width='10%'>
                                    <span class="btn-group btn-group-sm">
                                        <button  class="btn btn-success " id="vehicles_add" type="button"><i class="fa fa-plus"></i></button>
                                    </span> 
                                </th>
                            </tr>
                        </thead>
                        <tbody id="vehicles_body">

                        </tbody>
                    </table>

                </div>

            </div>

        </div>
        <div class="panel-footer clearfix">
            <span class="btn-group btn-group-sm pull-right">
                <button class="btn btn-success" type="">Save Changes</button>
            </span>
        </div>
    </form>
</div>



<div class="hidden">
    <div >
        <table>
            <thead>
                
            </thead>
        <tbody id="members_item">
        <tr>
            <td>
                <input name="agency[]" type="text" class="form-control" placeholder="Agency ">
            </td>
            <td>
                
                <input name="name[]" type="text" class="form-control" placeholder="Name of agent">
            </td>
            <td>
                <span class="btn-group btn-group-sm">
                    <button class="btn btn-danger remove" type="button"><i class="fa fa-trash-o"></i></button>
                </span>
            </td>
        </tr>
        </tbody>
        </table>
    </div>
    <div >
        <table>
            <thead>
                
            </thead>
        <tbody id="vehicles_item">
        <tr>
            <td>
                <input name="vehicle[]" type="text" class="form-control" placeholder="Vehicle">
            </td>
            <td>
                <input name="model[]" type="text" class="form-control" placeholder="Model">
            </td>
            <td>
                <input name="color[]" type="text" class="form-control" placeholder="Color">
            </td>
            <td>
                
                <input name="plate_no[]" type="text" class="form-control" placeholder="Plate Number">
            </td>
            <td>
                <span class="btn-group btn-group-sm">
                    <button class="btn btn-danger remove" type="button"><i class="fa fa-trash-o"></i></button>
                </span>
            </td>
        </tr>
        </tbody>
        </table>
    </div>

</div>


<script>
    $("#members_add").on("click", function() {
        var x = $("#members_item").html();
        $("#members_body").append(x);
    });
    $("#vehicles_add").on("click", function() {
        var x = $("#vehicles_item").html();
        $("#vehicles_body").append(x);
    });

     $("body").on("click", ".remove", function() {
        $(this).parent().parent().parent().remove();
    });

</script>

