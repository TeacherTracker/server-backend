<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta property="og:url" content="http://yy.whatch.co.kr">
    <meta property="og:type" content="website">
    <meta property="og:title" content="티철알렵유">
    <meta property="og:description" content="선생님의 위치를 지도로 확인하고 도망가세요">
    {{--<meta property="og:image" content="">--}}
    <title>티철알렵유</title>
    <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/freelancer.css" rel="stylesheet">
    <link href="/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet"
          type="text/css">
    <style>
        @font-face {
            font-family: 'NanumSquare';
            font-weight: 400;
            src: url(NanumSquareR.eot);
            src: url(NanumSquareR.eot?#iefix) format('embedded-opentype'),
            url(NanumSquareR.woff) format('woff'),
            url(NanumSquareR.ttf) format('truetype');
        }

        @font-face {
            font-family: 'NanumSquare';
            font-weight: 700;
            src: url(NanumSquareB.eot);
            src: url(NanumSquareB.eot?#iefix) format('embedded-opentype'),
            url(NanumSquareB.woff) format('woff'),
            url(NanumSquareB.ttf) format('truetype');
        }

        @font-face {
            font-family: 'NanumSquare';
            font-weight: 800;
            src: url(NanumSquareEB.eot);
            src: url(NanumSquareEB.eot?#iefix) format('embedded-opentype'),
            url(NanumSquareEB.woff) format('woff'),
            url(NanumSquareEB.ttf) format('truetype');
        }

        @font-face {
            font-family: 'NanumSquare';
            font-weight: 300;
            src: url(NanumSquareL.eot);
            src: url(NanumSquareL.eot?#iefix) format('embedded-opentype'),
            url(NanumSquareL.woff) format('woff'),
            url(NanumSquareL.ttf) format('truetype');
        }

        * {
            transition: all .1s;
            font-family: 'NanumSquare';
        }

        * :focus {
            outline: none !important;
        }

        a {
            font-family: "Montserrat", "Helvetica Neue", Helvetica, Arial, sans-serif;
        }

        header .intro-text .name {
            margin-top: 10px !important;
            font-size: 1.75em;
            text-shadow: 1px 1px 4px rgba(0, 0, 0, 0.5);
            font-weight: normal;
        }

        @media (min-width: 768px) {
            header .intro-text .name {
                font-size: 3.50em;
            }

        }

        .bk, .bk > .thumbnail {
            transition: 0.3s;
        }

        .col-sm-only {
            display: none;
        }

        #materialbox-overlay {
            position: fixed;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            background-color: #292929;
            z-index: 10000;
            will-change: opacity;
        }

        .materialboxed {
            display: block;
            cursor: -webkit-zoom-in;
            cursor: zoom-in;
            position: relative;
            transition: opacity .4s;
            -webkit-backface-visibility: hidden;
        }

        .materialboxed.active {
            z-index: 10000 !important;
            cursor: -webkit-zoom-out;
            cursor: zoom-out;
        }

        .materialbox-caption {
            position: fixed;
            display: none;
            color: #fff;
            line-height: 50px;
            bottom: 0;
            left: 0;
            width: 100%;
            text-align: center;
            padding: 0% 15%;
            height: 50px;
            z-index: 10000;
            -webkit-font-smoothing: antialiased;
        }

        .modal-open .modal {
            padding-right: 0px !important;
        }

        #logo {
            height: 50px;
        }

        header {
            height: 800px;
            position: relative;
            overflow: hidden;
        }

        #maincontent {
            height: 100%;
            position: absolute;
            top: 0px;
            width: 100%;
            background-color: rgba(0, 0, 0, 0.6);
        }

        .vvideo {
            width: 100% !important;
            height: auto;
        }

        @media (max-width: 1350px) {
            header {
                height: 720px;
            }

            .video {
                width: 100%;
                height: 720px;
            }
        }

        @media (max-width: 1199px) {
            header {
                height: 675px;
            }

            .video {
                width: 100%;
                height: 675px;
            }
        }

        @media (max-width: 1150px) {
            header {
                height: 600px;
            }

            .video {
                width: 100%;
                height: 600px;
            }
        }

        @media (max-width: 1066px) {
            .vvideo {
                width: auto !important;
                height: 100% !important;
            }
        }

        @media (max-width: 991px) {
            header {
                height: 558px;
            }

            .video {
                width: 100%;
                height: 558px;
            }
        }

        #service > div > div:nth-child(3){
            float: left; width: 300px; height: 100vh; padding: 20px 0px;
        }
        #service > div > div:nth-child(4){
            float: left; width: calc(100vw - 300px); height: 100vh;
        }
        @media (max-width: 767px) {
            #about, #features {
                height: auto !important;
            }

            #about > div > div > div.col-sm-6.col-sm-only > div > span > a, #features > div > div > div.col-sm-6.col-sm-only > div > span > a{
                margin-left: 0px;
            }

            #about > div > div > div:nth-child(2) > div{
                text-align: center;
            }
            #features > div > div > div:nth-child(1) > div{
                text-align: center;
            }
            #about img{
                float: none !important;
                margin: 0 auto;
                max-width: 500px;
                height: auto;
            }
            #features img{
                float: none !important;
                margin: 0 auto;
                max-width: 500px;
                height: auto;
            }
            
            .col-sm-hidden {
                display: none;
            }

            .col-sm-only {
                display: block;
            }

            #logo {
                position: absolute;
                height: 30px !important;
                margin-left: 10px;
                top: 50%;
                transform: translateY(-50%);
            }

            header {
                height: 432px;
            }

            .navbar-custom .navbar-nav {
                margin: 0px;
            }

            .navbar-custom .navbar-nav li a:hover {
                color: #b24343 !important;
            }

            .navbar-custom .navbar-nav li a {
                color: #888 !important;
                background-color: white !important;
            }

            .video {
                width: 100%;
                height: 432px;
            }

            header .intro-text .name {
                font-size: 2.75em;
            }

            #service > div > div:nth-child(3){
                width: 0px;
            }
            #service > div > div:nth-child(4){
                width: 100vw;
            }
        }



        @media (max-width: 480px) {
            div#maincontent {
                padding-top: 36% !important;
            }

            #maincontent a.fa {
                display: none;
            }
        }

        a.fa.fa-chevron-down:hover {
            opacity: 0.6;
            cursor: pointer;
            transform: translateY(1px);
        }

        a.fa.fa-chevron-down[href='#features'], a.fa.fa-chevron-down[href='#download'] {
            margin-left: 150px;
        }

        a.fa.fa-chevron-down {
            margin-top: 35px;
            width: 120px;
            color: #999;
            text-align: center;
            font-size: 60px !important;
            opacity: 0.5;
            transition: opacity, transform 200ms;
            text-shadow: 1px 1px 4px rgba(0, 0, 0, 0.5);
            text-decoration: none;
        }

        #about {
            height: 700px;
        }

        #features {
            height: 700px;
        }

        section .container .row, section .container, section .container .row > div {
            height: 100%;
        }

        .section-title {
            font-size: 40px;
            color: #333;
            font-weight: normal;
            -webkit-font-smoothing: antialiased;
        }

        .section-sub {
            font-size: 20px;
            color: #555;
            font-weight: 300;
            -webkit-font-smoothing: antialiased;
        }

        .vertical-center {
            min-height: 100%; /* Fallback for browsers do NOT support vh unit */
            min-height: 100vh; /* These two lines are counted as one :-)       */

            display: flex;
            align-items: center;
        }

        #download {
            height: 400px;
            padding: 60px 0px;
        }

        #download a {
            height: 50px;
            padding: 0 24px;
            font-size: 16px;
            display: inline-block;
            color: white;
            line-height: 50px;
            background-color: #b24343;
            font-weight: bold;
            -webkit-font-smoothing: antialiased;
            letter-spacing: .5px;
            text-decoration: none;
            margin: 0px 7px;
            text-transform: uppercase;
            outline: 0;
            cursor: pointer;
            transition: all .2s ease-in-out;
        }

        #map {
            height: 100vh;
            width: 100vw;
        }
        ul{
            padding: 0px;
            margin: 0px;
        }
        li{
            list-style: none;
        }
        li:hover{
            background-color: rgba(0,0,0,0.05);
            cursor: pointer;
        }
        .tname{
            font-weight: bold;
            font-size: 16px;
        }
        .slidebtn{
            position: ;
        }
        @media (max-width: 640px) {
            div#maincontent {
                padding-top: 27% !important;
            }

            header .intro-text .name {
                font-size: 2em;
            }

            #about img{
                float: none !important;
                margin: 0 auto;
                max-width: 250px;
                height: auto;
            }
            #features img{
                float: none !important;
                margin: 0 auto;
                max-width: 250px;
                height: auto;
            }
            .text-center > .section-title{
                font-size: 30px;
            }
            .col-lg-12.text-center > .section-title{
                font-size: 25px;
            }
            .text-center > p{
                font-size: 15px;
            }
            a.fa.fa-chevron-down {
                font-size: 35px !important;
            }
        }
    </style>
