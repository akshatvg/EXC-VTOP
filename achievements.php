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
        <h5>Your Achievements</h5>
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
                                <td><a href="#!"><i class="material-icons red-text text-accent-2 modal-trigger" href="#modal2">delete</i></a></td>
                                <!-- Modal Structure -->
                                <div id="modal2" class="modal">
                                    <div class="modal-content">
                                    <h6>Are you sure you want to delete achievement?</h6>
                                    <p class="red-text">This action cannot be undone!</p>
                                    </div>
                                    <div class="modal-footer">
                                    <a href="#!" class="modal-close waves-effect waves-green btn-flat">Delete</a>
                                    </div>
                                </div>
                                <!-- modal end -->
                            </tr>
                            <tr>
                                <td>Google SWE</td>
                                <td>Internship</td>
                                <td>SWE intern at Google from Aug-2020 to Nov-2020</td>
                                <td><a href="#!"><i class="material-icons pointer green-text modal-trigger" href="#modal1">send</i></a></td>

                                <!-- Modal Structure -->
                                <div id="modal1" class="modal">
                                    <div class="modal-content">
                                    <h5>Google SWE</h5>
                                    <br>
                                    <h6>Internship</h6>
                                    <!-- <br> -->
                                    <p>SWE intern at Google from Aug-2020 to Nov-2020</p>
                                    <br>
                                    <br>
                                    <label for="teacher">Select teacher</label>
                                    <select name="teacher" id="teacher">
                                    <option value="">teacher</option>
                                    <option value="volvo">12460 - Sanjiban Shekhar Roy</option>
                                    <option value="volvo">12461 - Dharmendra Singh</option>
                                    <option value="volvo">12462 - JayaKumar S</option>
                                    <option value="volvo">12463 - Geetanjali J</option>
                                    <option value="volvo">12464 - Clement J</option>
                                    </select>
                                    </div>
                                    <div class="modal-footer">
                                    <a href="#!" class="modal-close waves-effect waves-green btn-flat">Agree</a>
                                    </div>
                                </div>
                                <!-- modal end -->
                                
                                <td><a href="#!"><i class="material-icons blue-text">file_download</i></a></td>
                                <td><a href="#!"><i class="material-icons red-text text-accent-2 modal-trigger" href="#modal2">delete</i></a></td>
                            </tr>
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