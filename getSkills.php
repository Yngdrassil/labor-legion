<?php
    require("mysqli_connect.php");

    global $mysqli;
    $category = $_GET['category'];
    echo "<div> $category </div>";
    $sql = "SELECT skill_id,skill FROM skills WHERE category=".$category;
    $result = mysqli_query($mysqli, $sql);

    $skills_array = array();
    while($row = mysqli_fetch_array($result)) {
        $skill_id = $row['skill_id'];
        $skill = $row['skill'];

        $skills_array[] = array('skill_id' => $skill_id, 'skill' => $skill);
    }
    echo json_encode($skills_array);
?>
