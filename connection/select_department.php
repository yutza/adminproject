<?php
include "connect.php";
$id=$_POST['id'];
$sql= "SELECT * FROM `tbl_department` WHERE `d_term` = '".$id."'";
$query=mysqli_query($conn,$sql);
while ($row=mysqli_fetch_array($query)){
    ?>
    <div class="panel panel-info" style="margin-top: 5px">
 <div class="panel-heading">
        <h3 class="panel-title"><h3 class="text-center">ข้อมูลสาขาวิชา ภาคเรียนที่ <?php echo $row[0]?></h3></h3>
    </div>
    <div class="form-group" style="margin-left: 20px" >
        <label>สาขาวิชาที่จัดการเรียนการสอน ระดับ ปวช. จำนวน</label>
        <input type="text" readonly class="form-control" value="<?php echo $row[1]; ?>">
    </div>
    <div class="form-group" style="margin-left: 20px">
        <label>สาขาวิชาที่จัดการเรียนการสอน ระดับ ปวส. จำนวน</label>
        <input type="text" readonly class="form-control" value="<?php echo $row[2]; ?>">
    </div>
    <div class="form-group" style="margin-left: 20px">
        <label>สาขาวิชาในระดับ ปวช. ที่มีข้าราชการครู พนักงานราชการครู ครูอัตราจ้างที่สถานศึกษาสัญญาจ้างต่อเนื่องไม่น้อยกว่า 1 ภาคเรียน มีคุณวิฒิด้านวิชาชีพตรงตาม สาขาวิชาที่สอนทุกคน จำนวน</label>
        <input type="text" readonly class="form-control" value="<?php echo $row[3];  ?>">
    </div>
    <div class="form-group" style="margin-left: 20px">
        <label>สาขาวิชาในระดับ ปวส. ที่มีข้าราชการครู พนักงานราชการครู ครูอัตราจ้างที่สถานศึกษาสัญญาจ้างต่อเนื่องไม่น้อยกว่า 1 ภาคเรียน มีคุณวิฒิด้านวิชาชีพตรงตาม สาขาวิชาที่สอนทุกคน จำนวน</label>
        <input type="text" readonly class="form-control" value="<?php echo $row[4]; ?>">
    </div>
    </div>
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">

                        <div class="panel panel-info" style="margin-top: 5px">
                            <div class="panel-heading">
                                <h3 class="panel-title"><h3 class="text-center">ข้อมูลสาขาวิชา ภาคเรียนที่ <?php echo $row[0]?></h3></h3>
                                <input hidden type="text" name="txtiddepartu" value="<?php echo $row[0]?>">
                            </div>
                            <div class="form-group" style="margin-left: 20px" >
                                <label>สาขาวิชาที่จัดการเรียนการสอน ระดับ ปวช. จำนวน</label>
                                <input type="text" name="txtvu"  class="form-control" value="<?php echo $row[1]?>" >
                            </div>
                            <div class="form-group" style="margin-left: 20px">
                                <label>สาขาวิชาที่จัดการเรียนการสอน ระดับ ปวส. จำนวน</label>
                                <input type="text" name="txtdu" class="form-control" value="<?php echo $row[2]?>" >
                            </div>
                            <div class="form-group" style="margin-left: 20px">
                                <label>สาขาวิชาในระดับ ปวช. ที่มีข้าราชการครู พนักงานราชการครู ครูอัตราจ้างที่สถานศึกษาสัญญาจ้างต่อเนื่องไม่น้อยกว่า 1 ภาคเรียน มีคุณวิฒิด้านวิชาชีพตรงตาม สาขาวิชาที่สอนทุกคน จำนวน</label>
                                <input type="text" name="txtvtu" class="form-control" value="<?php echo $row[3]?>" >
                            </div>
                            <div class="form-group" style="margin-left: 20px">
                                <label>สาขาวิชาในระดับ ปวส. ที่มีข้าราชการครู พนักงานราชการครู ครูอัตราจ้างที่สถานศึกษาสัญญาจ้างต่อเนื่องไม่น้อยกว่า 1 ภาคเรียน มีคุณวิฒิด้านวิชาชีพตรงตาม สาขาวิชาที่สอนทุกคน จำนวน</label>
                                <input type="text" name="txtdtu"  class="form-control" value="<?php echo $row[4]?>" >
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