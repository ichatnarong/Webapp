let statusMic;
let md = new MobileDetect(window.navigator.userAgent);

// Text to Speech [Google Translate api]
const playTTS = (text, lang) => {
    // Get the audio element
    const audioEl = document.getElementById('tts-audio');
    const url = `https://translate.google.com/translate_tts?ie=UTF-8&tl=${lang}&client=tw-ob&q=${text}`;
    // add the sound to the audio element
    audioEl.src = url;
    //For auto playing the sound
    audioEl.play();
};

$(document).ready(function() {

    // Check Support SpeechRecognition
    if ('SpeechRecognition' in window || 'webkitSpeechRecognition' in window) {
        // alert("SpeechRecognition and webkitSpeechRecognition Support");
        console.log("SpeechRecognition and webkitSpeechRecognition Support") // support 
        speechToText();
        checkPermission();

    } else {
        // alert("SpeechRecognition and webkitSpeechRecognition notSupport");
        console.log("SpeechRecognition and webkitSpeechRecognition notSupport");
    }

    // Detect Floating_Button
    if (md.os() != null && statusPhoto != '') {
        let text = `<li class="floating-button">
                    <a href="#" data-mfb-label="ถ่ายรูป" class="mfb-component__button--child photo">
                        <i class="mfb-component__child-icon fas fa-camera"></i>
                    </a>
                </li>`;
        $(".mfb-component__list").append(text);
    } else if (statusPhoto != '') {
        let text = `<li class="floating-button">
                    <a href="#" data-mfb-label="เลือกรูป" class="mfb-component__button--child photo">
                        <i class="mfb-component__child-icon fas fa-images"></i>
                    </a>
                </li>`;
        $(".mfb-component__list").append(text);
    }

    // Start select2.js
    $('.js-example-basic-single').select2({
        minimumResultsForSearch: 'Infinity'
    });

    // Event save photo
    $(document).on('click', '#save-photo', function() {
        let url = document.getElementsByClassName("pictureFromCamera")[0].src;
        let xhr = new XMLHttpRequest();
        let request = localStorage.getItem('request');
        let id;
        if (request == "cow-list")
            id = localStorage.getItem('cowid');
        else if (request == "user-list")
            id = localStorage.getItem('userid');

        xhr.onreadystatechange = function() {
            if (xhr.readyState == xhr.DONE) {
                let image = document.createElement('img');
                let file = new Blob([xhr.response], { type: 'image/png' });
                let reader = new FileReader();

                reader.readAsDataURL(file);
                reader.onloadend = function() {
                    let base64data = reader.result;
                    image.src = base64data;

                    image.addEventListener('load', function() {

                        let img = document.getElementById("pictureFromCamera");
                        let elem = document.createElement('canvas')
                        elem.width = image.width;
                        elem.height = image.height;
                        let ctx = elem.getContext('2d');
                        ctx.drawImage(img, 0, 0, elem.width, elem.height);
                        let srcEncoded = ctx.canvas.toDataURL('image/jpeg', 0.8);

                        let form = new FormData();
                        form.append('base64', srcEncoded);
                        form.append('request', request);
                        form.append('id', id);

                        $.ajax({
                            type: "POST",
                            data: form,
                            url: "../../save_Photo.php",
                            // async: false,
                            cache: false,
                            contentType: false,
                            processData: false,
                            success: function(result) {
                                if (result.trim() == "OK") {
                                    swal({
                                        title: "อัพเดตรูปภาพสำเร็จ",
                                        icon: "success",
                                        button: "ตกลง",
                                    }).then((value) => {
                                        if (value) {
                                            if (request == "cow-list")
                                                window.open('./CowsList.php', '_self');
                                            else if (request == "user-list")
                                                window.open('./UsersList.php', '_self');
                                        }
                                    });

                                } else {
                                    swal({
                                        title: "อัพเดตรูปภาพไม่สำเร็จ",
                                        icon: "warning",
                                        button: "ตกลง",
                                    }).then((value) => {
                                        if (request == "cow-list")
                                            window.open('./CowsList.php', '_self');
                                        else if (request == "user-list")
                                            window.open('./UsersList.php', '_self');
                                    });
                                }
                            }
                        });

                    });

                }
            }
        };
        xhr.responseType = 'arraybuffer'; //Set the response type to arraybuffer so xhr.response returns ArrayBuffer
        xhr.open('GET', url, true);
        xhr.send();

    });

    eventFloating_Button();
});

