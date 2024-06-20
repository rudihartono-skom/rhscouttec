<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('/') }}style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-blue navbar-dark fixed-top">
        <div class="container">
            <a class="navbar-brand fw-bold fst-italic fs-4 mb-0" href="#">Percecatakan<span>RhScout</span>.</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Perc.Rhscout</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link text-white" href="/home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="/product">Product</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="/contact">Contact</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link text-white" href="/cart"><i class="bi bi-cart4"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#"><i class="bi bi-search-heart"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    @yield('content')

    <footer class="bg-danger-subtle mt-5 p-3">
        <div class="d-flex justify-content-center">
            <a class="m-3 fs-3 mb-0 text-primary" href="#"><i class="bi bi-facebook"></i></a>
            <a class="m-3 fs-3 mb-0 text-danger" href="#"><i class="bi bi-instagram"></i></a>
            <a class="m-3 fs-3 mb-0 text-black" href="#"><i class="bi bi-linkedin"></i></a>
            <a class="m-3 fs-3 mb-0 text-danger" href="#"><i class="bi bi-youtube"></i></a>
            <a class="m-3 fs-3 mb-0 text-success" href="#"><i class="bi bi-whatsapp"></i></a>
        </div>
        <div class="d-flex justify-content-center">
            <a class="m-3 nav-link fw-lighter" href="/home">Home</a>
            <a class="m-3 nav-link fw-lighter" href="/product">Product</a>
            <a class="m-3 nav-link fw-lighter" href="/contact">Contact</a>
            <a class="m-3 nav-link fw-lighter" href="/cart">Cart</a>
        </div>
        <p class="text-center">Copyright &copy; 2024, Design by. Rudi Hartono, S.Kom,</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
