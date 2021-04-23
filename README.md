
## Run project
- กำหนดว่าต้องเก็บข้อมูลอะไรบ้างในระบบ
- กำหนด Entity และ Attributes
- กำหนดความสัมพันธ์ระหว่าง Enity ว่าเป็นแบบใดในรูปแบบ ERD
- config ไฟล์ .env เพื่อให้สามารถเชื่อมต่อกับ Database
- จากนั้นใช้ คำสั่ง php artisan make:migration เพื่อสร้าง table 
- กำหนด Enity และ Attributes ลงไปในโฟเดอร์ Database/migrations แต่ละไฟล์
- migrate เข้า Database
- เมื่อได้ Database จากนั้น Mock up ข้อมูล โดยใช้ seeder
- สร้าง Model เพื่อเชื่อมต่อกับ table ใน database ให้ง่ายขึ้น
- เมือได้สร้าง Enity และ Attributes ตาม ERD กำหนดความสัมพันธ์ตาม ERD ใน Model
- สร้าง Controller เพื่อใช้ในการดึงข้อมูลจาก Routing ต่าง ๆ 


## PS
- ไม่ได้แยก Controller แต่รวมอยู่ในไฟล์เดียวคือ LogController.php
- ฐานข้อมูลที่ใช้ตอนทดลองเป็น Mysql workbench 8.0
- มีรูป ERD เป็นไฟล์ PNG ครับ
