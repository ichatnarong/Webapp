$(document).ready(function() {
    load_npcList(localStorage.getItem('codid'));
});


$(document).on('click', '.list-group-item', function() {
    let npcid = $(this).attr('id');
    localStorage.setItem("npcid", npcid);
    window.open('./NpcsList-Detail.php', '_self');
});


function load_npcList(codid) {

    let xhttp = new XMLHttpRequest();
    let data;
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {

            if (this.responseText != '') {
                data = JSON.parse(this.responseText);
                let text = ``;
                for (i in data) {
                    text += `<div class="row list-group-item list-group-item-action" href="#" id="${data[i]['u-id']}">
                                <div class="col-2 image-lists">
                                    <img alt="Image placeholder" class="image-farm" src="../../picture/profile/male Assistant.gif">
                                </div>
                                <div class="col ml--2 content-lists">
                                    <h4 class="mb-0">
                                        <a>เจ้าหน้าที่ ${data[i]['u-name-first']}</a>
                                    </h4>
                                    <span class="text-warning">●</span>
                                    <small>รายละเอียด</small>
                                </div>
                                <div class="col-2 set-center-add">
                                    <i class="fas fa-chevron-right set-right-add"></i>
                                </div>
                            </div>`;
                }
                $(".gridContainer1").html(text);
            }
        }
    };
    xhttp.open("POST", "../../connectApi.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send(`request=npcList&codid=${codid}`);
}