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
        <li class="">
            <a href="#tab4" data-toggle="tab">
                <h4> Step 5 </h4>
                <p class="">Sworn Statement</p>
            </a>
        </li>
    </ul>
    <br>
    <div class="progress progress-striped active">
        <div id="pg-add" class="progress-bar"  role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 25%">
            <span id="pg-add-text">0% Completed</span>
        </div>
    </div>


    <!-- Tab panes -->
    <div class="tab-content">

        <div class="tab-pane well  active" id="tab1">
            @include("gen.clients.create")
        </div>


        <!--END OF TAB 1-->


        <div class="tab-pane well fade" id="tab2">


        </div>
        <!--END OF TAB 2-->
        <div class="tab-pane well fade" id="tab3">


        </div>

        <!--END OF TAB 3-->
        <div class="tab-pane  well" id="tab4">
            <div class="row">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group ">
                            <label for="nature_act">Nature of Act Complained</label>
                            <input type="text" class="form-control" id="nature_act" placeholder="Rape / Homicide / Robbery">
                        </div>
                        <div class="form-group">
                            <label for="location_act">Where Act is Committed</label>
                            <input type="text" class="form-control" id="location_act" placeholder="Enter date">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group ">
                            <label for="date_commited">Date committed</label>
                            <input type="date" class="form-control" id="date_commited" placeholder="Enter date">
                        </div>
                        <div class="form-group">
                            <label for="date_reported">Date reported</label>
                            <input type="date" class="form-control" id="date_reported" placeholder="Enter date">
                        </div>
                    </div>


                </div>



            </div>

            <!--END OF TAB 3-->
            <div class="tab-pane well fade" id="tab">
                <form role="form">
                    <div class="form-group">
                        <label for="agency_reported">Agency Reported to</label>
                        <input type="text" class="form-control" id="agency_reported" placeholder="Agency name">
                    </div>
                    <div class="form-group">
                        <label for="agency_report_details">Agency Report Details</label>
                        <textarea class="form-control" name="agency_report_details" rows="4" cols="20" placeholder="Details . . . "></textarea>
                    </div>
                    <div class="form-group">
                        <label for="agency_report_status">Agency Report Status</label>
                        <input type="text" class="form-control" id="agency_report_status" placeholder="eg. Pending / Accomplished / On Hold">
                    </div>
                    <div class="form-group">
                        <label for="court_action_details">Court Action Details</label>
                        <input type="text" class="form-control" id="court_action_details" placeholder="eg. Pending / Accomplished / On Hold">
                    </div>
                    <div class="form-group">
                        <label for="consoiderations">Considerations</label>
                        <textarea class="form-control" name="considerations" rows="4" cols="20" placeholder="I chose to report this incident bacause . . ."></textarea>
                    </div>
                    <div class="form-group">
                        <label for="narration">Narration of Facts</label>
                        <textarea class="form-control" name="narration" rows="4" cols="20" placeholder="I swoore . . ."></textarea>
                    </div>
                    <div class="form-group well">
                        <label for="img_signature">Signature Image</label>
                        <input type="file" id="img_signature">
                        <p class="help-block">Please upload a cleat image.</p>
                    </div>
                    <div class="form-group well">
                        <label for="img_right_thumb">Right Thumb Image</label>
                        <input type="file" id="img_right_thumb">
                        <p class="help-block">Please upload a cleat image.</p>
                    </div>

                    <button type="submit" class="btn btn-default btn-block btn-success">Submit</button>
                </form>


            </div>
        </div>



    </div>


    <script>
        $('a').on("click", function() {
            var x = 5;//number of forms
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

    </script>