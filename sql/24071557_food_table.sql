CREATE TABLE food (
    food_id INT AUTO_INCREMENT PRIMARY KEY, /*รหัสเมนู*/
    food_name VARCHAR(100) NOT NULL, /*ชื่อเมนู*/
    type_id INT, /*ประเภทเมนู*/
    food_price DECIMAL(10, 2), /*ราคาเมนู*/
    FOREIGN KEY (type_id) REFERENCES food_types(type_id) /*อ้างอิงไปยังตาราง food_catagories*/
);

-- เพิ่มคอลัมน์ type_code ในตาราง food_categories
ALTER TABLE food
ADD COLUMN food_image VARCHAR(255);
