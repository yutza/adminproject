$(document).ready(function () {

    $("#edit_quality").hide();
    $("#temquality").change(function () {
        if($("#temquality").val()!='no'){
            $.ajax({
                type:'post',
                url:'connection/select_quality.php',
                data:{id:$("#temquality").val()},
                success:function (data) {
//alert(data);
                    $("#showquality").html(data);
                    $("#edit_quality").show();
                }
            });
        }
    });
});