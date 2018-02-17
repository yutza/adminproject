<?php 
include "connect.php";
$id=$_GET['id'];
$sql="SELECT * FROM `tbl_asword_alumni` WHERE `id_al`=$id";
$query=mysqli_query($conn,$sql);
if(!$query){
    echo "ERROR".mysqli_error($conn);
}
else{
    $row=mysqli_fetch_array($query);
    ?>
    <div class="panel panel-info" style="margin-top: 5px">
                <div class="panel-heading">
                    <h3 class="panel-title"><h3 class="text-center">แก้ไขข้อมูลศิษเก่าที่ประสบความสำเร็จในการประกอบอาชีพ</h3></h3>
                </div>
                <div class="form-group" style="margin-left: 20px" >
                    <label>ชื่อศิษย์เก่า</label>
                    <input value="<?php echo $row[1]?>" name="txtnameal"  type="text"  class="form-control" placeholder="ชื่อศิษย์เก่า" >
                </div>
                <div class="form-group" style="margin-left: 20px" >
                    <label>ชื่อรางวัล</label>
                    <input value="<?php echo $row[2]?>" name="txtname" type="text"  class="form-control" placeholder="ชื่อรางวัล" >
                </div>
                <div class="form-group" style="margin-left: 20px">
                    <label>ปีที่ได้รางวัล</label>
                   <select  name="txtyear" class="form-control">
                   <option value="<?php echo $row[3]?>"><?php echo $row[3]?></option>
                       <option>2554</option>
                       <option>2555</option>
                       <option>2556</option>
                       <option>2557</option>
                       <option>2558</option>
                       <option>2559</option>
                       <option>2560</option>
                       <option>2561</option>
                       <option>2562</option>
                       <option>2563</option>
                   </select>
                </div>
               
                <div class="form-group" style="margin-left: 20px" >
                    <label>ระดับ</label>
                    <select name="txttire" class="form-control">
                    <option value="<?php echo $row[4] ?>"><?php echo $row[4] ?></option>
                        <option>นานาชาติ</option>
                        <option>ประเทศ</option>
                        <option>ภาค</option>
                        <option>จังหวัด</option>
                    </select>
                </div>
                <div class="form-group" style="margin-left: 20px" >
                    <label>จากหน่วยงาน</label>
                    <input value="<?php echo $row[5]?>" name="txtdepart" type="text"  class="form-control" placeholder="จากหน่วยงาน" >
                </div>
                <div class="form-group" style="margin-left: 20px" >
                    <label>หลักฐาน</label>
                    <input name="txtfile_al" type="file"  class="form-control" >
                    <input hidden value="<?php echo $row[0]?>" type="text" name="txtid" id="txtid">
                </div>
            </div>
               
<?php }
?>