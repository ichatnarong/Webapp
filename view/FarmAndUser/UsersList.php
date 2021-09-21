<?php include_once("../layout/LayoutHeader.php"); ?>
<link rel="stylesheet" type="text/css" href="../../css/accordion/accordion.css" />

<body>
    <div class="wrapper-ListSearch">
        <div class="header">
            <div class="row">
                <div class="col-1 arrow">
                    <a class="zmdi zmdi-arrow-left" style="color: white;" href="javascript:history.back(1)"></a>
                </div>
                <div class="col">
                    <span class="title-header">
                        รายชื่อผู้ใช้
                    </span>
                </div>
            </div>
        </div>
        <div class="search">
            <div class="input-field">
                <button class="btn-search" type="button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"></path>
                    </svg>
                </button>
                <input type="text" onkeyup="myFunction()" placeholder="ค้นหา" class="input_search">
            </div>
        </div>
        <div class="content2">

            <ul class="container-accordion">
                <li class="list-item-accordion">
                    <div class="row list-group-item list-group-item-action link">
                        <div class="col-2 image-lists">
                            <img alt="Image placeholder" class="image-farm" src="">
                        </div>
                        <div class="col nameCows content-lists">
                            <a id="name"></a>
                        </div>
                        <div class="col-2 set-center-add">
                            <i class="fas fa-plus set-right-add"></i>
                        </div>
                    </div>
                    <ul class="submenu">
                        <li class="row submenu-camera">
                            <i class="col-4 fas fa-camera-retro icon-submenu-left"></i>
                            <a class="col-6" href="#">อัพเดตรูปภาพ</a>
                            <i class="col fas fa-chevron-right icon-submenu-right"></i>
                        </li>
                        <li class="row submenu-edit">
                            <i class="col-4 fas fa-pencil-alt icon-submenu-left"></i>
                            <a class="col-6" href="#">แก้ไข</a>
                            <i class="col fas fa-chevron-right icon-submenu-right"></i>
                        </li>
                    </ul>
                </li>


            </ul>

            <button class="btn btn-primary btn-sm addCooperative" type="button" onclick="window.location.href='./AddUsers.php'">
                <i class="fas fa-plus" style="color: white;"> เพิ่มผู้ใช้</i>
            </button>

        </div>
    </div>
</body>

<?php include_once("../layout/LayoutFooter.php"); ?>
<script src="./UsersList.js"></script>
<script src="../../js/accordion/accordion.js"></script>

<script>
    function myFunction() {
        var input, filter, ul, li, a, i, txtValue;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        // ul = document.getElementById("myUL");
        // li = ul.getElementsByTagName("li");
        // for (i = 0; i < li.length; i++) {
        //     a = li[i].getElementsByTagName("a")[0];
        //     txtValue = a.textContent || a.innerText;
        //     if (txtValue.toUpperCase().indexOf(filter) > -1) {
        //         li[i].style.display = "";
        //     } else {
        //         li[i].style.display = "none";
        //     }
        // }
    }
</script>