
<!DOCTYPE html>
<html lang="en">
    <?php
    include"../php/authorization.php";
    ?>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <title>seleccion de ciudades</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- Le styles -->
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <link type="text/css" href="../css/jquery-ui-1.10.3.custom.css" rel="stylesheet" />
        <!--[if IE 7]>
        <link rel="stylesheet" href="assets/css/font-awesome-ie7.min.css">
        <![endif]-->
        <!--[if lt IE 9]>
        <link rel="stylesheet" type="text/css" href="css/custom-theme/jquery.ui.1.10.0.ie.css"/>
        <![endif]-->


        <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

         <style>
            body {
              padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */

            }
            area:hover{
                background: #cdcdcd;
            }
        </style>

    </head>

    <body data-spy="scroll" data-target=".bs-docs-sidebar" data-twttr-rendered="true">

        <!-- Navbar
        ================================================== -->
        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="navbar-inner">
              <div class="container">
                <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <a class="brand" href="http://getbootstrap.com/2.3.2/examples/starter-template.html#">AGENDAMIENTO DE CITAS</a>
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

      <h1>Por favor seleccione la ciudad</h1>
      <p>A continuacion se presentan las ciudades en donde prestamos nuestros servicios.</p>
       <?php
            include ('../php/conexion.php');
            $result = mysql_query("SELECT * FROM ciudades ", $link);
            echo "<table class='table table-hover'> \n";    
            echo "<tr> \n";
            echo " <tr valign='right'> \n";
            echo "<td><b>Ciudad</b></td> \n";
            echo "</tr> \n";
            
            echo "<tr> \n";
            while ($row = mysql_fetch_row($result)){
                echo "<td>";
                echo '<a href="hospitales.php?codigo='.$row[0].'&ciudad='.$row[1].'">';
                echo "$row[1]";
                echo "</a>";
                echo "</td>";
                echo "</tr> \n";
            }

            echo "</table> \n";



        ?>
      
<!--        <div class="input-append date" id="dp3" data-date="12-02-2012" data-date-format="dd-mm-yyyy">
            <input class="span2" size="16" type="text" value="12-02-2012" id="datepicker">
            <span class="add-on"><i class="icon-th"></i></span>
        </div>-->
    </div> <!-- /container -->
    
        


<!-- Placed at the end of the document so the pages load faster -->
<script src="../js/jquery-1.9.1.min.js" type="text/javascript"></script>
<script src="../js/bootstrap.min.js" type="text/javascript"></script>
<script src="../js/jquery-ui-1.10.3.custom.min.js" type="text/javascript"></script>
<!--<script src="assets/js/google-code-prettify/prettify.js" type="text/javascript"></script>-->
<!--<script src="assets/js/docs.js" type="text/javascript"></script>-->
<script src="../js/demo.js" type="text/javascript"></script>
</body>
</html>