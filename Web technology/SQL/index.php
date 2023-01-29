<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</head>

<body>
   <?php
   // Connect to Database 
   class MyDB extends SQLite3
   {
      function __construct()
      {
         $this->open('NewRelease.db');
      }
   }

   // Open Database 
   $db = new MyDB();
   if (!$db) {
      echo $db->lastErrorMsg();
   } else {
      echo "";
   }

   // Query process 
   $sql = "SELECT * FROM NewRelease";
   $ret = $db->query($sql);
   $id = 0;
   echo "<table class='table'><thead><tr><th>BookTitle</th><th>Writer</th><th>Content</th><th>Img</th></tr></thead>";
   while ($row = $ret->fetchArray(SQLITE3_ASSOC)) {
      echo " <tbody><td>" .$row['BookTitle'] ."</td> ";
      echo " <td>" .$row['Writer'] . "</td> ";
      echo " <td>" .$row['Content'] ."</td> ";
      echo " <td><img src='" .$row['Img'] ."' height='150' width='280'></td> ";

   }

   // Close database
   $db->close();
   ?>
</body>

</html>
