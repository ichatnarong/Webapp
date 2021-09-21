$(document).ready(function() {
    config();
    load_cowEdit();
    events();
});

function config() {
    $('#date1').datepicker({
        autoHide: true,
        zIndex: 2048,
        language: 'th-TH',
        format: 'dd-mm-yyyy'
    });

    $('#date1').datepicker("setDate", "pick");

    $('#cowfather').select2();
    $('#cowmother').select2();
}

function events() {
    $(document).on('click', '#save', function() {
        let cowname = document.getElementById("cowname").value;
        let cownum = document.getElementById("cownum").value;
        let cowspecies = document.getElementById("cowspecies").value;
        let cowgender = document.getElementById("cowgender").value;
        let cowtype = 1;
        let cowbirthday = $('#date1').datepicker('getDate', true);
        let data = cowbirthday.split("-");
        cowbirthday = (data[2] - 543) + "-" + data[1] + "-" + data[0];
        let cowfather = document.getElementById("cowfather").value;
        let cowmother = document.getElementById("cowmother").value;
        let cowid = localStorage.getItem('cowid');
        let farmid = localStorage.getItem('farmid');

        if (cowname == '' || cownum == '' || cowspecies == '' || cowfather == '' || cowmother == '') {
            bootbox.alert({
                title: "แจ้งเตือน",
                message: "กรุณากรอกข้อมูลให้ครบถ้วน !!",
                size: 'small'
            });
        } else {
            let xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    if (this.responseText != -1) {
                        swal({
                            title: "แก้ไขข้อมูล" + cowname + "สำเร็จ",
                            icon: "success",
                            button: "ตกลง",
                        }).then((value) => {
                            if (value) {
                                window.open('./CowsList.php', '_self');
                            }
                        });
                    }
                }
            };
            xhttp.open("POST", "../../connectApi.php", true);
            xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhttp.send(`request=editCows&cowid=${cowid}&cowname=${cowname}&cownum=${cownum}&cowspecies=${cowspecies}&cowgender=${cowgender}
        &cowtype=${cowtype}&cowbirthday=${cowbirthday}&cowfather=${cowfather}&cowmother=${cowmother}&farmid=${farmid}`);
        }

    });
}

function load_cowEdit() {
    let cowid = localStorage.getItem('cowid');
    let farmid = localStorage.getItem('farmid');
    let data;
    let xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            if (this.responseText != '') {
                data = JSON.parse(this.responseText);
                $(".title-header").text("แก้ไขข้อมูล" + data[0]['cow-name']);
                document.getElementById("cownum").value = data[0]['cow-num'];
                document.getElementById("cowname").value = data[0]['cow-name'];
                document.getElementById("cowspecies").value = data[0]['cow-species'];
                let date = data[0]['cow-birthday'].split("-")
                $('#date1').val(date[2] + "-" + date[1] + "-" + (parseInt(date[0]) + 543));
                $('#cowgender').val(data[0]['cow-gender']).trigger('change');

                document.getElementById("cowfather").addEventListener("load", load_cowGender(farmid, 1, "#cowfather"));
                document.getElementById("cowmother").addEventListener("load", load_cowGender(farmid, 0, "#cowmother"));

                if (data[0]['cow-father'] != '') {
                    $('#cowfather').val(data[0]['cow-father']).trigger('change');
                    $("#cowfather option[value='null']").remove();
                }
                if (data[0]['cow-mother'] != '') {
                    $('#cowmother').val(data[0]['cow-mother']).trigger('change');
                    $("#cowmother option[value='null']").remove();
                }

            }
        }
    };
    xhttp.open("POST", "../../connectApi.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send(`request=cowDetail&cowid=${cowid}`);
    console.log(2)
}

function load_cowGender(farmid, gender, id) {
    console.log("Start load_cowGender " + gender + " " + id);
    let xhttp = new XMLHttpRequest();
    let data;
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            if (this.responseText != '') {
                data = JSON.parse(this.responseText);
                console.log(data);
                let text = ``;
                for (i in data) {
                    text += ` <option value="${data[i]['cow-id']}">${data[i]['cow-name']} ${data[i]['cow-num']}</option> `;
                }
                $(id).append(text);
                console.log("*-* " + id);
            }
        }
    };
    xhttp.open("POST", "../../connectApi.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send(`request=cowGender&farmid=${farmid}&cowgender=${gender}`);
}