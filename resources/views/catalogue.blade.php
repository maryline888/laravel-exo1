@extends('master')
@section('title', 'Catalogue-Stampee')
@section('content')
<main>

    <header class="catalogue-recherche-conteneur space">

        <!-- <h3>Catégories populaires</h3> -->
        <section>
            <h1>Catégories populaires</h1>
            <a href="#">Dernière chance</a>
            <a href="#">Le choix du Lord</a>
            <a href="#">Enchère en cours</a>
        </section>
        <form class="radius" action="#" method="get">
            <input class="radius" aria-label="search" name="search" type="text" placeholder="Recherchez des timbres"> <!-- par année, par collections, par couleur... -->
            <button class="radius" aria-label="search" type="submit"><i class="fas fa-search"></i></button>
        </form>
        <div class="grid-icones__items">
            <span class="material-symbols-outlined">
                grid_view
            </span>
            <span class="material-symbols-outlined">
                view_list
            </span>
        </div>
    </header>

    <!-- aside pour la section de recherche avancée  -->
    <!-- valeur des options approximatives, présente pour maquettage   -->

    <section class="catalogue space">
        <aside class="form__filtre--conteneur">
            <h1>Filtrer notre collection</h1>
            <form>
                <div>
                    <label>Status de l'enchère
                        <select name="condition">
                            <option value="">-- Choisir une option --</option>
                            <option value="excellente">En cours</option>
                            <option value="bonne">Dernière chance</option>
                            <option value="moyenne">À venir</option>
                        </select>
                    </label>
                </div>
                <div>
                    <label>Condition
                        <select name="condition">
                            <option value="">-- Choisir une option --</option>
                            <option value="excellente">Excellente</option>
                            <option value="bonne">Bonne</option>
                            <option value="moyenne">Moyenne</option>
                            <option value="endommage">Endommage</option>
                        </select>
                    </label>
                </div>
                <div>
                    <label>Couleur(s)
                        <select name="condition">
                            <option value="">-- Choisir une option --</option>
                            <option value="bleu">Bleu</option>
                            <option value="rouge">Rouge</option>
                            <option value="vert">Vert</option>
                        </select>
                    </label>
                </div>
                <div>
                    <label>Pays d’origine
                        <select name="country">
                            <option value="">-- Choisir une option --</option>
                            <option value="france">France</option>
                            <option value="espagne">Espagne</option>
                            <option value="italie">Italie</option>
                        </select>
                    </label>
                </div>
                <div>
                    <label>Dimension (en cm)
                        <select name="dimension">
                            <option value="">-- Choisir une option --</option>
                            <option value="petit">Moins de 50 cm</option>
                            <option value="moyen">Entre 50 et 100 cm</option>
                            <option value="grand">Plus de 100 cm</option>
                        </select>
                    </label>
                </div>
                <div>
                    <label>Certifié
                        <select name="certifie">
                            <option value="">-- Choisir une option --</option>
                            <option value="oui">Oui</option>
                            <option value="non">Non</option>
                            <option value="peu-importe">Peu importe</option>
                        </select>
                    </label>
                </div>
                <button class="form__filtre--submit" type="submit">Rechercher</button>
            </form>
        </aside>

        <section class="cartes_grille">
            <div class="carte">
                <header class="carte__conteneur carte__header">
                    <span class="material-symbols-outlined carte-icone ">
                        favorite
                    </span>
                    <img src="./assets/images/s.webp" loading="lazy" alt="Timbre illustrant un homme en bleu de profil" class="carte-image">
                </header>
                <div class="carte-contenu">
                    <h1 class="carte-titre">Lots 198277</h1>
                    <div class="carte-mise">
                        <p>Mise actuelle : <span>3.67$</span></p>
                    </div>
                    <p class="carte-texte">
                        G.R.I. 1914 (14th November) 3d on 25pf, SG 7, first setting position 1, on a 'Wallack'
                        envelope tied by violet two line</p>
                </div>
                <footer class="carte__conteneur carte__zone-action">
                    <button class="bouton carte__zone-action__item">Miser</button>
                </footer>
            </div>
            <div class="carte">
                <header class="carte__conteneur carte__header">
                    <span class="material-symbols-outlined carte-icone ">
                        favorite
                    </span>
                    <img src="./assets/images/t5.webp" loading="lazy" alt="Timbre rare d'un vieil homme de profil" class="carte-image">
                </header>
                <div class="carte-contenu">
                    <h1 class="carte-titre">Lots 198277733-92828</h1>
                    <div class="carte-mise">
                        <p>Mise actuelle : <span>20.98$</span></p>
                    </div>
                    <p class="carte-texte">
                        G.R.I. 1914 (14th November) 3d on 25pf, SG 7, first setting position 1, on a 'Wallack'
                        envelope tied by violet two line</p>
                </div>
                <footer class="carte__conteneur carte__zone-action">
                    <button class="bouton carte__zone-action__item">Miser</button>
                </footer>
            </div>
            <div class="carte">
                <header class="carte__conteneur carte__header">
                    <span class="material-symbols-outlined carte-icone ">
                        favorite
                    </span>
                    <img src="./assets/images/s1.webp" loading="lazy" alt="Timbre rouge avec un homme de profil" class="carte-image">
                </header>
                <div class="carte-contenu">
                    <h1 class="carte-titre">Lots 1929-wlq-222w</h1>
                    <div class="carte-mise">
                        <p>Mise actuelle : <span>10.50$</span></p>
                    </div>
                    <p class="carte-texte">
                        Postes Canada a émis un nouveau timbre pour souligner les 60 ans de règne de la reine
                        ...
                    </p>
                </div>
                <footer class="carte__conteneur carte__zone-action">
                    <button class="bouton carte__zone-action__item">Miser</button>

                </footer>
            </div>
            <div class="carte">
                <header class="carte__conteneur carte__header">
                    <span class="material-symbols-outlined carte-icone ">
                        favorite
                    </span>
                    <img src="./assets/images/s2.webp" loading="lazy" alt="Timbre avec un portrait d'une femme" class="carte-image">
                </header>
                <div class="carte-contenu">
                    <h1 class="carte-titre">Lots 78290xxxos ssi 1123</h1>
                    <div class="carte-mise">
                        <p>Mise actuelle : <span>100.98$</span></p>
                    </div>
                    <p class="carte-texte">
                        1935 Jubilé d'argent de George V - Couleur Vert - Dessinateur : Ford, William F.
                        (1892-1962), Gun</p>
                </div>
                <footer class="carte__conteneur carte__zone-action">
                    <button class="bouton carte__zone-action__item">Miser</button>
                </footer>
            </div>
            <div class="carte">
                <header class="carte__conteneur carte__header">
                    <span class="material-symbols-outlined carte-icone ">
                        favorite
                    </span>
                    <img src="./assets/images/s3.webp" loading="lazy" alt="Timbre avec big ben" class="carte-image">
                </header>
                <div class="carte-contenu">
                    <h1 class="carte-titre">Lots 1982777333333092828</h1>
                    <div class="carte-mise">
                        <p>Mise actuelle : <span>55.75$</span></p>
                    </div>
                    <p class="carte-texte">
                        US Stamp #241 Mint Regummed with PSE Certificate stating "It is genuine unused,
                        Regummed,
                        reperforated at the left"</p>
                </div>
                <footer class="carte__conteneur carte__zone-action">
                    <button class="bouton carte__zone-action__item">Miser</button>
                </footer>
            </div>
            <div class="carte">
                <header class="carte__conteneur carte__header">
                    <span class="material-symbols-outlined carte-icone ">
                        favorite
                    </span>
                    <img src="./assets/images/s4.webp" loading="lazy" alt="Timbre avec le portrait de la reine" class="carte-image">
                </header>
                <div class="carte-contenu">
                    <h1 class="carte-titre">Lots 1982777333333092828</h1>
                    <div class="carte-mise">
                        <p>Mise actuelle : <span>550.75$</span></p>
                    </div>
                    <p class="carte-texte">
                        G.R.I. 1914 (14th November) 3d on 25pf, SG 7, first setting position 1, on a 'Wallack'
                        envelope tied by violet two line</p>
                </div>
                <footer class="carte__conteneur carte__zone-action">
                    <button class="bouton carte__zone-action__item">Miser</button>
                </footer>
            </div>
            <div class="carte">
                <header class="carte__conteneur carte__header">
                    <span class="material-symbols-outlined carte-icone ">
                        favorite
                    </span>
                    <img src="./assets/images/t1.webp" loading="lazy" alt="Timbre de st-pierre et miquelon" class="carte-image">
                </header>
                <div class="carte-contenu">
                    <h1 class="carte-titre">Lots 1982777333333092828</h1>
                    <div class="carte-mise">
                        <p>Mise actuelle : <span>111.55$</span></p>
                    </div>
                    <p class="carte-texte">
                        US Stamp #243a Mint Regummed Olive Green with PSE Certificate stating "It is genuine
                        unused,
                        regummed, with a small filled thin at the top left and reperforated at the bottom</p>
                </div>
                <footer class="carte__conteneur carte__zone-action">
                    <button class="bouton carte__zone-action__item">Miser</button>
                </footer>
            </div>
            <div class="carte">
                <header class="carte__conteneur carte__header">
                    <span class="material-symbols-outlined carte-icone ">
                        favorite
                    </span>
                    <img src="./assets/images/t11.webp" loading="lazy" alt="Timbre avec un phoque " class="carte-image">
                </header>
                <div class="carte-contenu">
                    <h1 class="carte-titre">Lots 1982777333333092828</h1>
                    <div class="carte-mise">
                        <p>Mise actuelle : <span>355.75$</span></p>
                    </div>
                    <p class="carte-texte">
                        G.R.I. 1914 (14th November) 3d on 25pf, SG 7, first setting position 1, on a 'Wallack'
                        envelope tied by violet two line</p>
                </div>
                <footer class="carte__conteneur carte__zone-action">
                    <button class="bouton carte__zone-action__item">Miser</button>

                </footer>
            </div>
            <div class="carte">
                <header class="carte__conteneur carte__header">
                    <span class="material-symbols-outlined carte-icone ">
                        favorite
                    </span>
                    <img src="./assets/images/t12.webp" loading="lazy" alt="TImbre vert avec un poisson" class="carte-image">
                </header>
                <div class="carte-contenu">
                    <h1 class="carte-titre">Lots 1982777333333092828-0989873hx ndhnhhhsd hh</h1>
                    <div class="carte-mise">
                        <p>Mise actuelle : <span>35.75$</span></p>
                    </div>
                    <p class="carte-texte">
                        G.R.I. 1914 (14th November) 3d on 25pf, SG 7, first setting position 1, on a 'Wallack'
                        envelope tied by violet two line</p>
                </div>
                <footer class="carte__conteneur carte__zone-action">
                    <button class="bouton carte__zone-action__item">Miser</button>

                </footer>
            </div>
            <div class="carte">
                <header class="carte__conteneur carte__header">
                    <span class="material-symbols-outlined carte-icone ">
                        favorite
                    </span>
                    <img src="./assets/images/t13.webp" loading="lazy" alt="Timbre bleu d'un duc" class="carte-image">
                </header>
                <div class="carte-contenu">
                    <h1 class="carte-titre">Lots W-get-12345</h1>
                    <div class="carte-mise">
                        <p>Mise actuelle : <span>79.79$</span></p>
                    </div>
                    <p class="carte-texte">
                        BECHUANALAND - 1904-13 1s green & carmine 'SPECIMEN' opt, SG 71s, vfm, fresh </p>
                </div>
                <footer class="carte__conteneur carte__zone-action">
                    <button class="bouton carte__zone-action__item">Miser</button>

                </footer>
            </div>
            <div class="carte">
                <header class="carte__conteneur carte__header">
                    <span class="material-symbols-outlined carte-icone ">
                        favorite
                    </span>
                    <img src="./assets/images/t10.webp" loading="lazy" alt="Timbre d'un portrait d'une femme " class="carte-image">
                </header>
                <div class="carte-contenu">
                    <h1 class="carte-titre">Lots asdfghjkl990</h1>
                    <div class="carte-mise">
                        <p>Mise actuelle : <span>3.45$</span></p>
                    </div>
                    <p class="carte-texte">
                        G.R.I. 1914 (14th November) 3d on 25pf, SG 7, first setting position 1, on a 'Wallack'
                        envelope tied by violet two line</p>
                </div>
                <footer class="carte__conteneur carte__zone-action">
                    <button class="bouton carte__zone-action__item">Miser</button>
                </footer>
            </div>
            <div class="carte">
                <header class="carte__conteneur carte__header">
                    <span class="material-symbols-outlined carte-icone ">
                        favorite
                    </span>
                    <img src="./assets/images/t15.webp" loading="lazy" alt="Timbre rare avec un dessin" class="carte-image">
                </header>
                <div class="carte-contenu">
                    <h1 class="carte-titre">Lots 1-wser-88674</h1>
                    <div class="carte-mise">
                        <p>Mise actuelle : <span>155.49$</span></p>
                    </div>
                    <p class="carte-texte">
                        G.R.I. 1914 (14th November) 3d on 25pf, SG 7, first setting position 1, on a 'Wallack'
                        envelope tied by violet two lineon a 'Wallack'
                        envelope tied by violet two line</p>
                </div>
                <footer class="carte__conteneur carte__zone-action">
                    <button class="bouton carte__zone-action__item">Miser</button>

                </footer>
            </div>
        </section>
    </section>

    <div class="catalogue-grille-icones">
        <!-- <div class="grid-white"></div> -->
        <ul>
            <li>1</li>
            <li>2</li>
            <li>3</li>
        </ul>
    </div>
</main>
@endsection