<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Fast & Retro - spécialiste des voitures américaines</title>
    <meta name="description" content="Passionné depuis plus de 20 ans, nous nous efforçons de trouver le véhicule qui vous convient. Spécialisé dans les voitures anciennes, américaines, muscle cars...">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <!-- Place favicon.ico in the root directory -->

    <link rel="stylesheet" href="{{ asset('fe_assets/css/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('fe_assets/css/main.css') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('fe_assets/css/style.css') }}">

    <script src="https://use.fontawesome.com/d3563cba25.js"></script>

    <script src="{{ asset('fe_assets/js/vendor/modernizr-2.8.3.min.js') }}"></script>

    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-89864420-1', 'auto');
        ga('send', 'pageview');

    </script>

</head>

<body>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<div class="container-fluid header">
    <div class="header-text text-center">
        <!-- <p><span>1<sup>er</sup></span> Importateur de V&eacute;hicules Am&eacute;ricains</p> -->
        <p><span>&nbsp;</span></p>
    </div>
    <div class="container">
        <div class="header-contact">
            <div class="col-xs-12 col-sm-6 header-contact-left">
                <a id="header-contact-id" href="{{ route('get.contact') }}"><img src="{{ asset('fe_assets/img/header-contact-hover.png') }}">
                <img src="{{ asset('/fe_assets') }}/img/header-contact.png" class="headerhover"></a>
                <a id="header-info-id" href="{{ route('get.contact') }}"><img src="{{ asset('fe_assets/img/header-info.png') }}">
                <img src="{{ asset('/fe_assets') }}/img/header-info-hover.png" class="headerhover"></a>
            </div>
            <div class="col-xs-12 col-sm-6 header-contact-right">
                <a href="#">
                    <span>Appelez-Nous<br></span>
                    <p>+33 1 80 89 45 45</p>
                </a>
            </div>
        </div>
    </div>
    <div class="header-pic"></div>
    <div class="header-logo"></div>
</div>
<div class="container header-question">
    <form action="{{ route('get.small.search') }}" method="">
        <div class="col-xs-12">
            <a href="#">Rechercher un v&eacute;hicule</a>
            <div class="input-group">
                <input type="text" name="search" class="form-control" placeholder="">
                <div class="input-group-btn">
                    <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                </div>
            </div>
        </div>
    </form>
</div>

<nav class="navbar navbar-default" role="navigation">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="{{ route('get.home') }}">ACCUEIL</a></li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Comment &Ccedil;a marche</a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ route('get.presentation') }}">Presentation</a></li>
                        <li><a href="{{ route('get.etape') }}">ETAPE PAR ETAPE</a></li>
                        <li><a href="{{ route('get.faq') }}">FAQ</a></li>
                    </ul>
                </li>
                <li><a href="{{ route('get.index') }}">RECHERCHER UN VEHICULE</a></li>
                <li><a href="{{ route('get.guarantee') }}">NOS GARANTIES</a></li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Temoignages</a>
                    <ul class="dropdown-menu">
                        
                        <li><a href="{{ route('get.testimonials') }}">TEMOIGNAGES ECRITS</a></li>
                    </ul>
                </li>
                <li><a href="{{ route('get.contact') }}">CONTACTEZ-NOUS</a></li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>


@yield('slider')


@yield('content')


@yield('similar')




