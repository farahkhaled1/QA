<?php

abstract class View{
    protected $model;
    protected $controller;

    public function __construct($model, $controller){
        $this->model = $model;
        $this->controller = $controller;
    }

    public abstract function output(); //abstract function ashan lssa mktbtsh feh a fil view
}