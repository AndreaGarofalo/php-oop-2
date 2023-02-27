<?php

require_once __DIR__ . '/Product.php';

class ToyProduct extends Product 
{
    private $color;
    private $materials;
    public static $icon = 'fa-solid fa-bone';

    public function __construct($name, $description, $price, Category $category, array $materials, $color) {
        parent::__construct($name, $description, $price, $category);

        $this->setColor($color);
        $this->setMaterials($materials);
    }

    /**
     * Get the value of color
     */ 
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Set the value of color
     *
     * @return  self
     */ 
    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }

    /**
     * Get the value of materials
     */ 
    public function getMaterials()
    {
        return $this->materials;
    }

    public function listMaterials()
    {
        return implode(', ', $this->materials);
    }

    /**
     * Set the value of materials
     *
     * @return  self
     */ 
    public function setMaterials($materials)
    {
        $this->materials = $materials;

        return $this;
    }
}