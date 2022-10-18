<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mondroit.bf | Inscription</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/login.css">

  <link rel="stylesheet" href="assets/css/login.css">
</head>
<body>
  <main class="d-flex align-items-center min-vh-100 py-3 py-md-0">
    <div class="container">
      <div class="card login-card">
        <div class="row no-gutters">
          <div class="col-md-7">
            <div class="card-body">
              <div class="brand-wrapper">
                <img src="{{asset('assets/img/logo-small.png')}}" alt="logo" class="logo">
              </div>
              <p class="login-card-description">Connectez vous à votre compte</p>

              <form action="{{route('auth.register')}}" method="post">
                @csrf
                <div class="form-group">
                  <label for="type">Type de compte</label>
                  <select class="form-control @error('type') is-invalid @enderror" name="type"
                  id="type" placeholder="Choisir" required>
                      <option value="1" selected>PERSONNE PHYSIQUE</option>
                      <option value="2">PERSONNE MORALE</option>
                    </select>
                  @error('type')
                  <p class="text-danger">{{ $message }}</p>
                  @enderror
                </div>
                <div class="form-group">
                  {{-- <label for="nom">Nom</label> --}}
                  <input type="text" class="form-control @error('nom') is-invalid @enderror" name="nom" id="nom" placeholder="Nom" required>
                  @error('nom')
                  <p class="text-danger">{{ $message }}</p>
                  @enderror
                </div>
                <div class="form-group">
                  {{-- <label for="prenom">Prénoms</label> --}}
                  <input type="text" class="form-control @error('prenom') is-invalid @enderror" name="prenom" id="prenom" placeholder="Prénoms" required>
                  @error('prenom')
                  <p class="text-danger">{{ $message }}</p>
                  @enderror
                </div>
                <div class="form-group">
                  {{-- <label for="phone">Téléphone</label> --}}
                  <input type="tel" class="form-control @error('phone') is-invalid @enderror" name="phone" id="phone" placeholder="Téléphone" required>
                  @error('phone')
                  <p class="text-danger">{{ $message }}</p>
                  @enderror
                </div>
                <div class="form-group">
                  {{-- <label for="email">Email</label> --}}
                  <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="E-mail" required>
                  @error('email')
                  <p class="text-danger">{{ $message }}</p>
                  @enderror
                </div>
                <div class="form-group mb-5">
                  {{-- <label for="password">Mot de passe</label> --}}
                  <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" placeholder="Mot de passe" autocomplete="new-password" required>
                  @error('password')
                  <p class="text-danger">{{ $message }}</p>
                  @enderror
                </div>
                <div class="row">
                  <div class="col-12">
                    <button type="submit" class="btn btn-primary btn-block">Inscription</button>
                  </div>
                </div>
            <p class="mb-0 mt-3 text-right">
              <a href="/login" class="text-primary">Vous avez déja un compte. Se connecter</a>
            </p>
              </form>
                {{-- <a href="#!" class="forgot-password-link">Forgot password?</a>
                <p class="login-card-footer-text">Don't have an account? <a href="#!" class="text-reset">Register here</a></p>
                <nav class="login-card-footer-nav">
                  <a href="#!">Terms of use.</a>
                  <a href="#!">Privacy policy</a> --}}
                </nav>
            </div>
          </div>
          <div class="col-md-5">
            <img src="{{asset('assets/img/login1.jpg')}}" alt="login" class="login-card-img">
          </div>
        </div>
      </div>
    </div>
  </main>

@include("includes.script_import")
</body>
</html>

