<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>
        EDParque
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
                                <a href="#">Home</a>
                            </li>
                            <li class="menu_has_children">
                                <a href="#">Sobre</a>
                            </li>
                            <li>
                                <a href="#">Contacta-nos</a>
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

    <section class="hero bg_img" style="background-image: url('/images/hero.jpg')">
        <div class="hero__shape">
            <img src='images/shape.png' alt="image">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="hero__content">
                        <span class="hero__sub-title wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.3s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.3s; animation-name: fadeInUp;">EDParque</span>
                        <h2 class="hero__title wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.5s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.5s; animation-name: fadeInUp;">Bem Vindo Ao EDParque</h2>
                        <p class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.7s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.7s; animation-name: fadeInUp;">Texto sobre as notas</p>
                        @if(Auth::User())
                            <a href="{{url('home')}}" class="cmn-btn wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.9s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.9s; animation-name: fadeInUp;">Entra!</a>
                        @else
                            <a href="#" class="cmn-btn wow fadeInUp" data-dismiss="modal" data-toggle="modal" data-target="#signupModal" data-wow-duration="0.5s" data-wow-delay="0.9s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.9s; animation-name: fadeInUp;">Regista-te!</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class=" pt-120 pb-120 position-relative overflow-hidden">
        <div class="about-obj-1" data-paroller-factor="-0.08" data-paroller-type="foreground" data-paroller-direction="horizontal" style="transform: unset; transition: transform 0.1s ease 0s; will-change: transform;"><img src="images/about-obj-1.png" alt="image"></div>
        <div class="about-obj-2" data-paroller-factor="0.08" data-paroller-type="foreground" data-paroller-direction="horizontal" style="transform: unset; transition: transform 0.1s ease 0s; will-change: transform;"><img src="images/about-obj-2.png" alt="image"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="about-content">
                        <div class="section-header has--bg">
                            <div class="header-image style--two"></div>
                            <h2 class="section-title">Texto explicativo</h2>
                        </div>
                        <p>
Texto sobre o website
                        </p>
                        <a href="{{url('/about')}}" class="cmn-btn mt-5">Descobre Mais!</a>
                    </div>
                </div>
                <div class="col-lg-4 mt-lg-0 mt-4">
                    <div class="about-thumb">
                        <img src="images/about-books.png" alt="image" class="image-1">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer-section bg_img" style="background-image: url('images/footer.png')">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="subscribe-area" id="subscribe-box">
                        <div class="obj"><img src="assets/images/elements/subscribe.png" alt="image"></div>
                        <div class="subscribe-content">
                            <h2 class="title">Tens alguma dúvida?</h2>
                            <p>Envia-nos um Email!</p>
                            <p></p>
                            <form class="subscribe-form">
                                <input type="email" name="subscribe_email" id="subscribe_email" placeholder="Insere o teu endereço de Email">
                                <button type="submit">Enviar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row footer-top mb-none-50">

            </div>
            <div class="row footer-bottom align-items-center">
                <div class="col-lg-7 col-md-6 text-md-left text-center">

                </div>
                <div class="col-lg-5 col-md-6 mt-md-0 mt-3">
                    <ul class="social-links justify-content-md-end justify-content-center">
                        <li><a href="#0"><i class="lab la-facebook-f"></i></a></li>
                        <li><a href="#0"><i class="lab la-twitter"></i></a></li>
                        <li><a href="#0"><i class="lab la-pinterest-p"></i></a></li>
                        <li><a href="#0"><i class="lab la-google-plus"></i></a></li>
                        <li><a href="#0"><i class="lab la-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</div>
</body>

<script defer>


</script>

</html>
