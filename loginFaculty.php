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
                    <div class="row">
                        <div class="input-field col s12">
                            <i class="material-icons prefix">account_circle</i>
                            <input id="empId" type="text" class="validate" maxlength="5" required>
                            <label for="empId">Employee ID</label>
                        </div>
                        <div class="input-field col s12">
                            <i class="material-icons prefix">lock</i>
                            <input id="password" type="password" class="validate" required>
                            <label for="password">Password</label>
                        </div>
                        <div class="center">
                            <button id="loginFaculty" class="btn btn-exc-green z-depth-0 waves-effect mb-n4">Login</button>
                        </div>
                    </div>
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