<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Kanit&display=swap');
    h6 {
        font-family: 'Kanit', sans-serif;
        color: red;
        font-weight: bold;
        display: inline
    }
    </style>
</head>

<body>
    <?php
        $name = $_POST['Name']; //รับค่า $_POST['id'];
        $add = $_POST['Address']; 
        $age = $_POST['Age']; 
        $pro = $_POST['Profession']; 
        $re = $_POST['re']; 
        echo "Name : "; 
        if(strlen($name)<5)
            echo "<h6>***ให้ใส่ค่าที่กรอกไว้ใน FORM ด้วย ***</h6><br>";
        else
            echo "$name <br>";

        echo "Address : "; 
        if(strlen($add)<5)
            echo "<h6>***ให้ใส่ค่าที่กรอกไว้ใน FORM ด้วย ***</h6><br>";
        else
            echo "$add <br>";

        echo "Age : ";
        if(strlen($age)<5)
            echo "<h6>***ให้ใส่ค่าที่กรอกไว้ใน FORM ด้วย ***</h6><br>";
        else
            echo "$age <br>"; 

        echo "Profession : ";
        if(strlen($pro)<5)
            echo "<h6>***ให้ใส่ค่าที่กรอกไว้ใน FORM ด้วย ***</h6><br>";
        else
            echo "$pro <br>"; 

        echo "Residential status : $re";
    ?>

</body>

</html>
