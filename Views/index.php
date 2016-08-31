<?php
include_once ("../Model.php");
include_once ("../Controller.php");
include_once ("../View.php");

$model = new Model();
$controller = new Controller($model);
$View = new View($model, $controller);
?>
<?= $View->importStylesheet(['My_css.css']) ?>
<?= $View->displayNavBar() ?>

<div class="parallax-container">
    <div class="parallax"><img src="../pictures/parallax_1.jpg"></div>
</div>
<div class="section white" id="cv_main">
    <div class="row container">
        <h2 class="header">Mon Curriculum vitae</h2>
        <div class="row">
            <div class="col s12 l4">
                <div class="card blue-grey darken-1">
                    <div class="card-content white-text">
                        <div class="center">
                            <img src="../pictures/profil_cv_picture.jpg" alt="" class="circle responsive-img" style="width: 50%  ">
                            <h1 style="font-size: larger">BAUER Aur&eacute;lien</h1>
                        </div>
                        <ul>
                            <li class="card-title center text-orange border_b_1" >Information</li>
                            <li><i class="material-icons marg_r_30">person</i> 18 ans</li>
                            <li><i class="material-icons marg_r_30">directions_car</i>Titulaire du permis de conduire</li>
                            <li class="card-title center text-orange border_b_1">Me contacter</li>
                            <li><i class="material-icons marg_r_30">mail</i>aurelien.bauer@epitech.eu</li>
                            <li><i class="material-icons marg_r_30">stay_current_portrait</i>07-71-13-74-18</li>
                            <li><i class="material-icons marg_r_30">place</i>48c rue de Selestat, 67100 Strasbourg, France</li>
                            <li class="card-title center text-orange border_b_1" >Presentation</li>
                            <li>&Eacute;tudiant en informatique, actuellement en stage chez Macway jusqu&#039;&agrave; d&eacute;cembre 2016. Je travaille dans le d&eacute;veloppement web. Je serai de nouveau en recherche d&#039;un stage d'ici mars prochain dans le d&eacute;veloppement web ou mobile.</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col s12 l8">
                <div class="card blue-grey darken-1">
                    <div class="card-content white-text">

                        <div class="row">
                            <div class="col s12 text-orange card-title border_b_1 marg_b_30">EXP&Eacute;RIENCES</div>
                            <ul>
                                <li class="sub-title"><i class="material-icons">navigate_next</i>Conseiller accueil de banque
                                    <ul class="marg_l_40 info_list">
                                        <li class="inline orange accent-2 chip">Credit Mutuel</li>
                                        <li class="inline"> -&nbsp;</li>
                                        <li class="inline orange accent-2 chip">Herbitzheim (France)</li>
                                        <li class="inline"> -&nbsp;</li>
                                        <li class="inline orange accent-2 chip">Emplois-jeunes</li>
                                        <li class="inline"> -&nbsp;</li>
                                        <li class="inline orange accent-2 chip">Juillet 2015 &agrave; Septemble 2015</li>
                                    </ul>
                                </li>
                            </ul>
                            <li class="marg_l_40">Transactions bancaires</li>
                            <li class="marg_l_40">Prise de rendez-vous</li>


                            <ul>
                                <li class="sub-title"><i class="material-icons">navigate_next</i>R&eacute;paration et d&eacute;pannage informatique
                                    <ul class="marg_l_40 info_list">
                                        <li class="inline orange accent-2 chip">CG informatique</li>
                                        <li class="inline"> -&nbsp;</li>
                                        <li class="inline orange accent-2 chip">Diemeringen (France)</li>
                                        <li class="inline"> -&nbsp;</li>
                                        <li class="inline orange accent-2 chip">Stage</li>
                                        <li class="inline"> -&nbsp;</li>
                                        <li class="inline orange accent-2 chip">Mai 2012</li>
                                    </ul>
                                </li>
                            </ul>
                            <li class="marg_l_40">R&eacute;paration d'ordinateurs</li>
                            <li class="marg_l_40">Installation de syst&egrave;mes d'exploitations</li>
                            <li class="marg_l_40">Installation de drivers</li>

                        </div>

                        <div class="row marg_b_8">
                            <div class="col s12 text-orange card-title border_b_1 marg_b_30">FORMATIONS</div>

                            <ul>
                                <li class="sub-title"><i class="material-icons">navigate_next</i>Ecole d'expertise informatique - Epitech
                                    <ul class="marg_l_40 info_list">
                                        <li class="inline orange accent-2 chip">Strasbourg</li>
                                        <li class="inline"> -&nbsp;</li>
                                        <li class="inline orange accent-2 chip">Depuis Septembre 2015</li>
                                    </ul>
                                </li>
                            </ul>
                            <li class="marg_l_40">Formation sur 5 ans, actuellement en premi&egrave;re ann&eacute;e.</li>

                            <ul>
                                <li class="sub-title"><i class="material-icons">navigate_next</i>Terminal scientifique - Science de l&#039;ing&eacute;nieur - Option ISN
                                    <ul class="marg_l_40 info_list">
                                        <li class="inline orange accent-2 chip">Lyc&eacute;e George Imbert</li>
                                        <li class="inline"> -&nbsp;</li>
                                        <li class="inline orange accent-2 chip">Septembre 2014 &agrave; Juillet 2015</li>
                                    </ul>
                                </li>
                            </ul>
                            <li class="marg_l_40">Obtention d&#039;un Baccalaur&eacute;at scientifique, science de l&#039;ing&eacute;nieur, mention assez bien, avec option ISN (informatique et science du num&eacute;rique).</li>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col s12">
                <div class="card blue-grey darken-1">
                    <div class="card-content white-text">
                        <div class="row">
                            <div class="col s12 text-orange card-title border_b_1">COMP&Eacute;TENCE</div>

                            <div class="col s12 l4">
                                <ul><li class="sub-title"><i class="material-icons">navigate_next</i>Logiciels et syst&egrave;mes d&#039;exploiration</li></ul>
                                <div class="row">
                                    <div class="col s12 m6 l6 marg_l_40">Unity3D</div><div class="col s12 m6 l6" id="U3D"><script>print_stars("[2, 1, 2]", "U3D")</script></div>
                                    <div class="col s12 m6 l6 marg_l_40">Sony Vegas pro</div><div class="col s12 m6 l6" id="svp"><script>print_stars("[2, 0, 3]", "svp")</script></div>
                                    <div class="col s12 m6 l6 marg_l_40">Syst&egrave;me UNIX</div><div class="col s10 m6 l6" id="js"><script>print_stars("[4, 1, 0]", "js")</script></div>
                                </div>
                            </div>

                            <div class="col s12 l4">
                                <ul><li class="sub-title"><i class="material-icons">navigate_next</i>Langage de programmation</li></ul>
                                <div class="row">
                                    <div class="col s12 m6 l6 marg_l_40">Langage C</div><div class="col s12 m6" id="lg_c"><script>print_stars("[4, 1, 0]", "lg_c")</script></div>
                                    <div class="col s12 m6 l6 marg_l_40">HTML5/CSS</div><div class="col s12 m6" id="htmlcss"><script>print_stars("[3, 1, 1]", "htmlcss")</script></div>
                                    <div class="col s12 m6 l6 marg_l_40">JavaScript & Ajax</div><div class="col s12 m6" id="jscript"><script>print_stars("[2, 1, 2]", "jscript")</script></div>
                                    <div class="col s12 m6 l6 marg_l_40">PHP (doctrine)</div><div class="col s12 m6" id="php"><script>print_stars("[3, 0, 2]", "php")</script></div>
                                    <div class="col s12 m6 l6 marg_l_40">MYSQL</div><div class="col s12 m6" id="mysql"><script>print_stars("[3, 1, 1]", "mysql")</script></div>
                                    <div class="col s12 m6 l6 marg_l_40">Java</div><div class="col s12 m6" id="java"><script>print_stars("[2, 1, 2]", "java")</script></div>
                                </div>
                            </div>

                            <div class="col s12 l4">
                                <ul><li class="sub-title"><i class="material-icons">navigate_next</i>Langues</li></ul>
                                <div class="row">
                                    <div class="col s12 m6 l6 marg_l_40">Fran&ccedil;ais</div><div class="col s10 m6" id="fr"><script>print_stars("[5, 0, 0]", "fr")</script></div>
                                    <div class="col s12 m6 l6 marg_l_40">Anglais</div><div class="col s10 m6" id="en"><script>print_stars("[2, 1, 2]", "en")</script></div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="parallax-container">
    <div class="parallax"><img src="../pictures/parallax_2.jpg"></div>
