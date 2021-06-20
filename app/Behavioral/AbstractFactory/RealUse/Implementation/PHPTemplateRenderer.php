<?php

namespace app\Behavioral\AbstractFactory\RealUse\Implementation;

use app\Behavioral\AbstractFactory\RealUse\Abstraction\TemplateRenderer;

class PHPTemplateRenderer implements TemplateRenderer
{
    public function render(string $template, array $arguments = []): string
    {
        extract($arguments);

        ob_start();
        eval('?>' . $template . '<?php');
        $result = ob_get_contents();
        ob_end_clean();

        return $result;
    }
}
