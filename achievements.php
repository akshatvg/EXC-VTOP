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
<meta name="url" content="https://exc-vtop.akshatvg.com/achievements">
<meta property="og:url" content="https://exc-vtop.akshatvg.com/achievements">
<link rel="canonical" href="https://exc-vtop.akshatvg.com/achievements">

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
        <div class="col s12">
            <div class="card material-table">
                <div class="table-header">
                    <span class="table-title">Current Achievements</span>
                    <div class="actions">
                        <a href="#" class="search-toggle waves-effect btn-flat nopadding"><i class="material-icons">search</i></a>
                    </div>
                </div>
                <table id="achTable" class="responsive-table highlight centered">
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
                        <?php
                        // Make Query & Get Result
                        // $sql = "SELECT studAchievements FROM students ORDER BY timestamp DESC LIMIT 1;";
                        $sql = "SELECT studAchievements FROM students;";
                        $result = mysqli_query($con, $sql);
                        $temp = array();
                        // Adds each records/row to $temp
                        while ($row = mysqli_fetch_row($result)) {
                            $temp[] = $row;
                        }
                        // Formats json from temp and shows/print on page
                        $data = json_encode($temp);
                        // print_r($data);
                        if (count($data->stand)) {
                            // Cycle through the array
                            foreach ($data->data as $idx => $data) {
                                // Output a row
                                echo "<tr>";
                                echo "<td>$data->type</td>";
                                echo "<td>$data->title</td>";
                                echo "</tr>";
                            }
                        }
                        ?>
                        <!-- Display courses -->
                        <tr>
                            <td>Google SWE</td>
                            <td>Internship</td>
                            <td>SWE intern at Google from Aug-2020 to Nov-2020</td>
                            <td><a href="#!"><i class="material-icons pointer green-text modal-trigger" href="#modal1">send</i></a></td>
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
<script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
<script src="libs/js/viewStudAch.js"></script>

</body>

</html>