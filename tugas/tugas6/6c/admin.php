<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 50vh;
            width: 50%;
            color: black;
            margin: auto;
        }
        .content {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            gap: 10px;
            text-align: center;
            background-color: #ded0c1;
            width: 60%;
            height: 60%;
            font-size: 1rem;
            font-family: "Lucida" Grande, sans-serif;
            border-radius: 50px;
        }
        button {
            font-size: 1rem;
            background-color: lightgrey;
            border-radius: 50px;
            padding: 5px;
            border: 2px solid black;
            width: 100px;
            cursor: pointer;
        }
        a {
            text-decoration: none;
            color: black;
        }  

    </style>
</head>
<body>
    <div class="container">
        <div class="content">
            <h2>Selamat datang Admin</h2>        
            <button><a href="login.php">Logout</a></button>
        </div>
    </div>
</body>
</html>