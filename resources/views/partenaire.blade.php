@extends('layout')

@section('content')

<section class="page-title-wrap position-relative bg-light">
    <div id="particles_js"></div>
    <div class="container">
        <div class="row">
            <div class="col-2 pt-5 pb-5">
                <img src="{{asset('assets/img/huissier.jpg')}}" alt="" alt="" data-no-retina class="svg">
            </div>
            <div class="col-9">
                <div class="page-title position-relative pt-5 pb-5">
                    <ul class="custom-breadcrumb roboto list-unstyled mb-0 clearfix" data-animate="fadeInUp" data-delay="1.2">
                        <li><a href="index.html">Accueil</a></li>
                        <li><i class="fas fa-angle-double-right"></i></li>
                        <li><a href="#">Cabinets Partenaires</a></li>
                    </ul>
                    <h1 data-animate="fadeInUp" data-delay="1.3">Cabinets Partenaires</h1>
                </div>
            </div>
            <div class="col-1">
                <div class="world-map position-relative">
                    <img src="img/map.svg" alt="" alt="" data-no-retina class="svg">
                </div>
            </div>
        </div>
    </div>
</section>

        <!-- Our services -->
        <section>
            <div class="services-title position-relative pt-7 bg-light">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-8">
                            <div class="section-title text-center">
                                <h2 data-animate="fadeInUp" data-delay=".1">Nous reunissons les meilleurs pour vous
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="services-wrap bg-primary position-relative pt-5 pb-5">
                <div class="container">
                    <!-- All services -->
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="single-member" data-animate="fadeInUp" data-delay="0">
                        <div class="image-hover-wrap">
                            <img src="{{asset('assets/img/members/member1.jpg')}}" alt="">
                            <div class="image-hover-content d-flex justify-content-center align-items-center text-center">
                                <ul class="list-inline">
                                    <li><a href="#"><i class="fas fa-eye"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="single-member-info bg-light">
                            <h4>Vivian J. Rogers</h4>
                            <span>Cheife Executive Officer (CEO)</span>
                            <a href="#">En savoir plus <i class="fas fa-caret-right"></i></a>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="single-member" data-animate="fadeInUp" data-delay=".1">
                        <div class="image-hover-wrap">
                            <img src="{{asset('assets/img/members/member2.jpg')}}" alt="">
                            <div class="image-hover-content d-flex justify-content-center align-items-center text-center">
                                <ul class="list-inline">
                                    <li><a href="#"><i class="fas fa-eye"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="single-member-info bg-light">
                            <h4>Marie S. Higginbotham</h4>
                            <span>Senior Marketing Officer</span>
                            <a href="#">En savoir plus <i class="fas fa-caret-right"></i></a>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="single-member" data-animate="fadeInUp" data-delay=".2">
                        <div class="image-hover-wrap">
                            <img src="{{asset('assets/img/members/member3.jpg')}}" alt="">
                            <div class="image-hover-content d-flex justify-content-center align-items-center text-center">
                                <ul class="list-inline">
                                    <li><a href="#"><i class="fas fa-eye"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="single-member-info bg-light">
                            <h4>Larry W. Oliver</h4>
                            <span>Managing Director</span>
                            <a href="#">En savoir plus <i class="fas fa-caret-right"></i></a>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="single-member" data-animate="fadeInUp" data-delay=".3">
                        <div class="image-hover-wrap">
                            <img src="{{asset('assets/img/members/member4.jpg')}}" alt="">
                            <div class="image-hover-content d-flex justify-content-center align-items-center text-center">
                                <ul class="list-inline">
                                    <li><a href="#"><i class="fas fa-eye"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="single-member-info bg-light">
                            <h4>Michelle R. Weiss</h4>
                            <span>Production Manager</span>
                            <a href="#">En savoir plus <i class="fas fa-caret-right"></i></a>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="single-member" data-animate="fadeInUp" data-delay=".4">
                        <div class="image-hover-wrap">
                            <img src="{{asset('assets/img/members/member5.jpg')}}" alt="">
                            <div class="image-hover-content d-flex justify-content-center align-items-center text-center">
                                <ul class="list-inline">
                                    <li><a href="#"><i class="fas fa-eye"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="single-member-info bg-light">
                            <h4>Christine T. McCallister</h4>
                            <span>Relationship Manager</span>
                            <a href="#">En savoir plus <i class="fas fa-caret-right"></i></a>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="single-member" data-animate="fadeInUp" data-delay=".5">
                        <div class="image-hover-wrap">
                            <img src="{{asset('assets/img/members/member6.jpg')}}" alt="">
                            <div class="image-hover-content d-flex justify-content-center align-items-center text-center">
                                <ul class="list-inline">
                                    <li><a href="#"><i class="fas fa-eye"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="single-member-info bg-light">
                            <h4>Leroy L. Bowen</h4>
                            <span>Co-Founder Director</span>
                            <a href="#">En savoir plus <i class="fas fa-caret-right"></i></a>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="single-member" data-animate="fadeInUp" data-delay=".6">
                        <div class="image-hover-wrap">
                            <img src="{{asset('assets/img/members/member7.jpg')}}" alt="">
                            <div class="image-hover-content d-flex justify-content-center align-items-center text-center">
                                <ul class="list-inline">
                                    <li><a href="#"><i class="fas fa-eye"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="single-member-info bg-light">
                            <h4>Lee A. Funderburg</h4>
                            <span>Junior Creative Director</span>
                            <a href="#">En savoir plus <i class="fas fa-caret-right"></i></a>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="single-member" data-animate="fadeInUp" data-delay=".7">
                        <div class="image-hover-wrap">
                            <img src="{{asset('assets/img/members/member8.jpg')}}" alt="">
                            <div class="image-hover-content d-flex justify-content-center align-items-center text-center">
                                <ul class="list-inline">
                                    <li><a href="#"><i class="fas fa-eye"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="single-member-info bg-light">
                            <h4>Ricky M. Hallett</h4>
                            <span>Senior Marketing Officer</span>
                            <a href="#">En savoir plus <i class="fas fa-caret-right"></i></a>
                        </div>
                    </div>
                </div>

            </div>
                </div>
            </div>
        </section>
        <!-- End of Our services -->
@endsection