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
        @import url('https://fonts.googleapis.com/css2?family=Mitr:wght@300&display=swap');
        body {
            padding: 1%;
            font-family: 'Mitr', sans-serif;
            background: linear-gradient(#E38B29, #E3C770, #FECD70, #F3E0B5);
        }

        td {
            background: #fff;
        }

        th {
             background: #FFD8A9;
        }

        label {
            display: inline-block;
            margin-bottom: 25px;
        }
        input {
            background: #FFD8A9;
        }

        textarea {
            background: #FFD8A9;
        }
    </style>
</head>

<body>
    <h1>Employee From</h1>
    <form method="post">
        <label>ID : </label>
        <input name="ID" id="ID" size="5px"> <br>
        <label>Name : </label>
        <input type="text" name="Name" id="Name" size="40px"><br>
        <label>Age : </label>
        <input type="text" name="Age" id="Age" size="3px"> <br>
        <label>Salary : </label>
        <input type="text" name="Salary" id="Salary" size="8px"> <br>
        <label>Address : </label>
        <textarea id="Address" name="Address" rows="4"></textarea> <br>
        <button type="submit" name="submit" class="btn btn-primary mb-2">Submit</button>
    </form>
    <br>
    <?php
    class MyDB extends SQLite3
    {
        function __construct()
        {
            $this->open('AddMember.db');
        }
    }

    // Open Database 
    $db = new MyDB();
    if (!$db) {
        echo $db->lastErrorMsg();
    }

    // Insert
    // SQL SELECT 

    if (isset($_POST['submit'])) {
        //user input
        $ID = $_POST['ID'];
        $Name = $_POST['Name'];
        $Age = $_POST['Age'];
        $Salary = $_POST['Salary'];
        $Address = $_POST['Address'];
        //insert table
        $sql = <<<EOF
        INSERT INTO Employee (ID, Name, Age, Salary, Address)
        VALUES ($ID, '$Name', $Age, $Salary, '$Address');

        EOF;
        $ret = $db->exec($sql);
    }
    // Query process 
    $sql = "SELECT * FROM Employee";
    $ret = $db->query($sql);
    echo "<h1>List of Employees</h1>";
    echo "<table class='table'><thead><tr><th>ID</th><th>Name</th><th>Age</th><th>Address</th><th>Salary</th></tr></thead>";
    while ($row = $ret->fetchArray(SQLITE3_ASSOC)) {
        echo " <tbody><td>" . $row['ID'] . "</td> ";
        echo " <td>" . $row['Name'] . "</td> ";
        echo " <td>" . $row['Age'] . "</td> ";
        echo " <td>" . $row['Address'] . "</td> ";
        echo " <td>" . $row['Salary'] . "</td> ";
    }

    // Close database
    $db->close();

    ?>
</body>

</html>
