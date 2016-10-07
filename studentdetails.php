<html>
<head>
	    <style>
    body{
        background-color:  #99b3ff;
        font-size: 20px;
        color:   #00061a;
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
            font-size: 20px;
            text-align: center;
        }
        th{
            background-color: #00061a;
            color:white;
            font-size: 20px;
            font-weight: bold;
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
</style>
</head>
<body align="center">

   <table align="center">

   <a href= "index.php"><button style="align:center" class="button">Home</button></a>
   <?php
       if(isset($_GET['submit']))
       {
            require("newconnection.php");
            if(!$link)
                echo "error";
            else
            {
                $stdid=$_GET['stdid'];
            
                $query1="SELECT * FROM details Where id=$stdid";
                $result1=mysqli_query($link, $query1);
                $query2="SELECT * FROM cgpa Where id=$stdid";
                $result2=mysqli_query($link, $query2);
                if($result1)
                {
                    $numrows1=mysqli_num_rows($result1);
                    $numrows2=mysqli_num_rows($result2);
                   
                    if($numrows1&&$numrows2)
                    {
                        echo "<h2>".$numrows1." rows effected</h2>";
                        echo "<tr><th>Student Id</th><th>Student Name</th><th>Branch</th><th>Attendence
                        </th><th>Last Councelling Date</th><th>Councelled By</th><th>Suggestions</th>";
                        while($row=mysqli_fetch_assoc($result1))
                        {
                          $sid=$row['id'];
                          $stdname=$row['name'];
                          $stdbranch=$row['branch'];
                          $attendence=$row['attendence'];
                          $lastcouncellingdate=$row['lastcouncelling'];
                          $councelledby=$row['councelledby'];
                          $suggestions=$row['suggestions'];
                          echo "<tr><td>",$sid,"</td><td> ",$stdname," </td><td>",$stdbranch,"</td><td> ",$attendence,"</td><td>",$lastcouncellingdate,"</td><td>",$councelledby,"</td><td>",$suggestions,"</td></tr>";
                        }
?>
</table>
<table align="center">
<?php
                        echo "<h2>".$numrows2." rows effected</h2>";
                        echo "<tr><th>Student Id</th><th>1st Year</th><th>2nd Year Sem 1</th><th>2nd Year Sem 2</th><th>3rd Year Sem 1</th><th>3rd Year Sem 2</th><th>4th Year Sem 1</th><th>4th Year Sem 2</th></tr>";
                        while($row=mysqli_fetch_assoc($result2))
                        {
                          $sid=$row['id'];
                          $sem1=$row['1_1'];
                          $sem21=$row['2_1'];
                          $sem22=$row['2_2'];
                          $sem31=$row['3_1'];
                          $sem32=$row['3_2'];
                          $sem41=$row['4_1'];
                          $sem42=$row['4_2'];

                          echo "<tr><td>",$sid,"</td><td> ",$sem1," </td><td>",$sem21,"</td><td> ",$sem22,"</td><td>",$sem31,"</td><td>",$sem32,"</td><td>",$sem41,"</td><td>",$sem41,"</td></tr>";
                        
                        }
                        
                    }
              
                    else
                    {
                        echo "<a href= "."afterfacultylogin.php"."><button class="."button>"."Home</button></a>";
                        echo "<h2>Please enter valid Student Id</h2>"."<a href="."afterfacultylogin.php>"."Back</a>";
                    }
                }

            }
       }
      
                 
?>
</table>
</body>
</html>






















