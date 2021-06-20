<?php

namespace app\Behavioral\AbstractFactory\RealUse\Implementation;

use app\Behavioral\AbstractFactory\RealUse\Abstraction\PageTemplate;
use app\Behavioral\AbstractFactory\RealUse\Abstraction\TemplateFactory;
use app\Behavioral\AbstractFactory\RealUse\Abstraction\TemplateRenderer;
use app\Behavioral\AbstractFactory\RealUse\Abstraction\TitleTemplate;

class PHPTemplateFactory implements TemplateFactory
{
    public function createTitleTemplate(): TitleTemplate
    {
        return new PHPTemplateTitleTemplate();
    }

    public function createPageTemplate(): PageTemplate
    {
        return new PHPTemplatePageTemplate($this->createTitleTemplate());
    }

    public function getRenderer(): TemplateRenderer
    {
        return new PHPTemplateRenderer();
    }
}
