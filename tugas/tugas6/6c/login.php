<?php 
if ( isset($_POST["submit"]) ) {
    if ($_POST["username"] == "apaya" && $_POST["password"] == "2020") {
        header("Location: admin.php");
        exit;
    } else {
        $error = true;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
            height: 65vh;
            width: 65vh;
            color: black;
            margin: auto;
        }
        .content {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            margin: auto;
            background-color: #ded0c1;
            width: 80%;
            height: 80%;
            font-size: 1rem;
            font-family: "Lucida" Grande, sans-serif;
            border-radius: 50px;
        }
        h2 {
            color: black;
        }
        input {
            margin-top: 10px;
            border: 1px solid black;
            width: 220px;
            height: 25px;
            border-radius: 50px;
        }
        button {
            margin: 0 auto;
            margin-top: 15px;
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
            background-color: lightgrey;
            border-radius: 5px;
            padding: 5px;
            border: 2px solid black;
        }
        p {
            color: black;
        }
        .profile {
            border-radius: 50%;
            width: 150px;
            height: 150px;
            background-image: url(img/pict.jpg);
            background-size: cover;
            background-position: center;
            border: 1px solid white;
        }
    </style>
</head>
<body>
    
    <div class="container">
        <div class="content">
        <div class="profile"></div>
                <h2><i>Login Admin</i></h2>
            <?php if (isset($error)) : ?>
                <p style="color: red; font-style: italic;">username / password salah!</p></h4>
            <?php endif; ?>
            <form action="" method="post">
                <label for="username">Username :</label>
                <input type="text" name="username" id="username">
                <br>
                <label for="password">Password :</label>
                <input type="password" name="password" id="password">
                <br>
                <button type="submit" name="submit">Login</button>
            </form>
        </div>
    </div>
</body>
</html>