<?php include_once("../layout/LayoutHeader.php"); ?>

<body>

    <div class="wrapper-MenuFarm">
        <div class="header" style="padding: 0.3rem 0.2rem;">
            <div class="row" style="align-items: center;">
                <div class="col-2 " style="padding-left: 10px;">
                    <img alt="Image placeholder" class="image-farm" src="../../picture/farm and user/farm.gif">
                </div>
                <div class="col " style="padding-right: 0px;">
                    <span class="title-header">

                    </span>
                </div>
                <div class="col" style="padding: 0px">
                    <div class="row" style="height: 100%; justify-content: flex-end;">
                        <i class="fas fa-temperature-low fa-1_25x"></i>
                        <span class="value-header">30 C</span>
                        <i class="fas fa-tint fa-1_25x"></i>
                        <span class="value-header">70 %</span>
                    </div>
                </div>
                <div class="col-1" style="padding-right: 70px; text-align-last: end;">
                    <img alt="Image placeholder" class="image-farm" src="../../picture/profile/male farmer.gif">
                </div>
            </div>
        </div>
        <div class="button-farm">
            <a href="javascript:history.back(1)">
                <button type="button" class="btn btn-secondary" style="width: 100%;height: 100%;">เลือกฟาร์ม</button>
            </a>
            <a>
                <button type="button" class="btn btn-secondary" style="width: 100%;height: 100%;">สิ่งที่ต้องทำ</button>
            </a>
        </div>
        <div class="content">
            <div class="gridContainer2">
                <a href="../RecordMilk/RecordMilk.php">
                    <img src="../../picture/menu icon/record milk.gif" alt="บันทึกปริมาณนม" class="image-menu">
                </a>
                <a href="../RecordReproduce/RecordReproduce.php">
                    <img src="../../picture/menu icon/record reproductive.gif" alt="บันทึกระบบสืบพันธ์" class="image-menu" href="">
                </a>
                <a href="../FarmAndUser/FarmAndUser.php">
                    <img src="../../picture/menu icon/farm and user.gif" alt="ฟาร์มและผู้ใช้" class="image-menu" href="">
                </a>
                <a href="../Other/Other.php">
                    <img src="../../picture/menu icon/other.gif" alt="รายการอื่นๆ" class="image-menu" href="">
                </a>
                <a href="../ReportCurrent/ReportCurrent.php">
                    <img src="../../picture/menu icon/current report.gif" alt="รายงานปัจจุบัน" class="image-menu" href="">
                </a>
                <a href="../ReportHistory/ReportHistoryList.php">
                    <img src="../../picture/menu icon/history report.gif" alt="รายงานประวัติ" class="image-menu" href="">
                </a>
            </div>
        </div>
    </div>

</body>

<?php include_once("../layout/LayoutFooter.php"); ?>
<script src="./MenuMyFarm.js"></script>