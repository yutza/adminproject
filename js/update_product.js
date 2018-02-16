
$(document).ready(function () {
alert()
    $("#id").change(function () {
        if($("#id").val() != 'non')
        {
            $.ajax({
                type: 'post',
                url: 'selecttem.php',
                data: {id:$("#id").val()},
                success:function (data) {
                    $("#show").html(data);
                }
            });
        }
    });
    $("#reset").click(function () {
       location.reload();
    });

});