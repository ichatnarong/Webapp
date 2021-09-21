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

    $('#timepicker1').mdtimepicker({
        theme: 'blue'
    });
    let d = new Date();
    let start_time = d.getHours() + ":" + d.getMinutes();
    $('#timepicker1').val(start_time);

}