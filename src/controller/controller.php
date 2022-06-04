<?php

namespace Denis\Chess\Controller;


abstract class Controller
{

    protected $controllername;
    protected $Model;


    public function __construct()
    {
        $this->controllername = (new \ReflectionClass($this))->getShortName();
        $this->controllername = strtolower(str_replace('Controller', '', $this->controllername));

        $modelClass = '\Denis\Chess\Model\\' . ucfirst($this->controllername);

        if (class_exists($modelClass))
            $this->Model = new $modelClass;
    }

    private function renderFile(string $filename, array $vars): string
    {
        ob_start();
        extract($vars);
        include($filename);
        return ob_get_clean();
    }


    protected function render($file, $vars)
    {
        $root = $_SERVER['DOCUMENT_ROOT'];

        $content = $this->renderFile(
            "{$root}/src/view/{$this->controllername}/{$file}.php",
            $vars
        );

        $layoutFilename = "{$root}/src/view/layout.php";
        include $layoutFilename;
    }

    public function element($file, $vars)
    {
        $root = $_SERVER['DOCUMENT_ROOT'];

        return $this->renderFile(
            "{$root}/src/view/elements/{$file}.php",
            $vars
        );
    }
}
