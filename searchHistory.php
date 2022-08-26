<?php 
$mysqli=new mysqli('localhost', 'root','','universities');
$sqlget="SELECT * FROM universitie";
$sqldata=mysqli_query($mysqli,$sqlget);




  while($row=mysqli_fetch_array($sqldata,MYSQLI_ASSOC)){
echo $row['country']."--".$row['name']."<br></br>?";

}?>