<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Kanit:200,300&display=swap" rel="stylesheet">
    <!-- Calendar Link-->
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="css/bs-header.css">

    <title>Mcarcare</title>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <!-- Calendar JS-->
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>

    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script> -->




</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-info" id="tab">
        <a class="navbar-brand" href="home.php">
            <img src="image/font-white1.2.gif" alt="logo" class="home_logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">


            <?php
            echo '<form action="search.php" method="post" name="brw_form" style="width:50%">';
            echo ' <div class="form-row ml-sm-5">';
            echo '<input class="form-control mr-sm-3" id="myInput" type="text" placeholder="กรุณากรอกหมายเลขทะเบียนรถ" name="name">';
            echo ' <button class="btn btn-outline-light" type="submit" name="submit" value = "ค้นหา">ค้นหา</button>';
            echo ' </div>';
            echo '</form>';
            ?>

            <!-- <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button> -->

            <ul class="navbar-nav text-uppercase" id="ml" style="margin-left: 25%;">
                <li class="nav-item mr-sm-3">
                    <a class="nav-link" href="report.php">
                        <i class="fas fa-file-alt"></i>
                        รายงาน
                    </a>
                </li>
                <li class="nav-item mr-sm-3">
                    <a class="nav-link" href="chat.php">
                        <i class="fas fa-bullhorn"></i>
                        ประกาศ</a>
                </li>
                <li class="nav-item dropleft">
                    <a class="nav-link  active" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-cogs"></i>
                        <i class="fas fa-caret-down"></i>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="signuppage2.php">เพิ่มสมาชิก</a>
                        <a class="dropdown-item" href="login.php">ออกจากระบบ</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container" style="padding-top :80px;">
        <h3 class="name mb-4">รายการให้บริการรถของวันนี้</h3>

        <div class="form-inline" style="margin-left: 35%">
            <div class="row text-center">
                <div class="col-md-9 mb-2">
                    <div class="form-group">
                        <input type="text" class="form-control" id="datepicker" name="na2">
                        <script>
                            $('#datepicker').datepicker({
                                uiLibrary: 'bootstrap4'
                            });
                        </script>
                    </div>
                </div>
                <div class="col-md-3 mb-5">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="button" name="button" OnClick="">ค้นหา
                    </button>
                </div>
            </div>
        </div>
    </div>

    <table class="table table-hover ">
        <thead id="colortable">
            <tr>
                <th scope="col">วัน/เดือน/ปี</th>
                <th>เลขทะเบียนรถ</th>
                <th>ชื่อเจ้าของรถ</th>
                <th>เบอร์โทรศัพท์</th>
                <th>ประเภท/สี</th>
                <th>รายการที่ลูกค้าใช้บริการ</th>
                <th>ระดับความสกปรก</th>
                <th>ขนาดของรถ</th>
                <th>สถานะของรถ</th>
                <th>ชำระเงิน</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <th scope="row">2019-08-13 14:56:51</th>
                <td>กย 1234 </td>
                <td>อพยพ สุขใจ</td>
                <td>9075643122</td>
                <td>ตู้/ขาว</td>
                <td>ล้างห้องเครื่อง ล้างอัดฉีดช่วงล้าง ล้างสีดูดฝุ่น ล้างยางมะตอย ถ่ายน้ำเครื่อง</td>
                <td>น้อย</td>
                <td>เล็ก</td>
                <td>
                    <select class="custom-select" id="select">
                <option value="1">กำลังดำเนินงาน</option>
                <option value="2">เรียบร้อยแล้ว</option>
                </select> 
            </td>
                <td>
                    <select class="custom-select" id="select">
                <option value="3">รอการชำระเงิน</option>
                <option value="4">เรียบร้อยแล้ว</option>
                </select> </td>
                
                <td></td>
            </tr>

        
        </tbody>
        <!-- <thead id="colortable">
            <tr>
                <th scope="col">#</th>
                <th>วันเดือนปี</th>
                <th>เลขทะเบียนรถ</th>
                <th>ชื่อเจ้าของรถ</th>
                <th>เบอร์โทรศัพท์</th>
                <th>ประเภท/สี</th>
                <th>รายการที่ลูกค้าใช้บริการ</th>
                <th>ระดับความสกปรก</th>
                <th>ขนาดของรถ</th>
                <th>สถานะของรถ</th>
            </tr>
        </thead> -->

        <!-- <tbody>
            <tr>
                <th scope="row">1</th>
                <td>13/03/62</td>
                <td>ทจ865 </td>
                <td>สมจิตร สมใจ</td>
                <td>0626960144</td>
                <td>เก๋ง/แดง</td>
                <td>ล้างรถ ขัดสี</td>
                <td>มาก</td>
                <td>เล็ก</td>
                <td>
                    <select class="custom-select" id="select">
                        <option selected>สถานะของรถ</option>
                        <option value="1">กำลังดำเนินงาน</option>
                        <option value="2">รอการชำระ</option>
                        <option value="3">ชำระแล้ว</option>
                    </select>
                </td>
            </tr>
        </tbody> -->

        <!-- <tbody id="person">
        </tbody> -->
    </table>

</body>

<script language="javascript">
    function seachdate() {
        console.log("true");
        window.location.href = ("resultdatepage.html");

    }
</script>
<script>
    $(document).ready(function() {
        $(".dropdown-toggle").dropdown();
    });
</script>
<script>
    $(document).ready(function() {
        $("#myInput").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#myTable tr").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    });
</script>

</html>