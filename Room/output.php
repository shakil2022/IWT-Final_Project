 <!DOCTYPE html> 
<html> 
	<head> 
    
		<title> Fetch Data From Database </title> 
    
    <style>
      body{
        background-image: url(../images/img2.jpg);
        background-size: cover;
        background-repeat: no-repeat;
      }
      .tdr{
        text-align:center;
      }
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

      </style>
	</head> 
  
	<body > 
	<table align="center" border="1px" style="width:1000px; line-height:40px;"> 
	<tr> 
		<th colspan="4"><h2>Room</h2></th> 
		</tr> 
			  <th> Room Number </th> 
			  <th> Number of Table </th> 
			  <th> Number of bed </th> 
			  <th> Floor Number </th> 
      
			  
		</tr> 
		<?php 
    include 'connection.php';
    $sql = "select * from room ";
    $query = mysqli_query($conn, $sql);
     while($row1=mysqli_fetch_array($query)) 
		{ 
		?> 
		<tr> <td class="tdr"><?php echo $row1['Room_Number']; ?></td> 
		<td class="tdr"><?php echo $row1['Num_of_Table']; ?></td> 
		<td class="tdr"><?php echo $row1['Num_of_Bed']; ?></td> 
		<td class="tdr"><?php echo $row1['Floor_Number']; ?></td> 
    <!-- <td style="width: 140px;">
    <button><a href="Delete.php?Room_Number=<?php echo $row1["Room_Number"]; ?>">Delete</a></button>
    <button><a href="Update.php?Room_Number=<?php echo $row1["Room_Number"]; ?>">Update</a></button>

                            </td> -->
		</tr> 
	<?php 
               } 
          ?> 

	</table>
   <!-- <a  href="#"><h3 btn style="font-family: sans-serif;  text-align:center; font-size:30px; font-color:green;" >Insert</h3> -->
<!-- <button class="btn btn-primary btn-lg center"> <a href="#"></a> INSERT</button> -->

<center>
  
 <button class="button" > <a href="index.html" style="text-decoration: none;">Search</a> </button>
 <button class="button" > <a href="../home.php" style="text-decoration: none;">Home Page</a> </button>
              </center>
</body> 
	</html>