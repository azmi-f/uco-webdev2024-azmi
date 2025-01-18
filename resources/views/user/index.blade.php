<x-template title="Users">
    <div class="container py-3">
        <h1>Users</h1>
        <a href="{{ route('user.create') }}" class="btn btn-primary">Create New User</a>
        <table class="table table-hover table-striped align-middle">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Order no</th>
                    <th style="width:50px">Action</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle btn-lg" type="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa-solid fa-wrench"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a class="dropdown-item" href="{{ route('user.edit', ['id' => $user->id]) }}">Edit
                                        user</a>
                                    <form method="POST" action="{{ route('user.destroy', ['id' => $user->id]) }}">
                                        @csrf
                                        <button type="submit" class="dropdown-item"
                                            href="{{ route('user.destroy', ['id' => $user->id]) }}">Delete user</button>
                                    </form>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    @if (auth()->user() && auth()->user()->is_admin == 1)
        <div class="position-fixed bottom-0 end-0 m-3">
            <a href="{{ route('discount.list') }}" class="btn btn-lg btn-success" title="List Discount"
                data-bs-toggle="tooltip">
                <i class="fa-solid fa-percent"></i>
            </a>
            <a href="{{ route('products.create') }}" class="btn btn-lg btn-success" title="Add new product"
                data-bs-toggle="tooltip">
                <i class="fa-solid fa-plus"></i>
            </a>
            <a href="{{ route('user.list') }}" class="btn btn-lg btn-success" title="List User"
                data-bs-toggle="tooltip">
                <i class="fa-solid fa-user"></i>
            </a>
        </div>
    @endif
</x-template>
