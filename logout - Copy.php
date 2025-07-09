<?php
include("include/connect.php");
session_start();

if (isset($_SESSION['aid'])) {
    $aid = $_SESSION['aid'];
    $query = "DELETE FROM CART WHERE aid = $aid";
    $result = mysqli_query($con, $query);
    
    // Clear session variables
    $_SESSION = array();
    
    // Destroy the session
    session_destroy();
}
session_destroy();
// Redirect the user to the index page
header("Location: index.php");
exit();
?>
