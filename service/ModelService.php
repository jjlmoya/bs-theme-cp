<?php


class ModelService
{
    public $model;
    public $name;
    public $description;
    public $alternative;

    public function __construct($model)
    {
        $this->model = $model;
        $this->call();
    }

    public function call()
    {
        require_once get_template_directory(dirname(__FILE__)) . '/model/' . $this->model . '.php';
    }


}
