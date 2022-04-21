@extends('layouts.app')
@section('title') Afficher les produits @endsection

@section('body')
	<h2>Afficher les produits</h2>
	@if($product)
		<h3>Produit : {{ $product->title }}</h3>
		<h3>Boutique d'origine : {{ $product->shop }}</h3>
		<h3>Prix : {{ $product->price }}</h3>
		<a href="{{ route('product.edit', ['id' => $product->id]) }}">Editer</a>
		<a href="{{ route('product.delete', ['id' => $product->id]) }}" onclick="return confirm('Vraiment supprimer ?');">Supprimer</a>
	@else
		<h3>Aucun produit trouvé !</h3>
	@endif
@endsection
