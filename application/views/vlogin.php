<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<form action="<?php echo base_url('Login/aksi_login'); ?>" method="post">
  <div class="form-group"> 
      <label for="pwd">username:</label>
      <input type="text" name="username" class="form-control" id="pwd" placeholder="Enter username">
    </div><br>
	  <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" name="password" class="form-control" id="pwd" placeholder="Enter password">
    </div><br>
      <button type="submit" class="btn btn-default">Submit</button>
  
</form>
</body>
</html>