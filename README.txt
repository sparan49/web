# FiveM Checker (PHP Version)
เว็บไซต์ตรวจสอบรายชื่อผู้เล่นในเซิร์ฟเวอร์ Pracharuk City

## วิธีติดตั้งบน Shared Hosting
1. เข้าสู่ cPanel หรือ DirectAdmin
2. ไปที่ File Manager > public_html
3. สร้างโฟลเดอร์ชื่อ fivem-checker
4. อัปโหลดไฟล์ทั้งหมดใน ZIP นี้เข้าไป
5. เข้าใช้งานได้ที่: https://yourdomain.com/fivem-checker/

## หมายเหตุ
- หากเซิร์ฟเวอร์ Pracharuk ปิดหรือไม่เปิดพอร์ต 30120 จะไม่สามารถดึงข้อมูลได้
- สามารถแก้ไข API ใน `api/check.php` เพื่อเปลี่ยน IP หรือพอร์ตเซิร์ฟเวอร์ได้
