<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $res = 0;
        if(isset($_POST['submit'])) 
        { 
         $from = $_POST['from'];      
         $to = $_POST['to'];
         $in = $_POST['in'];
         $url = "http://10.0.15.20/lab8/restapis/currencyrate";
         $response = file_get_contents($url); 
         $result = json_decode($response); 
         $res = $in/$result->rates->$from*$result->rates->$to;
         } 
    ?>
    <h2>Currency Converter</h2>
    <form action="" method="POST">
        <label for="from">From :</label>
        <select name="from" id="from">
            <option value="THB">THB</option>
            <option value="JYP">JYP</option>
            <option value="CNY">CNY</option>
            <option value="SGD">SGD</option>
            <option value="USD">USD</option>
        </select>
        <input type="number" id="in" name="in"><br><br>

        <label for="from">To :</label>
        <select name="to" id="to">
            <option value="THB">THB</option>
            <option value="JYP">JYP</option>
            <option value="CNY">CNY</option>
            <option value="SGD">SGD</option>
            <option value="USD">USD</option>
        </select>
        <input type="number" id="out" name="out" value=<?php echo "$res";?>>
        <br><br>
        <button type="submit" name="submit">Convert</button>
    </form>


</body>

</html>
