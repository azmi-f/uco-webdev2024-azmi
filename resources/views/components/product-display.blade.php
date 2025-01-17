<a href="{{ route('products.show', ['id' => $product->id]) }}" class="product-card">
    <div class="card w-100">
        <img src="{{ asset($product->image) }}" class="card-img-top" alt="{{ $product->name }} image">
        <div class="card-body">
            <div class="fst-italic text-muted mb-3">{{ $product->category->name }}</div>
            <h5 class="card-title">{{ $product->name }}</h5>
            <p class="card-text">
                @if ($product->discount && $product->discount != 0)
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
            </p>
        </div>
    </div>
</a>
