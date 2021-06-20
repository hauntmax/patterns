<?php

namespace app\Behavioral\AbstractFactory\Conceptual\Implementation;

use app\Behavioral\AbstractFactory\Conceptual\Abstraction\AbstractFactory;
use app\Behavioral\AbstractFactory\Conceptual\Abstraction\AbstractProductA;
use app\Behavioral\AbstractFactory\Conceptual\Abstraction\AbstractProductB;

class ConcreteFactory1 implements AbstractFactory
{
    public function createProductA(): AbstractProductA
    {
        return new ConcreteProductA1();
    }

    public function createProductB(): AbstractProductB
    {
        return new ConcreteProductB1();
    }
}
