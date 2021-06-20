<?php

namespace app\Behavioral\AbstractFactory\RealUse\Implementation;

use app\Behavioral\AbstractFactory\RealUse\Abstraction\TemplateRenderer;

class TwigRenderer implements TemplateRenderer
{
    /**
     * @throws \Twig\Error\SyntaxError
     * @throws \Twig\Error\RuntimeError
     * @throws \Twig\Error\LoaderError
     */
    public function render(string $template, array $arguments = []): string
    {
        $loader = new \Twig\Loader\FilesystemLoader(__DIR__);
        $twig = new \Twig\Environment($loader);
        return $twig->render($template, $arguments);
    }
}
