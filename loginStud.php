<!DOCTYPE html>
<html lang="en">

<?php
include("templates/metas.php");
?>

<!-- URLs -->
<meta name="url" content="https://exc-vtop.akshatvg.com/loginStud">
<meta property="og:url" content="https://exc-vtop.akshatvg.com/loginStud">
<link rel="canonical" href="https://exc-vtop.akshatvg.com/loginStud">

<?php
include("templates/header.php");
?>

<?php
include("templates/nav-vit.php");
?>

<?php
require './vendor/autoload.php';

use deemru\Blake2b;

require('db.php');
session_start();
// If form submitted, insert values into the database.
if (isset($_POST['username'])) {
    // removes backslashes
    $username = stripslashes($_REQUEST['username']);
    //escapes special characters in a string
    $username = mysqli_real_escape_string($con, $username);
    $password = stripslashes($_REQUEST['password']);
    $password = mysqli_real_escape_string($con, $password);
    $blake2b = new Blake2b();
    $hash = $blake2b->hash($password);
    //Checking is user existing in the database or not
    $query = "SELECT * FROM `users` WHERE username='$username'
and password='" . md5($hash) . "'";
    $result = mysqli_query($con, $query) or die(mysql_error());
    $rows = mysqli_num_rows($result);
    if ($rows == 1) {
        $_SESSION['username'] = $username;
        // Redirect user to index.php
        header("Location: index");
    } else {
        echo "
			<div class='container'>
                        <div class='mt-5 white-box text-center'>
                            <h1 class='text-center'>The username/password you entered is incorrect or doesn't exist in our database.</h1>
                            <p class='mt-3'>Try logging in again. <a href='login'>Login</a>.</p>
                        </div>
                    </div>";
    }
} else {
    ?>
    <!-- Main Content -->
    <div class="container">
        <!-- Login Form -->
        <div class="row mt-5 mb-5">
            <div class="w-100 w-md-50 mx-auto">
                <div class="card white card-top-lightblue">
                    <div class="card-content">
                        <span class="card-title black-text">EXC-VTOP Login</span>
                        <form method="POST" action="loginStud.php">
                            <div class="row">
                                <div class="input-field col s12">
                                    <i class="material-icons prefix">account_circle</i>
                                    <input id="regNo" name="regNo" type="text" class="validate" pattern="[1-2][5-9][A-Za-z]{3}[0-9]{4}" required>
                                    <label for="regNo">Registration Number</label>
                                </div>
                                <div class="input-field col s12">
                                    <i class="material-icons prefix">lock</i>
                                    <input id="password" name="password" type="password" class="validate" required>
                                    <label for="password">Password</label>
                                </div>
                                <div class="center">
                                    <button name="loginStudBtn" class="btn btn-exc z-depth-0 waves-effect mb-n4" id="loginStudBtn" value="Login">Login</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } ?>

<?php
include("templates/footer.php");
?>

<?php

if (isset($_POST['loginStudBtn'])) {
    // echo htmlspecialchars($_POST['regNo']);
    // echo htmlspecialchars($_POST['password']);

    if (empty($_POST['regNo'])) {
        echo "<script>M.toast({ html: 'Registration Number cannot be empty' });</script>";
    } else {
        $regNo = $_POST['regNo'];
        if (!preg_match('/[1-2][5-9][A-Za-z]{3}[0-9]{4}/', $regNo)) {
            echo "<script>M.toast({ html: 'Registration Number does not follow the VIT prescribed format' });</script>";
        }
    }

    if (empty($_POST['password'])) {
        echo "<script>M.toast({ html: 'Password cannot be empty' });</script>";
    } else { }
}

?>

</body>

</html>