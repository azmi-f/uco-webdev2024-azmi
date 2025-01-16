<x-template :title="$title">
    <div class="container py-3">
        <h1>{{ $title }}</h1>
        <form class="was-validated" method="post"
            action="{{ isset($user->id) ? route('user.update', ['id' => $user->id]) : route('user.store') }}">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" name="name" id="name" value="{{ $user->name ?? '' }}"
                    required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" id="email"
                    value="{{ $user->email ?? '' }}" required>
            </div>
            @if (!isset($user->id))
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" id="password" value="" required>
                </div>
            @endif
            <div class="mb-3">
                <a href="{{ route('user.list') }}" class="btn btn-secondary">Back</a>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</x-template>
