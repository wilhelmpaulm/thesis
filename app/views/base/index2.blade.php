@extends("layouts.base")
@section("main")


<style>
    /*        #signuphead, #loginhead :hover{
                cursor: pointer;
            }*/

</style>

<div class="">




    <form action="{{URL::to('agent/validate')}}" method="post">
        LOLOL<input type="checkbox" value="lolol" name="foo">
        BANG<input type="checkbox" value="bang" name="foo">


        <select id="list1" name="lol" >
            <option>lol</option>
            <option>bang</option>
            <option>foo</option>
        </select>

        <select id="l" name="lol">
        </select>
        <button >asdasdad</button>
        <hr>
        <hr>
        <hr>
        <hr >
        <div id="addition">
            <!--HERE-->
        </div>
    </form>
    <div id="choices" class="hide"> 

        <select id="l" name="lol">

            <option>lol1</option>
            <option>lol2</option>
            <option>lol3</option>
        </select>
    </div>



    <div id="choices2" class="hide"> 
        <select id="l" name="lol">
            <option>item1</option>
            <option>item2</option>
            <option>item3</option>
        </select>
    </div>
</div>



<script>
    $("#list1").on("change", function() {
        var x = $(this).val();
        if (x == "bang")
        {
            $("#l").replaceWith($("#choices").html());
//            $("#addition").append($("#choices").html());
        } else if (x == "foo") {

            $("#l").replaceWith($("#choices2").html());
//            $("#addition").append($("#choices2").html());

        }
        alert(x);
    });






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