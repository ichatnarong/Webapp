$(document).ready(function() {
    load_cowDetail();
});

function load_cowDetail() {

    let xhttp = new XMLHttpRequest();
    let cowid = localStorage.getItem('cowid');
    let data;
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {

            if (this.responseText != '') {
                data = JSON.parse(this.responseText);
                $(".image-cow").attr("src", "../../" + data[0]['cow-picture']);
                $(".title-header").text(data[0]['cow-name']);
                document.getElementById("cow_num").innerHTML = data[0]['cow-num'];
                document.getElementById("cow_name").innerHTML = data[0]['cow-name'];
                document.getElementById("cow_species").innerHTML = data[0]['cow-species'];
                document.getElementById("cow_bd").innerHTML = formatDateThai(data[0]['cow-birthday']);
                document.getElementById("cow_fa").innerHTML = data[0]['cow-father'] == '' ? "null" : data[0]['cow-father'];
                document.getElementById("cow_mo").innerHTML = data[0]['cow-mother'] == '' ? "null" : data[0]['cow-mother'];
                document.getElementById("cow_sta").innerHTML = "รอถามจร้า";
            }
        }
    };
    xhttp.open("POST", "../../connectApi.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send(`request=cowDetail&cowid=${cowid}`);

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