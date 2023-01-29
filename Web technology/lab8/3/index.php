<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
    <style>
        body {
            background: linear-gradient(#7895B2, #AEBDCA, #E8DFCA, #F5EFE6);
        }
        .value{
            display: block;
            text-overflow: ellipsis;
            overflow: hidden;
            max-height: 6em;
            line-height: 1.5em;
        }
    </style>
</head>
<body class="d-flex">
    <?php
    session_start();
    $url = "https://www.themealdb.com/api/json/v1/1/random.php";
    $response = file_get_contents($url); 
    $result = json_decode($response); 
    foreach ($result->meals as $food){
        $name = $food->strMeal;
        $desc = $food->strInstructions;
        $pict = $food->strMealThumb;
        $site = $food->strSource;
    }
        echo "
    <div class='card mx-auto my-auto' style='width: 400px; height: fit-content;'>
        <img class='card-img-top'src='$pict'alt=''>
        <div class='card-body'>
            <div class='card-title text-center font-weight-bold'>$name</div><hr>
            <p class='text-center value text-muted'>$desc...</p>
        </div>
        <div class='d-flex justify-content-center mb-3'>
            <button type='button' class='btn btn-light mx-2' style='width: fit-content;' onClick='window.location.reload();'><i class='fa fa-refresh'></i></button>
            <a href='$site' target='_blank'>
                <button class='btn btn-dark mx-2'style='width: fit-content;' type='submit'>Learn more</button>
            </a>
        </div>
    </div>
        ";

    ?>

        

</body>
</html>
