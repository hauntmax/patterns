<?php

namespace app\Behavioral\AbstractFactory\Conceptual\Implementation;

use app\Behavioral\AbstractFactory\Conceptual\Abstraction\AbstractFactory;
use app\Behavioral\AbstractFactory\Conceptual\Abstraction\AbstractProductA;
use app\Behavioral\AbstractFactory\Conceptual\Abstraction\AbstractProductB;

class ConcreteFactory2 implements AbstractFactory
{
    public function createProductA(): AbstractProductA
    {
        return new ConcreteProductA2();
    }

    public function createProductB(): AbstractProductB
    {
        return new ConcreteProductB2();
    }
}
