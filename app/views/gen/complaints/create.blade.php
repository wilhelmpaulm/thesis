
<div class="panel panel-black">
    <div class="panel-heading">
        <h3 class="panel-title"> Complaint Sheet</h3>
    </div>
    <div class="panel-body">
        <div id="">

            <ul class="nav nav-pills nav-justified">

                <li class="active" id="tc1">
                    <a href="#tab1" data-toggle="tab">
                        <h4>Complainant Information</h4>
                        <p class=""></p>
                    </a>
                </li>
                <li class="" id="tc2">
                    <a href="#tab2" data-toggle="tab">
                        <h4> Victim Information</h4>
                        <!--<p class="">Victim Information</p>-->
                    </a>
                </li>
                <li class="" id="tc3">
                    <a class="" href="#tab3" data-toggle="tab">
                        <h4> Subject Information</h4>
                        <!--<p class="">Subject Information</p>-->
                    </a>
                </li>
                <li class="" id="tc4">
                    <a href="#tab4" data-toggle="tab">
                        <h4> Complaint Information</h4>
                        <!--<p class="">Complaint Information</p>-->
                    </a>
                </li>
            </ul>
            <br>
            <!--            <div class="progress progress-striped active">
                            <div id="pg-add" class="progress-bar"  role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 25%">
                                <span id="pg-add-text"></span>
                            </div>
                        </div>-->

            <form action="{{URL::to('complaints/store')}}" id="f0" method="POST" enctype="multipart/form-data">
                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane  active" id="tab1">
                        <div class="panel ">
                            <div class="panel-heading">

                        <!--<p class=""><i class="fa fa-user "></i> Complainant</p>-->

                            </div>
                            <div class="panel-body">
                                <!--Panel content-->
                                <div class="">
                                    @include("gen.clients.create")
                                    <div class="row">
                                        <div class="form-group col-md-4 col-lg-offset-3">

                                            <label>Is the complainant also a victim?</label>
                        <!--                    <select name="complainant_victim" class="form-control" >
                                                <option>Yes</option>
                                                <option>No</option>
                                            </select>
                                                                      </div>-->
                                            <br>
                                            <span><input type="radio" name="complainant_victim"  value="Yes" checked="checked" /> Yes</span>   <span style="padding-left: 20px"><input type="radio" name="complainant_victim"  value="No" /> No</span>


                                        </div>

                                    </div>
                                    <!--<hr>-->
                                    <!--@include("gen.client_addresses.create")-->
                                </div>
                            </div>
                            <div class="panel-footer clearfix">
                                <div class="btn-group btn-group-sm pull-right">
                                    <a class="btn btn-primary" href="#tab2" data-toggle="tab" id="tt2">Next</a>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!--END OF TAB 1-->


                    <div class="tab-pane fade" id="tab2">
                        <div class="tab-pane  active" id="tab1">
                            <div class="panel ">
                                <div class="panel-heading clearfix">
                                    <!--<span class=""><i class="fa fa-group"></i> Victims if any </span>-->
                                    <span class="btn-group btn-group-sm pull-right">
                                        <button type="button"  id="add_victim_btn" class="pull-right btn btn-success "><i class="fa fa-plus"></i></button>
                                    </span>
                                </div>
                                <div class="panel-body" id="add_victim_panel">

                                    <br>
                                    <br>
                                </div>
                                <div class="panel-footer clearfix">
                                    <div class="btn-group btn-group-sm pull-right">

                                        <a class="btn btn-primary" href="#tab3" data-toggle="tab" id="tt3">Next</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--END OF TAB 2-->
                    <div class="tab-pane fade" id="tab3" >
                        <div class="tab-pane  active" id="tab1">
                            <div class="panel ">
                                <div class="panel-heading clearfix">
                                    <!--<span class=""><i class="fa fa-chain"></i> Persons Complained Against or Suspects</span>-->
                                    <span class="btn-group btn-group-sm pull-right">
                                        <button type="button" id="add_subject_btn" class="pull-right btn btn-success"><i class="fa fa-plus"></i></button>
                                    </span>
                                </div>
                                <div class="panel-body" id="add_subject_panel">

                                </div>
                                <div class="panel-footer clearfix">
                                    <div class="btn-group btn-group-sm pull-right">

                                        <a class="btn btn-primary" href="#tab4" data-toggle="tab" id="tt4">Next</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--END OF TAB 3-->
                    <div class="tab-pane " id="tab4">

                        <div class="panel ">
                            <div class="panel-heading clearfix">
                                <!--<span class=""><i class="fa fa-book"></i> Where and When Committed</span>-->
                            </div>
                            <div class="panel-body" id="">
                                @include("gen.complaint_addresses.create")
                                <hr>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group ">
                                            <label for="date_commited">Date committed</label>
                                            <input type="date" class="form-control" id="date_commited" placeholder="Enter date" name="date_commited">
                                        </div>
                                        <div class="form-group">
                                            <label for="date_reported">Date reported</label>
                                            <input type="date" class="form-control" id="date_reported" placeholder="Enter date" name="date_reported">
                                        </div>

                                    </div>

                                    <div class="col-md-6">
                                        <div class="panel ">
                                            <div class="panel-heading clearfix">
                                                <span class=""><i class="fa fa-group"></i> Type Tags  </span>
                                                <span class="btn-group btn-group-sm pull-right">
                                                    <button type="button"  id="add_type_tags_btn" class="pull-right btn btn-success"><i class="fa fa-plus"></i></button>
                                                </span>
                                            </div>
                                            <div class="panel-body" id="add_type_tags_panel">

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <hr>
                                <div class="btn-group btn-group-sm pull-right">
                                    <button type="submit" class="btn btn-default  btn-success">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </form>

        </div>
    </div>
