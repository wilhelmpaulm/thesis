<div id="content">
    <div class="navbar navbar-default ">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!--<a class="navbar-brand"href="#details" data-toggle="tab">Case No. 555{{$case->id}}</a>-->
        </div>
        <div class="navbar-collapse collapse navbar-responsive-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#details" data-toggle="tab">Case No. {{$case->id}}</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Evidences <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="#recording" data-toggle="tab">Recording</a></li>
                        <li><a href="#photo" data-toggle="tab">Photo</a></li>
                        <li><a href="#video" data-toggle="tab">Video</a></li>
                        <li><a href="#document" data-toggle="tab">Document</a></li>
                        <li><a href="#object" data-toggle="tab">Object</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Clients <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="#victims" data-toggle="tab">Victims</a></li>
                        <li><a href="#subjects" data-toggle="tab">Subjects</a></li>
                        <li><a href="#witness" data-toggle="tab">Witness</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Reports <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Timeline</a></li>
                        <li><a href="#">Activity log</a></li>
                    </ul>
                </li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-cog"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Edit Details</a></li>
                        <li><a href="#">Set Permissions</a></li>
                        <li><a href="#">Delete Case</a></li>
                    </ul>
                </li>
            </ul>
        </div><!-- /.nav-collapse -->
    </div>



    <!-- Tab panes -->





    <div class="tab-content well">
        <div class="tab-pane active" id="details">
            <h3>{{$case->name}}</h3>
            <div class="row">
                <div class="col-lg-3">
                    <h4>Date Assigned</h4>
                    <p>{{$case->date_assigned}}</p>
                </div>
                <div class="col-lg-3">
                    <h4>Details</h4>
                    <p>{{$case->details}}</p>
                </div>
                <div class="col-lg-3">
                    <h4>Complainant</h4>
                    <?php $complainant = Client::find($case->complainant_id); ?>
                    <p>{{$complainant->last_name.", ".$complainant->first_name}}</p>
                    <p>{{$complainant->gender}}</p>
                </div>
                <div class="col-lg-3">
                    <h4>Date Assigned</h4>
                    <p>{{$case->date_assigned}}</p>
                </div>


            </div>
        </div>
        <div class="tab-pane" id="recording">
            <table class="table table-responsive table-condensed table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Owner</th>
                        <th>Date Recorded</th>
                        <th>Date Received</th>
                        <th>Data</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($evidence_recordings as $er)
                    <tr>
                        <td>{{$er->id}}</td>
                        <td>{{$er->owner}}</td>
                        <td>{{$er->date_recorded}}</td>
                        <td>{{$er->date_received}}</td>

                    </tr>
                    @endforeach
                </tbody>
            </table>




        </div>
        <div class="tab-pane" id="photo">
            <table class="table table-responsive table-condensed table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Owner</th>
                        <th>Title</th>
                        <th>Details</th>
                        <th>Date Taken</th>
                        <th>Date Received</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($evidence_pictures as $ep)
                    <tr>
                        <td>{{$ep->id}}</td>
                        <td>{{$ep->owner}}</td>
                        <td>{{$ep->title}}</td>
                        <td>{{$ep->details}}</td>
                        <td>{{$ep->date_taken}}</td>
                        <td>{{$ep->date_received}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="tab-pane" id="video">
            <table class="table table-responsive table-condensed table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Owner</th>
                        <th>Date Recorded</th>
                        <th>Date Received</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($evidence_videos as $ev)
                    <tr>
                        <td>{{$ev->id}}</td>
                        <td>{{$ev->owner}}</td>
                        <td>{{$ev->date_recorded}}</td>
                        <td>{{$ev->date_received}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="tab-pane" id="document">
            <table class="table  table-condensed table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Owner</th>
                        <th>Details</th>
                        <th>Date Received</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($evidence_documents as $ed)
                    <tr>
                        <td>{{$ed->id}}</td>
                        <td>{{$ed->owner}}</td>
                        <td>{{$ed->details}}</td>
                        <td>{{$ed->date_received}}</td>
                        
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="tab-pane" id="object">
            <table class="table  table-condensed table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Owner</th>
                        <th>Details</th>
                        <th>Date Received</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($evidence_objects as $ed)
                    <tr>
                        <td>{{$ed->id}}</td>
                        <td>{{$ed->owner}}</td>
                        <td>{{$ed->details}}</td>
                        <td>{{$ed->date_received}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>




</div>

<script>
    $("table").dataTable();

</script>
