<?php

namespace app\Behavioral\AbstractFactory\Conceptual\Abstraction;

interface AbstractProductB
{
    public function operation(): string;

    public function anotherOperation(AbstractProductA $product): string;
}
