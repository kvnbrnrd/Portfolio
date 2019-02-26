<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Kevin Bernard | Portfolio</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

        <link rel="stylesheet" type="text/css" media="screen" href="Assets/CSS/main.css" />
    </head>
<body>
<!-- ------------------------------- Début Page Home -------------------------------- -->

    <section class="container-fluid text-center home" id="home">
        <h1 class="kev">KEVIN BERNARD</h1>
        <p class="pres">Web Designer</p>
        <p class="loc">Belfort, France</p>
        

        <div id="mouse" class="call animated pulse">
            <div class="scroll-downs">
                <div class="mousey">
                    <div class="scroller"></div>
                </div>
            </div>
        </div> 
</section> 

<!-- ------------------------------- Fin Page Home -------------------------------- -->



<!-- ------------------------------- Début Projet 1 -------------------------------- -->

<main>

    <section id="pageP">
        <header id="header">
            <nav class="navbar navbar-expand navbar-dark bg-dark">
                <div class="collapse navbar-collapse" id="navbarsExample02">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#home"><img id="KB" src="Assets/Images/logoVk.png" alt="logo"></a>
                        </li>
                    </ul>
                    <ul class="navbar-nav my-2 my-md-0">
                        <li class="nav-item dropdown active">
                            <a class="nav-link dropdown-toggle fr" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Projets</a>
                            <a class="nav-link dropdown-toggle en" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Projects</a>
                            <div class="dropdown-menu" aria-labelledby="dropdown01">
                                <a class="dropdown-item scroll" href="#pageP">R&M Transfer</a>
                                <a class="dropdown-item scroll" href="#pageP2">Cancoillotte Gaumont</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link scroll fr" href="#aboutme">A Propos</a>
                            <a class="nav-link scroll en" href="#aboutme">About Me</a>
                            </li>
                        <li class="nav-item">
                            <a class="nav-link scroll fr" href="#fond">Contact</a>
                            <a class="nav-link scroll en" href="#fond">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a id="switchEn" class="nav-link scroll fr" href="#">English</a>
                            <a id="switchFr" class="nav-link scroll en" href="#">Français</a>
                        </li>
                    </ul>
                </div> <!-- Fin div collapse -->
            </nav>
        </header>

        <div id="projet" class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-6 corps">
                        <h2 id="titre">R&M TRANSFER</h2>
                        <p class="fr" id="desc">Reproduction d'un service similaire à WeTransfer avec pour objectifs d'insister sur une UX simple et intuitive, tout en créant une identité visuelle propre au service. Mise en place de l'upload multiple de fichiers, de l'envoi d'un lien de téléchargement sécurisé dans un email responsive fidèle à l'identité du site. Un script PHP permet de vider périodiquement le dossier dans lequel sont stockés les fichiers uploadés.</p>
                        <p class="en" id="desc">This project aimed to reproduce a website similar to WeTransfer in terms of functionality, with intuitive UX and defined visual identity being the main focus. The technical challenges consisted in setting up multiple file upload and sending a secure download link through a responsive email, further conveying the identity of the service. A PHP script is used to periodically delete the files stored in the uploads directory.</p>
                    <div id="modal" class="row justify-content-between">
                        <a class="col align-self-end animated pulse-slow fr" href ="https://kevinb269.promo-24.codeur.online/mesprojets/WeTransfer/index.php" id="voir">VOIR LE SITE</a>
                        <a class="col align-self-end animated pulse-slow en" href ="https://kevinb269.promo-24.codeur.online/mesprojets/WeTransfer/index.php" id="voir">SEE THE WEBSITE</a>
                        <a href="https://github.com/kvnbrnrd/WeTransfer"><img id="gitP" src="Assets/Images/github.png" alt="GitHub"></a>
                    </div>
                </div> <!-- Fin div col-md-6 -->
                    <div id="divimage" class="col-md-6">
                        <img id="imgprojet" src="Assets/Images/rickmail.png" alt="image Rick & Morty">
                    </div>
            </div> <!-- Fin div row align-items-center -->
        </div> <!-- Fin div projet -->
