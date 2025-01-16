<x-template :title="$product->name">
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show rounded-0 mb-0" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="d-lg-flex">
        <div class="col-lg-8 bg-light border-lg-end">
            <img class="w-100" src="{{ asset($product->image) }}">
        </div>
        <div class="col-lg-4 ">
            <div class="container px-lg-5 py-5">
                <div class="text-muted mb-5 fst-italic">{{ $product->category->name }}</div>
                <h1 class="mb-4">{{ $product->name }}</h1>
                <div class="fw-semibold mb-4">
                    @if ($product->discount)
                        @php
                            $potongan_discount = ($product->price * $product->discount) / 100;
                        @endphp
                        <span class="text-danger">
                            <strike>Rp {{ number_format($product->price, 2, '.', '.') }}</strike>
                        </span>
                        =>
                        <span class="text-danger">
                            Rp {{ number_format($product->price - $potongan_discount, 2, '.', '.') }}
                        </span>
                    @else
                        Rp {{ number_format($product->price, 2, '.', '.') }}
                    @endif
                </div>
                <form method="POST" action="{{ route('cart.add-to-cart') }}">
                    @csrf
                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                    <div class="input-group mb-3">
                        <span class="input-group-text">Qty.</span>
                        <input type="number" value="1" name="quantity" class="form-control" placeholder="Qty">
                    </div>
                    <button type="submit" class="mb-3 btn btn-success w-100">
                        Add to cart
                    </button>
                </form>
                @if ($product->favouriteItem)
                    <form method="POST" action="{{ route('favourite.destroy', $product->id) }}" class="mb-4">
                        @csrf
                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                        <button type="submit" class="btn btn-danger text-white w-100">
                            Remove to favourite
                        </button>
                    </form>
                @else
                    <form method="POST" action="{{ route('favourite.add-to-favourite') }}" class="mb-4">
                        @csrf
                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                        <button type="submit" class="btn btn-warning text-white w-100">
                            Add to favourite
                        </button>
                    </form>
                @endif
                <p>
                <div class="fst-italic text-muted">Description:</div>
                {{ $product->description }}
                </p>
            </div>
        </div>
    </div>

    <div class="dropdown position-fixed bottom-0 end-0 m-3">
        <button class="btn btn-secondary dropdown-toggle btn-lg" type="button" data-bs-toggle="dropdown"
            aria-expanded="false">
            <i class="fa-solid fa-wrench"></i>
        </button>
        <div class="dropdown-menu dropdown-menu-end">
            <a class="dropdown-item" href="{{ route('products.edit', ['id' => $product->id]) }}">Edit product</a>
            <form method="POST" action="{{ route('products.destroy', ['id' => $product->id]) }}">
                @csrf
                <button type="submit" class="dropdown-item"
                    href="{{ route('products.destroy', ['id' => $product->id]) }}">Delete product</button>
            </form>
        </div>
    </div>
</x-template>
