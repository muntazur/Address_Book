<! DOCTYPE html>

<html>
   
   <head>
   		<title> Home </title>
   		<link rel = "stylesheet" href = "style.css">
        <meta charset = "utf-8">
        <meta name = "viewport" content="width=device-width, initial-scale=1.0">
   </head>

    <body>
        
        <! Navigation Bar>

    	<div class = "navbar">

            <div class = "nav_start">
    		  <ul>
    			<li> <a href="index.php"> Home </a> </li>
    			
    		  </ul>
            </div>


            <div class = "log_out">

                <ul>
                    <li> <a href="sign_up.php">SignUp </a> </li>
                </ul>   

            </div>

        </div>


        <! user login container>

        <div class = "user">

        	<div class = "login"> <h2> Get started </h2></div>
        	<form action = "login_controller.php" method = "post">

        		<div class = "email_container">

        			<input type="email" name="email" placeholder="E-mail" required>
        		</div>

        		<div class = "password_container">
        			<input type="password" name="password" placeholder="password" required>
        		</div>

        		<div class = "submit_button">
        			<input type="submit" name="u_btn" value="Login" required>
        		</div>

        	</form>

        </div>

   </body>

</html>

