<?php get_header(); ?>

    <div class="container">
        <div class="row">
            <div class="col">
                <h1>front page.php</h1>
            </div>
        </div>
    </div>

    <div class="bg-carousel">
        <div id="carouselExampleIndicators" class="carousel slide carousel-block__banner" data-ride="carousel">

            <ol class="carousel-indicators d-md-none">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            </ol>

            <div class="carousel-inner">

                <div class="carousel-item active">
                    <div class="banner__color-overlay"></div>
                    <img class="d-block w-100" src="https://source.unsplash.com/random/1800x900" alt="First slide">
                    <div class="carousel-caption">
                        <div class="container h-100 px-0">
                            <div class="row align-items-center h-100">
                                <div class="col-lg-6">
                                    <h2 class="carousel-block__title">UNLEASH YOUR FULL PERFORMANCE</h2>
                                    <p class="lead text-primary d-none d-md-block">Lorem ipsum dolor sit amet,
                                        consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et
                                        dolore magna </p>
                                    <a href="#" class="btn btn-primary">OUR SERVICES</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="banner__color-overlay"></div>
                    <img class="d-block w-100" src="https://source.unsplash.com/random/1800x900" alt="First slide">
                    <div class="carousel-caption">
                        <div class="container h-100 px-0">
                            <div class="row align-items-center h-100">
                                <div class="col-lg-6">
                                    <h2 class="carousel-block__title">UNLEASH YOUR FULL PERFORMANCE</h2>
                                    <p class="lead text-primary d-none d-md-block">Lorem ipsum dolor sit amet,
                                        consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et
                                        dolore magna </p>
                                    <a href="#" class="btn btn-primary">OUR SERVICES</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    <br>

    <div class="bg-carousel">
        <div id="carouselExampleIndicators2" class="carousel slide carousel-block__testimonial" data-ride="carousel">

            <ol class="carousel-indicators d-md-none">
                <li data-target="#carouselExampleIndicators2" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators2" data-slide-to="1"></li>
            </ol>

            <div class="carousel-inner">

                <div class="carousel-item active pt-5 pb-4 pt-lg-9 pb-lg-7">
                    <div class="container h-100 px-0">
                        <div class="row justify-content-center">
                            <div class="col-9 col-lg-8 text-center">
                                <p class="lead">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy
                                    eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam
                                    voluptua.</p>
                                <p class="lead"><strong>Robert White</strong></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="carousel-item pt-5 pb-4 pt-lg-9 pb-lg-7">
                    <div class="container h-100 px-0">
                        <div class="row justify-content-center">
                            <div class="col-9 col-lg-8 text-center">
                                <p class="lead">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy
                                    eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam
                                    voluptua.</p>
                                <p class="lead"><strong>Robert White</strong></p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators2" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators2" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

<?php get_footer();
