<?php

namespace app\Behavioral\AbstractFactory\Conceptual\Implementation;

use app\Behavioral\AbstractFactory\Conceptual\Abstraction\AbstractProductA;

class ConcreteProductA2 implements AbstractProductA
{
    public function operation(): string
    {
        return "This is Concrete product A2 <br>";
    }
}
