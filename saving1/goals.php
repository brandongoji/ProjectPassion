<?php 
include('connection.php'); ?>
<html>
<head>
    <title><?php $_SESSION['user_name']=$name ?></title>
    <link rel="stylesheet" type="text/css" href="dashboard.css">
    <link rel="stylesheet" type="text/css" href="slider.css">

</head>
<body>
<center>
    <header>
        <div id="nav">
        	<ul>
        		<li><a href="#">Home</a></li>
        		<li><a href="#">Dashboard</a></li>
        		<li><a href="#">Forum</a></li>
        	</ul>
        </div>
    </header>
    <div id="content">
        <div id="left">
       <ul>
         <li><a href="#">Profile</a></li>
         <li><a href="goals.html">Goals</a></li>
         <li><a href="#">Groups</a></li>
         <li><a href="#">Deposite</a></li>
         <li><a href="#">Withdraw</a></li>
         <li><a href="#">Send</a></li>
         <li><a href="#">Tips"Videos"</a></li>
         <li><a href="#"></a></li>         
       </ul>
        </div>

        <div id="right">
        <center style="margin-top:20px;"><a style="text-decoration:none; font-size:27px" href="newgoals.html"><h1>Welcome?></h1> Set your New goal</a></center>
            <div id="makegoal">              
               <?php
               
                  include('connection.php');
                 $sql = mysql_query("select * from goal");
                 ?>
                 <?php
                  while($result = mysql_fetch_array($sql))
                     {
                    
                    
                     echo "<div id='goal'>";
                     echo "Goal#".$result['id']." ";
                      echo "<div id='namegoal'>".$result['goalname']."</div>";
                      echo "</div>";
                     
                      echo "<br><br>";

                     }
                   ?>
            </div>
        </div>


    </div>

</center>
</body>
</html>
