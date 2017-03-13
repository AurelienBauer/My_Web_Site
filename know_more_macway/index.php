<?php
/**
 * Created by PhpStorm.
 * User: aurelien
 * Date: 13/03/17
 * Time: 18:27
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
<div class="row center marg_0 blue_macway">
        <img src="<?= APPLICATION_PATH . "pictures/Macway.jpg"?>">
</div>
<div class="row marg_t_20 withe">
    <div class="col s12 m12 offset-l3 l6 border_l_1 border_r_1">
        <div class="card horizontal">
            <div class="card-stacked">
                <div class="card-content">
                    <p>I am a very simple card. I am good at containing small bits of information.</p>
                </div>
            </div>
            <div class="card-image">
                <img src="<?= APPLICATION_PATH . "pictures/Macway.jpg"?>">
            </div>
        </div>
    </div>
</div>

<?= $View->displayFooter() ?>
