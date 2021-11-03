<?php
    include("connectDB.php");
    connect_db();
    session_start();;
    session_destroy();
    header("location: ../decorator/index.php");
?>