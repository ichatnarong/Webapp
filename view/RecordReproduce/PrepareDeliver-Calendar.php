<?php include_once("../layout/LayoutHeader.php"); ?>


<link rel="stylesheet" type="text/css" href="../../css/evo-calendar/evo-calendar.css" />
<link rel="stylesheet" type="text/css" href="../../css/evo-calendar/evo-calendar.blue-coral.css" />

<body>

    <div class="wrapper">
        <div class="header">
            <div class="row">
                <div class="col-1 arrow">
                    <a class="zmdi zmdi-arrow-left" style="color: white;" href="javascript:history.back(1)"></a>
                </div>
                <div class="col">
                    <span class="title-header">
                        ปฎิทินการเตรียมคลอด
                    </span>
                </div>
            </div>
        </div>
        <div class="content">
            <div id="calendar"></div>
        </div>
    </div>

</body>


<?php include_once("../layout/LayoutFooter.php"); ?>
<script src="./PrepareDeliver-Calendar.js"></script>

<script src="../../js/evo-calendar/evo-calendar.js"></script>