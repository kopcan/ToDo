<?php
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
) default charset=utf8";

$sql_insert = "INSERT INTO our_reminders (User, Category, Priority, Text) 
VALUES ('$user', '$category', '$priority', '$text')";



$connection = mysqli_connect($servername, $username, $password);
mysqli_set_charset($connection,'utf8');

mysqli_query($connection, $sql_database) or die (mysqli_error($connection));
mysqli_select_db($connection,$dbname) or die(mysqli_error($connection));
mysqli_query($connection, $sql_table) or die(mysqli_error($connection));
mysqli_query($connection, $sql_insert) or die(mysqli_error($connection));

/*
if (!mysqli_query($connection, $sql_database)) {
    echo "Error creating database: " . mysqli_error($connection);
}

if (!mysqli_query($connection, $sql_table)) {
    echo "Error creating table: " . mysqli_error($connection);
} 

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
						<input type="radio" name="user" value="Katka" id="katka">
						<label for="juraj">Juraj</label>
						<input type="radio" name="user" value="Juraj" id="juraj"><br>
					</div>
					<div class="form_field">
						<span class="label">Kategória</span><br>
						<select name="category">
						<option>Práca</option>
						<option>Osobné</option>
						</select><br>
					</div>
					<div class="form_field">
						  <span class="label">Priorita</span><br>
						  <select name="priority">
							<option>Nízka</option>
							<option>Stredná</option>
							<option>Vysoká</option>
						  </select><br>
					</div>
					<p>&nbsp;</p>
					<div class="textarea">
						<div class="label">Text pripomienky</div>
						<textarea type="text" name="text">
						</textarea>
					</div>

					<button type="submit" name="submit">Uložiť</button>
					
					
					
				</fieldset>
			</form>
			<p>* = povinné údaje</p>
		</div>
	</body>
</html>