
<?php
$whitelist = array(
    "mojang",
    "ElFo2K"
);
header('Content-Type: application/json');
echo json_encode($whitelist);
?>