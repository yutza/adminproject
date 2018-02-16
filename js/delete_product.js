function ShowModal(title,message) {
    $("#mtitle").html(title);
    $("#mmessage").html(message);
    $("#messagebox").modal('show');
}
$(document).ready(function () {
    $("#id").change(function () {
        if($("#id").val() != '')
        {
            $.ajax({
                type: 'post',
                url: 'select_update.php',
                data: {id:$("#id").val()},
                success:function (data) {
                    $("#show").html(data);
                }
            });
        }
    });
    $("#reset").click(function () {
        $("#show").empty();
        location.reload();
    });
    $("#form_delete").submit(function (e) {
        if($("#id").val() != '') {
            $.ajax({
                type: 'post',
                url: 'delete.php',
                data: $("#form_delete").serialize(),
                success: function (data) {
                    if (data == 1) {
                        ShowModal('สำเร็จ', 'ลบสินค้าเรียบร้อยแล้ว');
                    } else {
                        ShowModal('ล้มเหลว', 'ไม่สามารถลบสินค้าได้');
                    }
                }
            });
        }
        e.preventDefault();
    });

});