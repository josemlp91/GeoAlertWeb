
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Panel Administración</title>

    
    
    <link href="assert//css/bootstrap.min.css" rel="stylesheet">
    <link href="assert//css/dashboard.css" rel="stylesheet">
    
    
    
  </head>

    
  
  <body>
    
      
    <?php
        session_start ( ) ;
        if(!isset($_SESSION['userid'])){
            header("Location: notAuthorized.html");
        } 
    ?>
  

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Administrar</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="index.php">Home</a></li>
            <li><a href="#">Settings</a></li>
            <li><a href="#">Profile</a></li>
            <li><a href="#">Help</a></li>
            <li><a href="logout.php">Logout</a></li>
          </ul>
          <form class="navbar-form navbar-right">
            <input type="text" class="form-control" placeholder="Search...">
          </form>
        </div>
      </div>
    </div>

      
      
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <?php 
            if ($_GET['mode']=="table"){
                echo '<li class="active"><a href="panel.php?mode=table">Tabla</a></li>
                      <li><a href="panel.php?mode=map">Mapas</a></li>
            <li><a href="#">Registrar Nuevo</a></li>';}
            
            else if  ($_GET['mode']=="map"){
                
                      echo '<li ><a href="panel.php?mode=table">Tabla</a></li>
                      <li class="active"><a href="panel.php?mode=map">Mapas</a></li>
                      <li><a href="#">Registrar Nuevo</a></li>';
                
            }
            
            ?>  
            
            
          </ul>
          
        </div>
          
      <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">  
        <h1>Panel de Administración</h1>
      </div>
              
          </div>
          
 <?php        
 
 if ($_GET['mode']=='table'){
              
    echo   ' <div class="col-sm-9 col-sm-offset-3 col-md-8 col-md-offset-2 main">'
          
         .' <h2 class="sub-header">Puntos de Interes</h2>'
         .'  <div class="table-responsive">'
         .'     <table class="table table-striped">'
         .'        <thead>'
                
        .'          <tr> '     
        .'          <th>'
        .'          <th>Nombre</th>'
        .'          <th>Latitud</th>'
        .'          <th>Longitud</th>'
        .'          <th>Dirección</th>'
        .'          <th>Tipo</th>'
        .'          <th>Prioridad</th>'
          
        .'        </tr>'
        .'      </thead>'
        .'      <tbody>' ;
                

                 
                  include 'mongoGPS.php';
                  $geopoint = $db->geopoint;
                  $cursor = $geopoint->find();
                  $cont =1;
                  foreach ($cursor as $doc) {                      
                    echo '
                    <tr>
                        <td>'.$cont.'</td>
                        <td>'. $doc['name'] .'</td>
                        <td>'. $doc['latitud'].'</td>
                        <td>'.$doc['longitud'].'</td>
                        <td>'.$doc['direction'].'</td>
                        <td>'.$doc['type'].'</td>
                        <td>'.$doc['priority'].'</td>
                    </tr>

                  ' ;

                    $cont++;
                  }
                  
               ?>
               
              </tbody>
            </table>
          </div>
          
               <?php
    
     include 'mongoGPS.php';
    
    $geopoint = $db->geopoint;
    
   // $insert = array("name" => "Bar la Alternativa", "latitud" => "37.188770", "longitud" => "-3.608767",
   //                 "direction"=>"Calle Doctor Azpitarte nº 12, 18012 Granada", "type"=>"Bar", "priority"=>"1" );
    
   // $geopoint->insert($insert);
    
    
    $cursor = $geopoint->find();
                foreach ($cursor as $doc) {
                    var_dump($doc);
                }
                
     echo " </div>";
 }
 
 else if ($_GET['mode']=='map'){
  
     echo   ' <div class="col-sm-9 col-sm-offset-3 col-md-8 col-md-offset-2 main">';
     
     echo"	
	<br />
	<div id=\"map2\" style=\"width: 985px; height: 650px; border: 0px solid #777; overflow: hidden; margin: 0 auto;\"></div>
	<br />
	
	
	<script type=\"text/javascript\" src=\"http://maps.google.com/maps/api/js?sensor=false\"></script>
	<script type=\"text/javascript\" src=\"assert/js/jquery.js\"></script>
	<script type=\"text/javascript\" src=\"assert/js/jquery.gmap.js\"></script>
	
	<script type=\"text/javascript\">
		$(document).ready(function() {
		
			
      
		
			$('#map2').gMap({ markers: [{latitude: 39.467019, longitude: -0.377135}], 
                             zoom: 16 
						});
			  
			
		});
		
	</script>
        
        </div>
        ";

     
    
   

     
 }
  
    
    ?>
          
       
 
    <!--Panel de usuario-->      
          <div class="col-xs-2 col-sm-2 sidebar-offcanvas" id="sidebar" role="navigation">
          <div class="list-group">
            <a href="#" class="list-group-item active">Jose Miguel</a>
            <img src="assert/img/josemlp91.jpg"  alt="..."  class="img-responsive">
            <a href="#" class="list-group-item">Ingeniero Informatico</a>
            <a href="#" class="list-group-item">660281871</a>
            <a href="#" class="list-group-item">josemilope@gmail.com</a>
            <a href="#" class="list-group-item">Montefrio (Granada)</a>           
            <a href="#" class="list-group-item">3 Septiembre 1991</a>
          </div>     
        </div><!--/span-->
       
      </div><!--/row-->
          
      </div>
      

    </div>
    
    
  
    
    
          <footer>
        
        
      </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    
    <script src="assert/js/bootstrap.min.js"></script>
    
   
    
 
        
    
  </body>
</html>
