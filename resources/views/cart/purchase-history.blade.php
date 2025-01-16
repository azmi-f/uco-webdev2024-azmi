<x-template title="Purchase History">
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show rounded-0 mb-0" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <div class="container py-3">
        <h1>Purchase history</h1>
        <table class="table w-full">
            <thead>
                <tr>
                    <th>Order Date</th>
                    <th>Total Items</th>
                    <th>Total Price</th>
                    <th>Payment Method</th>
                </tr>
            </thead>
            @if (count($orders) == 0)
                <tr>
                    <td colspan="4" class="text-center">
                        <span>No purchase history</span>
                        <br>
                        <a href="{{ route('products.list') }}" class="btn btn-sm btn-primary">Back to products</a>
                    </td>
                </tr>
            @else
                <tbody>
                    @foreach ($orders as $order)
                        <tr>
                            <td>{{ \Carbon\Carbon::parse($order->order_date)->format('d F Y') }}</td>
                            <td>{{ count($order->orderItems) }}</td>
                            <td>Rp {{ number_format($order->total_price, 2, ',', '.') }}</td>
                            <td>{{ $order->payment_method }}</td>
                        </tr>
                    @endforeach
                </tbody>
            @endif
        </table>
    </div>
</x-template>
