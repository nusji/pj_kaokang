CREATE TABLE food_types (
    type_id INT AUTO_INCREMENT PRIMARY KEY, /*รหัสประเภทเมนู*/
    type_name VARCHAR(100) NOT NULL, /*ชื่อประเภทเมนู*/
    type_detail VARCHAR(255) /*รายละเอียดประเภทเมนู*/
);