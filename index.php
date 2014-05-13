
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="css/carousel.css" rel="stylesheet">

    <title>GeoAlertWeb</title>

    <link href="assert/css/bootstrap.min.css" rel="stylesheet">
    <link href="assert/css/jumbotron-narrow.css" rel="stylesheet">

  </head>
  <body>

      
   <div class="col-sm-5 col-sm-offset-1 col-md-6 col-md-offset-2 main">
    
      <div class="header">
        <ul class="nav nav-pills pull-right">
          <li class="active"><a href="#">Home</a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
        <h3 class="text-muted">Panel Login Geo-Alert</h3>
      </div>

      <div class="jumbotron">
        <h1>Geographics-Alert <small></small></h1>
        <p class="lead">Recomendaciones basadas en el pocisionamiento geografico.</p>
      
      </div>
       
       <div class="col-sm-5 col-sm-offset-1 col-md-6 col-md-offset-2 main">
           
           <?php
           
           session_start();
           
           function verificar_login($user,$password,&$result) { 
                 include 'mongoConexion.php';
                    $users = $db->users;
                    $qry = array("user" => $usr_email,"pass" => md5($usr_password));
                    $result = $users->findOne($qry);
                    $result=$result['user'];
                    
                    if($result){
                        
                        return 1;
                     
                    } else {
                        
                        return 0;
                    } 
            } 
            
            
           
           if(!isset($_SESSION['userid'])){
               
                if(isset($_POST['login'])){
                      if(verificar_login($_POST['user'],$_POST['pass'],$result) == 1){
                            $_SESSION['userid'] = $result->idusuario; 
                            header("location:index.php"); 
                            echo '<div ">Bien.</div>'; 
                                                  
                      }
                     echo '<div class="error">Su usuario es incorrecto, intente nuevamente.</div>'; 
                    
                }
               
               
           }
          
 /*           
                           
             $newUsers = array(
             array(
                 'user' => 'josemlp@correo.ugr.es', 
                 'pass' => '12345',           
             )
         );
             
             include 'mongoConexion.php';
           
           $users = $db->users;
           
           $insert = array("user" => "jose", "pass" => md5("12345"));
           
           $users->insert($insert);
           
           $cursor = $users->find();
           foreach ($cursor as $doc) {
                var_dump($doc);
            }
           
*/          
           
           ?>
       </div> 
       
        
 
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>

          
    </div>
 </div> 
      
      <div class="col-xs-2 col-sm-2 sidebar-offcanvas" id="sidebar" role="navigation">

       

      <form class="form-signin" role="form" action="index.php" method="POST">
        <h2 class="form-signin-heading">Login</h2>
        <input type="email" class="form-control" placeholder="Email"  name="user" required autofocus>
        <input type="password" class="form-control" placeholder="Password"  name="pass" required>
        <label class="checkbox">
          <input type="checkbox" value="remember-me"> Remember me
        </label>
        <button class="btn btn-lg btn-primary btn-block" type="submit" value="login"  >Sign in</button>
      </form>
             
        </div><!--/span-->
       
        
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="aassert/js/bootstrap.min.js"></script>
    <script src="aassert/js/docs.min.js"></script>
  </body>
</html>
