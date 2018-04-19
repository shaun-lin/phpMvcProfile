<?php

class Controller
{
    public function model($model)
    {
        require_once '../app/resoure/models/' . $model . '.php';
        return new $model();
    }

    public function view($view, $data = [])
    {
        require_once '../app/resoure/views/' . $view . '.php';
    }

}