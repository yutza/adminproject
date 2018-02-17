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
    <div class="modal fade" id="update_quality" role="dialog">
    <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title"></h4>
        </div>
        <div class="modal-body">

            <div class="panel panel-info" style="margin-top: 5px">
            <div class="panel-heading">
        <h3 class="panel-title"><h3 class="text-center">แก้ไขข้อมูลผลการประเมินภายในโดยต้นสังกัดและผลการประเมินของสถานประกอบการ ปีการศึกษา<?php echo $row[0]?></h3></h3>
    </div>
                <div class="form-group" style="margin-left: 20px" >
                    <label>ผลการประเมินคุณภาพภายในการอาชีวศึกษาโดยหน่วยงานตั้นสังกัดได้รับคะแนน</label>
                    <input name="txtdepartup" type="text" value="<?php echo $row[1]; ?>"  class="form-control">
                    <input hidden value="<?php echo $row[0]?>" type="text" name="txttemup" id="txttemup">
                </div>
                <div class="form-group" style="margin-left: 20px">
                    <label>ผลการประเมินความพึงพอใจของสถานประกอบการ หรือผู้รับบริการที่มีต่อคุณภาพของผู้สำเร็จการศึกษาในภาพรวมของสถานศึกษาอยู่ในระดับ</label>
                 <select  name="txtcompanyup" class="form-control">
                 <option class="text-info" value="<?php echo $row[2]; ?>"><?php echo $row[2]; ?></option>
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



    </div>
</div>

</div>
<?php }
?>