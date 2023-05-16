<?php
    session_start();
    $_SESSION["vsota1"]=0;
    $_SESSION["vsota2"]=0;
    $_SESSION["vsota3"]=0;
    $_SESSION["stevc"]=0;
    $_SESSION["da"]=true;
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
            <h1>GAMBLING ROOM</h1>
        </div>

        <div id="glavni">
            <form action="igra.php" name="forma" method="post">
                <div id="igrac">               
                    <div class="igralec"><br />IGRALEC 1<br /><br /> Ime: <input type="text" name="ime1"  autofocus/></div>
                    <div class="igralec"><br />IGRALEC 2<br /><br />Ime: <input type="text" name="ime2"  autofocus/></div>
                    <div class="igralec"><br />IGRALEC 3<br /><br /> Ime: <input type="text" name="ime3"  autofocus/></div>
                </div>
                    <div id="izbira">
                       
                    Število kock
                            <select name="stkock">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            </select>
                            Število iger
                            <select name="stIger">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            </select> 
                                <br /><br />
                        <input type="submit" class="gumb" onClick="return isEmpty()" name="igraj" value="IGRAJ"/>
                 </div>
                

            </form>
        </div>
        
        
        
    </body>
    <script>
        //preveri če so vnosna polja prazna
        function isEmpty(){
        if(document.forms['forma'].ime1.value == "" || document.forms['forma'].ime2.value == "" || document.forms['forma'].ime3.value == "")
        {
            alert("Vnesi vsa imena!");
            return false;
        }
            return true;
        }
    </script>
</html> 

