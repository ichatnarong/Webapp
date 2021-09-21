<?php include_once("../layout/LayoutHeader.php"); ?>

<!-- fengyuanchen-Datepicker CSS -->
<link href="../../css/fengyuanchen-Datepicker/datepicker.css" rel="stylesheet" type="text/css">
<!-- dmuy-MDTimePicker CSS -->
<link href="../../css/cp-MDTimePicker/MDTimePicker.css" rel="stylesheet" type="text/css">

<body>
    <div class="wrapper">
        <div class="header">
            <div class="row">
                <div class="col-1 arrow">
                    <a class="zmdi zmdi-arrow-left" style="color: white;" href="javascript:history.back(1)"></a>
                </div>
                <div class="col">
                    <span class="title-header">
                        บันทึกตรวจท้องผสม
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
                                        <span>รหัสแม่พันธุ์</span>
                                    </div>
                                    <div class="col-7">
                                        <span class="span-padding">11</span>
                                    </div>
                                </div>
                                <div class="row padding-detail-card">
                                    <div class="col-5 span-center">
                                        <span>รหัสพ่อพันธุ์</span>
                                    </div>
                                    <div class="col-7">
                                        <span class="span-padding">11</span>
                                    </div>
                                </div>
                                <div class="row padding-detail-card">
                                    <div class="col-5 span-center">
                                        <span>ข้อมูลการผสม</span>
                                    </div>
                                    <div class="col-7">
                                        <span class="span-padding">ปิด</span>
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
                        <div class="card-body">
                            <canvas id="myChart"></canvas>
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
                                        <span>วันที่ตรวจ</span>
                                    </div>
                                    <div class="col-7">
                                        <div class="input-group">
                                            <input type="text" class="form-control" data-toggle="datepicker" id="date1" name="date1">
                                            <div class="input-group-append">
                                                <button type="button" class="btn btn-outline-dark docs-datepicker-trigger" disabled="">
                                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row padding-detail-card">
                                    <div class="col-5 span-center">
                                        <span>เวลา</span>
                                    </div>
                                    <div class="col-7">
                                        <input type="text" id="timepicker1" class="form-control MDTimepicker" />
                                        <span class="customSetPosition-Icon"><i class="far fa-clock"></i></span>
                                    </div>
                                </div>
                                <div class="row padding-detail-card">
                                    <div class="col-5 span-center">
                                        <span>ผลการตรวจ</span>
                                    </div>
                                    <div class="col-7">
                                        <select class="js-example-basic-single">
                                            <option data-tokens="ketchup mustard">ท้อง</option>
                                            <option data-tokens="mustard">ไม่ท้อง</option>
                                            <option data-tokens="mustard">รอยืนยัน</option>
                                        </select>
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
                                        <span>ท้องที่</span>
                                    </div>
                                    <div class="col-7">
                                        <span class="span-padding">5</span>
                                    </div>
                                </div>
                                <div class="row padding-detail-card">
                                    <div class="col-5 span-center">
                                        <span>วันที่ผสมก่อนหน้า</span>
                                    </div>
                                    <div class="col-7">
                                        <div class="input-group">
                                            <input type="text" class="form-control" data-toggle="datepicker" id="date2" name="date2">
                                            <div class="input-group-append">
                                                <button type="button" class="btn btn-outline-dark docs-datepicker-trigger" disabled="">
                                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row padding-detail-card">
                                    <div class="col-5 span-center">
                                        <span>ผสมครั้งที่</span>
                                    </div>
                                    <div class="col-7">
                                        <span class="span-padding">1</span>
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
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<!-- fengyuanchen-Datepicker JS -->
<script src="../../js/fengyuanchen-Datepicker/datepicker.js"></script>
<script src="../../js/fengyuanchen-Datepicker/datepicker.th-TH.js"></script>
<!-- dmuy-MDTimePicker JS -->
<script src="../../js/cp-MDTimePicker/MDTimePicker.js"></script>

<script src="./Check-Detail.js"></script>