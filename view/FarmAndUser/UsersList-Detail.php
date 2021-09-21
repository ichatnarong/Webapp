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
                            <img alt="Image placeholder" class="image-cow" src="../../picture/profile/male user.gif">
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
                                        <span>ชื่อ</span>
                                    </div>
                                    <div class="col-7">
                                        <span class="span-padding" id="userlist_name"></span>
                                    </div>
                                </div>
                                <div class="row padding-detail-card">
                                    <div class="col-5 span-center">
                                        <span>นามสกุล</span>
                                    </div>
                                    <div class="col-7">
                                        <span class="span-padding" id="userlist_lastname"></span>
                                    </div>
                                </div>
                                <div class="row padding-detail-card">
                                    <div class="col-5 span-center">
                                        <span>ชื่อเล่น</span>
                                    </div>
                                    <div class="col-7">
                                        <span class="span-padding" id="userlist_nickname"></span>
                                    </div>
                                </div>
                                <div class="row padding-detail-card">
                                    <div class="col-5 span-center">
                                        <span>อายุ</span>
                                    </div>
                                    <div class="col-7">
                                        <span class="span-padding" id="userlist_age"></span>
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
<script src="./UsersList-Detail.js"></script>