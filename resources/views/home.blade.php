<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/all.css') }}">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">

        {{-- fonts.google.com/icons --}}
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

        <!-- Styles -->
        <style>
        </style>
        
    </head>
    <body class="antialiased">


    {{-- header --}}
    <header id="header">
        <nav class="navbar navbar-expand-lg px-4">

            {{-- brand logo --}}
            <a href="#" class="navbar-brand">
                <img src="{{ asset('images/img/logo.svg') }}" alt="logo" srcset="">
            </a>
            {{-- end of logo --}}

            {{-- collapse nav button-> hamburger menu --}}
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#myNavbar">
                <span class="toggler-icon">
                    {{-- <i class="material-icons">menu</i> --}}
                    <i class="fas fa-bars"></i>
                </span>
            </button>
            {{-- ends of hamburger menu --}}

            {{-- navbar menus --}}
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="navbar-nav text-capitalize mx-auto">
                    <li class="nav-item active">
                        <a href="#home" class="nav-link">home</a>
                    </li>
                    <li class="nav-item active">
                        <a href="#about" class="nav-link">about</a>
                    </li>
                    <li class="nav-item active">
                        <a href="#store" class="nav-link">store</a>
                    </li>
                    <li class="nav-item active">
                        <a href="#services" class="nav-link">services</a>
                    </li>
                    <li class="nav-item active">
                        <a href="#cakes" class="nav-link">cakes</a>
                    </li>
                </ul>

                {{-- contacts and others --}}
                <div class="nav-info-items d-none d-lg-flex">
                    {{-- single info --}}
                    <div class="nav-info align-items-center d-flex justify-content-between mx-lg-5">
                        <span class="info-info mx-lg-3">
                            <i class="material-icons">phone</i>
                        </span>
                        <p class="mb-0">+123 456 789</p>
                    </div>
                    {{-- ends of single info --}}

                    {{-- single info --}}
                    <div id="cart-info" class="nav-info align-items-center cart-info d-flex justify-content-between mx-lg-5">
                        <span class="cart-info__icon mr-lg-3">
                            <i class="material-icons">shopping_cart</i>
                        </span>
                        <p class="mb-0 text-capitalize">
                            <span id="item-count">2</span>
                            items - $
                            <span class="item-total">10.49</span>
                        </p>
                    </div>
                    {{-- ends of single info --}}
                </div>
            </div>
            {{-- end of navbar menu --}}
        </nav>
        {{-- ends of nav --}}

        {{-- banner --}}
        <div class="container-fluid">
            <div class="row max-height justify-content-center text-center align-items-center">
                <div class="col-10 max-auto banner text-center">
                    <h1 class="text-capitalize">
                        welcome to <strong class="banner-title">grandma's</strong>
                    </h1>
                    <a href="#" class="btn banner-link text-uppercase my-2">explore</a>
                </div>

                {{-- cart --}}
                <div class="cart" id="cart">

                    {{-- cart-item --}}
                    <div class="cart-item d-flex justify-content-between text-capitalize my-3">
                        <img src="{{ asset('images/img-cart/cake-1.jpeg') }}" alt="cake" class="img-fluid rounded-circle" id="item-img">
                        <div class="item-text">
                            <p id="cart-item-title" class="font-weight-bold mb-0">cart item</p>
                            <span>$</span>
                            <span id="cart-item-price" class="cart-item-price mb-0">10.99</span>
                            <a href="#" id="cart-item-remove" class="cart-item-remove">
                                <i class="material-icons">delete</i>
                            </a>
                        </div>
                    </div>
                    {{-- ends of cart-item --}}

                    {{-- cart-item --}}
                    <div class="cart-item d-flex justify-content-between text-capitalize my-3">
                        <img src="{{ asset('images/img-cart/cake-2.jpeg') }}" alt="cake" class="img-fluid rounded-circle" id="item-img">
                        <div class="item-text">
                            <p id="cart-item-title" class="font-weight-bold mb-0">cart item</p>
                            <span>$</span>
                            <span id="cart-item-price" class="cart-item-price mb-0">10.99</span>
                            <a href="#" id="cart-item-remove" class="cart-item-remove">
                                <i class="material-icons">delete</i>
                            </a>
                        </div>
                    </div>
                    {{-- ends of cart-item --}}

                    {{-- cart-item --}}
                    <div class="cart-item d-flex justify-content-between text-capitalize my-3">
                        <img src="{{ asset('images/img-cart/cake-3.jpeg') }}" alt="cake" class="img-fluid rounded-circle" id="item-img">
                        <div class="item-text">
                            <p id="cart-item-title" class="font-weight-bold mb-0">cart item</p>
                            <span>$</span>
                            <span id="cart-item-price" class="cart-item-price mb-0">10.99</span>
                            <a href="#" id="cart-item-remove" class="cart-item-remove">
                                <i class="material-icons">delete</i>
                            </a>
                        </div>
                    </div>
                    {{-- ends of cart-item --}}

                    {{-- cart total --}}
                    <div class="cart-total-container d-flex justify-content-around text-capitalize mt-5">
                        <h5>Total</h5>
                        <h5>$ <strong id="cart-total" class="font-weight-bold">10.00</strong></h5>
                    </div>
                    {{-- ends of cart total --}}

                    {{-- cart total --}}
                    <div class="cart-buttons-container mt-3 d-flex justify-content-between">
                        <a href="#" id="clear-cart" class="btn btn-black text-uppercase">clear cart</a>
                        <a href="#" id="clear-cart" class="btn btn-pink text-uppercase">checkout</a>
                    </div>
                    {{-- ends of cart total --}}
                </div>
                {{-- ends of cart --}}

            </div>
        </div>
        {{-- ends of banner --}}
    </header>
    {{-- end of header --}}
    
    {{-- about us --}}
    <section id="about" class="about py-5">
        <div class="container">
            <div class="row">
                <div class="col-10 mx-auto col-md-6 my-5">
                    <h1 class="text-capitalize">about
                        <strong class="banner-title">us</strong>
                    </h1>

                    <p class="my-4 text-muted w-75">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo iure iusto magnam odio officia blanditiis voluptatibus sequi inventore. Impedit, accusantium.
                    </p>

                    <a href="#" class="btn btn-outline-secondary text-uppercase">explore</a>
                </div>

                <div class="col-10 mx-auto col-md-6 my-5 align-self-center">
                    <div class="about-img__container">
                        <img src="{{ asset('images/img/sweets-1.jpeg') }}" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ends of about us --}}
    
    {{-- store section --}}
    <section id="store" class="store py-5">
        <div class="container">
            {{-- section title --}}
            <div class="row">
                <div class="col-10 mx-auto col-sm-6 text-center">
                    <h1 class="text-capitallize">our
                        <strong class="banner-title">store</strong>
                    </h1>
                </div>
            </div>
            {{-- end of section title --}}

            {{-- filter buttons --}}
            <div class="col-lg-8 mx-auto d-flex justify-content-around sortBtn flex-wrap">
                <a href="#" class="btn btn-black text-uppercase filter-btn m-2" data-filter="all">all</a>

                <a href="#" class="btn btn-black text-uppercase filter-btn m-2" data-filter="all">cakes</a>

                <a href="#" class="btn btn-black text-uppercase filter-btn m-2" data-filter="all">cupcakes</a>

                <a href="" class="btn btn-black text-uppercase filter-btn m-2" data-filter="all">sweets</a>

                <a href="" class="btn btn-black text-uppercase filter-btn m-2" data-filter="all">doughnuts</a>
            </div>
            {{-- end of filter buttons --}}

            {{-- search box --}}
            <div class="row">
                <div class="col-10 mx-auto col-md-6">
                  <form action="">
                    <div class="input-group mb-3">
                      
                      <div class="input-group-prepend">
                        <span class="input-group-text search-box" id="search-icon">
                          <i class="fas fa-search"></i>
                        </span>
                      </div>
                      <input type="text" class="form-control" placeholder="items..." id="search-item">
                    </div>
                  </form>
                </div>
              </div>
            {{-- end of search box --}}

            {{-- store items --}}
            <div class="row store-items" id="store-items">
                {{-- single items --}}
                <div class="col-10 col-sm-6 col-lg-4 mx-auto my-3 store-item sweets" data-item="sweets">
                    <div class="card single-item">
                        <div class="img-container">
                            <img src="{{ asset('images/img/sweets-1.jpeg') }}" alt="" class="card-img-top store-img">
                            <span class="store-item-icon">
                                <i class="material-icons">shopping_cart</i>
                            </span>
                        </div>

                        <div class="card-body">
                            <div class="card-text d-flex justify-content-between text-capitalize">
                                <h5 id="store-item-name">sweet item</h5>
                                <h5 class="store-item-value">$ <strong id="store-item-price" class="font-weight-bold">5</strong></h5>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- end of single items --}}

                {{-- single items --}}
                <div class="col-10 col-sm-6 col-lg-4 mx-auto my-3 store-item sweets" data-item="sweets">
                    <div class="card single-item">
                        <div class="img-container">
                            <img src="{{ asset('images/img/sweets-2.jpeg') }}" alt="" class="card-img-top store-img">
                            <span class="store-item-icon">
                                <i class="material-icons">shopping_cart</i>
                            </span>
                        </div>

                        <div class="card-body">
                            <div class="card-text d-flex justify-content-between text-capitalize">
                                <h5 id="store-item-name">sweet item</h5>
                                <h5 class="store-item-value">$ <strong id="store-item-price" class="font-weight-bold">5</strong></h5>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- end of single items --}}

                {{-- single items --}}
                <div class="col-10 col-sm-6 col-lg-4 mx-auto my-3 store-item sweets" data-item="sweets">
                    <div class="card single-item">
                        <div class="img-container">
                            <img src="{{ asset('images/img/sweets-3.jpeg') }}" alt="" class="card-img-top store-img">
                            <span class="store-item-icon">
                                <i class="material-icons">shopping_cart</i>
                            </span>
                        </div>

                        <div class="card-body">
                            <div class="card-text d-flex justify-content-between text-capitalize">
                                <h5 id="store-item-name">sweet item</h5>
                                <h5 class="store-item-value">$ <strong id="store-item-price" class="font-weight-bold">5</strong></h5>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- end of single items --}}

                {{-- single items --}}
                <div class="col-10 col-sm-6 col-lg-4 mx-auto my-3 store-item sweets" data-item="sweets">
                    <div class="card single-item">
                        <div class="img-container">
                            <img src="{{ asset('images/img/cupcake-1.jpeg') }}" alt="" class="card-img-top store-img">
                            <span class="store-item-icon">
                                <i class="material-icons">shopping_cart</i>
                            </span>
                        </div>

                        <div class="card-body">
                            <div class="card-text d-flex justify-content-between text-capitalize">
                                <h5 id="store-item-name">sweet item</h5>
                                <h5 class="store-item-value">$ <strong id="store-item-price" class="font-weight-bold">5</strong></h5>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- end of single items --}}

                {{-- single items --}}
                <div class="col-10 col-sm-6 col-lg-4 mx-auto my-3 store-item sweets" data-item="sweets">
                    <div class="card single-item">
                        <div class="img-container">
                            <img src="{{ asset('images/img/cupcake-2.jpeg') }}" alt="" class="card-img-top store-img">
                            <span class="store-item-icon">
                                <i class="material-icons">shopping_cart</i>
                            </span>
                        </div>

                        <div class="card-body">
                            <div class="card-text d-flex justify-content-between text-capitalize">
                                <h5 id="store-item-name">sweet item</h5>
                                <h5 class="store-item-value">$ <strong id="store-item-price" class="font-weight-bold">5</strong></h5>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- end of single items --}}

                {{-- single items --}}
                <div class="col-10 col-sm-6 col-lg-4 mx-auto my-3 store-item sweets" data-item="sweets">
                    <div class="card single-item">
                        <div class="img-container">
                            <img src="{{ asset('images/img/cupcake-3.jpeg') }}" alt="" class="card-img-top store-img">
                            <span class="store-item-icon">
                                <i class="material-icons">shopping_cart</i>
                            </span>
                        </div>

                        <div class="card-body">
                            <div class="card-text d-flex justify-content-between text-capitalize">
                                <h5 id="store-item-name">sweet item</h5>
                                <h5 class="store-item-value">$ <strong id="store-item-price" class="font-weight-bold">5</strong></h5>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- end of single items --}}

                {{-- single items --}}
                <div class="col-10 col-sm-6 col-lg-4 mx-auto my-3 store-item sweets" data-item="sweets">
                    <div class="card single-item">
                        <div class="img-container">
                            <img src="{{ asset('images/img/doughnut-1.jpeg') }}" alt="" class="card-img-top store-img">
                            <span class="store-item-icon">
                                <i class="material-icons">shopping_cart</i>
                            </span>
                        </div>

                        <div class="card-body">
                            <div class="card-text d-flex justify-content-between text-capitalize">
                                <h5 id="store-item-name">sweet item</h5>
                                <h5 class="store-item-value">$ <strong id="store-item-price" class="font-weight-bold">5</strong></h5>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- end of single items --}}

                {{-- single items --}}
                <div class="col-10 col-sm-6 col-lg-4 mx-auto my-3 store-item sweets" data-item="sweets">
                    <div class="card single-item">
                        <div class="img-container">
                            <img src="{{ asset('images/img/doughnut-2.jpeg') }}" alt="" class="card-img-top store-img">
                            <span class="store-item-icon">
                                <i class="material-icons">shopping_cart</i>
                            </span>
                        </div>

                        <div class="card-body">
                            <div class="card-text d-flex justify-content-between text-capitalize">
                                <h5 id="store-item-name">sweet item</h5>
                                <h5 class="store-item-value">$ <strong id="store-item-price" class="font-weight-bold">5</strong></h5>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- end of single items --}}

                {{-- single items --}}
                <div class="col-10 col-sm-6 col-lg-4 mx-auto my-3 store-item sweets" data-item="sweets">
                    <div class="card single-item">
                        <div class="img-container">
                            <img src="{{ asset('images/img/doughnut-3.jpeg') }}" alt="" class="card-img-top store-img">
                            <span class="store-item-icon">
                                <i class="material-icons">shopping_cart</i>
                            </span>
                        </div>

                        <div class="card-body">
                            <div class="card-text d-flex justify-content-between text-capitalize">
                                <h5 id="store-item-name">sweet item</h5>
                                <h5 class="store-item-value">$ <strong id="store-item-price" class="font-weight-bold">5</strong></h5>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- end of single items --}}
            </div>
            {{-- end of store items --}}
        </div>
    </section>
    {{-- end of store section --}}

    {{-- services --}}
    <section id="services" class="services">
        <div class="container">
            <div class="row">

                {{-- single services --}}
                <div class="col-md-4 text-center my-3">
                    <img src="{{ asset('images/img/bread-icon.png') }}" alt="bread-icon">
                    <h6 class="text-uppercase my-3 service-title">bread</h6>
                    <p class="w-75 mx-auto text-left service-text">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel nisi vero alias rerum ab et facilis odit praesentium officiis fugiat.
                    </p>
                </div>
                {{-- ends of single service --}}

                {{-- single services --}}
                <div class="col-md-4 text-center my-3">
                    <img src="{{ asset('images/img/cupcake-icon.png') }}" alt="bread-icon">
                    <h6 class="text-uppercase my-3 service-title">bread</h6>
                    <p class="w-75 mx-auto text-left service-text">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel nisi vero alias rerum ab et facilis odit praesentium officiis fugiat.
                    </p>
                </div>
                {{-- ends of single service --}}

                {{-- single services --}}
                <div class="col-md-4 text-center my-3">
                    <img src="{{ asset('images/img/candy-icon.png') }}" alt="bread-icon">
                    <h6 class="text-uppercase my-3 service-title">bread</h6>
                    <p class="w-75 mx-auto text-left service-text">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel nisi vero alias rerum ab et facilis odit praesentium officiis fugiat.
                    </p>
                </div>
                {{-- ends of single service --}}
            </div>
        </div>
    </section>
    {{-- end of services --}}

    {{-- order cakes --}}
    <section id="cakes" class="cakes py-5">
        <div class="container">

            {{--  title --}}
            <div class="row">
                <div class="col-10 mx-auto col-sm-6 text-center">
                    <h1 class="text-capitalize">order
                        <strong class="banner-title">cakes</strong>
                    </h1>
                </div>
            </div>
            {{-- ends of title --}}

            <div class="row">
                {{-- single cakes --}}
                <div class="col-11 mx-auto col-md-6 col-lg-4 my-4 text-capitalize text-center">
                    <h3 class="py-3">birthday cake</h3>
                    <div class="text-muted">
                        <p class="my-3">birthday cake with a name</p>
                        <p class="my-3">custom ingredients</p>
                        <p class="my-3">custom size</p>
                        <p class="my-3">custom design</p>

                        <button class="btn btn-pink text-capitalize mb-3">order now</button>

                        <p class="text-lowercase mb-4">starting at </p>
                        <img src="{{ asset('images/img/trans-cake.png') }}" alt="" class="img-fluid">
                    </div>
                </div>
                {{-- ends of single cakes --}}

                {{-- single cakes --}}
                <div class="col-11 mx-auto col-md-6 col-lg-4 my-4 text-capitalize text-center">
                    <h3 class="py-3">wedding cake</h3>
                    <div class="text-muted">
                        <p class="my-3">wedding cake with a name</p>
                        <p class="my-3">custom ingredients</p>
                        <p class="my-3">custom size</p>
                        <p class="my-3">custom design</p>

                        <button class="btn btn-pink text-capitalize mb-3">order now</button>

                        <p class="text-lowercase mb-4">starting at </p>
                        <img src="{{ asset('images/img/trans-wedding.png') }}" alt="" class="img-fluid">
                    </div>
                </div>
                {{-- ends of single cakes --}}

                {{-- single cakes --}}
                <div class="col-11 mx-auto col-md-6 col-lg-4 my-4 text-capitalize text-center">
                    <h3 class="py-3">custom cake</h3>
                    <div class="text-muted">
                        <p class="my-3">custom cake with a name</p>
                        <p class="my-3">custom ingredients</p>
                        <p class="my-3">custom size</p>
                        <p class="my-3">custom design</p>

                        <button class="btn btn-pink text-capitalize mb-3">order now</button>

                        <p class="text-lowercase mb-4">starting at </p>
                        <img src="{{ asset('images/img/trans-custom.png') }}" alt="" class="img-fluid">
                    </div>
                </div>
                {{-- ends of single cakes --}}
            </div>


        </div>
    </section>
    {{-- ends of order cakes --}}


    {{-- footer section --}}
    <footer>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 footer-title py-5">
                    <h1 class="text-capitalize text-center">
                        <strong class="banner-title">grandma's</strong>
                    </h1>

                    <div class="footer-icons mt-3 d-flex justify-content-around flex-wrap">
                        <a href="#" class="footer-icon">
                            <i class="material-icons">facebook</i>
                        </a>

                        <a href="#" class="footer-icon">
                            <i class="fab fa-instagram"></i>
                        </a>

                        <a href="#" class="footer-icon">
                            <i class="fab fa-twitter"></i>
                        </a>

                        <a href="#" class="footer-icon">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>

                <div class="col-md-6 footer-contact text-center text-capitalize p-5">
                    <h3 class="mb-5">contact</h3>

                    <p class="d-flex flex-wrap">
                        <span class="mr-4 footer-icon"><i class="material-icons">place</i></span>
                        <span class="text-lowercase">123 Main Street, San Diego CA 90101</span>
                    </p>

                    <p class="d-flex flex-wrap">
                        <span class="mr-4 footer-icon"><i class="material-icons">email</i></span>
                        <span class="text-lowercase">email@gmail.com</span>
                    </p>

                    <p class="d-flex flex-wrap">
                        <span class="mr-4 footer-icon">
                            <i class="material-icons">call</i>
                        </span>
                        <span>+123 456 789</span>
                    </p>
                </div>
            </div>
        </div>
    </footer>
    {{-- ends of footer section --}}
    
        {{-- jquery --}}
    <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
    {{-- bootstrap js --}}
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    {{-- script js --}}
    <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
