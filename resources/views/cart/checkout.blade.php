<x-template title="Checkout">
    <div class="container">
        <h1>Checkout</h1>

        <form method="POST" action="{{ route('cart.processCheckout') }}">
            @csrf
            <table class="table w-full">
                <thead>
                    <tr>
                        <th>Produk</th>
                        <th>Qty</th>
                        <th>Subtotal</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $total = 0;
                    @endphp
                    @foreach ($cartItems as $item)
                        @php
                            $total += $item->product->price * $item->quantity;
                        @endphp
                        <tr>
                            <td>{{ $item->product->name }}</td>
                            <td>{{ $item->quantity }}</td>
                            <td>Rp{{ number_format($item->product->price * $item->quantity, 0, '.', '.') }}</td>
                        </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th colspan="2" class="text-end">Total</th>
                        <th>Rp{{ number_format($total, 0, '.', '.') }}</th>
                    </tr>
                </tfoot>
            </table>
            <input type="hidden" name="total_price" value="{{ $total }}">
            <div class="form-group">
                <label for="shipping_address">Alamat Pengiriman</label>
                <input type="text" name="shipping_address" id="shipping_address" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="payment_method">Metode Pembayaran</label>
                <select name="payment_method" id="payment_method" class="form-control" required>
                    <option value="Cash">Tunai</option>
                    <option value="Credit Card">Kartu Kredit</option>
                    <option value="Bank Transfer">Transfer Bank</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary mt-3">Proses Checkout</button>
        </form>
    </div>
</x-template>
