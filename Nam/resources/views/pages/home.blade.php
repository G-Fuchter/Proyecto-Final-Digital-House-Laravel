@extends('layouts.default')

@section('content')
<section class="splash accent_bg d-flex justify-content-center align-content-center position-relative py-5">
    <div class="position-absolute back_splash1 d-none d-md-block">
        <img src="img/backSplash.png" />
    </div>
    <div class="container d-flex justify-content-center align-content-center">
        <div class="row d-flex justify-content-center align-content-center">
            <div class="col-12 col-md-8 justify-content-center align-content-center align-items-center d-flex flex-column">
                <h1 class="dark text-center mb-md-5 belda">Ñam es comida rica, casera, lista para comer y con el plus de tener todos los días una sorpresa en tu mesa.</h1>
                <p class="dark">
                    <a class="btn btn_cta dark" href="/products">
                        Comprar ahora!
                    </a>
                </p>
            </div>
        </div>
    </div>
    <div class="position-absolute back_splash2  d-none d-md-block">
        <img src="img/backSplash2.png" />
    </div>
</section>
<section class="feat_products d-flex justify-content-center align-content-center py-5">
    <div class="container d-flex justify-content-center align-content-center">
        <div class="row d-flex justify-content-center align-content-center px-3">
            <header class="col-12 d-flex justify-content-between align-content-center">
                <h2 class="accent">Combos destacados</h2>
                <a href="#" class="accent">Mirá todos</a>
            </header>
            <div class="row">
                <div class="col-sm-4">
                    <div class="card mb-3">
                        <img src="img/products/1.jpg" class="card-img-top" alt="...">
                        <div class="card-body text-center">
                            <h5 class="card-title accent gill">Sorpresa Veggie</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            <a href="#" class="btn border accent_border accent">¡Lo quiero!</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card mb-3">
                        <img src="img/products/1.jpg" class="card-img-top" alt="...">
                        <div class="card-body text-center">
                            <h5 class="card-title accent gill">Sorpresa Fit</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            <a href="#" class="btn border accent_border accent">¡Lo quiero!</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card mb-3">
                        <img src="img/products/1.jpg" class="card-img-top" alt="...">
                        <div class="card-body text-center">
                            <h5 class="card-title accent gill">Postre especial</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            <a href="#" class="btn border accent_border accent">¡Lo quiero!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="testimonials light_bg d-flex justify-content-center align-content-center pb-5">
    <div class="container d-flex justify-content-center align-content-center">
        <div class="row d-flex justify-content-center align-content-center">
            <div class="col-12 px-3">
                <div id="carousel" class="carousel slide carousel-fade" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <figure class="position-relative">
                                <div class="mx-auto overflow-hidden position-absolute"><img src="img/kit.jpeg" class="img-fluid" /></div>
                                <figcaption class="pt-5">
                                    <p class="m-0 pt-4 text-center">Sed non nunc tempus, mollis ante eu, molestie felis. Pellentesque non convallis ligula. Duis non odio ut metus scelerisque volutpat sed in nibh. Sed malesuada enim est, id congue risus porta ac. Donec a leo
                                        rutrum, condimentum urna a, maximus enim. Duis elit erat, convallis et euismod ut, rutrum ut ligula. Curabitur porta sit amet nunc eu lobortis. Aliquam vulputate dapibus nulla, ac accumsan libero rhoncus
                                        vitae. Nunc porttitor congue purus. Nunc mattis dui porta, venenatis velit finibus, facilisis lorem.</p>

                                </figcaption>
                            </figure>
                        </div>
                        <div class="carousel-item">
                            <figure class="position-relative">
                                <div class="mx-auto overflow-hidden position-absolute"><img src="img/bran.jpg" class="img-fluid" /></div>
                                <figcaption class="pt-5">
                                    <p class="m-0 pt-4 text-center"> Curabitur porta sit amet nunc eu lobortis. Aliquam vulputate dapibus nulla, ac accumsan libero rhoncus vitae. Nunc porttitor congue purus. Nunc mattis dui porta, venenatis velit finibus, facilisis lorem.Sed
                                        non nunc tempus, mollis ante eu, molestie felis. Pellentesque non convallis ligula. Duis non odio ut metus scelerisque volutpat sed in nibh. Sed malesuada enim est, id congue risus porta ac. Donec a leo
                                        rutrum, condimentum urna a, maximus enim. Duis elit erat, convallis et euismod ut, rutrum ut ligula.</p>

                                </figcaption>
                            </figure>
                        </div>
                        <div class="carousel-item">
                            <figure class="position-relative">
                                <div class="mx-auto overflow-hidden position-absolute"><img src="img/dani.jpg" class="img-fluid" /></div>
                                <figcaption class="pt-5">
                                    <p class="m-0 pt-4 text-center">Sed malesuada enim est, id congue risus porta ac. Donec a leo rutrum, condimentum urna a, maximus enim. Duis elit erat, convallis et euismod ut, rutrum ut ligula. Curabitur porta sit amet nunc eu lobortis. Aliquam
                                        vulputate dapibus nulla, ac accumsan libero rhoncus vitae. Nunc porttitor congue purus. Nunc mattis dui porta, venenatis velit finibus, facilisis lorem.Sed non nunc tempus, mollis ante eu, molestie felis.
                                        Pellentesque non convallis ligula. Duis non odio ut metus scelerisque volutpat sed in nibh. </p>

                                </figcaption>
                            </figure>
                        </div>
                    </div>
                    <ol class="carousel-indicators">
                        <li data-target="#carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel" data-slide-to="1"></li>
                        <li data-target="#carousel" data-slide-to="2"></li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
</section>
@endsection