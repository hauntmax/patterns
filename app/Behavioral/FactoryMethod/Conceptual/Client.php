<?php

namespace app\Behavioral\FactoryMethod\Conceptual;

use app\Behavioral\FactoryMethod\Conceptual\Abstraction\Creator;
use app\Behavioral\FactoryMethod\Conceptual\Implementation\ConcreteCreator1;
use app\Behavioral\FactoryMethod\Conceptual\Implementation\ConcreteCreator2;


class Client
{
    private Creator $creator;

    public function __construct(Creator $creator)
    {
        $this->creator = $creator;
    }

    public function clientCode()
    {
        echo "Client: I'm not aware of the creator's class, but it still works.<br>" . $this->creator->operation();
    }
}
