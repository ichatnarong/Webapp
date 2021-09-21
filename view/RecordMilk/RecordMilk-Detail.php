<?php include_once("../layout/LayoutHeader.php"); ?>
<link rel="stylesheet" type="text/css" href="../../css/table/table.css">

<!-- fengyuanchen-Datepicker CSS -->
<link href="../../css/fengyuanchen-Datepicker/datepicker.css" rel="stylesheet" type="text/css">
<!-- dmuy-MDTimePicker CSS -->
<!-- <link href="../../css/cp-MDTimePicker/MDTimePicker.css" rel="stylesheet" type="text/css"> -->

<body>
    <div class="wrapper">
        <div class="header">
            <div class="row">
                <div class="col-1 arrow">
                    <a class="zmdi zmdi-arrow-left" style="color: white;" href="javascript:history.back(1)"></a>
                </div>
                <div class="col">
                    <span class="title-header">
                        บันทึกปริมาณน้ำนม
                    </span>
                </div>
                <div class="col-3 ">
                    <span class="title-button">
                        บันทึก
                    </span>
                </div>
            </div>
        </div>
        <div class="grid-scroll">

            <div class="row">

                <div class="col-12">
                    <div class="card shadow">
                        <div class="card-body remove-padding block-image-cow2">
                            <img alt="Image placeholder" class="image-cow" src="../../picture/profile/mother cow.gif">
                        </div>
                    </div>
                </div>

            </div>

            <div class="row padding-top13 settext-color">

                <div class="col-12">
                    <div class="card shadow">
                        <div class="card-body remove-padding">
                            <div class="row row-list">

                                <div class="row padding-detail-card">
                                    <div class="col-5 span-center">
                                        <span>รหัส</span>
                                    </div>
                                    <div class="col-7">
                                        <span class="span-padding">11</span>
                                    </div>
                                </div>
                                <div class="row padding-detail-card">
                                    <div class="col-5 span-center">
                                        <span>ชื่อ</span>
                                    </div>
                                    <div class="col-7">
                                        <span class="span-padding">เมษา</span>
                                    </div>
                                </div>
                                <div class="row padding-detail-card">
                                    <div class="col-5 span-center">
                                        <span>ฟาร์ม</span>
                                    </div>
                                    <div class="col-7">
                                        <span class="span-padding">ฟาร์ม A</span>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row padding-top13 settext-color">

                <div class="col-12">
                    <div class="card shadow">
                        <div class="card-body remove-padding">
                            <div class="row row-list">

                                <div class="row padding-detail-card">
                                    <div class="col-5 span-center">
                                        <span>วันที่รีดนม</span>
                                    </div>
                                    <div class="col-7">
                                        <div class="input-group">
                                            <input type="text" class="form-control" data-toggle="datepicker" id="date" name="date">
                                            <div class="input-group-append">
                                                <button type="button" class="btn btn-outline-dark docs-datepicker-trigger" disabled="">
                                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <!-- <input type="text" id="timepicker1" class="form-control MDTimepicker" />
                                        <span class="customSetPosition-Icon"><i class="far fa-clock"></i></span> -->
                                    </div>
                                </div>
                                <div class="row padding-detail-card">
                                    <div class="col-5 span-center">
                                        <span>ช่วงเวลา</span>
                                    </div>
                                    <div class="col-7">
                                        <select class="js-example-basic-single" id="Time period">
                                            <option>เช้า</option>
                                            <option>เย็น</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row padding-detail-card">
                                    <div class="col-5 span-center">
                                        <span>ปริมาณน้ำนม</span>
                                    </div>
                                    <div class="col-7">
                                        <select class="js-example-basic-single">
                                            <option data-tokens="ketchup mustard">ลิตร</option>
                                            <option data-tokens="mustard">มิลลิลิตร</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row padding-detail-card">
                                    <div class="col-5 span-center">
                                        <span>ปริมาณน้ำที่คาดหวัง</span>
                                    </div>
                                    <div class="col-7">
                                        <input class="form-control"></input>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</body>

<?php include_once("../layout/LayoutFooter.php"); ?>
<script src="./RecordMilk-Detail.js"></script>

<!-- fengyuanchen-Datepicker JS -->
<script src="../../js/fengyuanchen-Datepicker/datepicker.js"></script>
<script src="../../js/fengyuanchen-Datepicker/datepicker.th-TH.js"></script>
<!-- dmuy-MDTimePicker JS -->
<!-- <script src="../../js/cp-MDTimePicker/MDTimePicker.js"></script> -->