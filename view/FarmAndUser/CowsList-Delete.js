$(document).ready(function() {
    config();
    cowDlete();
});

function config() {
    $('#date1').datepicker({
        autoHide: true,
        zIndex: 2048,
        language: 'th-TH',
        format: 'dd-mm-yyyy'
    });
    $('#date1').datepicker("setDate", "pick");
}

function cowDlete() {

    let xhttp = new XMLHttpRequest();
    let cowid = localStorage.getItem('cowid');
    let cowname = localStorage.getItem('cowname');
    $(".title-header").text("จำหน่าย" + cowname);
    document.getElementById("cow_name").innerHTML = cowname;

    // let data;
    // xhttp.onreadystatechange = function() {
    //     if (this.readyState == 4 && this.status == 200) {

    //         if (this.responseText != '') {
    //             data = JSON.parse(this.responseText);

    //         }
    //     }
    // };
    // xhttp.open("POST", "../../connectApi.php", true);
    // xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    // xhttp.send(`request=cowDetail&cowid=${cowid}`);

}