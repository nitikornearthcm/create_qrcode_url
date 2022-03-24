1.clone โปเจคลงมาในเครื่อง 
2.สร้าง database ชื่อ url_db
3.นำข้อมูลหรือโครงสร้างตารางจากไฟล์ create_qrcode_url/url_db.sql
4.ตั้งค่า database ในไฟล์ create_qrcode_url\app\Config\Database.php ให้ถูกต้อง
5.ทดสอบการทำงานของโปรแกรม
***ถ้ารันในเครื่อง qr code จะแสกนเปิดไม่ได้เนื่องจากบันทึกข้อมูลลงใน database ในเครื่อง 
จากสาเหตุขั้นต้นสามารถทดสอบโปรแกรมบนhostingได้ ตามที่อยู่เว็บ  https://urlqrcode.000webhostapp.com/