<?php
require_once('picker.php');
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo TITLE;?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" media="screen" href="style.css" />
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/0.8.2/css/flag-icon.min.css" rel="stylesheet"/>

</head>
<body
    ><nav  class="navbar sticky-top navbar-expand-lg navbar-light" id="nav">
        <div class="nav-header  d-flex flex-row">
            <a class="navbar-brand" href="#nav">
                <img src="images/cerf-wildx-seul.png" class="img-fluid" width="50" alt="">
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
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>   
</body>
