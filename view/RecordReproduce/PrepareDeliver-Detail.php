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
                        บันทึกเตรียมคลอด
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
                                        <span>ชื่อแม่พันธ์</span>
                                    </div>
                                    <div class="col-7">
                                        <span class="span-padding">โคนม</span>
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
                                        <span>วันที่บันทึก</span>
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
                                        <span>วันที่กำหนดคลอด</span>
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

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</body>

<?php include_once("../layout/LayoutFooter.php"); ?>

<!-- fengyuanchen-Datepicker JS -->
<script src="../../js/fengyuanchen-Datepicker/datepicker.js"></script>
<script src="../../js/fengyuanchen-Datepicker/datepicker.th-TH.js"></script>
<!-- dmuy-MDTimePicker JS -->
<script src="../../js/cp-MDTimePicker/MDTimePicker.js"></script>

<script src="./PrepareDeliver-Detail.js"></script>