<?php


           include 'db_config.php';
           
           try 
            {
                $client = new MongoClient($uri2, array("connectTimeoutMS" => 30000));
                $db = $client->selectDB("geoalert");
                
           
            }
                catch (MongoConnectionException $e ) 
            {
                echo '<p>Couldn\'t connect to mongodb, is the "mongo" process running?</p>';
                exit();
            }


?>