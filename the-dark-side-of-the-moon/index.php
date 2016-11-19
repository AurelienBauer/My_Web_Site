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
<h4 class="center white-text">Scroll !</h4>

<div id="thedarkside">
    <h5 id="title" class="white-text pos_fixe horiz_fixe_div">The Drak Side Of The Moon</h5>
    <svg id="mySVG" class="pos_fixe horiz_fixe_div">
        <polygon points="500,200 1000,220 1000,240" style="fill:red;" />
        <polygon points="500,200 1000,240 1000,260" style="fill:orange;" />
        <polygon points="500,200 1000,260 1000,280" style="fill:yellow;" />
        <polygon points="500,200 1000,280 1000,300" style="fill:green;" />
        <polygon points="500,200 1000,300 1000,320" style="fill:blue;" />
        <polygon points="500,200 1000,320 1000,340" style="fill:purple;" />
        <line id="rainbow" x1="500" y1="240" x2="1000" y2="240" style="stroke:black;stroke-width: 200" />
        <line id="white_line" x1="480" y1="200" x2="0" y2="270" style="stroke:white;stroke-width:2" />
        <path fill="black" stroke="white" stroke-width="3" id="triangle" d="M500 170 L600 320 L400 320 Z" />
    </svg>
</div>
k
<?= $View->importJsFiles(['theDarkSideOfTheMoon.js']) ?>