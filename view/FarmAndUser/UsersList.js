$(document).ready(function() {
    load_Me(localStorage.getItem('userid'))
    load_userList(localStorage.getItem('farmid'));
});


$(document).on('click', '.submenu-camera', function() {
    localStorage.setItem("request", "user-list");
    window.open('./UsersList-Photo.php', '_self');
});

$(document).on('click', '.submenu-edit', function() {
    window.open('./UsersList-Edit.php', '_self');
});

$(document).on('click', '.submenu-detail', function() {
    let userlistid = $(this).attr('id');
    localStorage.setItem("userlistid", userlistid);
    window.open('./UsersList-Detail.php', '_self');
});



function load_userList(farmid) {
    let xhttp = new XMLHttpRequest();
    let data;
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {

            if (this.responseText != '') {
                data = JSON.parse(this.responseText);
                let text = ``;
                for (i in data) {
                    text += `<li class="list-item-accordion submenu-detail" id="${data[i]['u-id']}">
                                <div class="row list-group-item list-group-item-action list-item-accordion">
                                    <div class="col-2 image-lists">
                                        <img alt="Image placeholder" class="image-farm" src="../../${data[i]['u-picture']}">
                                    </div>
                                    <div class="col ml--2 content-lists">
                                        <h4 class="mb-0">
                                            <a>${data[i]['u-name-first']}</a>
                                        </h4>
                                        <span class="text-warning">●</span>
                                        <small>รายละเอียด</small>
                                    </div>
                                    <div class="col-2 set-center-add">
                                        <i class="fas fa-chevron-right set-right-add"></i>
                                    </div>
                                </div>
                            </li>`;
                }
                $(".container-accordion").append(text);
            }
        }
    };
    xhttp.open("POST", "../../connectApi.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send(`request=userList&farmid=${farmid}`);
}

function load_Me(userid) {
    let xhttp = new XMLHttpRequest();
    let data;
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {

            if (this.responseText != '') {
                data = JSON.parse(this.responseText);
                $(".image-farm").attr("src", "../../" + data[0]['u-picture']);
                document.getElementById("name").innerHTML = data[0]['u-name-first'];
            }
        }
    };
    xhttp.open("POST", "../../connectApi.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send(`request=userDetail&userid=${userid}`);
}