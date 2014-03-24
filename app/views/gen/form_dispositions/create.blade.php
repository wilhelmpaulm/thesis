<?php
$chief = User::where("division", "=", Auth::user()->division)->where("job_title", "=", "Chief")->first();
$cases = Kase::where("status", "=", "Ongoing")->where("agent_id", "=", Auth::user()->id)->get();
?>

<div class="panel panel-black">
    <div class="panel-heading">
        <h3 class="panel-title">Create Disposition Report</h3>
    </div>
    <form action="{{URL::to("form_dispositions/store")}}" method="post">
        <div class="panel-body">
            <div class="row">
                <div class="col-lg-12">
                    <label >Case</label>
                    <select name="case_id" class="form-control">
                        @foreach($cases as $c)
                        <option value="{{$c->id}}">{{$c->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-lg-12">
                    <label>Synopsis</label>
                    <textarea type="text" name="synopsis" class="form-control" rows="4" cols="20"></textarea>
                    <br>
                    <label>Name and Personal Circumstances of Complainant (Or Requesting Party or Directing Party)</label>
                    <textarea type="text" name="coc" class="form-control" rows="4" cols="20"></textarea>
                    <br>
                    <label>Material Allegation of the Complaint (or Request or Directive)</label>
                    <textarea type="text" name="ma" class="form-control" rows="4" cols="20"></textarea>
                    <br>
                    <label>Names and Personal Circumstances of Principals (Subject/Victim)</label>
                    <textarea type="text" name="cop" class="form-control" rows="4" cols="20"></textarea>
                    <br>
                    <label>Material Facts Established By the Evidence Gathered</label>
                    <textarea type="text" name="mfe" class="form-control" rows="4" cols="20"></textarea>
                    <br>
                    <label>Recommendations</label>
                    <textarea type="text" name="recommendations" class="form-control" rows="4" cols="20"></textarea>
               
                </div>
            </div>
            <hr>
             Annexes
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

