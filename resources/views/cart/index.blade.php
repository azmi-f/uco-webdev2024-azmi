<x-template title="Shopping cart">
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show rounded-0 mb-0" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <div class="container py-3">
        <h1>Shopping cart</h1>
        <table class="table w-full">
            <thead>
                <tr>
                    <th></th>
                    <th>Produk</th>
                    <th>Qty</th>
                    <th>Subtotal</th>
                </tr>
            </thead>
            @if (count($cartItems) == 0)
                <tr>
                    <td colspan="4" class="text-center">
                        <span>No items in cart</span>
                        <br>
                        <a href="{{ route('products.list') }}" class="btn btn-sm btn-primary">Back to products</a>
                    </td>
                </tr>
            @else
                <tbody>
                    @php
                        $total = 0;
                    @endphp
                    @foreach ($cartItems as $cart)
                        @php
                            $total += $cart->product->price * $cart->quantity;
                        @endphp
                        <tr>
                            <th>
                                <form method="POST" action="{{ route('cart.destroy', $cart->id) }}">
                                    @csrf
                                    <button type="submit" class="btn btn-sm btn-danger">X</button>
                                </form>
                            </th>
                            <td>
                                <div class="d-flex">
                                    <img class="w-25" src="{{ asset($cart->product->image) }}">
                                    <div class="ms-3">
                                        <div>{{ $cart->product->name }}</div>
                                        <div>Rp {{ number_format($cart->product->price, 2, ',', '.') }}</div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex">
                                    <form action="{{ route('cart.update', $cart->id) }}" method="post">
                                        @csrf
                                        <input type="hidden" name="quantity" value="{{ $cart->quantity + 1 }}">
                                        <button type="submit" class="btn btn-sm btn-success">+</button>
                                    </form>
                                    <div class="ms-2">{{ $cart->quantity }}</div>
                                    <form action="{{ route('cart.update', $cart->id) }}" method="post">
                                        @csrf
                                        <input type="hidden" name="quantity" value="{{ $cart->quantity - 1 }}">
                                        <button type="submit" class="btn btn-sm btn-danger ms-2">-</button>
                                    </form>
                                </div>
                            </td>
                            <td>
                                Rp {{ number_format($cart->product->price * $cart->quantity, 2, ',', '.') }}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th colspan="3" class="text-end">TOTAL</th>
                        <th>Rp {{ number_format($total, 2, ',', '.') }}</th>
                    </tr>
                </tfoot>

                <table class="table table-borderless w-full">
                    <tr>
                        <td class="text-end">
                            <a href="{{ route('cart.checkout') }}" class="btn btn-sm btn-success">Checkout</a>
                        </td>
                    </tr>
                </table>
            @endif
        </table>
    </div>
</x-template>
