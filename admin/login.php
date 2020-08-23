<link href="login.css" rel="stylesheet">


<?php
if (isset($_GET['action']) and $_GET['action'] == 'logout') {
    session_start();
    unset($_SESSION['username']);
    unset($_SESSION['password']);
    unset($_SESSION['logged_in']);
}
?>
<html lang="en">

<head>
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="fileBrowser.css">
</head>

<body>

    <div>
        <?php
        $msg = '';
        if (
            isset($_POST['login'])
            && !empty($_POST['username'])
            && !empty($_POST['password'])
        ) {
            if (
                $_POST['username'] == 'Greta' &&
                $_POST['password'] == '1234'
            ) {
                $_SESSION['logged_in'] = true;
                $_SESSION['timeout'] = time();
                $_SESSION['username'] = 'Greta';
            } else {
                $msg = 'Wrong username or password';
            }
        }
        ?>
    </div>
    <div>


        <div class="card card-login" style="position: absolute;">
            <h4>Login</h4>
            <div class="card-body">
                <div class="container">
                    <form class="login-from" action="categories.php" method="post">

                        <div class="form-group">
                            <label for="exampleInputEmail1">Username</label>
                            <input type="text" class="form-control" name="username" placeholder="username = Greta" required autofocus>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" name="password" placeholder="password = 1234" required>
                        </div>

                        <button type="submit" class="btn btn-primary" name="login">Login</button>
                    </form>
                </div>
            </div>
        </div>





    </div>

    <script scr="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
</body>

</html>