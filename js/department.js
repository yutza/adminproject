$(document).ready(function () {

    $("#edit_department").hide();
    $("#temdepart").change(function () {

        if($("#temdepart").val()!='no'){
            $.ajax({
                type:'post',
                url:'connection/select_department.php',
                data:{id:$("#temdepart").val()},
                success:function (data) {
//alert(data);
                    $("#showdepartment").html(data);
                  $("#edit_department").show();
                }
            });
        }
    });
});