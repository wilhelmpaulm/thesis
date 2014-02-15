<div >
    <div class="row">
        <div class="form-group col-md-4">
            <label for="last_name">Last Name</label>
            <input type="text" class="form-control" id="last_name" placeholder="De La Cruz" name="last_name_c">
        </div>
        <div class="form-group col-md-4">
            <label for="first_name">First Name</label>
            <input type="text" class="form-control" id="first_name" placeholder="Juan" name="first_name_c">
        </div>
        <div class="form-group col-md-4">
            <label for="middle_name">Middle Name</label>
            <input type="text" class="form-control" id="middle_name" placeholder="Ignacio" name="middle_name_c">
        </div>
    </div>
    <!--            <div class="form-group">
                    <label for="alias">Alias</label>
                    <input type="text" class="form-control" id="alias" placeholder="Boy Bawang">
                </div>-->
    <div class="row">
        <div class="form-group col-md-6">
            <label for="birthdate">Date of Birth</label>
            <input type="date" class="form-control" id="birthdate" placeholder="factory worker" name="birthdate_c">
        </div>
        <div class="form-group col-md-6">
            <label for="sex">Sex</label>
            <?php $sexes = Sex::all(); ?>
            <select name="sex_c" class="form-control">
                @foreach($sexes as $sex)
                <option value="{{$sex->sex}}">{{$sex->sex}}</option>
                @endforeach
            </select>
        </div>
    </div>

    

    <div class="row">
        <div class="form-group col-md-6">

            <div class="row">
                <div class="form-group col-md-4">
                    <label for="contact_type">Contact Type</label>
                    <?php $contact_types = Contact_type::all(); ?>
                    <select name="contact_type_c" class="form-control">
                        @foreach($contact_types as $ct)
                        <option value="{{$ct->type}}">{{$ct->type}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group col-md-8">
                    <label for="contact">Contact</label>
                    <input type="text" class="form-control" id="contact" placeholder="+639999999999" name="contact_c">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-12">
                    <label for="occupation">Occupation</label>
                    <input type="text" class="form-control" id="occupation" placeholder="factory worker" name="occupation_c">

                    <label for="contact_type">Civil Status</label>
                    <?php $civil_statuses = Civil_status::all(); ?>
                    <select name="civil_status_c" class="form-control">
                        @foreach($civil_statuses as $cs)
                        <option value="{{$cs->status}}">{{$cs->status}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
        <div class="form-group col-md-6">


            <div class="form-group ">
                <label for="exampleInputFile">Complainant Photo</label>
                <input type="file" id="exampleInputFile" name="img_picture_c">
                <p class="help-block">Please attach a photo of the victim.</p>
            </div>
        </div>
    </div>


</div>