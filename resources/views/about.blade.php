<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>
        EDParque - Sobre
    </title>

    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


    <link href="{{ URL::asset('css/reg.css') }} " rel="stylesheet" />
    <link href="{{ URL::asset('css/app.css') }} " rel="stylesheet" />
</head>

<body style="font-size: 18px; padding: 0; margin: 0; font-weight: 400; position: relative; background-color: #000033; overflow-x: hidden;">

<div class="page-wrapper">

    <div class="modal fade" id="loginModal" tabindex="1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content bg-transparent border-0">
                <div class="modal-body">
                    <div class="account-area">
                        <h3 class="title mb-4">Bem Vindo ao EDParque</h3>
                        <form class="account-form" method="POST" action="{{ route('login')}}">
                            @csrf
                            <div class="form-group">
                                <label>Endereço de Email</label>
                                <input type="email" id="email" name="email" class="form-control @error('email') is-invalid @enderror" required name="login_email" placeholder="Insere o teu Endereço de Email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>Palavra-Passe</label>
                                <input type="password" id="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Insere a tua Palavra-Passe">
                            </div>

                            <div class="form-group">
                                <p style="display: flex; flex-direction: column; align-items: center;">
                                    Esqueçeste-te da tua Palavra-Passe?
                                    <a href="#">Recupera a tua Conta</a>
                                </p>
                            </div>

                            <div class="text-center">
                                <button type="submit" class="cmn-btn">Entrar</button>
                            </div>
                        </form>
                        <div class="or-devider mt-5"><span></span></div>
                        <div class="text-center mt-4">
                            <p style="display: flex; flex-direction: column; align-items: center;">Ainda não tens conta? <a href="#0" data-dismiss="modal" data-toggle="modal" data-target="#signupModal">Regista-te Aqui</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="signupModal" tabindex="1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content bg-transparent border-0">
                <div class="modal-body">
                    <div class="account-area">
                        <h3 class="title mb-4">Vamos Começar</h3>

                        <form class="account-form" method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="form-group">
                                <label>O teu Nome </label>

                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Insere o teu Nome">

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>O teu Email</label>

                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Insere o teu Endereço de Email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>O teu Gênero</label>

                                <select class="form-control" name="gender">
                                    <option selected value="0">Homem</option>
                                    <option value="1">Mulher</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>A tua Palavra-Passe</label>

                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Insere a tua Palavra-Passe">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>Confirma a tua Palavra-Passe</label>

                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirma a tua Palavra-Passe">

                            </div>

                            <div class="text-center">
                                <button type="submit" class="cmn-btn">Regista-te</button>
                            </div>
                        </form>
                        <p class="text-center mt-3" style="display: flex; flex-direction: column; align-items: center;">
                            Já tens Conta?
                            <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#loginModal">Entra aqui!</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <header class="header">
        <div class="header__bottom">
            <div class="container">
                <nav class="navbar navbar-expand-xl align-items-center" style="position: relative; z-index: 1; padding: 0 70px; filter: drop-shadow(5px 10px 10px rgba(26, 15, 63, 0.71));">
                    <a class="site-logo site-title" href="#"><img src="assets/images/logo.png" alt="site-logo"><span class="logo-icon"><i class="flaticon-fire"></i></span></a>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav main-menu ml-auto">
                            <li class="">
                                <a href="{{url('/')}}">Home</a>
                            </li>
                        </ul>
                        <div class="nav-right">
                            @if(Auth::User())
                                <a href="{{url('home')}}">Entra!</a>
                            @else
                                <a href="#" data-toggle="modal" data-target="#signupModal">Regista-te!</a>
                            @endif
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </header>

    <section class="inner-hero bg_img" data-background="images/inner-hero.jpg" style="background-image: url('images/inner-hero.jpg')">
        <div class="shape position-absolute"><img src="images/shape.png" alt="image"></div>

        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="page-title">Sobre Nós</h2>
                    <ul class="page-list">
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li><a href="#">Sobre</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="pt-120 pb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="section-header text-center has--bg">
                        <div class="header-image"><img src="images/header-el.png" alt="image"></div>
                        <h2 class="section-title">Estatísticas</h2>
                        <p>Texto.</p>
                    </div>
                </div>
            </div>
            <div class="mt-minus-80">
                <div class="container">
                    <div class="row mb-none-30 justify-content-center">
                        <div class="col-lg-4 col-md-6 mb-30">
                            <div class="overview-card style--two">
                                <div class="overview-card__icon">
                                    <img src="assets/icon/1.png" alt="image">
                                </div>
                                <div class="overview-card__content">
                                    <h4 class="overview-card__number">Escolas</h4>
                                    <p>Escolas</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-30">
                            <div class="overview-card style--two">
                                <div class="overview-card__icon">
                                    <img src="/images/2.png" alt="image">
                                </div>
                                <div class="overview-card__content">
                                    <h4 class="overview-card__number">+{{count(\App\Models\User::all())}}</h4>
                                    <p>Estudantes</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-30">
                            <div class="overview-card style--two">
                                <div class="overview-card__icon">
                                    <img src="images/school_icon.png" alt="image">
                                </div>
                                <div class="overview-card__content">
                                    <h4 class="overview-card__number">+103</h4>
                                    <p>Notas</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
</body>
</html>
