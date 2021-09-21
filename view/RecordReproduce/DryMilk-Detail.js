$(document).ready(function() {
    config();
});


function config() {
    $('#timepicker1').mdtimepicker({
        theme: 'blue'
    });
    let d = new Date();
    let start_time = d.getHours() + ":" + d.getMinutes();
    $('#timepicker1').val(start_time);
}