$(document).ready(function() {
    load_FarmList(localStorage.getItem('farmid'));
});

$(document).on('click', '.submenu-search', function() {
    let cowid = $(this).parent().parent().attr('id');
    localStorage.setItem("cowid", cowid);
    // localStorage.removeItem('farmid');
    window.open('./CowsList-Detail.php', '_self');
});

$(document).on('click', '.submenu-camera', function() {
    let cowid = $(this).parent().parent().attr('id');
    localStorage.setItem("cowid", cowid);
    localStorage.setItem("request", "cow-list");
    window.open('./CowsList-Photo.php', '_self');
});

$(document).on('click', '.submenu-edit', function() {
    let cowid = $(this).parent().parent().attr('id');
    localStorage.setItem("cowid", cowid);
    window.open('./CowsList-Edit.php', '_self');
});

$(document).on('click', '.submenu-delete', function() {
    let cowid = $(this).parent().parent().attr('id');
    let cowname = $(this).parent().prev().children().next().children().text();
    localStorage.setItem("cowid", cowid);
    localStorage.setItem("cowname", cowname);
    window.open('./CowsList-Delete.php', '_self');
});

$(document).on('click', '.list-item-accordion', function() {
    $(this).children().next().slideToggle();
});

function load_FarmList(farmid) {
    let xhttp = new XMLHttpRequest();
    let data;
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {

            if (this.responseText != '') {
                data = JSON.parse(this.responseText);
                let text = ``;
                for (i in data) {
                    text += `<li class="list-item-accordion" id="${data[i]['cow-id']}">
                                <div class="row list-group-item list-group-item-action link">
                                    <div class="col-2 image-lists">
                                        <img alt="Image placeholder" class="image-farm" src="../../${data[i]['cow-picture']}">
                                    </div>
                                    <div class="col nameCows content-lists">
                                        <a>${data[i]['cow-name']}</a>
                                    </div>
                                    <div class="col-2 set-center-add">
                                        <i class="fas fa-plus set-right-add"></i>
                                    </div>
                                </div>
                                <ul class="submenu">
                                    <li class="row submenu-search">
                                        <i class="col-4 fas fa-search icon-submenu-left"></i>
                                        <a class="col-6" href="#">ดูข้อมูล</a>
                                        <i class="col fas fa-chevron-right icon-submenu-right"></i>
                                    </li>
                                    <li class="row submenu-camera">
                                        <i class="col-4 fas fa-camera-retro icon-submenu-left"></i>
                                        <a class="col-6" href="#">อัพเดตรูปภาพ</a>
                                        <i class="col fas fa-chevron-right icon-submenu-right"></i>
                                    </li>
                                    <li class="row submenu-edit">
                                        <i class="col-4 fas fa-pencil-alt icon-submenu-left"></i>
                                        <a class="col-6" href="#">แก้ไข</a>
                                        <i class="col fas fa-chevron-right icon-submenu-right"></i>
                                    </li>
                                    <li class="row submenu-delete">
                                        <i class="col-4 fas fa-trash icon-submenu-left"></i>
                                        <a class="col-6" href="#">จำหน่าย</a>
                                        <i class="col fas fa-chevron-right icon-submenu-right"></i>
                                    </li>
                                </ul>
                            </li>`;
                }
                $(".container-accordion").html(text);
            }
        }
    };
    xhttp.open("POST", "../../connectApi.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send(`request=cowList_Farm&farmid=${farmid}`);
}