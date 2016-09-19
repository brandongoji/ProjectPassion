<?php

  include('connection.php');

	
  $goalname = $_POST['goalname'];
$saving = $_POST['saving'];
$need = $_POST['need'];

$sql = mysql_query("INSERT INTO goal(goalname,saving,need)VALUES('$goalname','$saving','$need')");
if($sql){
?>
            <script type="text/javascript">
            window.alert("signup success");
            window.location='goals.html';
           </script>
 <?php

}
else
{
         ?>
            <script type="text/javascript">
            window.alert("signup faill");
            window.location='newgoals.html';
           </script>
 <?php
}
?>