</head>
<body id="page-top" class="index">
<!-- Service -->
<div class="portfolio-modal modal fade" id="service" tabindex="-1" role="dialog" aria-hidden="true" style="width: 100vw; height: 100vh;">
    <div class="modal-content" style="padding: 0px; width: 100vw; height: 100vh;">
        <button type="button" class="btn btn-default" data-dismiss="modal"
                style="position: absolute; right: 10px; top: 10px; z-index: 100000;"><i class="fa fa-times"></i> 닫기
        </button>
        <button type="button" class="btn btn-default" id="slidebtn"
                style="position: absolute; left: 310px; top: 10px; z-index: 100000; padding: 6px 20px;"><i class="fa fa-bars"></i> 메뉴
        </button>
        <div>
            <a id="schoolchange" class="btn btn-default">학교 변경</a>
            <h4>학교명 : <span class="schoolname"></span></h4>
            <hr class="star-primary">
            <ul class="tlist">

            </ul>
        </div>
        <div>
            <div id="map" style="width: 100vw; height: 100vh;"></div>
        </div>
    </div>
</div>
<nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header page-scroll">
            <button class="navbar-toggle" data-target="#bs-example-navbar-collapse-1" data-toggle="collapse"
                    type="button"> MENU <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="#page-top" style="padding: 0px;"><img src="/img/logo2.png" alt="logo"
                                                                                title="logo" id="logo"></a>
        </div><!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li class="hidden">
                    <a href="#page-top"></a>
                </li>
                <li class="page-scroll">
                    <a href="#about">About</a>
                </li>
                <li class="page-scroll">
                    <a href="#features">Features</a>
                </li>
                <li class="page-scroll">
                    <a href="#download">Download</a>
                </li>
                <li class="page-scroll">
                    <a href="#service" class="portfolio-link" data-toggle="modal">Service</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>
