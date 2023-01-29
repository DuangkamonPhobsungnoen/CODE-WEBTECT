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
         $this->open('customers.db');
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
   $sql = "SELECT * FROM customers";
   $ret = $db->query($sql);
   $id = 0;
   echo "<table class='table'><thead><tr><th>ID</th><th>Name</th><th>Address</th><th>Phone</th><th>Email</th></tr></thead>";
   while ($row = $ret->fetchArray(SQLITE3_ASSOC)) {
      echo " <tbody><td>" .$row['CustomerId'] ."</td> ";
      echo " <td>" .$row['FirstName'] ." ".$row['LastName'] . "</td> ";
      echo " <td>" .$row['Address'] ."</td> ";
      echo " <td>" .$row['Phone'] ."</td> ";
      echo " <td>" .$row['Email'] ."</td> ";
      $id = $row['CustomerId'];
   }
   
   'delete from customers order by $id desc limit 1';

   // Close database
   $db->close();

   ?>
</body>

</html>
