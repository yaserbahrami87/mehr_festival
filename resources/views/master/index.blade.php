<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <link rel="icon" href="/assets/images/favicon2.png" sizes="32x32" type="image/png">
    <title>جشنواره هنری گنجینه مهر موسسه آفرینش های هنری آستان قدس رضوی</title>

    <link rel="stylesheet" href="/assets/css/icons.min.css">
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/animate.min.css">
    <link rel="stylesheet" href="/assets/css/fancybox.min.css">
    <link rel="stylesheet" href="/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/assets/css/jquery.circliful.css">
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/rtl.css">
    <link rel="stylesheet" href="/assets/css/fonts.css">
    <link rel="stylesheet" href="/assets/css/responsive.css">

    <!-- Color Scheme -->
    <link rel="stylesheet" href="/assets/css/colors/color3.css" /><!-- Color -->

    @yield('headerScript')
</head>
<body>
    <main>
        <div class="pageloader-wrap">
            <div class="loader">
                <div class="loader__bar"></div>
                <div class="loader__bar"></div>
                <div class="loader__bar"></div>
                <div class="loader__bar"></div>
                <div class="loader__bar"></div>
                <div class="loader__ball"></div>
            </div>
        </div><!-- Pageloader Wrap -->

        @include('master.header')
        <div class="contact-form-model-wrap text-center">
            <span class="model-close"><i class="fa fa-times"></i></span>
            <div class="contact-form-inner">
                <div class="sec-title text-center">
                    <div class="sec-title-inner">
                        <span>سوالی دارید؟</span>
                        <h3>ارسال پیام</h3>
                    </div>
                </div>
                <div class="contact-form text-center">
                    <form>
                        <div class="row mrg20">
                            <div class="col-md-6 col-sm-6 col-lg-6">
                                <input type="text" placeholder="نام">
                            </div>
                            <div class="col-md-6 col-sm-6 col-lg-6">
                                <input type="email" placeholder="ایمیل">
                            </div>
                            <div class="col-md-12 col-sm-12 col-lg-12">
                                <textarea placeholder="پیام شما"></textarea>
                                <button class="thm-btn brd-rd40" type="submit">ارسال پیام</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div><!-- Contact Form Model Wrap -->
        @yield('content')

        @include('master.footer')
    </main><!-- Main Wrapper -->

    <script src="/assets/js/jquery.min.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>
    <script src="/assets/js/downCount.js"></script>
    <script src="/assets/js/fancybox.min.js"></script>
    <script src="/assets/js/isotope.pkgd.min.js"></script>
    <script src="/assets/js/perfectscrollbar.min.js"></script>
    <script src="/assets/js/owl.carousel.min.js"></script>
    <script src="/assets/js/jquery.circliful.min.js"></script>
    <script src="/assets/js/custom-scripts.js"></script>
    @yield('footerScript')
</body>
</html>

