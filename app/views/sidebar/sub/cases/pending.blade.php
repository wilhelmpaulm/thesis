<div class="list-group" >
    <div class="list-group-item ">
        <div class="input-group custom-search-form input-group-sm">
            <input type="text" class="form-control " placeholder="Search...">
            <span class="input-group-btn">
                <button class="btn btn-default " type="button">
                    <i class="glyphicon glyphicon-search"></i>
                </button>
            </span>
        </div>
    </div>
    <div style="height: 450px; overflow-y: scroll">

        <?php $cases = Kase::where("status", "=", "Pending")->get(); ?>
        @foreach($cases as $case)
        <a  id="" href="#" data-case_id="{{$case->id}}" class="list-group-item c_link">
            <h4 class="list-group-item-heading">{{$case->name}}</h4>
            <p class="list-group-item-text">{{$case->details}}</p>
        </a>
        @endforeach



    </div>
</div>

<script>


    $(".c_link").on("click", function() {
        var case_id = $(this).data("case_id");
//        alert(case_id);

        $.get("http://localhost:8000/cases/show/"+case_id, function(data) {
//            alert("asdasd");
            $("#content").replaceWith(data);
        }

        );

//            window.history.pushState("#", "Title", window.location+"dashboard/1");

        return false;
    });

</script>
