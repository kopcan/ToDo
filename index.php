<?php
<<<<<<< HEAD
Header("Expires: ".GMDate("D, d M Y H:i:s")."GMT");
=======
>>>>>>> c162c60587e292c79780c33626956ea01cc27058
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
<<<<<<< HEAD
)";


=======
) default charset=utf8";
>>>>>>> c162c60587e292c79780c33626956ea01cc27058

$sql_insert = "INSERT INTO our_reminders (User, Category, Priority, Text) 
VALUES ('$user', '$category', '$priority', '$text')";



$connection = mysqli_connect($servername, $username, $password);
<<<<<<< HEAD
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
=======
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

>>>>>>> c162c60587e292c79780c33626956ea01cc27058
if (!mysqli_query($connection, $sql_insert)){
	echo "Error inserting data: " . mysqli_error($connection);
}
*/

<<<<<<< HEAD

=======
>>>>>>> c162c60587e292c79780c33626956ea01cc27058
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
<<<<<<< HEAD

			
			
			
=======
>>>>>>> c162c60587e292c79780c33626956ea01cc27058
			<form method="post">
				<fieldset>
					<div class="form_field">
						<span class="label">Užívateľ</span><br>
						<label for="katka">Katka</label>
<<<<<<< HEAD
						<input type="radio" name="user" value="Katka" id="katka" <?php echo $user == "Katka" ? "checked" : "" ?>>
						<label for="juraj">Juraj</label>
						<input type="radio" name="user" value="Juraj" id="juraj" <?php echo $user == "Juraj" ? "checked" : "" ?>><br>
=======
						<input type="radio" name="user" value="Katka" id="katka">
						<label for="juraj">Juraj</label>
						<input type="radio" name="user" value="Juraj" id="juraj"><br>
>>>>>>> c162c60587e292c79780c33626956ea01cc27058
					</div>
					<div class="form_field">
						<span class="label">Kategória</span><br>
						<select name="category">
<<<<<<< HEAD
						<option value="" <?php echo $category == "" ? "selected" : "" ;?>></option>
						<option value="Práca" <?php echo $category == "Práca" ? "selected" : "" ?>>Práca</option>
						<option value="Osobné" <?php echo $category == "Osobné" ? "selected" : "" ?>>Osobné</option>
=======
						<option>Práca</option>
						<option>Osobné</option>
>>>>>>> c162c60587e292c79780c33626956ea01cc27058
						</select><br>
					</div>
					<div class="form_field">
						  <span class="label">Priorita</span><br>
						  <select name="priority">
<<<<<<< HEAD
						  <option value ="" <?php echo $priority == "" ? "selected" : "" ?>></option>
							<option value="Nízka" <?php echo $priority == "Nízka" ? "selected" : "" ?>>Nízka</option>
							<option value = "Stredná" <?php echo $priority == "Stredná" ? "selected" : "" ?>>Stredná</option>
							<option value="Vysoká" <?php echo $priority == "Vysoká" ? "selected" : "" ?>>Vysoká</option>
=======
							<option>Nízka</option>
							<option>Stredná</option>
							<option>Vysoká</option>
>>>>>>> c162c60587e292c79780c33626956ea01cc27058
						  </select><br>
					</div>
					<p>&nbsp;</p>
					<div class="textarea">
						<div class="label">Text pripomienky</div>
						<textarea type="text" name="text">
<<<<<<< HEAD
						<?php echo $text ?>
=======
>>>>>>> c162c60587e292c79780c33626956ea01cc27058
						</textarea>
					</div>

					<button type="submit" name="submit">Uložiť</button>
					
					
					
				</fieldset>
			</form>
<<<<<<< HEAD
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
=======
>>>>>>> c162c60587e292c79780c33626956ea01cc27058
			<p>* = povinné údaje</p>
		</div>
	</body>
</html>