<?php
require('db.php');
session_start();
if (!isset($_SESSION["regNo"])) {
    header("Location: loginStud");
    exit();
}
?>

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
    <!-- Table -->
    <div class="row">
        <div class="col s12">
            <div class="card material-table">
                <div class="table-header">
                    <span class="table-title">Available Courses</span>
                    <div class="actions">
                        <a href="#" class="search-toggle waves-effect btn-flat nopadding"><i class="material-icons">search</i></a>
                    </div>
                </div>
                <table id="2ccCourseTable" class="responsive-table highlight centered">
                    <thead>
                        <tr>
                            <th>CODE </th>
                            <th>COURSE NAME </th>
                            <th>FACULTY NAME </th>
                            <th>CLUB NAME </th>
                        </tr>
                    </thead>
                    <tbody id="2ccCourses">
                        <?php
                        // Make Query & Get Result
                        $sql = "SELECT courseCode,courseName,facultyCoord,clubName FROM 2ccCourses ORDER BY courseCode";
                        $result = mysqli_query($con, $sql);
                        // Associative array
                        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                        ?>
                        <!-- Display courses -->
                        <td><?php echo htmlspecialchars($row['courseCode']); ?></td>
                        <td><?php echo htmlspecialchars($row['courseName']); ?></td>
                        <td><?php echo htmlspecialchars($row['facultyCoord']); ?></td>
                        <td><?php echo htmlspecialchars($row['clubName']); ?></td>
                        <?php
                        // Free result set
                        mysqli_free_result($result);
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php
include("templates/footer.php");
?>
<script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
<script src="libs/js/view2CCTable.js"></script>

<body>

</html>