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

ฟังชั่นการทำงานที่ยังไม่สำเร็จ หรือไม่สมบรูณ์
   1.ฟังชั่นเสียง speech to text ไม่รองรับ ios ที่ต่ำกว่า 14.5 และยังไม่ได้เขียนเงื่อนไขการสั่งการด้วยเสียง
   2.เซฟรูปภาพ หรืออัพเดตรูปภาพของผู้ใช้ และโคนม สามารถสร้างโฟลเดอและเซฟไฟได้ใน local แต่บนเซิฟไม่ได้ ไม่แน่ใจเป็นที่ permission ของเซิฟหรือไม่ เพราะคำสั่ง mkdir() สั่งกำหนด permission แล้ว
   3.ตัว detect สิทธิของไมโครโฟน ดีเทคได้แล้วแต่ยังไม่ได้ออกแบบว่าจะบอกว่าผู้ใช้อย่างไรให้สามารถแก้ไขเองได้
   4.ไม่สามารถจำหน่ายโคนมได้ (api ยังไม่ได้ทำไว้)
   5.ไม่สามารแก้ไขข้อมูลรายชื่อผู้ใช้ของตัวเองได้ (db ไม่มี fill เก็บ date)


