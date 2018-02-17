<?php 
include "connect.php";
$id=$_GET['id'];
$sql="SELECT * FROM `tbl_aword_techer` WHERE `id_at`=$id";
$query=mysqli_query($conn,$sql);
if(!$query){
    echo "ERROR".mysqli_error($conn);
}
else{
    $row=mysqli_fetch_array($query);
    ?>
      <div class="panel panel-info" style="margin-top: 5px">
                <div class="panel-heading">
                    <h3 class="panel-title"><h3 class="text-center">แก้ไขข้อมูลผลงานสิ่งประดิษฐ์ นวัตกรรม งานสร้างสรรค์ หรืองานวิจัยของครู</h3></h3>
                </div>
                <div class="form-group" style="margin-left: 20px" >
                    <label>ชื่อครู</label>
                    <input value="<?php echo $row["name_techer_at"] ?>" name="txtnametecher" type="text"  class="form-control" placeholder="ชื่อครู" >
                </div>
                <div class="form-group" style="margin-left: 20px" >
                    <label>ชื่อผลงาน</label>
                    <input  value="<?php echo $row["name_at"] ?>" name="txtname" type="text"  class="form-control" placeholder="ชื่อผลงาน" >
                </div>
                <div class="form-group" style="margin-left: 20px">
                    <label>ปีการศึกษาที่ได้รับรางวัล</label>
                   <select name="txtyear" class="form-control">
                   <option value="<?php echo $row["year_at"] ?>"><?php echo $row["year_at"] ?></option>
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
                    <label>รางวัล</label>
                  <select name="txtaword" class="form-control">
                  <option value="<?php echo $row["aword_te"] ?>"><?php echo $row["aword_te"] ?></option>
                      <option>ชนะเลิศ</option>
                      <option>รองชนะเลิศ</option>
                      <option>รองชนะเลิศอันดับสอง</option>
                      <option>ชมเชย</option>
                  </select>
                </div>
                <div class="form-group" style="margin-left: 20px" >
                    <label>ระดับ</label>
                    <select name="txttire" class="form-control">
                    <option value="<?php echo $row["tier_at"] ?>"><?php echo $row["tier_at"] ?></option>
                        <option>นานาชาติ</option>
                        <option>ประเทศ</option>
                        <option>ภาค</option>
                        <option>จังหวัด</option>
                    </select>
                </div>
                <div class="form-group" style="margin-left: 20px" >
                    <label>จากหน่วยงาน</label>
                    <input value="<?php echo $row["department_at"] ?>" name="txtdepart" type="text"  class="form-control" placeholder="หน่วยงานที่จัด" >
                </div>
                <div class="form-group" style="margin-left: 20px" >
                    <label>หลักฐาน</label>
                    <input name="txtfile_techer" type="file"  class="form-control" >
                    <input hidden value="<?php echo $row[0] ?>"  type="text" name="txtid" id="txtid">
                </div>
            </div>
<?php }
?>