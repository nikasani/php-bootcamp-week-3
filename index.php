<!DOCTYPE html>
<html>
<head>
  <title>universities</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/main.css">
<meta http-equiv="X-UA-Compatible" content="ie=edge" />
<script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-black">
  

    <p class="text-3xl text-white">Enter country and search all universities in that country</p>
    <br></br>
    <form method="POST" action="results.php"> 
    <input type="text" class="rounded-md w-52 shadow-sm self-center" name="country" placeholder="enter country" required/>
  <button type="submit" class="bg-white rounded-r-lg rounded-l-lg"name="submit">submit</button>
</form>

<br></br>
<p class="text-3xl text-white">if you want your searched history click down</p>
<a href="searchHistory.php" class="bg-white rounded-r-lg rounded-l-lg">search history</a>

  




</body>
</html>