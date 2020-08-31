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
                    <!-- <tbody id="2ccCourses">
                        <?php foreach ($courses as $course) { ?>
                            <tr>
                                <td><?php echo htmlspecialchars($course['code']); ?></td>
                                <td><?php echo htmlspecialchars($course['title']); ?></td>
                                <td><?php echo htmlspecialchars($course['emp_name']); ?></td>
                                <td><?php echo htmlspecialchars($course['emp_school']); ?></td>
                                <td><?php echo htmlspecialchars($course['max_seats']); ?></td>
                            </tr>
                        <?php } ?>
                    </tbody> -->
                </table>
            </div>
        </div>
    </div>
</div>

<?php
include("templates/footer.php");
?>

</body>

</html>