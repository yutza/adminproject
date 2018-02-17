<?php 
include "connect.php";
$id=$_POST['id'];
$sql="SELECT * FROM `tbl_student` WHERE `tem_st`='$id'";
$query=mysqli_query($conn,$sql);
if(!$query){
    echo "ERROR".mysqli_error($conn);
}
else{
    $row=mysqli_fetch_array($query);
    $addtem=$row["st_addtem"];
    ?>
      <div class="panel panel-info" style="margin-top: 20px">
                <div class="panel-heading">
                    <h3 class="panel-title"><h3 class="text-center">ข้อมูลนักเรียนนักศึกษา ภาคเรียนที่<?php echo $row[0] ?></h3></h3>
                </div>
                <div class="form-group" style="margin-left: 20px" >
                   <label for="">ผู้เรียน ระดับ ปวช. ทั้งหมดจำนวน</label>
                   <input value="<?php echo $row["len_v"] ?>" name="" type="text" class="form-control">
                </div>
                <div class="form-group" style="margin-left: 20px" >
                <label for="">ผู้เรียน ระดับ ปวส. ทั้งหมดจำนวน</label>
                   <input value="<?php echo $row["len_d"] ?>" name="" type="text" class="form-control">
                </div>
                <div class="form-group" style="margin-left: 20px" >
                <label for="">ผู้เรียน อาวีวศึกษาระบบทวิภาคี ระดับ ปวช. จำนวน</label>
                   <input value="<?php echo $row["len_tv"] ?>" name="" type="text" class="form-control">
                </div>
                <div class="form-group" style="margin-left: 20px" >
                <label for="">ผู้เรียน อาวีวศึกษาระบบทวิภาคี ระดับ ปวส. จำนวน</label>
                   <input value="<?php echo $row["len_td"] ?>" name="" type="text" class="form-control">
                </div>
                <div class="form-group">
                    <button type="button" class="btn btn-info " data-toggle="modal" data-target="#myModal">แก้ไขข้อมูล</button>
                </div>
            </div>
           
        </div>
        
                <!--fast2-->
                <div class="panel panel-info" style="margin-top: 20px">
                <div class="form-group" style="margin-left: 20px" >
                   <label for="">ผู้เรียนแรกแข้าในระดับ ปวช. ปีการศึกษา <?php echo $addtem-2 ?> จำนวน</label>
                   <input value="<?php echo $row["fen_vfa"] ?>" name="" type="text" class="form-control">
                </div>
                <div class="form-group" style="margin-left: 20px" >
                <label for="">ผู้สำเร็จการศึกษา ปวช. ปีการศึกษา <?php echo $addtem ?> จำนวน</label>
                   <input value="<?php echo $row["fen_vfi"] ?>" name="" type="text" class="form-control">
                </div>
                <div class="form-group" style="margin-left: 20px" >
                <label for="">ผู้เรียนที่ไม่สำเร็จการศึกษาแต่ยังคงสภาพ ระดับ ปวช. ปีการศึกษา <?php echo $addtem-2 ?> จำนวน</label>
                   <input value="<?php echo $row["fen_nv"] ?>" name="" type="text" class="form-control">
                </div>
                <div class="form-group" style="margin-left: 20px" >
                <label for="">ผู้เรียนแรกแข้าในระดับ ปวส. ปีการศึกษา <?php echo $addtem-1 ?> จำนวน</label>
                   <input value="<?php echo $row["fen_dfa"] ?>" name="" type="text" class="form-control">
                </div>
                <div class="form-group" style="margin-left: 20px" >
                <label for="">ผู้สำเร็จการศึกษา ปวส. ปีการศึกษา <?php echo $addtem ?> จำนวน</label>
                   <input value="<?php echo $row["fen_dfi"] ?>" name="" type="text" class="form-control">
                </div>
                <div class="form-group" style="margin-left: 20px" >
                <label for="">ผู้เรียนที่ไม่สำเร็จการศึกษาแต่ยังคงสภาพ ระดับ ปวส. ปีการศึกษา <?php echo $addtem-1 ?> จำนวน</label>
                   <input value="<?php echo $row["fen_nd"] ?>" name="" type="text" class="form-control">
                </div>
                <div class="form-group">
                    <button type="button" class="btn btn-info " data-toggle="modal" data-target="#myModal">แก้ไขข้อมูล</button>
                </div>
            </div>
        </div>
        </div>
                    <!--fast3-->
                    <div class="panel panel-info" style="margin-top: 20px">
                    <div class="form-group" style="margin-left: 20px" >
                   <label for="">แผนการรับผู้เรียน ระดับ ปวช. ปีการศึกษา <?php echo $addtem ?> จำนวน</label>
                   <input value="<?php echo $row["plan_v"] ?>" name="" type="text" class="form-control">
                </div>
                <div class="form-group" style="margin-left: 20px" >
                <label for="">แผนการรับผู้เรียน ระดับ ปวส. ปีการศึกษา <?php echo $addtem ?> จำนวน</label>
                   <input value="<?php echo $row["plan_d"] ?>" name="" type="text" class="form-control">
                </div>
                <div class="form-group" style="margin-left: 20px" >
                <label for="">ผู้เรียนที่สมัครเรียน ระดับ ปวช. ปีการศึกษา <?php echo $addtem ?> จำนวน</label>
                   <input value="<?php echo $row["regis_v"] ?>" name="" type="text" class="form-control">
                </div>
                <div class="form-group" style="margin-left: 20px" >
                <label for="">ผู้เรียนที่สมัครเรียน ระดับ ปวส. ปีการศึกษา <?php echo $addtem ?> จำนวน</label>
                   <input value="<?php echo $row["regis_d"] ?>" name="" type="text" class="form-control">
                </div>
                <div class="form-group">
                    <button type="button" class="btn btn-info " data-toggle="modal" data-target="#myModal">แก้ไขข้อมูล</button>
                </div>
            </div>
        </div>
        </div>
                 <!--fast4-->
                 <div class="panel panel-info" style="margin-top: 20px">
                 <div class="form-group" style="margin-left: 20px" >
                   <label for="">ผู้เรียนที่เข้ารับการประเมินมาตรฐานวิชาชีพระดับ ปวช.3 จำนวน</label>
                   <input value="<?php echo $row["st_v3"] ?>" name="" type="text" class="form-control">
                </div>
                <div class="form-group" style="margin-left: 20px" >
                <label for="">ผู้เรียนที่เข้ารับการประเมินมาตรฐานวิชาชีพระดับ ปวส.2 จำนวน</label>
                   <input value="<?php echo $row["st_d2"] ?>" name="" type="text" class="form-control">
                </div>
                <div class="form-group" style="margin-left: 20px" >
                <label for="">ผู้เรียนที่ผา่นการประเมินมาตรฐานวิชาชีพในครั้งแรกระดับ ปวช.3 จำนวน</label>
                   <input value="<?php echo $row["stok_v3"] ?>" name="" type="text" class="form-control">
                </div>
                <div class="form-group" style="margin-left: 20px" >
                <label for="">ผู้เรียนที่ผา่นการประเมินมาตรฐานวิชาชีพในครั้งแรกระดับ ปวส.2 จำนวน</label>
                   <input value="<?php echo $row["stok_d2"] ?>" name="" type="text" class="form-control">
                </div>
                <div class="form-group">
                    <button type="button" class="btn btn-info " data-toggle="modal" data-target="#myModal">แก้ไขข้อมูล</button>
                </div>
            </div>
        </div>
        </div>
                <!--fast5-->
                <div class="panel panel-info" style="margin-top: 20px">
                <div class="form-group" style="margin-left: 20px" >
                   <label for="">ผู้สำเร็จการศึกษาระดับ ปวช. ปีการศึกษา <?php echo $addtem-1 ?> จำนวน</label>
                   <input value="<?php echo $row["finish_v"] ?>" name="" type="text" class="form-control">
                </div>
                <div class="form-group" style="margin-left: 20px" >
                <label for="">ผู้สำเร็จการศึกษาระดับ ปวส. ปีการศึกษา <?php echo $addtem-1 ?> จำนวน</label>
                   <input value="<?php echo $row["finish_d"] ?>" name="" type="text" class="form-control">
                </div>
                <div class="form-group" style="margin-left: 20px" >
                <label for="">ผู้สำเร็จการศึกษาระดับ ปวช. ปีการศึกษา <?php echo $addtem-1 ?> มีงานทำ ประกอบอาชีพอิสระ หรือ ศึกษาต่อภายใน 1 ปี</label>
                   <input value="<?php echo $row["finish_vjob"] ?>" name="" type="text" class="form-control">
                </div>
                <div class="form-group" style="margin-left: 20px" >
                <label for="">ผู้สำเร็จการศึกษาระดับ ปวส. ปีการศึกษา <?php echo $addtem-1 ?> มีงานทำ ประกอบอาชีพอิสระ หรือ ศึกษาต่อภายใน 1 ปี</label>
                   <input value="<?php echo $row["finish_djob"] ?>" name="" type="text" class="form-control">
                </div>
                <div class="form-group">
                    <button type="button" class="btn btn-info " data-toggle="modal" data-target="#myModal">แก้ไขข้อมูล</button>
                </div>
            </div>
        </div>
        </div>
<?php }
?>