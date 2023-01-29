<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Alkalami&display=swap');
        body {
            font-family: 'Alkalami', serif;
        }
        
        table,
        th,
        td {
            border: 1.2px solid black;
        }
        
        th,
        td {
            height: 50px;
            width: 40px;
            text-align: center;
        }
    </style>
</head>

<body>
    <?php
    echo "<table>
    <tr>
        <th>Su</th>
        <th>Mo</th>
        <th>Tu</th>
        <th>We</th>
        <th>Th</th>
        <th>Fr</th>
        <th>Sa</th>
    </tr>";
    $number = 1;
    for ($i=-3; $i<32; $i++){
        if($number == 1){
            echo "<tr>";
        }
        if($i<1 || $i>30){
            echo "<td></td>";
        }
        else{
            echo "<td>".$i."</td>";
        }
        if($number == 7){
            echo "</tr>";
            $number = 0;
        }
        $number++;
    }
    ?>
</body>

</html>
