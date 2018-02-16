/*function ShowModal(title,message) {
    $("#title").html(title);
    $("#message").html(message);
    $("#updateaword").modal('show');
}*/
$(document).ready(function () {

$("#form_login").submit(function (e) {

   if( $("#iduser").val().length <1){
      alert('กรุณาป้อน ผู้ใช้งาน');
       //ShowModal('คำเตือน','กรุณาป้อนผู้ใฃ้งาน');
   }
   else if($("#idpassword").val().length <1){
       ShowModal('คำเตือน','กรุณาป้อน รหัสผ่าน');
   }
   else {

       $.ajax({
           type:'post',
           url:'connection/Check_login.php',
           data: $("#form_login").serialize(),
           success:function (data) {
               if(data==1){

                   window.location="home.php";
               }else {
                   ShowModal('คำเตือน','ผู้ใข้งานหรือรหัสผ่านไม่ถูกต้อ');
               }
           }
       });
   }

});
});