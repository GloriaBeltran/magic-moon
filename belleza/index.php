<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Catalogo</title>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,500;0,600;1,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="estilos.css">
</head>

<?php

require_once "../lib/db.config.php";
$producto = $_GET["producto"];
$nombre = $_GET["nombre"];

if (isset($producto) and isset($nombre)) {
	$db = new DB();
	$db->agregarProductoAlCarrito($producto, $nombre);
	print_r($_COOKIE);
	print "Producto guardado";
}

?>

<body>
	<div class="contenedor" id="contenedor">
		<div class="asd" style="text-align: center;">
			<h1 class="text-center titulo" style="display: inline;">CATALOGO</h1>
			<h3 style="margin-left: 10px; display: inline; color: #050c;">Tu belleza natural</h3>
		</div>
		<main role="main">
			<div class="album py-5">
				<div class="container">

					<div class="hero">
						<div class="container">
							<div class="row">
								<div class="six columns">
									<div class="contenido-hero">
										<h2>Prueba este producto</h2>

										<p>Super descuento del 30%</p>
										<form class="formulario">
											<input class="u-full-with" type="text" placeholder="¿que te gustaria llevar?" id="buscador">
											<input type="submit" class="submit-buscador">
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="barra">
						<div class="container">
							<div class="row">
								<div class="col">
									<p>100 productos diferentes.<br>
										Explora los nuevos productos.</p>
								</div>
								<div class="col">
									<p> Las mejores marcas.<br>
										Exclusivos lanzamientos.</p>
								</div>
								<div class="col">
									<p>Disfruta tu beneficio de envio gratis.<br>
										Todo para verte y sentirte bien. </p>
								</div>
							</div>
						</div>
					</div>

					<div class="lista-catalogo" class="container">
						<h1 class="encabezado">Pedidos en linea</h1>
						<a href="#" class="button u-full-width">PROMO DIA DE LAS MADRES</a>

						<div class="row">
							<div class="col-md-4">
								<div class="card mb-4 shadow-sm">
									<img class="img_producto" src="https://gloriabeltran.github.io/magic-moon/belleza/img/dia de la madre.PNG" style="margin: 0 auto;" width="80%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
									<title></title>
									<rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef" dy=".3em"></text> </img>
									<div class="card-body">
										<p class="card-text">Promo Magic clasic</p>
										<p class="precio">$97.500 <span class="u-´pull-right"></span></p>
										<form class="formulario">
											<p class="clasificacion">
												<input id="radio11" type="radio" name="estrellas" value="5">
												<label for="radio11" class="label_estrella">★</label>
												<input id="radio21" type="radio" name="estrellas" value="4">
												<label for="radio21" class="label_estrella">★</label>
												<input id="radio31" type="radio" name="estrellas" value="3">
												<label for="radio31" class="label_estrella">★</label>
												<input id="radio41" type="radio" name="estrellas" value="2">
												<label for="radio41" class="label_estrella">★</label>
												<input id="radio51" type="radio" name="estrellas" value="1">
												<label for="radio51" class="label_estrella">★</label>
											</p>
										</form>
										<div class="d-flex justify-content-between align-items-center">
											<form class="btn-group">
												<button type="submit" name="producto" value="1" class="btn btn-sm btn-outline-secondary">Añadir al Carrito</button>
												<input style="display: none" name="nombre" value="Promo Magic Clasic">
												<button class="btn btn-outline-primary">Ver mas</button>
											</form>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="card mb-4 shadow-sm">
									<img class="img_producto" src="https://gloriabeltran.github.io/magic-moon/belleza/img/kit ojos.png" style="margin: auto;" width="80%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
									<title></title>
									<rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef" dy=".3em"> </text> </img>

									<div class="card-body">
										<p class="card-text">Promo Magic ojos </p>
										<p class="precio">$70.500 <span class="u-´pull-right"></span></p>
										<form class="formulario">
											<p class="clasificacion">
												<input id="radio12" type="radio" name="estrellas" value="5">
												<label for="radio12" class="label_estrella">★</label>
												<input id="radio22" type="radio" name="estrellas" value="4">
												<label for="radio22" class="label_estrella">★</label>
												<input id="radio32" type="radio" name="estrellas" value="3">
												<label for="radio32" class="label_estrella">★</label>
												<input id="radio42" type="radio" name="estrellas" value="2">
												<label for="radio42" class="label_estrella">★</label>
												<input id="radio52" type="radio" name="estrellas" value="1">
												<label for="radio52" class="label_estrella">★</label>
											</p>
										</form>
										<div class="d-flex justify-content-between align-items-center">
											<form class="btn-group">
												<button type="submit" name="producto" value="1" class="btn btn-sm btn-outline-secondary">Añadir al Carrito</button>
												<button class="btn btn-outline-primary">Ver mas</button>
											</form>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="card mb-4 shadow-sm">
									<img class="img_producto" src="https://gloriabeltran.github.io/magic-moon/belleza/img/kit rostro.png" style="margin: auto;" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
									<title></title>
									<rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef" dy=".3em"> </text> </img>
									<div class="card-body">
										<p class="card-text">Promo Magic rostro</p>
										<p class="precio">$80.500 <span class="u-´pull-right"></span></p>
										<form class="formulario">
											<p class="clasificacion">
												<input id="radio1" type="radio" name="estrellas" value="5">
												<label for="radio1" class="label_estrella">★</label>
												<input id="radio2" type="radio" name="estrellas" value="4">
												<label for="radio2" class="label_estrella">★</label>
												<input id="radio3" type="radio" name="estrellas" value="3">
												<label for="radio3" class="label_estrella">★</label>
												<input id="radio4" type="radio" name="estrellas" value="2">
												<label for="radio4" class="label_estrella">★</label>
												<input id="radio5" type="radio" name="estrellas" value="1">
												<label for="radio5" class="label_estrella">★</label>
											</p>
										</form>
										<div class="d-flex justify-content-between align-items-center">
											<form class="btn-group">
												<button type="submit" name="producto" value="1" class="btn btn-sm btn-outline-secondary">Añadir al Carrito</button>
												<button class="btn btn-outline-primary">Ver mas</button>
											</form>
										</div>
									</div>
								</div>
							</div>

							<div class="col-md-4">
								<div class="card mb-4 shadow-sm">
									<img class="img_producto" src="https://gloriabeltran.github.io/magic-moon/belleza/img/labial aceite.PNG" style="margin:0 auto;" width="60%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
									<title></title>
									<rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef" dy=".3em"> </text> </img>

									<div class="card-body">
										<p class="card-text">labial de aceite</p>
										<p class="precio">$20.000 <span class="u-´pull-right"></span></p>
										<form class="formulario">
											<p class="clasificacion">
												<input id="radio1" type="radio" name="estrellas" value="5">
												<label for="radio13" class="label_estrella">★</label>
												<input id="radio23" type="radio" name="estrellas" value="4">
												<label for="radio23" class="label_estrella">★</label>
												<input id="radio33" type="radio" name="estrellas" value="3">
												<label for="radio33" class="label_estrella">★</label>
												<input id="radio43" type="radio" name="estrellas" value="2">
												<label for="radio43" class="label_estrella">★</label>
												<input id="radio53" type="radio" name="estrellas" value="1">
												<label for="radio53" class="label_estrella">★</label>
											</p>
										</form>
										<div class="d-flex justify-content-between align-items-center">
											<form class="btn-group">
												<button type="submit" name="producto" value="1" class="btn btn-sm btn-outline-secondary">Añadir al Carrito</button>
												<button class="btn btn-outline-primary">Ver mas</button>
											</form>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="card mb-4 shadow-sm">
									<img class="img_producto" src="https://gloriabeltran.github.io/magic-moon/belleza/img/labial hidra.PNG" style="margin: 0 auto;" width="60%" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
									<title></title>
									<rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef" dy=".3em"> </text> </img>
									<div class="card-body">
										<p class="card-text">Labial CC hidratante</p>
										<p class="precio">$19.500 <span class="u-´pull-right"></span></p>
										<form class="formulario">
											<p class="clasificacion">
												<input id="radio14" type="radio" name="estrellas" value="5">
												<label for="radio14" class="label_estrella">★</label>
												<input id="radio24" type="radio" name="estrellas" value="4">
												<label for="radio24" class="label_estrella">★</label>
												<input id="radio34" type="radio" name="estrellas" value="3">
												<label for="radio34" class="label_estrella">★</label>
												<input id="radio44" type="radio" name="estrellas" value="2">
												<label for="radio44" class="label_estrella">★</label>
												<input id="radio54" type="radio" name="estrellas" value="1">
												<label for="radio54" class="label_estrella">★</label>
											</p>
										</form>
										<div class="d-flex justify-content-between align-items-center">
											<form class="btn-group">
												<button type="submit" name="producto" value="1" class="btn btn-sm btn-outline-secondary">Añadir al Carrito</button>
												<button class="btn btn-outline-primary">Ver mas</button>
											</form>

										</div>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="card mb-4 shadow-sm">
									<img class="img_producto" src="https://gloriabeltran.github.io/magic-moon/belleza/img/labialgloss.PNG" style="margin: 0 auto; " width="50%" height="225 text-center" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
									<title></title>
									<rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef" dy=".3em"> </text> </img>

									<div class="card-body">
										<p class="card-text">Labial gloss</p>
										<p class="precio">$22.000 <span class="u-´pull-right"></span></p>
										<form class="formulario">
											<p class="clasificacion">
												<input id="radio15" type="radio" name="estrellas" value="5">
												<label for="radio15" class="label_estrella">★</label>
												<input id="radio25" type="radio" name="estrellas" value="4">
												<label for="radio25" class="label_estrella">★</label>
												<input id="radio35" type="radio" name="estrellas" value="3">
												<label for="radio35" class="label_estrella">★</label>
												<input id="radio45" type="radio" name="estrellas" value="2">
												<label for="radio45" class="label_estrella">★</label>
												<input id="radio55" type="radio" name="estrellas" value="1">
												<label for="radio55" class="label_estrella">★</label>
											</p>
										</form>
										<div class="d-flex justify-content-between align-items-center">
											<form class="btn-group">
												<button type="submit" name="producto" value="1" class="btn btn-sm btn-outline-secondary">Añadir al Carrito</button>
												<button class="btn btn-outline-primary">Ver mas</button>
											</form>

										</div>
									</div>
								</div>
							</div>

							<div class="col-md-4">
								<div class="card mb-4 shadow-sm">
									<img class="img_producto" src="https://gloriabeltran.github.io/magic-moon/belleza/img/rubor bronce.png" style="margin: auto;" width="60%" height="245" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
									<title></title>
									<rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef" dy=".3em"> </text> </img>
									<div class="card-body">
										<p class="card-text"> Rubor perlas de bronce</p>
										<p class="precio">$55.900 <span class="u-´pull-right"></span></p>
										<form class="formulario">
											<p class="clasificacion">
												<input id="radio16" type="radio" name="estrellas" value="5">
												<label for="radio16" class="label_estrella">★</label>
												<input id="radio26" type="radio" name="estrellas" value="4">
												<label for="radio26" class="label_estrella">★</label>
												<input id="radio36" type="radio" name="estrellas" value="3">
												<label for="radio36" class="label_estrella">★</label>
												<input id="radio46" type="radio" name="estrellas" value="2">
												<label for="radio46" class="label_estrella">★</label>
												<input id="radio56" type="radio" name="estrellas" value="1">
												<label for="radio56" class="label_estrella">★</label>
											</p>
										</form>
										<div class="d-flex justify-content-between align-items-center">
											<form class="btn-group">
												<button type="submit" name="producto" value="1" class="btn btn-sm btn-outline-secondary">Añadir al Carrito</button>
												<button class="btn btn-outline-primary">Ver mas</button>
											</form>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="card mb-4 shadow-sm">
									<img class="img_producto" src="https://gloriabeltran.github.io/magic-moon/belleza/img/rubor.png" style="margin: auto;" width="60%" height="245" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
									<title></title>
									<rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef" dy=".3em"> </text> </img>
									<div class="card-body">
										<p class="card-text"> Rubor Magic</p>
										<p class="precio">$55.900 <span class="u-´pull-right"></span></p>
										<form class="formulario">
											<p class="clasificacion">
												<input id="radio17" type="radio" name="estrellas" value="5">
												<label for="radio17" class="label_estrella">★</label>
												<input id="radio27" type="radio" name="estrellas" value="4">
												<label for="radio27" class="label_estrella">★</label>
												<input id="radio37" type="radio" name="estrellas" value="3">
												<label for="radio37" class="label_estrella">★</label>
												<input id="radio47" type="radio" name="estrellas" value="2">
												<label for="radio47" class="label_estrella">★</label>
												<input id="radio57" type="radio" name="estrellas" value="1">
												<label for="radio57" class="label_estrella">★</label>
											</p>
										</form>
										<div class="d-flex justify-content-between align-items-center">
											<form class="btn-group">
												<button type="submit" name="producto" value="1" class="btn btn-sm btn-outline-secondary">Añadir al Carrito</button>
												<button class="btn btn-outline-primary">Ver mas</button>
											</form>
										</div>
									</div>
								</div>
							</div>

							<div class="col-md-4">
								<div class="card mb-4 shadow-sm">
									<img class="img_producto" src="https://gloriabeltran.github.io/magic-moon/belleza/img/polvo conpacto.PNG" style="margin: auto;" width="60%" height="220" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
									<title></title>
									<rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef" dy=".3em"> </text> </img>
									<div class="card-body">
										<p class="card-text"> Polvo conpacto</p>
										<p class="precio">$30.500 <span class="u-´pull-right"></span></p>
										<form class="formulario">
											<p class="clasificacion">
												<input id="radio17" type="radio" name="estrellas" value="5">
												<label for="radio117" class="label_estrella">★</label>
												<input id="radio217" type="radio" name="estrellas" value="4">
												<label for="radio217" class="label_estrella">★</label>
												<input id="radio317" type="radio" name="estrellas" value="3">
												<label for="radio317" class="label_estrella">★</label>
												<input id="radio417" type="radio" name="estrellas" value="2">
												<label for="radio417" class="label_estrella">★</label>
												<input id="radio517" type="radio" name="estrellas" value="1">
												<label for="radio517" class="label_estrella">★</label>
											</p>
										</form>
										<div class="d-flex justify-content-between align-items-center">
											<form class="btn-group">
												<button type="submit" name="producto" value="1" class="btn btn-sm btn-outline-secondary">Añadir al Carrito</button>
												<button class="btn btn-outline-primary">Ver mas</button>
											</form>

										</div>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="card mb-4 shadow-sm">
									<img class="img_producto" src="https://gloriabeltran.github.io/magic-moon/belleza/img/kit esmaltes.png" style="margin: auto;" width="60%" height="220" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
									<title></title>
									<rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef" dy=".3em"> </text> </img>
									<div class="card-body">
										<p class="card-text"> Kit de esmaltes</p>
										<p class="precio">$60.000 <span class="u-´pull-right"></span></p>
										<form class="formulario">
											<p class="clasificacion">
												<input id="radio18" type="radio" name="estrellas" value="5">
												<label for="radio18" class="label_estrella">★</label>
												<input id="radio28" type="radio" name="estrellas" value="4">
												<label for="radio28" class="label_estrella">★</label>
												<input id="radio38" type="radio" name="estrellas" value="3">
												<label for="radio38" class="label_estrella">★</label>
												<input id="radio48" type="radio" name="estrellas" value="2">
												<label for="radio48" class="label_estrella">★</label>
												<input id="radio58" type="radio" name="estrellas" value="1">
												<label for="radio58" class="label_estrella">★</label>
											</p>
										</form>
										<div class="d-flex justify-content-between align-items-center">
											<form class="btn-group">
												<button type="submit" name="producto" value="1" class="btn btn-sm btn-outline-secondary">Añadir al Carrito</button>
												<button class="btn btn-outline-primary">Ver mas</button>
											</form>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="card mb-4 shadow-sm">
									<img class="img_producto" src="https://gloriabeltran.github.io/magic-moon/belleza/img/sombramiradanaranja.PNG" style="margin: auto;" width="60%" height="220" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
									<title></title>
									<rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef" dy=".3em"> </text> </img>
									<div class="card-body">
										<p class="card-text"> Sombras Magic</p>
										<p class="precio">$32.000 <span class="u-´pull-right"></span></p>
										<form class="formulario">
											<p class="clasificacion">
												<input id="radio19" type="radio" name="estrellas" value="5">
												<label for="radio19" class="label_estrella">★</label>
												<input id="radio29" type="radio" name="estrellas" value="4">
												<label for="radio29" class="label_estrella">★</label>
												<input id="radio39" type="radio" name="estrellas" value="3">
												<label for="radio39" class="label_estrella">★</label>
												<input id="radio49" type="radio" name="estrellas" value="2">
												<label for="radio49" class="label_estrella">★</label>
												<input id="radio59" type="radio" name="estrellas" value="1">
												<label for="radio59" class="label_estrella">★</label>
											</p>
										</form>
										<div class="d-flex justify-content-between align-items-center">
											<form class="btn-group">
												<button type="submit" name="producto" value="1" class="btn btn-sm btn-outline-secondary">Añadir al Carrito</button>
												<button class="btn btn-outline-primary">Ver mas</button>
											</form>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="card mb-4 shadow-sm">
									<img class="img_producto" src="https://gloriabeltran.github.io/magic-moon/belleza/img/maxisombra.PNG" style="margin: auto;" width="60%" height="220" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
									<title></title>
									<rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef" dy=".3em"> </text> </img>
									<div class="card-body">
										<p class="card-text"> Sombras Magic</p>
										<p class="precio">$22.000 <span class="u-´pull-right"></span></p>
										<form class="formulario">
											<p class="clasificacion">
												<input id="radio110" type="radio" name="estrellas" value="5">
												<label for="radio110" class="label_estrella">★</label>
												<input id="radio210" type="radio" name="estrellas" value="4">
												<label for="radio210" class="label_estrella">★</label>
												<input id="radio310" type="radio" name="estrellas" value="3">
												<label for="radio310" class="label_estrella">★</label>
												<input id="radio410" type="radio" name="estrellas" value="2">
												<label for="radio410" class="label_estrella">★</label>
												<input id="radio510" type="radio" name="estrellas" value="1">
												<label for="radio510" class="label_estrella">★</label>
											</p>
										</form>
										<div class="d-flex justify-content-between align-items-center">
											<form class="btn-group">
												<button type="submit" name="producto" value="1" class="btn btn-sm btn-outline-secondary">Añadir al Carrito</button>
												<button class="btn btn-outline-primary">Ver mas</button>
											</form>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="card mb-4 shadow-sm">
									<img class="img_producto" src="https://gloriabeltran.github.io/magic-moon/belleza/img/antimanchas.png" style="margin: auto;" width="60%" height="220" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
									<title></title>
									<rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef" dy=".3em"> </text> </img>
									<div class="card-body">
										<p class="card-text"> Crema antimanchas</p>
										<p class="precio">$30.500 <span class="u-´pull-right"></span></p>
										<form class="formulario">
											<p class="clasificacion">
												<input id="radio111" type="radio" name="estrellas" value="5">
												<label for="radio111" class="label_estrella">★</label>
												<input id="radio211" type="radio" name="estrellas" value="4">
												<label for="radio211" class="label_estrella">★</label>
												<input id="radio311" type="radio" name="estrellas" value="3">
												<label for="radio311" class="label_estrella">★</label>
												<input id="radio411" type="radio" name="estrellas" value="2">
												<label for="radio411" class="label_estrella">★</label>
												<input id="radio511" type="radio" name="estrellas" value="1">
												<label for="radio511" class="label_estrella">★</label>
											</p>
										</form>
										<div class="d-flex justify-content-between align-items-center">
											<form class="btn-group">
												<button type="submit" name="producto" value="1" class="btn btn-sm btn-outline-secondary">Añadir al Carrito</button>
												<button class="btn btn-outline-primary">Ver mas</button>
											</form>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="card mb-4 shadow-sm">
									<img class="img_producto" src="https://gloriabeltran.github.io/magic-moon/belleza/img/base fluida.png" style="margin: auto;" width="60%" height="220" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
									<title></title>
									<rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef" dy=".3em"> </text> </img>
									<div class="card-body">
										<p class="card-text"> Base fluida</p>
										<p class="precio">$35.000 <span class="u-´pull-right"></span></p>
										<form class="formulario">
											<p class="clasificacion">
												<input id="radio112" type="radio" name="estrellas" value="5">
												<label for="radio112" class="label_estrella">★</label>
												<input id="radio212" type="radio" name="estrellas" value="4">
												<label for="radio212" class="label_estrella">★</label>
												<input id="radio312" type="radio" name="estrellas" value="3">
												<label for="radio312" class="label_estrella">★</label>
												<input id="radio412" type="radio" name="estrellas" value="2">
												<label for="radio412" class="label_estrella">★</label>
												<input id="radio512" type="radio" name="estrellas" value="1">
												<label for="radio512" class="label_estrella">★</label>
											</p>
										</form>
										<div class="d-flex justify-content-between align-items-center">
											<form class="btn-group">
												<button type="submit" name="producto" value="1" class="btn btn-sm btn-outline-secondary">Añadir al Carrito</button>
												<button class="btn btn-outline-primary">Ver mas</button>
											</form>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="card mb-4 shadow-sm">
									<img class="img_producto" src="https://gloriabeltran.github.io/magic-moon/belleza/img/basemusle.png" style="margin: auto;" width="60%" height="220" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
									<title></title>
									<rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef" dy=".3em"> </text> </img>
									<div class="card-body">
										<p class="card-text"> Base Magic</p>
										<p class="precio">$30.500 <span class="u-´pull-right"></span></p>
										<form class="formulario">
											<p class="clasificacion">
												<input id="radio113" type="radio" name="estrellas" value="5">
												<label for="radio113" class="label_estrella">★</label>
												<input id="radio213" type="radio" name="estrellas" value="4">
												<label for="radio213" class="label_estrella">★</label>
												<input id="radio313" type="radio" name="estrellas" value="3">
												<label for="radio313" class="label_estrella">★</label>
												<input id="radio413" type="radio" name="estrellas" value="2">
												<label for="radio413" class="label_estrella">★</label>
												<input id="radio513" type="radio" name="estrellas" value="1">
												<label for="radio513" class="label_estrella">★</label>
											</p>
										</form>
										<div class="d-flex justify-content-between align-items-center">
											<form class="btn-group">
												<button type="submit" name="producto" value="1" class="btn btn-sm btn-outline-secondary">Añadir al Carrito</button>
												<button class="btn btn-outline-primary">Ver mas</button>
											</form>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="card mb-4 shadow-sm">
									<img class="img_producto" src="https://gloriabeltran.github.io/magic-moon/belleza/img/regalo base.png" style="margin: 0 auto;" width="60%" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
									<title></title>
									<rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef" dy=".3em"> </text> </img>
									<div class="card-body">
										<p class="card-text">Regalo Magic base</p>
										<p class="precio">$19.500 <span class="u-´pull-right"></span></p>
										<form class="formulario">
											<p class="clasificacion">
												<input id="radio147" type="radio" name="estrellas" value="5">
												<label for="radio147" class="label_estrella">★</label>
												<input id="radio247" type="radio" name="estrellas" value="4">
												<label for="radio247" class="label_estrella">★</label>
												<input id="radio347" type="radio" name="estrellas" value="3">
												<label for="radio347" class="label_estrella">★</label>
												<input id="radio447" type="radio" name="estrellas" value="2">
												<label for="radio447" class="label_estrella">★</label>
												<input id="radio547" type="radio" name="estrellas" value="1">
												<label for="radio547" class="label_estrella">★</label>
											</p>
										</form>
										<div class="d-flex justify-content-between align-items-center">
											<form class="btn-group">
												<button type="submit" name="producto" value="1" class="btn btn-sm btn-outline-secondary">Añadir al Carrito</button>
												<button class="btn btn-outline-primary">Ver mas</button>
											</form>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="card mb-4 shadow-sm">
									<img class="img_producto" src="https://gloriabeltran.github.io/magic-moon/belleza/img/iluminadorbrocha.png" style="margin: 0 auto;" width="60%" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
									<title></title>
									<rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef" dy=".3em"> </text> </img>
									<div class="card-body">
										<p class="card-text">Iluminador+brocha</p>
										<p class="precio">$25.000 <span class="u-´pull-right"></span></p>
										<form class="formulario">
											<p class="clasificacion">
												<input id="radio145" type="radio" name="estrellas" value="5">
												<label for="radio145" class="label_estrella">★</label>
												<input id="radio245" type="radio" name="estrellas" value="4">
												<label for="radio245" class="label_estrella">★</label>
												<input id="radio345" type="radio" name="estrellas" value="3">
												<label for="radio345" class="label_estrella">★</label>
												<input id="radio445" type="radio" name="estrellas" value="2">
												<label for="radio445" class="label_estrella">★</label>
												<input id="radio545" type="radio" name="estrellas" value="1">
												<label for="radio545" class="label_estrella">★</label>
											</p>
										</form>
										<div class="d-flex justify-content-between align-items-center">
											<form class="btn-group">
												<button type="submit" name="producto" value="1" class="btn btn-sm btn-outline-secondary">Añadir al Carrito</button>
												<button class="btn btn-outline-primary">Ver mas</button>
											</form>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="card mb-4 shadow-sm">
									<img class="img_producto" src="https://gloriabeltran.github.io/magic-moon/belleza/img/delineador.PNG" style="margin: 0 auto;" width="60%" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
									<title></title>
									<rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef" dy=".3em"> </text> </img>
									<div class="card-body">
										<p class="card-text">Delineador</p>
										<p class="precio">$19.500 <span class="u-´pull-right"></span></p>
										<form class="formulario">
											<p class="clasificacion">
												<input id="radio144" type="radio" name="estrellas" value="5">
												<label for="radio144" class="label_estrella">★</label>
												<input id="radio244" type="radio" name="estrellas" value="4">
												<label for="radio244" class="label_estrella">★</label>
												<input id="radio344" type="radio" name="estrellas" value="3">
												<label for="radio344" class="label_estrella">★</label>
												<input id="radio444" type="radio" name="estrellas" value="2">
												<label for="radio444" class="label_estrella">★</label>
												<input id="radio544" type="radio" name="estrellas" value="1">
												<label for="radio544" class="label_estrella">★</label>
											</p>
										</form>
										<div class="d-flex justify-content-between align-items-center">
											<form class="btn-group">
												<button type="submit" name="producto" value="1" class="btn btn-sm btn-outline-secondary">Añadir al Carrito</button>
												<button class="btn btn-outline-primary">Ver mas</button>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
		</main>
	</div>
	<script src="https://kit.fontawesome.com/4060128349.js" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>

</html>