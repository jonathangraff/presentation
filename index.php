<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jonathan GRAFF</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- COUVERTURE -->
    <div class="cover">
        <img class="cover-profile" src="profile.png"/>
        <h1>Jonathan GRAFF</h1>
        <p>Développeur</p>
        
        <div style="text-align: center;">
            <a class="contact-button" href="mailto:jonathan.graff@hotmail.fr?subject=Contact">ME CONTACTER</a>
        </div>
        <div class="cover-contact">
            <p><a href="mailto:jonathan.graff@hotmail.fr?subject=Contact">jonathan.graff@hotmail.fr</a></p>
            <p><a href="tel:+33766474681">07 66 47 46 81</a></p>
        </div>
    </div>
    <!-- MENU -->
    <!-- <nav>
        <ul class = menu1>
            <li><a href=#>Accueil</a></li>
            <li><a href=#>Portfolio </a>
                <ul class="sous">
                    <li><a href=portfolio-application-mobile-ai.html>Port1</a></li>
                    <li><a href=#>Port2</a></li>
                </ul>
            </li>
            <li><a href=#>CV</a></li>
            <li><a href=#>Contact</a></li>
        </ul>
    </nav> -->
    <?php include "menu.html";?>

    <!-- SECTION GRISE 1 -->
    <div class="section section-grise1">
        <div class="separateur"></div>
        <p>Je développe <b>votre projet WEB</b> ou vos <b>Applications mobiles</b> iOS/Android de A à Z</p>
    </div>
    <div class="separation1"></div>

    <!-- SECTION BLANCHE -->
    <div class="section">
        <h2>En savoir plus</h2>
        <img src="profile2.jpg" class="col-contenu"/>
        <div class="col-contenu float-right">
            <div class="texte-avec-ligne-verticale">
                <p>Passionné par la programmation depuis le plus jeune age, je suis maintenant développeur professionnel avec plus de 16 ans d’expérience.<br><br>
                    Expert dans les domaines du <b>web</b> et des <b>applications mobiles</b>, je propose mes services personnalisés pour des missions freelance.</p>
                <a href="https://www.linkedin.com/in/jonathan-graff" target="_blank">Mon Profil LinkedIn</a>
                <a href="CV.pdf" target="_blank">Mon CV</a>
            </div>
        </div>
        
    </div>
    <div class="separation2"></div>

    <!-- SECTION GRISE 2 -->
    <div class="section section-grise2">
        <h2>Portfolio</h2>
        <table class="col-portfolio" style="display:inline-block">
            <tr>
                <td><div class="barre-verticale"></div></td>
                <td style="width:100%;"><a href="portfolio-site-restaurant.html"><img style="width:100%" src="project1small.jpg"></a></td>
            </tr>
            <tr>
                <td></td>
                <td align="center"><a href="portfolio-site-restaurant.html">Site web pour un restaurant</a></td>
            </tr>
        </table>
        <table  class="col-portfolio float-right">
            <tr>
                <td><div class="barre-verticale"></div></td>
                <td style="width:100%;"><a href="portfolio-application-mobile-ai.html"><img style="width:100%" src="project2small.jpg"></a></td>
            </tr>
            <tr>
                <td></td>
                <td align="center"><a href="portfolio-application-mobile-ai.html">Application mobile "Intelligence artificielle"</a></td>
            </tr>
        </table>
    </div>
<!-- SECTION FIN -->
<div class="fin"></div>
    <!-- SECTION BLANCHE FRAME -->
    <iframe src="contact-frame.html" scrolling="no"/>
</body>
</html>