<!-- Header -->
<header>
    <div class="container" id="maincontent" tabindex="-1">
        <div class="row">
            <div class="col-lg-12">
                <div class="intro-text">
                    <h1 class="name"><span>일상에 지친 학생 여러분,</span></h1>
                    {{--<hr class="star-light">--}}
                    <h1 class="name">환영합니다!</h1>
                </div>
            </div>
            <span class="page-scroll">
                <a class="fa fa-chevron-down" href="#about"></a>
            </span>
        </div>
    </div>
    <div class="video">
        <video class="vvideo" width="1920" height="1080" autoplay="" loop="" muted="" style="pointer-events: none;">
            <source src="https://93c6c96dda886ef0eb29-16b3c5928c10f23c298d1eeee55c3333.ssl.cf2.rackcdn.com/background-video.mp4"
                    type="video/mp4">
            <source src="https://93c6c96dda886ef0eb29-16b3c5928c10f23c298d1eeee55c3333.ssl.cf2.rackcdn.com/background-video.ogv"
                    type="video/ogg">
            <source src="https://93c6c96dda886ef0eb29-16b3c5928c10f23c298d1eeee55c3333.ssl.cf2.rackcdn.com/background-video.webv"
                    type="video/webm">
        </video>
    </div>
</header>
<!-- about Section -->
<section id="about">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-sm-hidden">
                <div class="row text-left" style="padding-top: 142px">
                    <h3 class="section-title">한눈에 위치를 파악하세요!</h3>
                    <p>"티철알렵유"을 이용하면 선생님의 <br>위치를 쉽게 파악할 수 있습니다! <br>트래킹 기능이 숨겨진 날씨앱을 <br>선생님이 설치하시게끔 유도하세요!</p>
                    <span class="page-scroll">
                        <a class="fa fa-chevron-down" href="#features"></a>
                    </span>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="row">
                    <img src="/img/img1.png" alt="img1" title="img1" height="100%" style="float: right;">
                </div>
            </div>
            <div class="col-sm-6 col-sm-only">
                <div class="row text-center" style="padding-top: 142px">
                    <h3 class="section-title">한눈에 위치를 파악하세요!</h3>
                    <p>"티철알렵유"을 이용하면 선생님의 <br>위치를 쉽게 파악할 수 있습니다! <br>트래킹 기능이 숨겨진 날씨앱을 <br>선생님이 설치하시게끔 유도하세요!</p>
                    <span class="page-scroll">
                        <a class="fa fa-chevron-down" href="#features"></a>
                    </span>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- features Section -->
