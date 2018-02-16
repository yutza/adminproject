
<!doctype html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ระบบงานประกันคุณภาพวิทยาลัยเทคนิคชัยภูมิ</title>
    <?php
    session_start();
    include "lib.php";

    ?>
    <script src="js/home.js"></script>
</head>
<body>


<?php
include "benner.php";
include "nav.php";
?>
<div class="row">
    <div class="col-md-8 col-md-offset-1">
        <div class="panel panel-info" style="margin-top: 5px">
            <div class="panel-heading">
                <h3 class="panel-title"><h3>ยินดีต้อนรับ</h3></h3>
            </div>
            <div class="form-group" style="margin-left: 20px" >
                <label>ชื่อวิทยาลัย</label>
                <input type="text" readonly class="form-control" value="<?php echo$_SESSION["School"] ?>">
            </div>
            <div class="form-group" style="margin-left: 20px">
                    <label>ประเภท</label>
                  <input type="text" readonly class="form-control" value=" <?php echo $_SESSION["Schooltype"] ?>">
            </div>
            <div class="form-group" style="margin-left: 20px">
                <label>จังหวัด</label>
                <input type="text" readonly class="form-control" value="<?php echo $_SESSION["Province"] ?>">
            </div>
        </div>

    </div>
</div>
<?php include "modal.php"?>
</body>
</html>