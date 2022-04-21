@extends('layouts.app')
@section('title') Afficher les produits @endsection

@section('body')
	<h2>Afficher les produits</h2>
	@if($products->count() > 0)
		@foreach ($products as $product)
			<h3><a href="{{ route('product.show.unique', ['id' => $product->id]) }}">{{ $product->title }}</a></h3>
		@endforeach
	@else
		<h3>Aucun produit trouvé !</h3>
	@endif
@endsection
