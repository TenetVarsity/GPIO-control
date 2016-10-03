<html>
<head>
<meta name="viewport" content="width=device-width" />
<title>LED Control</title>
</head>
<style>
.button {
    background-color: green;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}
.button1 {
    background-color:red;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}
</style>
        <body>
       
 <h1 style="text-align:center;color:RED;">Tenet Technetronics Pi GPIO Control</h1>
         <form method="get" action="gpio1.php">
                <div style="text-align:center"> 
			<input type="submit" class="button" value="Pin31-ON" name="pin31_on">
                 	<input type="submit" class="button1" value="Pin31-OFF" name="pin31_off"></div>
			</br>
		<div style="text-align:center">
			<input type="submit" class="button"value="Pin32-ON" name="pin32_on">
                 	<input type="submit" class="button1" value="Pin32-OFF" name="pin32_off"></div>
			</br>
		<div style="text-align:center">
                        <input type="submit" class="button" value="Pin33-ON" name="pin33_on">
                        <input type="submit" class="button1" value="Pin33-OFF" name="pin33_off"></div>
                        </br>
                
		<div style="text-align:center">
                        <input type="submit" class="button" value="Pin35-ON" name="pin35_on">
                        <input type="submit" class="button1" value="Pin35-OFF" name="pin35_off"></div>
                        </br>
                <div style="text-align:center">
                        <input type="submit" class="button"value="Pin36-ON" name="pin36_on">
                        <input type="submit" class="button1" value="Pin36-OFF" name="pin36_off"></div>
			</br>
		<div style="text-align:center">
                        <input type="submit" class="button" value="Pin37-ON" name="pin37_on">
                        <input type="submit" class="button1" value="Pin37-OFF" name="pin37_off"></div>
                        </br>
                <div style="text-align:center">
                        <input type="submit" class="button"value="Pin38-ON" name="pin38_on">
                        <input type="submit" class="button1" value="Pin38-OFF" name="pin38_off"></div>
		
         </form>
        <?php
        $setmode17 = shell_exec("/usr/local/bin/gpio -g mode 6 out");
	$setmode17 = shell_exec("/usr/local/bin/gpio -g mode 12 out"); 
	$setmode17 = shell_exec("/usr/local/bin/gpio -g mode 13 out");
	$setmode17 = shell_exec("/usr/local/bin/gpio -g mode 19 out");
        $setmode17 = shell_exec("/usr/local/bin/gpio -g mode 16 out");
        $setmode17 = shell_exec("/usr/local/bin/gpio -g mode 26 out");
	$setmode17 = shell_exec("/usr/local/bin/gpio -g mode 20 out");


        if(isset($_GET['pin31_on'])){
                 $gpio_on = shell_exec("/usr/local/bin/gpio -g write 6 1");
                
         }
         else if(isset($_GET['pin31_off'])){
                $gpio_off = shell_exec("/usr/local/bin/gpio -g write 6 0");
                
        }
	else if(isset($_GET['pin32_on'])){
                $gpio_off = shell_exec("/usr/local/bin/gpio -g write 12 1");
                
        }
	else if(isset($_GET['pin32_off'])){
                $gpio_off = shell_exec("/usr/local/bin/gpio -g write 12 0");
                
        }
	else if(isset($_GET['pin33_on'])){
                $gpio_off = shell_exec("/usr/local/bin/gpio -g write 13 1");
                
        }
	else if(isset($_GET['pin33_off'])){
                $gpio_off = shell_exec("/usr/local/bin/gpio -g write 13 0");
                
        }
	
        else if(isset($_GET['pin35_on'])){
                $gpio_off = shell_exec("/usr/local/bin/gpio -g write 19 1");
                
        }
        else if(isset($_GET['pin35_off'])){
                $gpio_off = shell_exec("/usr/local/bin/gpio -g write 19 0");
                
        }
        else if(isset($_GET['pin36_on'])){
                $gpio_off = shell_exec("/usr/local/bin/gpio -g write 16 1");
                
        }
        else if(isset($_GET['pin36_off'])){
                $gpio_off = shell_exec("/usr/local/bin/gpio -g write 16 0");
                
        }
        else if(isset($_GET['pin37_on'])){
                $gpio_off = shell_exec("/usr/local/bin/gpio -g write 26 1");
         }       
	 else if(isset($_GET['pin37_off'])){
                $gpio_off = shell_exec("/usr/local/bin/gpio -g write 26 0");
                     }
        else if(isset($_GET['pin38_on'])){
                $gpio_off = shell_exec("/usr/local/bin/gpio -g write 20 1");
               }
        else if(isset($_GET['pin38_off'])){
                $gpio_off = shell_exec("/usr/local/bin/gpio -g write 20 0");
   
        }
        ?>
        </body>
 </html>
