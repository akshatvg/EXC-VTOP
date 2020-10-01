<?php
require 'connection.php';
// Connect to DB
$conn = mysqli_connect($host, $username, $password, $dbname);

// Check Connection
// if (!$conn) {
//     echo "<script>M.toast({ html: 'Database Connection Error' });</script>";
// }

// SQL Query for Getting All Courses
$sql = "SELECT code,title,emp_name,emp_school,max_seats FROM courses ORDER BY code";

// Make Query & Get Result
$result = mysqli_query($conn, $sql);

// Fetch Resulting Rows as an Array
$courses = mysqli_fetch_all($result, MYSQLI_ASSOC);

// Free Result to Free Memory
mysqli_free_result($result);

// Close Connection
mysqli_close($conn);

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
                        <?php foreach ($courses as $course) { ?>
                            <tr>
                                <td><?php echo htmlspecialchars($course['code']); ?></td>
                                <td><?php echo htmlspecialchars($course['title']); ?></td>
                                <td><?php echo htmlspecialchars($course['emp_name']); ?></td>
                                <td><?php echo htmlspecialchars($course['emp_school']); ?></td>
                                <td><?php echo htmlspecialchars($course['max_seats']); ?></td>
                            </tr>
                        <?php } ?>
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