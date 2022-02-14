<?php
session_start();
?>

<html>
<head>
    <meta charset="utf-8">
    <title>Coolest website of them all</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Helvetica;
            font-size: 20px;
        }

        button {
            background-color: purple;
            color: white;
            height: 50px;
            font-size: 20px;
            border-radius: 50px;
            border: 0;
            padding: 5px 25px;
            width: 25%;
            margin-right: auto;
            margin-left: auto;
        }

        button:hover {
            cursor: pointer;
            transform: scale(1.05);
            animation: 0.5s ease;
        }

        h1, h2 {
            text-align: center;
        }

        ul {
            list-style: none;
        }

        nav {
            display: flex;
            justify-content: flex-end;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        input {
            width: 100%;
            max-width: 50%;
            margin-right: auto;
            margin-left: auto;
            font-size: 20px;
            padding: 5px 10px;
            margin-top: 15px;
            border-radius: 10px;
        }

        .container {
            max-width: 720px;
            margin-left: auto;
            margin-right: auto;
        }

        .form-header {
            max-width: 50%;
            margin-left: auto;
            margin-right: auto;
        }

        .background-square {
            padding: 25px;
            background-color: lightgray;
            border-radius: 35px;
        }

    </style>
</head>

<body>
<nav>
    <ul>
        <?php
        if (isset($_SESSION['userid'])) {
            ?>
            <li><a href="#">Welcome, <?php echo $_SESSION['useruid']; ?></a></li>
            <li><a href="includes/logout.inc.php">LOGOUT</a></li>
                <?php echo "Hello, hello. You logged in! ";
        } else {
            ?>
            <li><a href="#">SIGN UP</a></li>
            <li><a href="#">LOGIN</a></li>
            <?php

        }
        ?>
    </ul>
</nav>

<?php if (isset($_SESSION['userid']) == false) { ?>
    <section class="container">
        <div class="background-square">
            <div class="form-header">
                <h4>SIGN UP</h4>
                <p> Don't have account yet? Sign up here!</p>
            </div>
            <form action="includes/signup.inc.php" method="post">
                <input type="text" name="uid" placeholder="Username">
                <input type="password" name="pwd" placeholder="Password">
                <input type="password" name="pwdRepeat" placeholder="Repeat password">
                <input type="text" name="email" placeholder="E-mail">
                <br>
                <button type="submit" name="submit">SIGN UP</button>
            </form>
            <div>
                <div class="form-header">
                    <h4>LOGIN</h4>
                    <p> Don't have account yet? Sign up here!</p>
                </div>
                <form action="includes/login.inc.php" method="post">
                    <input type="text" name="uid" placeholder="Username">
                    <input type="password" name="pwd" placeholder="Password">
                    <br>
                    <button type="submit" name="submit">LOGIN</button>
                </form>

    </section>
    </div>
<?php } ?>
</body>
</html>
