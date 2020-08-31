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
        <h4>Your Achievements</h4>
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
                            <tr>
                                <td>HackerRank</td>
                                <td>Competition</td>
                                <td>Online coding Competition</td>
                                <td class="green-text ">Approved</td>
                                <td><a href="#!"><i class="material-icons blue-text">file_download</i></a></td>
                                <td><a href="#!"><i class="material-icons red-text text-accent-2">delete</i></a></td>
                            </tr>
                            <tr>
                                <td>Google SWE</td>
                                <td>Internship</td>
                                <td>SWE intern at Google from Aug-2020 to Nov-2020</td>
                                <td><a href="#!"><i class="material-icons pointer green-text modal-trigger" href="#modal1">send</i></a></td>

                                <!-- Modal Structure -->
                                <div id="modal1" class="modal">
                                    <div class="modal-content">
                                    <h4>Modal Header</h4>
                                    <p>A bunch of text</p>
                                    </div>
                                    <div class="modal-footer">
                                    <a href="#!" class="modal-close waves-effect waves-green btn-flat">Agree</a>
                                    </div>
                                </div>
                                <!-- modal end -->
                                
                                <td><a href="#!"><i class="material-icons blue-text">file_download</i></a></td>
                                <td><a href="#!"><i class="material-icons red-text text-accent-2">delete</i></a></td>
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

</body>

</html>