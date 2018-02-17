
$(document).ready(function () {
    $("#btnupdate").hide();
$("#form_login").submit(function (e) {
    e.preventDefault();
        //alert("OK");
       if($("#iduser").val().length < 1){
           showmo('คำเตือน','กรุณาป้อนผู้ใช้งาน');
       }else if($("#idpassword").val().length <1){
        showmo('คำเตือน','กรุณาป้อนรหัสผ่าน');
       }
       else{
           $.ajax({
               type: "post",
               url: "connection/Check_login.php",
               data: $("#form_login").serialize(),
               success: function (data) {
                   if(data >0){
                       window.location="home.php";
                   }
                   else{
                       showmo('คำเตือน','ผู้ใช้งานหรือรหัสผ่านไม่ถูกต้อง');
                   }
               }
           });
       }
    });
});
