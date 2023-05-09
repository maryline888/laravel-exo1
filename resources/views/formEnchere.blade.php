@extends('master')
@section('title', 'Enchere - Stampee')
@section('content')
<main>
    <section class="section-enchere space margin-top-petit">
        @isset($data)
        <h1>Informations concernant votre enchère</h1>
        <p><strong>Date de debut: </strong>{{ $data->date_debut }}</p>
        <p><strong>Date de fin: </strong>{{ $data->date_fin }}</p>
        <p><strong>Prix de base: </strong>{{ $data->prix_plancher }}</p>
        <p><strong>Nom du timbre: </strong>{{ $data->nom }}</p>
        <p><strong>Année: </strong>{{ $data->date_creation }}</p>
        <p><strong>Couleur: </strong>{{ $data->couleur }}</p>
        <p><strong>Pays d'origine: </strong>{{ $data->pays_origine }}</p>
        <a href="/index" role="menuitem" class="btn-lien">Retour à la page d'accueil</a>
        @else
        <form enctype="multipart/form-data" class="form-enchere" action="" method="post">
            @csrf
            <input type="hidden" name="utilisateur_id" value="">
            <h1>Plateforme d'enchère</h1>

            <label for="date_debut">Date pour la fin de l'enchère</label>
            <input type="date" id="date_debut" name="date_debut" value="">

            <label for="date_fin">Date pour la fin de l'enchère</label>
            <input type="date" id="date_fin" name="date_fin" value="">

            <label>Prix de base pour votre enchère</label>
            <input name="prix_plancher" value="">
            <h1 class="margin-top-petit">Informations concernant votre timbre</h1>

            <label>Nom</label>
            <input type="text" name="nom" value="">

            <label>Année</label>
            <input type="text" name="date_creation" value="">

            <label>Couleur</label>
            <input type="text" name="couleur" value="">


            <label>Pays d'origine</label>
            <input type="text" name="pays_origine" value="">

            <input class="btn-lien" type="submit" name="" value="Envoyé">
        </form>
        @endisset
    </section>
</main>
@endsection