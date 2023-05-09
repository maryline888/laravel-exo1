@extends('master')
@section('title', 'Connexion')
@section('content')
<section class="section-connexion">

    <h1>
        <span class="spanErreur" id="messageErreurn"></span>
    </h1>

    <form name="frmConnexion" class="form-connexion" method="POST" action="">
        <h1>Connexion</h1>

        <span class="erreur" id="messageErreurConnexion"></span>

        <label>Courriel</label>
        <input name="utilisateur_courriel" value="">

        <label>Mot de passe</label>
        <input type="password" name="utilisateur_mdp" value="">


        <input type="submit" class="btn-lien margin-top-petit" value="Envoyer">

    </form>

    <div class="div-connexion">

        <h1>Pas encore membre ?</h1>

        <a href="inscription" class="btn-lien">Je veux m'inscrire</a>
    </div>

</section>
@endsection