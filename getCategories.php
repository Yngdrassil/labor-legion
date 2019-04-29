<?php
    require("./mysqli_connect.php");

    function getCategories() {
        global $mysqli;
        $sql = "SELECT category FROM categories";
        $result = $mysqli->query($sql);

        if($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $category = $row['category'];
                echo "<option>$category</option>";
            }
        }
    }

?>
