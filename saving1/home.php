<?php session_start(); 
include('connection.php');?>
<title> <?php echo $_SESSION['user_name'];?> </title>
 <link rel="stylesheet" type="text/css" href="dashboard.css">
<body>
	
	<center>
    <header>
        <div id="nav">
        	<ul>
        		<li><a href="index.html">Home</a></li>
        		<li><a href="dashboard.html">Dashboard</a></li>
            <li><a href="logout.php">Logout</li>
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
            <div id="makegoal">
              <center> <h1> Welcome  <?php  echo $_SESSION['user_name'];?> </h1>
              	<h2>Set your New goal</h3></center>

              <form action="newgoal.php" method="POST">
              what are you saving for?<br><br>
              <input type="text" name="goalname" placeholder="name your goal" required><br><br>
               How Much You Want to saving per month?<br><br>
                 <input type="range" name="saving"  min="100" max="1000" value="0"><br><br>
               How Much do you need?<br><br>
                 <input type="range" name="need" min="100" max="1000" value="0"><br><br><br>
                 <input type="submit" value="Start Saving"><br><br>
  
                 goal Reach time

              </form>
            </div>
        </div>


    </div>

</center>
</body>
</html>
</body>



