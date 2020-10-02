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
        <h5>Courses</h5>
    </div>
    <!-- DataTable -->
    <div class="row">
        <div id="man" class="col s12">
            <div class="card">
                <table id="2ccCourseTable" class="responsive-table highlight centered">
                    <thead>
                        <tr>
                            <th>TITLE </th>
                            <th>TYPE </th>
                            <th>DESCRIPTION </th>
                            <th>APPROVAL STATUS</th>
                            <th>VIEW</th>
                            <th>DELETE</th>
                        </tr>
                    </thead>
                    <tbody id="2ccCourses">
                        <!-- <?php foreach ($courses as $course) { ?>
                            <tr>
                                <td><?php echo htmlspecialchars($course['code']); ?></td>
                                <td><?php echo htmlspecialchars($course['title']); ?></td>
                                <td><?php echo htmlspecialchars($course['emp_name']); ?></td>
                                <td><?php echo htmlspecialchars($course['emp_school']); ?></td>
                                <td><?php echo htmlspecialchars($course['max_seats']); ?></td>
                            </tr>
                        <?php } ?> -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="row mt-5">
        <h5>Add Achievements</h5>
    </div>
    <form>
    <div class="row mx-4">
            <div class="input-field col s6" style="width:250px;">
                <input id="title" type="text" class="validate">
                <label for="title">Title</label>
            </div>

            <div class="input-field col s12" style="width:250px;">
            <select>
            <option value="" disabled selected>Type</option>
            <option value="1">Internship</option>
            <option value="2">Hack-a-thon</option> 
            <option value="3">Competition</option>
            </select>
            </div>

    </div>
    <!-- <div class="row"> -->
    <div class="input-field col s6 mx-4">
          <input id="description" type="text" class="validate">
          <label for="description">Description</label>
    </div>
    <div class="row mx-5">
    Input file:
    <input type="file" name="fileToUpload" id="fileToUpload" style="padding:20px">
    <input type="submit" value="Add achievement" name="submit" class="btn blue">
    <!-- </div> -->
    
    </div>
    </form>
</div>

<?php
include("templates/footer.php");
?>

</body>

</html>