$(document).ready(function() {

    config();
    listening_Events();

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
    $('#date3').datepicker({
        autoHide: true,
        zIndex: 2048,
        language: 'th-TH',
        format: 'dd-mm-yyyy'
    });
    $('#date3').datepicker("setDate", "pick");
    $('#timepicker1').mdtimepicker({
        theme: 'blue'
    });
    let d = new Date();
    let start_time = d.getHours() + ":" + d.getMinutes();
    $('#timepicker1').val(start_time);
}

function listening_Events() {
    $("#breed").on('change', function() {
        let option = document.getElementById("breed").value;
        let option2 = document.getElementById("method").value;
        if (option == 1) {
            $("#content-1").removeClass("disable-view");
            $("#content-2").removeClass("disable-view");
            if (option2 == 1) {
                $("#content-2").removeClass("disable-view");
                $("#content-3").addClass("disable-view");
            } else {
                $("#content-3").removeClass("disable-view");
                $("#content-2").addClass("disable-view");
            }
        } else {
            $("#content-1").addClass("disable-view");
            $("#content-2").addClass("disable-view");
            $("#content-3").addClass("disable-view");
        }
    });

    $("#method").on('change', function() {
        let option = document.getElementById("method").value;
        if (option == 1) {
            $("#content-2").removeClass("disable-view");
            $("#content-3").addClass("disable-view");
        } else {
            $("#content-3").removeClass("disable-view");
            $("#content-2").addClass("disable-view");
        }
    });
}