<?php
include_once ("Model.php");
include_once ("Controller.php");
include_once ("View.php");

$model = new Model();
$controller = new Controller($model);
$View = new View($model, $controller);
?>

<?= $View->importStylesheet(['My_css.css']) ?>
<?= $View->importPrintStylesheet(['My_cvPrint.css']) ?>
<?= $View->displayNavBar() ?>

<div class="parallax-container">
    <div class="parallax"><img src="pictures/parallax_1.jpg"/></div>
</div>
<div class="section white" id="cv_main">
    <!--<input type="button" id="button-imprimer" value="Imprimer" />-->
    <div class="row container">
        <h2 class="header blue-grey-text text-darken-2">Mon Curriculum vitae</h2>
        <div class="row egal_height_1">
            <div class="col s12 l4 profil_info">
                <div class="card blue-grey darken-1" style="height: 100%">
                    <div class="card-content white-text">
                        <div class="center">
                            <img src="pictures/profil_cv_picture.jpg" alt="Aurelien Bauer" class="circle responsive-img profil_picture" style="width: 50%"/>
                            <h1 style="font-size: larger">BAUER Aur&eacute;lien</h1>
                        </div>
                        <ul>
                            <li class="card-title center text-orange border_b_1 marg_b_8">Information</li>
                            <li><i class="material-icons marg_r_30 vertical_align">person</i>
                                <span class="vertical_align"><?= $View->getMyAge()?> ans</span></li>
                            <li><i class="material-icons marg_r_30 vertical_align">directions_car</i>
                                <span class="vertical_align">Titulaire du permis de conduire</span></li>
                            <li class="card-title center text-orange border_b_1 marg_b_8">Me contacter</li>
                            <li><i class="material-icons marg_r_30 vertical_align">mail</i>
                                <span class="vertical_align">aurelien.bauer@epitech.eu</span></li>
                            <li><i class="material-icons marg_r_30 vertical_align">stay_current_portrait</i>
                                <span class="vertical_align">07-71-13-74-18</span></li>
                            <li><i class="material-icons marg_r_30 vertical_align">place</i>
                                <span class="vertical_align">48c rue de Selestat, 67100 Strasbourg, France</span></li>
                            <li class="card-title center text-orange border_b_1 marg_b_8">Presentation</li>
                            <li class="justify">Étudiant en deuxième année d'informatique, je m'intéresse au développement web et mobile. J'ai eu l'occasion d'acquérir de l'expérience dans ces deux domaines lors d'un stage de 6 mois en plus de quelques projets personnels. Actuellement je suis en recherche d'un contrat d'alternance, à partir d'octobre 2017 pour ma troisième année.</li>
                            <li class="card-title center text-orange border_b_1 marg_b_8 hide_in_print">Télécharger</li>
                            <!--<li class="center marg_t_2rem cursor_pointer hide_in_print" onclick="print();"><i class="material-icons vertical_align text-orange">local_printshop</i>
                                <span class="vertical_align text-orange underline-text">Version imprimable</span></li>-->
                            <li class="center cursor_pointer hide_in_print marg_t_2rem"><a href="CV/CV.pdf" target="_blank"><i class="material-icons vertical_align text-orange">file_download</i>
                                    <span class="vertical_align text-orange underline-text">Version pdf</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col s12 l8 tb_margin_25 profil_exp">
                <div class="card blue-grey darken-1" style="height: 100%">
                    <div class="card-content white-text">

                        <div class="row">
                            <div class="col s12 text-orange card-title border_b_1 marg_b_8">EXP&Eacute;RIENCES</div>

                            <ul>
                                <li class="sub-title"><i class="material-icons vertical_align hide_in_print">navigate_next</i>
                                    <span class="vertical_align">Développeur Web</span>
                                    <ul class="marg_l_40 info_list flex_inline">
                                        <li class="orange accent-2 chip">Macway</li>
                                        <li class="orange accent-2 chip">Illkirch-Graffenstaden (France)</li>
                                        <li class="orange accent-2 chip">Stage de 6 mois</li>
                                        <li class="orange accent-2 chip">Juillet 2016 &agrave; fin Décembre 2016</li>
                                    </ul>
                                </li>
                                <li class="marg_l_4_3rem circle_list">Application permettant la gestion des médias pour macway.com</li>
                                <li class="marg_l_4_3rem circle_list">Upload et compression d'images</li>
                                <li class="marg_l_4_3rem circle_list">Créations d'un moteur de recherche</li>
                                <li class="marg_l_4_3rem circle_list">Utilisation de l'API Google map</li>
                                <li class="marg_l_4_3rem circle_list">Langages PHP / JS</li>
                                <a href="know_more_macway" class="hide_in_print"><i class="material-icons tiny marg_l_3_13 vertical_align text-orange">add_circle_outline</i>
                                    <span class="text-orange vertical_align underline-text">Plus de détails</span></a>
                            </ul>

                            <ul>
                                <li class="sub-title"><i class="material-icons vertical_align hide_in_print">navigate_next</i>
                                    <span class="vertical_align">Conseiller accueil de banque</span>
                                    <ul class="marg_l_40 info_list flex_inline">
                                        <li class="orange accent-2 chip">Credit Mutuel</li>
                                        <li class="orange accent-2 chip">Herbitzheim (France)</li>
                                        <li class="orange accent-2 chip">Emplois-jeunes</li>
                                        <li class="orange accent-2 chip">Juillet 2015 &agrave; Septemble 2015</li>
                                    </ul>
                                </li>
                                <li class="marg_l_4_3rem circle_list">Transactions bancaires</li>
                                <li class="marg_l_4_3rem circle_list">Prise de rendez-vous</li>
                            </ul>

                            <ul>
                                <li class="sub-title"><i class="material-icons vertical_align hide_in_print">navigate_next</i>
                                    <span class="vertical_align">R&eacute;paration et d&eacute;pannage informatique</span>
                                    <ul class="marg_l_40 info_list flex_inline">
                                        <li class="orange accent-2 chip">CG informatique</li>
                                        <li class="orange accent-2 chip">Diemeringen (France)</li>
                                        <li class="orange accent-2 chip">Stage</li>
                                        <li class="orange accent-2 chip">Mai 2012</li>
                                    </ul>
                                </li>
                                <li class="marg_l_4_3rem circle_list">R&eacute;paration d'ordinateurs</li>
                                <li class="marg_l_4_3rem circle_list">Installation de syst&egrave;mes d'exploitations</li>
                                <li class="marg_l_4_3rem circle_list">Installation de drivers</li>
                            </ul>
                        </div>

                        <div class="row marg_b_8">
                            <div class="col s12 text-orange card-title border_b_1 marg_b_8">FORMATIONS</div>

                            <ul>
                                <li class="sub-title"><i class="material-icons vertical_align hide_in_print">navigate_next</i>
                                    <span class="vertical_align">Ecole d'expertise informatique - Epitech</span>
                                    <ul class="marg_l_40 info_list flex_inline">
                                        <li class="orange accent-2 chip">Strasbourg</li>
                                        <li class="orange accent-2 chip">Depuis Septembre 2015</li>
                                    </ul>
                                </li>
                                <li class="marg_l_4_3rem circle_list">Formation sur 5 ans, actuellement en deuxième ann&eacute;e.</li>
                            </ul>

                            <ul>
                                <li class="sub-title"><span class="material-icons vertical_align hide_in_print">navigate_next</span>
                                    <span class="vertical_align">Terminal scientifique - Science de l&#039;ing&eacute;nieur - Option ISN</span>
                                    <ul class="marg_l_40 info_list flex_inline">
                                        <li class="orange accent-2 chip">Lyc&eacute;e George Imbert</li>
                                        <li class="orange accent-2 chip">Septembre 2014 &agrave; Juillet 2015</li>
                                    </ul>
                                </li>
                                <li class="marg_l_4_3rem circle_list">Obtention d&#039;un Baccalaur&eacute;at scientifique, science de l&#039;ing&eacute;nieur, mention assez bien, avec option ISN (informatique et science du num&eacute;rique).</li>
                            </ul>

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
                                <ul><li class="sub-title"><i class="material-icons vertical_align hide_in_print">navigate_next</i>
                                        <span class="vertical_align">Logiciels et syst&egrave;mes d&#039;exploitation</span></li></ul>
                                <div class="row my_stat">
                                    <div class="col s12 m6 l6 marg_l_40">Unity3D</div><div class="col s12 m6 l6" id="U3D"><script>print_stars("[2, 1, 2]", "U3D")</script></div>
                                    <div class="col s12 m6 l6 marg_l_40">Sony Vegas pro</div><div class="col s12 m6 l6" id="svp"><script>print_stars("[2, 0, 3]", "svp")</script></div>
                                    <div class="col s12 m6 l6 marg_l_40">Syst&egrave;me UNIX</div><div class="col s12 m6 l6" id="js"><script>print_stars("[4, 1, 0]", "js")</script></div>
                                </div>
                            </div>

                            <div class="col s12 l4">
                                <ul><li class="sub-title"><i class="material-icons vertical_align hide_in_print">navigate_next</i>
                                        <span class="vertical_align">Langage de programmation</span></li></ul>
                                <div class="row">
                                    <div class="col s12 m6 l6 marg_l_40">Langage C</div><div class="col s12 m6" id="lg_c"><script>print_stars("[4, 1, 0]", "lg_c")</script></div>
                                    <div class="col s12 m6 l6 marg_l_40">HTML5/CSS</div><div class="col s12 m6" id="htmlcss"><script>print_stars("[3, 1, 1]", "htmlcss")</script></div>
                                    <div class="col s12 m6 l6 marg_l_40">JavaScript</div><div class="col s12 m6" id="jscript"><script>print_stars("[2, 1, 2]", "jscript")</script></div>
                                    <div class="col s12 m6 l6 marg_l_40">PHP (doctrine)</div><div class="col s12 m6" id="php"><script>print_stars("[3, 0, 2]", "php")</script></div>
                                    <div class="col s12 m6 l6 marg_l_40">MYSQL</div><div class="col s12 m6" id="mysql"><script>print_stars("[3, 1, 1]", "mysql")</script></div>
                                    <div class="col s12 m6 l6 marg_l_40">C++</div><div class="col s12 m6" id="java"><script>print_stars("[2, 1, 2]", "java")</script></div>
                                </div>
                            </div>

                            <div class="col s12 l4">
                                <ul><li class="sub-title"><i class="material-icons vertical_align hide_in_print">navigate_next</i>
                                        <span class="vertical_align">Langues</span></li></ul>
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
    <div class="parallax"><img src="pictures/parallax_2.jpg"/></div>
