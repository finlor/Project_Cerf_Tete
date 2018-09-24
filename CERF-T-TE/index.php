<?php
require_once('picker.php');
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Cerf-Tete</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" media="screen" href="style.css" />
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:600" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" media="screen" href="style.css" />
    <style>
        @import url('https://fonts.googleapis.com/css?family=Roboto');
    </style>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/0.8.2/css/flag-icon.min.css" rel="stylesheet"/>

</head>

<body>
    <!--NAVBAR-->
    <nav  class="navbar sticky-top navbar-expand-lg navbar-light" id="nav">
        <div class="nav-header  d-flex flex-row">
            <a class="navbar-brand" href="#nav">
                <img href="#home" src="images/cerf-wildx-seul.png" class="img-fluid" width="50" alt="">
                <img src="images/wildx-seul.png"  class="img-fluid" width="80" alt="">
            </a>
        </div>
        <div class="language-picker ml-auto">
            <div class="nav-item dropdown mr-2">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php if (isset($_SESSION['lang'])) echo '<span class='.'"flag-icon flag-icon-'.$_SESSION['lang'].'"'."></span>"?></a>
                <ul class="dropdown-menu">
                    <li><a href="/index.php?lang=fr"><span class="flag-icon flag-icon-fr"></span></a></li>
                    <li><a href="/index.php?lang=gb"><span class="flag-icon flag-icon-gb"></span></a></li>
                    <li><a href="/index.php?lang=es"><span class="flag-icon flag-icon-es"></span></a></li>
                    <li><a href="/index.php?lang=jp"><span class="flag-icon flag-icon-jp"></span></a></li>
                </ul>
            </div>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav justify-content-around w-100">
                <a class="nav-link js-scrollTo" href="#a-quoi"><?php echo USEFULLNESS;?><span class="sr-only">(current)</span></a>
                <a class="nav-link js-scrollTo" href="#fonction"><?php echo FEATURES;?></a>
                <a class="nav-link js-scrollTo" href="#contact"><?php echo BOOKING;?></a>
                <a class="nav-link js-scrollTo" href="#apropos"><?php echo WHOAMI;?></a>
            </div>
        </div>
    </nav>
    <!--CAROUSEL ET PREMIERE SECTION-->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

        <div id="nav" class="carousel-inner contenu_caroussel">
            <div class="carousel-item active">
                <img class="d-block w-100 img-fluid" src="images/cerf.jpg" alt="First slide">
                <div class="carousel-caption d-md-block caroussel_texte">
                    <h5 class="titre_carousel">Cerf-tete</h5>
                    <p class="sstitre_carousel">Back to nature</p>
                    <a class="badge badge-secondary prix bouton_carousel" href="#contact">Je le veux</a>

                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100 img-fluid" src="images/4xv3.jpg" alt="Second slide">
                <div class="carousel-caption d-md-block caroussel_texte">
                    <h5 class="titre_carousel">Cerf-tete</h5>
                    <p>Reconnectez-vous avec la nature</p>
                    <a class="badge badge-secondary prix bouton_carousel" href="#contact">Je le veux</a>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100 img-fluid" src="images/eeth.jpg" alt="Third slide">
                <div class="carousel-caption d-md-block caroussel_texte">
                    <h5 class="titre_carousel">Cerf-tete</h5>
                    <p>Plongez dans une nouvelle expérience</p>
                    <a class="badge badge-secondary prix bouton_carousel" href="#contact">Je le veux</a>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <section class="usefullness section" id="a-quoi">
        <div class="container">
            <div class="row but">
                <div class="col">
                    <hr>
                </div>
                <div class="col-6">
                    <h1>A quoi sert-&nbsp;il ?</h1>
                </div>
                <div class="col">
                    <hr>
                </div>
            </div>
            <br>
            <br>
            <p class=texte_but>Le cerf est le roi de la forêt, si on lui parle on accède donc à tous les
                autres
                animaux !
                Le but est d'améliorer la compréhension et donc les échanges avec les animaux qui nous
                entourent.
                <br>
                Ainsi, nous pourrons mieux protéger notre environnement et nos ressources.</p>
            <br>

            <div class="row align-items-center seconde_ligne">
                <div class="col-md-6 texte_dispo">
                    <div class="texte_disponibilite">

                        <br>

                        <br>

                        <p>Stock de 250 produits disponibles en early bird</p>
                        <br>
                        <p>Fin des précommandes : </p>
                        <p>Vendredi 26 Octobre 2019.</p>
                        <br>
                        <span class="badge badge-secondary prix">999€ T.T.C</span>
                        <br>
                        <br>
                    </div>
                </div>
                <div class="col-md-6 image_cerftete2">
                    <img src="images/casque.png" class="img-circle" alt="Image synthese cerf tete" width="100%">
                </div>

            </div>
        </div>
    </section>
    <!--SECTION COMMENT CA MARCHE-->
    <section class="fonction section" id="fonction">

        <div class="container-fluid etape-fonction">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <hr>
                    </div>
                    <div class="col-6">
                        <h1>Comment ça&nbsp;marche ?</h1>
                    </div>
                    <div class="col">
                        <hr>
                    </div>
                </div>
                <div id="fonction" class="row etape-trois">
                    <div class="col-md-4">
                        <span class="etape">
                            <p>1</p>
                        </span>
                        <p>Lecture des ondes cérébrales, transmissions via les "bois" (qui sont des antennes).</p>
                    </div>
                    <div class="col-md-4">
                        <span class="etape">
                            <p>2</p>
                        </span>
                        <p>Une IA traduit ces ondes en langage pour que le cerf comprenne.</p>
                    </div>
                    <div class="col-md-4">
                        <span class="etape">
                            <p>3</p>
                        </span>
                        <p>Les ondes du cerf sont détectées et traduites pour être comprises par le porteur du Wild
                            Cerf-tête. </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6 image-produit">
                    <p><img src="images/cerf_tete.jpg" alt="image produit"></p>
                </div>
                <div class="col-md-6 logo-fonction">
                    <div class="row">
                        <div class="col-6">
                            <span class="icon-fonction">
                                <p><img src="images/bluetooth.png"></p>
                            </span>
                            <span class="icon-fonction">
                                <p>Casque bluetooth</p>
                            </span>
                        </div>
                        <div class="col-6">
                            <span class="icon-fonction">
                                <p><img src="images/porte.png"></p>
                            </span>
                            <span class="icon-fonction">
                                <p>Portée 50 mètres</p>
                            </span>
                        </div>
                        <div class="col-6">
                            <span class="icon-fonction">
                                <p><img src="images/phone.png"></p>
                            </span>
                            <span class="icon-fonction">
                                <p>Relié à une application smartphone (IOS et Android)</p>
                            </span>
                        </div>
                        <div class="col-6">
                            <span class="icon-fonction">
                                <p> <img src="images/batterie.png"></p>
                            </span>
                            <span class="icon-fonction">
                                <p>Autonomie 2 heures Batterie Lithium</p>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="button-fonction">
                <p>
                    <button class="btn btn-default" onclick="toggle_text();" type="button" data-toggle="collapse"
                        data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                        <span id="plus"> + En savoir plus</span>

                    </button>
                </p>
                <div class="collapse" id="collapseExample">
                    <div class="card card-body">
                        <h5>Caractéristiques</h5>
                        <p>Casque bluetooth, écouteurs, autonomie 2h, batterie lithium, portée 50 mètres, relié à appli
                            smartphone (IOS et Android) pour retranscrire les messages, certifié conforme EU.

                            Existe en 4 langues (anglais, français, espagnol, japonais).

                            Design épuré, simple d'utilisation, novateur.
                        </p>
                        <h5>Materiel</h5>
                        <p>CPU : Mediatek MT8321, Quad-Core, ARM-A53 @1.3GHz<br>
                            GPU : ARM Mali-T400<br>
                            RAM : 1GB, LPDDR3<br>
                            Internal Storage : 16/32 GB<br>
                            Operating System : Android 7.0 « Nougat »<br>
                            Loudspeakers : Yes<br>
                            Audio out : Mini-jack 3.5mm<br>
                            Microphone : Yes<br>
                            Light and Proximity : Yes<br>
                            USB : Micro USB<br>
                            USB OTG : Yes<br>
                            G sensor / Compass /Gyro : Yes / No / No<br>
                        </p>
                        <h5>Alimentation</h5>
                        <p>Battery Size : 5000 mAh<br>
                            Battery Type : Li-Ion<br>
                            Battery Weight : 93g<br>
                            Battery Life : Video Playback : 405 min<br>
                            Charging Adaptor : 5V/2A, Micro USB 2.0 Fixed EU<br>
                        </p>
                        <h5>Inclut dans la boite</h5>
                        <p>Inclus dans la boîte :<br>
                            USB Charger<br>
                            USB Cable<br>
                            Quick Start Guide<br>
                            Warranty Booklet <br>
                        </p>
                    </div>
                </div>
            </div>
    </section>

    <div class="container-fluid no_padding_size">
        <img src="images/bandeau1.jpg" class="img-fluid" alt="Image cerf-tête" width="100%" height="50%">
    </div>

    <!--FORMULAIRE-->
    <section class="section" id="contact">
        <div class="container margintop_section">
            <div class="row">
                <div class="col">
                    <hr class="hr_color">
                </div>
                <div class="col-6 title_section">
                    <h1>Pré-&nbsp;réserver maintenant</h1>
                </div>
                <div class="col">
                    <hr class="hr_color">
                </div>
            </div>
        </div>
        <form>
            <div class="container padding_formulaire">
                <div class="row justify-content-between">
                    <div class="col-1 no_padding">
                        <img class="icon_form float-right" src="https://zupimages.net/up/18/38/4vgu.png">
                    </div>
                    <div class="form-group col-md-5 col-11">
                        <input type="name" class="form-control borderform" placeholder="Nom*">
                    </div>
                    <div class="col-1 no_padding">
                        <img class="icon_form float-right" src="https://zupimages.net/up/18/38/4vgu.png">
                    </div>
                    <div class="form-group col-md-5 col-11">
                        <input type="prenom" class="form-control borderform" placeholder="Prénom*">
                    </div>
                </div>
                <div class="row justify-content-between">
                    <div class="col-1 no_padding">
                        <img class="icon_form float-right" src="https://zupimages.net/up/18/38/ou4t.png">
                    </div>
                    <div class="form-group col-md-5 col-11">
                        <input type="telephone" class="form-control borderform" placeholder="Téléphone*">
                    </div>
                    <div class="col-1 no_padding">
                        <img class="icon_form float-right" src="https://zupimages.net/up/18/38/t0vl.png">
                    </div>
                    <div class="form-group col-md-5 col-11">
                        <input type="email" class="form-control borderform" placeholder="Email*">
                    </div>
                </div>
                <div class="text-center">
                    <button type="button" class="btn btn_orange">Envoyer</button>
                </div>
            </div>
        </form>
    </section>



    <!--QUI SOMME NOUS ?-->
    <section id="apropos" class="identity">
        <div class="container section">
            <div class="row">
                <div class="col">
                    <hr class="hr_color">
                </div>
                <div class="col-6 title_section">
                    <h1 id="fonction">Qui sommes-nous ?</h1>
                </div>
                <div class="col">
                    <hr class="hr_color">
                </div>
            </div>
            <div class="row leader">
                <div class="col-md-2"><img src="./images/wildX.PNG" width="150" alt="Responsive image"></div>

                <div class="col-md-10">
                    <p class="lead">"Pour tout ce que l'homme apporte à la nature, la nature lui rend en contrepartie,
                        c'est comme la communion des étoiles. Elle nous vient à l'esprit avec une force renouvelée,
                        dans les silences de la forêt."</p>
                    <p class="pdg">Elan Musk</p>
                    <p class="lead">Son PDG Elan Musk souhaite révolutionner le rapport entre les hommes et les
                        animaux, à l'aide de toute la technologie moderne que l'équipe R&D de Wild X développe.</p>
                </div><br>
    </section>
    <section class="footer section">
        <div class="container">
            <br>
            <div class="row no-gutters justify-content-space-around">
                <div class="col-12"><span class="contact"><a target="_blank" href="https://wildcodeschool.fr/contact/">Contact</a></span></div>
            </div><br>
            <div class="row no-gutters"></div>
            <div class="col-12"><span class="contact"><a target="_blank" href="https://wildcodeschool.fr/">Notre partenaire : Wild Code
                        School</a></span></div>
        </div><br>
        <div class="col-12"><a href="https://www.facebook.com/wildcodeschool/" target="_blank"><img class="photo" src="./images/facebook.png"></a><a href="https://twitter.com/wildschool_bdx?lang=fr" target="_blank"><img class="photo" src="./images/twitter.png"></a><a href="https://github.com/WildCodeSchool" target="_blank"><img
                class="photo" src="./images/github.png"></a></div>
        <br>
        <div class="row no-gutters">
            <div class="col-12"><span class="contact" style-decoration="underline"><a target="_blank" href="http://www.fnacdarty.com/mentions-legales/">-
                        Mentions légales -</a></span></div>
        </div>
        <br>
    </section>

    
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <script type="text/javascript">

        function toggle_text() {
            var span = document.getElementById('plus');

            if (span.innerHTML == '- En savoir plus')
            {
                span.innerHTML = '+ En savoir plus'; 
            }
            else
            {
                span.innerHTML = '- En savoir plus';
            }

        }

        $(document).ready(function () {
            $('.js-scrollTo').on('click', function () {
                var page = $(this).attr('href');
                var speed = 750;
                $('html, body').animate({ scrollTop: $(page).offset().top }, speed);
                return false;
            });
        });
    </script>
</body>

</html>