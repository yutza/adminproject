function ShowModal(title,message) {
    $("#mtitle").html(title);
    $("#mmessage").html(message);
    $("#messagebox").modal('show');
}
$(document).ready(function () {

    $("#form_create").submit(function (e) {

        if($("#title").val().length < 1)
        {
            ShowModal('ข้อมูลไม่ครบ','ชื่อสินค้าต้องไม่เป็นค่าว่าง');
            $("#title").focus();
        }else if($("#description").val()< 1)
        {
            ShowModal('ข้อมูลไม่ครบ','รายละเอียดสินค้าต้องไม่เป็นค่าว่าง');
        }else if ($("#price").val()< 1 || !$("#price").val().match('[-+]?([0-9]*.[0-9]+|[0-9]+)'))
        {
            ShowModal('ข้อมูลไม่ครบ','ราคาสินค้าต้องไม่เป็นค่าว่างและเป็นตัวเลขเท่านั้น');
        }else if ($("#imagepath").files()< 1)
        {
            ShowModal('ข้อมูลไม่ครบ','ตำแหน่งภาพต้องไม่เป็นค่าว่าง');
        }else if($("#category").val()<1){
            ShowModal('ข้อมูลไม่ครบ','กรุนาเลือกเหมวดหมู่');
        }

        else {
            $.ajax({
               type: 'POST',
               url: 'create.php',
               data: $("#form_create").serialize(),
               success:function (data) {
                   if(data == 1)
                   {
                       ShowModal('สำเร็จ','สร้างสินค้าเรียบร้อยแล้ว');
                   }else
                   {
                       ShowModal('ล้มเหลว','ไม่สามารถสร้างสินค้าได้');
                   }
               }
            });
        }
        e.preventDefault();
    });

});