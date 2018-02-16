<!doctype html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ระบบงานประกันคุณภาพวิทยาลัยเทคนิคชัยภูมิ</title>
    <?php
    include "lib.php";

    ?>
    <script src="js/show.js"></script>
  <script src="js/index.js"></script>
    <script src="js/modal.js"></script>
</head>
<body>
<?php include "benner.php"?>
<div class="row">
    <form action="" method="post" id="form_login">
        <div class="col-md-4 col-md-offset-4">
            <div class="form-group">
                <label><h2>กรุณาเข้าสู่ระบบ</h2></label>
            </div>
            <div class="form-group">
                <label>ผู้ใช้งาน</label>
                <input class="form-control" type="text" name="txtusername" id="iduser" >
            </div>
            <div class="form-group">
                <label>รหัสผ่าน</label>
                <input class="form-control" type="password" name="txtpassword" id="idpassword" >
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-success" value="เข้าสู่ระบบ">
                <input type="reset" class="btn btn-danger" value="ยกเลิก">
            </div>
        </div>
    </form>
    <?php
    include "modal.php";
    ?>
</div>




</body>
</html>
