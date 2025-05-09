<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {
        $products = Product::all();
        return view('products.index', ['products' => $products]);
    }

    public function create($id) {
        $listing = Listing::findOrFail($id); // lista mãe do novo produto
        return view('products.create', ['listing' => $listing]);
    
    }

    public function store() {

        request()->validate([
            'name' => 'required',
            'price' => 'required | numeric',
        ]);

        // criar novo produto com id da lista mãe
        Product::create([
            'name' => request('name'),
            'price' => request('price'),
            'listing_id' => request('listing_id') // input oculto
        ]);
        
        $total_price = 0;

        // pegar a lista mãe do produto
        $listing = Listing::findOrFail(request('listing_id'));
    
        // calcular valor dos produtos da lista
        foreach( $listing->products as $product ) {
            $total_price += $product->price;
        }
        
        // atualizar valor da lista 
        $listing->update(['total_price' => $total_price]);
    
        return redirect('/listing/'.$listing->id);
    }

    public function edit($id) {
        $product = Product::findOrFail($id);
        return view('products.edit', ['product' => $product]);
    }

    public function update($id) {
        $product = Product::findOrFail($id);
        // validação
        request()->validate([
            'name' => 'required',
            'price' => 'required | numeric',
        ]);

        // atualização
        $product->update([
            'name' => request('name'),
            'price' => request('price'),
        ]);

        // atualizar lista mãe
        $total_price = 0;
        $listing = Listing::findOrFail(request('listing_id'));

        foreach( $listing->products as $product ) {
            $total_price += $product->price;
        }
        
        // atualizar valor da lista 
        $listing->update(['total_price' => $total_price]);

        return redirect('/listing/'.$listing->id);

    }

    public function confirm($id) {
        $product = Product::findOrFail($id);
        return view('products.destroy', ['product' => $product]);
    }

    public function destroy($id) {
        $product = Product::findOrFail($id);

        $price_to_discount = $product->price;
        $list_id = $product->listing->id;
        
        // exclusão
        $product->delete();

        // atualizar lista mãe
        $listing = Listing::findOrFail($list_id);
        $total_price = $listing->total_price;
        $new_price = $total_price - $price_to_discount;

        $listing->update(['total_price' => $new_price]);

        return redirect('/listing/'.$list_id);
    }
}
