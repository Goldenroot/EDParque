<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <title>
        EDParque
    </title>

    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>


    <link href="{{ URL::asset('css/reg.css') }} " rel="stylesheet" />
    <link href="{{ URL::asset('css/app.css') }} " rel="stylesheet" />
</head>

<body style="font-size: 18px; padding: 0; margin: 0; font-weight: 400; position: relative; background-color: #000033; overflow-x: hidden;">

<div class="page-wrapper">

    <div class="modal fade" id="loginModal" tabindex="1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content bg-transparent">
                <div class="modal-body">
                    <div class="account-area">
                        <h3 class="title mb-4">Welcome to Ophela</h3>
                        <form class="account-form">
                            <div class="form-group">
                                <label>Your Email </label>
                                <input type="email" name="login_email" placeholder="Enter Your Email" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Password </label>
                                <input type="password" name="login_email" placeholder="Enter Your Password" class="form-control">
                            </div>
                            <div class="form-group">
                                <p>Forgot your password? <a href="#0">recover password</a></p>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="cmn-btn">Sign IN</button>
                            </div>
                        </form>
                        <div class="or-devider mt-5"><span>OR</span></div>
                        <div class="text-center mt-4">
                            <p>Sign up with your work email</p>
                            <a href="#0" class="google-btn mt-4 mb-3"><img src="assets/images/icon/google.png" alt="image">Sign Up with Google</a>
                            <p>Don't have an account? <a href="#0" data-dismiss="modal" data-toggle="modal" data-target="#signupModal">Sign up here</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="signupModal" tabindex="1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content bg-transparent">
                <div class="modal-body">
                    <div class="account-area">
                        <h3 class="title mb-4">Let's get started</h3>
                        <div class="text-center mt-4">
                            <a href="#0" class="google-btn mt-4 mb-3"><img src="assets/images/icon/google.png" alt="image">Sign Up with Google</a>
                        </div>
                        <div class="or-devider mt-4"><span>OR</span></div>
                        <p class="text-center mt-2 mb-4">Sign up with your work email</p>
                        <form class="account-form">
                            <div class="form-group">
                                <label>Your Email </label>
                                <input type="email" name="login_email" placeholder="Enter Your Email" class="form-control">
                            </div>
                            <div class="text-center">
                                <button type="submit" class="cmn-btn">Try It Now</button>
                            </div>
                        </form>
                        <p class="text-center mt-3">Already have an account?<a href="#0" data-dismiss="modal" data-toggle="modal" data-target="#loginModal">Sign In</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="hero bg_img" style="background-image: url('/images/hero.jpg')">
        <div class="hero__shape">
            <img src='images/shape.png' alt="image">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="hero__content">
                        <span class="hero__sub-title wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.3s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.3s; animation-name: fadeInUp;">EDParque</span>
                        <h2 class="hero__title wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.5s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.5s; animation-name: fadeInUp;">Texto Ilustrativo</h2>
                        <p class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.7s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.7s; animation-name: fadeInUp;">Texto sobre as notas</p>
                        <a href="games.html" class="cmn-btn wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.9s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.9s; animation-name: fadeInUp;">Regista-te já!</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
</body>
