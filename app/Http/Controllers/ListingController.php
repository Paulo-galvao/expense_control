<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    public function index() {
        $listings = Listing::all();
        return view('listings.index', ['listings' => $listings]);
    }

    public function show($id) {
        $listing = Listing::findOrFail($id);
        return view('listings.show', ['listing' => $listing]);
    }

    public function create() {
        return view('listings.create');
    }
    
    public function store() {
        
        request()->validate(['name' => ['required']]);

        Listing::create([
            'name' => request('name')
        ]);

        return redirect('/listings');
        
    }

    public function edit($id) {
        $listing = Listing::findOrFail($id);
        return view('listings.edit', ['listing' => $listing]);
    }

    public function update($id) {
        $listing = Listing::findOrFail($id);

        request()->validate(['name' => ['required']]);

        $listing->update(['name' => request('name')]);

        return redirect('/listings');
    }

    public function confirm($id) {
        $listing = Listing::findOrFail($id);
        return view('listings.destroy', ['listing' => $listing]);
    }

    public function destroy($id) {
        $listing = Listing::findOrFail($id);

        $listing->delete();

        return redirect('/listings');
    }

}
