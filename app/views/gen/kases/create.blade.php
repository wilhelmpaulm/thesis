<div class="content">
    <div class="navbar navbar-default">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="navbar-collapse collapse navbar-responsive-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Step 1</a></li>
                <li><a href="#">Link</a></li>
            </ul>
            <form class="navbar-form navbar-left">
                <input type="text" class="form-control col-lg-8" placeholder="Search">
            </form>
            <ul class="nav navbar-nav navbar-right">


            </ul>
        </div><!-- /.nav-collapse -->
    </div><!-- /.navbar -->


    <div class="progress progress-striped active">
        <div id="pb" class="progress-bar" style="width: 0px"></div>
    </div>

    <button id="lol">LOLOLOL</button>

    <script >
        
        var pw = $("#pb").parent().css("width");
        pw = parseInt(pw);
        var w = $("#pb").css("width");
        $("#lol").click(function() {
//          alert(pw); 

//            var w =  $("#pb").css("width");

            $("#pb").css({width: "+="+(pw/5)+"px"});
        });

    </script>

</div>