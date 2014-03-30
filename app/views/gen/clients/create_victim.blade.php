<div >
    <div class="row">
        <div class="form-group col-md-4">
            <label for="last_name">Last Name</label>
            <input required type="text" class="form-control" id="last_name" placeholder="De La Cruz" name="last_name_v[]">
        </div>
        <div class="form-group col-md-4">
            <label for="first_name">First Name</label>
            <input required type="text" class="form-control" id="first_name" placeholder="Juan" name="first_name_v[]">
        </div>
        <div class="form-group col-md-4">
            <label for="middle_name">Middle Name</label>
            <input required type="text" class="form-control" id="middle_name" placeholder="Ignacio" name="middle_name_v[]">
        </div>
    </div>
    
    <div class="row">
        <div class="form-group col-md-6">
            <label for="birthdate">Date of Birth</label>
            <input required type="date" class="form-control" id="birthdate" placeholder="factory worker" name="birthdate_v[]">
        </div>
        <div class="form-group col-md-6">
            <label for="sex">Sex</label>
            <?php $sexes = Sex::all(); ?>
            <select name="sex_v[]" class="form-control">
                @foreach($sexes as $sex)
                <option value="{{$sex->sex}}">{{$sex->sex}}</option>
                @endforeach
            </select>
        </div>
    </div>

    <div class="row">
        <div class="form-group col-md-6">

            <div class="row">
                <div class="form-group col-md-4 hiddent">
                                      <input required name="contact_type_v[]" value="Mobile" type="hidden">

                </div>
                <div class="form-group col-md-12">
                    <label for="contact">Contact</label>
                    <input required type="text" class="form-control" id="contact" placeholder="+631234567890" name="contact_v[]">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-12">
                    <label for="occupation">Occupation</label>
                    <input required type="text" class="form-control" id="occupation" placeholder="Factory worker" name="occupation_v[]">

                    <label for="contact_type">Civil Status</label>
                    <?php $civil_statuses = Civil_status::all(); ?>
                    <select name="civil_status_v[]" class="form-control">
                        @foreach($civil_statuses as $cs)
                        <option value="{{$cs->status}}">{{$cs->status}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
        <div class="form-group col-md-6">


            <div class="form-group ">
                 <label for="citizenship">Citizenship</label>
                    <input required required type="text" class="form-control" id="citizenship" placeholder="Filipino" name="citizenship_v[]">
                <label for="exampleInputFile">Victim Photo</label>
                <input  type="file" id="exampleInputFile" name="img_picture_v[]" multiple="">
                <p class="help-block">Please attach a photo of the victim.</p>
            </div>
        </div>
    </div>
</div>