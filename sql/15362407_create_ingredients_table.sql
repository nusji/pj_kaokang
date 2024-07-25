--สรา้งฐานข้อมูลสำหรับเก็บข้อมูลวัตถุดิบ
CREATE TABLE IF NOT EXISTS Ingredients (
    IngredientID INTEGER PRIMARY KEY, -- รหัสวัตถุดิบ
    IngredientName VARCHAR(100) NOT NULL, -- ชื่อวัตถุดิบ
    IngredientUnit VARCHAR(50) NOT NULL, -- หน่วยวัตถุดิบ
    Details VARCHAR(255), -- รายละเอียดวัตถุดิบ
    StockQuantity INTEGER -- จำนวนคงคลัง
);

ALTER TABLE Ingredients
RENAME COLUMN IngredientID TO ingredient_id, /* รหัสวัตถุดิบ */
RENAME COLUMN IngredientName TO ingredient_name,
RENAME COLUMN IngredientUnit TO ingredient_unit,
RENAME COLUMN Details TO ingredient_detail,
RENAME COLUMN StockQuantity TO ingredient_quantity;

ALTER TABLE Ingredients MODIFY ingredient_quantity DECIMAL(5, 2);
