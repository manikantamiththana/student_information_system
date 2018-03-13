<html>
	<head>
		<title>faculty login</title>
		<style type="text/css">
		input[type=text],[type=password]
		{
		    width: 100%;
		    padding: 12px 20px;
		    margin: 8px 0;
		    display: inline-block;
		    border: 1px solid #ccc;
		    border-radius: 4px;
		    box-sizing: border-box;
		}

		input[type=submit]
	   {
		    width: 100%;
		    background-color: #4CAF50;
		    font-size: 20px;
		    color: white;
		    padding: 10px 20px;
		    margin: 8px 0;
		    border: none;
		    border-radius: 4px;
		    cursor: pointer;
        }
        input[type=submit]:hover 
        {
   		 	background-color: #45a049;
		}
		h1{
			font-size: 40px;
			color:orange;
			text-align:center;
		}
		h2{
			font-size: 30px;
			text-align:left;
			display: inline;
		}
		body
		{
			background-color:#d0e4fe;
			text-align: center;

		}
		div 
		{
		    background-color:#00ffff;
		    width: 400px;
		    padding: 25px;
		    border: 25px solid ;
		    border-color: #70db70;
		    border-radius: 20px;
		    text-align: left;
		    margin-left: 300px;
        }
		</style>
	</head>
	<body >
		<h1>Faculty Login</h1>
		<div >

		<form  method="post"  action="afterfacultylogin.php">
			    <label for="username"><h2>Username</h2></label>
    			<input type="text" id="username" name="username">
    			<label for="password"><h2>Password</h2></label>
    			<input type="password" id="password" name="password">
    			<br><br><input type="submit" value="Submit">
		</form>	
		</div>
	</body>
</html>
