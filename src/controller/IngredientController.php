<?php
// src/controller/MaterialController.php

require_once '../models/ingredients.php';

class ingredientController {
    public function listIngredients() {
        $ingredient = ingredient::getAllIngredients();
        require '../views/ingredients/list.php';
    }
}
?>
