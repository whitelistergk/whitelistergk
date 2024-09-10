
<?php
$whitelist = array(
    "mojang"
);
header('Content-Type: application/json');
echo json_encode($whitelist);
?>