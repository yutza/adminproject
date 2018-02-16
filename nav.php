

<nav class="navbar navbar-default sidebar" role="navigation" >
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-sidebar-navbar-collapse-1">
                <span class="sr-only">เมนูหลัก</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <?php
                if($_SESSION["Code"]!=""){ ?>
                    <li > <a href="home.php"><?php echo $_SESSION["Code"]?></a></li>
               <?php }
                ?>
                <li > <a href="home.php">หน้าแรก</a></li>
                <li >  <a href="butget.php">ข้อมูลงบประมาณ</a></li>
                <li >  <a href="department.php">ข้อมูลสาขาวิชา</a></li>
                <li >  <a href="home.php">ข้อมูลนักเรียนนักศึกษา</a></li>
                <li ><a href="techer.php">ข้อมูลครู</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">ข้อมูลผลงาน <span class="caret"></span><span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-user"></span></a>
                    <ul class="dropdown-menu forAnimate" role="menu">
                        <li><a href="adword_student.php">รางวัลสิ่งประดิษฐ์ นวัตกรรม งานสร้างสรรค์ หรืองานวิจัย ของผู้เรียน</a></li>
                        <li><a href="adword_Lenner.php">รางวัลการแข่งขันทักษะวิชาชีพ ของผู้เรียน</a></li>
                        <li class="divider"></li>
                        <li><a href="asword_alumni.php">รางวัลศิษย์เก่า</a></li>
                        <li class="divider"></li>
                        <li><a href="adword_techer.php">รางวัลสิ่งประดิษฐ์ นวัตกรรม งานสร้างสรรค์ หรืองานวิจัย ของครู</a></li>
                        <li><a href="quality.php">ข้อมูลผลการประเมินภายในโดยต้นสังกัดและผลการประเมินของสถานประกอบการ</a></li>
                    </ul>
                </li>
                <li ><a href="#">รายงาน<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-th-list"></span></a></li>
                <li ><a href="logout.php">ออกจากระบบ<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-tags"></span></a></li>
            </ul>
        </div>
    </div>
</nav>

<style type="text/css">
    body,html{
        height: 100%;
    }

    nav.sidebar, .main{
        -webkit-transition: margin 200ms ease-out;
        -moz-transition: margin 200ms ease-out;
        -o-transition: margin 200ms ease-out;
        transition: margin 200ms ease-out;
    }

    .main{
        padding: 10px 10px 0 10px;
    }

    @media (min-width: 765px) {

        .main{
            position: absolute;
            width: calc(100% - 40px);
            margin-left: 40px;
            float: right;
        }

        nav.sidebar:hover + .main{
            margin-left: 200px;
        }

        nav.sidebar.navbar.sidebar>.container .navbar-brand, .navbar>.container-fluid .navbar-brand {
            margin-left: 0px;
        }

        nav.sidebar .navbar-brand, nav.sidebar .navbar-header{
            text-align: center;
            width: 100%;
            margin-left: 0px;
        }

        nav.sidebar a{
            padding-right: 13px;
        }

        nav.sidebar .navbar-nav > li:first-child{
            border-top: 1px #e5e5e5 solid;
        }

        nav.sidebar .navbar-nav > li{
            border-bottom: 1px #e5e5e5 solid;
        }

        nav.sidebar .navbar-nav .open .dropdown-menu {
            position: static;
            float: none;
            width: auto;
            margin-top: 0;
            background-color: transparent;
            border: 0;
            -webkit-box-shadow: none;
            box-shadow: none;
        }

        nav.sidebar .navbar-collapse, nav.sidebar .container-fluid{
            padding: 0 0px 0 0px;
        }

        .navbar-inverse .navbar-nav .open .dropdown-menu>li>a {
            color: #777;
        }

        nav.sidebar{
            width: 200px;
            height: 100%;
            margin-left: -160px;
            float: left;
            margin-bottom: 0px;
        }

        nav.sidebar li {
            width: 100%;
        }

        nav.sidebar:hover{
            margin-left: 0px;
        }

        .forAnimate{
            opacity: 0;
        }
    }

    @media (min-width: 1330px) {

        .main{
            width: calc(100% - 200px);
            margin-left: 200px;
        }

        nav.sidebar{
            margin-left: 0px;
            float: left;
        }

        nav.sidebar .forAnimate{
            opacity: 1;
        }
    }

    nav.sidebar .navbar-nav .open .dropdown-menu>li>a:hover, nav.sidebar .navbar-nav .open .dropdown-menu>li>a:focus {
        color: #CCC;
        background-color: transparent;
    }

    nav:hover .forAnimate{
        opacity: 1;
    }
    section{
        padding-left: 15px;
    }


</style>