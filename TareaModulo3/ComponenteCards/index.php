<?php
  $palabrasReservadas = ['continue','and','new','class','include'];  
?>

<!DOCTYPE html>
<html>
    <head>
		<title>About</title>
		<link rel="stylesheet" type="text/css" href="bootstrap.css"/>
		
    </head>
      <body>
       
      <div class="card-group">
        <?php foreach ($palabrasReservadas as $reservadas){  ?>
        <div class="card">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title"><?php echo $reservadas; ?></h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
      <div class="card-footer">
        <small class="text-muted">Last updated 3 mins ago</small>
      </div>
    </div>
      <?php  }  ?>
  </div>
    </body>
</html>
