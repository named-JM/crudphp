<?php
include "db_conn.php";

if (isset($_GET['id'])) {
    $id = intval($_GET['id']); // Ensure the id is an integer

    $sql = "DELETE FROM crud WHERE id = $id";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        header("Location: index.php?msg=Record deleted successfully");
        exit;
    } else {
        echo "Failed: " . mysqli_error($conn);
    }
} else {
    echo "Error: No ID parameter provided.";
}
?>
