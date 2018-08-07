<?php

print_r($_GET);

    $error = ""; 
    $weatherMessage = "";


    if ($_GET['city']) {
        
        $forecastPage = file_get_contents("https://www.weather-forecast.com/locations/London/forecasts/latest");
        
        echo $forecastPage;
    }


    if ($_GET) {
        
        if (!$_GET["city"]) {
            
            $error .= '<div class="alert alert-danger" role="alert">You did not enter a valid city. </div>';
        }
    
        
    }
    
?>
    

<!DOCTYPE html>
<html lang="en">
<head>
    <title>TateShep.com - what's the weather?</title>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>

    <style>
         canvas {
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            position:absolute;
            top:0;
            left:0;
            width:100%;
            height:850px;
            display:block;
            background:#333;
            z-index: -1;
            font-family: 'VT323', monospace;
        }
        body {
            color:greenyellow;
            font-family:monospace;
        }
        
        button {
            margin: 10px;
        }
        
        #container {
            background-color: #333;
            opacity;70%;
            margin-left:10%;
            margin-right:10%;
            padding:10px;
        }
        
        #message {
            height:250px;
        }
        
        #ErrorMessage {
            display:show;
        }
        
</style>
</head>

<body>
<canvas id="c">
</canvas>
<br>
<div id="container">  
            
            <form method="get">
                
                <h1>What's the weather?</h1>
                <p>Enter the name of a city.</p>
                
                <div class="form-group">
                    <div id="ErrorMessage"><? echo $error. $weatherMessage; ?>
                    </div>
                </div>
                
            <div class="form-group">
                
            <input class="form-control" name="city" type="text" id="city" placeholder="eg. London"><br>
                </div>
        
          <button type="submit" class="btn btn-outline-light" id="submit">Submit</button>
        </form>
     
     <div>Back to <a href="https://tateshep.com/">Tateshep.com</a></div>
</div> 
    
   <script type="text/javascript">
       
       
       
       
    </script>
    
    
    
<!-- <script src="MatrixScript.js">
</script> -->


    
</body>
</html>