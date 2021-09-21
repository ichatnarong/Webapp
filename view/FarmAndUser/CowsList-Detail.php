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
                        
                    </span>
                </div>
            </div>
        </div>

        <div class="grid-scroll">

            <div class="row">
                <div class="col-12">
                    <div class="card shadow">
                        <div class="card-body remove-padding block-image-cow2">
                            <img alt="Image placeholder" class="image-cow" src="">
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
                                        <span class="span-padding" id="cow_num"></span>
                                    </div>
                                </div>
                                <div class="row padding-detail-card">
                                    <div class="col-5 span-center">
                                        <span>ชื่อ</span>
                                    </div>
                                    <div class="col-7">
                                        <span class="span-padding" id="cow_name"></span>
                                    </div>
                                </div>
                                <div class="row padding-detail-card">
                                    <div class="col-5 span-center">
                                        <span>สายพันธ์</span>
                                    </div>
                                    <div class="col-7">
                                        <span class="span-padding" id="cow_species"></span>
                                    </div>
                                </div>
                                <div class="row padding-detail-card">
                                    <div class="col-5 span-center">
                                        <span>วันเกิด</span>
                                    </div>
                                    <div class="col-7">
                                        <span class="span-padding" id="cow_bd"></span>
                                    </div>
                                </div>
                                <div class="row padding-detail-card">
                                    <div class="col-5 span-center">
                                        <span>พ่อโค</span>
                                    </div>
                                    <div class="col-7">
                                        <span class="span-padding" id="cow_fa"></span>
                                    </div>
                                </div>
                                <div class="row padding-detail-card">
                                    <div class="col-5 span-center">
                                        <span>แม่โค</span>
                                    </div>
                                    <div class="col-7">
                                        <span class="span-padding" id="cow_mo"></span>
                                    </div>
                                </div>
                                <div class="row padding-detail-card">
                                    <div class="col-5 span-center">
                                        <span>สถานะ</span>
                                    </div>
                                    <div class="col-7">
                                        <span class="span-padding" id="cow_sta"></span>
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
<script src="./CowsList-Detail.js"></script>