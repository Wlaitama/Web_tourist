<?php

    $sql = "SELECT * FROM table_mesto";
    $result = mysqli_query($link, $sql);

    $food = mysqli_fetch_assoc($result);

?>