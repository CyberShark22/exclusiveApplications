<?php
session_start();

?>
<!DOCTYPE html>
<html>
    <head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <style>
          @import url("css/freelancer.css");
            
            
        </style>
    <title> Weather </title>
        </style>
        
    </head>
    <body>
         <div class="jumbotron text-center">
           <h1>
             Weather</h1>
            </div>
        <div id ="container" class="container">
                <form name="form" action="" method="get">
                         Enter Location: <input type="text" id="product">
                         </form>
            <input type="button" onclick="weatherSearch()" value="Search">
        
        
        
    </body>
    
    
    
</html>