<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Equipo">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets//css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <link rel="icon" href="/assets/images/favicon.ico" type="image/x-icon">
</head>
    <body >        
<!---Inicio Header--->
    <header class="header">
        <div class="contentheader">
                <input class="ctn-bar-search" type="text" name="" placeholder="¿Qué deseas buscar?" id="inputSearch">
                <a href="../index.php" class="logotipo"><img src="/assets/images/logo/logof1.png" alt="Logo VinoTics" width="190px"></a>
                <ul class="menu-icon">

                    <?php
                    include("sesion.php");
                    ?>

                    <div class="carrito">
                        <li id="carrito-icon"><i class="fa-solid fa-cart-shopping"></i></li>
                        <span class="contador__items">1</span>
                    </div>
                    <li class="search"><i class="fa-solid fa-magnifying-glass"></i></li>
                </ul>
<!--Carrito-->
                <div class="cart">
                    <h5 class="cart__title text-center">Mi Carrito</h5>
                    <div class="cart__content">
                    
                    </div> 
                    <!--Total-->   
                    <div class="total__cart">
                        <div class="total__title">Total</div>
                        <div class="total__price">$0</div>
                    </div>   
                    <!--boton de compra-->
                    <button type="button" class="btn__comprar">Finalizar Compra</button>  
                    <!--cerrar carrito-->   
                    <i class="fa-solid fa-x" id="close__cart"></i>   
                </div>
        </div>
        <hr width="80%">

        <nav class="nav">      
            <button class="nav-toggle" aria-label="Abrir menú">
                <i class="fa-solid fa-bars"></i>
            </button>      
            <ul class="nav-menu">
                <li class="nav-menu-item">
                    <a href="/index.php" class="nav-menu-link nav-link">INICIO</a>
                </li>
                <li class="nav-menu-item">
                    <a href="/Vinosmexicanos.php" class="nav-menu-link nav-link">VINOS MEXICANOS</a>
                </li>
                <li class="nav-menu-item">
                    <a href="/clubdevinos.php" class="nav-menu-link nav-link">CLUB DE VINOS</a>
                </li>
                <li class="nav-menu-item">
                    <a href="/destilados.php" class="nav-menu-link nav-link">DESTILADOS</a>
                </li>
                <li class="nav-menu-item">
                    <a href="/gourmet.php" class="nav-menu-link nav-link">GOURMET</a>
                </li>
                <li class="nav-menu-item">
                    <a href="/blog/blog.html" class="nav-menu-link nav-link">BLOG</a>
                </li>
            </ul>
        </nav>

        <!--
        <div class="search-form">
            <input type="search" id="search-box" placeholder="¿Qué estas buscando?" />
            <label for="search-box" class="fas fa-search"></label>
          </div>
    
          <div class="cart-items-container">
            <div class="cart-item">
                <span class="fas fa-times"></span>
                <img src="/assets/images/BornosVendejo.jpg" alt="">
                <div class="content">
                    <h3>cart item 01</h3>
                    <div class="price">$328.00</div>
                </div>
            </div>
            <div class="cart-item">
                <span class="fas fa-times"></span>
                <img src="/assets/images/vinos/Monte-Xanic-Gran-Ricardo.jpg" alt="">
                <div class="content">
                    <h3>cart item 02</h3>
                    <div class="price">$1,619.00</div>
                </div>
            </div>
    
            <a href="#" class="btn-pagar">Pagar Ahora</a>
        </div>
        --->
    </header>
<!---Cierre Header--->