<div class="container-fluid footer">
    <div class="container">
        <div class="col-xs-12 col-md-4 footer-one">
            <h2>CONSTRUCTEURS<br><span>Am&eacute;ricains</span></h2>
            <div class="footer-one-child">
                <img src="{{ asset('fe_assets/img/footer-pic-1.png') }}">
                <div class="footer-one-child-right">
                    <p><a href="{{ route('get.search') }}?brand=A M C">A M C</a></p>
                    <p><a href="{{ route('get.search') }}?brand=Buick">Buick</a></p>
                    <p><a href="{{ route('get.search') }}?brand=Lincoln">Lincoln</a></p>
                    <p><a href="{{ route('get.search') }}?brand=Cadillac">Cadillac</a></p>
                    <p><a href="{{ route('get.search') }}?brand=Mercury">Mercury</a></p>
                    <p><a href="{{ route('get.search') }}?brand=Chevrolet">Chevrolet</a></p>
                    <p><a href="{{ route('get.search') }}?brand=Oldsmobile">Oldsmobile</a></p>
                    <p><a href="{{ route('get.search') }}?brand=Chrysler">Chrysler</a></p>
                    <p><a href="{{ route('get.search') }}?brand=Packard">Packard</a></p>
                    <p><a href="{{ route('get.search') }}?brand=DeLorean">DeLorean</a></p>
                    <p><a href="{{ route('get.search') }}?brand=Plymouth">Plymouth</a></p>
                    <p><a href="{{ route('get.search') }}?brand=Dodge">Dodge</a></p>
                    <p><a href="{{ route('get.search') }}?brand=Pontiac">Pontiac</a></p>
                    <p><a href="{{ route('get.search') }}?brand=Ford">Ford</a></p>
                    <p><a href="{{ route('get.search') }}?brand=Shelby">Shelby ...</a></p>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-md-4 footer-one footer-middle">
            <h2>NOS MODELES<br><span>les plus populaires</span></h2>
            <div class="footer-one-child">
                <img src="{{ asset('fe_assets/img/footer-pic-2.png') }}">
                <div class="footer-one-child-right">
                    <p><a href="{{ route('get.search') }}?brand=Ford&model=Mustang">Ford Mustang</a></p>
                    <p><a href="{{ route('get.search') }}?brand=Chevrolet&model=Corvette">Chevrolet Corvette</a></p>
                    <p><a href="{{ route('get.search') }}?brand=Chevrolet&model=Camaro">Chevrolet Camaro</a></p>
                    <p><a href="{{ route('get.search') }}?brand=Jeep&model=CJ">Jeep CJ</a></p>
                    <p><a href="{{ route('get.search') }}?brand=Ford&model=Model A">Ford Model A</a></p>
                    <p><a href="{{ route('get.search') }}?brand=Chevrolet&model=Chevelle">Chevrolet Chevelle</a></p>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-md-4 footer-one footer-one-social">
            <h2>RETROUVEZ-NOUS<br><span>sur les r&eacute;seaux sociaux</span></h2>
            <div class="share-social">
                <a href="#" class="sfirst"><img src="{{ asset('fe_assets/img/social-gp.png') }}"></a>
                <a href="#" class="ssecond"><img src="{{ asset('fe_assets/img/social-fb.png') }}"></a>
                <a href="#" class="sthird"><img src="{{ asset('fe_assets/img/social-tw.png') }}"></a>
                <a href="#" class="sfourth"><img src="{{ asset('fe_assets/img/social-pin.png') }}"></a>
                <a href="#" class="sfivth"><img src="{{ asset('fe_assets/img/social-map.png') }}"></a>
                <a href="#" class="ssixth"><img src="{{ asset('fe_assets/img/social-li.png') }}"></a>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid ftr-menu">
    <div class="container">
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <i class="fa fa-star" aria-hidden="true"></i>
                <li><a href="{{ route('get.presentation') }}">Comment &Ccedil;a marche</a></li>
                <li><a href="{{ route('get.index') }}">RECHERCHER UN V&Egrave;HICULE</a></li>
                <li><a href="{{ route('get.guarantee') }}">NOS GARANTIES</a></li>
                <li><a href="{{ route('get.legals') }}">Mentions legales</a></li>

                <li><a href="{{ asset('sitemap.xml') }}">Plan du site</a></li>
                <li><a href="{{ route('get.contact') }}">CONTACTEZ-NOUS</a></li>
                <i class="fa fa-star" aria-hidden="true"></i>
            </ul>
        </div>
    </div>
</div>
<div class="container-fluid copyright">
    <div class="col-xs-12 text-center">
        <p>2017 &copy; Copyright Fast & Retro</p>
    </div>
</div>

<!-- Modal -->




<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script>
    window.jQuery || document.write('<script src="{{ asset('fe_assets/js/vendor/jquery-1.12.0.min.js') }}"><\/script>')
</script>

