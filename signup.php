<h1>Hej</h1>

<?php
var_dump($_GET);

$nameFromForm = $_GET["name"]
$emailFromForm = $_GET["email"]

echo("you have registerd " . $nameFromForm . " with " . $emailFromForm . ". Thank You!");

$data = $nameFromForm . ", " . $emailFromForm ;

file_put_contents("signups.txt", $data, FILE_APEND);

?>