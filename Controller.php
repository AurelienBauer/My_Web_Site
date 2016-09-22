<?php
/**
 * Created by PhpStorm.
 * User: aurelien
 * Date: 31/08/16
 * Time: 21:28
 */

class Controller {

    protected $model;

    public function __construct($model)
    {
        $this->model = $model;
    }
}