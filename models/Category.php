<?php

class Category{
    private $name;
    private $icon;

    public function __construct($name, $icon)
    {
        $this->setName($name);
        $this->setIcon($icon);
    }
    
    /**
     * Get the value of name
     */
    public function getName()
    {
        return $this->name;
    }
    
    /**
     * Set the value of name
     * @return self
     */
    public function setName($name)
    {
    $this->name = $name;

    return $this;
}

    /**
     * Get the value of icon
     */
    public function getIcon()
    {
        return $this->icon;
    }

    /**
     * Set the value of icon
     * @return self
     */
    public function setIcon($icon)
    {
        $this->icon = $icon;
    
        return $this;
    }
}