<li class="usuario dropdown">
    <a class="icon dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fa-solid fa-user"></i>
    </a>
    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="../usuario.php">
            ¡Hola, <?php echo $_SESSION["usuario"];?>!
        </a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="../php/cerrar_sesion.php">Cerrar Sesión</a>
    </div>
</li>