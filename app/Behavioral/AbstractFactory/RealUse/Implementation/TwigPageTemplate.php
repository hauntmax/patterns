<?php

namespace app\Behavioral\AbstractFactory\RealUse\Implementation;

use app\Behavioral\AbstractFactory\RealUse\Abstraction\BasePageTemplate;

class TwigPageTemplate extends BasePageTemplate
{
    public function getTemplateString(): string
    {
        $renderedTitle = $this->titleTemplate->getTemplateString();

        return <<<HTML
        <div class="page">
            $renderedTitle
            <article class="content">{{ content }}</article>
        </div>
        HTML;
    }
}
