<html>
<head>
	    <style>
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
    transition: width 3.4s ease-in-out;
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
</style>
</head>
<body align="center">
    <table border="1" align="center">
    <h1>Enter the Student Id who you want to search</h1>
    <form method="get" action="studentretrival.php">
    <input type="number" name="stdid" placeholder="Student Id Eg:313126510061">
  <input type="submit" name="submit" value= "Search">
</form>
<?php
       if(isset($_GET['submit']))
       {
            require("newconnection.php");
            if(!$link)
                echo "error";
            else
            {
                $stdid=$_GET['stdid'];
            
                $query3="SELECT * FROM details Where id=$stdid";
                $result3=mysqli_query($link, $query3);
                if($result3)
                {
                    $numrows=mysqli_num_rows($result3);
                   
                    if($numrows)
                    {
                        echo "<h2>".$numrows." rows effected</h2>";
                        echo "<tr><th>Student Id</th><th>Student Name</th><th>Branch</th><th>Attendence
                        </th>";
                        while($row=mysqli_fetch_assoc($result3))
                        {
                          $sid=$row['id'];
                          $stdname=$row['name'];
                          $stdbranch=$row['branch'];
                          $attendence=$row['attendence'];
                          echo "<tr><td>",$sid,"</td><td> ",$stdname," </td><td>",$stdbranch,"</td><td> ",$attendence,"</td></tr>";
                        }
                    }
              
                    else
                    {
                        echo "<h2>Please enter valid Student Id</h2>";
                    }
                }

            }
       }
      

?>
</table>
</body>
</html>






















