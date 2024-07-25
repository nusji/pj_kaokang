CREATE TABLE menu_recipe (
    recipe_id INT PRIMARY KEY, -- รหัสสูตรอาหาร
    menu_id INT, -- รหัสเมนู
    ingredient_id INT, -- รหัสวัตถุดิบ
    ingredient_amount INT, -- ปริมาณวัตถุดิบ
    FOREIGN KEY (menu_id) REFERENCES menu(menu_id), -- อ้างอิงไปยังตาราง Menu
    FOREIGN KEY (ingredient_id) REFERENCES ingredients(ingredient_id) -- อ้างอิงไปยังตาราง Ingredients
);
ALTER TABLE menu_recipe 
    MODIFY COLUMN ingredient_amount DECIMAL(10, 2);