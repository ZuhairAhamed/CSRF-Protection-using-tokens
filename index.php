	<?php 
 
    		session_start(); //Starting a session

    		//setting a cookie
    		$sessionID = session_id(); //storing session id

    		setcookie("session_id",$sessionID,time()+3600,"/","localhost",false,true); 
    		//cookie will terminate in 3600 seconds (1 hour)
    
	?>



<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>SSS Assignment 01</title>
  <script type="text/javascript" src="config.js"> </script>
  <link rel="stylesheet" href="css/style.css">
</head>

<body>

  <div class="login-page">
  <div class="form">
    
    <form class="login-form" method="POST" action="server.php">
      <input type="text" placeholder="username" name="username"/>
      <input type="password" placeholder="password" name="pass"/>
	<div> <input type="hidden" id="csToken" name="CSR"/></div>
      <button name="submit">login</button>
      <p class="message">Done by: <a href="http://zuhairahamedd.blogspot.com/2018/05/csrf-protection-using-synchronizer.html">Zuhair Ahamed</a></p>
    </form>
  </div>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  

    <script  src="js/index.js"></script>

	<?php 
	
	if(isset($_COOKIE['session_id']))
            { 
                echo '<script> var token = loadDOC("POST","server.php","csToken");  </script>'; 
                   
                //echo "cookie set";     
            }
    	?>


</body>
</html>
