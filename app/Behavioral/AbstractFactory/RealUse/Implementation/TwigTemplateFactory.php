<?php

namespace app\Behavioral\AbstractFactory\RealUse\Implementation;

use app\Behavioral\AbstractFactory\RealUse\Abstraction\PageTemplate;
use app\Behavioral\AbstractFactory\RealUse\Abstraction\TemplateFactory;
use app\Behavioral\AbstractFactory\RealUse\Abstraction\TemplateRenderer;
use app\Behavioral\AbstractFactory\RealUse\Abstraction\TitleTemplate;

class TwigTemplateFactory implements TemplateFactory
{
    public function createTitleTemplate(): TitleTemplate
    {
        return new TwigTitleTemplate();
    }

    public function createPageTemplate(): PageTemplate
    {
        return new TwigPageTemplate($this->createTitleTemplate());
    }

    public function getRenderer(): TemplateRenderer
    {
        return new TwigRenderer();
    }
}
