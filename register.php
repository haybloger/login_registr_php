    <?php
    require 'core.php';
    require 'connect.php';
     
     
    if (!loggedin()) {
     
    if (isset($_POST['username'])&&isset($_POST['password'])&&isset($_POST['password_again'])&&isset($_POST['firstname'])&&isset($_POST['surname'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $password_again = $_POST['password_again'];
    $firstname = $_POST['firstname'];
    $surname = $_POST['surname'];
     
    if (!empty($username)&&!empty($password)&&!empty($password_again)&&!empty($firstname)&&!($surname)) {
    if ($password!=$password_again) {
    echo ' password do not match';
    } else {
     
     
    $query = "SELECT `username` FROM `test1` WHERE `username`'$username'";
    $query_run = mysql_query($query);
     
    if (mysql_num_rows($query_run)==1) {
    echo 'the username '.$username.' alrady .';
    } else {
    echo 'ok.';
    }
    }
    } else {
    echo 'all field';
    }
    }
    ?>
    <form action="register.php" method="POST">
    username <br><input type="text" name="username" value="<?php echo $username; ?>"><br><br>
    password <br><input type="password" name="password"><br><br>
    passwordagain <br><input type="password" name="password_again"><br><br>
    firstname <br><input type="text" name="firstname" value="<?php echo $firstname; ?>"><br><br>
    surname <br><input type="text" name="surname" value="<?php echo $surname; ?>"><br><br>
    <input type="submit" name="submit_reg" value="register">
    </form>
     
    <?php
    } else if (!loggedin()) {
    echo 'ok';
    }
     
    ?>