<section id="features">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="row">
                    <img src="/img/img1.png" alt="img1" title="img1" height="100%" style="float: left;">
                </div>
            </div>
            <div class="col-sm-6 col-sm-hidden">
                <div class="row text-left" style="padding-top: 165px">
                    <h3 class="section-title">안전하게 이동하세요!</h3>
                    <p>내 위치와 선생님의 위치간의 <br>거리를 확인하세요! 미리 정해놓은 <br>반경 이내에 들어오면 푸시알림으로 <br>미리 경고해줍니다!</p>
                    <span class="page-scroll">
                        <a class="fa fa-chevron-down" href="#download"></a>
                    </span>
                </div>
            </div>
            <div class="col-sm-6 col-sm-only">
                <div class="row text-center" style="padding-top: 165px">
                    <h3 class="section-title">안전하게 이동하세요!</h3>
                    <p>내 위치와 선생님의 위치간의 <br>거리를 확인하세요! 미리 정해놓은 <br>반경 이내에 들어오면 푸시알림으로 <br>미리 경고해줍니다!</p>
                    <span class="page-scroll">
                        <a class="fa fa-chevron-down" href="#download"></a>
                    </span>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- download -->
<section class="success" id="download">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h3 class="section-title">단번에 달라질 당신의 학교생활!</h3>
                <h3 class="section-title">지금 시작하세요!</h3>
                <div style="margin-top: 60px">
                    <a href="#service" class="portfolio-link" data-toggle="modal">web service</a>
                    <a href="#">app down</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- footer -->
<footer class="text-center">
    <div class="footer-below">
        <div class="container">
            <div class="row" style="color: white; text-transform: uppercase;">
                copyright &copy; appjam 2017 가즈아아아아
            </div>
        </div>
    </div>
</footer>

<script src="/vendor/jquery/jquery.min.js">
</script> <!-- Bootstrap Core JavaScript -->

<script src="/vendor/bootstrap/js/bootstrap.min.js">
</script> <!-- Plugin JavaScript -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js">
</script> <!-- Contact Form JavaScript -->

<script src="/js/jqBootstrapValidation.js">
</script>
<script src="/js/contact_me.js">
</script> <!-- Theme JavaScript -->

