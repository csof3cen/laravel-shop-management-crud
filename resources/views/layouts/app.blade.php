<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="{{ asset('css/app.css') }}">
	<title>@yield('title')</title>
</head>

<body>
	<nav>
		<ul>
			<li><a href="{{ route('home') }}">Enregistrer un produit</a></li>
			<li><a href="{{ route('product.show.all') }}">Afficher les produits</a></li>
		</ul>
	</nav>
	@if(session('message'))
		<b>{{ session('message') }}</b>
	@endif
	<div id="app">
		@yield('body')
	</div>
</body>
</html>
