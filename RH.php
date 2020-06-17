<?php
include_once "cookies.php";
include_once "BDD.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Office Régional de Mise en Valeur Agricole du Tafilalet</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" sizes="512x512" href="images/office.png">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500|Gaegu:700" rel="stylesheet">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/mystyle.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light ftco_navbar bg-primary ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a href="index.php">
            <img id="logo" src="images/ormvat.jpg">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>


        <div class="collapse navbar-collapse" id="ftco-nav">

            <ul class="navbar-nav ml-auto">

                <li class="nav-item">
                    <a href="index.php" class="nav-link">
                        <p class="menu-cont">Acceuil</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="Médiatèque.php" class="nav-link">
                        <p class="menu-cont">Médiathèque</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="Documentation.php" class="nav-link">
                        <p class="menu-cont">Documentation</p>
                    </a>
                </li>

                <li class="nav-item active">
                    <a href="RH.php" class="nav-link">
                        <p class="menu-cont">Ressources humaines</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="Contact.php" class="nav-link">
                        <p class="menu-cont">Contact</p>
                    </a>
                </li>
            </ul>

        </div>
    </div>
</nav>
<!-- END nav -->

<div class="block-31" style="position: relative;">
    <div class="owl-carousel loop-block-31 ">
        <div class="block-30 item" style="background-image: url('images/barrage.jpg');" data-stellar-background-ratio="0.5">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-7">
                        <h3 class="heading" style="font-size: 70px; text-align: center;">Office Régional de Mise en Valeur Agricole du Tafilalet</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div style="margin-left: auto; margin-right: auto">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span> Menu Principal
        </button>
    </div>

    <div class="collapse navbar-collapse flex-column " id="navbar">

        <ul class="navbar-nav  w-100 justify-content-center px-3">

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    L'Office
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="Office.php?set=1">Mot de directeur</a>
                    <a class="dropdown-item" href="Office.php?set=2">Missions</a>
                    <a class="dropdown-item" href="Office.php?set=3">Monographie</a>
                    <a class="dropdown-item" href="Office.php?set=4">Organigramme</a>
                </div>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Plan Maroc Vert
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="Plan-maroc-vert.php?set=1">PAR</a>
                    <a class="dropdown-item" href="Plan-maroc-vert.php?set=2">Projet pilier I</a>
                    <a class="dropdown-item" href="Plan-maroc-vert.php?set=3"">Projet pilier II</a>
                </div>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Développement Agricole
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="Developpement-agricole.php?set=1">Filières animales</a>
                    <a class="dropdown-item" href="Developpement-agricole.php?set=2">Filières végétales</a>
                    <a class="dropdown-item" href="Developpement-agricole.php?set=3">Campagne agricole</a>
                    <a class="dropdown-item" href="Developpement-agricole.php?set=4">Organisations professionnelles</a>
                </div>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Aménegements et Service de l'Eau
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="Amenagements-et-service-eau.php?set=1">Pistes</a>
                    <a class="dropdown-item" href="Amenagements-et-service-eau.php?set=2">PMH</a>
                    <a class="dropdown-item" href="Amenagements-et-service-eau.php?set=3">Système d'irrigation localisée</a>
                    <a class="dropdown-item" href="Amenagements-et-service-eau.php?set=4">GH</a>
                    <a class="dropdown-item" href="Amenagements-et-service-eau.php?set=5">Etudes</a>
                </div>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Projets Structurants
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="Projets-structurants.php?set=1">Kaddoussa</a>
                    <a class="dropdown-item" href="Projets-structurants.php?set=2">Aménagement des parcours</a>
                </div>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Guichet Unique
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="Guichet-unique.php?set=1">Présentation</a>
                    <a class="dropdown-item" href="Guichet-unique.php?set=2">Imprimés à télécharger</a>
                    <a class="dropdown-item" href="Guichet-unique.php?set=3">Procédure de l'octroi de subventions</a>
                </div>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Potentialités d'Investissement
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="Potentialites-d'investissement.php?set=1">Présentation</a>
                    <a class="dropdown-item" href="Potentialites-d'investissement.php?set=2">Guide d'investissement</a>
                    <a class="dropdown-item" href="Potentialites-d'investissement.php?set=3">Suivi des investissements</a>
                </div>
            </li>

        </ul>
    </div>
