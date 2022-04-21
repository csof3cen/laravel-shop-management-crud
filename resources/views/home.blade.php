@extends('layouts.app')
@section('title') Accueil - {{ $appName }} @endsection

@section('body')
	<h2>Créer un nouveau produit</h2>

	<form action="{{ route('home') }}" method="post">
		@csrf
		<input type="text" name="title" placeholder="Titre">
		<input type="text" name="shop" placeholder="Boutique d'origine">
		<input type="number" step="any" name="price" placeholder="Prix">
		<button type="submit">Créer</button>
	</form>
@endsection
