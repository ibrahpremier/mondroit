
        <header class="header">
            <div class="header-top bg-info" data-animate="fadeInDown" data-delay=".5">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-9">
                            <!-- Header info -->
                            <ul class="header-info list-inline text-white mb-md-0">
                                <li>Email : info@xxxx.com</li>
                                <li>Téléphone : (+226) 05 XX XX XX</li>
                            </ul>
                        </div>
                        <div class="col-md-3 d-none d-md-block">
                            <!-- Header social icons -->
                            <ul class="social-icons text-right list-inline m-0">
                                <li>Suivez nous</li>
                                <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="main-header">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-2 col-md-3 col-sm-3 col-9">
                            <!-- Logo -->
                            <div class="logo" data-animate="fadeInUp" data-delay=".7">
                                <a href="{{route('home')}}">
                                    <img src="{{asset('assets/img/logo-small.png')}}" alt="logo">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-5 col-sm-3 col-3">
                            <nav data-animate="fadeInUp" data-delay=".9">
                                <!-- Header-menu -->
                                <div class="header-menu">
                                    <ul>
                                        <li class="active"><a href="{{route('home')}}">Accueil</a></li>
                                        <li>
                                            <a href="#">Publications <i
                                                    class="fas fa-caret-down"></i></a>
                                            <ul>
                                                <li><a href="{{route('categorie.show',1)}}">Droit du travail</a></li>
                                                <li><a href="{{route('categorie.show',2)}}">Droit du commerce</a></li>
                                                <li><a href="{{route('categorie.show',3)}}">Droit Civil</a></li>
                                                <li><a href="{{route('categorie.show',4)}}">Etc...</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="{{route('partenaire.index')}}">Cabinets Partenaire</a></li>
                                        <li><a href="#">Contact</a></li>
                                        <li>
                                            <a href="#">A propos </a>
                                            <!-- <ul>
                                            <li><a href="about.html">About</a></li>
                                            <li>
                                                <a href="#">Team Members <i class="fas fa-caret-right"></i></a>
                                                <ul>
                                                    <li><a href="team-grid-3.html">3 Columns</a></li>
                                                    <li><a href="team-grid-4.html">4 Columns</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="affiliate.html">Affiliate Program</a></li>
                                            <li><a href="pricing.html">Pricing Plans</a></li>
                                            <li><a href="testimonials.html">Testimonials</a></li>
                                            <li><a href="service-details.html">Service Details</a></li>
                                            <li><a href="404.html">404</a></li>
                                        </ul> -->
                                        </li>
                                    </ul>
                                </div>
                                <!-- End of Header-menu -->
                            </nav>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 d-none d-sm-block">
                            <!-- Client area -->
                            <ul class="client-area text-right list-inline m-0" data-animate="fadeInUp" data-delay="1.1">
                                <li>
                                    <a class="btn btn-primary" href="{{route('login')}}">Espace Utilisateur</a>
                                </li>
                                <!-- <li><a class="btn btn-secondary" href="#">Try It Free</a></li> -->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </header>