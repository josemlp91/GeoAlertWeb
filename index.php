
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
            <li><a href="#">Home</a></li>
            <li><a href="#">Settings</a></li>
            <li><a href="#">Profile</a></li>
            <li><a href="#">Help</a></li>
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
            <li class="active"><a href="#">Tabla</a></li>
            <li><a href="#">Mapas</a></li>
            <li><a href="#">Registrar Nuevo</a></li>
            
          </ul>
          
        </div>
          
      <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">  
        <h1>Panel de Administración</h1>
      </div>
              
          </div>
          
          
        <div class="col-sm-9 col-sm-offset-3 col-md-8 col-md-offset-2 main">
          
          <h2 class="sub-header">Puntos de Interes</h2>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                    
                  <th>#</th>
                  <th>Nombre</th>
                  <th>Latitud</th>
                  <th>Longitud</th>
                  <th>Dirección</th>
                  <th>Tipo</th>
                  <th>Prioridad</th>
                  
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>Bar la Alternativa</td>
                  <td>37.188770</td>
                  <td>-3.608767</td>
                  <td>Calle Doctor Azpitarte nº 12, 18012 Granada</td>
                  <td>1</td>
                  <td>Bar</td>
                </tr>
               
              </tbody>
            </table>
          </div>
        </div>
 
    <!--Panel de usuario-->      
          <div class="col-xs-2 col-sm-2 sidebar-offcanvas" id="sidebar" role="navigation">
          <div class="list-group">
            <a href="#" class="list-group-item active">Jose Miguel</a>
            <img src="assert//img/josemlp91.jpg"  alt="..."  class="img-responsive">
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="assert/js/bootstrap.min.js"></script>
    
  </body>
</html>
