
<!DOCTYPE html>

<html>
    <head>

		<title>Faculty session </title>
		<style type="text/css">
		    body{
        background-color:  #99b3ff;
        font-size: 20px;
        color:   #00061a;
    }
        input[type=number] {
    width: 400px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 8px;
    font-size: 16px;
    font-weight: bold;
    background-color: white;
    background-image: url('search1.jpg');
    background-position: 4px 2px;  
    background-repeat: no-repeat;
    padding: 12px 20px 12px 40px;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
    margin-left: 100px;
    margin-top: 50px;
}

input[type=submit]
         {
            background-color: #00061a;
            border: none;
            color: white;
            font-size: 16px;
            font-weight: bold;
            padding: 12px 20px 12px 40px;
            text-decoration: none;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 8px;
        
        }
        h1{
            color:#00061a ;
            font-size: 30px;
            font-weight: bold;
            text-align: center;
            margin-top: 50px;
        }
         h2{
            color:#00061a ;
            font-size: 25px;
            font-variant: italic;
            margin-top: 20px;
            text-align: center;
        }

        }
        table{
            color:#0000e6;
            padding: 2px;

            text-align: center;
            background-color:#c2d6d6;
        }
        tr:nth-child(even){
            background-color: #eee6ff;
            font-size: 25px;
        }
        th{
            background-color: #00061a;
            color:white;
            font-size: 25px;
            font-weight: bold;
        }
			body{
			background-color: #e0e0d1;
			margin-left: 200px;
			
			}
			.button
			{
			    background-color:#000099; /* Green */
			    border: none;
			    color: white;
			    padding: 15px 39.5px;
			    text-align: center;
			    text-decoration: none;
			    display: inline-block;
			    font-size: 20px;
			    cursor: pointer;
			    float: left;
			}

			.dropdown 
			{
			    position: relative;
			    display: inline-block;
			}

			.dropdown-content
			{
			    display: none;
			    position: absolute;
			    background-color:#000000;
			    min-width: 160px;
			    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
			}

			.dropdown-content a 
			{
			    color:#00e6e6;
			    font-size: 16px;
			    font-weight: bold;
			    padding: 12px 16px;
			    text-decoration: none;
			    display: block;
			}

			.dropdown-content a:hover 
			{
				background-color: #f1f1f1
			}

			.dropdown:hover .dropdown-content 
			{
			    display: block;
			}

			.dropdown:hover .dropbtn 
			{
			    background-color: #3e8e41;
			}


			.button:hover 
			{
			    background-color:#00001a;
			}
			.button:active 
			{
			  background-color:	 #000000;
			  box-shadow: 0 5px #666;
			  transform: translateY(4px);
			}
			h1
			{
				color: #990000;
				font-size:50px;
				text-align: center;
				font-weight: bold;
			}
			div{
				display: inline-block;
			}
		

		</style>
 
 	</head>

    <body>
		<?php
			$username=$_POST['username'];
			$password=$_POST['password'];
				if($username&&$password)
				{
					require("newconnection.php");
					if(!$link)
					{
						echo "error while connecting the database";
					}
					else
					{
  
						$query="SELECT * FROM admin where dbusername='$username'";
						$result=mysqli_query($link, $query);
						$numrows=mysqli_num_rows($result);
						if($numrows!=0)
						{
							$row=mysqli_fetch_assoc($result);
								$dbusername=$row['dbusername'];
								$dbpassword=$row['dbpassword'];
							if($username==$dbusername&&$password==$dbpassword)
							{				
			?>
								<a href="index.php"><button class="button">Home</button></a>
								    
								    <h1>Enter the Student Id who you want to search</h1>
								  <form method="get" action="studentdetails.php">
								    <input type="number" name="stdid" placeholder="Student Id Eg:313126510061">
								  <input type="submit" name="submit" value= "Search">
								</form>
							
			<?php

							}
							else
							{
								echo"you password incorrect"."<a href="."facultylogin.php>"."Back</a>";
							}
						}
						 else
						{
						die("Please Enter Valid Credentials"."<a href="."facultylogin.php>"."Back</a>");
						}
					}

				}
				else
				{
				die("please enter user  name and password"."<a href="."facultylogin.php>"."Back</a>");
				}
    
				
		?>
	</body>
</html>