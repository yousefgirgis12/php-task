
<!DOCTYPE html>
<html>
<head>
<title>Registration</title> 
</head>
<body>
<div class="container">
  <div class="header">
  <h1>Register</h1>
  </div>
	<form action="Registration.php" method="post">
	<h3>project</h3>
	<dir>
		<label for="Name">Name :</label>
		<input type="text" name="Name">
	</dir>
		<dir>
		<label for="email">email :</label>
		<input type="text" name="email">
	</dir>
	<dir>
	<label for="password">password :</label>
        <input type="number" name="password">
    </dir>
    <dir>
	<label for="confirm password">confirm password :</label>
        <input type="number" name="confirm password">
    </dir>
	<dir>
		<label for="Budget">Budget with $ :</label>
		<input type="number" name="Budget"required>
	</dir>
		<dir>
		<label for="Description">Description :</label>
		<input type="text" name="Description"required>
	</dir>
	<h3>Department</h3>
	<dir>
        <label for="Name">Name :</label>
		<input type="text" name="Name"required>
	</dir>
	<dir>
		<label for="Manger">Manger :</label>
		<input type="text" name="Manger"required>
	</dir>
	<dir>
		<button type="submit"><em>Submit</em></button>
				<p>If you already user press <a href="login.php"><em>log in</em></a></p>

	</dir>
    </form>
   </div> 
</body>
</html>