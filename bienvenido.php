<?php

    session_start();

    if(!isset($_SESSION['usuario'])){
        echo'
            <script>
                alert("Por favor debes iniciar sesión");
                window.location = "InicioSe.php";
            </script>
        ';
        session_destroy();
        die();
    }
?>
      
<!DOCTYPE html>
<html lang="es">
	<head>	
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width-device-width, initial-scale=1.0">
		<title>Menú</title>
		<link rel="stylesheet" href="stilos.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>


	<ul>
		<right>
			<li><a href="index.html">Inicio</a></li>
			<li><a href="procedimiento.html">Procedimiento del servicio</a></li>
			<li><a href="catalogo\Catalogo.html">Catálogo</a></li>
			<li><a href="catalogo\Formulario/FORMULAARIO DE VENTAS.HTML">Formulario de ventas</a></li>
		</right>
	</ul>
	<h1>Inicio</h1>
		<center>
					<img src="img/AQUA-ROMA.gif" width="45%">
		</center>
	</head>	<div class="menu">
	
	</div>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>aqua roma agua purificada index</title>
</head>

	<audio controls>
		<source src="hola.mp3" type="audio/mpeg">
	</audio>

		<header>
			<font color="cornflowerblue" size="20%">
				<center>
					AQUA ROMA AGUA PURIFICADA<br>
				</center>
			</font>
			<font color="black" size="4%">
			Misión: Proveer acceso confiable y sostenible al recurso vital del agua, ofreciendo soluciones innovadoras y de alta calidad que satisfagan las necesidades de nuestros clientes<br>
			Visión: Ser lideres en la industria del agua, reconocidos por nuestra excelencia en la gestion sostenibles de recursos hídricos<br>
			</font>
			<font color="#5B7801" size="5%">
				<center>
				<h2 id="animated-text" class="animate__animated animate__bounce">¡COMPRA AQUI!</h2>
			<script>
        		const text = document.getElementById('animated-text');

       			setInterval(() => {
            		text.classList.remove('animate__bounce');
           		void text.offsetWidth;
            		text.classList.add('animate__bounce');
       			}, 3000);
   			</script>
			
			<td>
				<img src="img/ia.jpg" width="40%">
			</td>
			</center>
			</font>
			
		</header>
		<section>
			<article>
				<font color="#79C8C5">
					<h2>Te hace lucir y sentirte bien</h2>
				</font>
				<p>
					¡Refresca tu vida con la pureza absoluta! Descubre el sabor cristalino de la salud en cada sorbo de nuestra agua purificada de primera calidad. Agua pura, vida pura, ¡elige la excelencia con Aua Roma Agua Purificada!
				</p>
			</article>
			<article>
				<font color="#79C8C5">
					<h2>Localizanos</h2>
				</font>
			<div id="map-container">
			<iframe width="600" height="450" style="border:0" Loading="lazy" allowfullscreen src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJv8X4_-ftKYQRVHLyii1MgZA&key=AIzaSyAuQwB5zu-AlKmS16w4vM3rGnio7urF98k"></iframe>
			</div>
			</article>
			<article>
				<font color="#79C8C5">
					<h2>Llamanos</h2>
				</font>
				<div class="resaltado">
				<p><a href="#">Número de teléfono: 449 294 2643</a></p>
				<p><a href="@">Correo electrónico: romaaqua0@gmail.com</a></p>
				</div>
			</article>
		</section>
		<img src="img/botella.jpg" type="img.jpeg" width="100%">
		<center>
			<font color="cornflowerblue" Size="6%">
				<ul>
					<b>Nuestro Objetivo para 2025</b>
				</ul>
			</font>
			<font-family:'Arial';>
			<p>
					En Aqua Roma nos comprometemos a brindar salud a todos los mexicanos <br>
					y aquellos que se localizan cerca de nuestras sucursales<br>
					mediante nuestra agua.Para esto siempre procuramos buena higiene laboral<br>
					y proponer cada año mejores estrategias de reciclaje;<br>
					con todo esto para brindarles una mejor experiencia a ustedes <br>
					y a generaciones futuras
			</p>		
			</font>
			<img src="img/personas.jpg" width="50%">
		</center>
		<div class="contenedor">
			<p>
				Mariana Gabriela Ibarra Pérez - Menú y página principal <br>
				Sergio Isaak Vidal García - Inventario, catálogo y E-Commerce<br>
				Carlos Enrique Lozano Hernandez - Procedimiento de servicio y Logo<br>
				Azul Daniela Velázquez Moreno - Formulario<br>
			</p>
		</div>
		
	</body>
		<h2>
		<center>
		<img src="img/AQUA-ROMA.png" width="40%">
		</center>
		</h2>
