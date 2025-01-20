<?php

namespace App\Http\Controllers;

use App\Models\CartItem;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    function index()
    {
        $cartItems = CartItem::where('user_id', auth()->id())->get();
        return view('cart.index', compact('cartItems'));
    }

    function addToCart(Request $request)
    {
        //jika belum login suruh login dulu
        if (!auth()->check()) {
            return redirect()->route('login');
        }

        if (request('action') === 'buy_now') {
            return redirect()->route('cart.checkout', ['product_id' => request('product_id'), 'quantity' => request('quantity'), 'action' => 'buy_now']);
        }

        $cart = CartItem::where('product_id', $request->product_id)->where('user_id', auth()->id())->first();
        if ($cart) {
            $cart->quantity += $request->quantity;
            $cart->save();
        } else {
            CartItem::create([
                'product_id' => $request->product_id,
                'user_id' => auth()->id(),
                'quantity' => $request->quantity
            ]);
        }

        return redirect()->back()->with('success', 'Product added to cart');
    }

    function removeFromCart($id)
    {
        $cart = CartItem::where('id', $id)->where('user_id', auth()->id())->first();
        $cart->delete();

        return redirect()->back()->with('success', 'Product removed from cart');
    }

    function updateQuantity(Request $request, $id)
    {
        $cart = CartItem::where('id', $id)->where('user_id', auth()->id())->first();

        if ($request->quantity > 0) {
            $cart->update([
                'quantity' => $request->quantity
            ]);
        } else {
            $cart->delete();
        }

        return redirect()->back()->with('success', 'Cart updated');
    }

    function checkout()
    {
        if (request('action') === 'buy_now') {
            return view('cart.buy_now', [
                'product' => Product::find(request('product_id')),
                'quantity' => request('quantity'),
            ]);
        }

        $cartItems = CartItem::where('user_id', auth()->id())->get();
        return view('cart.checkout', compact('cartItems'));
    }

    function processCheckout(Request $request)
    {
        $order = Order::create([
            'user_id' => auth()->id(),
            'shipping_address' => $request->shipping_address,
            'payment_method' => $request->payment_method,
            'total_price' => $request->total_price,
            'order_date' => \Carbon\Carbon::now()
        ]);

        $cartItems = CartItem::where('user_id', auth()->id())->get();
        foreach ($cartItems as $cartItem) {
            $orderItems = OrderItem::create([
                'order_id' => $order->id,
                'product_id' => $cartItem->product_id,
                'quantity' => $cartItem->quantity,
                'price' => $cartItem->product->price
            ]);

            $cartItem->delete();
        }

        return redirect()->route('cart.list')->with('success', 'Checkout success');
    }

    function processBuyNow(Request $request)
    {
        $order = Order::create([
            'user_id' => auth()->id(),
            'shipping_address' => $request->shipping_address,
            'payment_method' => $request->payment_method,
            'total_price' => $request->total_price,
            'order_date' => \Carbon\Carbon::now()
        ]);

        $product = Product::find($request->product_id);

        OrderItem::create([
            'order_id' => $order->id,
            'product_id' => $product->id,
            'quantity' => $request->quantity,
            'price' => $product->price
        ]);

        return redirect()->route('products.list')->with('success', 'Buy Now success');
    }

    function purchaseHistory()
    {
        $orders = Order::where('user_id', auth()->id())->get();
        return view('cart.purchase-history', compact('orders'));
    }
}
