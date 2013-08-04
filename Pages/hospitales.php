<!DOCTYPE html>
<!-- saved from url=(0060)http://getbootstrap.com/2.3.2/examples/starter-template.html -->
<html lang="en">
    <?php
    include"../php/authorization.php";
    ?>
    
    <head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>seleccion de clinicas</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="../css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/jquery-ui-1.10.3.custom.css">
    <script src="../js/jquery-ui-1.10.3.custom.min.js"></script>
    
    <style>
      body {
        padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
        
      }
      area:hover{
          background: #cdcdcd;
      }
    </style>
    <link href="../css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="http://getbootstrap.com/2.3.2/assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="http://getbootstrap.com/2.3.2/assets/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="http://getbootstrap.com/2.3.2/assets/ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="http://getbootstrap.com/2.3.2/assets/ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="http://getbootstrap.com/2.3.2/assets/ico/favicon.png">
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="http://getbootstrap.com/2.3.2/examples/starter-template.html#">NUVOLA</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="active"><a href="http://getbootstrap.com/2.3.2/examples/starter-template.html#">Home</a></li>
              <li><a href="http://getbootstrap.com/2.3.2/examples/starter-template.html#about">About</a></li>
              <li><a href="http://getbootstrap.com/2.3.2/examples/starter-template.html#contact">Contact</a></li>
            </ul>
            <ul class="nav pull-right">
                <li> <a><?php 
		echo $_SESSION['user'];
		?></a></li>
              <li class="active"><a href="../php/logout.php">Cerrar Sesion</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container">

      <h1>
          <?php   
            echo " Hospitales en  $_GET[ciudad]";
            $codigo = $_GET["codigo"];
          ?>
      </h1>
       <?php

        
            include ('../php/conexion.php');
            $result = mysql_query("SELECT * FROM `hospitales` WHERE `ciudad`= $codigo ORDER BY `hospitales`.`nombre` ASC ", $link);
            echo "<table class='table table-hover'> \n";    
            echo "<tr> \n";
            echo " <tr valign='right'> \n";
            echo "<td><b>Nombre</b></td> \n";
            echo "<td><b>Direccion</b></td> \n";
            
            echo "<tr> \n";
            while ($row = mysql_fetch_row($result)){
                echo "<td>";
                echo '<a href="hospitales.php?ciudad='.$row[1].'">';
                echo "$row[1]";
                echo "</a>";
                echo "</td>";
                echo "<td>$row[3]</td>";
                echo "</tr> \n";
            }

            echo "</table> \n";

					

        ?>
    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
<!--    <script language="JavaScript" type="text/javascript" src="../js/jquery-1.9.1.min.js"></script>
    <script language="JavaScript" type="text/javascript" src="../js/jquery-ui-1.10.3.custom.min.js"></script>-->
    

  

</body></html>
