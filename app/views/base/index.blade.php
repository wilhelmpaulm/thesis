@extends("layouts.base2")
@section("main")



        
                    
                    <div id="loginbody">
                        <form  class="" action="{{URL::to("login")}}" method="POST">
                            <div class="row ">
                                <div class="col-md-6 col-md-offset-3">
                                    <div class="input-group">
                                        <span class="input-group-addon input-lg c-belizehole"><i class="fa fa-user"></i></span>
                                        <input class="form-control input-lg  c-belizehole" placeholder="Username"  type="text" name="username" value="" /><br>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-6 col-md-offset-3">
                                    <div class="input-group">
                                        <span class="input-group-addon input-lg c-belizehole"><i class="fa fa-key"></i></span>
                                        <input class="form-control input-lg c-belizehole" placeholder="Password" type="password" name="password" value="" /><br>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-6 col-md-offset-3">
                                    <input class="btn btn-primary btn-block " type="submit" value="login" />
                                </div>
                            </div>
                        </form>

                    </div>
              
    <style>
/*        #signuphead, #loginhead :hover{
            cursor: pointer;
        }*/

    </style>
    <script>
//        $("#signupbody").hide();
//
//        $("#signuphead").on("click", function() {
//            $("#signupbody").toggle("slow")
//        });
//        $("#loginbody").hide();
//        $("#loginhead").on("click", function() {
//            $("#loginbody").toggle("slow");
//        });
//
//        $("#geoLoc").on("click", function() {
//            getLocation();
//            return false;
//        });

//        function getLocation()
//        {
//            if (navigator.geolocation)
//            {
//                navigator.geolocation.getCurrentPosition(showPosition);
//            }
//            else {
//                alert("Geolocation is not supported here");
//            }
//        }
//        function showPosition(position)
//        {
//            $("#x").val(position.coords.latitude);
//            $("#y").val(position.coords.longitude);
//
//        }


    </script>
    @stop