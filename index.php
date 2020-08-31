<!DOCTYPE html>
<html lang="en">

<?php
include("templates/metas.php");
?>

<!-- URLs -->
<meta name="url" content="https://exc-vtop.akshatvg.com">
<meta property="og:url" content="https://exc-vtop.akshatvg.com">
<link rel="canonical" href="https://exc-vtop.akshatvg.com">

<?php
include("templates/header.php");
?>

<?php
include("templates/nav.php");
?>

<!-- Main Content -->
<div class="container">
    <!-- Heading -->
    <div class="row mt-5">
        <h4>Dashboard</h4>
    </div>
    <!-- Cards -->
    <div class="row mb-5 mt-5">
        <div class="col s12 m4">
            <a href="view2CC.php">
                <div class="card white card-top-blue">
                    <div class="card-content">
                        <div class="center">
                            <i class="material-icons small text-colored">visibility</i>
                        </div>
                        <span class="card-title black-text center mt-2">View 2CC Courses</span>
                    </div>
                </div>
            </a>
        </div>
        <div class="col s12 m4">
            <a href="#!">
                <div class="card white card-top-green">
                    <div class="card-content">
                        <div class="center">
                        <i class="material-icons small text-colored-green">assessment</i>
                        </div>
                        <span class="card-title black-text center mt-2">Add Achievements</span>
                    </div>
                </div>
            </a>
        </div>
        <div class="col s12 m4">
            <a href="#!">
                <div class="card white card-top-orange">
                    <div class="card-content">
                        <div class="center">
                            <i class="material-icons small text-colored-orange">info</i>
                        </div>
                        <span class="card-title black-text center mt-2">Faculty Info</span>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>

<?php
include("templates/footer.php");
?>

</body>

</html>