<script src="/js/freelancer.min.js">
</script>
<script src="/js/materialize.js">
</script>
<script src="/js/visibilityChanged.js">
</script>
<script>
    var listtxt="";
    var timer;
    var map;
    var marker = {};
    var check = true;
    var zindex = 10;
    var nowfocus = null;
    $(function () {
        $("#slidebtn").on("click",function () {
            if($("#service > div > div:nth-child(3)").css("width")!="300px") {
                $(this).css({left:"310px"});
                $("#service > div > div:nth-child(3)").css({width: "300px"});
                $("#service > div > div:nth-child(4)").css({width: "calc(100vw - 300px)"});
            }else{
                $(this).css({left:"10px"});
                $("#service > div > div:nth-child(3)").css({width: "0px"});
                $("#service > div > div:nth-child(4)").css({width: "100vw"});
            }
        });

        $('#service').visibilityChanged({
            callback: function(element, visible) {
                google.maps.event.trigger(map, 'resize');
            },
            runOnLoad: false,
            frequency: 100
        });

        if ($(window).scrollTop() < $("#about").offset().top - 51) {
            $("#logo").attr('src', '/img/logo2.png');
            $("#mainNav").css({boxShadow: "none", backgroundColor: "rgba(0,0,0,0)"});
            $("#mainNav > div > div.navbar-header.page-scroll > button").css({borderColor: "white", color: "white"});
            $("#mainNav a").css({color: "white"});
        } else if ($(window).scrollTop() >= $("#about").offset().top - 51) {
            $("#logo").attr('src', '/img/logo.png');
            $("#mainNav").css({boxShadow: "0 1px 1px rgba(0,0,0,0.1)", backgroundColor: "white"});
            $("#mainNav > div > div.navbar-header.page-scroll > button").css({
                borderColor: "#b24343",
                color: "#b24343"
            });
            $("#mainNav a").css({color: "#888"});
        }
        $(".end").click();
        $(window).scroll(function () {
            if ($(window).scrollTop() < $("#about").offset().top - 51) {
                $("#logo").attr('src', '/img/logo2.png');
                $("#mainNav").css({boxShadow: "none", backgroundColor: "rgba(0,0,0,0)"});
                $("#mainNav > div > div.navbar-header.page-scroll > button").css({
                    borderColor: "white",
                    color: "white"
                });
                $("#mainNav a").css({color: "white"});
            } else if ($(window).scrollTop() >= $("#about").offset().top - 51) {
                $("#logo").attr('src', '/img/logo.png');
                $("#mainNav").css({boxShadow: "0 1px 1px rgba(0,0,0,0.1)", backgroundColor: "white"});
                $("#mainNav > div > div.navbar-header.page-scroll > button").css({
                    borderColor: "#b24343",
                    color: "#b24343"
                });
                $("#mainNav a").css({color: "#888"});
            }
        });
        $("a[href='#service']").on("click", function () {
            if (localStorage['school'] === undefined) {
                var school = prompt("학교 이름을 입력하세요.", "양영디지털고등학교");
                if (school == null || school.trim() == "") {
                    alert("다시입력해주세요.");
                    document.location.reload();
                } else {
                    localStorage['school'] = school;
                }
                $(".schoolname").html(localStorage['school']);
                clearInterval(timer);
                markermove();
                timer = setInterval(function () {
                    markermove();
                }, 1000);
            } else {
                $(".schoolname").html(localStorage['school']);
                clearInterval(timer);
                markermove();
                timer = setInterval(function () {
                    markermove();
                },1000);
            }
        });
    });

    function markermove() {
        $.post("/api/selectTeacherList", {"school": localStorage['school']}, function (data) {
            console.log(data["0"].created);
            var tx = "";
            for (var i = 0; i < data.length; i++) {
                var myLatLng = {lat: data[i].lat, lng: data[i].lon};
                var img = "http://yy.whatch.co.kr/img/icon2.png";
                if(marker[data[i].id]===undefined) {
                    marker[data[i].id] = new google.maps.Marker({
                        position: myLatLng,
                        label: { text: data[i].name, fontWeight: "bold"},
                        map: map,
                        icon: img,
                        title: data[i].name
                    });
                }else{
                    marker[data[i].id].setPosition( myLatLng );
                    if(nowfocus!=null&&data[i].id==nowfocus){
                        map.setCenter(marker[data[i].id].position);
                    }
                }
                tx+='<li onclick="clickmarker('+data[i].id+')"><span class="tname">'+data[i].name+'</span><br><span class="sname">'+localStorage['school']+'</span></li>';
                if(check){
                    check = false;
                    map.setZoom(19);
                    map.setCenter(myLatLng);
                }
            }
            if(listtxt!=tx){
                listtxt = tx;
                $(".tlist").html(tx);
            }
        });
    }

    $("#schoolchange").on("click",function () {
        for (let [key, value] of Object.entries(marker)) {
            marker[key].setMap(null);
        }
        var school = prompt("학교 이름을 입력하세요.", "선린인터넷고등학교");
        if (school == null || school.trim() == "") {
            alert("다시입력해주세요.");
            document.location.reload();
        } else {
            localStorage['school'] = school;
            alert("변경완료");
            document.location.reload();
        }
    });

    function clickmarker(id) {
        marker[id].setZIndex(zindex);
        map.setCenter(marker[id].position);
        nowfocus = id;
        zindex+=10;
    }

    function initMap() {

        var myLatLng = {lat: -25.363, lng: 131.044};

        map = new google.maps.Map(document.getElementById('map'), {
            zoom: 17,
            center: myLatLng
        });
    }

</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCkS2Cr654GvuhDzxEfsP6lyt3Hpd4HKKs&callback=initMap"></script>
</body>
</html>