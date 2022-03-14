 <!DOCTYPE html> 
<html> 
	<head> 
    
		<title> Fetch Data From Database </title> 
    
    <style>
      .tdr{
        text-align:center;
      }
      body{
        background-image: url(../images/sea.jpg);
      background-repeat: no-repeat;
      background-size: cover;
      }
      .button {
  background-color: #4CAF50; 
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
.table1{
  margin-top: 70px;
}

      </style>
	</head> 
  
	<body > 
	<table align="center"class="table1" border="3px solid black" style="width:1000px; line-height:40px;"> 
	<tr> 
		<th colspan="8"><h2>Provost Record</h2></th> 
		</tr> 
			  <th> Provost ID </th> 
        <th>Phone </th>
			  <th> Name </th> 
        <th> Address </th> 
			  <th> Email </th> 
			  <th> Designation</th> 	
        <th> Operations</th> 		  
		</tr> 
   
		<?php 
    include 'connection.php';
    $sql = "select * from Provost ";
    $query = mysqli_query($conn, $sql);
     while($row1=mysqli_fetch_array($query)) 
		{ 
		?> 
		<tr> <td class="tdr"><?php echo $row1['P_ID']; ?></td> 
		<td class="tdr"><?php echo $row1['Phone']; ?></td> 
		<td class="tdr"><?php echo $row1['Name']; ?></td> 
		<td class="tdr"><?php echo $row1['Address']; ?></td> 
    <td class="tdr"><?php echo $row1['Email']; ?></td>
    <td class="tdr"><?php echo $row1['Designation']; ?></td>
    <td style="width: 140px;">
    <button class="btn btn-danger"><a href="Delete.php?P_ID=<?php echo $row1["P_ID"]; ?>">Delete</a></button>
                            </td>
		</tr> 
	<?php 
               } 
          ?> 

	</table>
   <!-- <a  href="#"><h3 btn style="font-family: sans-serif;  text-align:center; font-size:30px; font-color:green;" >Insert</h3> -->
<!-- <button class="btn btn-primary btn-lg center"> <a href="#"></a> INSERT</button> -->

<center>
 <button class="button" > <a href="provost.html" style="text-decoration: none;">INSERT</a> </button> 
 <button class="button" > <a href="../dashboard/home.php" style="text-decoration: none;">Home Page</a> </button>
              </center> 
</body> 
	</html>