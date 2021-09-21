$(document).ready(function() {
    load_cooperativeDetail(localStorage.getItem('codid'));
});

function load_cooperativeDetail(codid) {

    let xhttp = new XMLHttpRequest();
    let data;
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {

            if (this.responseText != '') {
                console.log(this.responseText)
                data = JSON.parse(this.responseText);
                document.getElementById("cod_province").innerHTML = data[0]['Province'];
                document.getElementById("cod_name").innerHTML = data[0]['cod-name'];
            }
        }
    };
    xhttp.open("POST", "../../connectApi.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send(`request=codairyDetail&codid=${codid}`);

}