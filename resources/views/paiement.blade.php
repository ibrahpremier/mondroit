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
                        <li><a href="#">activation</a></li>
                    </ul>
                    <h1 data-animate="fadeInUp" data-delay="1.3">Activation</h1>
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


<main class="d-flex align-items-center min-vh-100 py-5 py-md-0">
    <div class="container">
      <div class="card login-card">
        <div class="row no-gutters">
            
          <div class="col-md-10">

    <h2 class="border-bottom text-prmiary">Choisir votre mode de règlement</h2>
    <input type="hidden" name="mode-reglement" id="mode-reglement" >
  <div class="row">
    <div class="col-md-6 text-center">
        <button type="button" class="btn btn-light" id="btn-airtel-money" onclick="selectMode('airtel-money')">
        <img src="{{asset('assets/img/airtel_money.jpg')}}" alt="" width="90" >
        <h4>Airtel money</h4>
        </button>
    </div>
    <div class="col-md-6 text-center">
        <button type="button" class="btn btn-light" id="btn-moov-money" onclick="selectMode('moov-money')">
            <img src="{{asset('assets/img/mmoney.jpg')}}" alt="" width="90" >
            <h4>Moov money</h4>
        </button>
    </div>
  </div>

  <div class="row mx-5 mt-3 p-3 border bg-light" id="pay_form" style="display: none">
    <div class="col-12 p-3 mb-3 text-center bg-white">
        <small>Obtenez un code OTP de validation en composant</small> <br>
        <a href="tel:000" class="btn btn-primary" title="composer">#000*00#</a> <br>
        <small>Entrez le code OTP dans le champ ci-dessous après avoir entré le numéro utilisé pour paiement</small>
    </div>
    <div class="col-md-12 mb-3 text-center">
        <label for="phone"><b>Numéro mobile money</b></label>
        <input type="tel" required minlength="8" maxlength="8" class="form-control text-center bg-white border-0 @error('phone') is-invalid @enderror"
            name="phone" id="phone" placeholder="xxxxxxxx" style="height: 45px; font-weight: bold; letter-spacing:5px" value="{{old('phone')}}">

        @error('phone')
        <p class="text-danger">{{ $message }}</p>
        @enderror
    </div>
    <div class="col-md-12 text-center">
        <label for="otp"><b>Code OTP</b></label>
        <input type="tel" required minlength="6" maxlength="6" class="form-control text-center bg-white border-0 @error('otp') is-invalid @enderror"
            name="otp" id="otp" placeholder="XXXXXX" style="height: 45px; font-weight: bold; letter-spacing:5px" value="{{old('otp')}}">

        @error('otp')
        <p class="text-danger">{{ $message }}</p>
        @enderror
    </div>
  </div>
</div>
        </div>
      </div>
    </div>
  </main>


@endsection