<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="css/style.css">
</head>
<style>
body {
     background-image: url('images/maxresdefault.jpg'); /* Add your image path between the quotes */
     background-size: cover;
     background-position: center;
     background-repeat: no-repeat;
     height: 100vh;
     margin: 0;
}
form {
     background-color: white;
     border-radius: 10px; /* Optional: makes the corners rounded */
     box-shadow: 0 0 10px rgba(0, 0, 0, 0.2); /* Optional: adds soft shadow */
}


</style>
<body>
    <div class="d-flex justify-content-center align-items-center vh-100">
    	
    	<form class="shadow w-450 p-3" 
    	      action="php/login.php" 
    	      method="post">

    		<h4 class="display-4  fs-1">Login</h4><br>
    		<?php if(isset($_GET['error'])){ ?>
    		<div class="alert alert-danger" role="alert">
			  <?php echo $_GET['error']; ?>
			</div>
		    <?php } ?>

		  <div class="mb-3">
		    <label class="form-label">User name</label>
		    <input type="text" 
		           class="form-control"
		           name="uname"
		           value="<?php echo (isset($_GET['uname']))?$_GET['uname']:"" ?>">
		  </div>

		  <div class="mb-3">
		    <label class="form-label">Password</label>
		    <input type="password" 
		           class="form-control"
		           name="pass">
		  </div>
		  
		  <div class="text-center"><button type="submit" class="btn btn-primary">Login</button>
		  <a href="index.php" class="link-secondary">Sign Up</a> </div>
		  
		  <a href="index.html" class="link-secondary">Cancel Login</a>
		</form>
    </div>
</body>
</html>