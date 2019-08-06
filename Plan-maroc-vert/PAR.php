<!DOCTYPE html>
<html lang="en">
<head>
    <title>Office Régionale de Mise en Valeur Agricole du Tafilalet</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" sizes="512x512" href="../images/office.png">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500|Gaegu:700" rel="stylesheet">
    <link rel="stylesheet" href="../css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="../css/animate.css">
    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../css/magnific-popup.css">
    <link rel="stylesheet" href="../css/aos.css">
    <link rel="stylesheet" href="../css/ionicons.min.css">
    <link rel="stylesheet" href="../css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="../css/jquery.timepicker.css">
    <link rel="stylesheet" href="../css/flaticon.css">
    <link rel="stylesheet" href="../css/icomoon.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.7/css/swiper.min.css">
    <style>
        #logo{
            width:40%;
            height: 50%;
            -webkit-filter: grayscale(0) blur(0px);
            filter: grayscale(0) blur(0px);
            -webkit-transition: all 0.5s ease;
            transition: all 0.5s ease;
            border-radius: 10%;
            border: black double 2px;
        }

        #logo:hover {
            -webkit-transform: rotate(360deg); /* rotation de l'image */
            transform: rotate(360deg);
        }

        .menu-cont{
            font-size: 12px;
            text-align: center;
            font-weight: bold;
        }

        #mySidenav a {
            position: absolute;
            left: -80px;
            transition: 0.3s;
            padding: 15px;
            width: 100px;
            text-decoration: none;
            font-size: 20px;
            color: white;
            border-radius: 0 5px 5px 0;
        }

        #mySidenav a:hover {
            left: 0;
        }

        .dropdown-menu {
            display: none;
            position: absolute;
            background-color: #f1f1f1;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
            text-align: center;
        }

        .dropdown-menu a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown-menu a:hover {background-color: #ddd;}

        .dropdown:hover .dropdown-menu {display: block;}

        .icone{
            height: 60%;
            width: 70%;
            padding: 5px;
            border-radius: 80px 80px 80px 80px;
        }

        #navbarDropdownMenuLink{
            font-family: Century;
            color: white;
            text-align: center;
            font-weight: bold;
        }

        img {
            display: block;
            width: 100%;
            height: auto;
        }

        #myImg {
            cursor: pointer;
            transition: 0.3s;
        }

        .icone:hover
        {
            opacity: 0.7;
        }

        /* The Modal (background) */
        .modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            padding-top: 240px; /* Location of the box */
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgb(0,0,0); /* Fallback color */
            background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
        }

        /* Caption of Modal Image */
        #caption {
            margin: auto;
            display: block;
            width: 80%;
            max-width: 700px;
            text-align: center;
            color: #ccc;
            padding: 10px 0;
            height: 150px;
        }

        @-webkit-keyframes zoom {
            from {-webkit-transform:scale(0)}
            to {-webkit-transform:scale(1)}
        }

        @keyframes zoom {
            from {transform:scale(0)}
            to {transform:scale(1)}
        }

        /* The Close Button */
        .close {
            position: absolute;
            color: #f1f1f1;
            right: 2%;
            top: 30%;
            font-size: 40px;
            font-weight: bold;
            transition: 0.3s;
        }

        .close:hover,
        .close:focus {
            color: #bbb;
            text-decoration: none;
            cursor: pointer;
        }

        .col-md-4{
            margin-top: 2%;
            margin-buttom: 2%;
        }

        .site-section {
            margin-buttom: 1%; }

        .texte{
            font-family: Arial;
            color: white;
            font-size: 17px;
            text-align: justify;
        }

        h3 span{
            color:white;
        }
        #tableau {
            font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
            text-align: center;
        }

        #tableau td, #customers th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #tableau tr{background-color: #f2f2f2;}

        #tableau .element{
            background-color: white;
        }
        #utiles{
            height: 60px;
            width: 100px;
        }

    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light ftco_navbar bg-primary ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a href="../index.php">
            <img id="logo" src="../images/ormvat.jpg">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">

            <ul class="navbar-nav ml-auto">

                <li class="nav-item active">
                    <a href="../index.php" class="nav-link">
                        <p class="menu-cont">Acceuil</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="../Médiatèque.php" class="nav-link">
                        <p class="menu-cont">Médiathèque</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="../Documentation.php" class="nav-link">
                        <p class="menu-cont">Documentation</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="../RH.php" class="nav-link">
                        <p class="menu-cont">Ressources humaines</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="../Contact.php" class="nav-link">
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
        <div class="block-30 item" style="background-image: url('../images/barrage.jpg');" data-stellar-background-ratio="0.5">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-7">
                        <h3 class="heading" style="font-size: 70px;">Office Régionale de Mise en Valeur Agricole du Tafilalet</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="navbar-toggler-right">
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
                    <a class="dropdown-item" href="../Office/Mot_du_Directeur.php">Mot de directeur</a>
                    <a class="dropdown-item" href="../Office/Missions.php">Missions</a>
                    <a class="dropdown-item" href="../Office/Monographie.php">Monographie</a>
                    <a class="dropdown-item" href="../Office/Organigramme.php">Organigramme</a>
                </div>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Plan Maroc Vert
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="PAR.php">PAR</a>
                    <a class="dropdown-item" href="Projet-Pilier-I.php">Projet pilier I</a>
                    <a class="dropdown-item" href="Projet-Pilier-II.php">Projet pilier II</a>
                </div>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Développement Agricole
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="../Developpement-agricole/Filiere-animales.php">Filières animales</a>
                    <a class="dropdown-item" href="../Developpement-agricole/Filieres-vegetales.php">Filières végétales</a>
                    <a class="dropdown-item" href="../Developpement-agricole/Campagne-agricole.php">Campagne agricole</a>
                    <a class="dropdown-item" href="../Developpement-agricole/Organisations-professionnelles.php">Organisations professionnelles</a>
                </div>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Aménegements et Service de l'Eau
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#">Pistes</a>
                    <a class="dropdown-item" href="#">PMH</a>
                    <a class="dropdown-item" href="#">Système d'irrigation localisée</a>
                    <a class="dropdown-item" href="#">GH</a>
                    <a class="dropdown-item" href="#">Etudes</a>
                </div>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Projets Structurants
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="../Projets-structurants/kaddoussa.php">Kaddoussa</a>
                    <a class="dropdown-item" href="../Projets-structurants/Amenagement-de-parcours.php">Aménagement des parcours</a>
                </div>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Guichet Unique
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="../Guichet-unique/Presentation.php">Présentation</a>
                    <a class="dropdown-item" href="../Guichet-unique/Imprimes-a-telecharger.php">Imprimés à télécharger</a>
                    <a class="dropdown-item" href="../Guichet-unique/Procedure-octroi-subvention.php">Procédure de l'octroi de subventions</a>
                </div>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Potentialités d'Investissement
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="../Potentialites-d'investissement/Presentation.php">Présentation</a>
                    <a class="dropdown-item" href="../Potentialites-d'investissement/Guide-investissement.php">Guide d'investissement</a>
                    <a class="dropdown-item" href="../Potentialites-d'investissement/Suivi-investissements.php">Suivi des investissements</a>
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
                            <a href="../Khettara.php"> <img class="icone"  src="../images/khettara.jpg"></a>
                        </center>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="media block-6">
                    <div class="media-body">
                        <center>
                            <img class="icone" id="myImg" src="../images/meteo.jpg">
                        </center>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="media block-6">
                    <div class="media-body">
                        <center>
                            <a href="../Khettara.php">  <img class="icone" src="../images/oasis.jpg"></a>
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

    <div class="featured-donate overlay-color">
        <div class="site-section mb-5">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-md-12 mb-5">
                        <h3>Plan Maroc Vert</h3>
                        <p class="texte">L’agriculture marocaine se trouve aujourd’hui face à plusieurs défis posés par son contexte intérieur et extérieur. Ces défis l’obligent à entreprendre des réexamens radicaux pour répondre à une exigence de changement, d’innovation et de réforme pour un scénario de progrès durable.
                            Devant de tels défis et en exécution des hautes directives de Sa Majesté Le Roi Mohammed VI que Dieu Le glorifie, le Département de l’Agriculture s’est investi dans la formulation d’une nouvelle stratégie intitulé “ PLAN MAROC VERT ”</p>
                        <p class="texte">Le «Plan Maroc Vert» exposé par Monsieur le Ministre de l’Agriculture et de la Pêche Maritime, devant Sa Majesté le Roi Mohammed VI, lors des premières assises de l’agriculture, tenues à Meknès, le 22 avril 2008, place l’agriculture au coeur du développement économique et social du pays.</p>
                        <p class="texte">Le Plan Maroc Vert vise la mise en valeur de l’ensemble du potentiel agricole territorial et la rupture avec l’image simpliste d’une agriculture duale opposant un secteur moderne à un secteur traditionnel et vivrier. </p>
                        <p class="texte">Pour cela, le Plan Maroc Vert s’articule autour de deux piliers : </p>
                        <ul>
                            <li class="texte">le pilier I vise le développement accéléré d’une agriculture moderne, compétitive, à haute valeur ajoutée et adaptée aux règles du marché ; </li>
                            <li class="texte">le pilier II vise la mise à niveau des acteurs fragiles et la lutte contre la pauvreté rurale à travers l’amélioration du revenu agricole.</li>
                        </ul>
                        <p class="texte">Le Plan Maroc Vert adopte un modèle novateur : l’Agrégation. Ce modèle permet notamment de dépasser les contraintes liées à la fragmentation des structures foncières tout en assurant aux exploitations agrégées l’accès aux techniques modernes de production, l’accès au financement et l’accès au marché. </p>
                        <p class="texte">Il repose sur le déclenchement d’une nouvelle vague d’investissement massif autour de nouveaux acteurs à forte capacité managériale. Il appelle également à la rationalisation des structures de l’industrie et à la mutualisation des moyens autour de Groupements d’intérêts économiques privés et de groupements interprofessionnels. Pour cela, « l’Offre Maroc » consiste en un partenariat Public-Privé « gagnant-gagnant» sur la base de contrats clairement définis.</p>
                        <p class="texte">La déclinaison du Plan Maroc Vert en plans agricoles régionaux, consiste à construire une vision et une offre agricole régionalisées, respectant dans la mesure du possible l’équilibre entre les deux piliers, et permettant d’engager le Ministère de l’Agriculture et de la Pêche Maritime et ses partenaires régionaux autour d’objectifs communs, et de mobiliser les fonds régionaux et nationaux, les organismes de crédit, les investisseurs, ainsi que les autres bailleurs de fonds désireux de soutenir le Maroc, dans la mise en œuvre du Plan Maroc Vert.</p>
                        <p class="texte">Sur la base d’orientations fixées au niveau national et d’un diagnostic régional, un nombre important de projets potentiels et de fiches action ont été retenus pour l’élaboration du Plan Régional Agricole.</p>
                        <h3>Filières retenues</h3>
                        <table id="tableau">
                                <tr>
                                    <th>Filières</th>
                                    <th>Unité territoriale</th>
                                </tr>
                                <tr style="background-color: white">
                                    <td style="color:red;">Production végétale (03)</td>
                                    <td></td>
                                </tr>
                                 <tr>
                                   <td>Filière oléicole</td>
                                   <td>Toute la zone</td>
                                </tr>
                                <tr>
                                    <td>Filière dattes</td>
                                    <td>Oasis</td>
                                </tr>
                                <tr>
                                   <td>Filière pommes</td>
                                   <td>Montagne</td>
                                 </tr>
                                <tr style="background-color: white">
                                 <td style="color:red;">Production animale (04)</td>
                                 <td></td>
                                </tr>
                                <tr>
                                    <td>Filière viandes rouges</td>
                                    <td>Montagne + Oasis</td>
                                </tr>
                                <tr>
                                    <td>Filière Viandes blanches</td>
                                    <td>Oasis</td>
                                </tr>
                                <tr>
                                    <td>Filière lait</td>
                                    <td>Oasis</td>
                                </tr>
                        </table>
                        <p>&nbsp;</p>
                        <h3>Nombre de projets</h3>
                        <table id="tableau">
                            <tr>
                                <th>Filière</th>
                                <th>Piler I</th>
                                <th>Piler II</th>
                                <th style="background-color: white">Total</th>
                            </tr>
                            <tr>
                                <td>Dattes</td>
                                <td>16</td>
                                <td>2</td>
                                <td style="background-color: white">18</td>
                            </tr>
                            <tr>
                                <td>Olives</td>
                                <td>10</td>
                                <td>2</td>
                                <td style="background-color: white">12</td>
                            </tr>
                            <tr>
                                <td>Pommes</td>
                                <td>4</td>
                                <td>0</td>
                                <td style="background-color: white">4</td>
                            </tr>
                            <tr>
                                <td>Produits terroir</td>
                                <td>0</td>
                                <td>1</td>
                                <td style="background-color: white">1</td>
                            </tr>
                            <tr>
                                <td style="color: red">Production végétale</td>
                                <td style="color: red">30</td>
                                <td style="color: red">5</td>
                                <td style="color: red; background-color: white">35</td>
                            </tr>
                            <tr>
                                <td>Viandes rouges</td>
                                <td>1</td>
                                <td>1</td>
                                <td style="background-color: white">2</td>
                            </tr>
                            <tr>
                                <td>Lait</td>
                                <td>0</td>
                                <td>1</td>
                                <td style="background-color: white">1</td>
                            </tr>
                            <tr>
                                <td>Viandes blanches</td>
                                <td>1</td>
                                <td>1</td>
                                <td style="background-color: white">2</td>
                            </tr>
                            <tr>
                                <td>Miel</td>
                                <td>1</td>
                                <td>1</td>
                                <td style="background-color: white">2</td>
                            </tr>
                            <tr>
                                <td>Dattes</td>
                                <td>16</td>
                                <td>2</td>
                                <td style="background-color: white">18</td>
                            </tr>
                            <tr>
                                <td style="color: red">Production animale</td>
                                <td style="color: red">3</td>
                                <td style="color: red">4</td>
                                <td style="color: red; background-color: white">7</td>
                            </tr>
                            <tr style="background-color: white">
                                <td style="color: red; font-size: large ">Total</td>
                                <td style="color: red; font-size: large ">33</td>
                                <td style="color: red; font-size: large ">9</td>
                                <td style="color: red; background-color: white; font-size: large ">42</td>
                            </tr>
                        </table>
                        <p class="texte">Le Plan constitue ainsi une feuille de route pour le développement agricole de la zone, soutenue par l’accompagnement de l’administration centrale et des pouvoirs publics en matière de réformes sectorielles et institutionnelles. </p>
                        <p>&nbsp;</p>
                        <h3>Situation actuelle et objectifs de production</h3>
                        <table id="tableau">
                            <tr>
                                <th>OBJECTIF</th>
                                <th colspan="2">Situation Actuelle</th>
                                <th colspan="2">Objectif 2020</th>
                            </tr>
                            <tr style="background-color: white">
                                <td style="color:red;">Production végétale</td>
                                <td style="color:red;">Superficie</td>
                                <td style="color:red;">Production</td>
                                <td style="color:red;">Superficie</td>
                                <td style="color:red;">Production</td>
                            </tr>
                            <tr style="background-color: white">
                                <td>Dattes</td>
                                <td>15.000</td>
                                <td>26.000</td>
                                <td>25.000</td>
                                <td>53.000</td>
                            </tr>
                            <tr style="background-color: white">
                                <td>Olives</td>
                                <td>7.700</td>
                                <td>15.000</td>
                                <td>17.700</td>
                                <td>123.960</td>
                            </tr>
                            <tr style="background-color: white">
                                <td>Pommes</td>
                                <td>1.500</td>
                                <td>9.000</td>
                                <td>1.500</td>
                                <td>15.000</td>
                            </tr>
                            <tr style="background-color: white">
                                <td>Céréales</td>
                                <td>28.175</td>
                                <td>55.200</td>
                                <td>28.175</td>
                                <td>78.150</td>
                            </tr>
                            <tr style="background-color: white">
                                <td>Pomme de terre</td>
                                <td>450</td>
                                <td>12.900</td>
                                <td>500</td>
                                <td>18.000</td>
                            </tr>
                            <tr style="background-color: white; color: red">
                                <td>Production animale</td>
                                <td>Effectif</td>
                                <td>Production</td>
                                <td>Effectif</td>
                                <td>Production</td>
                            </tr>
                            <tr style="background-color: white">
                                <td>Viandes rouges</td>
                                <td>422.000</td>
                                <td>2.160</td>
                                <td>362.900</td>
                                <td>3.870</td>
                            </tr>
                            <tr style="background-color: white">
                                <td>Viandes</td>
                                <td>-</td>
                                <td>1.930</td>
                                <td>-</td>
                                <td>6.450</td>
                            </tr>
                            <tr style="background-color: white">
                                <td>Lait</td>
                                <td>34.200</td>
                                <td>11.000</td>
                                <td>34.200</td>
                                <td>11.000</td>
                            </tr>
                            <tr style="background-color: white">
                                <td>Miel</td>
                                <td>9.300</td>
                                <td>25</td>
                                <td>72.500</td>
                                <td>250</td>
                            </tr>
                        </table>
                        <p>&nbsp;</p>
                        <h3>Impacts attendus</h3>
                        <ul>
                            <li class="texte">VALEUR AJOUTEE (Md DH / AN)</li>
                            <table id="tableau">
                                <tr>
                                    <th>Filière</th>
                                    <th>Situation Actuelle</th>
                                    <th>2013</th>
                                    <th>2020</th>
                                    <th>Evolution (%)</th>
                                </tr>
                                <tr>
                                    <td>Production végétale</td>
                                    <td>0,47</td>
                                    <td>0,81</td>
                                    <td>2,20</td>
                                    <td>370</td>
                                </tr>
                                <tr>
                                    <td>Production Animale</td>
                                    <td>0,10</td>
                                    <td>0.17</td>
                                    <td>0,22</td>
                                    <td>127</td>
                                </tr>
                                <tr style="color: red; background-color: white">
                                    <td>Total</td>
                                    <td>0,57</td>
                                    <td>0,98</td>
                                    <td>2,43</td>
                                    <td>328</td>
                                </tr>
                            </table>
                            <li class="texte">EMPLOI (1000 JT / AN)</li>
                            <table id="tableau">
                                <tr>
                                    <th>Filière</th>
                                    <th>Situation Actuelle</th>
                                    <th>2013</th>
                                    <th>2020</th>
                                    <th>Evolution (%)</th>
                                </tr>
                                <tr>
                                    <td>Production végétale</td>
                                    <td>2.310</td>
                                    <td>3.051</td>
                                    <td>3.929</td>
                                    <td>70</td>
                                </tr>
                                <tr>
                                    <td>Production Animale</td>
                                    <td>2.250</td>
                                    <td>3.033</td>
                                    <td>3.249</td>
                                    <td>40</td>
                                </tr>
                                <tr style="color: red; background-color: white">
                                    <td>Total</td>
                                    <td>4.560</td>
                                    <td>6.083</td>
                                    <td>7.178</td>
                                    <td>54</td>
                                </tr>
                            </table>
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
                    <p><a href="../Office.php" class="btn btn-primary px-4 py-3">En savoir plus</a></p>
                </div>

                <hr>

                <div class="col-md-6 col-lg-4" style="margin-bottom: 10%;">
                    <h3 class="heading-section">Liens utiles</h3>
                    <div class="block-21 d-flex mb-4">
                        <figure class="mr-3">
                            <img src="../images/ministre.JPG" class="img-fluid" id="utiles">
                        </figure>
                        <div class="text">
                            <p class="texte" style=" font-size: 80%"><a href="http://www.agriculture.gov.ma/">Ministère de l'Agriculture, de la Pêche maritime, du développement rural et des eaux et forêts</a></p>
                        </div>
                    </div>

                    <div class="block-21 d-flex mb-4">
                        <figure class="mr-3">
                            <img src="../images/ormva-ag.jpg" class="img-fluid" id="utiles">
                        </figure>
                        <div class="text">
                            <p class="texte" style=" font-size: 80%"><a href="http://www.ormvag.ma/index.php?lang=fr">Office Régional de Mise en Valeur Agricole du Gharb</a></p>
                        </div>
                    </div>

                    <div class="block-21 d-flex mb-4">
                        <figure class="mr-3">
                            <img src="../images/agence.jpg" class="img-fluid" id="utiles">
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
                            <li><span class="icon icon-map-marker"></span><span class="text" style="font-size: 98%;">ORMVA/ Tafilalet, B.P. 17 Errachidia, Maroc</span></li>
                            <li><span class="icon icon-phone"></span><span class="text">(+212) 05 35 57 25 04</span></li>
                            <li><span class="icon icon-fax"></span><span class="text">(+212) 05 35 57 22 52</span></li>
                            <li><span class="icon icon-envelope"></span><span class="text" ><a href="mailto:contact@ormvatafilalet.ma">contact@ormvatafilalet.ma</a></span></li>
                            <li><span class="icon icon-clock-o"></span><span class="text">Lundi &mdash; Vendredi 8:30 - 16:00</span></li>
                        </ul>
                    </div>
                </div>

            </div>
            <div class="row pt-5">
                <div class="col-md-12 text-center">
                    <p>
                        Copyright &copy; 2019
                        <a href="http://www.ormvatafilalet.ma/tiki-index.php" target="_blank" class="text-primary">ORMVA/TF</a>
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>
    <script src="../js/jquery.min.js"></script>
    <script src="../js/jquery-migrate-3.0.1.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery.easing.1.3.js"></script>
    <script src="../js/jquery.waypoints.min.js"></script>
    <script src="../js/jquery.stellar.min.js"></script>
    <script src="../js/owl.carousel.min.js"></script>
    <script src="../js/jquery.magnific-popup.min.js"></script>
    <script src="../js/bootstrap-datepicker.js"></script>
    <script src="../js/aos.js"></script>
    <script src="../js/jquery.animateNumber.min.js"></script>
    <script src="../js/main.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.7/js/swiper.min.js"></script>
    <script>

        // Get the modal
        var modal = document.getElementById("myModal");

        // Get the image and insert it inside the modal
        var img = document.getElementById("myImg");

        img.onclick = function(){
            modal.style.display = "block";
        }

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
        }

    </script>
    <script type="text/javascript">
        var css_file=document.createElement("link");
        css_file.setAttribute("rel","stylesheet");
        css_file.setAttribute("type","text/css");
        css_file.setAttribute("href",'https://s.bookcdn.com/css/w/booked-wzs-widget-160x275.css?v=0.0.1');
        document.getElementsByTagName("head")[0].appendChild(css_file);
        function setWidgetData(data) {
            if(typeof(data) != 'undefined' && data.results.length > 0) {
                for(var i = 0; i < data.results.length; ++i) {
                    var objMainBlock = document.getElementById('m-booked-bl-simple-week-vertical-37080');
                    if(objMainBlock !== null) {
                        var copyBlock = document.getElementById('m-bookew-weather-copy-'+data.results[i].widget_type);
                        objMainBlock.innerHTML = data.results[i].html_code; if(copyBlock !== null)
                            objMainBlock.appendChild(copyBlock);
                    }
                }
            } else {
                alert('data=undefined||data.results is empty');
            }
        }
    </script>
    <script type="text/javascript" charset="UTF-8" src="https://widgets.booked.net/weather/info?action=get_weather_info&ver=6&cityID=36595&type=4&scode=124&ltid=3457&domid=581&anc_id=70815&cmetric=1&wlangID=3&color=156de8&wwidth=350&header_color=ffffff&text_color=333333&link_color=08488D&border_form=1&footer_color=ffffff&footer_text_color=333333&transparent=0"></script>
</body>


<?php ?>
