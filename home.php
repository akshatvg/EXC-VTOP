<!DOCTYPE html>
<html lang="en">

<?php
include("templates/metas.php");
?>

<!-- URLs -->
<meta name="url" content="https://exc-vtop.akshatvg.com/home">
<meta property="og:url" content="https://exc-vtop.akshatvg.com/home">
<link rel="canonical" href="https://exc-vtop.akshatvg.com/home">

<?php
include("templates/header.php");
?>

<?php
include("templates/nav-vit.php");
?>

<!-- Main Content -->
<div class="container">
    <!-- Notice -->
    <div class="row mt-5">
        <div class="col s12">
            <div class="card white card-top-orange">
                <div class="card-content">
                    <span class="card-title black-text">Notice</span>
                    <ul id="spotlight">
                        <li class="text-colored">1. You need to complete atleast 90 hours worth of courses to be eligible for the EXC course completion.</li>
                        <li class="text-colored mt-2">2. A final project has to be submitted to the faculty coordinator of the club.</li>
                        <li class="text-colored mt-2">3. Gym and Swimming are also counted under EXC courses.</li>
                        <li class="text-colored mt-2">4. There are no grades for this course but it is compulsory to get a degree.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Cards -->
    <div class="row mb-5">
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
include("templates/footer.php");
?>

</html>