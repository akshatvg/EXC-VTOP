<!DOCTYPE html>
<html lang="en">

<?php
require("templates/metas.php");
?>

<!-- URLs -->
<meta name="url" content="https://exc-vtop.akshatvg.com/home">
<meta property="og:url" content="https://exc-vtop.akshatvg.com/home">
<link rel="canonical" href="https://exc-vtop.akshatvg.com/home">

<?php
require("templates/header.php");
?>

<?php
require("templates/nav-vit.php");
?>

<!-- Main Content -->
<div class="container">
    <!-- Cards -->
    <div class="row mt-5">
        <div class="col s12 m6">
            <div class="card white card-top-blue">
                <div class="card-content">
                    <span class="card-title black-text">VTOP for Students</span>
                    <p class="text-colored">With responsive fresh look and feel.</p>
                </div>
                <div class="card-action center">
                    <a href="loginStud.php" class="btn btn-exc z-depth-0 waves-effect">Login to EXC-VTOP</a>
                </div>
            </div>
        </div>
        <div class="col s12 m6">
            <div class="card white card-top-green">
                <div class="card-content">
                    <span class="card-title black-text">VTOP for Employees</span>
                    <p class="text-colored">With more information about students.</p>
                </div>
                <div class="card-action center">
                    <a href="loginFaculty.php" class="btn btn-exc-green z-depth-0 waves-effect">Faculty Login</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
require("templates/footer.php");
?>

</html>