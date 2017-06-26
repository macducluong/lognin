
<?php
include'session-signin.php';
?>
<html>
<head>
    <title></title>
    <link <link rel="stylesheet" href="css.html" />
</head>
<body>
<?php
echo $_SESSION['name'];
?>
<div CLASS="logo">ESHOP</div>
<div class="sing-in">
    <div class="content">
        <h1>Create account</h1>
        <form class="size-input" method="POST" action="<?php echo htmlspecialchars ($_SERVER['PHP_SELF'])?>">
            name
            <input class="name" type="text" name='name'><br>
            email
            <input class="email" type="email" name='email'><br>
            password
            <input class="password" type="password" name='password'><br>
            password
            <input class="password" type="password" name='reenterpassword'><br>
            <input type="submit" name="" value="Sign in" class="submit"><br>
            <input type="button" name="button" value="Create your Web account" class="button">
        </form>
    </div>
</div>
<?php
include 'controller-create.php'
?>
</body>
</html>