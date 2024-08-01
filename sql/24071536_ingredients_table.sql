-- Active: 1722010486040@@127.0.0.1@3306@kaokang
--สรา้งฐานข้อมูลสำหรับเก็บข้อมูลวัตถุดิบ
CREATE TABLE IF NOT EXISTS Ingredients (
    IngredientID INTEGER AUTO_INCREMENT PRIMARY KEY, -- รหัสวัตถุดิบ
    IngredientName VARCHAR(100) NOT NULL, -- ชื่อวัตถุดิบ
    IngredientUnit VARCHAR(50) NOT NULL, -- หน่วยวัตถุดิบ
    Details VARCHAR(255), -- รายละเอียดวัตถุดิบ
    StockQuantity INTEGER -- จำนวนคงคลัง
);

/* แก้ไขชื่อคอลัมน์ */
ALTER TABLE Ingredients
RENAME COLUMN IngredientID TO ingredient_id, /* รหัสวัตถุดิบ */
RENAME COLUMN IngredientName TO ingredient_name,
RENAME COLUMN IngredientUnit TO ingredient_unit,
RENAME COLUMN Details TO ingredient_detail,
RENAME COLUMN StockQuantity TO ingredient_quantity;

/* แก้ไขชนิดข้อมูล */
ALTER TABLE Ingredients MODIFY ingredient_quantity DECIMAL(5, 2);

/* เพิ่มคอลัมน์ */
ALTER TABLE ingredients
ADD COLUMN ingredient_image VARCHAR(255);