// event click floating button
function eventFloating_Button() {
    $(document).on('click', '.floating-button', function() {
        let target = $(this).children().attr('class');
        let classname = target.split(" ");
        if (classname[1] == "photo" && $('#cameraFileInput').length) {
            document.getElementById("cameraFileInput").addEventListener("change", function() {
                document.getElementsByClassName("pictureFromCamera")[0].src = window.URL.createObjectURL(this.files[0]);
            });
            document.getElementById("cameraFileInput").click();
        }
        //Close floating button list 
        $(".mfb-zoomin").attr("data-mfb-state", "closed");
    });
}

// save log
function savelog(request, pageid) {
    let xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            console.log("Add Log Access Success");
        }
    };
    xhttp.open("POST", "../../saveLog.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send(`request=${request}&userid=${userid}&pageid=${pageid}`);
}

function checkPermission() {
    navigator.permissions.query({
        name: 'microphone'
    }).then(function(permissionStatus) {
        // console.log("per :  " + permissionStatus.state); // granted, denied, prompt
        permissionStatus.onchange = function() {
            // console.log("Permission changed to " + this.state);
            statusMic = this.state;
        }
        statusMic = permissionStatus.state;
    })
}

function speechToText() {

    let recognition = new webkitSpeechRecognition();
    recognition.lang = 'th-TH'; // รองรับภาษาไทย
    recognition.interimResults = false;
    // true  เมื่อเรากำลังพูดอยู่ API ก็จะส่งข้อความที่มันวิเคราะห์ได้ขณะนั้น แม้เรายังพูดไม่จบประโยค
    // false ต้องรอให้เราพูดจบเสียก่อน
    recognition.continuous = false; // ให้ API ทำงานต่อเนื่องไปเรื่อยๆ
    recognition.maxAlternatives = 1;

    recognition.onresult = function(event) {
        // to do something
        // console.log(event.results[0][0].transcript)
        // console.log(event);
        console.log("result = " + event.results[event.results.length - 1][0].transcript);
        playTTS(event.results[event.results.length - 1][0].transcript, "th-TH");
    }

    recognition.onend = function() {
        let target = $(".fa-microphone")
        target.removeClass("fa-microphone");
        target.addClass("fa-microphone-slash");
        target.parent().attr("data-mfb-label", "เปิดไมโครโฟน");
        HoldOn.close();
    }

    $(".microphone").click(function() {
        let target = $(this).children().attr('class');
        let classname = target.split(" ");
        console.log(statusMic)
        if (classname[2] == "fa-microphone-slash") {
            $(this).children().removeClass("fa-microphone-slash");
            $(this).children().addClass("fa-microphone");
            $(this).attr("data-mfb-label", "ปิดไมโครโฟน");
            // restartRecognition = true;   
            recognition.start();
            var options = {
                theme: "sk-bounce",
                message: 'ระบบสั่งการด้วยเสียง กำลังดำเนินการ !!!',
                backgroundColor: "rgb(35, 35, 35)",
                textColor: "white"
            };
            HoldOn.open(options);
        }

        if (statusMic == "denied") {
            HoldOn.close();
            bootbox.alert({
                title: "ระบบจัดการด้วยเสียง",
                message: "เบราว์เซอร์ของคุณไม่ได้อนุญาติการเข้าถึงไมโครโฟน กรุณาเปิดใช้การเข้าถึง !!",
                //     message: `  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                //     <ol class="carousel-indicators">
                //       <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                //       <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                //       <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                //     </ol>
                //     <div class="carousel-inner">
                //       <div class="carousel-item active">
                //         <img src="../../picture/profile/male doctor.gif" class="d-block w-100" alt="...">
                //       </div>
                //       <div class="carousel-item">
                //       <img src="../../picture/profile/male doctor.gif" class="d-block w-100" alt="...">
                //       </div>
                //       <div class="carousel-item">
                //       <img src="../../picture/profile/male doctor.gif" class="d-block w-100" alt="...">
                //       </div>
                //     </div>
                //     <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                //       <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                //       <span class="sr-only">Previous</span>
                //     </a>
                //     <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                //       <span class="carousel-control-next-icon" aria-hidden="true"></span>
                //       <span class="sr-only">Next</span>
                //     </a>
                //   </div>`,
                size: 'small'
            });

        }

    });

}