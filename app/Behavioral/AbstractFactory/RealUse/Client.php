<?php

namespace app\Behavioral\AbstractFactory\RealUse;

use app\Behavioral\AbstractFactory\RealUse\Abstraction\TemplateFactory;
use app\Behavioral\AbstractFactory\RealUse\Implementation\PHPTemplateFactory;

class Client
{
    private TemplateFactory $factory;
    private Page $page;

    public function __construct(TemplateFactory $factory, Page $page)
    {
        $this->factory = $factory;
        $this->page = $page;
    }

    public function clientCode()
    {
        echo $this->page->render($this->factory);
    }
}
