<div id="content well">

    <ul class="nav nav-pills nav-justified">

        <li class="active">
            <a href="#tab1" data-toggle="tab">
                <h4> Step 1 </h4>
                <p class="">Complainant Information</p>
            </a>
        </li>
        <li class="">
            <a href="#tab2" data-toggle="tab">
                <h4> Step 2 </h4>
                <p class="">Victim Information</p>
            </a>
        </li>
        <li class="" >
            <a class="" href="#tab3" data-toggle="tab">
                <h4> Step 3 </h4>
                <p class="">Subject Information</p>
            </a>
        </li>
        <li class="">
            <a href="#tab4" data-toggle="tab">
                <h4> Step 4 </h4>
                <p class="">Complaint Information</p>
            </a>
        </li>
    </ul>
    <br>
    <div class="progress progress-striped active">
        <div id="pg-add" class="progress-bar"  role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 25%">
            <span id="pg-add-text">0% Completed</span>
        </div>
    </div>

    <form action="{{URL::to('agent/validate')}}" method="POST">
    <!-- Tab panes -->
    <div class="tab-content">

        <div class="tab-pane  active" id="tab1">
            <div class="panel panel-default">
                <div class="panel-heading">

                    <p><i class="fa fa-user "></i> Complainant</p>

                </div>
                <div class="panel-body">
                    <!--Panel content-->
                    <div class="well">
                        @include("gen.clients.create")
                        @include("gen.client_addresses.create")
                    </div>
                </div>
            </div>
        </div>


        <!--END OF TAB 1-->


        <div class="tab-pane fade" id="tab2">
            <div class="tab-pane  active" id="tab1">
                <div class="panel panel-default">
                    <div class="panel-heading clearfix">
                        <span class=""><i class="fa fa-group"></i> Victims  </span>
                        <button type="button"  id="add_victim_btn" class="pull-right btn btn-success"><i class="fa fa-plus"></i></button>
                    </div>
                    <div class="panel-body" id="add_victim_panel">

                    </div>
                </div>
            </div>
        </div>
        <!--END OF TAB 2-->
        <div class="tab-pane fade" id="tab3" >
            <div class="tab-pane  active" id="tab1">
                <div class="panel panel-default">
                    <div class="panel-heading clearfix">
                        <span class=""><i class="fa fa-chain"></i> Subjects </span>
                        <button type="button" id="add_subject_btn" class="pull-right btn btn-success"><i class="fa fa-plus"></i></button>
                    </div>
                    <div class="panel-body" id="add_subject_panel">

                    </div>
                </div>
            </div>
        </div>

        <!--END OF TAB 3-->
        <div class="tab-pane " id="tab4">

            <div class="panel panel-default">
                <div class="panel-heading clearfix">
                    <span class=""><i class="fa fa-book"></i> Details</span>
                </div>
                <div class="panel-body" id="">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group ">
                                    <label for="nature_act">Nature of Act Complained</label>
                                    <input type="text" class="form-control" id="nature_act" placeholder="Rape / Homicide / Robbery" name="nature_act">
                                </div>
                                <div class="form-group">
                                    <label for="location_act">Where Act is Committed</label>
                                    <input type="text" class="form-control" id="location_act" placeholder="Enter date" name="location_act">
                                </div>
                            </div>

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
                        </div>
                    </div>
                <button>FUN</button>
            </div>
        </div>
    </div>
    
    </form>
    <!--FORM ENDS HERE-->

    <div id="content_repo" class="hidden">
        <div id="add_victim_body" >
            <div class="panel panel-default">
                <div class="panel-heading clearfix">
                    <button type="button" class="remove btn btn-danger pull-right"><i class="fa fa-trash-o"></i></button>
                </div>
                <div class="panel-body" id="">
                    @include("gen.clients.create_victim")

                </div>
            </div>

        </div>
        <div id="add_subject_body">
            <div class="panel panel-default">
                <div class="panel-heading clearfix">
                    <button  type="button" class="remove btn btn-danger pull-right"><i class="fa fa-trash-o"></i></button>
                </div>
                <div class="panel-body" id="">
                    @include("gen.clients.create_subject")

                </div>
            </div>
        </div>



    </div>



    <script>
        $('a').on("click", function() {
            var x = 4;//number of forms
            var xx = ($(this).attr("href")).substring(4, 8); //would be the # tab based on href 
            xx *= (100 / x);
            $("#pg-add").css({width: xx + "%"}).removeClass("progress-bar-success");
            $("#pg-add-text").text(xx + "% Completed");

            if (xx == 100) {
                $("#pg-add").addClass("progress-bar-success");
            }
            else {
                $("#pg-add").removeClass("progress-bar-success");
            }
        });


        $("#add_victim_btn").on("click", function() {
            var body = $("#add_victim_body").html();
            $("#add_victim_panel").append(body);
        });
        $("#add_subject_btn").on("click", function() {
            var body = $("#add_subject_body").html();
            $("#add_subject_panel").append(body);
        });


        $("body").on("click", ".remove", function() {
            $(this).parent().parent().remove();
        });


    </script>