</nav>

<div class="site-section">
    <div class="container">
        <div class="row">

            <div class="col-md-4">
                <div class="media block-6">
                    <div class="media-body">
                        <center>
                          <a href="Ressources.php?set=Khettara"><img class="icone" src="images/khettara.jpg"></a>
                        </center>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="media block-6">
                    <div class="media-body">
                        <center>
                            <img class="icone" id="myImg" src="images/meteo.jpg">
                        </center>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="media block-6">
                    <div class="media-body">
                        <center>
                            <a href="Ressources.php?set=Oasis"><img class="icone" src="images/oasis.jpg"></a>
                        </center>
                    </div>
                </div>
            </div>

            <!-- The Modal -->
            <div class="col-md-4">
                <div class="media block-6">
                    <div class="media-body">

                        <div id="myModal" class="modal">
                            <span class="close">&times;</span>
                            <div id="m-booked-bl-simple-week-vertical-37080">
                                <div class="booked-wzs-160-275 weather-customize" style="background-color:#156de8; width:350px;" id="width4 " >
                                    <a target="_blank" class="booked-wzs-top-160-275" href="https://www.booked.net/"><img src="//s.bookcdn.com/images/letter/s5.gif" alt="Booked" /></a>
                                    <div class="booked-wzs-160-275_in"> <div class="booked-wzs-160-275-data">
                                            <div class="booked-wzs-160-275-left-img wrz-18"></div>
                                            <div class="booked-wzs-160-275-right"> <div class="booked-wzs-day-deck">
                                                    <div class="booked-wzs-day-val"> <div class="booked-wzs-day-number">
                                                            <span class="plus">+</span>37</div>
                                                        <div class="booked-wzs-day-dergee">
                                                            <div class="booked-wzs-day-dergee-val">&deg;</div>
                                                            <div class="booked-wzs-day-dergee-name">C</div>
                                                        </div>
                                                    </div>
                                                    <div class="booked-wzs-day">
                                                        <div class="booked-wzs-day-d">
                                                            <span class="plus">+</span>38&deg;</div>
                                                        <div class="booked-wzs-day-n"><span class="plus">+</span>25&deg;</div> </div> </div>
                                                <div class="booked-wzs-160-275-info"> <div class="booked-wzs-160-275-city smolest">Errachidia</div>
                                                    <div class="booked-wzs-160-275-date">Mardi, 23</div> </div> </div> </div>
                                        <a target="_blank" href="https://hotelmix.fr/weather/errachidia-36595" class="booked-wzs-bottom-160-275" >
                                            <table cellpadding="0" cellspacing="0" class="booked-wzs-table-160"> <tr> <td class="week-day">
                                                        <span class="week-day-txt">Mercredi</span></td> <td class="week-day-ico"><div class="wrz-sml wrzs-18"></div></td>
                                                    <td class="week-day-val"><span class="plus">+</span>35&deg;</td>
                                                    <td class="week-day-val"><span class="plus">+</span>23&deg;</td> </tr>
                                                <tr> <td class="week-day"> <span class="week-day-txt">Jeudi</span></td>
                                                    <td class="week-day-ico"><div class="wrz-sml wrzs-18"></div></td>
                                                    <td class="week-day-val"><span class="plus">+</span>34&deg;</td>
                                                    <td class="week-day-val"><span class="plus">+</span>24&deg;</td> </tr>
                                                <tr> <td class="week-day"> <span class="week-day-txt">Vendredi</span></td>
                                                    <td class="week-day-ico"><div class="wrz-sml wrzs-18"></div></td>
                                                    <td class="week-day-val"><span class="plus">+</span>34&deg;</td>
                                                    <td class="week-day-val"><span class="plus">+</span>24&deg;</td> </tr>
                                                <tr> <td class="week-day"> <span class="week-day-txt">Samedi</span></td>
                                                    <td class="week-day-ico"><div class="wrz-sml wrzs-01"></div></td>
                                                    <td class="week-day-val"><span class="plus">+</span>35&deg;</td>
                                                    <td class="week-day-val"><span class="plus">+</span>23&deg;</td> </tr>
                                                <tr> <td class="week-day"> <span class="week-day-txt">Dimanche</span></td>
                                                    <td class="week-day-ico"><div class="wrz-sml wrzs-01"></div></td>
                                                    <td class="week-day-val"><span class="plus">+</span>35&deg;</td>
                                                    <td class="week-day-val"><span class="plus">+</span>23&deg;</td> </tr>
                                                <tr> <td class="week-day"> <span class="week-day-txt">Lundi</span></td>
                                                    <td class="week-day-ico"><div class="wrz-sml wrzs-03"></div></td>
                                                    <td class="week-day-val"><span class="plus">+</span>37&deg;</td>
                                                    <td class="week-day-val"><span class="plus">+</span>25&deg;</td> </tr>
                                            </table>
                                            <div class="booked-wzs-center"> <span class="booked-wzs-bottom-l">Prévisions sur 7 jours</span> </div> </a> </div>
                                </div>
                                <div id="caption"></div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>

    <div class="featured-donate overlay-color" style="background-image: url('images/plan.jpg');">
        <div class="site-section mb-5">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-md-12 mb-5">
                        <h3>Organisation</h3>
                        <p class="texte">La Gestion Administrative et Technique de l’ORMVA/TF est assurée grâce :</p>
                        <ul>
                            <li class="texte">Au Directeur de l’Office ;</li>
                            <li class="texte"> A Cinq Services Opérationnels : Equipement Rural, Gestion des Réseaux d’Irrigation et du Drainage, Production Agricole, Vulgarisation et Organisation Professionnelle et Elevage ;</li>
                            <li class="texte">Trois Services Fonctionnels : Service Administratif et Financier et Service de la Planification et des Programmes et Service du Matériel ; </li>
                            <li class="texte"> Cinq subdivisions territoriales et 22 centres de mise en valeur agricole ;</li>
                        </ul>
                        <h3>Moyens Humains</h3>
                        <p class="texte">Au cours de l’exercice 2019 l’effectif total des employés de l’Office s’élève à 292 cadres et agents dont :</p>
                        <ul>
                            <li class="texte">118 cadres supérieurs (40 %)</li>
                            <li class="texte">174 agents de maitrise (60%)</li>
                        </ul>
                        <h3>Oeuvres Sociales</h3>
                        <ul>
                            <li class="texte" style="color: black">Habitat</li>
                            <p class="texte">Deux lotissements ont été réalisés par le bureau régional de SOCIALAGRI, au profit des fonctionnaires et agents de l’Office et des autres services du Département de l’Agriculture.</p>
                            <table id="tableau">
                                <tr>
                                    <th>Lotissement</th>
                                    <th>Lieu</th>
                                    <th>Nombre de bénéficiaires</th>
                                    <th>Observations</th>
                                </tr>
                                <tr>
                                    <td>SOCIALAGRI 1</td>
                                    <td>A côté de la SEMVA, Errachidia</td>
                                    <td>152</td>
                                    <td>En plus de 9 équipements sociaux-économiques</td>
                                </tr>
                                <tr>
                                    <td>SOCIALAGRI 2</td>
                                    <td>Près de la cité universitaire, Errachidia</td>
                                    <td>339</td>
                                    <td>En plus d’un lot destiné aux équipements sociaux-économiques</td>
                                </tr>
                            </table>
                            <li class="texte" style="color: black">Crédit Logement</li>
                            <p class="texte">Grace au système de crédit logement instauré en 2002 par l’Office, 34 personnes ont pu acquérir ou construire leurs logements personnels pour un montant global de crédit de 4.798.500,00 DH.</p>
                            <li class="texte" style="color: black">Colonies de vacance</li>
                            <p class="texte">L'Office organise chaque année deux colonies de vacance au profit des enfants de son personnel. L’une a eu lieu au Tafilalet Club à Errachidia, bénéficiant à plus de 200 enfants et se terminant par une soirée où sont distribués des prix symboliques aux meilleurs élèves dans les activités culturelles, ludiques et sportives. L’autre est organisée hors zone dans un institut de formation agricole ou dans un établissement d’estivage au bénéfice à près de 100 enfants.</p>
                            <li class="texte" style="color: black">Pèlerinage</li>
                            <p class="texte">Chaque année, l’Office désigne quatre agents pour effectuer le pèlerinage aux Lieux Saints de l'Islam, parmi ceux tirés au sort au niveau des circonscriptions où ils sont inscrits. Ils bénéficient d’une aide de 20.000,00 DH chacun.</p>
                            <li class="texte" style="color: black">Réceptions</li>
                            <p class="texte">Des réceptions sont organisées chaque fin d’année en l'honneur des agents mis à la retraite, et lors desquelles un chèque d’un montant de 3.000,00 DH est remis à chaque retraité. En outre, et à l'occasion de la fête du trône et de la fin de l'année scolaire, des prix d'encouragement sont attribués aux meilleurs élèves parmi les enfants des agents de l'Office.</p>
                            <li class="texte" style="color: black">Garderies</li>
                            <p class="texte">Plus de 60 enfants sont inscrits chaque année dans les cinq garderies des clubs de l’Office.</p>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-6 col-lg-4" style="margin-bottom: 10%; padding-right: 5%; ">
                    <h3 class="heading-section">ORMVA/TF</h3>
                    <p class="mb-5" style="font-family: Arial; text-align: justify;">ORMVA/TF est un organisme public doté de la personnalité civile et de l’autonomie financière et placé sous la tutelle du Ministère de l'Agriculture, de la Pêche maritime, du développement rural et des eaux et forêts.</p>
                    <p><a href="ORMVATF.php" class="btn btn-primary px-4 py-3">En savoir plus</a></p>
                </div>

                <hr>


                <div class="col-md-6 col-lg-4" style="margin-bottom: 10%;">
                    <h3 class="heading-section">Liens utiles</h3>
                    <div class="block-21 d-flex mb-4">
                        <figure class="mr-3">
                            <img src="images/ministre.JPG" class="img-fluid" id="utiles">
                        </figure>
                        <div class="text">
                            <p class="texte" style=" font-size: 80%"><a href="http://www.agriculture.gov.ma/">Ministère de l'Agriculture, de la Pêche maritime, du développement rural et des eaux et forêts</a></p>
                        </div>
                    </div>

                    <div class="block-21 d-flex mb-4">
                        <figure class="mr-3">
                            <img src="images/agence.JPG" class="img-fluid" id="utiles">
                        </figure>
                        <div class="text">
                            <p class="texte" style=" font-size: 80%"><a href="http://www.ada.gov.ma/">Agence pour le Développement Agricole (ADA)</a></p>
                        </div>
                    </div>
                </div>

                <hr>

                <div class="col-md-6 col-lg-4">
                    <div class="block-23">
                        <h3 class="heading-section">Informations</h3>
                        <ul>
                            <li><span class="icon icon-map-marker"></span><span class="text" style="font-size: 98%;"><?php echo $roq[0]['adresse']; ?></span></li>
                            <li><span class="icon icon-phone"></span><span class="text"><?php echo $roq[0]['telephone']; ?></span></li>
                            <li><span class="icon icon-fax"></span><span class="text"><?php echo $roq[0]['fax']; ?></span></li>
                            <li><span class="icon icon-envelope"></span><span class="text" ><a href="mailto:contact@ormvatafilalet.ma"><?php echo $roq[0]['courriel']; ?></a></span></li>
                            <li><span class="icon icon-clock-o"></span><span class="text"><?php echo $roq[0]['horaire_travail']; ?></span></li>
                        </ul>
                    </div>
                </div>

            </div>
            <div class="row pt-5">
                <div class="col-md-12 text-center">
                    <p>
                        Copyright &copy; 2019
                        <a href="http://www.ormvatafilalet.ma/" target="_blank" class="text-primary">ORMVA/TF</a>
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/main.js"></script>
    <script src="js/meteo.js"></script>
</body>
