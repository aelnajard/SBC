<!DOCTYPE html>
<html>
<head>

	<title> Smart Business Center </title>

	<style type="text/css">
		body {
			padding: 0px;
			margin: 0px;
			background: #062537;
		}

		h1 { color: #ffffff; font-family: 'Raleway',sans-serif; font-size: 2.5em;
		font-weight: 800; line-height: 72px; margin: 0 0 24px;
		text-align: center; text-transform: uppercase; }

		h2 { color: #ffffff; font-family: 'Raleway',sans-serif; font-size: 2.4em;
		font-weight: 800; line-height: 36px; margin: 0 0 24px;
		text-align: center; }

		h3 { color: #ffffff; font-family: 'Raleway',sans-serif; font-size: 1.2em;
		font-weight: 800;}

		h4 { color: #ffffff; font-family: 'Raleway',sans-serif; font-size: 1.8em;
		font-weight: 800;  }

		h5 { color: #ffffff; font-family: 'Raleway',sans-serif; font-size: 1.5em;
		font-weight: 800; line-height: 36px; margin: 0 0 24px;
		text-align: center; }

		p { color: #f8f8f8; font-family: 'Raleway',sans-serif; font-size: 15px;
		font-weight: 500; }

		ol { color: #f8f8f8; font-family: 'Raleway',sans-serif; font-size: 15px;
		font-weight: 500; }

		ul { color: #f8f8f8; font-family: 'Raleway',sans-serif; font-size: 15px;
		font-weight: 500; }

			li { line-height: 1.8em; }

		a { color: #c8c8c8; text-decoration: underline; }
		a:hover { color: #1c1c1c; text-decoration: underline; }

	</style>


	<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
</head>


<body>


	<!-- Ban -->
	<style type="text/css">
		.Banner-Sec {
			position: relative;
			display: flex;
			justify-content: center;
			align-items: center;
			height: 100vh;

			background: linear-gradient(rgba(233, 201, 31, 1), rgba(6, 37, 55, 1));
		}
			.Banner-Sec h1 {
				font-size: 3.5em;
			}

		.Banner-Pic {
			position: relative;
			background: url("images/Ban1.png");

			   -webkit-mask-image: linear-gradient(to top, transparent 0%, black 12%);

			background-repeat: no-repeat;
			background-position: bottom;
			background-size: cover;

			width: 100%;
			height: 100%;


		}


		.Banner-Txt {
			position: relative;
			text-align: center;
			width: fit-content;
			margin: 0 auto;
		}
			.Banner-Txt img {
				position: absolute;
				top: 60px;
				left: 0;
				transform: translateX(-50%);

				filter: drop-shadow(4px 4px 10px rgba(255,255,255, 0.4))
          				 drop-shadow(-1px -1px 4px white);
			}

	</style>

	<section class="Banner-Sec">
		<div class="Banner-Pic">
			<button id="download" type="button" name="button">Descargar2</button>

			<div class="Banner-Txt">
				<img src="images/SBC-Logo.png">
			</div>

		</div>
	</section>
	<!-- END Banners -->









	<style type="text/css">
		.Welcome {
			position: relative;
			background: #062537;
			height: fit-content;
			padding: 50px 0 120px 0;
		}
		.Welcome h1,h2 {
			margin: 0px;
		}

		.Welcome video {
			position: relative;
			left: 50%;
			margin-top: 50px;
			transform: translateX(-50%);
			width: 700px;
		}
	</style>

	<section class="Welcome">

		<h1> Bienvenidos a nuestra </h1>
		<h2> feria virtual </h2>

		 <video controls="controls" src="Vieos/Videoferia.mp4" poster=""> </video>

	 </section>



	<style type="text/css">
		.ToDo {
			position: relative;
			width: 900px;
			margin: 0 auto;
			margin-bottom: 100px;
		}

		.ToDo h1, h2, h3, p {
			color: whitesmoke;
		}
		.ToDo-L {
			position: relative;
			margin-top: 70px;
		}

		.row {
		  display: flex;
		  height: 170px;
		}

		.column {
		  	flex: 50%;
		  	height: 300px;
		  	padding: 0 0 0 60px;
		}

	</style>

	<section class="ToDo">

		<h2> Que tipo de cosas puedes hacer? </h2>

		<div class="ToDo-L">

			<div class="row">
			  <div class="column">
			    <h3> 1. Hablar con representantes de marca </h3>
			     <p> Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type. </p>
			  </div>
			  <div class="column">
			    <h3> 2. Ver nuestros Stands </h3>
			     <p> Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type. </p>
			  </div>
			</div>


			<div class="row">
			  <div class="column">
			    <h3> 3. Hablar con representantes de marca </h3>
			     <p> Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type. </p>
			  </div>
			  <div class="column">
			    <h3> 4. Ver nuestros Stands </h3>
			    <p> Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type. </p>
			  </div>
			</div>


			<div class="row">
			  <div class="column">
			    <h3> 5. Hablar con representantes de marca </h3>
			    <p> Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
			  </div>
			  <div class="column">
			    <h3> 6. Ver nuestros Stands </h3>
			     <p> Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type. </p>
			  </div>
			</div>

		</div>

	 </section>


	 <?php include  "Pages/Index/Turns/Turns.php" ?>








	<style type="text/css">
		.App {
			position: relative;
			width: 100%;
			background: #e5e4e2;
			padding: 80px 0;
		}
		.App-Wrap {
			position: relative;
			width: 90%;
			margin: 0 auto;
			color: #062537;
			height: 800px;
		}

			.App h2 {
				color: #062537;
			}
			.App ol {
				color: #062537;
			}
			.App p {
				color: #062537;
			}

		.App img {
			position: relative;
			left: 40%;
			width: 80px;
			margin-bottom: 20px;
		}
			#Win {
				top: 10px;
			}

		.App-Cols {
			position: relative;
			top: 30px;
		}

		.App-row {
		  display: flex;
		  height: 170px;
		}

		.App-col {
		  	flex: 50%;
		  	height: 300px;
		  	padding: 30px;
		}


		.WinTxt {
			position: relative;
			height: 400px;
			padding: 5px 50px;
		}
		.WinTxt video {
			position: relative;
			width: 400px;
			margin: 30px 0;
			left: 50%;
			transform: translateX(-50%);
		}

		.MacTxt {
			position: relative;
		}

		   .MacTxt-Pre {
		      background: black;
		      color: lightGray;
		      font-size: 16px;
		      padding: 25px;

		      width: 350px;
		      border-radius: 20px;
		      margin: 20px 20px;
		    }
		    .MacTxt-Sm {
		    	position: relative;
		    	left: -35px;
		    	top: -10px;
		    	text-align: center;
		    	font-size: 0.85em;
		    }



	</style>

	<section class="App">
		<div class="App-Wrap">
		 <h2> Descarga nuestra App </h2>
		  <p style="text-align: center;"> ...y sigue los siguientes pasos para instalarla </p>

		  <div class="App-Cols">
		  	<div class="App-row">
		  		<div class="App-col">
		  			<img id="Win" src="images/Win.png">
		  			<div class="WinTxt">
		  				<ol>
		  					<li> Descarga la aplicacion para Windows </li>
		  					<li> Descompirme el archivo </li>
		  					<li> Doble-click en <b>impresistem.exe</b> </li>
		  				</ol>

						 <video controls="controls" src="http://smartbusinesscenter.net/Public/Video/instaladorWindows.mp4
						  " poster=""> </video>

		  			</div>
		  		</div>

		  		<div class="App-col">
		  			<img src="images/Mac.png">
		  			<div class="MacTxt">

				          <ol>
				            <li> Descarga la aplicacion para Mac </li>
				            <li> Ve a tu carpeta de <b>descargas</b> y descomprime el archivo undiendo click derecho y luego "descomprimir"</li>
				            <li> Abre el terminal oprimiendo <b>Command</b> + <b>SPACE</b>, escribe <b>Terminal</b> y unde <b>Enter</b> </li>
				            <li> Copia y pega el siguiente <b>codigo</b> en el terminal y unde <b>Enter</b> </li>

						    <div class="MacTxt-Pre">
							    Jules
						    </div>

				            <li> Copia y pega esta nueva linea de Codigo </li>

						    <div class="MacTxt-Pre">
							    xattr -cr SmartBusinessCenter.app
						    </div>

				            <p class="MacTxt-Sm"> Selecciona el Codigo de arriba, oprime <b>CMD + C</b> para copiarlo </br>
				            <span> y luego <b>CMD + V</b> para pegarlo en el <b>Terminal</b> </span></p>

				            <li> Dirigete a la carpeta <b>Downloads/Mac</b> y abre el archivo
				                 <b>SmartBusinessCenter.app</b> </li>
				          </ol>

				      </div>


		  			</div>
		  		</div>
		  	</div>
		  </div>
		</div>

	 </section>




	 <style type="text/css">
	 	.Footer {
	 		position: relative;
	 		padding: 5px;
	 		text-align: center;
	 	}
	 	.Footer a {
	 		text-decoration: none;
	 	}
	 	.Footer a:hover {
	 		color: #4c2882;
	 	}
	 	.Footer p {
	 		font-size: 0.75em;
	 	}
	 </style>
	 <section class="Footer">
	 	<p> Powered by <a href="www.otticostudio.com">Ottico Studio</a> </p>
	 </section>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript">

getIp();
function getIp(){
	$.ajax( "App/Controller/Controller.php", {
		type: 'post',
		async: false,
		data: {
			module: "setIp"
		},
		success: function(data){
		//	alert(data);
	 }
	}
 )
}

document.getElementById('download').addEventListener('click', e => {
	$.ajax( "App/Controller/Controller.php", {
		type: 'post',
		async: false,
		data: {
			module: "download"
		},
		success: function(data){
		//	alert(data);
	 }
	}
 )
}
);


</script>



</script>
</body>
</html>
