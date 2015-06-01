<?php
Header("Expires: ".GMDate("D, d M Y H:i:s")."GMT");
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "reminders";

$connection = mysqli_connect($servername, $username, $password, $dbname);

$sql_show = "SELECT * FROM our_reminders ORDER BY Date DESC";
$results = mysqli_query($connection, $sql_show);

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}
/*
if(!$results){
	die ("Chyba v načítaní výsledkov: ".mysqli_error($connection));
}*/
 

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
			<?php
			if ($results){
				if (mysqli_num_rows($results) > 0) {
					echo "<h3>Nezabudnúť...</h3>";
					echo "<p><a href=index.php>Zadanie novej pripomienky</a></p>";
					echo "<table border=1 cellpadding=5 cellspacing=0 align=center width=650> ";
						echo "<tr>";
						echo "<th>Užívateľ</th>";
						echo "<th>Kategória</th>";
						echo "<th>Pripomienka</th>";
						echo "<th>Priorita</th>";
						echo "<th>Čas</th>";
						echo "</tr>";
					
					while($row = mysqli_fetch_assoc($results)){
						echo "<tr>";
						echo"<td>".$row["User"]."</td>";
						echo"<td>".$row["Category"]."</td>";
						echo"<td>".$row["Text"]."</td>";
						echo"<td>".$row["Priority"]."</td>";
						echo"<td>".$row["Date"]."</td>";
						echo"</tr>";
						}
					echo "</table>"	;
				}
			} else {
				echo "<h3>ToDo list je prázdny</h3>";
			}
			
			?>
			
		</div>
	</body>
</html>