<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include "header-extend.php"; ?>

    <link rel="stylesheet" href="owlcarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="owlcarousel/owl.theme.default.min.css">
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />
    
</head>

<header>
    <div class="main-logo">
        <a href="/turismo/">
            <img src="imagen/logo-white.png" alt="">
        </a>
    </div>
    <div class="btn-burguer-menu">
        <ul class="btn-burguer">
            <li></li>
            <li></li>
            <li></li>
        </ul>
        <div class="tit-btn-burguer1">MENU</div>
        <div class="tit-btn-burguer2">CERRAR</div>
    </div>
    <nav>
        <div class="items-menu-nav">
            <ul>
                <li><a href="/turismo/paquetes.php">PAQUETES</a></li>
                <li><a href="#">EXCURSIONES</a></li>
                <li><a href="">COTIZA ONLINE</a></li>
                <li><a href="">CRUCEROS</a></li>
                <li><a href="">CLUB DE VIAJES</a></li>
                <li><a href="">NOSOTROS</a></li>
                <li><a href="">CONTACTENOS</a></li>
            </ul>
        </div>
        <div class="items-social-nav">
            <p>Siguenos:</p>
            <ul>
                <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-whatsapp"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
            </ul>
        </div>
    </nav>
</header>



<script>
    $(".btn-burguer-menu").click(function(){
        if($(this).hasClass("active")){
            $(this).removeClass("active")
            $("nav").removeClass("active")
        }else{
            $(this).addClass("active")
            $("nav").addClass("active")
        }
    })
    
</script>

