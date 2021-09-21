<?php include_once("../layout/LayoutHeader.php"); ?>

<body>
    <div class="wrapper">
        <div class="header">
            <div class="row">
                <div class="col-1 arrow">
                    <a class="zmdi zmdi-arrow-left" style="color: white;" href="javascript:history.back(1)"></a>
                </div>
                <div class="col">
                    <span class="title-header">
                        รายชื่อฟาร์ม
                    </span>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="gridContainer1">

            </div>
        </div>
    </div>
</body>

<?php include_once("../layout/LayoutFooter.php"); ?>
<script src="./FarmList.js"></script>

<script>
    var userid = '<?php echo $userid; ?>';
    localStorage.setItem("userid", userid);
    $(document).ready(function() {
        savelog("access", 0);
        load_FarmList();
        event_selectFarm();
    });
</script>