<script src="{{ asset('jquery.bxslider.js') }}"></script>


<script src="{{ asset('fe_assets/js/plugins.js') }}"></script>
<script src="{{ asset('fe_assets/js/main.js') }}"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="{{ asset('js/proizvodjacModel.js') }}"></script>
<script src="{{ asset('js/jquery.zoom.js') }}"></script>

@yield('fotterjs')

<link rel="stylesheet" href="{{ asset('fixSlider.css') }}">

<script>
    jQuery(document).ready(function($) {

        $('#myCarousel2').carousel({
            interval: false
        });

        $('#carousel-text').html($('#slide-content-0').html());

        //Handles the carousel thumbnails
        $('[id^=carousel-selector-]').click( function(){
            var id = this.id.substr(this.id.lastIndexOf("-") + 1);
            var id = parseInt(id);
            $('#myCarousel2').carousel(id);
        });


        // When the carousel slides, auto update the text
        $('#myCarousel2').on('slid.bs.carousel', function (e) {
            var id = $('.item.active').data('slide-number');
            $('#carousel-text').html($('#slide-content-'+id).html());
        });


      /*  $(".zoomImage").elevateZoom({
            zoomType	: "lens",
            lensShape : "round",
            lensSize    : 300
        });*/

        $(document).ready(function(){
            $('.zoom').zoom(); 
            $('.zoomfull').wrap('<span style="display:block"></span>').css('display', 'block').parent().zoom();
        });

        var form = $('#modal1Form');
        ajaxFormSubmit(form);

        var form2 = $("#modal2Form");
        ajaxFormSubmit(form2);

        var form3 = $("#modal3Form");
        ajaxFormSubmit(form3);

        var form4 = $("#modal4Form");
        ajaxFormSubmit(form4);



        var subsForm = $("#subscribeForm");

        subsForm.submit(function(e) {
            e.preventDefault();

            subsForm.parsley().validate();

            if (subsForm.parsley().isValid()) {

                $.ajax({
                    type: "POST",
                    url: subsForm.attr( 'action' ),
                    data: subsForm.serialize(),
                    success: function( response ) {
                        $('#subscribeModalAlert').modal('show');
                        $(".modal-backdrop.in").hide();
                    }
                });
            }
        });


        $("#subscribeForm2").submit(function(e) {
            e.preventDefault();

            $("#subscribeForm2").parsley().validate();

            if ($("#subscribeForm2").parsley().isValid()) {

                $.ajax({
                    type: "POST",
                    url: $("#subscribeForm2").attr( 'action' ),
                    data: $("#subscribeForm2").serialize(),
                    success: function( response ) {
                        $("#closeMeLol").trigger('click');
                        $('#subscribeModalAlert').modal('show');
                        $(".modal-backdrop.in").hide();
                    }
                });
            }
        });

        $('#myCarousel2').carousel({
            interval: 1000
        });



    });

     $(document).ready(function(e){
        $('.carousel-inner2').bxSlider({
            slideWidth: 300,
            minSlides: 1,
            speed: 2000,
            maxSlides: 5,
            moveSlides: 1,
            slideMargin: 0,
            controls: false,
            autoHover: true,
            pause: 0,
            auto:true,
            autoStart: true
        });
    });



   
    function ajaxFormSubmit(form) {
        form.submit(function(e) {
            e.preventDefault();

            $(".removeMeInit").remove();
            var formID = form.attr('id');

            form.parsley().validate();

            if (form.parsley().isValid()) {
                $("#" + formID + " button").hide();

                $.ajax({
                    type: "POST",
                    url: form.attr( 'action' ),
                    data: form.serialize(),
                    success: function( response ) {
                        form.append("<div class='alert alert-success removeMeInit'>" + response + "</div>");
                    }
                });
            }


        });
    }
</script>

<style>
    .hide-bullets {
        list-style:none;
        margin-left: -40px;
        margin-top:20px;
    }
</style>

<script src="{{ asset('js/parsley.js') }}"></script>

<script>
    jQuery(document).ready(function($) {
        $(".allForms").parsley()
    });
</script>
</body>
</html>