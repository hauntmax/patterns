<?php

namespace app\Behavioral\FactoryMethod\Conceptual\Implementation;

use app\Behavioral\FactoryMethod\Conceptual\Abstraction\Creator;
use app\Behavioral\FactoryMethod\Conceptual\Abstraction\Product;

class ConcreteCreator1 extends Creator
{
    public function factoryMethod(): Product
    {
        return new ConcreteProduct1();
    }
}
