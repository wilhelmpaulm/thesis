<div id="addEvidenceHistory_{{$h->id}}" class="modal container fade" tabindex="-1" style="display: none;">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">Add History</h4>
        </div>

        <form action="{{URL::to('evidence_histories/update/'.$h->id)}}" method="POST" enctype="multipart/form-data">

            <div class="modal-body">
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="holder">Holder</label>
                        <input id='holder' type='text' class="form-control " name="holder" value="{{$h->holder}}"/>
                        <label for="details">Details</label>
                        <textarea  id='details' class="form-control " name="details" rows="2" cols="20">{{$h->details}}</textarea>
                        <label for="location">Location</label>
                        <textarea  id='location' class="form-control " name="location" rows="2" cols="20">{{$h->location}}</textarea>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="date_held">Date Held</label>
                        <input type="date" class="form-control" id="date_held" placeholder="fraptiousday!" name="date_held" value="{{$h->date_held}}">
                        <label for="date_released">Date Released</label>
                        <input type="date" class="form-control" id="date_released" placeholder="fraptiousday!" name="date_released" value="{{$h->date_released}}">


                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <span class="btn-group btn-group-sm ">

                    <a  id="evidence_history_destroy_{{$h->id}}" class="btn btn-danger" >Delete</a>
                    <button type="" class="btn btn-primary">Save changes</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </span>
            </div>
        </form>
    </div>
</div>

<script>
    $("#evidence_history_destroy_{{$h->id}}").on("click", function() {
        $.post("{{URL::to('evidence_histories/destroy/'.$h->id)}}", function(data) {
            location.reload();
        });
    });
</script>