</section> <!-- Fin div PageP -->

    
<!-- ------------------------------- Fin Projet 1 -------------------------------- -->



<!-- ------------------------------- Début Projet 2 -------------------------------- -->
    <section id="pageP2">
        <div id="projet2" class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-6 corps">
                        <h2 id="titre">CANCOILLOTTE GAUMONT</h2>
                        <p class="fr" id="desc">Réalisation d'un annuaire de films permettant de consulter la fiche d'un film par le biais d'une recherche par critères multiples. Les informations relatives au film sont affichées dynamiquement grâce aux requêtes vers la base de données relationnelle. L'utilisation de Material Design assure un site entièrement responsive et une UI conforme aux standards en application en matière de web design.</p>
                        <p class="en" id="desc">Creation of an online movie database where the user can search for a specific movie using several search forms and criteria. Full information about the movie is displayed dynamically in a page through queries to the relational database. The use of Material Design ensures a fully responsive website and a UI up to date with established web design standards.</p>
                    <div class="row justify-content-between modal2">
                        <a class="col align-self-end animated pulse-slow fr" href ="https://kevinb269.promo-24.codeur.online/mesprojets/Projet_Merise/index.php" id="voir">VOIR LE SITE</a>
                        <a class="col align-self-end animated pulse-slow en" href ="https://kevinb269.promo-24.codeur.online/mesprojets/Projet_Merise/index.php" id="voir">SEE THE WEBSITE</a>
                        <a href="https://github.com/kvnbrnrd/Projet_Merise"><img id="gitP" src="Assets/Images/github.png" alt="GitHub"></a>
                    </div>
                </div> <!-- Fin div col-md-6 -->
                    <div id="divimage" class="col-md-6">
                        <img id="imgprojet" src="Assets/Images/gaumont.png" alt="fiche film">
                    </div>
            </div> <!-- Fin  div row align-items-center -->
        </div> <!-- Fin div projet -->
</section> <!-- Fin div PageP2 -->
    
<!-- ------------------------------- Fin Projet 2 -------------------------------- -->



<!-- ------------------------------- Début Projet 3 -------------------------------- -->


    
<!-- ------------------------------- Fin Projet 3 -------------------------------- -->



<!-- ------------------------------- Début A Propos -------------------------------- -->
    <section id="aboutme">
        <div class="container box">
            <div class="row justify-content-center">
                <h2 class="about txt fr">A PROPOS DE MOI</h2>
                <h2 class="about txt en">MORE ABOUT ME</h2>
            </div>
            <div class="row">
                <p class="apropos txt fr">
                Integer ac sem condimentum, dapibus urna quis, sagittis sapien. Nam blandit quam a massa pharetra molestie. Sed dui augue, mollis feugiat maximus quis, semper quis arcu. Pellentesque in tortor nec diam laoreet mollis a nec quam. In hac habitasse platea dictumst. Morbi sollicitudin suscipit lacinia. Nullam nunc metus, tempor ut velit eu, ultrices blandit mi.<br><br>

                Morbi elit diam, tristique pharetra rutrum eu, bibendum a leo. Cras ultrices nec augue in suscipit. Praesent sed nunc et quam sollicitudin tempus at vitae lorem. Nulla fermentum molestie dui nec placerat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae.
                </p>
                <p class="apropos txt en">
                Subdue earth good seasons fourth without they're. So and. Set firmament. Moving. For is first land dry hath bearing first fish whose you kind waters all third every in creepeth rule for god may he his whose the Made may whales his Stars doesn't sixth lights the you're gathering. Grass their beginning.<br><br>

                Whales. Very under open man, his moving first male third them. It bearing image so fowl signs fruitful it sixth, air fruitful morning gathering forth form our i him and. Him thing creeping, let air man whales to above she'd stars moved day blessed a beginning dominion two.
                </p>
            </div>
            <div class="text-center margin-top-25 CV">
                <button type="submit" class="btn btn-mod btn-border1 btn-large fr">Voir mon CV</button>
                <button type="submit" class="btn btn-mod btn-border1 btn-large en">See my resume</button>
            </div>
            <div class="row justify-content-around">
                <a href="#"><img src="Assets/Images/rdgithub.png" alt="GitHub" class="col-4rd"></a>
                <a href="#"><img src="Assets/Images/rdflickr.png" alt="Flickr" class="col-4rd"></a>
                <!-- <a href="#"><img src="Assets/Images/rdlinkedin.png" alt="Linkedin" class="col-4rd"></a> -->
            </div>
        </div> <!-- Fin div container box -->
