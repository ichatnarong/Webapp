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
                        ปริมาณน้ำนม
                    </span>
                </div>
            </div>
        </div>
        <div class="grid-scroll">

            <div class="row">

                <div class="col-12">
                    <div class="card shadow">
                        <div class="card-header card-header-table py-3">
                            <span class="m-0 font-weight-bold">ปริมาณน้ำนมสะสม (ลิตร)</span>
                        </div>
                        <div class="card-body">
                            <canvas id="myChart1"></canvas>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row padding-top13">

                <div class="col-12">
                    <div class="card shadow">
                        <div class="card-header card-header-table py-3">
                            <span class="m-0 font-weight-bold">ปริมาณน้ำนมเฉลี่ยต่อวัน (ลิตร)</span>
                        </div>
                        <div class="card-body">
                            <canvas id="myChart2"></canvas>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row padding-top13">

                <div class="col-12">
                    <div class="card shadow">
                        <div class="card-header card-header-table py-3">
                            <span class="m-0 font-weight-bold">ปริมาณน้ำนมคาดการณ์เฉลี่ยต่อวัน (ลิตร)</span>
                        </div>
                        <div class="card-body">
                            <canvas id="myChart3"></canvas>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row padding-top13">

                <div class="col-12">
                    <div class="card shadow">
                        <div class="card-header card-header-table py-3">
                            <span class="m-0 font-weight-bold">ปริมาณน้ำนมเฉลี่ยท้องที่ 5 (ลิตร)</span>
                        </div>
                        <div class="card-body">
                            <canvas id="myChart4"></canvas>
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
    const labels1 = [
        'ท้องที่ 1',
        'ท้องที่ 2',
        'ท้องที่ 3',
        'ท้องที่ 4'
    ];
    const data1 = {
        labels: labels1,
        datasets: [{
            backgroundColor: [
                'rgba(225, 6, 0, 0.7)',
                'rgba(225, 6, 0, 0.7)',
                'rgba(225, 6, 0, 0.7)',
                'rgba(225, 6, 0, 0.7)'
            ],
            borderColor: [
                'rgb(255, 99, 132)',
                'rgb(255, 99, 132)',
                'rgb(255, 99, 132)',
                'rgb(255, 99, 132)'
            ],
            data: [4, 10, 7, 5],
        }]
    };
    const config1 = {
        type: 'bar',
        data: data1
    };
    var myChart1 = new Chart(
        document.getElementById('myChart1'),
        config1
    );
    // -----------------------
    const DATA_COUNT2 = 3;
    const labels2 = [0, 100, 200, 300];
    const data2 = {
        labels: labels2,
        datasets: [{
                label: 'ปริมาณน้ำนมมากที่สุดต่อวัน',
                data: [50, 80, 10, 100],
                backgroundColor: '#22ee55f5',
            },
            {
                label: 'ปริมาณน้ำนมเฉลี่ยทุกท้องต่อวัน',
                data: [60, 90, 20, 110],
                backgroundColor: 'rgba(201, 203, 207, 0.9)'
            },
            {
                label: 'ปริมาณน้ำนมน้อยสุดต่อวัน',
                data: [70, 100, 30, 120],
                backgroundColor: 'rgba(225, 6, 0, 0.7)'
            }
        ]
    };
    const config2 = {
        type: 'line',
        data: data2,
        options: {
            responsive: true,
            plugins: {
                legend: {
                    position: 'top',
                }
            }
        },
    };
    var myChart2 = new Chart(
        document.getElementById('myChart2'),
        config2
    );
    // -----------------------
    const DATA_COUNT3 = 3;
    const labels3 = [0, 100, 200, 300];
    const data3 = {
        labels: labels3,
        datasets: [{
                label: 'ปริมาณน้ำนมมากที่สุดต่อวัน',
                data: [50, 80, 10, 100],
                backgroundColor: '#22ee55f5',
            },
            {
                label: 'ปริมาณน้ำนมเฉลี่ยทุกท้องต่อวัน',
                data: [60, 90, 20, 110],
                backgroundColor: 'rgba(201, 203, 207, 0.9)'
            },
            {
                label: 'ปริมาณน้ำนมน้อยสุดต่อวัน',
                data: [70, 100, 30, 120],
                backgroundColor: 'rgba(225, 6, 0, 0.7)'
            }
        ]
    };
    const config3 = {
        type: 'line',
        data: data3,
        options: {
            responsive: true,
            plugins: {
                legend: {
                    position: 'top',
                }
            }
        },
    };
    var myChart3 = new Chart(
        document.getElementById('myChart3'),
        config3
    );
    // -----------------------
    const DATA_COUNT4 = 2;
    const labels4 = [0, 100, 200, 300];
    const data4 = {
        labels: labels4,
        datasets: [{
                label: 'ปริมาณน้ำนมที่บันทึก',
                data: [50, 80, 10, 100],
                backgroundColor: '#22ee55f5',
            },
            {
                label: 'ปริมาณน้ำนมที่คาดการณ์ + จำหน่าย',
                data: [60, 90, 20, 110],
                backgroundColor: 'rgba(201, 203, 207, 0.9)'
            }
        ]
    };
    const config4 = {
        type: 'line',
        data: data4,
        options: {
            responsive: true,
            plugins: {
                legend: {
                    position: 'top',
                }
            }
        },
    };
    var myChart4 = new Chart(
        document.getElementById('myChart4'),
        config4
    );
</script>