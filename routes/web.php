<?php

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
	return view('home');
});

Route::post('/', function (Request $request) {
	Product::create([
		'title' => $request->title,
		'shop' => $request->shop,
		'price' => $request->price
	]);
	session()->flash('message', 'Produit crée avec succès !');
	return redirect()->route('product.show.all');
})->name('home');

Route::get('/show', function() {
	$products = Product::orderBy('created_at', 'desc')->get();
	return view('show', compact('products'));
})->name('product.show.all');

Route::get('/show/{id}', function ($id) {
	$product = Product::findOrFail($id);
	return view('show-unique', compact('product'));
})->name('product.show.unique')->whereNumber('id');

Route::get('/edit-{id}', function ($id) {
	$product = Product::findOrFail($id);
	return view('edit', compact('product'));
})->name('product.edit');

Route::post('/edit', function(Request $request) {
	$product = Product::findOrFail($request->id);

	$product->title = $request->title;
	$product->shop = $request->shop;
	$product->price = $request->price;

	$product->save();
	return redirect()->route('product.show.unique', ['id' => $product->id]);
})->name('product.edit.post');

Route::any('/delete/{id}', function($id) {
	$product = Product::findOrFail($id);
	$product->delete();
	return redirect()->route('product.show.all');
})->name('product.delete');