</div>


<!--FORM ENDS HERE-->

<div id="content_repo" class="hidden">
    <div id="add_victim_body" >
        <div class="panel ">
            <div class="panel-heading clearfix">
                <span class="btn-group btn-group-sm pull-right">
                    <button type="button" class="remove btn btn-danger pull-right"><i class="fa fa-trash-o"></i></button>
                </span>
            </div>
            <div class="panel-body" id="">
                @include("gen.clients.create_victim")
<!--                <hr>
                @include("gen.client_addresses.create_victim")-->
            </div>
        </div>

    </div>
    <div id="add_subject_body">
        <div class="panel ">
            <div class="panel-heading clearfix">
                <span class="btn-group btn-group-sm pull-right">
                    <button  type="button" class="remove btn btn-danger pull-right"><i class="fa fa-trash-o"></i></button>
                </span>
            </div>
            <div class="panel-body" id="">
                @include("gen.clients.create_subject")
<!--                <hr>
                @include("gen.client_addresses.create_subject")-->

            </div>
        </div>
    </div>


    <div id="add_type_tags_body">
        <div class="panel ">
            <div class="panel-heading clearfix">
                <span class="btn-group btn-group-sm pull-right">
                    <button  type="button" class="remove btn btn-danger pull-right"><i class="fa fa-trash-o"></i></button>
                </span>
            </div>
            <div class="panel-body" id="">
                @include("gen.complaint_type_tags.create")
            </div>
        </div>
    </div>



</div>



<script>
    $('a').on("click", function() {
        var x = 4;//number of forms
        var xx = ($(this).attr("href")).substring(4, 8); //would be the # tab based on href 
        xx *= (100 / x).toFixed(2);
        var xef = $(this).attr("href");

        $("#pg-add").css({width: xx + "%"}).removeClass("progress-bar-success");
        $("#pg-add-text").text("");

        if (xx == 100) {
            $("#pg-add").addClass("progress-bar-success");
        }
        else {
            $("#pg-add").removeClass("progress-bar-success");
        }

    });


    $("#tt1").click(function() {
        $("ul li").removeClass("active");
        $("#tc1").addClass("active");
    });
    $("#tt2").click(function() {
        $("ul li").removeClass("active");
        $("#tc2").addClass("active");
    });
    $("#tt3").click(function() {
        $("ul li").removeClass("active");
        $("#tc3").addClass("active");
    });
    $("#tt4").click(function() {
        $("ul li").removeClass("active");
        $("#tc4").addClass("active");
    });

    $("#add_victim_btn").on("click", function() {
        var body = $("#add_victim_body").html();
        $("#add_victim_panel").append(body);
    });
    $("#add_subject_btn").on("click", function() {
        var body = $("#add_subject_body").html();
        $("#add_subject_panel").append(body);
    });
    $("#add_type_tags_btn").on("click", function() {
        var body = $("#add_type_tags_body").html();
        $("#add_type_tags_panel").append(body);
    });


    $("body").on("click", ".remove", function() {
        $(this).parent().parent().parent().remove();
    });


</script>