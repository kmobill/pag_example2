<<<<<<< HEAD
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Display page</title>
        <!-- Basic page styling -->
        <link rel="stylesheet" type="text/css" href="base.css">
        <!-- User styling -->
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
    	<div class="hero" id="top">
    		<div class="hero-image"></div>
    	</div>
    	<div class="navbar-wrapper">
	        <nav>
	        	<div class="content">
		        	<ul>
		        		<li class="action-item"><a href="#top"><p>Inicio</p></a></li>
		        		<li><a href="#vision"><p>Visión y Misión</p></a></li>
		        		<li><a href="#product"><p>Contactanos</p></a></li>
		        		<li><a href="#team"><p>Team</p></a></li>
		        	</ul>
		        	<ul class="right">
		        		<li><a href="#"><p>Log in</p></a></li>
		        		<li class="action-item"><a href="#"><p>Sign up</p></a></li>
		        	</ul>
		        </div>
	        </nav>
    	</div>
		<section id="vision">
			<div class="content">
				<h1>VISIÓN Y MISIÓN</h1>
				<p>KIMOBILL OMNICONTACT S.A Nuestro concepto principal como organización es conectar datos,
                    procesos, personas y todo aquello que sigue desconectado, tomamos la iniciativa y el concepto
                    de lo que sabemos hacer para entregar un mayor aporte como valor agregado optimizando toda la 
                     cadena de suministros mientras continuamos innovando y mejoramos la experiencia de nuestros 
                     clientes y de los suyos también.</p>
                <p>
                    Tener la habilidad de Liderar y estrategizar de manera dinámica, percibir de manera precisa los 
                    cambios relevantes de mi entorno, testear posibles respuestas e implementar cambios en las rutinas 
                    diarias que poseemos como organización ágil. El reto está en ser capaces de orquestarlas y 
                    construir un ecosistema donde todas ellas encajen y se generen sinergias dentro de la organización.
                </p>
		</section>
		<section id="product">
			<div class="content">
				<h1>Contactos</h1>
				<h2>Just like you</h2>
				<p>Experiential agile 360 campaign user story iterate quantitative vs. qualitative earned media viral actionable insight innovate. Intuitive fund actionable insight disrupt entrepreneur SpaceTeam affordances entrepreneur affordances. Engaging innovate co-working long shadow quantitative vs. qualitative quantitative vs. qualitative quantitative vs. qualitative intuitive minimum viable product disrupt grok. Moleskine latte responsive workflow pair programming hacker human-centered design. Hacker convergence intuitive hacker personas paradigm pair programming minimum viable product quantitative vs. qualitative intuitive.</p>
			</div>
		</section>
		<section id="team">
			<div class="content">
				<h1>Our Team Cares</h1>
				<h2>About you, your users, and their experience</h2>
				<p>Prototype agile waterfall is so 2000 and late co-working affordances pair programming sticky note latte. Human-centered design big data human-centered design physical computing disrupt convergence minimum viable product affordances human-centered design. Latte pitch deck bootstrapping prototype 360 campaign latte disrupt paradigm piverate waterfall is so 2000 and late disrupt.</p>
				<p>Unicorn grok parallax pitch deck 360 campaign pivot paradigm physical computing earned media actionable insight. Personas ship it sticky note engaging actionable insight iterate fund long shadow parallax. Minimum viable product user story quantitative vs. qualitative disrupt ideate co-working paradigm Steve Jobs personas grok personas. Integrate thought leader venture capital iterate sticky note pair programming responsive sticky note convergence engaging cortado cortado user story.</p>
			</div>
		</section>
		<footer>
			<p><a href="#">built with ❤ in NYC </a></p>
		</footer>
		<!-- jQuery -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<!-- User scripts -->
		<script type="text/javascript" src="script.js"></script>
    </body>
</html>

<?php
  
    if(isset($_POST['btn1']))
    {
      include("abrir_conexion.php");

      $doc = $_POST['doc'];
      $nombre = $_POST['nombre'];
      $dir = $_POST['dir'];
      $tel = $_POST['tel'];

      mysqli_query($conexion, "INSERT INTO $tabla_db1 (doc,nombre,direccion,telefono) values ('$doc','$nombre','$dir','$tel')");
      //La variable $Conexion viene del archivo "Abrir_Conexion", la cual nos conectara a la base de datos
      //y de paso hacemos el registro de datos.
      
      include("cerrar_conexion.php");
      echo "Se insertaron Correctamente";
    }

    if(isset($_POST['btn2']))
    {
      include("abrir_conexion.php");

        $doc = $_POST['doc'];
        if($doc=="") //VERIFICO QUE AGREGEN UN DOCUMENTO OBLIGATORIAMENTE.
          {echo "Digita un documento por favor. (Ej: 123)";}
        else
        {  
          $resultados = mysqli_query($conexion,"SELECT * FROM $tabla_db1 WHERE doc = $doc");
          while($consulta = mysqli_fetch_array($resultados))
          {
            echo 
            "
              <table width=\"100%\" border=\"1\">
                <tr>
                  <td><b><center>Documento</center></b></td>
                  <td><b><center>Nombre</center></b></td>
                  <td><b><center>Direccion</center></b></td>
                  <td><b><center>Telefono</center></b></td>
                </tr>
                <tr>
                  <td>".$consulta['doc']."</td>
                  <td>".$consulta['nombre']."</td>
                  <td>".$consulta['direccion']."</td>
                  <td>".$consulta['telefono']."</td>
                </tr>
              </table>
            ";
          }
        }

      include("cerrar_conexion.php");
    }
  ?>
=======
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require 'config/connection.php';
        header("Location: views/login.php");
        ?>
    </body>
</html>
>>>>>>> f75c785 (Carga de proyecto)
