@extends('layout')

@section('content')

<section class="page-title-wrap position-relative bg-light">
    <div id="particles_js"></div>
    <div class="container">
        <div class="row">
            <div class="col-11">
                <div class="page-title position-relative pt-5 pb-5">
                    <ul class="custom-breadcrumb roboto list-unstyled mb-0 clearfix" data-animate="fadeInUp" data-delay="1.2">
                        <li><a href="index.html">Accueil</a></li>
                        <li><i class="fas fa-angle-double-right"></i></li>
                        <li><a href="#">Nouveau ticket</a></li>
                    </ul>
                    <h1 data-animate="fadeInUp" data-delay="1.3">Nouveau ticket</h1>
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


<main class="d-flex align-items-center min-vh-100 py-3 py-md-0">
    <div class="container">
      <div class="card login-card">
        <div class="row no-gutters">
          <div class="col-md-5">
            <img src="{{asset('assets/img/login2.jpg')}}" alt="login" class="login-card-img">
          </div>
          <div class="col-md-7 p-5">
            <div class="card-body p-5">
                <h1 class=" text-center">Demande d'assistance</h1>
              <p class="login-card-description text-center">Remplissez ce formulaire pour demander une assistance</p>

      <form action="{{route('auth.connect')}}" method="post">
        @csrf

        <div class="form-group">
            <label for="objet">Objet <span class="text-danger">*</span></label>
                <select class="custom-select form-control @error('objet') is-invalid @enderror" name="objet"
                id="objet" placeholder="Choisir" required value="{{old('objet')}}">
                    <option value="" disabled selected>--Choisir--</option>
                    <option value="1">Besoin d'un actes juridiques</option>
                    <option value="2">Procédure judiciaire</option>
                    <option value="3">Besoin d'un avocat</option>
                    <option value="4">Documents de société</option>
                    <option value="5">Je souhaite discuter par appel</option>
                    <option value="6">Autre type de services</option>
                  </select>
            @error('objet')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="form-group">
          {{-- <label for="phone">Téléphone</label> --}}
          <textarea class="form-control @error('msg') is-invalid @enderror" name="msg" id="msg" value="{{old('msg')}}"  placeholder="Decrivez brievement votre demande" cols="30" rows="6" required></textarea>
          @error('msg')
          <p class="text-danger text-center">{{ $message }}</p>
          @enderror
        </div>
        <div class="row">
          <div class="col-12">
            <a href="#" class="btn btn-primary btn-block">Envoyer</a>
          </div>
        </div>
      </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>

@endsection