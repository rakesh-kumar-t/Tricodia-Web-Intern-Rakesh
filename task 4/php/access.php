<?php 

$user="root";
$password="";
$server="localhost";
$database="accessDB";
$sql = "CREATE DATABASE $database";
$fname=$_POST["fname"];
$email=$_POST["email"];
$country=$_POST["country"];
$Abilities=$_POST["otherabilities"];


//connecting to mysql database server
$db_handle=mysqli_connect($server,$user,$password);
mysqli_query($db_handle,'DROP DATABASE accessDB');

	if(!$db_handle)
	{
		die(mysql_error());

	}
	

	// Create database


	
	if ($db_handle->query($sql) === TRUE) 
	{
    
	} else 
	{
    echo  $db_handle->error;
	}
	
$db_handle->close();
$db_handle=mysqli_connect($server,$user,$password,$database);
	



// sql to create table
$tdrp="DROP TABLE Mytable";
mysqli_query($db_handle,$tdrp);
$sqlt = "CREATE TABLE Mytable (
firstname VARCHAR(40) NOT NULL,
email VARCHAR(50) NOT NULL,
country VARCHAR(30) NOT NULL,
Abilities VARCHAR(50) NOT NULL)";

if ($db_handle->query($sqlt) === TRUE) {
    
} else {
    echo  $db_handle->error;
}

$sqli = "INSERT INTO Mytable (firstname, email, country, Abilities)
VALUES ('$fname', '$email', '$country', '$Abilities')";

if ($db_handle->query($sqli) === TRUE) {
    
} else {
    echo "Error: " . $sqli . "<br>" . $db_handle->error;
}


$sqls = "SELECT firstname, email, country, Abilities FROM Mytable";
$result = $db_handle->query($sqls);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<html>
              <head>
              <meta http-equiv='Content-Type' content='text/html; charset=UTF-8'>
              <link rel='stylesheet' href='css/bootstrap_1.css'>
              <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
              <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
              <link rel='stylesheet' href='index.css'>
              <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>
              <link rel='stylesheet' type='text/css' href='css/formstyle.css'>
              <link rel='shortcut icon' href='images/Avengers-logo.ico' type='image/ico' />
              <meta name='viewport' content='width=device-width, initial-scale=1' />

              <title>Output</title>
              <link rel='stylesheet' type='text/css' href='css/formstyle.css'>
              </head>
              <body style='background: linear-gradient(to right, #0097A7,#006064);' align=center>
              <div id=formhead align=center>
              <h1>PHP TEST RUN OUTPUT</h1>
              <hr color=white>
              
              <section align=center class='well well-sm'>
                <div align=left id=form>
                <font size=2><br>
                  <div align=center id=inhead>
                  <font  color='#424242'>Entered details</font>
                  </div><hr color=red>
                  <b>
                  <font size=3>

                    Full Name : " . $row["firstname"]. " <br><br>Email : " . $row["email"]. "<br><br>Country : " . $row["country"]. "<br><br>Abilities : " . $row["Abilities"]. "<br><br>
              <div>
              </section>
              </body></html>";
    }
} else {
    echo "0 results";
}




$db_handle->close();

 ?>
