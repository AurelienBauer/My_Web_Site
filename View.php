<?php
/**
 * Created by PhpStorm.
 * User: aurelien
 * Date: 31/08/16
 * Time: 21:32
 */

class View {

    protected $model;
    protected $controller;

    public function __construct($model, $controller)
    {
        $this->controller = $controller;
        $this->model = $model;
        include ("Pattern/header.php");
    }

    public function displayNavBar () {
        include ("Pattern/nav_bar.php");
    }

    public function displayFooter () {
        include ("Pattern/footer.php");
    }

    public function importStylesheet($list = null) {
        if (isset($list)) {
            foreach ($list as $filename) {
                echo ('<link type="text/css" rel="stylesheet" href="../css/'. $filename. '"  media="screen,projection"/>');
            }
        }
    }

    public function importJsFiles($list = null) {
        if (isset($list)) {
            foreach ($list as $filename) {
                echo ('<script type="text/javascript" src="../js/' . $filename . '"></script>');
            }
        }
    }
}