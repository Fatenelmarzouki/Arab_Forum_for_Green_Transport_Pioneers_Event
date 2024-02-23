<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/logo-title/GREEN ENERGY.png">
    <title>الملتقى العربي الأول لرواد النقل الأخضر ريادة وابتكار في عصر الاستدامة</title>
    <!-- Load Google icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <!-- render all elements of page -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- Fontawsome -->
    <link rel="stylesheet" href="css/all.min.css">
    <!-- Load Css Bootstrap Framework -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css.map">
    <!-- Load File Styles -->
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/landing.css">
    <link rel="stylesheet" href="css/logos.css">
    <link rel="stylesheet" href="css/modal.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/who-us.css">
    <link rel="stylesheet" href="css/confluence.css">

    {{-- <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.19/dist/sweetalert2.min.css"> --}}
    @yield('style')
</head>

<body>

        @yield('header')

        @yield('content')

            <!-- Start Footer Structure -->
            <footer class="footer">
            <div class="container-footer">
                <div class="one-col">
                <div class="rectangle">
                    <span class="days" id="d">
                    00
                    </span><span class="point">:</span>
                    <span class="minutes" id="m">
                    00
                    </span><span class="point">:</span>
                    <span class="seconds" id="s">
                    00
                    </span>
                </div>
                <button type="button" class="reservation" data-bs-toggle="modal" data-bs-target="#anotherModal">احجز مكانك</button>
                <div class="modal fade" id="anotherModal" tabindex="-1" aria-labelledby="anotherModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                        <button type="button" class="material-symbols-outlined icon-modal" data-bs-dismiss="modal" aria-label="Close">close</button>
                        </div>
                        <div class="modal-body">
                        <div class="content-body" style="width: 80%; margin: auto; padding-right: 50px;">
                        <a href="{{url('registersponser')}}" class="white" style="font-size: 24px; margin-left: 10px;">شارك معنا في صناعة الحدث</a>
                        <i class="material-symbols-outlined pos">info <div class='hint-1'>هذا الخيار فقط <br>اذا كنت تريد <br>ان تشارك في المعرض <br>او ان تشارك كراعي</div></i>
                        </div>
                        <hr class="white" style="width: 80%; margin: 10px auto;">
                        <div style="padding-left: 120px;width: 80%; margin: auto; padding-right: 50px; " class="content-body">
                            <a href="{{url('register')}}" class="white" style="font-size: 20px;">الحضور معنا كزائر</a>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
                <div class="two-col">
                <h2 class="footer-heading">روابط سريعة</h2>
                <ul class="footer-links">
                    <li><a href="{{url("who")}}">من نحن</a></li>
                    <li><a href="{{url("conf")}}">محاور الملتقى</a></li>
                    <li><a href="{{url("parteners")}}">المشاركون</a></li>
                    <li><a href="{{url("Media")}}">التغطية الإعلامية</a></li>
                </ul>
                </div>
                <div class="third-col">
                <h2 class="footer-heading">تواصل معنا</h2>
                <a href="https://www.facebook.com/et7adaraby?mibextid=ZbWKwL"><i class="fa-brands fa-facebook fa-2x footer-icon"></i></a>
                </div>
            </div>
        </footer>
        <p class="final">حقوق النشر © 2023. جميع الحقوق محفوظة.</p>
        <!-- End Footer Structure -->
        <!-- Load Js Bootstrap Framework -->
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/bootstrap.bundle.min.js.map"></script>
        <!-- Load File JavaScript -->
        <script src="js/script.js"></script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.19/dist/sweetalert2.min.js"></script> --}}

        <script>
        var countDownDate = new Date("Sep 1 , 2023 00:00:00").getTime();
        var x = setInterval(function(){
            var now = new Date().getTime();
            var distance = countDownDate - now ;
            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60 )) / 1000);

            document.getElementById("d").innerHTML = days;
            document.getElementById("m").innerHTML = minutes ;
            document.getElementById("s").innerHTML = seconds ;
        }, 1000);
        </script>
</body>
</html>
