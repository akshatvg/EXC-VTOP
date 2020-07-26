<?php

if (isset($_POST['loginFacultyBtn'])) {
    echo htmlspecialchars($_POST['empId']);
    echo htmlspecialchars($_POST['password']);
}

?>

<!DOCTYPE html>
<html lang="en">

<?php
include("templates/metas.php");
?>

<!-- URLs -->
<meta name="url" content="https://exc-vtop.akshatvg.com/loginFaculty">
<meta property="og:url" content="https://exc-vtop.akshatvg.com/loginFaculty">
<link rel="canonical" href="https://exc-vtop.akshatvg.com/loginFaculty">

<?php
include("templates/header.php");
?>

<?php
include("templates/nav-vit.php");
?>

<!-- Main Content -->
<div class="container">
    <!-- Login Form -->
    <div class="row mt-5 mb-5">
        <div class="w-100 w-md-50 mx-auto">
            <div class="card white card-top-green">
                <div class="card-content">
                    <span class="card-title black-text">EXC-VTOP Faculty Login</span>
                    <form method="POST" action="loginFaculty.php">
                        <div class="row">
                            <div class="input-field col s12">
                                <i class="material-icons prefix">account_circle</i>
                                <input id="empId" name="empId" type="text" class="validate" maxlength="5" required>
                                <label for="empId">Employee ID</label>
                            </div>
                            <div class="input-field col s12">
                                <i class="material-icons prefix">lock</i>
                                <input id="password" name="password" type="password" class="validate" required>
                                <label for="password">Password</label>
                            </div>
                            <div class="center">
                                <button id="loginFacultyBtn" name="loginFacultyBtn" class="btn btn-exc-green z-depth-0 waves-effect mb-n4" value="Login">Login</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include("templates/footer.php");
?>

</body>

</html>