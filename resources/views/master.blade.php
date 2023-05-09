<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="author" contenu="M Carrier & X Paulin">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <script type="module" src="./assets/JS/main.mjs"></script>
    <title>Stampee</title>
</head>

<body>
    <label class="cache" for="nav-trigger">Menu hamburger</label>
    <input name="trigger" id="nav-trigger" type="checkbox">
    <header class="header">
        <nav role="menubar" class="nav-haut">
            <ul role="menu">
                <li role="presentation"><a role="menuitem" href="#">Lord Stampee</a></li>
                <li role="presentation"><a role="menuitem" href="#">Aide</a></li>
                <li role="presentation"><a role="menuitem" href="connexion">Se connecter </a></li>
                <li role="presentation"><a role="menuitem" href="formInscription">Devenir membre</a></li>
            </ul>
        </nav>

        <div class="menu-logo">
            <a href="index">
                <img class="logo" src="assets/images/logo-Stampee-lettre.webp" loading="lazy" alt="Mon logo">
            </a>
        </div>

        <div class="menu-ctn">
            <nav class="nav" role="menubar">
                <a href="index" role="menuitem" class="menu-my-account menu-space">Accueil</a>
                <div id="enchereDeroulant" class="menu-deroulant closed">
                    <span id="enchere" role="menuitem" class="menu-space">Enchères <i class="fa fa-chevron-down"></i></span>
                    <div>
                        <!-- <a role="menuitem" href="/catalogue">Rare et intéressant</a>
                        <a role="menuitem" href="/catalogue">Choix d'un expert</a> -->
                        <a role="menuitem" href="catalogue">Archive</a>
                        <a role="menuitem" href="formEnchere">Faire une enchère</a>
                    </div>
                </div>
                <div id="collectionDeroulant" class="menu-deroulant closed">
                    <span id="collection" role="menuitem" class="menu-space">Collections <i class="fa fa-chevron-down"></i></span>
                    <div>
                        <a role="menuitem" href="catalogue">Timbres rares</a>
                        <a role="menuitem" href="catalogue">Timbres de collection</a>
                        <a role="menuitem" href="catalogue">Accessoires de collection</a>
                    </div>
                </div>
                <a href="#" role="menuitem" class="menu-my-account menu-space">Acheter</a>
                <a href="#" role="menuitem" class="menu-my-account menu-space">Vendre</a>
                <div>
                    <a href="#" role="menuitem" class="menu-my-account menu-space">Contactez-nous</a>
                </div>
                <div class="nav-haut-important">
                    <a role="menuitem" href="connexion">Se connecter </a>
                    <a role="menuitem" href="formInscription">Devenir membre</a>
            </nav>
        </div>
    </header>
    @yield('content')
    <footer>
        <section class=" footer__action ">
            <a href="#">
                <h1> Besoin d'aide?</h1>
            </a>
            <a href="#">
                <h1>Contactez-nous Aujourd'hui</h1>
            </a>
            <div>
                <span class=" material-symbols-outlined">
                    <svg class="icones-footer" xmlns="http://www.w3.org/2000/svg" height="40" width="40" viewBox="0 0 24 24" fill="currentColor" color="">
                        <path d="M0 0h24v24H0z" fill="none" opacity=".1" />
                        <path d="M12 1a9 9 0 00-9 9v7c0 1.66 1.34 3 3 3h3v-8H5v-2c0-3.87 3.13-7 7-7s7 3.13 7 7v2h-4v8h4v1h-7v2h6c1.66 0 3-1.34 3-3V10a9 9 0 00-9-9z" />
                    </svg>
                </span>
                <span class="material-symbols-outlined">
                    <svg class="icones-footer" xmlns="http://www.w3.org/2000/svg" height="40" width="40" viewBox="0 0 24 24" fill="currentColor" color="">
                        <path d="M0 0h24v24H0z" fill="none" />
                        <path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z" />
                    </svg>
                </span>
            </div>
            <p>Notre équipe est disponible par téléphone du lundi au vendredi de 9:00 à 17:00. </p>
            <p>Vous pouvez nous écrire en tout temps et nous vous répondrons dans un délais de 24hrs ouvrables.</p>
        </section>
        <div class="footer-contenu">
            <div class="footer-logo">
                <a href="index">
                    <img class="" src="assets/images/logo-Stampee.webp" loading="lazy" alt="Mon logo">
                </a>
            </div>
            <section class="footer-nav-conteneur">
                <div class="footer-nav">
                    <h2 id="lord">Lors Stampee III</h2>
                    <a class="lord" href="#">Biographie</a>
                    <a class="lord" href="#">La philatélie, c'est la vie</a>
                    <a class="lord" href="#">Histoire familial</a>
                    <a class="lord" href="#">Coup de coeur</a>
                    <a class="lord" href="#">Termes et Conditions</a>
                </div>
                <div class="footer-nav">
                    <h2>Aide</h2>
                    <a href="#">Profil</a>
                    <a href="#">Comment placer une enchère</a>
                    <a href="#">Suivre une enchère</a>
                    <a href="#">Trouver une enchère</a>
                    <a href="#">Contacter le webmestre</a>
                </div>
                <div class="footer-nav">
                    <h2>Contactez-nous</h2>
                    <a href="#">Angleterre</a>
                    <a href="#">Canada</a>
                    <a href="#">US</a>
                    <a href="#">Australie</a>
                </div>
                <div class="footer-nav">
                    <h2>Actualités</h2>
                    <a href="#">Archives</a>
                    <a href="catalogue">Enchères</a>
                    <a href="#">Bridge</a>
                    <a href="catalogue">Timbres</a>
                </div>
            </section>
            <div class="footer-courriel">
                <h1 class="footer-courriel-h1">Abonnez-vous à notre info-lettre</h1>
                <form action="#" method="post">
                    <input aria-label="footer-courriel" type="email" name="email" placeholder="Votre adresse courriel">
                    <span class="footer-btn-lien">ABONNEZ-VOUS</span>
                </form>
            </div>
            <div class="footer-contenu">
                <div class="footer-social">
                    <h1 class="footer-h3">Suivez-nous</h1>
                    <ul class="footer-social-icones">
                        <li><a aria-label="Facebook" href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a aria-label="LinkedIn" href="https://www.linkedin.com/" target="_blank"><i class="fab fa-linkedin"></i></a></li>
                        <li><a aria-label="Instagram" href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                </div>
                <div class="footer-bottom">
                    <p>Copyright @2023 | Designed by MCXP
                    </p>
                </div>
            </div>
        </div>
    </footer>

</body>

</html>