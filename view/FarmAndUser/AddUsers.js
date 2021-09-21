$(document).ready(function() {
    config();
    events();
});


function config() {
    load_userAll()
}

function load_userAll() {
    let xhttp = new XMLHttpRequest();
    let data;
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            if (this.responseText != '') {
                data = JSON.parse(this.responseText);
                console.log(data)
                let text = ``;
                for (i in data) {
                    text += ` <option value="${data[i]['u-id']}">${data[i]['u-name-first']}</option> `;
                }
                $('#userlist').append(text);
            }
        }
    };
    xhttp.open("POST", "../../connectApi.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send(`request=userAll`);
}

function events() {
    $(document).on('click', '#save', function() {
        let uid = document.getElementById("userlist").value;
        let farmid = localStorage.getItem('farmid');
        console.log(uid)
        if (uid == '') {
            bootbox.alert({
                title: "แจ้งเตือน",
                message: "กรุณาเลือกผู้ใช้ !!",
                size: 'small'
            });
        } else {
            let xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    console.log(this.responseText)
                    if (this.responseText != -1) {
                        swal({
                            title: "เพิ่มผู้ใช้สำเร็จ",
                            icon: "success",
                            button: "ตกลง",
                        }).then((value) => {
                            if (value) {
                                window.open('./UsersList.php', '_self');
                            }
                        });
                    }
                }
            };
            xhttp.open("POST", "../../connectApi.php", true);
            xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhttp.send(`request=addUsers&uid=${uid}&farmid=${farmid}`);
        }

    });
}