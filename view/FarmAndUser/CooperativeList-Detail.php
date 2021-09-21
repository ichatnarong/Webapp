<?php include_once("../layout/LayoutHeader.php"); ?>
<link rel="stylesheet" type="text/css" href="../../css/tab.css">

<body>
    <div class="wrapper">

        <div class="header">
            <div class="row">
                <div class="col-1 arrow">
                    <a class="zmdi zmdi-arrow-left" style="color: white;" href="javascript:history.back(1)"></a>
                </div>
                <div class="col">
                    <span class="title-header">
                        ข้อมูลสหกรณ์
                    </span>
                </div>
            </div>
        </div>

        <div class="container-grid">

            <ul class="nav nav-tabs tab-grid">
                <li class="active">
                    <a data-toggle="tab" href="#data">
                        <i class="fas fa-database"></i>
                        <span>ข้อมูล</span>
                    </a>
                </li>
                <li>
                    <a data-toggle="tab" href="#images">
                        <i class="far fa-image"></i>
                        <span>รูปภาพ</span>
                    </a>
                </li>
                <li>
                    <a data-toggle="tab" href="#gps">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>ตำแหน่ง</span>
                    </a>
                </li>
            </ul>

            <div class="tab-content">

                <div id="data" class="tab-pane fade in active">

                    <div class="grid-scroll">

                        <div class="row">
                            <div class="col-12">
                                <div class="card shadow">
                                    <div class="card-body remove-padding block-image-cow2">
                                        <img alt="Image placeholder" class="image-cow" src="../../picture/profile/male farmer.gif">
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
                                                    <span>จังหวัด</span>
                                                </div>
                                                <div class="col-7">
                                                    <span class="span-padding" id="cod_province"></span>
                                                </div>
                                            </div>
                                            <div class="row padding-detail-card">
                                                <div class="col-5 span-center">
                                                    <span>ชื่อ</span>
                                                </div>
                                                <div class="col-7">
                                                    <span class="span-padding" id="cod_name"></span>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

                <div id="images" class="tab-pane fade">
                    <div class="gridContainer2">
                        <img src="../../picture/profile/male farmer.gif" alt="" class="image-menu">
                        <img src="../../picture/profile/male farmer.gif" alt="" class="image-menu">
                        <img src="../../picture/profile/male farmer.gif" alt="" class="image-menu">
                        <img src="../../picture/profile/male farmer.gif" alt="" class="image-menu">
                        <img src="../../picture/profile/male farmer.gif" alt="" class="image-menu">
                        <img src="../../picture/profile/male farmer.gif" alt="" class="image-menu">
                        <img src="../../picture/profile/male farmer.gif" alt="" class="image-menu">
                        <img src="../../picture/profile/male farmer.gif" alt="" class="image-menu">
                        <img src="../../picture/profile/male farmer.gif" alt="" class="image-menu">
                        <img src="../../picture/profile/male farmer.gif" alt="" class="image-menu">
                    </div>
                </div>

                <div id="gps" class="tab-pane fade">

                    <div>
                        <img src="../../picture/icon/cow.jpg">
                    </div>

                </div>

            </div>
        </div>

    </div>
</body>

<?php include_once("../layout/LayoutFooter.php"); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<script src="./CooperativeList-Detail.js"></script>