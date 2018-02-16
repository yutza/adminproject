
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
        <form action="#" method="post">
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
                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">แก้ไขข้อมูล</button>
                </div>
            </div>

        </form>


    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
<form action="#" id="form_updatebutget" method="post">
    <!-- Modal content-->
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">ข้อมูลผลการประเมินภายในโดยต้นสังกัดและผลการประเมินของสถานประกอบการ ปีการศึกษา</h4>
        </div>
        <div class="modal-body">

            <div class="panel panel-info" style="margin-top: 5px">
                <div class="form-group" style="margin-left: 20px" >
                    <label>ผลการประเมินคุณภาพภายในการอาชีวศึกษาโดยหน่วยงานตั้นสังกัดได้รับคะแนน</label>
                    <input type="text"  class="form-control">
                </div>
                <div class="form-group" style="margin-left: 20px">
                    <label>ผลการประเมินความพึงพอใจของสถานประกอบการ หรือผู้รับบริการที่มีต่อคุณภาพของผู้สำเร็จการศึกษาในภาพรวมของสถานศึกษาอยู่ในระดับ</label>
                 <select class="form-control">
                     <option>ดีมาก</option>
                     <option>ดี</option>
                     <option>พอใช้</option>
                     <option>ควรปรับปรุง</option>
                 </select>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="submit"class="btn btn-success">บันทึก</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">ปิด</button>
        </div>
    </div>
</form>


    </div>
</div>

</div>
</body>
</html>