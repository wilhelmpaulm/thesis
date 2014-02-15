<div class="list-group" >

    <div style="max-height: 500px; overflow-y:auto">
        <a id="shag" href="#" class="list-group-item ">
            <h4 class="list-group-item-heading">STEP 1</h4>
            <p class="list-group-item-text">
            <div class="progress progress-striped active">
                <div class="progress-bar"  role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%">
                    <span class="sr-only">45% Complete</span>
                </div>
            </div>
            </p>
        </a>
        <a id="shag" href="#" class="list-group-item ">
            <h4 class="list-group-item-heading">STEP 2</h4>
            <p class="list-group-item-text">Complainant</p>
        </a>
        <a id="shag" href="#" class="list-group-item ">
            <h4 class="list-group-item-heading">STEP 3</h4>
            <p class="list-group-item-text">Victim Details</p>
        </a>
        <a id="shag" href="#" class="list-group-item ">
            <h4 class="list-group-item-heading">STEP 4</h4>
            <p class="list-group-item-text">Accu</p>
        </a>





    </div>
</div>

<script>


    $("#shag").on("click", function() {
        $.get("http://localhost:8000/content/1", function(data) {
            $("#content").replaceWith(data);
        });

//            window.history.pushState("#", "Title", window.location+"dashboard/1");

        return false;
    });

</script>
