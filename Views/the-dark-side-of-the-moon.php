<?php
/**
 * Created by PhpStorm.
 * User: aurelien
 * Date: 22/09/16
 * Time: 20:19
 */

include_once ("../Model.php");
include_once ("../Controller.php");
include_once ("../View.php");

$model = new Model();
$controller = new Controller($model);
$View = new View($model, $controller);
?>

<?= $View->importStylesheet(['TheDarkSideOfTheMoon.css']) ?>
<div class="navbar-fixed"><?= $View->displayNavBar() ?></div>
<div id="thedarkside">
    <h4 class="center white-text">Scroll !</h4>
    <h5 class="center white-text pos_fixe marg_l_42P">The Drak Side Of The Moon</h5>
    <svg id="mySVG" class="pos_fixe">
        <polygon points="300,280 600,300 600,320" style="fill:red;" />
        <polygon points="300,280 600,320 600,340" style="fill:orange;" />
        <polygon points="300,280 600,340 600,360" style="fill:yellow;" />
        <polygon points="300,280 600,360 600,380" style="fill:green;" />
        <polygon points="300,280 600,380 600,400" style="fill:blue;" />
        <polygon points="300,280 600,400 600,420" style="fill:purple;" />
        <line id="rainbow" x1="300" y1="320" x2="600" y2="320" style="stroke:black;stroke-width:200" />
        <line id="white_line" x1="280" y1="280" x2="0" y2="350" style="stroke:white;stroke-width:2" />
        <path fill="black" stroke="white" stroke-width="3" id="triangle" d="M300 250 L400 400 L200 400 Z" />
    </svg>
</div>

<?= $View->displayFooter() ?>
<?= $View->importJsFiles(['theDarkSideOfTheMoon.js']) ?>