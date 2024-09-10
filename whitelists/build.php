<?php
$whitelist = array(
    "whitelist" => array(
        "ElFo2K",
        "SoyFire",
        "ImClassicMc",
        "ItsNavii"
    ),
);

header('Content-Type: application/json');
echo json_encode($whitelist);
?>
