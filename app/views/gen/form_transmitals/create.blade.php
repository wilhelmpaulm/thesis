<?php
$chief = User::where("division", "=", Auth::user()->division)->where("job_title", "=", "Chief")->first();
$cases = Kase::where("status", "=", "Ongoing")->where("agent_id", "=", Auth::user()->id)->get();
?>

<div class="panel panel-black">
    <div class="panel-heading">
        <h3 class="panel-title">Create Transmittal Report</h3>
    </div>
    <form action="{{URL::to("form_transmitals/store")}}" method="post">
        <div class="panel-body">
            <div class="row">
                <div class="col-lg-9">
                    <label >Case</label>
                    <select name="case_id" class="form-control">
                        @foreach($cases as $c)
                        <option value="{{$c->id}}">{{$c->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-lg-3">
                    <label >Date</label>
                    <input class="form-control" type="date" name="date">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <label>Header</label>
                    <textarea type="text" name="header" class="form-control" rows="4" cols="20"></textarea>
                    <br>
                    <label>Introduction</label>
                    <textarea type="text" name="introduction" class="form-control" rows="4" cols="20"></textarea>
                    <br>
                    <label>Crime</label>
                    <textarea type="text" name="crime" class="form-control" rows="4" cols="20"></textarea>
                    <br>
                    <label>How the crime is committed</label>
                    <textarea type="text" name="how" class="form-control" rows="4" cols="20"></textarea>
                    <br>
                    <label>Closing</label>
                    <textarea type="text" name="closing" class="form-control" rows="4" cols="20"></textarea>
                    <br>
                    <label>To</label>
                    <textarea type="text" name="to" class="form-control" rows="4" cols="20"></textarea>
               
                </div>
            </div>
            <hr>
            ANNEXES
            <div class="row">
                <div class="col-lg-12">
                    <table class="table table-condensed table-hover table-striped table-bordered">
                        <thead>
                            <tr>
                                <th width='10%'>Letter</th>
                                <th>Title</th>
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
                        <input name="letter[]" type="text" class="form-control" placeholder="A">
                    </td>
                    <td>
                        <input name="title[]" type="text" class="form-control" placeholder="Title">
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


    $("body").on("click", ".remove", function() {
        $(this).parent().parent().parent().remove();
    });

</script>

