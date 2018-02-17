$(document).ready(function () {

    $("#edit_techer").hide();
    $("#temtecher").change(function () {

        if($("#temtecher").val()!='no'){
            $.ajax({
                type:'post',
                url:'connection/select_student.php',
                data:{id:$("#temtecher").val()},
                success:function (data) {
//alert(data);
                    $("#showtecher").html(data);
                  
                }
            });
        }
    });
});