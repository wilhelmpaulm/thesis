<div >
    <div class="row">
        <div class="form-group col-md-4">
            <label for="last_name">Last Name</label>
            <input type="text" class="form-control" id="last_name" placeholder="De La Cruz" name="last_name_c" value="{{$client->last_name}}">
        </div>
        <div class="form-group col-md-4">
            <label for="first_name">First Name</label>
            <input type="text" class="form-control" id="first_name" placeholder="Juan" name="first_name_c" value="{{$client->first_name}}">
        </div>
        <div class="form-group col-md-4">
            <label for="middle_name">Middle Name</label>
            <input type="text" class="form-control" id="middle_name" placeholder="Ignacio" name="middle_name_c" value="{{$client->middle_name}}">
        </div>
    </div>
    <!--            <div class="form-group">
                    <label for="alias">Alias</label>
                    <input type="text" class="form-control" id="alias" placeholder="Boy Bawang">
                </div>-->
    <div class="row">
        <div class="form-group col-md-6">
            <label for="birthdate">Date of Birth</label>
            <input type="date" class="form-control" id="birthdate" placeholder="factory worker" name="birthdate_c" value="{{$client->birthdate}}">
        </div>
        <div class="form-group col-md-6">
            <label for="sex">Sex</label>
            <?php $sexes = Sex::all(); ?>
            <select name="sex_c" class="form-control">
                @foreach($sexes as $sex)
                @if($sex->sex == $client->sex)
                <option selected="" value="{{$sex->sex}}">{{$sex->sex}}</option>
                @else
                <option value="{{$sex->sex}}">{{$sex->sex}}</option>
                @endif
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
                        @if($client_contact !=null)
                        @if($ct->type == $client_contact->type)
                        <option selected="" value="{{$ct->type}}">{{$ct->type}}</option>
                        @endif
                        @else
                        <option value="{{$ct->type}}">{{$ct->type}}</option>
                        
                        @endif
                        @endforeach
                    </select>
                </div>
                <div class="form-group col-md-8">
                    <label for="contact">Contact</label>
                    
                    @if($client_contact !=null)
                    <input type="text" class="form-control" id="contact" placeholder="+639999999999" name="contact_c" value="{{$client_contact->contact}}">
                    @else
                    <input type="text" class="form-control" id="contact" placeholder="+639999999999" name="contact_c" >
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-12">
                    <label for="occupation">Occupation</label>
                    <input type="text" class="form-control" id="occupation" placeholder="factory worker" name="occupation_c" value="{{$client->occupation}}">

                    <label for="contact_type">Civil Status</label>
                    <?php $civil_statuses = Civil_status::all(); ?>
                    <select name="civil_status_c" class="form-control">
                        @foreach($civil_statuses as $cs)
                        @if($cs->status == $client->civil_status)
                        <option selected="" value="{{$cs->status}}">{{$cs->status}}</option>
                        @else
                        <option value="{{$cs->status}}">{{$cs->status}}</option>
                        @endif
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
<hr>

<div>
    <div class="row ">
        <div class="form-group col-md-4">
            <label for="street">Street</label>
            @if($client_address != null)
            <input type="text" class="form-control" id="street" placeholder="1671 Pedro Gil St" name="street_client" value="{{$client_address->street}}">
            @else
            <input type="text" class="form-control" id="street" placeholder="1671 Pedro Gil St" name="street_client" >
            @endif
        </div>
        <div class="form-group col-md-4">
            <label for="city">City</label>
            @if($client_address != null)
            <input type="text" class="form-control" id="city" placeholder="Paco, Manila" name="city_client" value="{{$client_address->city}}">
            @else
            <input type="text" class="form-control" id="city" placeholder="Paco, Manila" name="city_client" >
            @endif
        </div>
        <div class="form-group col-md-4">
            <label for="city">Barangay</label>
            @if($client_address != null)
            <input type="text" class="form-control" id="city" placeholder="817" name="barangay_client" value="{{$client_address->barangay}}">
            @else
            <input type="text" class="form-control" id="city" placeholder="817" name="barangay_client" >
            @endif
        </div>
    </div>
    <div class="row ">
        <div class="form-group col-md-4">
            <label for="postal_code">Postal Code</label>
            @if($client_address != null)
            <input type="number" class="form-control" id="postal_code" placeholder="1007" name="postal_code_client" value="{{$client_address->postal_code}}">
            @else
            <input type="number" class="form-control" id="postal_code" placeholder="1007" name="postal_code_client" >
            @endif
        </div>
        <div class="form-group col-md-4">
            <label for="province">Province</label>
            @if($client_address != null)
            <input type="text" class="form-control" id="city" placeholder="Nueva Ecija" name="province_client" value="{{$client_address->province}}">
            @else
            <input type="text" class="form-control" id="city" placeholder="Nueva Ecija" name="province_client" >
            @endif
        </div>
    </div>
</div>