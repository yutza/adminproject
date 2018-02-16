<?php
include "connect.php";
$id=$_GET['id'];
//var_dump($id);
if(isset($id)){
    $sql="SELECT * FROM `tbl_aword_student` WHERE id_as=$id";
    $qouery=mysqli_query($conn,$sql);
    
    if(!$qouery){
        echo "ERROR".mysqli_error($conn);
    }
    else{
        $row=mysqli_fetch_array($qouery);
       
       ?>
                <div class="panel panel-info" style="margin-top: 5px">
                    <div class="panel-heading">
                        <h3 class="panel-title"><h3 class="text-center">แก้ไขข้อมูลรางวัลสิ่งประดิษฐ์ นวัตกรรม งานสร้างสรรค์ หรืองานวิจัย ของผู้เรียน</h3></h3>
                    </div>
                    <div class="form-group" style="margin-left: 20px" >
                        <label>ชื่อสิ่งประดิษฐ์ นวัตกรรม งานสร้างสรรค์ หรืองานวิจัย</label>
                        <input value="<?php echo $row[1] ?>" type="text" name="txtnamei"  class="form-control" placeholder="ชื่อสิ่งประดิษฐ์ นวัตกรรม งานสร้างสรรค์ หรืองานวิจัย" >
                    </div>
                    <div class="form-group" style="margin-left: 20px">
                        <label>ปีการศึกษาที่ได้รับรางวัล</label>
                       <select name="txtyeasi" class="form-control">
                       <option selected  value="<?php echo $row[2] ?>"><?php echo $row[2] ?></option>
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
                      <select name="txtawordi" class="form-control">
                      <option selected  value="<?php echo $row[3] ?>"><?php echo $row[3] ?></option>
                          <option>ชนะเลิศ</option>
                          <option>รองชนะเลิศ</option>
                          <option>รองชนะเลิศอันดับสอง</option>
                          <option>ชมเชย</option>
                      </select>
                    </div>
                    <div class="form-group" style="margin-left: 20px" >
                        <label>ระดับ</label>
                        <select name="txttiei" class="form-control">
                        <option selected  value="<?php echo $row[4] ?>"><?php echo $row[4] ?></option>
                            <option>นานาชาติ</option>
                            <option>ประเทศ</option>
                            <option>ภาค</option>
                            <option>จังหวัด</option>
                        </select>
                    </div>
                    <div class="form-group" style="margin-left: 20px" >
                        <label>หน่วยงานที่จัด</label>
                        <input value="<?php echo $row[5] ?>" type="text" name="txtdepaerti"  class="form-control" placeholder="หน่วยงานที่จัด" >
                    </div>
                    <div class="form-group" style="margin-left: 20px" >
                        <label>หลักฐาน</label>
                        <input value="<?php echo $row[6] ?>" type="file" name="txtevi"  class="form-control" >
                    </div>
               </div>
    <?php } 
}

?>