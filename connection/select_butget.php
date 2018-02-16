<?php
include "connect.php";
$_SESSION["B_tem"]=null;
$id=$_POST['id'];
$sql= "SELECT * FROM `tb_budget` WHERE `b_term` = '".$id."'";
$query=mysqli_query($conn,$sql);
while ($row=mysqli_fetch_array($query)){
    ?>
    <div class="panel panel-info" style="margin-top: 5px">
    <div class="panel-heading">
        <h3 class="panel-title"><h3 class="text-center">ข้อมูลงบประมาณภาคเรียนที่ <?php echo $row[0] ?> </h3></h3>
    </div>
    <div class="form-group" style="margin-left: 20px" >
        <label>งบดำเนินการ:งบดำเนินงาน งบเงินอุดหนุน และเงินรายได้สถานศึกษา(ไม่รวมงบบุคคลากร)จำนวน(บาท)</label>
        <input type="text" readonly class="form-control" value="<?php echo number_format(floatval($row[1]),2,'.',','); ?>">
    </div>
    <div class="form-group" style="margin-left: 20px">
        <label>งบประมานที่ใช้จัดการเรียนการสอน:ค่าวัสดุ และอุปกรณ์การจัดการเรียนการสอน จำนวน(บาท)</label>
        <input type="text" readonly class="form-control" value="<?php echo number_format(floatval($row[2]),2,'.',','); ?>">
    </div>
    <div class="form-group" style="margin-left: 20px">
        <label>งบลงทุน:งบเฉพาะที่เกี่ยวข้องกับระบบเทคโนโลยีสารสนเทศ (ICT) จำนวน(บาท)</label>
        <input type="text" readonly class="form-control" value="<?php echo number_format(floatval($row[3]),2,'.',',');  ?>">
    </div>
    <div class="form-group" style="margin-left: 20px">
        <label>งบประมาณที่ใช้ในการพัฒนาระบบเทคโนโลยีสารสนเทศ(ICT)เพื่อการจัดการเรียนการสอน จำนวน(บาท)</label>
        <input type="text" readonly class="form-control" value="<?php echo number_format(floatval($row[4]),2,'.',','); ?>">
    </div>
    </div>
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
            <form action="../update_butget.php" id="form_updatebutget" method="post">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">ข้อมูลงบประมาณภาคเรียนที่ <?php echo $row[0] ?></h4>
                        <input hidden name="txtidup" value="<?php echo $row[0] ?>">
                    </div>
                    <div class="modal-body">

                        <div class="panel panel-info" style="margin-top: 5px">
                            <div class="form-group" style="margin-left: 20px" >
                                <label>งบดำเนินการ:งบดำเนินงาน งบเงินอุดหนุน และเงินรายได้สถานศึกษา(ไม่รวมงบบุคคลากร)จำนวน(บาท)</label>
                                <input type="text" name="txtstu" class="form-control" value="<?php echo number_format(floatval($row[1]),2,'.',','); ?>" >
                            </div>
                            <div class="form-group" style="margin-left: 20px">
                                <label>งบประมานที่ใช้จัดการเรียนการสอน:ค่าวัสดุ และอุปกรณ์การจัดการเรียนการสอน จำนวน(บาท)</label>
                                <input type="text"  name="txtlenu" class="form-control" value="<?php echo number_format(floatval($row[2]),2,'.',','); ?>" >
                            </div>
                            <div class="form-group" style="margin-left: 20px">
                                <label>งบลงทุน:งบเฉพาะที่เกี่ยวข้องกับระบบเทคโนโลยีสารสนเทศ (ICT) จำนวน(บาท)</label>
                                <input type="text" name="txtictu"  class="form-control"  value="<?php echo number_format(floatval($row[3]),2,'.',',');  ?>">
                            </div>
                            <div class="form-group" style="margin-left: 20px">
                                <label>งบประมาณที่ใช้ในการพัฒนาระบบเทคโนโลยีสารสนเทศ(ICT)เพื่อการจัดการเรียนการสอน จำนวน(บาท)</label>
                                <input type="text" name="txtictlenu"  class="form-control" value="<?php echo number_format(floatval($row[4]),2,'.',','); ?>" >
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="submit"class="btn btn-success" value="บันทึก">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">ปิด</button>
                    </div>
                </div>



        </div>
    </div>

<?php }

?>