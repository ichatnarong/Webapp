<?php include_once("../layout/LayoutHeader.php"); ?>
<link rel="stylesheet" type="text/css" href="../../css/table/table.css">

<body>
    <div class="wrapper">

        <div class="header">
            <div class="row">
                <div class="col-1 arrow">
                    <a class="zmdi zmdi-arrow-left" style="color: white;" href="javascript:history.back(1)"></a>
                </div>
                <div class="col">
                    <span class="title-header">
                        ประวัติเต้านมอักเสบ
                    </span>
                </div>
            </div>
        </div>

        <div class="grid-scroll">

            <div class="row">

                <div class="col-12">
                    <div class="card shadow">
                        <div class="card-header card-header-table py-3">
                            <span class="m-0 font-weight-bold">รายละเอียดเต้านมอักเสบ</span>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-5 span-center">
                                    <span>ปี</span>
                                </div>
                                <div class="col-7">
                                    <select class="js-example-basic-single">
                                        <option data-tokens="ketchup mustard">....</option>
                                        <option data-tokens="mustard">....</option>
                                        <option data-tokens="mustard">....</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row padding-top7">
                                <div class="col-5 span-center">
                                    <span>เดือน</span>
                                </div>
                                <div class="col-7">
                                    <select class="js-example-basic-single">
                                        <option data-tokens="ketchup mustard">....</option>
                                        <option data-tokens="mustard">....</option>
                                        <option data-tokens="mustard">....</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row padding-top7">
                                <div class="col-5 span-center">
                                    <span>อาการ</span>
                                </div>
                                <div class="col-7">
                                    <select class="js-example-basic-single">
                                        <option data-tokens="ketchup mustard">....</option>
                                        <option data-tokens="mustard">....</option>
                                        <option data-tokens="mustard">....</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row padding-top7">
                                <div class="col-5 span-center">
                                    <span>หมายเหตุ</span>
                                </div>
                                <div class="col-7">
                                    <select class="js-example-basic-single">
                                        <option data-tokens="ketchup mustard">....</option>
                                        <option data-tokens="mustard">....</option>
                                        <option data-tokens="mustard">....</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row padding-top13">

                <div class="col-12">
                    <div class="card shadow">
                        <div class="card-header card-header-table py-3">
                            <span class="m-0 font-weight-bold">ปี 2562 : มกราคม</span>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table custom-table">
                                    <thead>
                                        <tr>
                                            <th scope="col">วันที่</th>
                                            <th scope="col">รายการ</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                2 ม.ค. 2564
                                            </td>
                                            <td>
                                                ผสมพันธ์ครั้งที่หนึ่ง
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                2 ม.ค. 2564
                                            </td>
                                            <td>
                                                ผสมพันธ์ครั้งที่หนึ่ง
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                2 ม.ค. 2564
                                            </td>
                                            <td>
                                                ผสมพันธ์ครั้งที่หนึ่ง
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row padding-top13">

                <div class="col-12">
                    <div class="card shadow">
                        <div class="card-header card-header-table py-3">
                            <span class="m-0 font-weight-bold">ปี 2562</span>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-5 span-center">
                                    <span>เต้านมอักเสบ</span>
                                </div>
                                <div class="col-7">
                                    <span class="span-padding">10 ครั้ง</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-5 span-center">
                                    <span>แสดงอาการ</span>
                                </div>
                                <div class="col-7">
                                    <span class="span-padding">5 ครั้ง</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-5 span-center">
                                    <span>ไม่แสดงอาการ</span>
                                </div>
                                <div class="col-7">
                                    <span class="span-padding">5 ครั้ง</span>
                                </div>
                            </div>
                            <canvas id="myChart1" class="padding-top7"></canvas>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</body>

<?php include_once("../layout/LayoutFooter.php"); ?>
<script src="../../js/table/table.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
    const data1 = {
        labels: [
            'แสดงอาการ',
            'ไม่แสดงอาการ'
        ],
        datasets: [{
            data: [5, 5],
            backgroundColor: [
                'rgb(255, 99, 132)',
                'rgb(54, 162, 235)'
            ],
            hoverOffset: 4
        }]
    };
    const config1 = {
        type: 'pie',
        data: data1
    };
    var myChart1 = new Chart(
        document.getElementById('myChart1'),
        config1
    );
</script>