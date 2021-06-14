<?php


class View
{
    public $template;
    public $page;

    public function __construct($page, $template = 'main_template.php')
    {
        $this->template = $template;
        $this->page = $page;
    }

    public function  render(){
        include_once 'views' . DIRECTORY_SEPARATOR .$this->template;
    }
}