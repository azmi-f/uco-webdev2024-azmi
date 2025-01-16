<?php

namespace App\Http\Controllers;

use App\Models\FavouriteItem;
use Illuminate\Http\Request;

class FavouriteController extends Controller
{
    function index()
    {
        $favouriteItems = FavouriteItem::where('user_id', auth()->id())->get();
        return view('favourite.index', compact('favouriteItems'));
    }

    function addToFavourite(Request $request)
    {
        //jika belum login suruh login dulu
        if (!auth()->check()) {
            return redirect()->route('login');
        }

        $favouriteItem = FavouriteItem::where('product_id', $request->product_id)->where('user_id', auth()->id())->first();
        if ($favouriteItem) {
            return redirect()->back()->with('error', 'Product already in favourite');
        } else {
            FavouriteItem::create([
                'product_id' => $request->product_id,
                'user_id' => auth()->id(),
            ]);
        }

        return redirect()->back()->with('success', 'Product added to favourite');
    }

    function removeFromFavourite($product_id)
    {
        $favouriteItem = FavouriteItem::where('product_id', $product_id)->where('user_id', auth()->id())->first();
        if (!$favouriteItem) {
            return redirect()->back()->with('error', 'Product not found in favourite');
        }
        $favouriteItem->delete();

        return redirect()->back()->with('success', 'Product removed from favourite');
    }
}
