<?php

// sql injection

$autor = addslashes($_POST["usuario"]);

$sql = "SELECT * FROM posts WHERE autor = '$autor'";


?>