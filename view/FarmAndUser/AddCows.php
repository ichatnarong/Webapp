<?php include_once("../layout/LayoutHeader.php"); ?>

<!-- fengyuanchen-Datepicker CSS -->
<link href="../../css/fengyuanchen-Datepicker/datepicker.css" rel="stylesheet" type="text/css">

<body>
    <div class="wrapper">

        <div class="header">
            <div class="row">
                <div class="col-1 arrow">
                    <a class="zmdi zmdi-arrow-left" style="color: white;" href="javascript:history.back(1)"></a>
                </div>
                <div class="col">
                    <span class="title-header">
                        บันทึกโคใหม่
                    </span>
                </div>
                <div class="col-3 ">
                    <span class="title-button" id="save">
                        บันทึก
                    </span>
                </div>
            </div>
        </div>

        <div class="grid-scroll">

            <div class="row settext-color">
                <div class="col-12">
                    <div class="card shadow">
                        <div class="card-body remove-padding">
                            <div class="row row-list">

                                <div class="row padding-detail-card">
                                    <div class="col-5 span-center">
                                        <span>รหัสโคนม</span>
                                    </div>
                                    <div class="col-7">
                                        <input class="form-control" id="cownum"></input>
                                    </div>
                                </div>
                                <div class="row padding-detail-card">
                                    <div class="col-5 span-center">
                                        <span>ชื่อโคนม</span>
                                    </div>
                                    <div class="col-7">
                                        <input class="form-control" id="cowname"></input>
                                    </div>
                                </div>
                                <div class="row padding-detail-card">
                                    <div class="col-5 span-center">
                                        <span>เพศ</span>
                                    </div>
                                    <div class="col-7">
                                        <select class="js-example-basic-single" id="cowgender">
                                            <option value="1">เพศผู้</option>
                                            <option value="0">เพศเมีย</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row padding-detail-card">
                                    <div class="col-5 span-center">
                                        <span>สายพันธ์</span>
                                    </div>
                                    <div class="col-7">
                                        <input class="form-control" id="cowspecies"></input>
                                    </div>
                                </div>
                                <div class="row padding-detail-card">
                                    <div class="col-5 span-center">
                                        <span>พ่อโค</span>
                                    </div>
                                    <div class="col-7">
                                        <select id="cowfather" class="js-example-basic-single">
                                            <option disabled selected value="null">เลือกพ่อโค</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row padding-detail-card">
                                    <div class="col-5 span-center">
                                        <span>แม่โค</span>
                                    </div>
                                    <div class="col-7">
                                        <select id="cowmother" class="js-example-basic-single">
                                            <option disabled selected value="null">เลือกแม่โค</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row padding-detail-card">
                                    <div class="col-5 span-center">
                                        <span>วันเกิด</span>
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

<script src="./AddCows.js"></script>