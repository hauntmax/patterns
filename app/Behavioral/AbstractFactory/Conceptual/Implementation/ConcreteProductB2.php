<?php

namespace app\Behavioral\AbstractFactory\Conceptual\Implementation;

use app\Behavioral\AbstractFactory\Conceptual\Abstraction\AbstractProductA;
use app\Behavioral\AbstractFactory\Conceptual\Abstraction\AbstractProductB;

class ConcreteProductB2 implements AbstractProductB
{
    public function operation(): string
    {
        return "This is Concrete product B2 <br>";
    }

    public function anotherOperation(AbstractProductA $product): string
    {
        return "This is Super operation of Concrete product B2 <br>The result of the B1 collaborating with the ({$product->operation()}) <br>";
    }
}
