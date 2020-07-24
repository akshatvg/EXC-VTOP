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

<!-- Main Content -->
<div class="container">
    <!-- Login Form -->
    <div class="row mt-5 mb-5">
        <div class="w-100 w-md-50 mx-auto">
            <div class="card white card-top-lightblue">
                <div class="card-content">
                    <span class="card-title black-text">EXC-VTOP Login</span>
                    <div class="row">
                        <div class="input-field col s12">
                            <i class="material-icons prefix">account_circle</i>
                            <input id="regNo" type="text" class="validate" pattern="[1-2][5-9][A-Za-z]{3}[0-9]{4}" required>
                            <label for="regNo">Registration Number</label>
                        </div>
                        <div class="input-field col s12">
                            <i class="material-icons prefix">lock</i>
                            <input id="password" type="password" class="validate" required>
                            <label for="password">Password</label>
                        </div>
                        <div class="center">
                            <a href="#!" class="btn btn-exc z-depth-0 waves-effect mb-n4">Login</a>
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

</html>