
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
    <script src="js/quality.js"></script>
</head>
<body>


<?php
include "benner.php";
include "nav.php";
?>
<div class="row">
    <div class="col-md-8 col-md-offset-1">
        <form action="update_quality.php" method="post">
            <div class="panel panel-info" style="margin-top: 5px">
                <div class="form-group">
                    <?php
                    include "connection/connect.php";
                    $sql="SELECT * FROM `tb_quality`";
                    $query=mysqli_query($conn,$sql);
                    if(!$query){
                        echo "Fail".mysqli_error($conn);
                    }
                    ?>
                <select id="temquality" class="form-control text-center">
<option value="no">เลือกภาคเรียน</option>
                    <?php
                    while ($row=mysqli_fetch_array($query)){ ?>
                        <option value="<?php echo $row["tem_quality"] ?>"><?php echo $row["tem_quality"] ?></option>
                 <?php   }
                    ?>
                </select>
                </div>
                <div id="showquality" >

                </div>
                <div class="form-group" id="edit_quality">
                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#update_quality">แก้ไขข้อมูล</button>
                </div>
            </div>

        </form>


    </div>
</div>
</body>
</html>