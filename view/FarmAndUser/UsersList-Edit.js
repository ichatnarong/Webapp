$(document).ready(function() {
    config();
    load_cowEdit();
    events();
});

function config() {
    $('#date1').datepicker({
        autoHide: true,
        zIndex: 2048,
        language: 'th-TH',
        format: 'dd-mm-yyyy'
    });
    // $('#date1').datepicker("setDate", "pick");
    // let date = data[0]['cow-birthday'].split("-")
}

function events() {
    $(document).on('click', '#save', function() {


    });
}

function load_cowEdit() {
    let uid = localStorage.getItem('userid');
    let data;
    let xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            if (this.responseText != '') {
                data = JSON.parse(this.responseText);
                $(".title-header").text("แก้ไขข้อมูล" + data[0]['u-name-first']);
                document.getElementById("userlist_name").value = data[0]['u-name-first'];
                document.getElementById("userlist_lastname").value = data[0]['u-name-last'];
                document.getElementById("userlist_nickname").value = "รอข้อมูล db"
            }
        }
    };
    xhttp.open("POST", "../../connectApi.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send(`request=userDetail&userid=${uid}`);
}