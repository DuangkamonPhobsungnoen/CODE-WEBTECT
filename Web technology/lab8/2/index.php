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
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Kanit&display=swap');

        body {
            margin: 0;
            font-family: 'Kanit', sans-serif;
        }
    </style>
</head>

<body>
    <?php

    $url = "https://covid19.ddc.moph.go.th/api/Cases/timeline-cases-by-provinces";
    $response = file_get_contents($url);
    $result = json_decode($response);
    $number = rand(1, 30);
    $count = 0;
    echo "<table class='table'><thead><tr><th>ลำดับ</th><th>จังหวัด</th><th>ผู้ติดเชื้อ</th><th>เสียชีวิต</th><th>ยอดผู้ป่วยสะสม</th></tr></thead>";
    foreach ($result as $case) {
        $date = $case->txn_date;
        if ($number < 10) {
            if ($date == "2022-09-0$number") {
                $count++;
                echo " <tbody><td>$count</td> ";
                echo " <td>$case->province</td> ";
                echo " <td>$case->new_case</td> ";
                echo " <td>$case->total_death</td> ";
                echo " <td>$case->total_case</td></tbody>";
            }
        } else if ($date == "2022-09-$number") {
            $count++;
            echo " <tbody><td>$count</td> ";
            echo " <td>$case->province</td> ";
            echo " <td>$case->new_case</td> ";
            echo " <td>$case->total_death</td> ";
            echo " <td>$case->total_case</td></tbody>";
        }
    }
    echo "</table>";

    ?>
</body>

</html>
