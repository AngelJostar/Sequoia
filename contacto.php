<!DOCTYPE html>
<html lang="en">

<?php include_once 'includes/tags/google_tag_manager_head.php';?>

<link rel="icon" type="image/png" href="img/cropped-favicon-1-32x32.png" sizes="32x32">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="format-detection" content="telephone=no">
<title>Contact - Centro Sequoia</title>
<link rel="stylesheet" rel="preload" href="css/style.css" media="all">
<link rel="stylesheet" rel="preload" href="css/normalize.css" media="all">

</head>

<?php include_once 'includes/tags/google_tag_manager_body.php';?>
<?php include_once 'includes/templates/top-header.php';?>
<!--####HEADER####-->
<section id="site-wrapper">

    <!-- CANVAS -->
    <section id="site-canvas">

        <?php include_once 'includes/templates/header.php';?>

        <section class="contenedor-principal" id="contenedor-principal">
        <section class="contenedor-contacto">
            <div class="cuadros-crecimiento">
                <div class="titulos-grid-contacto">
                    <div class="flexbox padre">
                        <div class="barra-titulo"></div>
                    </div>
                    <h1 style=" font-size: calc(2em + 1vw); "> <span class="font-bold">CONTACTO</h1>
                    <div class="flexbox padre">
                        <div class="barra-titulo"></div>
                    </div>
                </div>
            </div>
            <div class="tamaño-img ph-4 ocultar-media">
                <img src="/img/banners/BANNERS-Principal-2021-II.webp" alt="Portada">
            </div>
            <div class="tamaño-img ph-4 mostrar-media">
                <img src="/img/banners/BANNERS-Principal-2021-II-desktop.webp" alt="Portada">
            </div>

            <div class="textos-azules">
            <p>En <span class="font-bold">Centro Sequoia</span> somos endocrinólogos pediatras
                    especialistas en crecimiento infantil.
                    Diagnosticaremos las causas por las que tu hijo no
                    crece correctamente y lograremos que alcance una
                    mayor estatura.</p>
            </div>
        </section>
        <section class="contenedor-info-contacto">
                        <div class="cuadros-crecimiento">
                <div class="titulos-principal">
                    <h2>Centros en CDMX, Guadalajara y Monterrey</h2>
                </div>
            </div>
            <div class="contacto-box">
                <div>
                    <i class="direccion-icono fas fa-route"></i>
                </div>
                <div>
                    <div class="tercer-p">
                        <h2 class="font-ciudades">CDMX <br> <span>55 56 87-61 18</span> </h2>
                        <p><span class="font-bold">DIRECCIÓN:</span> San Francisco #516 Colonia Del Valle, </p>
                        <p>Del. Benito Juárez. C.P. 03100, Méx, DF.</p>
                        <p><span class="font-bold">Email:</span> contacto@centrosequoia.com.mx </p>
                        <p><span class="font-bold">HORARIO DE ATENCIÓN:</span></p> 
                        <p>De Lunes a Viernes de 10:00 a 20:00 hrs.</p>
                        <p>Sábados de 10:00 a 14:00 hrs.</p>
                    </div>
                </div>
            </div>
            <div class="contenedor-90porciento">
                <img src="img/Mapas/MAPA-CDMX-1015x542.jpg" alt="Mapa-CDMX">
            </div>
            <div class="contacto-box">
                <div>
                    <i class="direccion-icono fas fa-route"></i>
                </div>
                <div>
                    <div class="tercer-p">
                        <h2 class="font-ciudades">GDL<br> <span>33 36 15-28 35 </span> </h2>
                        <p><span class="font-bold">DIRECCIÓN:</span> José María Vigil #2750, Colonia Providencia,</p>
                        <p>C.P.44639, Guadalajara, Jalisco</p>
                        <p><span class="font-bold">Email:</span> guadalajara@centrosequoia.com.mx </p>
                        <p><span class="font-bold">HORARIO DE ATENCIÓN:</span></p> 
                        <p>De Lunes a Viernes de 10:00 a 14:00 y 16:00 a 20:00hrs. </p>
                        <p>Sábados de 10:00 a 14:00 hrs.</p>
                    </div>
                </div>
            </div>
            <div class="contenedor-90porciento">
                <img src="img/Mapas/MAPA-CDMX-1015x542.jpg" alt="Mapa-CDMX">
            </div>
            <div class="contacto-box">
                <div>
                    <i class="direccion-icono fas fa-route"></i>
                </div>
                <div>
                    <div class="tercer-p">
                        <h2 class="font-ciudades">MTY<br> <span>81 11 59 22 65</span> </h2>
                        <p><span class="font-bold">DIRECCIÓN:</span>Rio Amazonas Ote. #316 Col. Del Valle</p>
                        <p>San Pedro Garza Garcia N.L C.P.66220</p>
                        <p><span class="font-bold">Email:</span>monterrey@centrosequoia.com.mx</p>
                        <p><span class="font-bold">HORARIO DE ATENCIÓN:</span></p> 
                        <p>De Lunes a Viernes de 10:00 a 14:00 y 16:00 a 20:00hrs.</p>
                        <p>Sábados de 10:00 a 14:00 hrs.</p>
                    </div>
                </div>
            </div>
            <div class="contenedor-90porciento">
                <img src="img/Mapas/MAPA-CDMX-1015x542.jpg" alt="Mapa-CDMX">
            </div>
            <div class="formulario">
                <form action="enviar " method="post">
                <h2 class="contacto-h2">Envíanos tus dudas y comentarios</h2>
                <p>NOMBRE *</p>
                <input type="text" name="nombre" placeholder="Nombre" required>
                <p>CORREO ELECTRONICO    *</p>
                <input type="email" name="correo" placeholder="Correo" required>
                <p>TELÉFONO</p>
                <input type="tel" name="telefono" placeholder="Teléfono" required>
                <p>ELIGE UN CENTRO</p>
                <select name="centro">
                <option value="1">CDMX</option> 
                <option value="2">GUADALAJARA</option> 
                <option value="3">MONTERREY</option>
                </select>
                <p>MENSAJE</p>
                <textarea name="mensaje" placeholder="Escriba aqui su mensaje" required></textarea>
                <input type="submit" value="ENVIAR" id="boton">
                </form>
            </div>
        </section>
        <div class="ocultar-media">
                <a href="crecimiento-infantil"><img src="img/banners/Banner-mujer-y-nino.webp" alt="contacto crecimiento"></a>
            </div>
            <div class="tamaño-img mostrar-media">
                <a href="crecimiento-infantil"><img src="img/banners/estatura-crecer-crecimiento-infantil-1.webp" alt="contacto crecimiento"></a>
            </div>
        </div>











        <?php include_once 'includes/templates/footer.php';?>

    </section>
    <!-- END SITE CONTENT -->

</section>
<!--####HEADER####-->

<a href="contacto" class="scrollup">
    <p>CONTACTO</p>
</a><!--####FOOTER####-->
<script src="https://kit.fontawesome.com/3919625d45.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<script src="js/jquery-3.5.1.min.js"></script>
<script src="js/scripts.js "></script>
</body>


</html>