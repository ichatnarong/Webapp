$(document).ready(function() {

    $('#date').datepicker({
        autoHide: true,
        zIndex: 2048,
        language: 'th-TH',
        format: 'dd-mm-yyyy'
    });
    $('#date').datepicker("setDate", "pick");

    // $('#timepicker1').mdtimepicker({
    //     theme: 'blue'
    // });

    $(document).on('click', '#Time period', function() {

    });

});