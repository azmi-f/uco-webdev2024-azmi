<x-template title="Shopping cart">
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show rounded-0 mb-0" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <div class="container py-3">
        <h1>Favourite list</h1>
        <table class="table w-full">
            <thead>
                <tr>
                    <th></th>
                    <th>Produk</th>
                </tr>
            </thead>
            @if (count($favouriteItems) == 0)
                <tr>
                    <td colspan="2" class="text-center">
                        <span>No items in favourite</span>
                        <br>
                        <a href="{{ route('products.list') }}" class="btn btn-sm btn-primary">Back to products</a>
                    </td>
                </tr>
            @else
                <tbody>
                    @php
                        $total = 0;
                    @endphp
                    @foreach ($favouriteItems as $favourite)
                        <tr>
                            <th>
                                <form method="POST" action="{{ route('favourite.destroy', $favourite->product_id) }}">
                                    @csrf
                                    <button type="submit" class="btn btn-sm btn-danger">X</button>
                                </form>
                            </th>
                            <td>
                                <div class="d-flex">
                                    <img class="w-25" src="{{ asset($favourite->product->image) }}">
                                    <div class="ms-3">
                                        <div>{{ $favourite->product->name }}</div>
                                        <div>Rp {{ number_format($favourite->product->price, 2, ',', '.') }}</div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            @endif
        </table>
    </div>
</x-template>
