<?php

require_once __DIR__ . '/Product.php';

class FoodProduct extends Product {
    private $ingredients;
    private $expiration;
    public static $icon = 'fa-solid fa-bowl-food';

    public function __construct($name, $description, $price, Category $category, array $ingredients, $expiration) {
        parent::__construct($name, $description, $price, $category);

        $this->setExpiration($expiration);
        $this->setIngredients($ingredients);
    }

    /**
     * Get the value of expiration
     */ 
    public function getExpiration()
    {
        return date('d-m-y', $this->expiration);
    }

    /**
     * Set the value of expiration
     *
     * @return  self
     */ 
    public function setExpiration($expiration)
    {
        $date = strtotime($expiration);

        if ($this->isExpired($date)) return false;

        $this->expiration = $date;

        return $this;
    }

    public function isExpired($date = null): bool 
    {
        $today = strtotime(date('y-m-d'));

        if($date) return $date < $today;
        return $this->expiration < $today;
    }

    /**
     * Get the value of ingredients
     */ 
    public function getIngredients()
    {
        return $this->ingredients;
    }

    public function listIngredients() {
        return implode(', ', $this->ingredients);
    }

    /**
     * Set the value of ingredients
     *
     * @return  self
     */ 
    public function setIngredients($ingredients)
    {
        $this->ingredients = $ingredients;

        return $this;
    }
}