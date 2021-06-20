<?php

namespace app\Behavioral\AbstractFactory\Conceptual\Implementation;

use app\Behavioral\AbstractFactory\Conceptual\Abstraction\AbstractProductA;

class ConcreteProductA1 implements AbstractProductA
{
    public function operation(): string
    {
        return "This is Concrete product A1 <br>";
    }
}
