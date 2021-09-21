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
                        บันทึกการเป็นสัด
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
                            <img id="image-animal" alt="Image placeholder" class="image-cow" src="../../picture/profile/mother cow.gif">
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
                                        <span id="id-cow" class="span-padding">11</span>
                                    </div>
                                </div>
                                <div class="row padding-detail-card">
                                    <div class="col-5 span-center">
                                        <span>ชื่อ</span>
                                    </div>
                                    <div class="col-7">
                                        <span id="name-cow" class="span-padding">เมษา</span>
                                    </div>
                                </div>
                                <div class="row padding-detail-card">
                                    <div class="col-5 span-center">
                                        <span>วันที่ผสมครั้งล่าสุด</span>
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
                                        <span>วันที่คาดการ</span>
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
                                            <input type="text" class="form-control" data-toggle="datepicker" id="date3" name="date3">
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
                                        <span>มีการผสม</span>
                                    </div>
                                    <div class="col-7">
                                        <select id="breed" class="js-example-basic-single">
                                            <option value="1">ผสม</option>
                                            <option value="0">ไม่ผสม</option>
                                        </select>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row padding-top13 settext-color" id="content-1">

                <div class="col-12">
                    <div class="card shadow">
                        <div class="card-body remove-padding">
                            <div class="row row-list">

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
                                        <span>ชื่อผู้ผสม</span>
                                    </div>
                                    <div class="col-7">
                                        <select class="js-example-basic-single">
                                            <option>นาย ก</option>
                                            <option>นาย ข</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row padding-detail-card">
                                    <div class="col-5 span-center">
                                        <span>วิธีการ</span>
                                    </div>
                                    <div class="col-7">
                                        <select id="method" class="js-example-basic-single">
                                            <option value="1">น้ำเชื้อ</option>
                                            <option value="0">ธรรมชาติ</option>
                                        </select>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row padding-top13 settext-color" id="content-2">

                <div class="col-12">
                    <div class="card shadow">
                        <div class="card-body remove-padding">
                            <div class="row row-list">

                                <div class="row padding-detail-card">
                                    <div class="col-5 span-center">
                                        <span>รหัสน้ำเชื้อ</span>
                                    </div>
                                    <div class="col-7">
                                        <input id="id-sperms" class="form-control"></input>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row padding-top13 settext-color disable-view" id="content-3">

                <div class="col-12">
                    <div class="card shadow">
                        <div class="card-body remove-padding">
                            <div class="row row-list">

                                <div class="row padding-detail-card">
                                    <div class="col-5 span-center">
                                        <span>รหัสพ่อพันธ์</span>
                                    </div>
                                    <div class="col-7">
                                        <span class="span-padding">..........</span>
                                    </div>
                                </div>
                                <div class="row padding-detail-card">
                                    <div class="col-5 span-center">
                                        <span>ชื่อพ่อพันธ์</span>
                                    </div>
                                    <div class="col-7">
                                        <select class="js-example-basic-single">
                                            <option data-tokens="ketchup mustard">1*-*</option>
                                            <option data-tokens="mustard">2*-*</option>
                                        </select>
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
<script src="./IsAnimal-Detail.js"></script>

<!-- fengyuanchen-Datepicker JS -->
<script src="../../js/fengyuanchen-Datepicker/datepicker.js"></script>
<script src="../../js/fengyuanchen-Datepicker/datepicker.th-TH.js"></script>
<!-- dmuy-MDTimePicker JS -->
<script src="../../js/cp-MDTimePicker/MDTimePicker.js"></script>