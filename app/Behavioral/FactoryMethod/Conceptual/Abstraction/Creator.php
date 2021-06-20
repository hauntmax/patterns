<?php

namespace app\Behavioral\FactoryMethod\Conceptual\Abstraction;

use app\Behavioral\FactoryMethod\Conceptual\Abstraction\Product;

abstract class Creator
{
    abstract public function factoryMethod(): Product;

    public function operation(): string
    {
        $product = $this->factoryMethod();

        return "Creator: The same creator's code has just worked with " . $product->operation() . "<br>";
    }
}
