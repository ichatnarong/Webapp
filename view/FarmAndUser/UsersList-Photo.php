<?php include_once("../layout/LayoutHeader.php"); ?>
<?php
$photo = 1;
?>

<body>
    <div class="wrapper">

        <div class="header">
            <div class="row">
                <div class="col-1 arrow">
                    <a class="zmdi zmdi-arrow-left" style="color: white;" href="javascript:history.go(-2)"></a>
                </div>
                <div class="col">
                    <span class="title-header">
                        อัพโหลดรูปภาพ
                    </span>
                </div>
                <div class="col-3 ">
                    <span id="save-photo" class="title-button">
                        บันทึก
                    </span>
                </div>
            </div>
        </div>

        <div class="grid-scroll" style="align-self: center;">
            <!-- displays the picture uploaded from the native camera -->
            <img class="pictureFromCamera" id="pictureFromCamera"/>
            <!-- The hidden file `input` for opening the native camera -->
            <input id="cameraFileInput" type="file" accept="image/*" capture="environment" style="display: none;" />
        </div>

    </div>
</body>

<?php include_once("../layout/LayoutFooter.php"); ?>