<?php
// template
$this->layout('template', ['title' => 'View App']);
if (!isset($appdata['Name']))
{
    die("Invalid AppID");
}
$name = htmlspecialchars($appdata['Name']);
$id = htmlspecialchars($appdata['AppID']);
$lastupdate = $appdata['LastUpdated'];

if ($name == "SteamDB Unknown App $id" && isset($appdata['LastKnownName']) && !empty($appdata['LastKnownName']))
{
    $name = $appdata['LastKnownName'];
}

?>
<div class="w-600 mw-full">
  <div class="card p-0">
    <?php
    foreach ($appinfo as $key) {
      if( $key["Key"] == 26) {
        echo '<img src="';
        echo "https://cdn.cloudflare.steamstatic.com/steam/apps/$id/library_hero.jpg";
        echo '" class="img-fluid rounded-top" style="object-fit: fill;" alt="...">';
      }
    }
    ?>
    <div class="content">
      <h2 class="content-title">
        <span class="badge"><?php echo $apptypes[$appdata['AppType']]['DisplayName']; ?></span>
        <?= $name ?>
      </h2>
      <div>
        <span class="text-muted">
          <i class="fa fa-clock-o mr-5" aria-hidden="true"></i>Last updated: <?= $lastupdate ?>
        </span>
      </div>
      <div>
      </div>
    </div>
    <hr />
    <div class="content">
      <h2 class="content-title">
        App keys
      </h2>
<?php
foreach ($appinfo as $key)
{
    if (!isset($appinfo[$key["Key"]]))
    {
        continue;
    }
    $value = $misc->array_search_by_key($appinfo, "Key", $keyinfo[$key["Key"]]["ID"]);
    if (isset($value[0]))
    {
        echo '<div>
          <strong>'.$keyinfo[$key["Key"]]["DisplayName"].'</strong> -
          '.$value[0]["Value"].'
        </div>';
    }
}
?>
      <hr />
    </div>
    <div class="content">
      <h2 class="content-title">
        App history
      </h2>
      <?php
       foreach ($apphistory as $key) {
        if (isset($key["Action"])) {
         echo "Change type: " . htmlspecialchars($key["Action"]);
         echo "<br>Old value: " . htmlspecialchars($key["OldValue"]);
         echo "<br>New value: " . htmlspecialchars($key["NewValue"]);
         echo "<br> Time:" . htmlspecialchars($key["Time"]);
         // htmlspecialchars just in case a developer is NAUGHTY
         echo "<hr>";
       }
       }
       ?>

    </div>
  </div>
</div>
