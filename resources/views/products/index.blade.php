<x-template title="Product List">
    <div>
        <a href='create'><button type="button" class="btn btn-primary" href="{{ route('product.create') }}">Add New Product</button>
        </a>
    </div>

    <div class="row">
        @for ($i = 1; $i <= 20; $i++)
            <div class="col-4">
                <x-product-card name="Product {{ $i }}" price="5000"
                    image="https://fastly.picsum.photos/id/790/200/200.jpg?hmac=Y1d81XFNx8LJhlNsiwDoDgIn4mF3SK9nTdIVqkkHS9I"></x-product-card>
            </div>
        @endfor
    </div>
</x-template>
