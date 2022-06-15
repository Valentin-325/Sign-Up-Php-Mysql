<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIGN UP</title>
    <!-- CSS -->
    <link href="./css/style.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@300&display=swap" rel="stylesheet">
</head>
<body>
    <div class="main">

        <div class="title">
            <h1>SIGN UP</h1>
        </div>

        <form action="send-data/signup.info.php" method="post"> 

            <label for="username">Username</label>
            <input type="text" id="username" name="username" required>

            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="example@yahoo.com" required>

            <label for="password">Password</label>
            <input type="password" id="password" name="password" required><br>


            <button type="submit" name="submit" class="submit">SIGN UP</button><br>
        </form>
        
        <?php
    
            if(isset($_GET["error"])) {
                if($_GET["error"] == "usernametaken") {
                    echo "<p id='alert'>Username is taken!</p>";
                }
                else if($_GET["error"] == "none") {
                    echo "<p id='alert'>You are signed up!</p>";
                }
            }
        ?>
    </div>


</body>
</html>