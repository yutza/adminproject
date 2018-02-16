
$(document).ready(function () {
    $("#edit_butget").hide();
$("#tem").change(function () {



$.ajax({
    type:'post',
    url:'connection/select_butget.php',
    data:{id:$("#tem").val()},
    success:function (data) {
//alert(data);

       $("#showbutget").html(data);
        $("#edit_butget").show();
    }
});

});
$("#formsetembut").submit(function () {
   alert("OK");
});
});