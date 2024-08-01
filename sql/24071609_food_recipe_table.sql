CREATE TABLE food_recipe (
    recipe_id INT AUTO_INCREMENT PRIMARY KEY, -- รหัสสูตรอาหาร
    food_id INT, -- รหัสเมนู
    ingredient_id INT, -- รหัสวัตถุดิบ
    ingredient_amount INT, -- ปริมาณวัตถุดิบ
    FOREIGN KEY (food_id) REFERENCES food(food_id), -- อ้างอิงไปยังตาราง food
    FOREIGN KEY (ingredient_id) REFERENCES ingredients(ingredient_id) -- อ้างอิงไปยังตาราง Ingredients
);

-- แก้ไขชนิดข้อมูล
ALTER TABLE food_recipe 
    MODIFY COLUMN ingredient_amount DECIMAL(10, 2);