</div>
<div class="section white">
    <div class="row container">
        <h2 class="header">Mes Loisirs</h2>
        <div class="marg_l_40">
            <h4 class="border_b_1">Les Sports</h4>
            <div class="row">
                <div class="col S12 m6 l4 center">
                    <h5 class="text-orange">Basket</h5>
                    <img src="../pictures/basket_ball.png" alt="" class="circle responsive-img tooltipped" data-delay="50" data-tooltip="En club pendant 9 ans">
                </div>
                <dié class="col S12 m6 l4 center">
                    <h5 class="text-orange">SnowBoard</h5>
                    <img src="../pictures/snowboard.png" alt="" class="circle responsive-img tooltipped" data-delay="50" data-tooltip="Depuis 3 ans">
                </dié>
                <div class="col S12 m6 l4 center">
                    <h5 class="text-orange">Ski</h5>
                    <img src="../pictures/ski.png" alt="" class="circle responsive-img tooltipped" data-delay="50" data-tooltip="Pendant 8 ans" >
                </div>
            </div>

            <h4 class="border_b_1">Les Musiques</h4>
            <div class="row">
                <div class="col S12 m6 l4 center">
                    <h5 class="text-orange">Imagine Dragons</h5>
                    <img src="../pictures/imagine-dragons.png" alt="" class="circle responsive-img" >
                </div>
                <div class="col S12 m6 l4 center">
                    <h5 class="text-orange">Queen</h5>
                    <img src="../pictures/Queen.png" alt="" class="circle responsive-img" >
                </div>
                <div class="col S12 m6 l4 center">
                    <h5 class="text-orange">Pink Floyd</h5>
                    <img src="../pictures/pink-floyd.png" alt="" class="circle responsive-img" >
                </div>
            </div>

            <h4 class="border_b_1">Les Films</h4>
            <div class="row">
                <div class="col S12 m6 l4 center">
                    <h5 class="text-orange">Star Wars</h5>
                    <img src="../pictures/star-wars.png" alt="" class="circle responsive-img tooltipped" data-delay="50" data-tooltip="Que la force soit avec toi !">
                </div>
                <div class="col S12 m6 l4 center">
                    <h5 class="text-orange">Inception</h5>
                    <img src="../pictures/inception.jpg" alt="" class="circle responsive-img tooltipped" data-delay="50" data-tooltip="La toupie a la fin, elle tombe ?">
                </div>
                <div class="col S12 m6 l4 center">
                    <h5 class="text-orange">Harry Potter</h5>
                    <img src="../pictures/harry-potter.png" alt="" class="circle responsive-img tooltipped" data-delay="50" data-tooltip="EXPELLIARMUS !">
                </div>
            </div>
        </div>
    </div>
</div>

<div class="parallax-container">
    <div class="parallax"><img src="../pictures/Android_wallpaper.jpg"></div>
</div>


<?= $View->displayFooter() ?>
<?= $View->importJsFiles(['js_file.js']) ?>

</body>
</html>