
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
    <script src="js/student.js"></script>
</head>
<body>


<?php
include "benner.php";
include "nav.php";
?>
<div class="row">
    <div class="col-md-8 col-md-offset-1">
        <form action="update_techer.php" method="post">
            <div class="panel panel-info" style="margin-top: 5px">
                <label> <h2 class="text-center">เลือกภาคเรียน</h2></label>
                <div class="form-group">
                    <?php
                    include "connection/connect.php";
                    $sql="SELECT * FROM `tbl_student`";
                    $query=mysqli_query($conn,$sql);
                    if(!$query){
                        echo "Fail".mysqli_error($conn);
                    }
                    ?>
                <select id="temtecher" class="form-control text-center">
<option value="no">เลือกภาคเรียน</option>
                    <?php
                    while ($row=mysqli_fetch_array($query)){ ?>
                        <option value="<?php echo $row[0] ?>"><?php echo $row[0] ?></option>
                 <?php   }
                    ?>
                </select>
                </div>
                <div id="showtecher" >

                </div>
                
            </div>

        </form>


    </div>
</div>
<!-- Modal -->


</div>
</body>
</html>