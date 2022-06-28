<?php

include "../../../bd/Conexion.php";

session_start();

if (!isset($_SESSION['ID_USUARIO'])){
   echo "<script>window.location='../../interfaz_externa/login.html';</script>";
}

$conectar = new Conexion;
$conexion = $conectar->conectarBD();

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>KinesferaLab</title>
    <link rel="shortcut icon" href="../../img/logos/logotipo_principal.png">
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
   <link rel="icon" type="image/x-icon" href="../assets/img/favicon.ico"/>
   <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
   <link rel="stylesheet" href="../../css/interfaz_interna/admin/explorar.css">
   
</head>
<body id="body">

    

<header>
        <div class="icon__menu"><i class='bx bx-menu' id="btn_open"></i></div>
    </header>

    <div class="menu__side" id="menu__side">

        <div class="name__page">
            <img src="../../img/logos/logotipo3.png" id="icono-kinesfera" alt="">
            <h4 id="titulo-kinesfera">Kinesfera<span style="color: transparent;">_</span>Lab</h4>
        </div>

        <div class="options__menu">
            <?php if($_SESSION['ID_CARGO_USUARIO']==1 or $_SESSION['ID_CARGO_USUARIO']==2){?>
            <a href="../formador/clase01.php" >
                <div class="option">
                    <i class='bx bxs-home' title="inicio"></i>
                    <h4>Clases</h4>
                </div>
            </a>
            <?php }else if($_SESSION['ID_CARGO_USUARIO']==3){?>
                <a href="../formador/clase01.php" >
                <div class="option">
                    <i class='bx bxs-home' title="inicio"></i>
                    <h4>Clases2</h4>
                </div>
            </a>
                <?php }?>
            <a href="#" class="selected">
                <div class="option">
                    <i class='bx bx-world' title="Explorar"></i>
                    <h4>Explorar</h4>
                </div>
            </a>
            <a href="publicaciones.php" >
                <div class="option" >
                    <i class='bx bxs-folder-open'  title="Laboratorio Artistico"></i>
                    <h4>Laboratorio Artistico</h4>
                </div>
            </a>
            <?php if($_SESSION['ID_CARGO_USUARIO']==1){?>
            <a href="../admin/gestion_usuario.php" >
                <div class="option" >
                    <i class='bx bxs-group' title="Laboratorio Artistico"></i>
                    <h4>Gestión de Usuarios</h4>
                </div>
            </a>
            <?php } ?>
            <a href="../aprendiz/aprendiz.php">
                <div class="option">
                    <i class='bx bx-user' title="perfil"></i>
                    <h4>Perfil</h4>
                </div>
            </a>
            <a href="../../../controllers/login/salir.php" onclick="return confirmSalir()">
                <div class="option option_uni">
                    <i class='bx bx-log-in' title="salir"></i>
                    <h4>Salir</h4>
                </div>
            </a>
        </div>

    </div>
    <!--fin del menu -->

    <div class="Container2">
        <div class="menu">
            <p class="Name" class="">Kinesfera insta Lab </p>
        </div>
    </div>
    <div class="Container" id="Inicio">
        <div class="Principal">
            
            <div class="Box">
                <div class="Content">
                    <ul class="icons">
                        <li><a href=""><span class=""></span></a></li>
                    </ul>
                    <p style="font-size: 25px;">@KaterineMS@gmail.com</p>
                    <img src="../../img/interfaz_interna/explorar/dos.jpg" height = "600" alt="">
                </div>
                <div class="info">
                    <i class="fas fa-map-marker-alt"></i>
                    <span>Ubicación: Medellín - Colombía |</span>
                    <i class="fas fa-envelope"></i>
                    <span>KinesferaLab@gmail.com</span>
                    <div class="copyright">
                        Copyright &copy; 2022 |<a href="https://www.instagram.com/kinesfera.lab/">Kinesfera Lab</a>
                      </div>
                </div>
            </div>
            <div class="Box">
                <div class="Content">
                    <ul class="icons">
                        <li><a href=""><span class=""></span></a></li>
                    </ul>
                    <p style="font-size: 25px;">@PedroEC@gmail.com</p>
                    <img src="../../img/interfaz_interna/explorar/cuatro.jpg" height = "600" alt="">
                </div>
                <div class="info">
                    <i class="fas fa-map-marker-alt"></i>
                    <span>Ubicación: Medellín - Colombía |</span>
                    <i class="fas fa-envelope"></i>
                    <span>KinesferaLab@gmail.com</span>
                    <div class="copyright">
                        Copyright &copy; 2022 |<a href="https://www.instagram.com/kinesfera.lab/">Kinesfera Lab</a>
                      </div>
                </div>
            </div>
            <div class="Box">
                <div class="Content">
                    <ul class="icons">
                        <li><a href=""><span class=""></span></a></li>
                    </ul>
                    <p style="font-size: 25px;">@JavierHS@gmail.com</p>
                    <img src="../../img/interfaz_interna/explorar/tres.jpg" height = "600" alt="">
                </div>
                <div class="info">
                    <i class="fas fa-map-marker-alt"></i>
                    <span>Ubicación: Medellín - Colombía |</span>
                    <i class="fas fa-envelope"></i>
                    <span>KinesferaLab@gmail.com</span>
                    <div class="copyright">
                        Copyright &copy; 2022 |<a href="https://www.instagram.com/kinesfera.lab/">Kinesfera Lab</a>
                      </div>
                </div>
            </div>
            <div class="Box">
                <div class="Content">
                    <ul class="icons">
                        <li><a href=""><span class=""></span></a></li>
                    </ul>
                    <p style="font-size: 25px;">@JavierHS@gmail.com</p>
                    <img src="../../img/interfaz_interna/explorar/ocho.jpg" height = "600" alt="">
                </div>
                <div class="info">
                    <i class="fas fa-map-marker-alt"></i>
                    <span>Ubicación: Medellín - Colombía |</span>
                    <i class="fas fa-envelope"></i>
                    <span>KinesferaLab@gmail.com</span>
                    <div class="copyright">
                        Copyright &copy; 2022 |<a href="https://www.instagram.com/kinesfera.lab/">Kinesfera Lab</a>
                      </div>
                </div>
            </div>
            <div class="Box">
                <div class="Content">
                    <ul class="icons">
                        <li><a href=""><span class=""></span></a></li>
                    </ul>
                    <p style="font-size: 25px;">SandraMB@gmail.com</p>
                    <img src="../../img/interfaz_interna/explorar/fondo3.jpg" height = "600" alt="">
                </div>
                <div class="info">
                    <i class="fas fa-map-marker-alt"></i>
                    <span>Ubicación: Medellín - Colombía |</span>
                    <i class="fas fa-envelope"></i>
                    <span>KinesferaLab@gmail.com</span>
                    <div class="copyright">
                        Copyright &copy; 2022 |<a href="https://www.instagram.com/kinesfera.lab/">Kinesfera Lab</a>
                      </div>
                </div>
            </div>
            <div class="Box">
                <div class="Content">
                    <ul class="icons">
                        <li><a href=""><span class=""></span></a></li>
                    </ul>
                    <p style="font-size: 25px;">@MariaCZ@gmail.com</p>
                    <img src="../../img/interfaz_interna/explorar/fondo.jpg" height = "600" alt="">
                </div>
                <div class="info">
                    <i class="fas fa-map-marker-alt"></i>
                    <span>Ubicación: Medellín - Colombía |</span>
                    <i class="fas fa-envelope"></i>
                    <span>KinesferaLab@gmail.com</span>
                    <div class="copyright">
                        Copyright &copy; 2022 |<a href="https://www.instagram.com/kinesfera.lab/">Kinesfera Lab</a>
                      </div>
                </div>
            </div>
        </div>

        </div>
    </div>
    

</body>
</html> 

    

    <script src="../../js/interfaz_interna/menu.js"></script>
    </body>
    </html>