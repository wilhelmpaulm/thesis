<div id="addEvidenceHistoryPicture_{{$ed->id}}" class="modal container fade" tabindex="-1" style="display: none;">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">Add History</h4>
        </div>

        <form action="{{URL::to('evidence_histories/store/')}}" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="evidence_id" value="{{$ed->id}}">
            <input type="hidden" name="type" value="Picture">
            <div class="modal-body">
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="holder">Holder</label>
                        <input id='holder' type='text' class="form-control " name="holder" value=""/>
                        <label for="details">Details</label>
                        <textarea  id='details' class="form-control " name="details" rows="2" cols="20"></textarea>
                        <label for="location">Location</label>
                        <textarea  id='location' class="form-control " name="location" rows="2" cols="20"></textarea>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="date_held">Date Held</label>
                        <input type="date" class="form-control" id="date_held" placeholder="fraptiousday!" name="date_held" value="">
                        <label for="date_released">Date Released</label>
                        <input type="date" class="form-control" id="date_released" placeholder="fraptiousday!" name="date_released" value="">


                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <span class="btn-group btn-group-sm ">

                    <button type="" class="btn btn-primary">Save changes</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </span>
            </div>
        </form>
    </div>
</div>
