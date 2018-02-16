<?php
include "connect.php";
$id=$_POST['id'];
$sql= "SELECT * FROM `tb_quality` WHERE `tem_quality` = '".$id."'";
$query=mysqli_query($conn,$sql);
while ($row=mysqli_fetch_array($query)){ ?>
    <div class="panel panel-info" style="margin-top: 5px">
 <div class="panel-heading">
        <h3 class="panel-title"><h3 class="text-center">ข้อมูลผลการประเมินภายในโดยต้นสังกัดและผลการประเมินของสถานประกอบการ ปีการศึกษา<?php echo $row[0]?></h3></h3>
    </div>
    <div class="form-group" style="margin-left: 20px" >
        <label>ผลการประเมินคุณภาพภายในการอาชีวศึกษาโดยหน่วยงานตั้นสังกัดได้รับคะแนน</label>
        <input type="text" readonly class="form-control" value="<?php echo $row[1]; ?>">
    </div>
    <div class="form-group" style="margin-left: 20px">
        <label>ผลการประเมินความพึงพอใจของสถานประกอบการ หรือผู้รับบริการที่มีต่อคุณภาพของผู้สำเร็จการศึกษาในภาพรวมของสถานศึกษาอยู่ในระดับ</label>
        <input type="text" readonly class="form-control" value=" <?php echo $row[2]; ?>">
    </div>

<?php }
?>