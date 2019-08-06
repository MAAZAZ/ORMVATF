<!DOCTYPE html>
<html lang="en">
<head>
    <title>Office Régionale de Mise en Valeur Agricole du Tafilalet</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" sizes="512x512" href="images/office.png">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500|Gaegu:700" rel="stylesheet">
    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/ionicons.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
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

        #utiles{
            height: 60px;
            width: 100px;
        }

        .icone:hover
        {
            opacity: 0.7;
        }

    </style>
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

                <li class="nav-item">
                    <a href="RH.php" class="nav-link">
                        <p class="menu-cont">Ressources humaines</p>
                    </a>
                </li>

                <li class="nav-item active">
                    <a href="Contact.php" class="nav-link active">
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
                        <h3 class="heading" style="font-size: 70px">Office Régionale de Mise en Valeur Agricole du Tafilalet</h3>
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
                    <a class="dropdown-item" href="Office/Mot_du_Directeur.php">Mot de directeur</a>
                    <a class="dropdown-item" href="Office/Missions.php">Missions</a>
                    <a class="dropdown-item" href="Office/Monographie.php">Monographie</a>
                    <a class="dropdown-item" href="Office/Organigramme.php">Organigramme</a>
                </div>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Plan Maroc Vert
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="Plan-maroc-vert/PAR.php">PAR</a>
                    <a class="dropdown-item" href="Plan-maroc-vert/Projet-Pilier-I.php">Projet pilier I</a>
                    <a class="dropdown-item" href="Plan-maroc-vert/Projet-Pilier-II.php"">Projet pilier II</a>
                </div>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Développement Agricole
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="Developpement-agricole/Filiere-animales.php">Filières animales</a>
                    <a class="dropdown-item" href="Developpement-agricole/Filieres-vegetales.php">Filières végétales</a>
                    <a class="dropdown-item" href="Developpement-agricole/Campagne-agricole.php">Campagne agricole</a>
                    <a class="dropdown-item" href="Developpement-agricole/Organisations-professionnelles.php">Organisations professionnelles</a>
                </div>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Aménegements et Service de l'Eau
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="Amenagements-et-service-eau/Pistes.php">Pistes</a>
                    <a class="dropdown-item" href="Amenagements-et-service-eau/PMH.php">PMH</a>
                    <a class="dropdown-item" href="Amenagements-et-service-eau/Systeme-irrigation-localisee.php">Système d'irrigation localisée</a>
                    <a class="dropdown-item" href="Amenagements-et-service-eau/GH.php">GH</a>
                    <a class="dropdown-item" href="Amenagements-et-service-eau/Etudes.php">Etudes</a>
                </div>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Projets Structurants
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="Projets-structurants/kaddoussa.php">Kaddoussa</a>
                    <a class="dropdown-item" href="Projets-structurants/Amenagement-de-parcours.php">Aménagement des parcours</a>
                </div>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Guichet Unique
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="Guichet-unique/Presentation.php">Présentation</a>
                    <a class="dropdown-item" href="Guichet-unique/Imprimes-a-telecharger.php">Imprimés à télécharger</a>
                    <a class="dropdown-item" href="Guichet-unique/Procedure-octroi-subvention.php">Procédure de l'octroi de subventions</a>
                </div>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Potentialités d'Investissement
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="Potentialites-d'investissement/Presentation.php">Présentation</a>
                    <a class="dropdown-item" href="Potentialites-d'investissement/Guide-investissement.php">Guide d'investissement</a>
                    <a class="dropdown-item" href="Potentialites-d'investissement/Suivi-investissements.php">Suivi des investissements</a>
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
                            <a href="Khettara.php">  <img class="icone"  src="images/khettara.jpg"></a>
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
                            <a href="Khettara.php">  <img class="icone" src="images/oasis.jpg"></a>
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
        <div class="site-section">
            <div class="container">
                <div style="margin-top: 1%"></div>
                <div class="row block-9">
                    <div class="col-md-6 pr-md-5">
                        <h1>Contactez-nous</h1>
                        <br>
                        <h6>Renseignez les champs ci-dessous :</h6>
                        <form action="contact-form.php" method="post">
                            <div class="form-group">
                                <p class="texte">Nom et prenom (*) :</p>
                                <input name="name" type="text" class="form-control px-3 py-3" placeholder="" required>
                            </div>
                            <div class="form-group">
                                <p class="texte">Email (*) :</p>
                                <input name="email" type="text" class="form-control px-3 py-3" placeholder="" required>
                            </div>
                            <div class="form-group">
                                <p class="texte">Objet (*) :</p>
                                <input name="subject" type="text" class="form-control px-3 py-3" placeholder="" required>
                            </div>
                            <div class="form-group">
                                <p class="texte">Message (*) :</p>
                                <textarea name="message" id="" cols="30" rows="7" class="form-control px-3 py-3" placeholder="Ecrire votre message ici .." required></textarea>
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Envoyer" class="btn btn-primary py-3 px-5">
                            </div>
                        </form>
                        <p style="color: red; background-color: whitesmoke; text-align: center"> Les champs marqués d'un astérisque (*) sont obligatoires.</p>
                    </div>

                    <div class="col-md-6" style="padding-top: 15%">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6771.77168608419!2d-4.420666615530534!3d31.936856545480197!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd984ac00d3b6629%3A0x12f781a2d938aff8!2sORMVA%2FTF!5e0!3m2!1sfr!2sma!4v1563850624378!5m2!1sfr!2sma" width="100%" height="400px" frameborder="0" style="border:0" allowfullscreen></iframe>
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
                    <p><a href="Office.php" class="btn btn-primary px-4 py-3">En savoir plus</a></p>
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
                            <img src="images/ormva-ag.jpg" class="img-fluid" id="utiles">
                        </figure>
                        <div class="text">
                            <p class="texte" style=" font-size: 80%"><a href="http://www.ormvag.ma/index.php?lang=fr">Office Régional de Mise en Valeur Agricole du Gharb</a></p>
                        </div>
                    </div>

                    <div class="block-21 d-flex mb-4">
                        <figure class="mr-3">
                            <img src="images/agence.jpg" class="img-fluid" id="utiles">
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
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/main.js"></script>
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
</html>

<?php ?>