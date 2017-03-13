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
        define('BASE_PATH', realpath(dirname(__FILE__)));
        define('APPLICATION_PATH', '/public/');
        include (BASE_PATH . "/Pattern/header.php");
    }

    public function displayNavBar () {
        include (BASE_PATH . "/Pattern/nav_bar.php");
    }

    public function displayFooter () {
        include (BASE_PATH . "/Pattern/footer.php");
    }

    public function importStylesheet($list = null) {
        if (isset($list)) {
            foreach ($list as $filename) {
                echo ('<link type="text/css" rel="stylesheet" href="'. APPLICATION_PATH .'css/'. $filename. '"  media="screen,projection, print"/>');
            }
        }
    }

    public function importPrintStylesheet($list = null) {
        if (isset($list)) {
            foreach ($list as $filename) {
                echo ('<link type="text/css" rel="stylesheet" href="'. APPLICATION_PATH .'css/'. $filename. '"  media="print"/>');
            }
        }
    }

    public function importJsFiles($list = null) {
        if (isset($list)) {
            foreach ($list as $filename) {
                echo ('<script type="text/javascript" src="'. APPLICATION_PATH .'js/' . $filename . '"></script>');
            }
        }
    }

    public function getMyAge() {
        $now = new DateTime();
        $birth = new DateInterval("P1997Y10M4D");
        return $now->sub($birth)->format("y");
    }
}