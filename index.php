<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Font Awesome -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.3.0/mdb.min.css"
  rel="stylesheet"
/>
<!-- MDB -->
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.3.0/mdb.min.js"
></script>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	</head>
<body>
	<header class="card text-center text-responsive">
		<div >
			<h1><strong>Simple File Manager</strong></h1>
	</header>
  <div id="wrap">
    <div id="main" class="container clear-top"> 
	<div class="container-fluid">
	<div class="col-md-3"></div>
	<div class="col-md-6 well">
		<h3 class="text-primary text-center font-size">Upload and Download Your Files</h3>
		<hr style="border-top:1px dottec #ccc;">
		<form class="form-inline" method="POST" action="upload.php" enctype="multipart/form-data">
			<input class="form-control" type="file" name="upload"/>
			<button type="submit" class="btn btn-success form-control" name="submit"><span class="glyphicon glyphicon-upload"></span> Upload</button>
		</form>
		<br /><br />
		<table class="table table-bordered">
			<thead class="alert-warning">
				<tr>
					<th>Files</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody class="alert-success">
			<?php
				require 'connection.php';
				$row = $conn->query("SELECT * FROM `file`") or die(mysqli_error());
				while($fetch = $row->fetch_array()){
			?>
				<tr>
					<?php 
						$name = explode('/', $fetch['file']);
					?>
					<td><?php echo $fetch['name']?></td>
					<td><a href="download.php?file=<?php echo $name[1]?>" class="btn btn-primary"><span class="glyphicon glyphicon-download"></span> Download</a></td>
				</tr>
			<?php
				}
			?>
			</tbody>
		</table>
		
				</div>
      
				
	</div>
  </div>
      </div>
      <footer class="text-center text-white fixed-bottom bg-dark" >
        
  <!-- Grid container -->
  <div class="container p-4 pb-0">
    <!-- Section: Social media -->
    <section class="mb-4">
      <!-- Facebook -->
      <a class="btn btn-outline-light btn-floating m-1" href="https://www.facebook.com/profile.php?id=100015764198156" role="button"
        ><i class="fab fa-facebook-f"></i
      ></a>

      <!-- Twitter -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-twitter"></i
      ></a>

      <!-- Google -->
      <a class="btn btn-outline-light btn-floating m-1" href="srinivasbdk2@gmail.com" role="button"
        ><i class="fab fa-google"></i
      ></a>

      <!-- Instagram -->
      <a class="btn btn-outline-light btn-floating m-1" href="https://www.instagram.com/shrinivas__srini/" role="button"
        ><i class="fab fa-instagram"></i
      ></a>

      <!-- Linkedin -->
      <a class="btn btn-outline-light btn-floating m-1" href="https://www.linkedin.com/in/srinivas-s-sdmit/" role="button"
        ><i class="fab fa-linkedin-in"></i
      ></a>

      <!-- Github -->
      <a class="btn btn-outline-light btn-floating m-1" href="https://github.com/Srinivas6238/" role="button"
        ><i class="fab fa-github"></i
      ></a>
    </section>
    <!-- Section: Social media -->
  </div>
  
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2022 Copyright:
    <a class="text-white" href="https://github.com/Srinivas6238/">Srinivas S</a>
  </div>
  <!-- Copyright -->
</footer>

      
	
</body>

</html>