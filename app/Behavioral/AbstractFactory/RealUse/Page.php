<?php


namespace app\Behavioral\AbstractFactory\RealUse;


use app\Behavioral\AbstractFactory\RealUse\Abstraction\TemplateFactory;

class Page
{
    /**
     * @var string
     */
    public string $title;

    /**
     * @var string
     */
    public string $content;

    public function __construct(string $title, string $content)
    {
        $this->title = $title;
        $this->content = $content;
    }

    /**
     * @param TemplateFactory $factory
     * @return string
     */
    public function render(TemplateFactory $factory): string
    {
        $pageTemplate = $factory->createPageTemplate();
        $renderer = $factory->getRenderer();

        return $renderer->render($pageTemplate->getTemplateString(), [
            'title' => $this->title,
            'content' => $this->content,
        ]);
    }
}
