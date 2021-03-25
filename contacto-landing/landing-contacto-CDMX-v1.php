<!DOCTYPE html>
<html lang="en">

<?php include_once '../includes/tags/google_tag_manager_head.php';?>

<link rel="icon" type="image/png" href="../img/FAVICON-SEQUOIA.webp" sizes="32x32">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="format-detection" content="telephone=no">
<title>Lading contacto CDMX - v1</title>
<link rel="stylesheet" rel="preload" href="../css/style.css" media="all">
<link rel="stylesheet" rel="preload" href="../css/normalize.css" media="all">

</head>

<?php include_once '../includes/tags/google_tag_manager_body.php';?>
<?php include_once '../includes/templates/top-header.php';?>
<!--####HEADER####-->
<section id="site-wrapper">

    <!-- CANVAS -->
    <section id="site-canvas">

        <?php include_once '../includes/templates/header.php';?>

        <div class="contenedor-principal" id="contenedor-principal">
            <div class="cuadros-crecimiento">
                <div class="titulos-grid-crecimiento-infantil-deficiente">
                    <div class="flexbox padre">
                        <div class="barra-titulo"></div>
                    </div>
                    <h1 style="font-size: calc(.8em + 1.5vw);"><span class="font-bold">CONTACTO CDMX</span></h1>
                    <div class="flexbox padre">
                        <div class="barra-titulo"></div>
                    </div>
                </div>
            </div>
            <div class="sombras-img ph-3 tamaño-img ocultar">
               <img src="../img/banners/BANNERS-Principal-2021-II.webp" alt="Portada">
            </div>
            <div class="sombras-img ph-4  tamaño-img mostrar">
                <img src="../img/banners/BANNERS-Principal-2021-II-desktop.webp" alt="Portada">
            </div>
            <div class="textos-azules">
                <p>En el <span class="font-bold">Centro Sequoia</span> somos endocrinólogos pediatras especialistas en crecimiento infantil. Diagnosticaremos las causas por las que tu hijo no crece correctamente y lograremos que alcance una mayor estatura.</p>
            </div>
            <section class="contenedor-info-contacto">

                <div class="contacto-box ">

                    <div>
                        <div class="tercer-p">
                            <h2 class="font-ciudades">CDMX<br>
                                <a href="tel:+555687-6118">
                                    <span>(55) 5687-6118</span>
                                </a>
                            </h2>
                            <p><span class="font-bold">DIRECCIÓN:</span> San Francisco #516 Colonia Del Valle, </p>
                            <p>Del. Benito Juárez. C.P. 03100, Méx, DF.</p>
                            <p><span class="font-bold">EMAIL:</span> contacto@centrosequoia.com.mx </p>
                            <p><span class="font-bold">HORARIO DE ATENCIÓN:</span></p> 
                            <p>De Lunes a Viernes de 10:00 a 20:00 hrs.</p>
                            <p>Sábados de 10:00 a 14:00 hrs.</p>
                        </div>
                    </div>
                </div>

                <div class="contenedor-90porciento">
                    <a href="https://www.google.com/maps/place/Centro+Sequoia+CDMX-+Crecimiento+Infantil/@19.3916871,-99.1709422,15z/data=!4m5!3m4!1s0x0:0x1a23f6e38b618cce!8m2!3d19.3916871!4d-99.1709422"><img src="../img/Mapas/MAPA-CDMX-1015x542.webp" alt="Mapa-CDMX"></a>
                </div>
                <div class="contacto-grid">
                    <div class="centrar-texto texto-boton-contacto pb-2 margin-top-20">
                        <a href="https://www.google.com/maps/place/Centro+Sequoia+CDMX-+Crecimiento+Infantil/@19.3916871,-99.1709422,15z/data=!4m5!3m4!1s0x0:0x1a23f6e38b618cce!8m2!3d19.3916871!4d-99.1709422"><button class="boton-e boton-contacto">ABRIR UBICACIÓN <br> Google Maps</button></a>
                    </div>
                    <div class="centrar-texto texto-boton-contacto pb-2 margin-top-20">
                        <a href="https://www.waze.com/live-map/directions?to=ll.19.391663%2C-99.170945"><button class="boton-e boton-contacto">ABRIR UBICACIÓN <br> Waze</button></a>
                    </div>
                </div>
                <div class="formulario">
                    <form action="enviar " method="post">
                    <div class="titulos-principal ">
                        <h2><span class="font-bold">FORMULARIO</span> DE CONTACTO<br><span class="letra-cursiva">Juntos ayudamos a tu hij@</span></h2>
                    </div>
                    <div class = "t-izquierda tercer-p">
                        <p>NOMBRE *</p>
                        <input type="text" name="nombre" placeholder="Nombre" required>
                    </div>
                    <div class = "t-izquierda tercer-p">
                        <p>CORREO ELECTRONICO    *</p>
                        <input type="email" name="correo" placeholder="Correo" required>
                    </div>
                    <div class = "t-izquierda tercer-p">
                        <p>TELÉFONO</p>
                        <input type="tel" name="telefono" placeholder="Teléfono" required>
                    </div>
                    <div class = "t-izquierda tercer-p">
                        <p>ELIGE UN CENTRO *</p>
                        <select name="centro" required>
                        <option value="CDMX">CDMX</option> 
                        <option value="GUADALAJARA">GUADALAJARA</option> 
                        <option value="MOTERREY">MONTERREY</option>
                        </select>
                    </div>
                    <div class = "t-izquierda tercer-p">
                        <p>MENSAJE</p>
                        <textarea name="mensaje" placeholder="Escriba aqui su mensaje" required></textarea>
                    </div>
                    <p class="justificar-texto-90 centrar-texto ph-1 input-color">Envianos tus dudas y conentarios</p>
                        <div class="centrar-texto ph-1">
                            <input type="submit" value="ENVIAR" id="boton">
                        </div>
                    </form>
                </div>
            </section>
            <div class="tamaño-img ocultar-media">
            <a href="/preguntas-frecuentes"><img src="../img/banners/crecer-estatura-nino-crecimiento-infantil-2.webp" alt="causas crecimiento hijo"></a>
                </div>
            <div class="tamaño-img mostrar-media">
                <a href="/preguntas-frecuentes"><img src="../img/banners/crecer-estatura-nino-crecimiento-infantil-1.webp" alt="causas crecimiento hijo"></a>
            </div>
            <div class="textos-azules">
                <p><span class="font-bold">CENTROS EN CDMX / GUADALAJARA / MONTERREY </span></p>
            </div>
            <div class="centrar-texto pb-2">
                <a href="/contacto"><button class="boton-e boton-contacto-landing">OTRAS UBICACIONES</button></a>
            </div>
            


        </div>
        <?php include_once '../includes/templates/footer.php';?>

    </section>
    <!-- END SITE CONTENT -->

</section>
<!--####HEADER####-->


<!--####FOOTER####-->
<script src="https://kit.fontawesome.com/3919625d45.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<script src="../js/jquery-3.5.1.min.js"></script>
<script src="../js/scripts.js "></script>
</body>


</html>