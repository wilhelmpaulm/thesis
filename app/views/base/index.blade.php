@extends("layouts.base2")
@section("main")



<h4 id="login-message" class="c-lightblue lead"></h4>

<div id="loginbody">
    <form  class="" action="{{URL::to("login")}}" method="POST" id="login-form">
        <div class="row ">
            <div class="col-md-6 col-md-offset-3">
                <div class="input-group">
                    <span class="input-group-addon input-lg c-belizehole"><i class="fa fa-user"></i></span>
                    <input id="username" class="form-control input-lg  c-belizehole" placeholder="User ID"  type="text" name="username" value="" /><br>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="input-group">
                    <span class="input-group-addon input-lg c-belizehole"><i class="fa fa-key"></i></span>
                    <input id="password" class="form-control input-lg c-belizehole" placeholder="Password" type="password" name="password" value="" /><br>
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
<script>
    $(document).ready(function() {
        $("#login-form").submit(function() {
            $("#login-message").text("Attempting to log in . . . ");
            username = $("#username").val();
            password = $("#password").val();
            $.ajax({
                type: "GET",
                url: "log-fake",
                data: "username=" + username + "&password=" + password,
                success: function(html) {
                    if (html == 'false') {
                        $("#login-message").text("Log in attempt failed");
                        
                    }
                    else {
//                        alert(html);
                        //$("#add_err").html("right username or password");
                        $("#login-message").text("Log in successful . . . loading");
                        @if(Auth::user()!= null)
//                        window.location = "{{strtolower(Auth::user()->job_title).'/dashboard'}}";
                        @endif
                        window.location = html;
                    }
                },
            });
            return false;
        });
    });



</script>



@stop