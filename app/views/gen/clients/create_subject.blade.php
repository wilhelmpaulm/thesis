<div >
    <div class="row">
        <div class="form-group col-md-4">
            <label for="last_name">Last Name</label>
            <input required type="text" class="form-control" id="last_name" placeholder="De La Cruz" name="last_name_s[]">
        </div>
        <div class="form-group col-md-4">
            <label for="first_name">First Name</label>
            <input required type="text" class="form-control" id="first_name" placeholder="Juan" name="first_name_s[]">
        </div>
        <div class="form-group col-md-4">
            <label for="middle_name">Middle Name</label>
            <input required type="text" class="form-control" id="middle_name" placeholder="Ignacio" name="middle_name_s[]">
        </div>
    </div>
    <!--            <div class="form-group">
                    <label for="alias">Alias</label>
                    <input required type="text" class="form-control" id="alias" placeholder="Boy Bawang">
                </div>-->
    <div class="row">
        <div class="form-group col-md-6">
            <label for="birthdate">Date of Birth</label>
            <input required type="date" class="form-control" id="birthdate" placeholder="factory worker" name="birthdate_s[]">
        </div>
        <div class="form-group col-md-6">
            <label for="sex">Sex</label>
            <?php $sexes = Sex::all(); ?>
            <select name="sex_s[]" class="form-control">
                @foreach($sexes as $sex)
                <option value="{{$sex->sex}}">{{$sex->sex}}</option>
                @endforeach
            </select>
        </div>
    </div>


    <div class="row">
        <div class="form-group col-md-6">

            <div class="row">
                <div class="form-group col-md-4 hidden">
                    <label for="contact_type">Contact Type</label>
                    <input required name="contact_type_s[]" value="Mobile" type="hidden">
                </div>
                <div class="form-group col-md-12">
                    <label for="contact">Contact</label>
                    <input required type="text" class="form-control" id="contact" placeholder="+631234567890" name="contact_s[]">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-12">
                    <label for="occupation">Occupation</label>
                    <input required type="text" class="form-control" id="occupation" placeholder="Factory worker" name="occupation_s[]">

                    <label for="contact_type">Civil Status</label>
                    <?php $civil_statuses = Civil_status::all(); ?>
                    <select name="civil_status_s[]" class="form-control">
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
                    <input required required type="text" class="form-control" id="citizenship" placeholder="Filipino" name="citizenship_s[]">
                <label for="exampleInputFile">Subject Photo</label>
                <input type="file" id="exampleInputFile" name="img_picture_s[]" multiple="">
                <p class="help-block">Please attach a photo of the victim.</p>
            </div>
        </div>
    </div>
</div>