$(document).ready(function() {
    load_userlistDetail(localStorage.getItem('userlistid'));
});

function load_userlistDetail(userid) {

    let xhttp = new XMLHttpRequest();
    let data;
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {

            if (this.responseText != '') {
                data = JSON.parse(this.responseText);
                $(".title-header").text(data[0]['u-name-first']);
                document.getElementById("userlist_name").innerHTML = data[0]['u-name-first'];
                document.getElementById("userlist_lastname").innerHTML = data[0]['u-name-last'];
                document.getElementById("userlist_nickname").innerHTML = "รอถามก่อน"
                document.getElementById("userlist_age").innerHTML = "รอถามก่อน";
            }
        }
    };
    xhttp.open("POST", "../../connectApi.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send(`request=userDetail&userid=${userid}`);

}