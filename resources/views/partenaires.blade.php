@extends("layout")

@section("content")

<section class="page-title-wrap position-relative bg-light">
    <div id="particles_js"></div>
    <div class="container">
        <div class="row">
            <div class="col-11">
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
                    <img src="img/map.svg" alt="" alt="" data-no-retina class="svg">>
                </div>
            </div>
        </div>
    </div>
</section>

    <section class="pt-7 pb-7 bg-light">
        <div class="container">
            <div class="row align-items-lg-end">
                <div class="col-md-12">
                    <div class="section-title">
                        <h2 data-animate="fadeInUp" data-delay=".1" class="text-primary">Dommaine d'activité</h2>
                        <p data-animate="fadeInUp" data-delay=".2">Selectionnez le domaine dans la liste ci-dessous pour voir la listes des partenaires disponibles pour ce domaine </p>
                    </div>
                    <div class="queries-wrap">
                        <div class="row">
                            <div class="col-lg-4 col-md-12">
                                <div class="single-query bg-white d-flex align-items-center" data-animate="fadeInUp" data-delay=".05">
                                    <div class="query-icon w-50">
                                        <img src="{{asset('assets/img/huissier.jpg')}}" alt="" alt="" data-no-retina class="svg">
                                    </div>
                                    <div class="query-info">
                                        <h4>Huissiers de Justices</h4>
                                        <a href="{{route('partenaire.show',1)}}">Consultez la liste >></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-12">
                                <div class="single-query bg-white d-flex align-items-center" data-animate="fadeInUp" data-delay=".15">
                                    <div class="query-icon w-50">
                                        <img src="{{asset('assets/img/notaire.png')}}" alt="" data-no-retina class="svg">
                                    </div>
                                    <div class="query-info">
                                        <h4>Cabinets Notaires</h4>
                                        <a href="{{route('partenaire.show',1)}}">Consultez la liste >></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-12">
                                <div class="single-query bg-white d-flex align-items-center" data-animate="fadeInUp" data-delay=".15">
                                    <div class="query-icon w-50">
                                        <img src="{{asset('assets/img/avocat1.jpg')}}" alt="" data-no-retina class="svg">
                                    </div>
                                    <div class="query-info">
                                        <h4>Avocats</h4>
                                        <a href="{{route('partenaire.show',1)}}">Consultez la liste >></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-12">
                                <div class="single-query bg-white d-flex align-items-center" data-animate="fadeInUp" data-delay=".25">
                                    <div class="query-icon w-50">
                                        <img src="{{asset('assets/img/greffier.jpg')}}" alt="" data-no-retina class="svg">
                                    </div>
                                    <div class="query-info">
                                        <h4>Greffiers</h4>
                                        <a href="{{route('partenaire.show',1)}}">Consultez la liste >></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-12">
                                <div class="single-query bg-white d-flex align-items-center" data-animate="fadeInUp" data-delay=".45">
                                    <div class="query-icon">
                                        <img src="{{asset('assets/img/icons/affiliate-query.svg')}}" alt="" alt="" data-no-retina class="svg">
                                    </div>
                                    <div class="query-info">
                                        <h4>Jusristes</h4>
                                        <a href="{{route('partenaire.show',1)}}">Consultez la liste >></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-12">
                                <div class="single-query bg-white d-flex align-items-center" data-animate="fadeInUp" data-delay=".55">
                                    <div class="query-icon">
                                        <img src="{{asset('assets/img/icons/press-query.svg')}}" alt="" alt="" data-no-retina class="svg">
                                    </div>
                                    <div class="query-info">
                                        <h4>-----</h4>
                                        <a href="{{route('partenaire.show',1)}}">Consultez la liste >></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-lg-4 col-md-5">
                    <div class="contact-form-wrap" data-animate="fadeInUp" data-delay=".55">
                        <div class="text-center">
                            <p data-animate="fadeInUp" data-delay=".2">Fill up the form. Your e-mail will not be published. Required fields are marked by <span class="text-danger font-weight-bold">*</span></p>
                        </div>
                        <form class="contact-form" action="sendmail.php" method="post">
                            <div class="position-relative" data-animate="fadeInUp" data-delay=".3">
                                <input type="text" name="name" placeholder="Name*" required class="form-control">
                            </div>
                            <div class="position-relative" data-animate="fadeInUp" data-delay=".4">
                                <input type="email" name="email" placeholder="E-mail*" required class="form-control">
                            </div>
                            <div class="position-relative" data-animate="fadeInUp" data-delay=".5">
                                <input type="text" name="telephone" placeholder="Telephone*" data-parsley-pattern="^[\d\+\-\.\(\)\/\s]*$" data-parsley-minlength="10" data-parsley-minlength-message="Minimum 10 characters." required class="form-control">
                            </div>
                            <div class="position-relative" data-animate="fadeInUp" data-delay=".6">
                                <input type="url" name="website" placeholder="Website" class="form-control">
                            </div>
                            <div class="position-relative" data-animate="fadeInUp" data-delay=".7">
                                <textarea name="message" placeholder="Write message*" required class="form-control"></textarea>
                            </div>
                            <button class="btn btn-primary btn-square btn-block" data-animate="fadeInUp" data-delay=".8">Send message</button>
                        </form>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>
@endsection