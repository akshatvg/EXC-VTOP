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
require('db.php');
session_start();
// If form submitted, insert values into the database.
if (isset($_POST['regNo'])) {
    // removes backslashes
    $regNo = stripslashes($_REQUEST['regNo']);
    //escapes special characters in a string
    $regNo = mysqli_real_escape_string($con, $regNo);
    $studPass = stripslashes($_REQUEST['studPass']);
    $studPass = mysqli_real_escape_string($con, $studPass);
    //Checking is user existing in the database or not
    $query = "SELECT * FROM `students` WHERE regNo='$regNo' and studPass='" . $studPass . "'";
    $result = mysqli_query($con, $query);
    $rows = mysqli_num_rows($result);
    if ($rows == 1) {
        $_SESSION['regNo'] = $regNo;
        // Redirect user to index.php
        echo "<script>window.location.href='index';</script>";
    } else {
        echo "<script>M.toast({ html: 'Either this user doesn't exist in our database or the studPass you entered is wrong. });</script>";
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
                        <form method="POST" action="" name="loginStud">
                            <div class="row">
                                <div class="input-field col s12">
                                    <i class="material-icons prefix">account_circle</i>
                                    <input id="regNo" name="regNo" type="text" class="validate" pattern="[1-2][5-9][A-Za-z]{3}[0-9]{4}" required>
                                    <label for="regNo">Registration Number</label>
                                </div>
                                <div class="input-field col s12">
                                    <i class="material-icons prefix">lock</i>
                                    <input id="studPass" name="studPass" type="password" class="validate" required>
                                    <label for="studPass">studPass</label>
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


</body>

</html>