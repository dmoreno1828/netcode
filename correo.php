   <link rel="stylesheet" type="text/css" href="stylesheets/form.css">

 <div id="contact-form" class="dark clearfix">
			<div class="container">
				<div class="contact-heading grid-full">
				
<?php
$op=$_POST['op'];
 if($op <> 1){?>
	<h3 style="text-align:center">Contactanos</h3>
                 
                
					   <span class="border"></span>
				</div>
			</div>
 
			<form method="POST" name="contactform" id="contactform" class="container">
				<fieldset>
					<div class="form-field grid-half">
						<span><input type="text" name="nombre" id="nombre" required placeholder="¿Quién eres? *"/></span>
					</div>
					<div class="form-field grid-half">
						<span><input type="email" id="email" name="email" required placeholder="¿Tu email? *"/></span>
					</div>
					<div class="form-field grid-full">
						<span><textarea name="messages" id="messages"  required placeholder="Mensaje *" ></textarea></span> <input type="hidden" name="op" value="1">
					</div>
				</fieldset>
				<div class="form-click grid-full">
					<span><input type="submit"   name="submit" value="Enviar"  /></span>
				</div>
				 
			</form>
    <h3 style="text-align:center">Solicita mas información o pide un presupuesto sin ningun tipo de compromiso</h3>
<?php } else {
$email=$_POST['email'];
$nombre=$_POST['nombre'];
$messages=$_POST['messages'];
include "newlester/email.php";
print '<h3 style="text-align:center">Correo enviado correctamente, en un lapso de 12 horas se le estara respondiendo su correo. Que tengas buen dia.</h3>';
}?>
		</div>

 
