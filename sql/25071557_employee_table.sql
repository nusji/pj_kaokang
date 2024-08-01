CREATE TABLE IF NOT EXISTS Employee (
    employee_id INTEGER AUTO_INCREMENT PRIMARY KEY, -- รหัสพนักงาน
    employee_name VARCHAR(100) NOT NULL, -- ชื่อพนักงาน
    employee_role VARCHAR(100) NOT NULL, -- ตำแหน่ง
    employee_address VARCHAR(255), -- ที่อยู่
    employee_phone VARCHAR(10), -- เบอร์โทร
    employee_image VARCHAR(255), -- รูปภาพ
    employee_status VARCHAR(20) -- สถานะ
);