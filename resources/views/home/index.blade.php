<x-template>
    <div class="text-center mt-4">
        <img src="{{ asset('https://fastly.picsum.photos/id/1036/1650/700.jpg?hmac=qWud2o-jUBx2M1dq5EoP2ub31Q99xOCUxxAh9qOzANE') }}"
            alt="Olahraga" class="img-fluid mt-3">
        <h1>Hallo, Selamat datang !!!</h1>
    </div>
    <div class="p-5">
        <h1 class="text-uppercase fst-italic text-center mb-5">NEW ARRIVALS</h1>
        <div class="row">
            @foreach($newArrival as $product)
            <div class="col-6 col-lg-3 mb-4">
                <x-product-display :product="$product"></x-product-display>
            </div>
            @endforeach
        </div>
    </div>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Toko Olahraga</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('pasif.about') }}">about us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('pasif.term') }}">Term Condition</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Contact
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Email</a></li>
                            <li><a class="dropdown-item" href="#">Whatsapp</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Sosial media</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" aria-disabled="true">Bantuan</a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-6">
                <form method="post" action="{{ route('newsletter.send_email') }}">
                    @csrf
                    <input type="email" name="email" class="form-control form-control-lg mb-3" placeholder="Email" required>
                    <div class="text-end">
                        <button type="submit" class="btn btn-primary btn-lg">Subscribe</button>
                    </div>
                </form>
            </div>
        </div>
    </nav>
</x-template>
