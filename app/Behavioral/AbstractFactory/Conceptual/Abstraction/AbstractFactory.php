<?php

namespace app\Behavioral\AbstractFactory\Conceptual\Abstraction;

interface AbstractFactory
{
    public function createProductA(): AbstractProductA;

    public function createProductB(): AbstractProductB;
}
