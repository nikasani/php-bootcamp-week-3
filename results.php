<?php 
if(isset($_POST['submit'])){
  
  $fcountry=$_POST['country'];
$mysqli=new mysqli('localhost', 'root','','universities');
$sqlget="SELECT * FROM universitie WHERE country='$fcountry'";
$sqldata=mysqli_query($mysqli,$sqlget);




  while($row=mysqli_fetch_array($sqldata,MYSQLI_ASSOC)){
echo $row['country']."--".$row['name']."<br></br>?";

}
$count = mysqli_num_rows($sqldata);

if($count>0){
    die();
    exit();
}else{



 

      $init=curl_init("http://universities.hipolabs.com/search?country=$fcountry");
curl_setopt($init,CURLOPT_RETURNTRANSFER, true);
////////////////////////////////////////////////////////return info


//echo $_SERVER['HTTP_USER_AGENT'] . "\n\n";
$browser = get_browser(null, true);

curl_setopt($init, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36 ");

$IFDT=json_decode(curl_exec($init),true); /* */
//
$ex=curl_exec($init);//
//curl_exec($init);
curl_close($init);

file_put_contents('userdata.json',$ex);
//write a string into file

if($mysqli->connect_errno !=0){
  echo $mysqli->connect_error;
}
$json_data=file_get_contents("userdata.json");
$products=json_decode($json_data,JSON_OBJECT_AS_ARRAY);
$stmt=$mysqli->prepare("
INSERT INTO universitie(country,name)
VALUES(?,?)
");
$stmt->bind_param("ss", $country, $name);

$inserted_rows=0;
foreach($products as $product){
 
  $country=$product["country"];
  $name=$product["name"];

  $stmt->execute();

  $inserted_rows ++;
}
$sqlget="SELECT * FROM universitie WHERE country='$fcountry'";
$sqldata=mysqli_query($mysqli,$sqlget);
$num_rows = mysqli_num_rows($sqldata);



  while($row=mysqli_fetch_array($sqldata,MYSQLI_ASSOC)){
echo $row['country']."--".$row['name']."<br></br>?";

}
}





}
?>