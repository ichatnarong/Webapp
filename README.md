# Webapp
Develop web applications with php, javascript, jquery and bootstrap.

รายละเอียดฟังชั่นหลักๆ
1.	ฟังชั่นเกี่ยวกับเรื่องเสียง speech to text && text to speech
    -	Speech to text ใช้ web speech api  [ซัพพอตแค่ chrome ios ต้อง 14.5 ขึ้นไป การทำงานเสียง -> ข้อความ]
        o	https://developer.mozilla.org/en-US/docs/Web/API/Web_Speech_API
        o	code จะอยู่ในส่วน  \view\layout\LayoutFooter.js 
    -	Text to speech ใช้ google translate api [ซัพพอตทุกแพลตฟอร์ม การทำงานข้อความ -> เสียง]
        o	https://github.com/diewland/google-translate-tts
        o	code จะอยู่ในส่วน  \view\layout\LayoutFooter.js 
    -	ฟังชั่น DetectSevice && DetecPermission Microphone [ตรวจจับอุปกรณ์ และสิทธิของไมโครโฟน]
        o	code จะอยู่ในส่วน  \view\layout\LayoutFooter.js 
2.	ฟังชั่นเกี่ยวกับ api
    -	Savelog  [savelog access,savelog login]
        o	code จะอยู่ในส่วน  \saveLog.php แยกเป็นฟังชั่นตามรีเควส 
        o	loglogin จะเรียกใช้ใน sign-in-verify.php
        o	logaccess จะมีฟังชั่นให้เรียกใช้ใน \view\layout\LayoutFooter.js
    -	api เกี่ยวกับ mysql [การทำงานดึงข้อมูล sql ผ่าน api]
        o	code จะอยู่ในส่วน  \connectApi.php แยกเป็นฟังชั่นตามรีเควส 
        o	code เรียกใช้งานจะเรียกใน .js ของทุกๆหน้าที่มีดึงข้อมูลใช้วิธีการ AJAX 
3.	ฟังชั่นการบันทึกรูปภาพ
    -	code ส่วนสร้างโฟลเดอกับบันทึกภาพจะอยู่ในส่วน  \save_Photo.php 
    -	code วิธีการเรียกใช้จะอยู่ใน \view\layout\LayoutFooter.js

**ตัวอย่างหน้าเว็บอยู่ที่ PrintscreenProject.pdf
