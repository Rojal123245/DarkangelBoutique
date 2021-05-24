<!DOCTYPE html>
<html lang="en">
<head>
    <title>Contact V17</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="{{asset('img/core-img/favicon.ico')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('css/login.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/util.css')}}">

    <!--===============================================================================================-->
</head>
<body>
<div class="container-contact100">
    <div class="wrap-contact100">
       @yield('loginContent')

        <div class="slideshow-container contact100-more flex-col-c-m">

            <div class="mySlides ">

                <img src="{{asset('multiImages/1620972492darkangel.jpg')}}" style="width:100%; height:820px; ">
                <div class="text">Darkangel</div>
            </div>

            <div class="mySlides ">

                <img src="{{asset('multiImages/1620972492darkangel1.jpg')}}" style="width:100%; height:820px;">
                <div class="text">Darkangel</div>
            </div>

            <div class="mySlides ">
                <img src="{{asset('multiImages/1620972492darkangel2.jpg')}}" style="width:100%; height:820px;" >
                <div class="text">Darkangel</div>
            </div>

        </div>
        <br>

        <div style="text-align:center">
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
        </div>
    </div>
</div>



<div id="dropDownSelect1"></div>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');
</script>

<script>
    var slideIndex = 0;
    showSlides();

    function showSlides() {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > slides.length) {slideIndex = 1}
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex-1].style.display = "block";
        dots[slideIndex-1].className += " active";
        setTimeout(showSlides, 2000); // Change image every 2 seconds
    }
</script>
</body>
</html>
