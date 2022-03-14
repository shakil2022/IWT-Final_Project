<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
         .button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 10px 25px;
  text-align: center;
  margin-top: 60px;
  border-radius: 5px;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
}
#update{
  background-color: blue;
  color: black;
  border-radius: 9px 9px;
}
    </style>
</head>
<body>
<?php
	$Stu_ID = $_POST['Stu_ID'];
	$Name = $_POST['Name'];
	$Room_Num = $_POST['Room_Num'];
	$Messages = $_POST['Messages'];

	// Database connection
	$conn = new mysqli('localhost','root','','final_dbms');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into message_table(Stu_ID, Name, Room_Num, Messages) values(?, ?, ?, ?)");
		$stmt->bind_param("ssss",$Stu_ID, $Name, $Room_Num, $Messages);
		$execval = $stmt->execute();
		echo $execval;
		// echo "Inserted successfully...";
		// echo('DispStudent.php')
        echo "Your Problem has been recorder.....";
		// include "../home.php";
        // echo('/home.php');
        // include '../home.php';
		$stmt->close();
		$conn->close();
	}
?>
<center>
 <button class="button" id="update"> <a href="../home.php" style="text-decoration: none;">Home Page</a> </button> 
              </center>
</body>
</html>