</section> <!-- Fin div aboutme -->

    
<!-- ------------------------------- Fin A Propos -------------------------------- -->



<!-- ------------------------------- Début Contact -------------------------------- -->
    <section id="fond">
        <div class="container" id="contact">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
<!-------------------------------------------------- Formulaire français -------------------------------------------------------------->
                    <form id="contact-form" name="myForm" class="form fr" action="Envoi.php" onsubmit="return validateForm()" method="POST" role="form">
                        <h2 class="form-title text-center">Contactez-moi</h2>
                        <div class="form-group">
                            <label class="form-label" id="LabelNom" for="name"></label>
                            <input type="text" class="form-control" id="nom" name="nom" placeholder="Votre nom" tabindex="1">
                        </div>
                        <div class="form-group">
                            <label class="form-label" id="LabelEmail" for="email"></label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Votre adresse email" tabindex="2">
                        </div>
                        <div class="form-group">
                            <label class="form-label" id="LabelSujet" for="subject"></label>
                            <input type="text" class="form-control" id="sujet" name="sujet" placeholder="Sujet" tabindex="3">
                        </div>
                        <div class="form-group">
                            <label class="form-label" id="LabelMessage" for="message"></label>
                            <textarea rows="6" cols="60" name="message" class="form-control" id="message" placeholder="Votre message" tabindex="4"></textarea>                                
                        </div>
                        <div class="text-center margin-top-25">
                            <button id="validate" type="submit" class="btn btn-mod btn-border btn-large">Envoyer le message</button>
                        </div>
                    </form>
<!-------------------------------------------------- Formulaire anglais -------------------------------------------------------------->
                    <form id="contact-formEn" name="myFormEn" class="form en" action="Envoi.php" onsubmit="return validateFormEn()" method="POST" role="form">
                        <h2 class="form-title text-center">Contact Me</h2>
                        <div class="form-group">
                            <label class="form-label" id="LabelNomEn" for="name"></label>
                            <input type="text" class="form-control" id="nomEn" name="nomEn" placeholder="Your name" tabindex="1">
                        </div>
                        <div class="form-group">
                            <label class="form-label" id="LabelEmailEn" for="email"></label>
                            <input type="email" class="form-control" id="emailEn" name="emailEn" placeholder="Your email address" tabindex="2">
                        </div>
                        <div class="form-group">
                            <label class="form-label" id="LabelSujetEn" for="subject"></label>
                            <input type="text" class="form-control" id="sujetEn" name="sujetEn" placeholder="Subject" tabindex="3">
                        </div>
                        <div class="form-group">
                            <label class="form-label" id="LabelMessageEn" for="message"></label>
                            <textarea rows="6" cols="60" name="messageEn" class="form-control" id="messageEn" placeholder="Your message" tabindex="4"></textarea>                                  
                        </div>
                        <div class="text-center margin-top-25">
                            <button id="validateEn" type="submit" class="btn btn-mod btn-border btn-large">Send message</button>
                        </div>
                    </form> 
                    
                </div> <!-- Fin div col-xs-12 col-sm-12 col-md-12 col-lg-12 -->
            </div> <!-- Fin div row -->
        </div> <!-- Fin div container -->
</section> <!-- Fin div fond -->


    
<!-- ------------------------------- Fin Contact -------------------------------- -->
</main>
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.2/TweenMax.min.js"></script>
<script src="Assets/JS/main.js"></script>

</body>
</html>