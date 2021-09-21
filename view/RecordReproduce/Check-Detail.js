$(document).ready(function() {
    config();
});


function config() {
    $('#date1').datepicker({
        autoHide: true,
        zIndex: 2048,
        language: 'th-TH',
        format: 'dd-mm-yyyy'
    });
    $('#date1').datepicker("setDate", "pick");
    $('#date2').datepicker({
        autoHide: true,
        zIndex: 2048,
        language: 'th-TH',
        format: 'dd-mm-yyyy'
    });
    $('#date2').datepicker("setDate", "pick");

    $('#timepicker1').mdtimepicker({
        theme: 'blue'
    });
    let d = new Date();
    let start_time = d.getHours() + ":" + d.getMinutes();
    $('#timepicker1').val(start_time);

    const labels = [
        '1 ม.ค.',
        '5 ม.ค.',
        '7 ม.ค.',
        '10 ม.ค.',
        '11 ม.ค.',
        '12 ม.ค.',
    ];
    const data = {
        labels: labels,
        datasets: [{
                label: 'เป็นสัด',
                data: [4, 10, 0, 0, 0, 0],
                backgroundColor: 'rgba(225, 6, 0, 0.7)',
                borderColor: 'rgb(255, 99, 132)'
            },
            {
                label: 'ผสมพันธ์แล้ว',
                data: [0, 0, 7, 2, 0, 0],
                backgroundColor: 'rgba(255, 159, 64, 0.9)',
                borderColor: 'rgb(255, 159, 64)'
            },
            {
                label: 'คาดการณ์',
                data: [0, 0, 0, 0, 5, 15],
                backgroundColor: 'rgba(201, 203, 207, 0.9',
                borderColor: 'rgb(255, 99, 132)'
            }
        ]
    };
    const config = {
        type: 'bar',
        data,
        options: {
            plugins: {
                title: {
                    display: true,
                    text: 'ระยะห่างในการเป็นสัด/ผสมแต่ละครั้ง(วัน)'
                }
            }
        }
    };
    var myChart = new Chart(
        document.getElementById('myChart'),
        config
    );
}