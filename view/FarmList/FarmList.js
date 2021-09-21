function event_selectFarm() {
    $(document).on('click', '.list-group-item', function() {
        let farmid = $(this).attr('id');
        let codid = $(this).attr('codid');
        let farmName = $(this).children().next().children().children().text();
        localStorage.setItem("farmid", farmid);
        localStorage.setItem("codid", codid);
        localStorage.setItem("farmName", farmName);
        window.open('../MenuMyFarm/MenuMyFarm.php', '_self');
    });
}

function load_FarmList() {
    let xhttp = new XMLHttpRequest();
    let data;
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {

            if (this.responseText != '') {
                data = JSON.parse(this.responseText);
                let text = ``;
                for (i in data) {
                    text += ` <div class="row list-group-item list-group-item-action" id="${data[i]['farm-id']}" codid="${data[i]['cod-id']}">
                                    <div class="col-2 image-lists">
                                        <img alt="Image placeholder" class="image-farm" src="../../picture/other/farm.jpg">
                                    </div>
                                    <div class="col ml--2 content-lists">
                                        <h4 class="mb-0">
                                            <a>${data[i]['farm-name']}</a>
                                        </h4>
                                        <span class="text-warning">●</span>
                                        <small>${data[i]['Province']}</small>
                                    </div>
                            </div> `;
                }
                $(".gridContainer1").html(text);
            }
        }
    };
    xhttp.open("POST", "../../connectApi.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send(`request=FarmList&userid=${userid}`);

}