<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            margin: 0;
            display: grid;
            grid-template-columns: 1fr 1fr 1fr 1fr;
            background: linear-gradient(#905E96, #D58BDD, #FF99D7, #FFD372);
        }
        img {
            width: 100%;
            box-sizing: border-box;
            float: left;
            padding: 0.5em;
            border-radius: 25px;
        }
    </style>
</head>
<body>
    <?php
    $pic = array(
        "https://images.wallpaperscraft.com/image/single/girl_umbrella_rain_151317_300x300.jpg",
        "https://images.wallpaperscraft.com/image/single/boy_headphones_music_209627_300x300.jpg",
        "https://i.pinimg.com/564x/a8/e3/9b/a8e39b287c7cd7af410dc230c36c226f.jpg",
        "https://apkloyal.com/wp-content/uploads/2020/09/anime-wallpaper-series-download-anime-wallpaper.png",
        "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQlei5WoTGyHFovzkSe9he8hmJbFlWIxubwkA&usqp=CAU",
        "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSpGVHfR9pddDJFamSDUoqSRu39DZv8s2Pm0g&usqp=CAU",
        "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSolM5RdDJQWJgqFeaPPLKhmTLThjxWrJOJsQ&usqp=CAU",
        "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRfyvNOOE4mUOq5295UBgQSH_dWJn91VuXDvw&usqp=CAU",
        "https://images.wallpaperscraft.com/image/single/girl_umbrella_rain_213983_300x300.jpg",
        "https://i.pinimg.com/474x/5b/64/f4/5b64f45a6a09cdb8318dfc75697d1c32.jpg",
        "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT2vlfqq1XpXbFS0EYvjxm4ZV5rl9aNy1mypQ&usqp=CAU",
        "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT2qURDsgnvUlAd5E_pmzD1D8G_KvBtUto0bg&usqp=CAU",
        "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTJMloYpVJBX8wWx50sIhKvS_F647LswIvXUQ&usqp=CAU",
        "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ3a-Ni0qHDKofNXysvazUMW8HgXf8ua-XPWA&usqp=CAU",
        "https://images.wallpaperscraft.com/image/single/girl_dj_headphones_232710_300x300.jpg",
        "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSjqHUGUFMtdlJBln2OZBx6cR0T62Qr1UPZvA&usqp=CAU",
        "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSp7JWwz-tE7knsf0tbyHiM6bVNfWC7Wwk6oA&usqp=CAU",
        "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQhtphJu4Qj2-BCfNuurHQRcsZ7WAlcC9Zd9g&usqp=CAU",
        "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQdt4353cChe45IY1QHG6mP06IMy3D5HP_GZQ&usqp=CAU",
        "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTZr1Db0HLL6Hpu99SNgCAQ7aWsCw9BfgOnzQ&usqp=CAU",
    );

    for ($i = 0; $i < sizeof($pic); $i++) {
        echo "<img src='".$pic[$i]."'>"; 
    } 
    ?> 
</body>
</html>
