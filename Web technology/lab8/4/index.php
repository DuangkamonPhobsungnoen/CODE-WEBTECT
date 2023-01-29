<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap');

        body {
            font-family: 'Poppins', sans-serif;
            margin: 2%;
            font-size: 20px;
            width: 30%;
        }

        img {
            display: flex;
            margin: 22em;
            margin-top: -50%;
            margin-bottom: 25%;
        }
    </style>
</head>

<body>
    <?php
    $url = "http://10.0.15.20/lab8/restapis/10countries";
    $response = file_get_contents($url);
    $result = json_decode($response);
  
    foreach ($result as $country) {
        echo "Name : <a style='font-weight:bold;'>$country->name</a><br>";
        echo "Capita : $country->capital<br>";
        echo "Population : $country->population<br>";
        echo "Region : $country->region<br>";
        echo "Location : ";
        foreach ($country->latlng as $latlngs) {
            echo "$latlngs ";
        }
        echo "<br>";
        echo "Borders : ";
        foreach ($country->borders as $border) {
            echo "$border ";
        }
        echo "<br>";
        echo "<img src='$country->flag' width='250px'";
        echo "<br>";
    }
    ?>
</body>

</html>
