<?php

namespace app\Behavioral\AbstractFactory\Conceptual;

use app\Behavioral\AbstractFactory\Conceptual\Abstraction\AbstractFactory;

class Client
{
    private AbstractFactory $factory;

    public function __construct(AbstractFactory $factory)
    {
        $this->factory = $factory;
    }

    public function clientCode()
    {
        $productA = $this->factory->createProductA();
        $productB = $this->factory->createProductB();

        echo $productB->operation() . "<br>";
        echo $productB->anotherOperation($productA) . "<br>";
    }
}