</div>
<div class="section white  blue-grey-text text-darken-2">
    <div class="row container">
        <h2 class="header">Mes Loisirs</h2>
        <div class="marg_l_40">
            <h4 class="border_b_1">Les Sports</h4>
            <div class="row">
                <div class="col s12 m12 l4 center">
                    <h5 class="text-orange">Basket</h5>
                    <img src="pictures/basket_ball.png" alt="" class="circle responsive-img tooltipped hide_in_print" data-delay="50" data-tooltip="En club pendant 9 ans"/>
                </div>
                <div class="col s12 m12 l4 center">
                    <h5 class="text-orange">SnowBoard</h5>
                    <img src="pictures/snowboard.png" alt="" class="circle responsive-img tooltipped hide_in_print" data-delay="50" data-tooltip="Depuis 3 ans"/>
                </div>
                <div class="col s12 m12 l4 center">
                    <h5 class="text-orange">Ski</h5>
                    <img src="pictures/ski.png" alt="" class="circle responsive-img tooltipped hide_in_print" data-delay="50" data-tooltip="Pendant 8 ans" />
                </div>
            </div>

            <h4 class="border_b_1">Les Musiques</h4>
            <div class="row">
                <div class="col s12 m12 l4 center">
                    <a href="the-dark-side-of-the-moon">
                        <h5 class="text-orange">Pink Floyd</h5>
                        <img src="pictures/pink-floyd.png" alt="" class="circle responsive-img tooltipped hide_in_print" data-delay="50" data-tooltip="CLICK !" />
                    </a>
                </div>
                <div class="col s12 m12 l4 center">
                    <h5 class="text-orange">Queen</h5>
                    <img src="pictures/Queen.png" alt="" class="circle responsive-img hide_in_print" />
                </div>
                <div class="col s12 m12 l4 center">
                    <h5 class="text-orange">Imagine Dragons</h5>
                    <img src="pictures/imagine-dragons.png" alt="" class="circle responsive-img hide_in_print" />
                </div>
            </div>

            <h4 class="border_b_1">Les Films</h4>
            <div class="row">
                <div class="col s12 m12 l4 center">
                    <h5 class="text-orange">Star Wars</h5>
                    <img src="pictures/star-wars.png" alt="" class="circle responsive-img tooltipped hide_in_print" data-delay="50" data-tooltip="Que la force soit avec toi !"/>
                </div>
                <div class="col s12 m12 l4 center">
                    <h5 class="text-orange">Inception</h5>
                    <img src="pictures/inception.jpg" alt="" class="circle responsive-img tooltipped hide_in_print" data-delay="50" data-tooltip="La toupie a la fin, elle tombe ?"/>
                </div>
                <div class="col s12 m12 l4 center">
                    <h5 class="text-orange">Harry Potter</h5>
                    <img src="pictures/harry-potter.png" alt="" class="circle responsive-img tooltipped hide_in_print" data-delay="50" data-tooltip="EXPELLIARMUS !"/>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="parallax-container">
    <div class="parallax"><img src="pictures/Android_wallpaper.jpg"/></div>
</div>


<?= $View->displayFooter() ?>
<?= $View->importJsFiles(['js_file.js']) ?>
