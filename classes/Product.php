<?php
abstract class Product
{
    protected $name;
    protected $sku;
    protected $price;

    abstract public function print_attributes();

    public function get_type(): string
    {
        return $this->type;
    }
    
    public function getName(): string
    {
        return $this->name;
    }

    public function get_sku(): string
    {
        return $this->sku;
    }

    public function getPrice(): float
    {
         return $this->price;
    }
}