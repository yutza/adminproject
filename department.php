
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
    <script src="js/department.js"></script>
</head>
<body>


<?php
include "benner.php";
include "nav.php";
?>
<div class="row">
    <div class="col-md-8 col-md-offset-1">
        <form action="update_department.php" method="post">
            <div class="panel panel-info" style="margin-top: 5px">
                <label> <h2 class="text-center">เลือกภาคเรียน</h2></label>
                <div class="form-group">
                    <?php
                    include "connection/connect.php";
                    $sql="SELECT * FROM `tbl_department`";
                    $query=mysqli_query($conn,$sql);
                    if(!$query){
                        echo "Fail".mysqli_error($conn);
                    }
                    ?>
                <select id="temdepart" class="form-control text-center">
<option value="no">เลือกภาคเรียน</option>
                    <?php
                    while ($row=mysqli_fetch_array($query)){ ?>
                        <option value="<?php echo $row["d_term"] ?>"><?php echo $row["d_term"] ?></option>
                 <?php   }
                    ?>
                </select>
                </div>
                <div id="showdepartment" >

                </div>
                <div class="form-group" id="edit_department">
                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">แก้ไขข้อมูล</button>
                </div>
            </div>

        </form>


    </div>
</div>
<!-- Modal -->


</div>
</body>
</html>