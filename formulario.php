<?php if (isset($_POST[enviar]) && $_POST[Enviar]) {
	
$destinatario = "Nombre del usuario<ulises.arratia@gmail.com>";

$asunto = "Contacto desde la página Web";

$cuerpo = "El cliente " . utf8_encode($_POST[nombre]). " <" . $_POST[email] ."> ha enviado un mensaje:

	Asunto: ".utf8_encode($_POST[tipo-consulta]).";
	".utf8_encode($_POST[mensaje])."
	pase un buen día.
	";

$cabecera = "From: <correo@dedondeviene.cl>\n\r";
$cabecera.= "Return-Path: <ulises.arratia@gmail.com>";

if (mail($destinatario,$asunto,$cuerpo,$cabecera) ) {
	$ok = "correo enviado";
} else {
	$error = "error al enviar el mensaje";
}

} ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>test IDA</title>
    <!-- link FontAwesome -->
    <script src="https://use.fontawesome.com/18abe662a2.js"></script>
    <!-- link tipografia "ROBOTO"fonts google -->
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="contenedor">
        <!-- codigo para mostrar el envio de los datos -->
        <?php print_r($_POST) ;?>
        <!-- codigo para mostrar el envio de los datos -->
        <div class="cabezera">
            <h2>CONTACTO</h2>
            <h3>Si quieres emprender un negocio nosotros te ayudamos a cumplir tus metas</h3>
        </div>
        <div class="contenedor-columnas">
        <div class="colum-izq">
            <form action id="formulario-contacto" method="post">
                <fieldset>
                <div class="item-formulario">
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" placeholder="Ingresa tu nombre y apellido" required>
                    <small>Debe contener solo <span>valores alfabéticos</span>.Ejemplo:Francisco Estrada</small>
                </div>
                <div class="item-formulario">
                    <label for="email">Email</label>
                    <input type="email" name="email" placeholder="Ingresa tu email" required>
                    <small>Debe contener elvalor @ y finalizar con ".com" o ".cl".Ejemplo:<span>mimail@empresa.com</span></small>
                </div>
                <div class="item-formulario">
                    <label for="nombre">Teléfono</label>
                    <input type="tel" name="telefono" placeholder="Ingresa tu teléfono" required>
                    <small>Ingresa solo números por favor.Ejemplo:<span>723338462</span></small>
                </div>
                <div class="item-formulario">
                    <label for="tipo-consulta">Tipo de consulta</label>
                    <select name="tipo-consulta" required>
                        <option value="presupuesto">Solicitar presupuesto</option>
                        <option value="opcion2">Opción 2</option>
                        <option value="opcion2">Opción 3</option>
                    </select>
                    <small>Selecciona <span>una de las opciones</span> que te presentamos</small>
                </div>
                <div class="item-formulario">
                    <label for="mensaje">Mensaje</label>
                    <textarea name="mensaje" placeholder="Ingresa tu mensaje" required></textarea>
                    <small>Ingresa tu comsulta, esta puede tener una extensión de <span>2000 carácteres</span></small>
                </div>
                <div class="enviar">
                <input class="boton" type="submit" name ="enviar" value="Enviar">
                <small>*Todos los campos son obligatorios</small>
                
                </div>
                </fieldset>
            </form>
        </div>

        <div class="colum-der">
            <div class="mapa">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3329.756639832491!2d-70.62126918573183!3d-33.42958850382605!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9662cf7cd41a667b%3A0x927eec4909708101!2sDr+Manuel+Barros+Borgo%C3%B1o+71%2C+Providencia%2C+Regi%C3%B3n+Metropolitana%2C+Chile!5e0!3m2!1ses!2s!4v1491392673921" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            <div class="detalles-contacto">
                <div class="item-detalle">
                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                    <p>Doctor Manuel Barros Borgoño, 71. Oficina 603. Providencia(Ver en <a href="https://goo.gl/maps/nC2MzYxeSan">GoogleMaps - Waze</a>)</p>
                </div>
                <div class="item-detalle">
                    <i class="fa fa-clock-o" aria-hidden="true"></i>
                    <p>De lunes a viernes, entre 09:00 y 18:00 hrs</p>
                </div>
                <div class="item-detalle">
                    <i class="fa fa-mobile" aria-hidden="true"></i>
                    <p>+56223338462</p>
                </div>
                <div class="item-detalle">
                    <i class="fa fa-envelope" aria-hidden="true"></i>
                    <p><a href="#">contacto@renex.cl</a></p>
                </div>
            </div>
        </div>
        </div>
    </div>
    <?php if($error) { ?>
<div class="alert">
  <h5>Alerta!</h5>
  
</div>

<?php } ?>

</body>

<script src="js/jquery/jquery.min.js"></script>
<script src="js/validador/jquery.validate.js"></script>
<script>
	$(document).ready(function() {
		$("#formulario-contacto").validate({
			messages: {
                nombre: {
                    required: 'Este campo es obligatorio'    
                },
				email: {
					required: 'Ingresa un formato de email correcto'
				},
                telefono: {
                    required: 'Ingresa un formato de teléfono correcto'
                },
                mensaje: {
                    required: 'Deja tu mensaje, es muy importante para nosotros'
                }
			}
		});
	});
	</script>
</html>



