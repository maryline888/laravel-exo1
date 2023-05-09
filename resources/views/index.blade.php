@extends('master')
@section('title', 'Acceuil')
@section('content')
<main>
    <section class="hero">
        <img src="assets/images/hero800.webp" alt="Description de l'image">
        <div class="hero-texte-img">
            <p>"Pour les collections, par les collectionneurs. Des millions de listes provenant des vendeurs de
                timbres les plus fiables dans le monde."</p>
        </div>
    </section>

    <header>
        <div class="recherche-conteneur">
            <form class="radius" action="#" method="get">
                <input class="radius" aria-label="search" name="search" type="text" placeholder="Recherchez timbres ...">
                <button class="radius" aria-label="search" type="submit"><i class="fas fa-search"></i></button>
            </form>
        </div>
    </header>
    <section class="carrousel margin-bt space">
        <h1>Notre collections de timbres rares</h1>
        <div class="carrousel-btn">
            <span class="prec-btn"><img src="assets/images/materialui-left.svg"" width=" 32" height="32" alt="fleche qui point à gauche" class="survol"></span>
            <span class="suiv-btn "><img class="survol" src="assets/images/materialui.svg" width="32" height="32" alt="fleche qui point à droite"></span>
        </div>
        <div class="carrousel-conteneur">
            <div>
                <img src="assets/images/stamp1.webp" loading="lazy" alt="Photo d'un timbre rare de penny black">
                <p class="timbre-name">Penny Black</p>
                <p class="timbre-price">$250,000</p>
            </div>
            <div>
                <img src="assets/images/stamp7.webp" loading="lazy" alt="Photo d'un timbre rare inverted Jenny">
                <p class="timbre-name">Inverted Jenny</p>
                <p class="timbre-price">$1,593,000</p>
            </div>
            <div>
                <img src="assets/images/stamp5.webp" loading="lazy" alt="Photo d'un timbre rare Treskilling Yellow">
                <p class="timbre-name">Treskilling Yellow</p>
                <p class="timbre-price">$2,500,000</p>
            </div>
            <div>
                <img src="assets/images/rare4.webp" loading="lazy" alt="Photo d'un timbre rare British Guiana">
                <p class="timbre-name">British Guiana</p>
                <p class="timbre-price">$9000 USD</p>
                <span class="vignette-cote">Nouveau!</span><!-- UN ESSAI,calme toi lol -->
            </div>
            <div>
                <img src="assets/images/rare2.webp" loading="lazy" alt="Photo d'un timbre rare Basel Dove">
                <p class="timbre-name">Basel Dove</p>
                <p class="timbre-price">$400 USD</p>
            </div>
            <div>
                <img src="assets/images/stamp8.webp" loading="lazy" alt="Photo d'un timbre rare Hawaiian Missionnaries">
                <p class="timbre-name">Hawaiian Missionaries</p>
                <p class="timbre-price">$7600</p>
            </div>
            <div>
                <img src="assets/images/rare3.webp" loading="lazy" alt="Photo d'un timbre rare">
                <p class="timbre-name">Hawaiian Missionaries</p>
                <p class="timbre-price">$7600</p>
            </div>
            <div>
                <img src="assets/images/rare.webp" loading="lazy" alt="Photo d'un timbre rare lot 2249">
                <p class="timbre-name">Lot 2249 (Kwik-Bid #4345)</p>
                <p class="timbre-price">$760</p>
            </div>

        </div>
    </section>
    <section class="margin-bt">
        <div class="grille-texte space">
            <article class="grille-carte-texte">
                <h1>Tout sur les timbres</h1>
                <p> Notre marché est conçu dès le départ pour comprendre les collectionneurs.</p>
            </article>
            <article class="grille-carte-texte">
                <h1>Vendeurs de confiance</h1>
                <p> STAMPEE reçoit plus de 200 collections par année! Chaque achat est couvert par la protection
                    de l'acheteur PayPal.</p>
            </article>
            <article class="grille-carte-texte">
                <h1>6 000 000 de timbres</h1>
                <p> Parcourez une vaste collection de plus de six millions de timbres du monde entier.</p>
            </article>
        </div>
    </section>
    <section class="form_action margin-bt space">
        <img src=" ./assets/images/s.webp" loading="lazy" alt="img timbre ">
        <div>
            <h1>Soyez les premiers informé.</h1>
            <p>Incrivez-vous à notre info-lettre. </p>
            <p>Recevez en primeur nos timbres lots mis à l'enchère.</p>
            <form action="#" method="post" class="">
                <input aria-label="email" type="email" name="email" placeholder="Votre adresse email">
                <span class="btn">ABONNEZ-VOUS</span>
            </form>
        </div>
    </section>
    <section class="carrousel margin-bt space">
        <h1>
            Les enchères sur le point de se terminer
        </h1>
        <div class="carrousel-btn">
            <span class="prec-btn"><img src="assets/images/materialui-left.svg" width="32" height="32" alt="fleche qui point à gauche" class="survol"></span>
            <span class="suiv-btn "><img class="survol" src="assets/images/materialui.svg" width="32" height="32" alt="fleche qui point à droite"></span>
        </div>
        <div class="carrousel-conteneur">
            <div>
                <img src="assets/images/t12.webp" loading="lazy" alt="Timbre rare avec homme de profil ">
                <p class="timbre-name">Timbre Bleu de Lorraine</p>
                <p class="timbre-price">800 000 $</p>
            </div>
            <div>
                <img src="assets/images/s1.webp" loading="lazy" alt="Photo d'un timbre rare rouge avec femme de profil">
                <p class="timbre-name">Timbre Deux-Siciles de 1859</p>
                <p class="timbre-price">2 200 000 $</p>
            </div>
            <div>
                <img src="assets/images/s2.webp" loading="lazy" alt="Timbre rare et vieux d'une dame">
                <p class="timbre-name">Timbre du Cap de Bonne Espérance</p>
                <p class="timbre-price">5 000 000 $</p>
            </div>
            <div>
                <img src="assets/images/t15.webp" loading="lazy" alt="Photo d'un timbre rare">
                <p class="timbre-name">Timbre de Hong Kong de 1862</p>
                <p class="timbre-price">20 000 $ USD</p>
                <span class="vignette-cote">Choix du Lord</span>
            </div>
            <div>
                <img src="assets/images/t1.webp" loading="lazy" alt="Photo d'un timbre rare bleu avec un homme qui regarde à de profil">
                <p class="timbre-name">Timbre King George V Rouge</p>
                <p class="timbre-price">600 $</p>
            </div>
            <div>
                <img src="assets/images/s4.webp" loading="lazy" alt="Photo d'un timbre rare rouge">
                <p class="timbre-name">Timbre Bavarois de 1849</p>
                <p class="timbre-price">1 500 $</p>
            </div>
            <div>
                <img src="assets/images/s3.webp" loading="lazy" alt="Photo d'un timbre rare de 1850">
                <p class="timbre-name">Timbre Prussien de 1850</p>
                <p class="timbre-price">2 000 $</p>
            </div>
            <div>
                <img src="assets/images/t11.webp" loading="lazy" alt="Photo d'un timbre rare de 1943">
                <p class="timbre-name">Timbre de la Confédération Suisse de 1843</p>
                <p class="timbre-price">900 $</p>
            </div>

        </div>
    </section>
    <div class="flex-convaincre space margin-bt">
        <article class="grille-carte-texte">
            <h1 class="">55000 utilisateurs</h1>
            <p>Rejoignez la communauté Stampee ! </p>
            <p>Commencez à miser dès maintenant.</p>
            <!-- lien style bouton -->
            <a class="btn-lien" href="#">Je veux m'inscrire</a>
        </article>
        <article class="grille-carte-texte">
            <h1>Besoin d'aide?</h1>
            <p>Communiquer avec notre équipe par téléphone </p>
            <p>Envoyez-nous
                un message, il nous fera plaisir de vous assister </p>
            <!-- lien style bouton -->
            <a class="btn-lien" href="#">J'ai besoin d'aide</a>
        </article>
    </div>
    <section class="promo-text-grid space margin-bt">
        <h1>Notre <em>livraison GRATUITE</em> partout à travers le monde!</h1>
        <h2>Vous ne serez pas facturé un centime pour l'expédition!</h2>
        <p>Tous les lots que vous remportez expédiés gratuitement dans le monde entier. </p>
        <p>Visitez la foire aux questions pour plus de
            détails</p>

        <a href="#">FAQ</a>
    </section>
    <article class="texte-img-conteneur margin-bt">
        <img class="texte-img-collection" src="./assets/images/collection.webp" loading="lazy" alt="page d'une collection de timbres">
        <div class="texte-img">
            <h1 class="texte-img-h1">Le Saviez-vous?</h1>
            <h1 class="text-img-titre">Il est possible de vendre vos timbres!</h1>
            <p class="texte-img-p">
                Lord Stampee se fera un plaisir d'évaluer votre collection et de vous
                en faire une offre!!!
            </p>
            <a href="#" class="btn-lien">Voir les détails</a>
        </div>
    </article>
    <section class="carrousel margin-bt space">
        <h1>Notre collections "les choix du Lord"</h1>
        <div class="carrousel-btn">
            <span class="prec-btn"><img src="assets/images/materialui-left.svg" width="32" height="32" alt="fleche qui point à gauche" class="survol"></span>
            <span class="suiv-btn "><img class="survol" src="assets/images/materialui.svg" width="32" height="32" alt="fleche qui point à droite"></span>
        </div>
        <div class="carrousel-conteneur">
            <div>
                <img src="assets/images/t12.webp" loading="lazy" alt="">
                <p class="timbre-name">Penny Black</p>
                <p class="timbre-price">$250,000</p>
            </div>
            <div>
                <img src="assets/images/s1.webp" loading="lazy" alt="">
                <p class="timbre-name">Inverted Jenny</p>
                <p class="timbre-price">$1,593,000</p>
            </div>
            <div>
                <img src="assets/images/s2.webp" loading="lazy" alt="">
                <p class="timbre-name">Treskilling Yellow</p>
                <p class="timbre-price">$2,500,000</p>
            </div>
            <div>
                <img src="assets/images/t15.webp" loading="lazy" alt="">
                <p class="timbre-name">British Guiana</p>
                <p class="timbre-price">$9000 USD</p>
                <span class="vignette-cote">Choix du Lord</span>
            </div>
            <div>
                <img src="assets/images/t1.webp" loading="lazy" alt="">
                <p class="timbre-name">Basel Dove</p>
                <p class="timbre-price">$400 USD</p>
            </div>
            <div>
                <img src="assets/images/s4.webp" loading="lazy" alt="">
                <p class="timbre-name">Hawaiian Missionaries</p>
                <p class="timbre-price">$7600</p>
            </div>
            <div>
                <img src="assets/images/s3.webp" loading="lazy" alt="">
                <p class="timbre-name">Hawaiian Missionaries</p>
                <p class="timbre-price">$7600</p>
            </div>
            <div>
                <img src="assets/images/t11.webp" loading="lazy" alt="">
                <p class="timbre-name">Lot 2249 (Kwik-Bid #4345)</p>
                <p class="timbre-price">$760</p>
            </div>
        </div>
    </section>
    <!-- presentation du lord -->
    <article class="texte-img-conteneur">
        <img class="texte-img_portrait" src="./assets/images/a.webp" loading="lazy" alt="portrait du lord stampee">
        <div class="texte-img">
            <h1 class="texte-img-h1">À propos</h1>
            <h1 class="texte-img-h1">Lord Reginald Stamppe</h1>
            <h1 class="texte-img-sous-titre">Fondateur et propriétaire</h1>
            <p class="texte-img-p">
                Avec plus de 60 ans d'expériences en philatellie classique, sa passion pour les timbres a
                emmener le
                Lord à faire le tour du monde et sa collection personnel est des plus impressionnante.
                Il collabore avec les plus grand philatéliste afin de créer le plus grand réseau d'enchère en
                1949.....
            </p>
            <a href="#" class="btn-lien">Lire la suite</a>
        </div>
    </article>
</main>
@endsection