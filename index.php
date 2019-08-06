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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
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

      .swiper-container {
        margin: 60px;
      }

      .swiper-slide {
        overflow: hidden;
      }

      .slide-inner {
        position: relative;
        width: 100%;
        height: 100%;
        background-size: cover;
        background-position: center;
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

      .searchbar{
        margin-top: 2%;
        height: 60px;
        background-color: #353b48;
        border-radius: 20px;
        padding: 10px;
      }

      .search_input{
        color: white;
        border: 0;
        outline: 0;
        background: none;
        line-height: 40px;
        padding: 0 10px;
        width: 320px;
        transition: width 0.4s linear;
      }

      .searchbar:hover > .search_icon{
        color: #e74c3c;
      }

      .search_icon{
        height: 40px;
        width: 40px;
        float: right;
        display: flex;
        justify-content: center;
        align-items: center;
        border-radius: 50%;
        color:white;
        background: white;
      }

      /* Style tab links */
      .tablink {
          background-color: #555;
          color: white;
          float: left;
          border: none;
          outline: none;
          cursor: pointer;
          padding: 12px 10px;
          font-size: 17px;
          width: 25%;
          margin-left: 35px;
          border: 4px double white;
          border-radius: 20px;
      }

      .tablink:hover {
          background-color: #777;
      }

      /* Style the tab content (and add height:100% for full page content) */
      .tabcontent {
          color: white;
          display: none;
          padding: 100px 20px;
          height: 70%;
          margin: 35px;
          border: 2px solid black;
          border-radius: 20px;
          background-image: url("images/back.JPG");
          background-repeat: no-repeat;
          background-size: cover;

      }

      #actualite {background-color: #4CAF50;}
      #evenement {background-color: #4CAF50;}
      #utiles{
          height: 60px;
          width: 100px;
      }

      .calendar, .calendar_weekdays, .calendar_content {
          max-width: 350px;
          padding-bottom: 9%;
          border: white dashed 5px;
      }
      .calendar {
          margin: auto;
          font-family:'Muli', sans-serif;
          font-weight: 1000;
          background-color: white;
      }
      .calendar_content, .calendar_weekdays, .calendar_header {
          position: relative;
          overflow: hidden;
      }
      .calendar_weekdays div {
          display:inline-block;
          vertical-align:top;
      }
      .calendar_weekdays div, .calendar_content div {
          width: 14.28571%;
          overflow: hidden;
          text-align: center;
          background-color: transparent;
          color: #6f6f6f;
          font-size: 14px;
      }
      .calendar_content div {
          border: 1px solid transparent;
          float: left;
      }
      .calendar_content div:hover {
          border: 1px solid #dcdcdc;
          cursor: default;
      }
      .calendar_content div.blank:hover {
          cursor: default;
          border: 1px solid transparent;
      }
      .calendar_content div.past-date {
          color: #d5d5d5;
      }
      .calendar_content div.today {
          font-weight: bold;
          font-size: 14px;
          color: #87b633;
          border: 1px solid #dcdcdc;
      }
      .calendar_content div.selected {
          background-color: #f0f0f0;
      }
      .calendar_header {
          width: 100%;
          text-align: center;
      }
      .calendar_header h2 {
          padding: 0 10px;
          font-family:'Muli', sans-serif;
          font-weight: 300;
          font-size: 18px;
          color: #87b633;
          float:left;
          width:70%;
          margin: 0 0 10px;
      }
      button.switch-month {
          background-color: transparent;
          padding: 0;
          outline: none;
          border: none;
          color: #dcdcdc;
          float: left;
          width:15%;
          transition: color .2s;
      }
      button.switch-month:hover {
          color: #87b633;
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

          <li class="nav-item active">
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
        <div class="container h-100">
          <div class="d-flex justify-content-center">
            <form class="searchbar" method="GET">
                <input class="search_input" type="text" name="search" placeholder="Faire une recherche ..." required>
                <a class="search_icon"><i class="fas fa-search"></i></a>
            </form>
          </div>
        </div>

          <div class="container h-100" style="margin-top: 2%">
              <div class="d-flex justify-content-center">
          <?php
          $path='fichiers'.'/{**/*,*}';
          $i=0;
          if(isset($_GET['search']))
          {
              echo '<table id="tableau" style=\'font-size: 70%\'>';
              echo '<tr>'. '<th>'.'Nom de fichier'.'</th>'.'<th>'.'Lien'.'</th>'.'<th>'.'Dernière modification'.'</th>'.'</tr>';
              foreach (glob($path,GLOB_BRACE) as $filename) {
                  if(stristr(basename($filename),$_GET['search']) == TRUE){
                      echo "<tr>"."<td>".basename($filename)."</td>"."<td>"."<a href='$filename'>".basename($filename)."</a>"."</td>"."<td>".date("d F Y H:i:s.",filemtime($filename))."</td>"."<tr>";
                      $i=$i+1;
                  }
              }
              if($i==0){
                  echo '<td>'.'Aucune resultat ne correspond au critère de recherche !'.'</td>'.'<td>'.'</td>'.'<td>'.'</td>';
              }
              echo '</table>';
              echo '<hr style="padding-bottom: :5%">';
          }
          ?>
              </div>
          </div>

        <div class="col-md-4">
          <div class="media block-6">
            <div class="media-body">
            <center>
                <a href="Khettara.php"><img class="icone" src="images/khettara.jpg"></a>
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
               <a href="Oasis.php"><img class="icone" src="images/oasis.jpg"></a>
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


      <div class="featured-donate" style="background-color: #3F3F3F;">
          <div class="site-section">
              <div class="container">
                  <div style="margin-top: 1%"></div>
                  <div class="row block-9">
                  <div class="col-md-8 pr-md-5"  style="margin-bottom: 5%">
                    <h3 style="color:white;">Derniers Actualités et Événements</h3>
                      <p>&nbsp;</p>
                    <button class="tablink"  onclick="openPage('actualite', this, '#4CAF50')" id="defaultOpen"><span style="font-size: 60%;">Actualités</span></button>
                    <button class="tablink"  onclick="openPage('evenement', this, '#4CAF50')" ><span style="font-size: 60%;">Événements</span></button>

                 <div id="actualite" class="tabcontent">
                    <h3 style="color: white">Actualités</h3>
                    <p>Aucun article.</p>
                 </div>

                  <div id="evenement" class="tabcontent">
                      <h3 style="color: white">Événements</h3>
                      <p>Aucun article.</p>
                   </div>
                   </div>
                  <div class="col-md-auto">
                    <h3 style="color:white;">Agenda</h3>
                      <p>&nbsp;</p>
                      <div class="calendar calendar-first" id="calendar_first">
                          <div class="calendar_header">
                              <button class="switch-month switch-left"> <i class="fa fa-chevron-left"></i></button>
                              <h2></h2>
                              <button class="switch-month switch-right"> <i class="fa fa-chevron-right"></i></button>
                          </div>
                          <div class="calendar_weekdays"></div>
                          <div class="calendar_content"></div>
                      </div>
                 </div>
                 </div>
              </div>
          </div>
      </div>

  <div class="featured-donate overlay-color" style="background-image: url('images/plan.jpg');">
    <div class="container">
      <div class="row">

        <div class="swiper-container">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="slide-inner">
                <img src="images/1.jpg">
              </div>
            </div>
            <div class="swiper-slide">
              <div class="slide-inner">
                <img src="images/2.jpg">
              </div>
            </div>
            <div class="swiper-slide">
              <div class="slide-inner">
                <img src="images/3.jpg">
              </div>
            </div>
            <div class="swiper-slide">
              <div class="slide-inner">
                <img src="images/4.jpg">
              </div>
            </div>
            <div class="swiper-slide">
              <div class="slide-inner">
                <img src="images/5.jpg">
              </div>
            </div>
            <div class="swiper-slide">
              <div class="slide-inner">
                <img src="images/6.jpg">
              </div>
            </div>
            <div class="swiper-slide">
              <div class="slide-inner">
                <img src="images/7.jpg">
              </div>
            </div>
            <div class="swiper-slide">
              <div class="slide-inner">
                <img src="images/8.jpg">
              </div>
            </div>
            <div class="swiper-slide">
              <div class="slide-inner">
                <img src="images/9.jpg">
              </div>
            </div>
            <div class="swiper-slide">
              <div class="slide-inner">
                <img src="images/10.jpg">
              </div>
            </div>
          </div>
          <div class="swiper-button-next swiper-button-white"></div>
          <div class="swiper-button-prev swiper-button-white"></div>
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
    var interleaveOffset = 0.5;

    var swiperOptions = {
      loop: true,
      speed: 1000,
      grabCursor: true,
      autoplay: true,
      watchSlidesProgress: true,
      mousewheelControl: true,
      keyboardControl: true,
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev"
      },
      on: {
        progress: function() {
          var swiper = this;
          for (var i = 0; i < swiper.slides.length; i++) {
            var slideProgress = swiper.slides[i].progress;
            var innerOffset = swiper.width * interleaveOffset;
            var innerTranslate = slideProgress * innerOffset;
            swiper.slides[i].querySelector(".slide-inner").style.transform =
                    "translate3d(" + innerTranslate + "px, 0, 0)";
          }
        },
        touchStart: function() {
          var swiper = this;
          for (var i = 0; i < swiper.slides.length; i++) {
            swiper.slides[i].style.transition = "";
          }
        },
        setTransition: function(speed) {
          var swiper = this;
          for (var i = 0; i < swiper.slides.length; i++) {
            swiper.slides[i].style.transition = speed + "ms";
            swiper.slides[i].querySelector(".slide-inner").style.transition =
                    speed + "ms";
          }
        }
      }
    };

    var swiper = new Swiper(".swiper-container", swiperOptions);


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
  <script>
      function openPage(pageName, elmnt, color) {
          // Hide all elements with class="tabcontent" by default */
          var i, tabcontent, tablinks;
          tabcontent = document.getElementsByClassName("tabcontent");
          for (i = 0; i < tabcontent.length; i++) {
              tabcontent[i].style.display = "none";
          }

          // Remove the background color of all tablinks/buttons
          tablinks = document.getElementsByClassName("tablink");
          for (i = 0; i < tablinks.length; i++) {
              tablinks[i].style.backgroundColor = "";
          }

          // Show the specific tab content
          document.getElementById(pageName).style.display = "block";

          // Add the specific color to the button used to open the tab content
          elmnt.style.backgroundColor = color;
      }

      // Get the element with id="defaultOpen" and click on it
      document.getElementById("defaultOpen").click();
  </script>
      <script>
          $(document).ready(function () {
              function c(passed_month, passed_year, calNum) {
                  var calendar = calNum == 0 ? calendars.cal1 : calendars.cal2;
                  makeWeek(calendar.weekline);
                  calendar.datesBody.empty();
                  var calMonthArray = makeMonthArray(passed_month, passed_year);
                  var r = 0;
                  var u = false;
                  while (!u) {
                      if (daysArray[r] == calMonthArray[0].weekday) {
                          u = true
                      } else {
                          calendar.datesBody.append('<div class="blank"></div>');
                          r++;
                      }
                  }
                  for (var cell = 0; cell < 42 - r; cell++) { // 42 date-cells in calendar
                      if (cell >= calMonthArray.length) {
                          calendar.datesBody.append('<div class="blank"></div>');
                      } else {
                          var shownDate = calMonthArray[cell].day;
                          var iter_date = new Date(passed_year, passed_month, shownDate);
                          if (
                              (
                                  (shownDate != today.getDate() && passed_month == today.getMonth()) || passed_month != today.getMonth()) && iter_date < today) {
                              var m = '<div class="past-date">';
                          } else {
                              var m = checkToday(iter_date) ? '<div class="today">' : "<div>";
                          }
                          calendar.datesBody.append(m + shownDate + "</div>");
                      }
                  }

                  var color = "#444444";
                  calendar.calHeader.find("h2").text(i[passed_month] + " " + passed_year);
                  calendar.weekline.find("div").css("color", color);
                  calendar.datesBody.find(".today").css("color", "#87b633");

                  // find elements (dates) to be clicked on each time
                  // the calendar is generated
                  var clicked = false;
                  selectDates(selected);

                  clickedElement = calendar.datesBody.find('div');
                  clickedElement.on("click", function () {
                      clicked = $(this);
                      var whichCalendar = calendar.name;

                      if (firstClick && secondClick) {
                          thirdClicked = getClickedInfo(clicked, calendar);
                          var firstClickDateObj = new Date(firstClicked.year,
                              firstClicked.month,
                              firstClicked.date);
                          var secondClickDateObj = new Date(secondClicked.year,
                              secondClicked.month,
                              secondClicked.date);
                          var thirdClickDateObj = new Date(thirdClicked.year,
                              thirdClicked.month,
                              thirdClicked.date);
                          if (secondClickDateObj > thirdClickDateObj && thirdClickDateObj > firstClickDateObj) {
                              secondClicked = thirdClicked;
                              // then choose dates again from the start :)
                              bothCals.find(".calendar_content").find("div").each(function () {
                                  $(this).removeClass("selected");
                              });
                              selected = {};
                              selected[firstClicked.year] = {};
                              selected[firstClicked.year][firstClicked.month] = [firstClicked.date];
                              selected = addChosenDates(firstClicked, secondClicked, selected);
                          } else { // reset clicks
                              selected = {};
                              firstClicked = [];
                              secondClicked = [];
                              firstClick = false;
                              secondClick = false;
                              bothCals.find(".calendar_content").find("div").each(function () {
                                  $(this).removeClass("selected");
                              });
                          }
                      }
                      if (!firstClick) {
                          firstClick = true;
                          firstClicked = getClickedInfo(clicked, calendar);
                          selected[firstClicked.year] = {};
                          selected[firstClicked.year][firstClicked.month] = [firstClicked.date];
                      } else {
                          secondClick = true;
                          secondClicked = getClickedInfo(clicked, calendar);

                          // what if second clicked date is before the first clicked?
                          var firstClickDateObj = new Date(firstClicked.year,
                              firstClicked.month,
                              firstClicked.date);
                          var secondClickDateObj = new Date(secondClicked.year,
                              secondClicked.month,
                              secondClicked.date);

                          if (firstClickDateObj > secondClickDateObj) {

                              var cachedClickedInfo = secondClicked;
                              secondClicked = firstClicked;
                              firstClicked = cachedClickedInfo;
                              selected = {};
                              selected[firstClicked.year] = {};
                              selected[firstClicked.year][firstClicked.month] = [firstClicked.date];

                          } else if (firstClickDateObj.getTime() == secondClickDateObj.getTime()) {
                              selected = {};
                              firstClicked = [];
                              secondClicked = [];
                              firstClick = false;
                              secondClick = false;
                              $(this).removeClass("selected");
                          }


                          // add between dates to [selected]
                          selected = addChosenDates(firstClicked, secondClicked, selected);
                      }
                      selectDates(selected);
                  });

              }

              function selectDates(selected) {
                  if (!$.isEmptyObject(selected)) {
                      var dateElements1 = datesBody1.find('div');
                      var dateElements2 = datesBody2.find('div');

                      function highlightDates(passed_year, passed_month, dateElements) {
                          if (passed_year in selected && passed_month in selected[passed_year]) {
                              var daysToCompare = selected[passed_year][passed_month];
                              for (var d in daysToCompare) {
                                  dateElements.each(function (index) {
                                      if (parseInt($(this).text()) == daysToCompare[d]) {
                                          $(this).addClass('selected');
                                      }
                                  });
                              }

                          }
                      }

                      highlightDates(year, month, dateElements1);
                      highlightDates(nextYear, nextMonth, dateElements2);
                  }
              }

              function makeMonthArray(passed_month, passed_year) { // creates Array specifying dates and weekdays
                  var e = [];
                  for (var r = 1; r < getDaysInMonth(passed_year, passed_month) + 1; r++) {
                      e.push({
                          day: r,
                          // Later refactor -- weekday needed only for first week
                          weekday: daysArray[getWeekdayNum(passed_year, passed_month, r)]
                      });
                  }
                  return e;
              }

              function makeWeek(week) {
                  week.empty();
                  for (var e = 0; e < 7; e++) {
                      week.append("<div>" + daysArray[e].substring(0, 3) + "</div>")
                  }
              }

              function getDaysInMonth(currentYear, currentMon) {
                  return (new Date(currentYear, currentMon + 1, 0)).getDate();
              }

              function getWeekdayNum(e, t, n) {
                  return (new Date(e, t, n)).getDay();
              }

              function checkToday(e) {
                  var todayDate = today.getFullYear() + '/' + (today.getMonth() + 1) + '/' + today.getDate();
                  var checkingDate = e.getFullYear() + '/' + (e.getMonth() + 1) + '/' + e.getDate();
                  return todayDate == checkingDate;

              }

              function getAdjacentMonth(curr_month, curr_year, direction) {
                  var theNextMonth;
                  var theNextYear;
                  if (direction == "next") {
                      theNextMonth = (curr_month + 1) % 12;
                      theNextYear = (curr_month == 11) ? curr_year + 1 : curr_year;
                  } else {
                      theNextMonth = (curr_month == 0) ? 11 : curr_month - 1;
                      theNextYear = (curr_month == 0) ? curr_year - 1 : curr_year;
                  }
                  return [theNextMonth, theNextYear];
              }

              function b() {
                  today = new Date;
                  year = today.getFullYear();
                  month = today.getMonth();
                  var nextDates = getAdjacentMonth(month, year, "next");
                  nextMonth = nextDates[0];
                  nextYear = nextDates[1];
              }

              var e = 480;

              var today;
              var year,
                  month,
                  nextMonth,
                  nextYear;

              var r = [];
              var i = [
                  "Janvier",
                  "Février",
                  "Mars",
                  "Avril",
                  "Mai",
                  "Juin",
                  "Juillet",
                  "Août",
                  "Septembre",
                  "Octobre",
                  "Novembre",
                  "Décembre"];
              var daysArray = [
                  "Dimanche",
                  "Lundi",
                  "Mardi",
                  "Mercredi",
                  "Jeudi",
                  "Vendredi",
                  "Samedi"];

              var cal1 = $("#calendar_first");
              var calHeader1 = cal1.find(".calendar_header");
              var weekline1 = cal1.find(".calendar_weekdays");
              var datesBody1 = cal1.find(".calendar_content");

              var cal2 = $("#calendar_second");
              var calHeader2 = cal2.find(".calendar_header");
              var weekline2 = cal2.find(".calendar_weekdays");
              var datesBody2 = cal2.find(".calendar_content");

              var bothCals = $(".calendar");

              var switchButton = bothCals.find(".calendar_header").find('.switch-month');

              var calendars = {
                  "cal1": {
                      "name": "first",
                      "calHeader": calHeader1,
                      "weekline": weekline1,
                      "datesBody": datesBody1
                  },
                  "cal2": {
                      "name": "second",
                      "calHeader": calHeader2,
                      "weekline": weekline2,
                      "datesBody": datesBody2
                  }
              }


              var clickedElement;
              var firstClicked,
                  secondClicked,
                  thirdClicked;
              var firstClick = false;
              var secondClick = false;
              var selected = {};

              b();
              c(month, year, 0);
              c(nextMonth, nextYear, 1);
              switchButton.on("click", function () {
                  var clicked = $(this);
                  var generateCalendars = function (e) {
                      var nextDatesFirst = getAdjacentMonth(month, year, e);
                      var nextDatesSecond = getAdjacentMonth(nextMonth, nextYear, e);
                      month = nextDatesFirst[0];
                      year = nextDatesFirst[1];
                      nextMonth = nextDatesSecond[0];
                      nextYear = nextDatesSecond[1];

                      c(month, year, 0);
                      c(nextMonth, nextYear, 1);
                  };
                  if (clicked.attr("class").indexOf("left") != -1) {
                      generateCalendars("previous");
                  } else {
                      generateCalendars("next");
                  }
                  clickedElement = bothCals.find(".calendar_content").find("div");
              });


              //  Click picking stuff
              function getClickedInfo(element, calendar) {
                  var clickedInfo = {};
                  var clickedCalendar,
                      clickedMonth,
                      clickedYear;
                  clickedCalendar = calendar.name;
                  clickedMonth = clickedCalendar == "first" ? month : nextMonth;
                  clickedYear = clickedCalendar == "first" ? year : nextYear;
                  clickedInfo = {
                      "calNum": clickedCalendar,
                      "date": parseInt(element.text()),
                      "month": clickedMonth,
                      "year": clickedYear
                  }
                  return clickedInfo;
              }


              // Finding between dates MADNESS. Needs refactoring and smartening up :)
              function addChosenDates(firstClicked, secondClicked, selected) {
                  if (secondClicked.date > firstClicked.date || secondClicked.month > firstClicked.month || secondClicked.year > firstClicked.year) {

                      var added_year = secondClicked.year;
                      var added_month = secondClicked.month;
                      var added_date = secondClicked.date;

                      if (added_year > firstClicked.year) {
                          // first add all dates from all months of Second-Clicked-Year
                          selected[added_year] = {};
                          selected[added_year][added_month] = [];
                          for (var i = 1;
                               i <= secondClicked.date;
                               i++) {
                              selected[added_year][added_month].push(i);
                          }

                          added_month = added_month - 1;
                          while (added_month >= 0) {
                              selected[added_year][added_month] = [];
                              for (var i = 1;
                                   i <= getDaysInMonth(added_year, added_month);
                                   i++) {
                                  selected[added_year][added_month].push(i);
                              }
                              added_month = added_month - 1;
                          }

                          added_year = added_year - 1;
                          added_month = 11; // reset month to Dec because we decreased year
                          added_date = getDaysInMonth(added_year, added_month); // reset date as well

                          // Now add all dates from all months of inbetween years
                          while (added_year > firstClicked.year) {
                              selected[added_year] = {};
                              for (var i = 0; i < 12; i++) {
                                  selected[added_year][i] = [];
                                  for (var d = 1; d <= getDaysInMonth(added_year, i); d++) {
                                      selected[added_year][i].push(d);
                                  }
                              }
                              added_year = added_year - 1;
                          }
                      }

                      if (added_month > firstClicked.month) {
                          if (firstClicked.year == secondClicked.year) {
                              selected[added_year][added_month] = [];
                              for (var i = 1;
                                   i <= secondClicked.date;
                                   i++) {
                                  selected[added_year][added_month].push(i);
                              }
                              added_month = added_month - 1;
                          }
                          while (added_month > firstClicked.month) {
                              selected[added_year][added_month] = [];
                              for (var i = 1;
                                   i <= getDaysInMonth(added_year, added_month);
                                   i++) {
                                  selected[added_year][added_month].push(i);
                              }
                              added_month = added_month - 1;
                          }
                          added_date = getDaysInMonth(added_year, added_month);
                      }

                      for (var i = firstClicked.date + 1;
                           i <= added_date;
                           i++) {
                          selected[added_year][added_month].push(i);
                      }
                  }
                  return selected;
              }
          });
      </script>
  <script type="text/javascript" charset="UTF-8" src="https://widgets.booked.net/weather/info?action=get_weather_info&ver=6&cityID=36595&type=4&scode=124&ltid=3457&domid=581&anc_id=70815&cmetric=1&wlangID=3&color=156de8&wwidth=350&header_color=ffffff&text_color=333333&link_color=08488D&border_form=1&footer_color=ffffff&footer_text_color=333333&transparent=0"></script>
  </body>
</html>