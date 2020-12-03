<?php
include 'internal/includes.php';

$apps = $db->query('SELECT * FROM apps')->fetch_all();

echo $templater->render("ViewAllApps", ["appdata" => $apps]);



?>
