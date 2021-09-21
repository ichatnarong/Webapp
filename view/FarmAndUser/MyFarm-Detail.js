$(document).ready(function() {
    load_myFarm_Detail(localStorage.getItem('farmid'));
    load_countCowinFarm(localStorage.getItem('farmid'));
});

function load_myFarm_Detail(farmid) {

    let xhttp = new XMLHttpRequest();
    let data;
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {

            if (this.responseText != '') {
                data = JSON.parse(this.responseText);
                document.getElementById("farm_name").innerHTML = data[0]['farm-name'];
                document.getElementById("num_member").innerHTML = data[0]['farm-member-number'];
                document.getElementById("farm-regis").innerHTML = data[0]['farm-regis'];
                document.getElementById("farm_ownerName").innerHTML = data[0]['u-name-first'];
                document.getElementById("farm_detail").innerHTML = "อื่นๆ";
            }
        }
    };
    xhttp.open("POST", "../../connectApi.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send(`request=myFarmDetail&farmid=${farmid}`);

}

function load_countCowinFarm(farmid) {

    let xhttp = new XMLHttpRequest();
    let data;
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {

            if (this.responseText != '') {
                data = JSON.parse(this.responseText);
                document.getElementById("cow_sum").innerHTML = data + " ตัว";
            }
        }
    };
    xhttp.open("POST", "../../connectApi.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send(`request=countCowinFarm&farmid=${farmid}`);

}