<x-template :title="$title">
    <div class="container py-3">
        <h1>{{ $title }}</h1>
        <form class="was-validated" method="post" action="{{ route('discount.update', ['id' => $product->id]) }}">
            @csrf
            <div class="mb-3">
                <label for="discount" class="form-label">Discount(%)</label>
                <input type="number" class="form-control" name="discount" id="discount"
                    value="{{ $product->discount ?? '' }}" required>
            </div>
            <div class="mb-3">
                <a href="{{ route('discount.list') }}" class="btn btn-secondary">Back</a>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</x-template>
