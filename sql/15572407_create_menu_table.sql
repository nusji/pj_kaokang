CREATE TABLE menu (
    menu_id INT PRIMARY KEY, /*รหัสเมนู*/
    menu_name VARCHAR(100) NOT NULL, /*ชื่อเมนู*/
    menu_category INT, /*ประเภทเมนู*/
    menu_price DECIMAL(10, 2), /*ราคาเมนู*/
    FOREIGN KEY (menu_category) REFERENCES menu_catagories(category_id) /*อ้างอิงไปยังตาราง menu_catagories*/
);

ALTER TABLE menu
RENAME COLUMN menu_category TO category_id;