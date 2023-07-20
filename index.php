<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home - rates.lk</title>
    <!--<meta http-equiv="refresh" content="10"-->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cabin:700&amp;display=swap">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/Pricing-Yearly--Monthly-badges.css">
    <link rel="stylesheet" href="assets/css/Pricing-Yearly--Monthly-icons.css">
</head>

<body id="page-top" data-bs-spy="scroll" data-bs-target="#mainNav" data-bs-offset="77">
    <nav class="navbar navbar-expand-md fixed-top navbar-light" id="mainNav">
        <div class="container"><a class="navbar-brand" href="#"
                style="--bs-body-bg: #00ff00;color: #00ff00;">rates.lk</a><button data-bs-toggle="collapse"
                class="navbar-toggler navbar-toggler-right" data-bs-target="#navbarResponsive" type="button"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation" value="Menu"><i
                    class="fa fa-bars"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item nav-link"><a class="nav-link active" href="#about"
                            style="width: 115.5312px;text-align: center;">updates</a></li>
                    <li class="nav-item nav-link"><a class="nav-link" href="#contact">contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <header class="masthead" style="background: url(&quot;assets/img/BG-01.jpg&quot;);
        background-size: cover;background-position: center;background-repeat: no-repeat;background-attachment: fixed;height: 100vh;
    ">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="mx-auto col-lg-8"><img src="assets/img/logo-01.png" style="width:60%;">
                        <p class="intro-text">Your Gateway to Daily Rate Fluctuations !</p><a class="btn btn-primary"
                            role="button"
                            style="background: #00ff00;margin-top: -17px;width: 209.5938px;height: 35px;color: #1c1c1c;text-align: center;box-shadow: 0px 0px 10px 0px;"
                            data-bs-target="#about" href="#about">VIEW TODAY&nbsp;RATES</a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section class="text-center content-section"
        style="padding: 86px 0px;padding-top: 82px;padding-bottom: 122px;">
        <div class="container py-4 py-xl-5" style="padding-top: 27px;">
            <div class="mb-5 row">
                <div class="mx-auto text-center col-md-8 col-xl-6">
                    <h2>today&nbsp;ratings</h2>
                    <p class="w-lg-50">IN FOLLOW, YOU CAN SEE THE VALUEVES THAT ARE UPDATED TODAY</p>
                </div>
            </div>
            <div class="row"  id="about">
                <div class="col" style="padding-bottom: 22px;">
                    <div class="card h-100">
                        <div class="p-4 card-body d-flex flex-column justify-content-between"
                            style="margin-bottom: 15px;">
                            <div>
                                <div style="padding-bottom: 15%; padding-top: 15%;">
                                    <!-- 
                                    <h6 class="fw-bold" style="margin-bottom: 0;">deriv direct</h6>-->
                                    <img src="assets/img/deriv1.png" style="width: 60%;">
                                    
                                </div>
                                <h6 class="text-uppercase text-muted" style="margin-bottom: 0;">selling rate</h6>
                                <h4 class="display-6 fw-bold" style="margin-bottom: 10;" id="derivsell">00</h4>
                                <h6 class="text-uppercase text-muted" style="margin-bottom: 0;">buying rate</h6>
                                <h4 class="display-6 fw-bold" id="derivbuy">00</h4>
                            </div><a class="btn btn-primary bg-primary d-block w-100" role="button"
                                style="--bs-primary: #00ff00;--bs-primary-rgb: 0,255,0;" onclick="openPopup('deriv')">BUY OR SELL</a>
                        </div>
                    </div>
                </div>
                <div class="col" style="padding-bottom: 22px;">
                    <div class="border-2 card border-primary h-100">
                        <div class="p-4 card-body d-flex flex-column justify-content-between"
                            style="margin-bottom: 15px;--bs-body-bg: #bebebe;">
                            <div>
                                <div style="padding-bottom: 15%; padding-top: 15%;">
                                    <!--h4 class="display-6 fw-bold">skrill</h4-->
                                    <img src="assets/img/Skrill.png" style="width: 30%; ">
                                </div>
                                <h6 class="text-uppercase text-muted" style="margin-bottom: 0; margin-top: 10;">selling rate</h6>
                                <h4 class="display-6 fw-bold" style="margin-bottom: 10;" id="sksell">00</h4>
                                <h6 class="text-uppercase text-muted" style="margin-bottom: 0;">buying rate</h6>
                                <h4 class="display-6 fw-bold" id="skbuy">00</h4>
                            </div><a class="btn btn-primary bg-primary d-block w-100" role="button"
                                style="--bs-primary: #00ff00;--bs-primary-rgb: 0,255,0;" onclick="openPopup('skrill')">BUY OR SELL</a>
                        </div>
                    </div>
                </div>
                <div class="col" style="padding-bottom: 22px;">
                    <div class="card h-100">
                        <div class="p-4 card-body d-flex flex-column justify-content-between"
                            style="margin-bottom: 15px;">
                            <div>
                                <div style="padding-bottom: 15%; padding-top: 15%;">
                                    <!--h4 class="display-6 fw-bold">usdt</h4-->
                                    <img src="assets/img/usdt1.png" style="width: 60%; ">
                                </div>
                                <h6 class="text-uppercase text-muted" style="margin-bottom: 0;">selling rate</h6>
                                <h4 class="display-6 fw-bold" style="margin-bottom: 10;" id="usdtsell">00</h4>
                                <h6 class="text-uppercase text-muted" style="margin-bottom: 0;">buying rate</h6>
                                <h4 class="display-6 fw-bold" id="usdtbuy">00</h4>
                            </div><a class="btn btn-primary bg-primary d-block w-100" role="button"
                                style="--bs-primary: #00ff00;--bs-primary-rgb: 0,255,0;" onclick="openPopup('usdt')">BUY OR SELL</a>
                        </div>
                    </div>
                </div>
                <div class="col" style="padding-bottom: 22px;">
                    <div class="card h-100">
                        <div class="p-4 card-body d-flex flex-column justify-content-between"
                            style="margin-bottom: 15px;">
                            <div>
                                <div style="padding-bottom: 15%; padding-top: 15%;">
                                    <!--h4 class="display-6 fw-bold">Payneer</h4-->
                                    <img src="assets/img/Payoneer.png" style="width: 60%; ">
                                </div>
                                <h6 class="text-uppercase text-muted" style="margin-bottom: 0;">selling rate</h6>
                                <h4 class="display-6 fw-bold" style="margin-bottom: 10;" id="paysell">00</h4>
                                <h6 class="text-uppercase text-muted" style="margin-bottom: 0;">buying rate</h6>
                                <h4 class="display-6 fw-bold" id="paybuy">00</h4>
                            </div><a class="btn btn-primary bg-primary d-block w-100" role="button"
                                style="--bs-primary: #00ff00;--bs-primary-rgb: 0,255,0;" onclick="openPopup('payoneer')">BUY OR SELL</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-----------------popup ------------------->
    <div id="popup-deriv" class="popup">
        <h2>Deriv</h2>
        <p>get Deriv from </p>
        <button class="btn btn-primary bg-primary d-block w-100" onclick="closePopup()">Close</button> 
    </div>
    <div id="popup-skrill" class="popup">
        <h2>Skrill</h2>
        <p>Get Skrill from</p>
        <button class="btn btn-primary bg-primary d-block w-100" onclick="closePopup()">Close</button> 
    </div>
    <div id="popup-usdt" class="popup">
        <h2>USDT</h2>
        <p>Get USDT from</p>
        <button class="btn btn-primary bg-primary d-block w-100" onclick="closePopup()">Close</button> 
    </div>
    <div id="popup-payoneer" class="popup">
        <h2>Payoneer</h2>
        <p>Get Payoneer from</p>
        <button class="btn btn-primary bg-primary d-block w-100" onclick="closePopup()">Close</button> 
    </div>
    <!-----------------popup ------------------->
    <section class="text-center content-section" id="contact">
        <div class="container">
            <div class="row">
                <div class="mx-auto col-lg-8">
                    <h2>Contact us</h2>
                    <p>Let us know <a href="#">&nbsp;HOW THIS SITE</a>&nbsp;is feel for you</p>
                    <ul class="list-inline banner-social-buttons">
                        <li class="list-inline-item">&nbsp;<a href="https://www.facebook.com/AvishkaUdrara/" class="btn btn-primary btn-lg btn-default"
                                type="button"><i class="fa fa-facebook fa-fw"></i><span class="network-name">&nbsp;
                                    Facebook</span></a></li>
                        <li class="list-inline-item">&nbsp;<button class="btn btn-primary btn-lg btn-default"
                                type="button"><i class="fa fa-twitter fa-fw"></i><span
                                    class="network-name">&nbsp;Twitter</span></button></li>
                        <li class="list-inline-item">&nbsp;<a href="https://github.com/Avishka-Udara/" class="btn btn-primary btn-lg btn-default"
                                type="button"><i class="fa fa-github fa-fw"></i><span
                                    class="network-name">&nbsp;github</span></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="container text-center">
            <p>Copyright ©&nbsp;rates.lk 2023</p>
        </div>
    </footer>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/grayscale.js"></script>
    <script src="assets/js/script.js"></script>
    <?php $random_id = rand(10000, 99999);$js_file_path = 'assets/js/currupdate.js';$js_file_url = $js_file_path . '?id=' . $random_id;?>
    <!-- Include the JavaScript file with the generated random ID -->
    <script src="<?php echo $js_file_url; ?>"></script>

</body>

</html>