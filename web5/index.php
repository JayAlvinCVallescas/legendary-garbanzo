<?php
session_start();
if(isset($_SESSION['num_visits'])){
   $_SESSION['num_visits']+=1; 

   if($_SESSION['num_visits'] == 5){
      echo "Thank you for visiting the page a lot.";
   }
   else if($_SESSION['num_visits'] == 10){
      header("Location: congratulations.php");
      exit();
   }
} else {
   $_SESSION['num_visits']=1; 
}

if(isset($_GET['reset'])){
   session_destroy();
   header("Location: index.php");
   exit();
} 

?>

<h1>Hello</h1>
<p>You have visited this page <?php print_r($_SESSION['num_visits']); ?> times</p>
<p><a href="?reset=true">Reset</a></p>
