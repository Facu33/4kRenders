
<?php
session_start();
if (isset($_POST["language"])) {
    $language = $_POST["language"];
    if (!empty($language)) {
        $_SESSION["language"] = $language;
    }
}
if (isset($_SESSION["language"])) {
    $language = $_SESSION["language"];
    require "language/" . $language . ".php";
} else {
    require "language/es.php";
}
?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="es">
    <head>
        <title>4K Renders</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link rel="shortcut icon" href="Imagenes/logoIcon.png" />
        <link href="css/estilos.css" rel="stylesheet" type="text/css" />
        <link href="css/fresco/fresco.css" rel="stylesheet" type="text/css" />
        <script src="https://code.jquery.com/jquery-1.11.3.min.js">
        </script>
        <script src="Script/fresco/fresco.js">
        </script>
        <script src="https://aframe.io/releases/0.7.0/aframe.min.js"></script>
    </head>
    <body style="font-family:Quicksand_Light" id="cuerpo">      
        <header>     
            <form method="POST"  class="idiomas" id="formLenguaje">
                <select  method="POST"   name="language" onchange="this.form.submit()" style="font-family: Quicksand_Light" >
                    <option id="option1" value=""><?php echo $language["lenguaje"] ?></option>
                    <option id="option1" value="es">ES</option>
                    <option id="option2" value="en">EN</option>
                </select> 
            </form>
                <input type="checkbox" id="btn-menu">
                <label for="btn-menu"><img src="Imagenes/menu.png" alt=""></label>
            <nav id="botones">
                <ul>
                    <li><a href="#descripcion" onclick="mostrar(3)" ><?php echo $language["servicios"] ?><br></a></li>             
                    <li> <a href="#portfolio"  onclick="mostrar(1)"> <?php echo $language["portfolio"] ?><br></a></li>
                    <li><a href="#contacto"  onclick="mostrar(2)"> <?php echo $language["contacto"] ?><br></a></li>
                    <li> <a href="#nosotros"  onclick="mostrar(4)"> <?php echo $language["nosotros"] ?> <br> </a></li>                   
                </ul>
            </nav>
        </header>
        <div id="logo">
            <img src="Imagenes/logo.png" alt="logo"/> 
        </div>
        <div id="portfolio" class="ventanas" style="font-family: Quicksand_Light">          
            <div id="cerrar" class="botonCerrar" onclick="cerrar(1)">X</div>
                <h1><?php echo $language["portfolio"] ?></h1>  
            <ul id="galeria">
                <li><a href="Imagenes/render1.jpg" class="fresco" data-fresco-group="unique_name"><img src='Imagenes/render1.jpg' class="galeria_img" alt=""></a></li>
                <li><a href="Imagenes/render2.jpg" class="fresco" data-fresco-group="unique_name"><img src='Imagenes/render2.jpg' class="galeria_img" alt=""></a></li>
                <li><a href="Imagenes/render3.jpg" class="fresco" data-fresco-group="unique_name"><img src='Imagenes/render3.jpg' class="galeria_img" alt=""></a></li>
                <li><a href="Imagenes/render4.bmp" class="fresco" data-fresco-group="unique_name"><img src='Imagenes/render4.bmp' class="galeria_img" alt=""></a></li>
                <li><a href="Imagenes/render5.jpg" class="fresco" data-fresco-group="unique_name"><img src='Imagenes/render5.jpg' class="galeria_img" alt=""></a></li>
                <li><a href="Imagenes/render6.jpg" class="fresco" data-fresco-group="unique_name"><img src='Imagenes/render6.jpg' class="galeria_img" alt=""></a></li>
                <li><a href="Imagenes/render7.jpg" class="fresco" data-fresco-group="unique_name"><img src='Imagenes/render7.jpg' class="galeria_img" alt=""></a></li>
                <li><a href="Imagenes/render8.jpg" class="fresco" data-fresco-group="unique_name"><img src='Imagenes/render8.jpg' class="galeria_img" alt=""></a></li>
                <li><a href="Imagenes/render9.jpg" class="fresco" data-fresco-group="unique_name"><img src='Imagenes/render9.jpg' class="galeria_img" alt=""></a></li>
            </ul>
        </div>
        <div id="contacto" class="ventanas" style="font-family: Quicksand_Light">
            <div class="botonCerrar" onclick="cerrar(2)" id="cerrarContacto" >X</div>
                <form id="form" name="form" action="Script/email.php" method="post">
                    <h2><?php echo $language["contacto"] ?></h2>
                    <input  required oninvalid="setCustomValidity('<?php echo $language["nombreValidate"] ?>')" oninput="setCustomValidity('')" type="text" name="nombre" id="nombre" placeholder=<?php echo $language["nombre"] ?> >           
                    <input required  oninvalid="setCustomValidity('<?php echo $language["emailValidate"] ?>')"  oninput="setCustomValidity('')"  type="text" name="email" id="email" placeholder=<?php echo $language["correo"] ?> >           
                    <textarea name="mensaje" id="mensaje" placeholder=<?php echo $language["mensaje"] ?> ></textarea>
                    <input  type="submit" id="enviar" value=<?php echo $language["enviar"] ?> name="enviar" > 
                    <hr>
                    <p class="contactoPie" style="font-family: Quicksand_Light">germanconil@hotmail.com</p> <p class="contactoPie1" style="font-family: Quicksand_Light"> <?php echo $language["cel"] ?>:+5492615911334</p>
                </form>
            <div id="result" class="modal"> 
                <div class="modal-contenido" id="modal1">
                    <div onclick="cerrarModal()" id="cerrarModal">X</div>
                    <p><?php echo $language["msjEnviado"] ?></p>                
                </div>   
            </div>
        </div>      
        <div id="servicios" class="ventanas" style="font-family: Quicksand_Light">
            <div class="botonCerrar" onclick="cerrar(3)" id="cerrarService">X</div>
                <h1><?php echo $language["servicios"] ?></h1>
                <h3><?php echo $language["serviciosDescripcion"] ?></h3>
                <ul class="servicios">
                    <li><img src="Imagenes/logoEdi.png" alt=""><div>  <h1><?php echo $language["rend1"] ?></h1> <br><?php echo $language["rend1Desc"] ?></div></li>
                    <li><img src="Imagenes/logo360.png" alt=""><div> <h1><?php echo $language["rend2"] ?></h1> <br><?php echo $language["rend2Desc"] ?></div></li>
                    <li><img src="Imagenes/logoGif.png" alt=""><div> <h1><?php echo $language["rend3"] ?></h1> <br> <?php echo $language["rend3Desc"] ?></div></li>
                </ul>                      
        </div>
        <div id="nosotros" class="ventanas">
            <div class="botonCerrar" onclick="cerrar(4)" id="cerrarNosotros">X</div>
            <h1><?php echo $language["quienesSomos"] ?></h1>
            <ul class="nosotros">
                <li><a href="Imagenes/render9.jpg" class="fresco"><img src="Imagenes/render9.jpg" alt=""></a></li>
                    <li><a href="Imagenes/render6.jpg" class="fresco"><img src="Imagenes/render6.jpg" alt=""></a></li>      
            </ul>                      
            <div class="contenedorNosotros"><?php echo $language["nostrosDesc"] ?>
            </div>
        </div>
        <script type="text/javascript" src="Script/scripts.js">
        </script>
    </body>
</html>
