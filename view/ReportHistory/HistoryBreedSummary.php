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
                        สรุปประวัติการผสมพันธุ์
                    </span>
                </div>
            </div>
        </div>

        <div class="grid-scroll">

            <div class="row padding-top13 settext-color">
                <div class="col-12">
                    <div class="card shadow">
                        <div class="card-header card-header-table py-3">
                            <span class="m-0 font-weight-bold">จำนวนครั้งเฉลี่ยที่ผสมติด (ครั้ง)</span>
                        </div>
                        <div class="card-body">
                            <canvas id="myChart1"></canvas>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row settext-color">
                <div class="col-12">
                    <div class="card shadow">
                        <div class="card-body remove-padding">
                            <div class="row row-list">

                                <div class="row padding-detail-card">
                                    <div class="col-5 span-center">
                                        <span>จำนวนครั้งที่ผสมติดเฉลี่ย</span>
                                    </div>
                                    <div class="col-7">
                                        <span class="span-padding">1.25 ครั้ง</span>
                                    </div>
                                </div>
                                <div class="row padding-detail-card">
                                    <div class="col-5 span-center">
                                        <span>สถานะปัจจุบัน</span>
                                    </div>
                                    <div class="col-7">
                                        <span class="span-padding">ท้องว่าง</span>
                                    </div>
                                </div>
                                <div class="row padding-detail-card">
                                    <div class="col-5 span-center">
                                        <span>ท้องที่(ล่าสุด)</span>
                                    </div>
                                    <div class="col-7">
                                        <select class="js-example-basic-single">
                                            <option data-tokens="ketchup mustard">1</option>
                                            <option data-tokens="mustard">2</option>
                                            <option data-tokens="mustard">3</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row padding-detail-card">
                                    <div class="col-5 span-center">
                                        <span>วันที่ผสม</span>
                                    </div>
                                    <div class="col-7">
                                        <span class="span-padding">25 กันยายน 2564</span>
                                    </div>
                                </div>

                                <div class="row padding-detail-card">
                                    <div class="col-5 span-center">
                                        <span>วันแห้งนม</span>
                                    </div>
                                    <div class="col-7">
                                        <span class="span-padding">25 กันยายน 2564</span>
                                    </div>
                                </div>
                                <div class="row padding-detail-card">
                                    <div class="col-5 span-center">
                                        <span>วันคลอด</span>
                                    </div>
                                    <div class="col-7">
                                        <span class="span-padding">20 พฤศจิกายน 2564</span>
                                    </div>
                                </div>
                                <div class="row padding-detail-card">
                                    <div class="col-5 span-center">
                                        <span>สถานะ</span>
                                    </div>
                                    <div class="col-7">
                                        <span class="span-padding">คลอด</span>
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
                        <div class="card-header card-header-table py-3">
                            <span class="m-0 font-weight-bold">จำนวนการผสมในแต่ละท้อง (ครั้ง)</span>
                        </div>
                        <div class="card-body">
                            <canvas id="myChart2"></canvas>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row settext-color">
                <div class="col-12">
                    <div class="card shadow">
                        <div class="card-body remove-padding">
                            <div class="row row-list">

                                <div class="row padding-detail-card">
                                    <div class="col-5 span-center">
                                        <span>จำนวนครั้งที่ผสมติดเฉลี่ย</span>
                                    </div>
                                    <div class="col-7">
                                        <span class="span-padding">1.25 ครั้ง</span>
                                    </div>
                                </div>
                                <div class="row padding-detail-card">
                                    <div class="col-5 span-center">
                                        <span>สถานะปัจจุบัน</span>
                                    </div>
                                    <div class="col-7">
                                        <span class="span-padding">ท้องว่าง</span>
                                    </div>
                                </div>
                                <div class="row padding-detail-card">
                                    <div class="col-5 span-center">
                                        <span>ท้องที่(ล่าสุด)</span>
                                    </div>
                                    <div class="col-7">
                                        <select class="js-example-basic-single">
                                            <option data-tokens="ketchup mustard">1</option>
                                            <option data-tokens="mustard">2</option>
                                            <option data-tokens="mustard">3</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row padding-detail-card">
                                    <div class="col-5 span-center">
                                        <span>วันที่ผสม</span>
                                    </div>
                                    <div class="col-7">
                                        <span class="span-padding">25 กันยายน 2564</span>
                                    </div>
                                </div>

                                <div class="row padding-detail-card">
                                    <div class="col-5 span-center">
                                        <span>วันแห้งนม</span>
                                    </div>
                                    <div class="col-7">
                                        <span class="span-padding">25 กันยายน 2564</span>
                                    </div>
                                </div>
                                <div class="row padding-detail-card">
                                    <div class="col-5 span-center">
                                        <span>วันคลอด</span>
                                    </div>
                                    <div class="col-7">
                                        <span class="span-padding">20 พฤศจิกายน 2564</span>
                                    </div>
                                </div>
                                <div class="row padding-detail-card">
                                    <div class="col-5 span-center">
                                        <span>สถานะ</span>
                                    </div>
                                    <div class="col-7">
                                        <span class="span-padding">คลอด</span>
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

