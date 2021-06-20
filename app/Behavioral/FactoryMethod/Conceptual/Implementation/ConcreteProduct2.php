<?php

namespace app\Behavioral\FactoryMethod\Conceptual\Implementation;

use app\Behavioral\FactoryMethod\Conceptual\Abstraction\Product;

class ConcreteProduct2 implements Product
{
    public function operation(): string
    {
        return "{Result of the ConcreteProduct2}";
    }
}
