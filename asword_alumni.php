
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
    <script src="js/aword_al.js"></script>
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

                <table class="table table-bordered">
                    <thead>
                    <tr class="alert-info">
                        <td>ชื่อศิษย์เก่า</td>
                        <td>ชื่อรางวัล</td>
                        <td>รางวัล</td>
                        <td>ระดับ</td>
                        <td>หน่วยงานที่จัด</td>
                        <td>หลักฐาน</td>
                        <td>แก้ไข</td>
                        <td>ลบ</td>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <?php
                        include "connection/connect.php";
                        $sql="SELECT * FROM `tbl_asword_alumni`";
                        $query=mysqli_query($conn,$sql);
                        if(!$query){
                            echo "Fail".mysqli_error($conn);
                        }
                        while ($row=mysqli_fetch_array($query)){ ?>
                        <tr>
                            <td><?php echo $row[1]?></td>
                            <td><?php echo $row[2]?></td>
                            <td><?php echo $row[3]?></td>
                            <td><?php echo $row[4]?></td>
                            <td><?php echo $row[5]?></td>
                            <td><a href="<?php echo $row[6]?>" target="_blank">ดูกลักฐาน</a>  </td>
                            <?php
                            if($row!=null){?>
                                <td>
                                <div class="aw_al"><a href="connection\select_aword_al.php?id=<?php echo $row[0]?>" class="btn btn-info">แก้ไข</a></div>

                                <td>
                                    <form action="delete_aw_al.php" method="post"> 
                                        <button class="btn btn-danger">ลบ</button></td>
                                        <input name="txtid" hidden type="text" value="<?php echo $row[0]?>">
                                    </form>
                                    </tr>
                         <?php   }
                            ?>

                       <?php }
                        ?>
                    </tr>
                    </tbody>
                </table>
                </div>
                <div id="showtecher" >

                </div>
                <div class="form-group" id="edit_techer">
                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#addaword_alumni">เพิ่ม</button>
                </div>
            </div>

        </form>


    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="addaword_alumni" role="dialog">
    <div class="modal-dialog">
<form action="insert_ae_al.php" id="form_insert_alumni" method="post" enctype="multipart/form-data" >
    <!-- Modal content-->
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title"></h4>
        </div>
        <div class="modal-body">

            <div class="panel panel-info" style="margin-top: 5px">
                <div class="panel-heading">
                    <h3 class="panel-title"><h3 class="text-center">ข้อมูลศิษเก่าที่ประสบความสำเร็จในการประกอบอาชีพ</h3></h3>
                </div>
                <div class="form-group" style="margin-left: 20px" >
                    <label>ชื่อศิษย์เก่า</label>
                    <input name="txtnameal"  type="text"  class="form-control" placeholder="ชื่อศิษย์เก่า" >
                </div>
                <div class="form-group" style="margin-left: 20px" >
                    <label>ชื่อรางวัล</label>
                    <input name="txtname" type="text"  class="form-control" placeholder="ชื่อรางวัล" >
                </div>
                <div class="form-group" style="margin-left: 20px">
                    <label>ปีที่ได้รางวัล</label>
                   <select name="txtyear" class="form-control">
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
                        <option>นานาชาติ</option>
                        <option>ประเทศ</option>
                        <option>ภาค</option>
                        <option>จังหวัด</option>
                    </select>
                </div>
                <div class="form-group" style="margin-left: 20px" >
                    <label>จากหน่วยงาน</label>
                    <input name="txtdepart" type="text"  class="form-control" placeholder="จากหน่วยงาน" >
                </div>
                <div class="form-group" style="margin-left: 20px" >
                    <label>หลักฐาน</label>
                    <input name="txtfile_al" type="file"  class="form-control" >
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

<div class="modal fade" id="update_aword_alumni" role="dialog">
    <div class="modal-dialog">
<form action="update_aword_al.php" id="form_insert_alumni" method="post" enctype="multipart/form-data" >
    <!-- Modal content-->
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title"></h4>
        </div>
        <div class="modal-body" id="data_al">

            
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