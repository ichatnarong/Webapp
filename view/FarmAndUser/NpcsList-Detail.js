$(document).ready(function() {
    load_doctorDetail(localStorage.getItem('npcid'));
});

function load_doctorDetail(userid) {

    let xhttp = new XMLHttpRequest();
    let data;
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {

            if (this.responseText != '') {
                data = JSON.parse(this.responseText);
                $(".title-header").text(data[0]['u-name-first']);
                document.getElementById("npc_name").innerHTML = data[0]['u-name-first'];
                document.getElementById("npc_lastname").innerHTML = data[0]['u-name-last'];
                document.getElementById("npc_nickname").innerHTML = "รอถามก่อน"
                document.getElementById("npc_age").innerHTML = "รอถามก่อน";
            }
        }
    };
    xhttp.open("POST", "../../connectApi.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send(`request=userDetail&userid=${userid}`);

}

function formatDateThai(date) {
    let monthNames = [
        "มกราคม", "กุมภาพันธ์", "มีนาคม", "เมษายน",
        "พฤษภาคม", "มิถุนายน", "กรกฎาคม", "สิงหาคม",
        "กันยายน", "ตุลาคม", "พฤศจิกายน", "ธันวาคม"
    ];
    let data = date.split("-");
    return `${data[2]} ${monthNames[data[1]-1]} ${data[0]}`;
}