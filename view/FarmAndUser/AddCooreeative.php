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
                        บันทึกสหกรณ์ใหม่
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

            <div class="row settext-color">
                <div class="col-12">
                    <div class="card shadow">
                        <div class="card-body remove-padding">
                            <div class="row row-list">

                                <div class="row padding-detail-card">
                                    <div class="col-5 span-center">
                                        <span>จังหวัด</span>
                                    </div>
                                    <div class="col-7">
                                        <select class="js-example-basic-single">
                                            <option data-tokens="ketchup mustard">...</option>
                                            <option data-tokens="mustard">...</option>
                                            <option data-tokens="mustard">...</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row padding-detail-card">
                                    <div class="col-5 span-center">
                                        <span>ชื่อ</span>
                                    </div>
                                    <div class="col-7">
                                        <span class="span-padding">....</span>
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