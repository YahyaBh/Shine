<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Shine</title>
    <link href="{{ asset('Client/css/style.css') }}" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="{{ asset('Client/Images/logo.png') }}">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet" media="all">
</head>

<body>

    <div id="nav">
        @if (Route::has('login'))
            <div>
                @auth
                    <a href="{{ url('/dashboard') }}"
                        class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                @else
                    <nav class="navbar">
                        <div>
                            <ul>
                                <li class="navbar-logo">
                                    <div>
                                        <a class="logo-image" href="{{ url('/') }}"><img
                                                src="{{ asset('Client/Images/logo.png') }}" alt="logo"
                                                width="70px"></a>
                                    </div>
                                </li>
                                <li class="join_link">
                                    <button><a href="{{ url('/register')}} ">JOIN</a></button>
                                    <div id="modal_already_registred">
                                        <h3>Are You Already Registered ?</h3>
                                        <div>
                                            <button> <a href="{{ route('login') }}"
                                                    class="text-sm text-gray-700 dark:text-gray-500 underline">Yes , Log Me
                                                    In</a> </button>
                                            @if (Route::has('register'))
                                                <button>
                                                    <a href="{{ route('register') }}"
                                                        class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">No ,
                                                        Create An Account</a>
                                                </button>
                                            @endif
                                        </div>
                                    </div>
                                </li>
                                <li><a>Contact</a></li>
                                <li><a>Gallery</a></li>
                                <li><a>Shop</a></li>

                            </ul>
                        </div>
                    </nav>
                @endauth
            </div>
        @endif
    </div>


    <header id="header">
        <div class="container">
            <div class="text-contain">
                <div style="display: block">
                    <h1>Get A Shiney Pet</h1>
                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of
                        classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a
                        Latin.</p>
                    <a href="#" class="hvr-icon-forward">
                        Find Your Pet
                        <i class="fa fa-chevron-circle-right hvr-icon"></i>
                    </a>
                </div>
            </div>
            <div class="picture-contain">
                <img src="{{ asset('Client/Images/4500_3_03.jpg') }}" alt="">
            </div>
        </div>
    </header>

    <section id="about">
        <div class="heading-text">
            <h1>Why Using Shine ?</h1>
        </div>
        <div class="about-container">
            <div class="text-contain">
                <div style="display: block">
                    <h1>Cute Cats</h1>
                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of
                        classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a
                        Latin.</p>
                </div>
            </div>
            <div class="picture-contain">
                <img src="{{ asset('Client/Images/pexels-cats-coming-1543793.jpg') }}" alt="">
            </div>

        </div>

        <div class="about-container-sec">

            
            <div class="text-contain">
                <div style="display: block">
                    <h1>Modern And Classic Dogs</h1>
                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of
                        classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a
                        Latin.</p>
                </div>
            </div>
            <div class="picture-contain">
                <img src="{{ asset('Client/Images/pexels-johann-1254140.jpg') }}" alt="">
            </div>
        </div>

        <div class="about-container">
            <div class="text-contain">
                <div style="display: block">
                    <h1>Any type of other pets</h1>
                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of
                        classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a
                        Latin.</p>
                </div>
            </div>
            <div class="picture-contain">
                <img src="{{ asset('Client/Images/pexels-mart-production-8434691.jpg') }}" alt="">
            </div>

        </div>
    </section>
</body>

</html>
