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
                        บันทึกโรคเต้านมอักเสบ ...
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

            <div class="block-image-cow shadow">
                <div class="image-cow-click">

                    <div class="row">
                        <div class="col-6 nipple-left" id="tl">
                            <span class="text-nipple">ซ้ายบน</span>
                            <span class='fa-stack'>
                                <i class='far fa-square fa-stack-2x'></i>
                                <i class='fab fa-umbraco fa-stack-1x'></i>
                            </span>
                        </div>
                        <div class="col-6 nipple-right" id="tr">
                            <span class='fa-stack'>
                                <i class='far fa-square fa-stack-2x'></i>
                                <i class='fab fa-umbraco fa-stack-1x'></i>
                            </span>
                            <span class="text-nipple">ขวาบน</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6 nipple-left" id="bl">
                            <span class="text-nipple">ซ้ายล่าง</span>
                            <span class='fa-stack'>
                                <i class='far fa-square fa-stack-2x'></i>
                                <i class='fab fa-umbraco fa-stack-1x'></i>
                            </span>
                        </div>
                        <div class="col-6 nipple-right" id="br">
                            <span class='fa-stack'>
                                <i class='far fa-square fa-stack-2x'></i>
                                <i class='fab fa-umbraco fa-stack-1x'></i>
                            </span>
                            <span class="text-nipple">ขวาล่าง</span>
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
                                        <span class="span-padding">...</span>
                                    </div>
                                </div>
                                <div class="row padding-detail-card">
                                    <div class="col-5 span-center">
                                        <span>ชื่อ</span>
                                    </div>
                                    <div class="col-7">
                                        <span class="span-padding">...</span>
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
                                        <span>อาการ</span>
                                    </div>
                                    <div class="col-7">
                                        <select class="js-example-basic-single">
                                            <option data-tokens="ketchup mustard">...</option>
                                            <option data-tokens="mustard">...</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row padding-detail-card">
                                    <div class="col-5 span-center">
                                        <span>หมายเหตุ</span>
                                    </div>
                                    <div class="col-7">
                                        <select class="js-example-basic-single">
                                            <option data-tokens="ketchup mustard">...</option>
                                            <option data-tokens="mustard">...</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row padding-detail-card">
                                    <div class="col-5 span-center">
                                        <span>เริ่มเป็น</span>
                                    </div>
                                    <div class="col-7">
                                        <select class="js-example-basic-single">
                                            <option data-tokens="ketchup mustard">...</option>
                                            <option data-tokens="mustard">...</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row padding-detail-card">
                                    <div class="col-5 span-center">
                                        <span>ระยะ</span>
                                    </div>
                                    <div class="col-7">
                                        <span class="span-padding">...</span>
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
<script src="./RecordMilkInflame-Detail.js"></script>