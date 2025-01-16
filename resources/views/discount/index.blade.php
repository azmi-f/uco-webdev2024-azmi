<x-template title="Discount">
    <div class="container py-3">
        <h1>Discount</h1>
        <table class="table table-hover table-striped align-middle">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Discount</th>
                    <th style="width:50px">Action</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                @foreach ($products as $product)
                    <tr>
                        <td>{{ $product->name }}</td>
                        <td>{{ number_format($product->discount, 0, '.', '.') }}%</td>
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle btn-lg" type="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa-solid fa-wrench"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a class="dropdown-item"
                                        href="{{ route('discount.edit', ['id' => $product->id]) }}">Edit discount</a>
                                    <form method="POST"
                                        action="{{ route('discount.destroy', ['id' => $product->id]) }}">
                                        @csrf
                                        <button type="submit" class="dropdown-item"
                                            href="{{ route('discount.destroy', ['id' => $product->id]) }}">Delete
                                            discount</button>
                                    </form>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <a href="{{ route('discount.create') }}" class="btn btn-lg btn-success position-fixed bottom-0 end-0 m-3"
        title="Add new category" data-bs-toggle="tooltip">
        <i class="fa-solid fa-plus"></i>
    </a>
</x-template>
