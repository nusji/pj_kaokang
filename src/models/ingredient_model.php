<?php
// src/models/ingredients_model.php

class Ingredient
{
    private $id;
    private $name;
    private $unit;
    private $detail;
    private $quantity;

    public function __construct($id, $name, $unit, $detail, $quantity)
    {
        $this->id = $id;
        $this->name = $name;
        $this->unit = $unit;
        $this->detail = $detail;
        $this->quantity = (float)$quantity; // แปลงเป็น float เพื่อตรงกับ DECIMAL ในฐานข้อมูล
    }

    public static function getAllIngredients()
    {
        try {
            $db = new PDO('mysql:host=localhost;dbname=kaokang', 'root', '');
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt = $db->query('SELECT * FROM Ingredients');
            $ingredientsData = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $ingredients = [];

            foreach ($ingredientsData as $ingredientData) {
                $ingredients[] = new self(
                    $ingredientData['ingredient_id'],
                    $ingredientData['ingredient_name'],
                    $ingredientData['ingredient_unit'],
                    $ingredientData['ingredient_detail'],
                    $ingredientData['ingredient_quantity']
                );
            }

            return $ingredients;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            return [];
        }
    }

    public static function getTotalIngredients()
    {
        try {
            $db = new PDO('mysql:host=localhost;dbname=kaokang', 'root', '');
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt = $db->query('SELECT COUNT(*) AS total FROM Ingredients');
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            return $result['total'];
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            return 0;
        }
    }

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getUnit()
    {
        return $this->unit;
    }

    public function getDetail()
    {
        return $this->detail;
    }

    public function getQuantity()
    {
        return $this->quantity;
    }
}
?>