<script>
    // === include 'setup' then 'config' above ===
    const labels1 = [
        '1 ม.ค.',
        '5 ม.ค.',
        '7 ม.ค.',
        '10 ม.ค.',
        '11 ม.ค.',
        '12 ม.ค.',
    ];
    const data1 = {
        labels: labels1,
        datasets: [{
            label: 'My First dataset',
            backgroundColor: [
                'rgba(225, 6, 0, 0.7)',
                'rgba(225, 6, 0, 0.7)',
                'rgba(255, 159, 64, 0.9)',
                'rgba(255, 159, 64, 0.9)',
                'rgba(255, 159, 64, 0.9)',
                'rgba(201, 203, 207, 0.9)',
                'rgba(201, 203, 207, 0.9)'
            ],
            borderColor: [
                'rgb(255, 99, 132)',
                'rgb(255, 99, 132)',
                'rgb(255, 159, 64)',
                'rgb(255, 159, 64)',
                'rgb(255, 159, 64)',
                'rgb(255, 99, 132)',
                'rgb(255, 99, 132)'
            ],
            data: [4, 10, 7, 5, 20, 30, 20],
        }]
    };
    const config1 = {
        type: 'bar',
        data: data1,
        options: {
            plugins: {
                title: {
                    display: true,
                    text: 'จำนวนครั้งเฉลี่ยที่ผสมติด(ครั้ง)'
                }
            }
        }
    };
    var myChart1 = new Chart(
        document.getElementById('myChart1'),
        config1
    );

    const labels2 = [
        '1 ม.ค.',
        '5 ม.ค.',
        '7 ม.ค.',
        '10 ม.ค.',
        '11 ม.ค.',
        '12 ม.ค.',
    ];
    const data2 = {
        labels: labels2,
        datasets: [{
            label: 'My First dataset',
            backgroundColor: [
                'rgba(225, 6, 0, 0.7)',
                'rgba(225, 6, 0, 0.7)',
                'rgba(255, 159, 64, 0.9)',
                'rgba(255, 159, 64, 0.9)',
                'rgba(255, 159, 64, 0.9)',
                'rgba(201, 203, 207, 0.9)',
                'rgba(201, 203, 207, 0.9)'
            ],
            borderColor: [
                'rgb(255, 99, 132)',
                'rgb(255, 99, 132)',
                'rgb(255, 159, 64)',
                'rgb(255, 159, 64)',
                'rgb(255, 159, 64)',
                'rgb(255, 99, 132)',
                'rgb(255, 99, 132)'
            ],
            data: [4, 10, 7, 5, 20, 30, 20],
        }]
    };
    const config2 = {
        type: 'bar',
        data: data2,
        options: {
            plugins: {
                title: {
                    display: true,
                    text: 'จำนวนการผสมในแต่ละครั้งท้อง(ครั้ง)'
                }
            }
        }
    };
    var myChart2 = new Chart(
        document.getElementById('myChart2'),
        config2
    );
</script>