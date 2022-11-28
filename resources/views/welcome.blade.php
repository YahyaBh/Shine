    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Shine | Home</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="pets" name="keywords">
        <meta content="Find your pet" name="description">
        <link href="img/favicon.ico" rel="icon">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Roboto:wght@700&display=swap"
            rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
        <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href='{{ asset('Client/css/bootstrap.min.css') }}' rel="stylesheet">
        <link href='{{ asset('Client/css/style2.css') }}' rel="stylesheet">

        <style>
            input {
                width: 100%;
                border: none;
                border-radius: 8px;
                color: var(--global-background)
            }

            input::placeholder {
                color: var(--global-background)
            }

            a,
            a:link {
                font-family: inherit;
                text-decoration: none;
            }

            a:focus {
                outline: none;
            }

            button::-moz-focus-inner {
                border: 0;
            }


            /* box */
            .box {
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                height: 100vh;
                padding: 0 4rem 2rem;
            }

            .box:not(:first-child) {
                height: 45rem;
            }

            .box__title {
                font-size: 10rem;
                font-weight: normal;
                letter-spacing: .8rem;
                margin-bottom: 2.6rem;
            }

            .box__title::first-letter {
                color: var(--primary);
            }

            .box__p,
            .box__info,
            .box__note {
                font-size: 1.6rem;
            }

            .box__info {
                margin-top: 6rem;
            }

            .box__note {
                line-height: 2;
            }


            .modal-container {
                position: fixed;
                top: 0;
                left: 0;
                z-index: 10;

                display: none;
                justify-content: center;
                align-items: center;

                width: 100%;
                height: 100%;

                background: var(--m-background);
            }

            .modal-container:target {
                display: flex;
                backdrop-filter: brightness(20%);
            }

            .modal {
                width: 60rem;
                padding: 4rem 2rem;
                border-radius: .8rem;

                color: var(--light);
                background: var(--background);
                box-shadow: var(--m-shadow, .4rem .4rem 10.2rem .2rem) var(--shadow-1);
                position: relative;

                overflow: hidden;
            }

            .modal__title {
                font-size: 3.2rem;
            }

            .modal__text {
                padding: 0 4rem;
                margin-top: 4rem;

                font-size: 1.6rem;
                line-height: 2;
            }

            .modal__btn {
                margin-top: 4rem;
                padding: 1rem 1.6rem;
                border: 1px solid var(--border-color);
                border-radius: 100rem;

                color: inherit;
                background: transparent;
                font-size: 1.4rem;
                font-family: inherit;
                letter-spacing: .2rem;

                transition: .2s;
                cursor: pointer;
            }

            .modal__btn:nth-of-type(1) {
                margin-right: 1rem;
            }

            .modal__btn:hover,
            .modal__btn:focus {
                background: var(--focus);
                border-color: var(--focus);
                transform: translateY(-.2rem);
            }


            /* link-... */
            .link-1 {
                font-size: 1.8rem;

                color: var(--light);
                background: var(--background);
                box-shadow: .4rem .4rem 2.4rem .2rem var(--shadow-1);
                border-radius: 100rem;
                padding: 1.4rem 3.2rem;

                transition: .2s;
            }

            .link-1:hover,
            .link-1:focus {
                transform: translateY(-.2rem);
                box-shadow: 0 0 4.4rem .2rem var(--shadow-2);
            }

            .link-1:focus {
                box-shadow:
                    0 0 4.4rem .2rem var(--shadow-2),
                    0 0 0 .4rem var(--global-background),
                    0 0 0 .5rem var(--focus);
            }

            .link-2 {
                width: 4rem;
                height: 4rem;
                border: 1px solid var(--border-color);
                border-radius: 100rem;

                color: inherit;
                font-size: 2.2rem;

                position: absolute;
                top: 2rem;
                right: 2rem;

                display: flex;
                justify-content: center;
                align-items: center;

                transition: .2s;
            }

            .link-2::before {
                content: '×';

                transform: translateY(-.1rem);
            }

            .link-2:hover,
            .link-2:focus {
                background: var(--focus);
                border-color: var(--focus);
                transform: translateY(-.2rem);
            }

            .abs-site-link {
                position: fixed;
                bottom: 20px;
                left: 20px;
                color: hsla(0, 0%, 1000%, .6);
                font-size: 1.6rem;
            }
        </style>
    </head>

    <body>

        {{-- @if (Auth::user()->role === 'admin')
            <a href="#m1-o" class="link-1" id="m1-c">ADD NEW PET</a>

            <div class="box" style="display: none">

                <div class="modal-container" id="m1-o" style="--m-background: transparent;">
                    <div class="modal">
                        <form action="{{ route('AddPet') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <label for="">Pet Image</label>
                            <br>
                            <input type="file" name="image" id="image">
                            <br>
                            <label for="">Pet Name</label>
                            <br>
                            <input type="text" name="name" id="pet_name" required>
                            <br>
                            <label for="">Quantity</label>
                            <br>
                            <input type="number" name="quantity" id="pet_quantity" value="1" min="1"
                                maxlength="3" required>
                            <br>
                            <label for="">Pet Color</label>
                            <br>
                            <input type="text" name="color" id="pet_color" required>
                            <br>
                            <label for="">Pet Type</label>
                            <br>
                            <input type="text" name="type" id="pet_type" required>
                            <button class="modal__btn">Add &rarr;</button>
                        </form>
                    </div>
                </div>
            </div>
        @endif --}}
        <div class="container-fluid border-bottom d-none d-lg-block">
            <div class="row gx-0">
                <div class="col-lg-4 text-center py-2">
                    <div class="d-inline-flex align-items-center">
                        <i class="bi bi-geo-alt fs-1 text-primary me-3"></i>
                        <div class="text-start">
                            <h6 class="text-uppercase mb-1">Our Office</h6>
                            <span>123 Street, Morocco, 8241</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 text-center border-start border-end py-2">
                    <div class="d-inline-flex align-items-center">
                        <i class="bi bi-envelope-open fs-1 text-primary me-3"></i>
                        <div class="text-start">
                            <h6 class="text-uppercase mb-1">Email Us</h6>
                            <span>pet-shop@pet.com</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 text-center py-2">
                    <div class="d-inline-flex align-items-center">
                        <i class="bi bi-phone-vibrate fs-1 text-primary me-3"></i>
                        <div class="text-start">
                            <h6 class="text-uppercase mb-1">Call Us</h6>
                            <span>+012 345 6789</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <nav class="navbar navbar-expand-lg bg-white navbar-light shadow-sm py-3 py-lg-0 px-3 px-lg-0">
            <a href="{{ url('/') }}" class="navbar-brand ms-lg-5">
                <h1 class="m-0 text-uppercase text-dark"><i class="bi bi-shop fs-1 text-primary me-3"></i>SHINE PET</h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="index.html" class="nav-item nav-link active">Home</a>
                    <a href="about.html" class="nav-item nav-link">About</a>
                    <a href="service.html" class="nav-item nav-link">Service</a>
                    <a href="{{ route('pets') }}" class="nav-item nav-link">Pets</a>
                    @if (Auth::user() !== null)
                        <div class="nav-item dropdown">
                            <a class="dropdown-toggle nav-item nav-link nav-contact text-white px-5 ms-lg-5"
                                style="background: #7AB730" data-bs-toggle="dropdown">{{ Auth::user()->name }}</a>
                            <div class="dropdown-menu m-0">
                                @if (Auth::user()->role === 'admin')
                                    <a href="{{ route('dashboard') }}" class="dropdown-item">Dashboard</a>
                                @endif
                                <a href="{{ route('cart.list') }}" class="dropdown-item">My Cart</a>
                                <a href="{{ route('seller_register') }}" class="dropdown-item">Sell Your Pet</a>
                                <a href="{{ route('profile.show') }}" class="dropdown-item">Profile</a>
                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button type="submit" class="dropdown-item">Logout</button>
                                </form>

                            </div>
                        </div>
                    @else
                        <a href="{{ route('login') }}" class="nav-item nav-link nav-contact text-white px-5 ms-lg-5"
                            style="background: #7AB730">Login</a>
                        <a href="{{ route('seller_register') }}"
                            class="nav-item nav-link nav-contact text-white px-5 ms-lg-5"
                            style="background: transparent;color :#7AB730 !important;margin: 0 !important;">SELL</a>
                    @endif
                </div>
            </div>
        </nav>

        <div class="bg-primary py-5 mb-5 hero-header"
            style="padding-top: 0rem !important;padding-bottom: 4rem !important;">
            <div style="height:100%">
                <video autoplay muted loop id="myVideo"
                    style="z-index: -1;
                    width: 100%;
                    position: absolute;
                    margin: 0;
                    padding: 0;
                    height: 60%;
                    object-fit: cover;">
                    <source src="{{ asset('Client/Videos/bg.mp4') }}" type="video/mp4">
                </video>

                <div class="container py-5">
                    <div class="row justify-content-start">
                        <div class="col-lg-8 text-center text-lg-start">
                            <h1 class="display-1 text-uppercase text-light mb-lg-4">Shine</h1>
                            <h1 class="text-uppercase text-white mb-lg-4">Get Your Shiny Pet</h1>
                            <p class="fs-4 text-white mb-lg-4">Dolore tempor clita lorem rebum kasd eirmod dolore diam
                                eos
                                kasd.
                                Kasd clita ea justo est sed kasd erat clita sea</p>
                            <div class="d-flex align-items-center justify-content-center justify-content-lg-start pt-5">
                                <a href="" class="btn btn-outline-light border-2 py-md-3 px-md-5 me-5">Find
                                    Pet</a>
                                <button type="button" class="btn-play" data-bs-toggle="modal"
                                    data-src="https://www.youtube.com/embed/iucW5evsuLE" data-bs-target="#videoModal">
                                    <span></span>
                                </button>
                                <h5 class="font-weight-normal text-white m-0 ms-4 d-none d-sm-block">Play Video</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content rounded-0">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Video</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                        <div class="ratio ratio-16x9">
                            <iframe class="embed-responsive-item" title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen src="" id="video" allowfullscreen
                                allowscriptaccess="always" allow="autoplay"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="container-fluid py-5">
            <div class="container">
                <div class="row gx-5">
                    <div class="col-lg-5 mb-5 mb-lg-0" style="min-height: 500px;">
                        <div class="position-relative h-100">
                            <img class="position-absolute rounded"
                                src="{{ asset('Client/Images/7f643f0db514d7971349c416e29e42a8.jpg') }}"
                                style="object-fit: cover;width: 100%;
                                height: 70%;">
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="border-start border-5 border-primary ps-5 mb-5">
                            <h6 class="text-primary text-uppercase">About Us</h6>
                            <h1 class="display-5 text-uppercase mb-0">We Keep Your Pets Happy All Time</h1>
                        </div>
                        <h4 class="text-body mb-4">Diam dolor diam ipsum tempor sit. Clita erat ipsum et lorem stet no
                            labore lorem sit clita duo justo magna dolore</h4>
                        <div class="bg-light p-4">
                            <ul class="nav nav-pills justify-content-between mb-3" id="pills-tab" role="tablist">
                                <li class="nav-item w-50" role="presentation">
                                    <button class="nav-link text-uppercase w-100 active" id="pills-1-tab"
                                        data-bs-toggle="pill" data-bs-target="#pills-1" type="button"
                                        role="tab" aria-controls="pills-1" aria-selected="true">Our
                                        Mission</button>
                                </li>
                                <li class="nav-item w-50" role="presentation">
                                    <button class="nav-link text-uppercase w-100" id="pills-2-tab"
                                        data-bs-toggle="pill" data-bs-target="#pills-2" type="button"
                                        role="tab" aria-controls="pills-2" aria-selected="false">Our
                                        Vission</button>
                                </li>
                            </ul>
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-1" role="tabpanel"
                                    aria-labelledby="pills-1-tab">
                                    <p class="mb-0">Tempor erat elitr at rebum at at clita aliquyam consetetur. Diam
                                        dolor
                                        diam ipsum et, tempor voluptua sit consetetur sit. Aliquyam diam amet diam et
                                        eos
                                        sadipscing labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem
                                        sit.
                                        Sanctus clita duo justo et tempor consetetur takimata eirmod, dolores takimata
                                        consetetur invidunt magna dolores aliquyam dolores dolore. Amet erat amet et
                                        magna
                                    </p>
                                </div>
                                <div class="tab-pane fade" id="pills-2" role="tabpanel"
                                    aria-labelledby="pills-2-tab">
                                    <p class="mb-0">Tempor erat elitr at rebum at at clita aliquyam consetetur. Diam
                                        dolor
                                        diam ipsum et, tempor voluptua sit consetetur sit. Aliquyam diam amet diam et
                                        eos
                                        sadipscing labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem
                                        sit.
                                        Sanctus clita duo justo et tempor consetetur takimata eirmod, dolores takimata
                                        consetetur invidunt magna dolores aliquyam dolores dolore. Amet erat amet et
                                        magna
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="container-fluid py-5">
            <div class="container">
                <div class="border-start border-5 border-primary ps-5 mb-5" style="max-width: 600px;">
                    <h6 class="text-primary text-uppercase">Services</h6>
                    <h1 class="display-5 text-uppercase mb-0">Our Excellent Pet Care Services</h1>
                </div>
                <div class="row g-5">
                    <div class="col-md-6">
                        <div class="service-item bg-light d-flex p-4">
                            <i class="flaticon-house display-1 text-primary me-4"></i>
                            <div>
                                <h5 class="text-uppercase mb-3">Pet Boarding</h5>
                                <p>Kasd dolor no lorem sit tempor at justo rebum rebum stet justo elitr dolor amet sit
                                </p>
                                <a class="text-primary text-uppercase" href="">Read More<i
                                        class="bi bi-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="service-item bg-light d-flex p-4">
                            <i class="flaticon-food display-1 text-primary me-4"></i>
                            <div>
                                <h5 class="text-uppercase mb-3">Pet Feeding</h5>
                                <p>Kasd dolor no lorem sit tempor at justo rebum rebum stet justo elitr dolor amet sit
                                </p>
                                <a class="text-primary text-uppercase" href="">Read More<i
                                        class="bi bi-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="service-item bg-light d-flex p-4">
                            <i class="flaticon-grooming display-1 text-primary me-4"></i>
                            <div>
                                <h5 class="text-uppercase mb-3">Pet Grooming</h5>
                                <p>Kasd dolor no lorem sit tempor at justo rebum rebum stet justo elitr dolor amet sit
                                </p>
                                <a class="text-primary text-uppercase" href="">Read More<i
                                        class="bi bi-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="service-item bg-light d-flex p-4">
                            <i class="flaticon-cat display-1 text-primary me-4"></i>
                            <div>
                                <h5 class="text-uppercase mb-3">Pet Training</h5>
                                <p>Kasd dolor no lorem sit tempor at justo rebum rebum stet justo elitr dolor amet sit
                                </p>
                                <a class="text-primary text-uppercase" href="">Read More<i
                                        class="bi bi-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="service-item bg-light d-flex p-4">
                            <i class="flaticon-dog display-1 text-primary me-4"></i>
                            <div>
                                <h5 class="text-uppercase mb-3">Pet Exercise</h5>
                                <p>Kasd dolor no lorem sit tempor at justo rebum rebum stet justo elitr dolor amet sit
                                </p>
                                <a class="text-primary text-uppercase" href="">Read More<i
                                        class="bi bi-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="service-item bg-light d-flex p-4">
                            <i class="flaticon-vaccine display-1 text-primary me-4"></i>
                            <div>
                                <h5 class="text-uppercase mb-3">Pet Treatment</h5>
                                <p>Kasd dolor no lorem sit tempor at justo rebum rebum stet justo elitr dolor amet sit
                                </p>
                                <a class="text-primary text-uppercase" href="">Read More<i
                                        class="bi bi-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="container-fluid py-5">
            <div class="container">
                <div class="border-start border-5 border-primary ps-5 mb-5" style="max-width: 600px;">
                    <h6 class="text-primary text-uppercase">Latest Pets</h6>
                    <h1 class="display-5 text-uppercase mb-0">Pets To Be Your Best Friends</h1>
                </div>
                <div class="row g-5">
                    @foreach ($homepets as $pet)
                        <div class="col-lg-6">
                            <div class="blog-item">
                                <div class="row g-0 bg-light overflow-hidden">
                                    <div class="col-12 col-sm-5 h-100">
                                        <img class="img-fluid mb-4"
                                            style="height: 100%;
                                                    object-fit: cover;width: 100%;"
                                            src="{{ asset('images_pets/' . $pet->image) }}"
                                            alt="{{ $pet->name }}">
                                    </div>
                                    <div class="col-12 col-sm-7 h-100 d-flex flex-column justify-content-center">
                                        <div class="p-4">
                                            <div class="d-flex mb-3">
                                                <small class="me-3"><i
                                                        class="bi bi-bookmarks me-2"></i>{{ $pet->name }}</small>
                                                <small><i
                                                        class="bi bi-calendar-date me-2"></i>${{ $pet->price }}</small>
                                            </div>
                                            {{-- <h5 class="text-uppercase mb-3">Dolor sit magna rebum clita rebum dolor</h5>
                                    <p>Ipsum sed lorem amet dolor amet duo ipsum amet et dolore est stet tempor eos
                                        dolor</p> --}}
                                            <a class="text-primary text-uppercase"
                                                href='{{ url("/pets/add_to_cart/{$pet->id}") }}'>BE MY FRIEND<i
                                                    class="bi bi-chevron-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <a href="{{ route('pets') }}"><button
                        style="margin: 10px;
                width: 100%;
                height: 50px;
                background-color: #7ab730;
                color: white;
                font-size: 20px;
                outline: none;
                border: none;">SEE
                        MORE</button>
                </a>
            </div>
        </div>





        <div class="footer container-fluid bg-dark text-white-50 py-4">
            <div class="container">
                <div class="row g-5">
                    <div class="col-md-6 text-center text-md-start">
                        <p class="mb-md-0">&copy; <a class="text-white" href="#">Shine</a>. All Rights
                            Reserved.
                        </p>
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <p class="mb-0">Designed by <a class="text-white" href="https://github.com/YahyaBh">Yahya
                                Bouhsine</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>


        <a href="#" class="btn btn-primary py-3 fs-4 back-to-top"><i class="bi bi-arrow-up"></i></a>


        <script src='https://code.jquery.com/jquery-3.4.1.min.js'></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src='{{ asset('Client/lib/easing/easing.min.js') }}'></script>
        <script src='{{ asset('Client/lib/waypoints/waypoints.min.js') }}'></script>
        <script src='{{ asset('Client/lib/owlcarousel/owl.carousel.min.js') }}'></script>
        <script src='{{ asset('Client/js/main.js') }}'></script>
    </body>

    </html>
