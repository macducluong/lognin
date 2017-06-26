<?php
session_start();
?>
<html>
<head>
    <title></title>
        <link <link rel="stylesheet" href="css.html" />
</head>
    <body>

            <div CLASS="logo">ESHOP</div>
            <div class="sing-in">
                <div class="content">
                    <h1>Sign in</h1>
                    <form class="size-input" method="POST" action="<?php echo htmlspecialchars ($_SERVER['PHP_SELF'])?>">
                        email
                        <input class="email" type="email" name='email'><br>
                        password
                        <input class="password" type="password" name='password'><br>
                        <input type="submit" name="" value="Sign in" class="submit"><br>
                        <input type="checkbox" name="checkbox" value="">keep me sign in<br>
                        <p>New to Web</p>
                        <input type="submit" formmethod="post" formaction="create.php" value="Create your Web account" class="button">
                    </form>
                </div>
            </div>
            <?php
            include 'controller-signin.php'
            ?>
    </body>
</html>