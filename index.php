<?php
Header("Expires: ".GMDate("D, d M Y H:i:s")."GMT");
@$user = $_POST['user'];
@$category = $_POST['category'];
@$priority = $_POST['priority'];
@$text = $_POST['text'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "reminders";

$sql_database = "CREATE DATABASE IF NOT EXISTS reminders";

$sql_table = "CREATE TABLE IF NOT EXISTS our_reminders (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
User VARCHAR(5) NOT NULL,
Category VARCHAR(10) NOT NULL,
Priority VARCHAR(5) NOT NULL,
Text VARCHAR(100000) NOT NULL,
Date TIMESTAMP
)";



$sql_insert = "INSERT INTO our_reminders (User, Category, Priority, Text) 
VALUES ('$user', '$category', '$priority', '$text')";



$connection = mysqli_connect($servername, $username, $password);
mysqli_select_db($connection, $dbname);


if (!mysqli_query($connection, $sql_database)) {
    echo "Error creating database: " . mysqli_error($connection);
}
 
if (!mysqli_query($connection, $sql_table)) {
    echo "Error creating table: " . mysqli_error($connection);
} 
/*
if (!isset($_POST['submit'])){
	mysqli_query($connection, $sql_insert);
}*/
/*
if (!mysqli_query($connection, $sql_insert)){
	echo "Error inserting data: " . mysqli_error($connection);
}
*/


?>

<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8">
		<meta http-equiv="cache-control" content="no-cache">
		<title>ToDo List</title>
		<link rel="stylesheet" href="css/style.css" media="screen">
    </head>
	<body>
		<div id="content">
			<h3>Zadanie novej pripomienky</h3>

			
			
			
			<form method="post">
				<fieldset>
					<div class="form_field">
						<span class="label">Užívateľ</span><br>
						<label for="katka">Katka</label>
						<input type="radio" name="user" value="Katka" id="katka" <?php echo $user == "Katka" ? "checked" : "" ?>>
						<label for="juraj">Juraj</label>
						<input type="radio" name="user" value="Juraj" id="juraj" <?php echo $user == "Juraj" ? "checked" : "" ?>><br>
					</div>
					<div class="form_field">
						<span class="label">Kategória</span><br>
						<select name="category">
						<option value="" <?php echo $category == "" ? "selected" : "" ;?>></option>
						<option value="Práca" <?php echo $category == "Práca" ? "selected" : "" ?>>Práca</option>
						<option value="Osobné" <?php echo $category == "Osobné" ? "selected" : "" ?>>Osobné</option>
						</select><br>
					</div>
					<div class="form_field">
						  <span class="label">Priorita</span><br>
						  <select name="priority">
						  <option value ="" <?php echo $priority == "" ? "selected" : "" ?>></option>
							<option value="Nízka" <?php echo $priority == "Nízka" ? "selected" : "" ?>>Nízka</option>
							<option value = "Stredná" <?php echo $priority == "Stredná" ? "selected" : "" ?>>Stredná</option>
							<option value="Vysoká" <?php echo $priority == "Vysoká" ? "selected" : "" ?>>Vysoká</option>
						  </select><br>
					</div>
					<p>&nbsp;</p>
					<div class="textarea">
						<div class="label">Text pripomienky</div>
						<textarea type="text" name="text">
						<?php echo $text ?>
						</textarea>
					</div>

					<button type="submit" name="submit">Uložiť</button>
					
					
					
				</fieldset>
			</form>
			<?php if (isset($_POST['submit'])){
					if ($user == "" || $category == "" || $priority == "" || strlen(trim($text)) == 0){
						echo "<p class='required'>Vyplňte všetky povinné údaje</p>";
						}
					else{
					mysqli_query($connection, $sql_insert);
						echo "<script type='text/javascript'>
							window.location = 'show.php';
						</script>";
						}
			} ?>
			<p>* = povinné údaje</p>
		</div>
	</body>
</html>