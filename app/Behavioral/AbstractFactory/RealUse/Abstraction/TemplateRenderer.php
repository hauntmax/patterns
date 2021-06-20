<?php

namespace app\Behavioral\AbstractFactory\RealUse\Abstraction;

interface TemplateRenderer
{
    public function render(string $template, array $arguments = []): string;
}
