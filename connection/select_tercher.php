<?php
include "connect.php";
$id=$_POST['id'];
$sql= "SELECT * FROM `tbl_techer` WHERE `t_tem` = '".$id."'";
$query=mysqli_query($conn,$sql);
while ($row=mysqli_fetch_array($query)){ ?>
    <div class="panel panel-info" style="margin-top: 5px">
 <div class="panel-heading">
        <h3 class="panel-title"><h3 class="text-center">ข้อมูลครู ภาคเรียนที่ <?php echo $row[0]?></h3></h3>
    </div>
    <div class="form-group" style="margin-left: 20px" >
        <label>ข้าราชการครู พนักงานราชการครู ครูอัตราจ้างที่สถานศึกษาที่สัญญาจ้างต่อเนื่องไม่น้อยกว่า 1 ภาคเรียน</label>
        <input type="text" readonly class="form-control" value="<?php echo $row[1]; ?>">
    </div>
    <div class="form-group" style="margin-left: 20px">
        <label>ครูที่จัดการเรียนรู้อย่างมีคุณภาพครบทั้ง 5 ปรเด็นการประเมิน จำนวน</label>
        <input type="text" readonly class="form-control" value=" <?php echo $row[2]; ?>">
    </div>
    <div class="row clearfix">
        <div class="col-md-6 col-md-offset-1">
            <label class="font-bold font-underline"><h3>ประเด็นการประเมิน</h3></label>
        </div>
        <div class="col-md-6 col-md-offset-2">
            <div class="form-group" >
                <label>     1.มีแผนการเรียนรู้สมบูรณ์ทุกรายวิชา</label></br>
                <label>     2.ใช้สื่อ แหล่งเรียนรู้ที่เหมาะสมกับหน่วยการเรียนรู้</label>
                <label>     3.จัดการเรียนการสอนตามแผนและมีบันทึกหลังการสอน</label>
                <label>     4.วัดและประเมินผลที่หลากหลาย และประเมินตามสภาพจริง</label>
                <label>     5.ใช้นวัตกรรมแก้ไขปัญหาการเรียนการสอน หรือโดยการใช้วิจัยในชั้นเรียน</label>
            </div>
        </div>
    </div>
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">ข้อมูลครูภาคเรียนที่ <?php echo $row[0]?></h4>
                        <input hidden type="text" name="txtidtecheru" value="<?php echo $row[0]?>">
                    </div>
                    <div class="modal-body">

                        <div class="panel panel-info" style="margin-top: 5px">
                            <div class="panel-heading">
                                <h3 class="panel-title"><h3 class="text-center">ข้อมูลครู ภาคเรียนที่ </h3></h3>
                            </div>
                            <div class="form-group" style="margin-left: 20px" >
                                <label>ข้าราชการครู พนักงานราชการครู ครูอัตราจ้างที่สถานศึกษาที่สัญญาจ้างต่อเนื่องไม่น้อยกว่า 1 ภาคเรียน</label>
                                <input type="text" name="txttecheru"  class="form-control" value="<?php echo $row[1]; ?>" >
                            </div>
                            <div class="form-group" style="margin-left: 20px">
                                <label>ครูที่จัดการเรียนรู้อย่างมีคุณภาพครบทั้ง 5 ปรเด็นการประเมิน จำนวน</label>
                                <input type="text" name="txtsubjectu"  class="form-control" value="<?php echo $row[2]; ?>" >
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
<?php }
?>