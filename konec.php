<?php
session_start();

?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <link rel="stylesheet" type="text/css" href="style/styles.css" />
        <title>Gambling</title>
    </head>
    <body>
        <div id="naslov">
            <h1>REZULTATI</h1>
        </div>
        <div id="glavni">
		<div id="igrac">               
                    <div class="igralec"></div>
                    <div class="igralec posebn"><?php
       
	   if($_SESSION["vsota1"]==$_SESSION["vsota2"] && $_SESSION["vsota1"]==$_SESSION["vsota3"]){
		   echo "Zmagovalci so:",$_SESSION["i1"]," in ",$_SESSION["i2"]," in ",$_SESSION["i3"];
	   }
	   elseif($_SESSION["vsota1"]==$_SESSION["vsota2"]&& $_SESSION["vsota1"]>$_SESSION["vsota3"]){
			   echo "Zmagovalca sta: ",$_SESSION["i1"]," in ",$_SESSION["i2"];
	   }	
		   
	   elseif($_SESSION["vsota3"]==$_SESSION["vsota2"]&& $_SESSION["vsota2"]>$_SESSION["vsota1"]){
			   echo "Zmagovalca sta: ",$_SESSION["i2"]," in ",$_SESSION["i3"];
	   }	

	   elseif($_SESSION["vsota1"]==$_SESSION["vsota3"]&& $_SESSION["vsota1"]>$_SESSION["vsota2"]){
			   echo "Zmagovalca sta: ",$_SESSION["i1"]," in ",$_SESSION["i3"];
	   }	


	   elseif($_SESSION["vsota3"]<$_SESSION["vsota1"] && $_SESSION["vsota1"]>$_SESSION["vsota2"]){
	   echo "Zmagovalec je: ",$_SESSION["i1"];	
	   }

	   elseif($_SESSION["vsota1"]<$_SESSION["vsota2"] && $_SESSION["vsota2"]>$_SESSION["vsota3"]){
	   echo "Zmagovalec je: ",$_SESSION["i2"];	
	   }

	   elseif($_SESSION["vsota1"]<$_SESSION["vsota3"] && $_SESSION["vsota3"]>$_SESSION["vsota2"]){
	   echo "Zmagovalec je: ",$_SESSION["i3"];	
	   }
	   
	   //echo $_SESSION["vsota1"]," ",$_SESSION["vsota2"]," ",$_SESSION["vsota3"];
	   ?>	</div>
                    <div class="igralec"></div>
                </div>
				<div id="izbira lolek">REZULTATI BODO IZBRISANI ČEZ: <mark id="cas">15</mark></div>
		</div>
        
        
    </body>
        <!--skripta za redirect čez 15 sek-->
        <script>
        function redirTimer() {self.setTimeout ("self.location.href='index.php';",15000);} 
        redirTimer();

        var seconds_left = 15;
        setInterval(function() {
            document.getElementById('cas').innerHTML = --seconds_left;$("#cas").html(seconds_left);}, 1000);
        </script>

</html> 