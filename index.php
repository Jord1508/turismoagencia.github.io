

<?php include "header.php"; ?>

<body>
<section class="baner baner-principal">
    
    <div class="baner-carousel-home owl-carousel ">
        <div style="background-image: url(imagen/baners/cancun-1.png); height: 100vh;background-size:cover;">1 Your Content </div>
        <div style="background-image: url(imagen/baners/cancun-1.png); height: 100vh;background-size:cover;">2 Your Content </div>
        <div style="background-image: url(imagen/baners/cancun-1.png); height: 100vh;background-size:cover;">3 Your Content </div>
        <div style="background-image: url(imagen/baners/cancun-1.png); height: 100vh;background-size:cover;">4 Your Content </div>
    </div>
</section>

<section class="vacaciones-perfecta">
    <div class="container">
        <h2 class="titulo_1"><span>Escoge tus</span>Vacaciones Perfectas</h2>
        <a class="btn btn-white" href="#">MÁS TOURS</a>
    </div>
</section>
<section class="feed-back">
    <div class="container">
        <h2 class="titulo_1"><span>Lo que dicen</span>Nuestros Clientes</h2>
        <a class="btn btn-white" href="#">MÁS TOURS</a>
    </div>
</section>
<footer>
    <div class="container-fluid footer_up_content">
        <div class="container">
            NEWS LETTER
        </div>
    </div>
    <div class="container-fluid footer_center_content"> <div class="container">INFO DEL FOOTER</div> </div>
    <div class="container-fluid footer_copyright_content"><div class="container"><p>Copyright © SIVETUR 2020 | Todos los derechos reservados

</p></div></div>
</footer>
<script src="owlcarousel/owl.carousel.min.js"></script>
<script>
    $(document).ready(function(){
        $(".baner-carousel-home").owlCarousel({
            loop:true,
            autoplay:true,
            animateIn: 'flipInX',
            autoplayTimeout:3000,
            margin:0,
            dots: false,
            nav:true,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:4
                },
                1000:{
                    items:1
                }
            }
        });
    });
</script>
</body>
</html>