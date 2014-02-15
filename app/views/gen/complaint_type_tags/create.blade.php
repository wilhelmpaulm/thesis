<div class="">
    <div class="row">
        <div class="form-group col-md-6">
            <label for="complaint_type">Complaint type</label>
            <?php $complaint_types = Case_type::all(); ?>
            <select name="type[]" class="form-control">
                @foreach($complaint_types as $ct)
                <option value="{{$ct->type}}">{{$ct->type}}</option>
                @endforeach
            </select>
        </div>
    </div>
</div>