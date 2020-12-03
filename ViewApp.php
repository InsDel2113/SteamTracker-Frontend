<?php
include 'internal/includes.php';

if ( !isset($_GET['appid']) ) {
  die("Invalid AppID");
}

$apps = $db->query('SELECT * FROM apps WHERE AppID=?', $_GET['appid'])->fetch_array();
$app_info = $db->query('SELECT * FROM appsinfo WHERE AppID=?', $_GET['appid'])->fetch_all();
$key_info = $db->query('SELECT * FROM keynames')->fetch_all();
$app_types = $db->query('SELECT * FROM appstypes')->fetch_all();
$app_history = $db->query('SELECT * FROM appshistory WHERE AppID = ? ORDER BY Time DESC;', $_GET['appid'])->fetch_all();
// cache these to make faster
// or enable php's automatic caching stuff

echo $templater->render("ViewApp", ["appdata" => $apps, "appinfo" => $app_info, "keyinfo" => $key_info, "misc" => $misc, "apptypes" => $app_types, "apphistory" => $app_history]);



?>
