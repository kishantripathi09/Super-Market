<?php
session_start();
if (!isset($_SESSION['email'])) {
    header('location: login.php');
}
session_destroy();
?>
<script>
    window.alert("Logged Out");
    location.href = "index.php";
</script>