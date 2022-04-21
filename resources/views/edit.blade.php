@extends('layouts.app')
@section('title') Modifier un produit @endsection

@section('body')
	<h2>Modifier un produit</h2>

	<form action="{{ route('product.edit.post') }}" method="post">
		@csrf
		<input type="hidden" name="id" value="{{ $product->id }}">
		<input type="text" name="title" placeholder="Titre" value="{{ $product->title }}">
		<input type="text" name="shop" placeholder="Boutique d'origine" value="{{ $product->shop }}">
		<input type="number" step="any" name="price" placeholder="Prix" value="{{ $product->price }}">
		<button type="submit">Enregistrer</button>
		<a href="{{ route('product.delete', ['id' => $product->id]) }}" onclick="return confirm('Vraiment supprimer ?');">Supprimer</a>
	</form>
@endsection
