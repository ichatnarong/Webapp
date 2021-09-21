$(document).ready(function() {
    load_DoctorList();
});

$(document).on('click', '.list-group-item', function() {
    let doctorid = $(this).attr('id');
    localStorage.setItem("doctorid", doctorid);
    window.open('./DoctorList-Detail.php', '_self');
});


function load_DoctorList() {

    let xhttp = new XMLHttpRequest();
    let farmid = localStorage.getItem('farmid');
    let data;
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {

            if (this.responseText != '') {
                data = JSON.parse(this.responseText);
                let text = ``;
                for (i in data) {
                    text += `<div class="row list-group-item list-group-item-action" id="${data[i]['u-id']}">
                                <div class="col-2 image-lists">
                                    <img alt="Image placeholder" class="image-farm" src="../../picture/profile/male doctor.gif">
                                </div>
                                <div class="col ml--2 content-lists">
                                    <h4 class="mb-0">
                                        <a>แพทย์ ${data[i]['u-name-first']}</a>
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
    xhttp.send(`request=doctorList_Farm&farmid=${farmid}`);

}