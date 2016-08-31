<?php
/**
 * Created by PhpStorm.
 * User: aurelien
 * Date: 31/08/16
 * Time: 21:37
 */

include_once ("../Model.php");
include_once ("../Controller.php");
include_once ("../View.php");

$model = new Model();
$controller = new Controller($model);
$View = new View($model, $controller);
?>
<?= $View->importStylesheet(['My_css.css']) ?>
<?= $View->displayNavBar() ?>

<?= $View->displayFooter() ?>
<?= $View->importJsFiles(['js_file.js']) ?>