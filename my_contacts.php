<?php
 
 //session start
	session_start();

?>

<! DOCTYPE html>

<html>
   
   <head>
   		<title> practice </title>
   		<link rel = "stylesheet" href = "style.css">
        <meta charset = "utf-8">
        <meta name = "viewport" content="width=device-width, initial-scale=1.0">
   </head>

    <body>
        
        <! Navigation Bar>

    	<div class = "navbar">

            <div class = "nav_start">
    		  <ul>
    			<li> <a href="version.php"> Home </a> </li>
    			<li> <a href = "contact.php"> Contact </a> </li>
    			
    		  </ul>
            </div>

            <div class = "log_out">

                <ul>
                    <li> <a href="log_out_controller.php">Logout </a> </li>
                </ul>   

            </div>

        </div>
        
       
   </body>

</html>







<?php

	require 'db_connect.php';
    
  
    	$user_id = $_SESSION['user_id'];

		$sql = "select * from contact_info where user_id = '$user_id'";
		$result = mysqli_query($connection,$sql);

		if($result)
		{
			if(mysqli_num_rows($result)==0)
			{
				echo "contact list empty! First add your contacts then try.<br>";
			}
			else 
			{ ?> <h2 style = "text-align: center"><?php echo "your contacts" ?></h2>
      <table>
             <tr>
                <th>Contact Id</th>
                <th>Name</th>
                <th>District</th> 
                <th>E-mail</th>
                <th>Phone </th>
            </tr>
        <?php
				while($row=mysqli_fetch_row($result))
				{
          ?>
            <tr>
              <td><?php echo $row[1] ?> </td>
              <td><?php echo $row[2] ?></td>
              <td><?php echo $row[3] ?></td>
              <td><?php echo $row[4] ?></td>
              <td><?php echo $row[5] ?></td>
            </tr>


<?php
				}
			}

		}
    

?>
 </table>
</body>

</html>





