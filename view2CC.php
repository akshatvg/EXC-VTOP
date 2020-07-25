<!DOCTYPE html>
<html lang="en">

<?php
include("templates/metas.php");
?>

<!-- URLs -->
<meta name="url" content="https://exc-vtop.akshatvg.com/view2CC">
<meta property="og:url" content="https://exc-vtop.akshatvg.com/view2CC">
<link rel="canonical" href="https://exc-vtop.akshatvg.com/view2CC">

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
        <h4>View All 2CC Courses</h4>
    </div>
    <!-- DataTable -->
    <div class="row">
        <div id="man" class="col s12">
            <div class="card">
                <table id="2ccCourseTable" class="responsive-table highlight centered">
                    <thead>
                        <tr>
                            <th>CODE </th>
                            <th>COURSE TITLE </th>
                            <th>EMPLOYEE NAME </th>
                            <th>EMPLOYEE SCHOOL </th>
                            <th>MAXIMUM SEATS </th>
                        </tr>
                    </thead>
                    <tbody id="2ccCourses">
                        <tr>
                            <td>EXC1002</td>
                            <td>Red Cross</td>
                            <td>PRIYANKAR SEN</td>
                            <td>CBST</td>
                            <td>100</td>
                        </tr>
                        <tr>
                            <td>EXC1002</td>
                            <td>Red Cross</td>
                            <td>PRIYANKAR SEN</td>
                            <td>CBST</td>
                            <td>100</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php
include("templates/footer.php");
?>

<body>

</html>