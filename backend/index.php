<?php

require_once 'php/init.php';

if(!empty($_GET['items']))
{

$insert = new insert($_GET['items']);
if($insert->insertTask()) 

{

echo "Task inserted Successfully!";

}

else{

  echo "Task Insert Error!";
}

}
?>



<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>To do list App</title>
  </head>
  <body>


<nav class="navbar navbar-dark bg-dark shadow">
    <span class="navbar-brand mb-0 h1">To do List App </span>

</nav>

    <div class="container mt-5">
      <?php waiter(); ?>

      
      

    <form action="" method="GET">
      <div class="row">
        <div class= " col-md-9 form-group">

        <input class="form-control" type="text" name="items" placeholder="Insert a new task" required/>

          </div>
          
       <div class="cold-md">
        <input class="btn btn-success" type ="submit" value="Add Task">
  </form>

  <?php

viewTable();
  



?>
  </div>
  
  </body>
</html>