<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800,900" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        <nav id="nav">
            <div class="container">
                <a href="#" class="navbar-brand">
                    <img src="{{ url('images/logo-header.svg') }}" alt="Logo" />
                </a>
            </div>
        </nav>
        <header id="header">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <h1>Fast and simple, Unsecured funding.</h1>
                        <p class="text">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus at augue aliquam, sodales mi consectetur, efficitur ante. Mauris luctus urna at dolor posuere commodo.
                        </p>
                        <a href="#" class="button">Apply Now</a>
                        <p class="text-description">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus at augue aliquam, sodales mi consectetur.
                        </p>
                    </div>
                </div>
            </div>
        </header>
        <section id="section-1">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 offset-md-1">
                        <h2 class="title">Getting <span>capital</span> for your business is complicate</h2>
                    </div>
                    <div class="col-md-5">
                        <p class="text">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus at augue aliquam.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section id="section-2">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 mx-auto text-center">
                        <h2 class="title">Take the guesswork out of funding</h2>
                        <p class="text">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus at augue aliquam, sodales mi consectetur, efficitur ante. Mauris luctus urna at dolor posuere commodo. In vulputate quam a porta congue.
                        </p>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-10 col-md-3 mx-auto">
                        <img src="{{ url('images/Group-9.svg') }}" alt="Image 1" class="img-description" />
                        <p class="text-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                    <div class="col-10 col-md-3 mx-auto">
                        <img src="{{ url('images/Group-8.svg') }}" alt="Image 2" class="img-description" />
                        <p class="text-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                    <div class="col-10 col-md-3 mx-auto">
                        <img src="{{ url('images/Group-55.svg') }}" alt="Image 3" class="img-description" />
                        <p class="text-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                    <div class="col-10 col-md-3 mx-auto">
                        <img src="{{ url('images/Group-14.svg') }}" alt="Image 4" class="img-description" />
                        <p class="text-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </div>
            </div>
        </section>
        <section id="section-3">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 mx-auto text-center">
                        <h2 class="title">Take the guesswork out of funding</h2>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-10 col-md-5 offset-md-1 mx-auto">
                        <img src="{{ url('images/v-img-1.svg') }}" alt="Image 1" class="img-description" />
                    </div>
                    <div class="col-10 col-md-5 mx-auto">
                        <h4 class="subtitle">Start-up funding</h4>
                        <p class="text-description">Maximize your found</p>
                        <p class="text">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus at augue aliquam.
                        </p>
                        <a href="#" class="button">Apply Now</a>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-10 col-md-5 offset-md-1 order-2 order-md-1 mx-auto">
                        <h4 class="subtitle">Start-up funding</h4>
                        <p class="text-description">Maximize your found</p>
                        <p class="text">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus at augue aliquam.
                        </p>
                        <a href="#" class="button">Apply Now</a>
                    </div>
                    <div class="col-10 col-md-5 order-1 order-md-2 mx-auto">
                        <img src="{{ url('images/v-img-2.svg') }}" alt="Image 2" class="img-description" />
                    </div>
                </div>
            </div>
        </section>
        <section id="section-4">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 mx-auto text-center">
                        <h2 class="title">Written testimonials</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8 mx-auto">
                        <div class="block">
                            <div class="profile">
                                <img src="{{ url('images/jack-finnigan-701253-unsplash@2x.png') }}" alt="Profile 1" class="img-profile" />
                                <div class="profile-info">
                                    <p class="profile-name">Jack Finnigan</p>
                                    <p class="profile-position">Full Stack Development</p>
                                </div>
                            </div>
                            <p class="text">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus at augue aliquam, sodales mi consectetur, efficitur ante. Mauris luctus urna at dolor posuere commodo. In vulputate quam a porta congue. Donec tincidunt ante sit amet ante commodo, vitae dignissim odio rutrum.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8 mx-auto">
                        <div class="block">
                            <div class="profile">
                                <img src="{{ url('images/jurica-koletic-317414-unsplash@2x.png') }}" alt="Profile 1" class="img-profile" />
                                <div class="profile-info">
                                    <p class="profile-name">Jurica Koletic</p>
                                    <p class="profile-position">Full Stack Development</p>
                                </div>
                            </div>
                            <p class="text">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus at augue aliquam, sodales mi consectetur, efficitur ante. Mauris luctus urna at dolor posuere commodo. In vulputate quam a porta congue. Donec tincidunt ante sit amet ante commodo, vitae dignissim odio rutrum.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="section-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 offset-md-1">
                        <h3 class="title">Fast and simple, Unsecured.</h3>
                    </div>
                    <div class="col-md-5 text-center">
                        <a href="#" class="button mx-auto">Apply Now</a>
                        <p class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit aliquam.</p>
                    </div>
                </div>
            </div>
        </section>
        <footer id="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-3 col-sm-12">
                                <img src="{{ url('images/logo.svg') }}" alt="Logo" class="logo-footer" />
                            </div>
                            <ul class="col-6 col-md-4 list-inline menu-footer">
                                <li><a href="#">How it Works</a></li>
                                <li><a href="#">Get Funding</a></li>
                                <li><a href="#">Apply Now</a></li>
                            </ul>
                            <ul class="col-6 col-md-4 list-inline menu-footer">
                                <li><a href="#">Contact Us</a></li>
                                <li><a href="#">Careers</a></li>
                                <li><a href="#">FAQ</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <ul class="list-inline text-center">
                            <li class="list-inline-item mr-3"><a href="#"><img src="{{ url('images/slack.svg') }}" alt="Slack" /></a></li>
                            <li class="list-inline-item mr-3"><a href="#"><img src="{{ url('images/twitter.svg') }}" alt="Twitter" /></a></li>
                            <li class="list-inline-item mr-3"><a href="#"><img src="{{ url('images/linkedin.svg') }}" alt="LinkedIn" /></a></li>
                            <li class="list-inline-item mr-3"><a href="#"><img src="{{ url('images/facebook.svg') }}" alt="Facebook" /></a></li>
                            <li class="list-inline-item"><a href="#"><img src="{{ url('images/instagram.svg') }}" alt="Instagram" /></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
    </body>
</html>
